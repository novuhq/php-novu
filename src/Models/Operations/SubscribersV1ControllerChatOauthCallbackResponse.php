<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;


class SubscribersV1ControllerChatOauthCallbackResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * $headers
     *
     * @var array<string, array<string>> $headers
     */
    public array $headers;

    /**
     * Returns plain text response.
     *
     * @var ?string $res
     */
    public ?string $res = null;

    /**
     * Redirects to the specified URL.
     *
     * @var ?string $string
     */
    public ?string $string = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  array<string, array<string>>  $headers
     * @param  ?string  $res
     * @param  ?string  $string
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?string $res = null, ?string $string = null, ?array $headers = [])
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->headers = $headers;
        $this->res = $res;
        $this->string = $string;
    }
}