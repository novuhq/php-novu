<?php

declare(strict_types=1);

namespace novu\Hooks;

use Exception;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use ReflectionClass;

class NovuHooks implements AfterSuccessHook, BeforeRequestHook, SDKInitHook
{
    private bool $mutex = false;

    public function sdkInit(string $baseUrl, \GuzzleHttp\ClientInterface $client): SDKRequestContext
    {
        $reflection = new ReflectionClass($client);
        $property = $reflection->getProperty('clientOptions');
        $property->setAccessible(true);
        $clientOptions = $property->getValue($client);
        $authorizationHeader = $clientOptions['headers']['Authorization'] ?? null;

        $stack = HandlerStack::create();
        $stack->push(Middleware::mapRequest(function ($request) use ($authorizationHeader) {
            $request = $request->withHeader('Authorization', 'ApiKey ' . $authorizationHeader);

            return $request;
        }));

        return new SDKRequestContext($baseUrl, new Client([
            'handler' => $stack,
            'base_uri' => $baseUrl,
        ]));
    }

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
        if ($this->mutex) {
            usleep(1000);
        }

        $this->mutex = true;

        $timestamp = (int) (microtime(true) * 1000);
        $randomStr = $this->generateSecureRandomString(9);

        $this->mutex = false;

        return (string)$timestamp . $randomStr;
    }

    public function beforeRequest(BeforeRequestContext $context, RequestInterface $request): RequestInterface
    {
        $idempotencyKey = 'Idempotency-Key';

        // Modify to avoid negated boolean check
        if (! $request->hasHeader($idempotencyKey)) {
            try {
                $key = $this->generateIdempotencyKey();
                $request = $request->withHeader($idempotencyKey, $key);
            } catch (Exception $e) {
                throw new Exception("Failed to generate idempotency key: ".$e->getMessage());
            }
        }

        return $request;
    }

    public function afterSuccess(AfterSuccessContext $context, ResponseInterface $response): ResponseInterface
    {
        // Check content type
        $contentType = $response->getHeaderLine('Content-Type');
        if ($response->getBody()->getSize() === 0 || !str_contains($contentType, 'application/json')) {
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
            $newBody = Utils::streamFor(json_encode($jsonResponse['data']));
            $response = $response->withBody($newBody);
        }

        return $response;
    }
}
