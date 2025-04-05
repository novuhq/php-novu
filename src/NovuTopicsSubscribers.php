<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu;

use novu\Hooks\HookContext;
use novu\Models\Components;
use novu\Models\Operations;
use novu\Utils\Options;
use novu\Utils\Retry;
use novu\Utils\Retry\RetryUtils;
use Speakeasy\Serializer\DeserializationContext;

class NovuTopicsSubscribers
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * Subscribers addition
     *
     * Add subscribers to a topic by key
     *
     * @param  Components\AddSubscribersRequestDto  $addSubscribersRequestDto
     * @param  string  $topicKey
     * @param  ?string  $idempotencyKey
     * @return Operations\TopicsControllerAssignResponse
     * @throws \novu\Models\Errors\APIException
     */
    public function assign(Components\AddSubscribersRequestDto $addSubscribersRequestDto, string $topicKey, ?string $idempotencyKey = null, ?Options $options = null): Operations\TopicsControllerAssignResponse
    {
        $retryConfig = null;
        if ($options) {
            $retryConfig = $options->retryConfig;
        }
        if ($retryConfig === null && $this->sdkConfiguration->retryConfig) {
            $retryConfig = $this->sdkConfiguration->retryConfig;
        } else {
            $retryConfig = new Retry\RetryConfigBackoff(
                initialIntervalMs: 1000,
                maxIntervalMs: 30000,
                exponent: 1.5,
                maxElapsedTimeMs: 3600000,
                retryConnectionErrors: true,
            );
        }
        $retryCodes = null;
        if ($options) {
            $retryCodes = $options->retryCodes;
        }
        if ($retryCodes === null) {
            $retryCodes = [
                '408',
                '409',
                '429',
                '5XX',
            ];
        }
        $request = new Operations\TopicsControllerAssignRequest(
            topicKey: $topicKey,
            addSubscribersRequestDto: $addSubscribersRequestDto,
            idempotencyKey: $idempotencyKey,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/topics/{topicKey}/subscribers', Operations\TopicsControllerAssignRequest::class, $request);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'addSubscribersRequestDto', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $httpOptions = array_merge_recursive($httpOptions, $body);
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);
        $hookContext = new HookContext($baseUrl, 'TopicsController_assign', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = RetryUtils::retryWrapper(fn () => $this->sdkConfiguration->client->send($httpRequest, $httpOptions), $retryConfig, $retryCodes);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['400', '401', '403', '404', '405', '409', '413', '414', '415', '422', '429', '4XX', '500', '503', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Components\AssignSubscriberToTopicDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\TopicsControllerAssignResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    assignSubscriberToTopicDto: $obj);

                return $response;
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['414'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['400', '401', '403', '404', '405', '409', '413', '415'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['422'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ValidationErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['429'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['500'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['503'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \novu\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Subscribers removal
     *
     * Remove subscribers from a topic
     *
     * @param  Components\RemoveSubscribersRequestDto  $removeSubscribersRequestDto
     * @param  string  $topicKey
     * @param  ?string  $idempotencyKey
     * @return Operations\TopicsControllerRemoveSubscribersResponse
     * @throws \novu\Models\Errors\APIException
     */
    public function remove(Components\RemoveSubscribersRequestDto $removeSubscribersRequestDto, string $topicKey, ?string $idempotencyKey = null, ?Options $options = null): Operations\TopicsControllerRemoveSubscribersResponse
    {
        $retryConfig = null;
        if ($options) {
            $retryConfig = $options->retryConfig;
        }
        if ($retryConfig === null && $this->sdkConfiguration->retryConfig) {
            $retryConfig = $this->sdkConfiguration->retryConfig;
        } else {
            $retryConfig = new Retry\RetryConfigBackoff(
                initialIntervalMs: 1000,
                maxIntervalMs: 30000,
                exponent: 1.5,
                maxElapsedTimeMs: 3600000,
                retryConnectionErrors: true,
            );
        }
        $retryCodes = null;
        if ($options) {
            $retryCodes = $options->retryCodes;
        }
        if ($retryCodes === null) {
            $retryCodes = [
                '408',
                '409',
                '429',
                '5XX',
            ];
        }
        $request = new Operations\TopicsControllerRemoveSubscribersRequest(
            topicKey: $topicKey,
            removeSubscribersRequestDto: $removeSubscribersRequestDto,
            idempotencyKey: $idempotencyKey,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/topics/{topicKey}/subscribers/removal', Operations\TopicsControllerRemoveSubscribersRequest::class, $request);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'removeSubscribersRequestDto', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $httpOptions = array_merge_recursive($httpOptions, $body);
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);
        $hookContext = new HookContext($baseUrl, 'TopicsController_removeSubscribers', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = RetryUtils::retryWrapper(fn () => $this->sdkConfiguration->client->send($httpRequest, $httpOptions), $retryConfig, $retryCodes);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['400', '401', '403', '404', '405', '409', '413', '414', '415', '422', '429', '4XX', '500', '503', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['204'])) {
            $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

            return new Operations\TopicsControllerRemoveSubscribersResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['414'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['400', '401', '403', '404', '405', '409', '413', '415'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['422'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ValidationErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['429'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['500'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\novu\Models\Errors\ErrorDto', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \novu\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['503'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \novu\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \novu\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}