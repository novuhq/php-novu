<?php

declare(strict_types=1);

namespace novu\Hooks;

use Exception;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class NovuHooks implements
    BeforeRequestHook,
    AfterSuccessHook
{
    private $mutex = false;


    /**
     * Generate a cryptographically secure random string
     */
    private function generateSecureRandomString(int $length): string
    {
        $charset = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $result = '';
        $charsetLength = strlen($charset);

        for ($i = 0; $i < $length; $i++) {
            $result .= $charset[random_int(0, $charsetLength - 1)];
        }

        return $result;
    }

    /**
     * Generate a unique idempotency key
     */
    private function generateIdempotencyKey(): string
    {
        // Use a mutex-like mechanism (simple lock)
        if ($this->mutex) {
            usleep(1000); // Small delay to prevent collision
        }
        $this->mutex = true;

        $timestamp = (int)(microtime(true) * 1000);
        $randomStr = $this->generateSecureRandomString(9);

        $this->mutex = false;
        return (string)$timestamp . $randomStr;
    }

    public function beforeRequest(BeforeRequestContext $context, RequestInterface $request): RequestInterface
    {
        $authKey = 'Authorization';
        $idempotencyKey = 'Idempotency-Key';
        $apiKeyPrefix = 'ApiKey';

        // Ensure Authorization header is prefixed with ApiKey if needed
        $authHeader = $request->getHeaderLine($authKey);
        if ($authHeader && !str_starts_with($authHeader, $apiKeyPrefix)) {
            $request = $request->withHeader($authKey, "$apiKeyPrefix $authHeader");
        }

        // Add idempotency key if not present
        if (!$request->hasHeader($idempotencyKey)) {
            try {
                $key = $this->generateIdempotencyKey();
                $request = $request->withHeader($idempotencyKey, $key);
            } catch (Exception $e) {
                throw new Exception("Failed to generate idempotency key: " . $e->getMessage());
            }
        }

        return $request;
    }

    public function afterSuccess(AfterSuccessContext $context, ResponseInterface $response): ResponseInterface
    {
        // Check content type
        $contentType = $response->getHeaderLine('Content-Type');
        if (!$response->getBody() || !str_contains($contentType, 'application/json')) {
            return $response;
        }

        // Read the body
        $bodyContent = $response->getBody()->getContents();

        // If body is empty, return original response
        if (empty($bodyContent)) {
            return $response;
        }

        // Try to parse JSON
        $jsonResponse = json_decode($bodyContent, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            // If not JSON, restore original body
            return $response;
        }

        // Check if response has a 'data' key
        if (isset($jsonResponse['data'])) {
            $newBody = json_encode($jsonResponse['data']);
            $response->getBody()->rewind();
            $response->getBody()->write($newBody);
            $response->getBody()->rewind();
        }

        return $response;
    }
}
