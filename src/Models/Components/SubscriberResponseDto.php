<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class SubscriberResponseDto
{
    /**
     * The identifier used to create this subscriber, which typically corresponds to the user ID in your system.
     *
     * @var string $subscriberId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscriberId')]
    public string $subscriberId;

    /**
     * The unique identifier of the organization to which the subscriber belongs.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_organizationId')]
    public string $organizationId;

    /**
     * The unique identifier of the environment associated with this subscriber.
     *
     * @var string $environmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_environmentId')]
    public string $environmentId;

    /**
     * Indicates whether the subscriber has been deleted.
     *
     * @var bool $deleted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted')]
    public bool $deleted;

    /**
     * The timestamp indicating when the subscriber was created, in ISO 8601 format.
     *
     * @var string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     * The timestamp indicating when the subscriber was last updated, in ISO 8601 format.
     *
     * @var string $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    public string $updatedAt;

    /**
     * The internal ID generated by Novu for your subscriber. This ID does not match the `subscriberId` used in your queries. Refer to `subscriberId` for that identifier.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The first name of the subscriber.
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('firstName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The last name of the subscriber.
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * The phone number of the subscriber.
     *
     * @var ?string $phone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $phone = null;

    /**
     * The URL of the subscriber's avatar image.
     *
     * @var ?string $avatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatar = null;

    /**
     * The locale setting of the subscriber, indicating their preferred language or region.
     *
     * @var ?string $locale
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('locale')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $locale = null;

    /**
     * An array of channel settings associated with the subscriber.
     *
     * @var ?array<ChannelSettings> $channels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\ChannelSettings>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $channels = null;

    /**
     * An array of topics that the subscriber is subscribed to.
     *
     * @var ?array<string> $topics
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('topics')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $topics = null;

    /**
     * Indicates whether the subscriber is currently online.
     *
     * @var ?bool $isOnline
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('isOnline')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isOnline = null;

    /**
     * The timestamp indicating when the subscriber was last online, in ISO 8601 format.
     *
     * @var ?string $lastOnlineAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastOnlineAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastOnlineAt = null;

    /**
     * The version of the subscriber document.
     *
     * @var ?float $v
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('__v')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $v = null;

    /**
     * The email address of the subscriber.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * @param  string  $subscriberId
     * @param  string  $organizationId
     * @param  string  $environmentId
     * @param  bool  $deleted
     * @param  string  $createdAt
     * @param  string  $updatedAt
     * @param  ?string  $id
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $phone
     * @param  ?string  $avatar
     * @param  ?string  $locale
     * @param  ?array<ChannelSettings>  $channels
     * @param  ?array<string>  $topics
     * @param  ?bool  $isOnline
     * @param  ?string  $lastOnlineAt
     * @param  ?float  $v
     * @param  ?string  $email
     */
    public function __construct(string $subscriberId, string $organizationId, string $environmentId, bool $deleted, string $createdAt, string $updatedAt, ?string $id = null, ?string $firstName = null, ?string $lastName = null, ?string $phone = null, ?string $avatar = null, ?string $locale = null, ?array $channels = null, ?array $topics = null, ?bool $isOnline = null, ?string $lastOnlineAt = null, ?float $v = null, ?string $email = null)
    {
        $this->subscriberId = $subscriberId;
        $this->organizationId = $organizationId;
        $this->environmentId = $environmentId;
        $this->deleted = $deleted;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->avatar = $avatar;
        $this->locale = $locale;
        $this->channels = $channels;
        $this->topics = $topics;
        $this->isOnline = $isOnline;
        $this->lastOnlineAt = $lastOnlineAt;
        $this->v = $v;
        $this->email = $email;
    }
}