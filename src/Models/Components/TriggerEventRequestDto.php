<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class TriggerEventRequestDto
{
    /**
     * The trigger identifier of the workflow you wish to send. This identifier can be found on the workflow page.
     *
     * @var string $workflowId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $workflowId;

    /**
     * The recipients list of people who will receive the notification.
     *
     * @var array<SubscriberPayloadDto|TopicPayloadDto|string>|string|SubscriberPayloadDto|TopicPayloadDto $to
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('to')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\SubscriberPayloadDto|\novu\Models\Components\TopicPayloadDto|string>|string|\novu\Models\Components\SubscriberPayloadDto|\novu\Models\Components\TopicPayloadDto')]
    public array|string|SubscriberPayloadDto|TopicPayloadDto $to;

    /**
     * The payload object is used to pass additional custom information that could be 
     *
     *     used to render the workflow, or perform routing rules based on it. 
     *       This data will also be available when fetching the notifications feed from the API to display certain parts of the UI.
     *
     * @var ?array<string, mixed> $payload
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payload')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $payload = null;

    /**
     * This could be used to override provider specific configurations
     *
     * @var ?array<string, array<string, mixed>> $overrides
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('overrides')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, array<string, mixed>>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $overrides = null;

    /**
     * A unique identifier for this transaction, we will generate a UUID if not provided.
     *
     * @var ?string $transactionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transactionId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transactionId = null;

    /**
     * It is used to display the Avatar of the provided actor's subscriber id or actor object.
     *
     *
     *     If a new actor object is provided, we will create a new subscriber in our system
     *
     * @var string|SubscriberPayloadDto|null $actor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('actor')]
    #[\Speakeasy\Serializer\Annotation\Type('string|\novu\Models\Components\SubscriberPayloadDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|SubscriberPayloadDto|null $actor = null;

    /**
     * It is used to specify a tenant context during trigger event.
     *
     *     Existing tenants will be updated with the provided details.
     *
     * @var string|TenantPayloadDto|null $tenant
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tenant')]
    #[\Speakeasy\Serializer\Annotation\Type('string|\novu\Models\Components\TenantPayloadDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|TenantPayloadDto|null $tenant = null;

    /**
     * @param  string  $workflowId
     * @param  array<SubscriberPayloadDto|TopicPayloadDto|string>|string|SubscriberPayloadDto|TopicPayloadDto  $to
     * @param  ?array<string, mixed>  $payload
     * @param  ?array<string, array<string, mixed>>  $overrides
     * @param  ?string  $transactionId
     * @param  string|SubscriberPayloadDto|null  $actor
     * @param  string|TenantPayloadDto|null  $tenant
     */
    public function __construct(string $workflowId, array|string|SubscriberPayloadDto|TopicPayloadDto $to, ?array $payload = null, ?array $overrides = null, ?string $transactionId = null, string|SubscriberPayloadDto|null $actor = null, string|TenantPayloadDto|null $tenant = null)
    {
        $this->workflowId = $workflowId;
        $this->to = $to;
        $this->payload = $payload;
        $this->overrides = $overrides;
        $this->transactionId = $transactionId;
        $this->actor = $actor;
        $this->tenant = $tenant;
    }
}