<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class NotificationFeedItemDto
{
    /**
     * Unique identifier for the notification.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    public string $id;

    /**
     * Identifier for the template used to generate the notification.
     *
     * @var string $templateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_templateId')]
    public string $templateId;

    /**
     * Identifier for the environment where the notification is sent.
     *
     * @var string $environmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_environmentId')]
    public string $environmentId;

    /**
     * Identifier for the message template used.
     *
     * @var string $messageTemplateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_messageTemplateId')]
    public string $messageTemplateId;

    /**
     * Identifier for the organization sending the notification.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_organizationId')]
    public string $organizationId;

    /**
     * Unique identifier for the notification instance.
     *
     * @var string $notificationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_notificationId')]
    public string $notificationId;

    /**
     * Unique identifier for the subscriber receiving the notification.
     *
     * @var string $subscriberId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_subscriberId')]
    public string $subscriberId;

    /**
     * Identifier for the feed associated with the notification.
     *
     * @var string $feedId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_feedId')]
    public string $feedId;

    /**
     * Identifier for the job that triggered the notification.
     *
     * @var string $jobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_jobId')]
    public string $jobId;

    /**
     * Unique identifier for the transaction associated with the notification.
     *
     * @var string $transactionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transactionId')]
    public string $transactionId;

    /**
     * The main content of the notification.
     *
     * @var string $content
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content')]
    public string $content;

    /**
     * Channel type through which the message is sent
     *
     * @var ChannelTypeEnum $channel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channel')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ChannelTypeEnum')]
    public ChannelTypeEnum $channel;

    /**
     * Indicates whether the notification has been read by the subscriber.
     *
     * @var bool $read
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('read')]
    public bool $read;

    /**
     * Indicates whether the notification has been seen by the subscriber.
     *
     * @var bool $seen
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seen')]
    public bool $seen;

    /**
     * Indicates whether the notification has been deleted.
     *
     * @var bool $deleted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted')]
    public bool $deleted;

    /**
     * Call-to-action information associated with the notification.
     *
     * @var MessageCTA $cta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cta')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\MessageCTA')]
    public MessageCTA $cta;

    /**
     * Current status of the notification.
     *
     * @var NotificationFeedItemDtoStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\NotificationFeedItemDtoStatus')]
    public NotificationFeedItemDtoStatus $status;

    /**
     * Actor details related to the notification, if applicable.
     *
     * @var ?ActorFeedItemDto $actor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('actor')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ActorFeedItemDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ActorFeedItemDto $actor = null;

    /**
     * Subscriber details associated with this notification.
     *
     * @var ?SubscriberFeedResponseDto $subscriber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscriber')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\SubscriberFeedResponseDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SubscriberFeedResponseDto $subscriber = null;

    /**
     * The payload that was used to send the notification trigger.
     *
     * @var ?array<string, mixed> $payload
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payload')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $payload = null;

    /**
     * Provider-specific overrides used when triggering the notification.
     *
     * @var ?array<string, mixed> $overrides
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('overrides')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $overrides = null;

    /**
     * Timestamp indicating when the notification was created.
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * Timestamp indicating when the notification was last updated.
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * Identifier for the template used, if applicable.
     *
     * @var ?string $templateIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('templateIdentifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $templateIdentifier = null;

    /**
     * Identifier for the provider that sends the notification.
     *
     * @var ?string $providerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('providerId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $providerId = null;

    /**
     * The subject line for email notifications, if applicable.
     *
     * @var ?string $subject
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subject')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subject = null;

    /**
     * Device tokens for push notifications, if applicable.
     *
     * @var ?array<string> $deviceTokens
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deviceTokens')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $deviceTokens = null;

    /**
     * @param  string  $id
     * @param  string  $templateId
     * @param  string  $environmentId
     * @param  string  $messageTemplateId
     * @param  string  $organizationId
     * @param  string  $notificationId
     * @param  string  $subscriberId
     * @param  string  $feedId
     * @param  string  $jobId
     * @param  string  $transactionId
     * @param  string  $content
     * @param  ChannelTypeEnum  $channel
     * @param  bool  $read
     * @param  bool  $seen
     * @param  bool  $deleted
     * @param  MessageCTA  $cta
     * @param  NotificationFeedItemDtoStatus  $status
     * @param  ?ActorFeedItemDto  $actor
     * @param  ?SubscriberFeedResponseDto  $subscriber
     * @param  ?array<string, mixed>  $payload
     * @param  ?array<string, mixed>  $overrides
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $templateIdentifier
     * @param  ?string  $providerId
     * @param  ?string  $subject
     * @param  ?array<string>  $deviceTokens
     */
    public function __construct(string $id, string $templateId, string $environmentId, string $messageTemplateId, string $organizationId, string $notificationId, string $subscriberId, string $feedId, string $jobId, string $transactionId, string $content, ChannelTypeEnum $channel, bool $read, bool $seen, bool $deleted, MessageCTA $cta, NotificationFeedItemDtoStatus $status, ?ActorFeedItemDto $actor = null, ?SubscriberFeedResponseDto $subscriber = null, ?array $payload = null, ?array $overrides = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?string $templateIdentifier = null, ?string $providerId = null, ?string $subject = null, ?array $deviceTokens = null)
    {
        $this->id = $id;
        $this->templateId = $templateId;
        $this->environmentId = $environmentId;
        $this->messageTemplateId = $messageTemplateId;
        $this->organizationId = $organizationId;
        $this->notificationId = $notificationId;
        $this->subscriberId = $subscriberId;
        $this->feedId = $feedId;
        $this->jobId = $jobId;
        $this->transactionId = $transactionId;
        $this->content = $content;
        $this->channel = $channel;
        $this->read = $read;
        $this->seen = $seen;
        $this->deleted = $deleted;
        $this->cta = $cta;
        $this->status = $status;
        $this->actor = $actor;
        $this->subscriber = $subscriber;
        $this->payload = $payload;
        $this->overrides = $overrides;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->templateIdentifier = $templateIdentifier;
        $this->providerId = $providerId;
        $this->subject = $subject;
        $this->deviceTokens = $deviceTokens;
    }
}