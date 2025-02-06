<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ActivityNotificationResponseDto
{
    /**
     * Environment ID of the notification
     *
     * @var string $environmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_environmentId')]
    public string $environmentId;

    /**
     * Organization ID of the notification
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_organizationId')]
    public string $organizationId;

    /**
     * Subscriber ID of the notification
     *
     * @var string $subscriberId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_subscriberId')]
    public string $subscriberId;

    /**
     * Transaction ID of the notification
     *
     * @var string $transactionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transactionId')]
    public string $transactionId;

    /**
     * Unique identifier of the notification
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Template ID of the notification
     *
     * @var ?string $templateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_templateId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $templateId = null;

    /**
     * Digested Notification ID
     *
     * @var ?string $digestedNotificationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_digestedNotificationId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $digestedNotificationId = null;

    /**
     * Creation time of the notification
     *
     * @var ?string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     * Last updated time of the notification
     *
     * @var ?string $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedAt = null;

    /**
     * $channels
     *
     * @var ?array<StepTypeEnum> $channels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\StepTypeEnum>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $channels = null;

    /**
     * Subscriber of the notification
     *
     * @var ?ActivityNotificationSubscriberResponseDto $subscriber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscriber')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ActivityNotificationSubscriberResponseDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ActivityNotificationSubscriberResponseDto $subscriber = null;

    /**
     * Template of the notification
     *
     * @var ?ActivityNotificationTemplateResponseDto $template
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('template')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ActivityNotificationTemplateResponseDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ActivityNotificationTemplateResponseDto $template = null;

    /**
     * Jobs of the notification
     *
     * @var ?array<ActivityNotificationJobResponseDto> $jobs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('jobs')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\ActivityNotificationJobResponseDto>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $jobs = null;

    /**
     * Payload of the notification
     *
     * @var ?ActivityNotificationResponseDtoPayload $payload
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payload')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ActivityNotificationResponseDtoPayload|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ActivityNotificationResponseDtoPayload $payload = null;

    /**
     * Tags associated with the notification
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     * Controls associated with the notification
     *
     * @var ?Controls $controls
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('controls')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\Controls|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Controls $controls = null;

    /**
     * To field for subscriber definition
     *
     * @var ?ActivityNotificationResponseDtoTo $to
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('to')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ActivityNotificationResponseDtoTo|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ActivityNotificationResponseDtoTo $to = null;

    /**
     * @param  string  $environmentId
     * @param  string  $organizationId
     * @param  string  $subscriberId
     * @param  string  $transactionId
     * @param  ?string  $id
     * @param  ?string  $templateId
     * @param  ?string  $digestedNotificationId
     * @param  ?string  $createdAt
     * @param  ?string  $updatedAt
     * @param  ?array<StepTypeEnum>  $channels
     * @param  ?ActivityNotificationSubscriberResponseDto  $subscriber
     * @param  ?ActivityNotificationTemplateResponseDto  $template
     * @param  ?array<ActivityNotificationJobResponseDto>  $jobs
     * @param  ?ActivityNotificationResponseDtoPayload  $payload
     * @param  ?array<string>  $tags
     * @param  ?Controls  $controls
     * @param  ?ActivityNotificationResponseDtoTo  $to
     * @phpstan-pure
     */
    public function __construct(string $environmentId, string $organizationId, string $subscriberId, string $transactionId, ?string $id = null, ?string $templateId = null, ?string $digestedNotificationId = null, ?string $createdAt = null, ?string $updatedAt = null, ?array $channels = null, ?ActivityNotificationSubscriberResponseDto $subscriber = null, ?ActivityNotificationTemplateResponseDto $template = null, ?array $jobs = null, ?ActivityNotificationResponseDtoPayload $payload = null, ?array $tags = null, ?Controls $controls = null, ?ActivityNotificationResponseDtoTo $to = null)
    {
        $this->environmentId = $environmentId;
        $this->organizationId = $organizationId;
        $this->subscriberId = $subscriberId;
        $this->transactionId = $transactionId;
        $this->id = $id;
        $this->templateId = $templateId;
        $this->digestedNotificationId = $digestedNotificationId;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->channels = $channels;
        $this->subscriber = $subscriber;
        $this->template = $template;
        $this->jobs = $jobs;
        $this->payload = $payload;
        $this->tags = $tags;
        $this->controls = $controls;
        $this->to = $to;
    }
}