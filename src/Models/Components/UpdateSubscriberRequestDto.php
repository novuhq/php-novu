<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class UpdateSubscriberRequestDto
{
    /**
     * The email address of the subscriber.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

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
     * The avatar URL of the subscriber.
     *
     * @var ?string $avatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatar = null;

    /**
     * The locale of the subscriber, for example "en-US".
     *
     * @var ?string $locale
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('locale')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $locale = null;

    /**
     * Custom data associated with the subscriber. Can contain any additional properties.
     *
     * @var ?array<string, mixed> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $data = null;

    /**
     * An array of communication channels for the subscriber.
     *
     * @var ?array<SubscriberChannelDto> $channels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\SubscriberChannelDto>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $channels = null;

    /**
     * @param  ?string  $email
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $phone
     * @param  ?string  $avatar
     * @param  ?string  $locale
     * @param  ?array<string, mixed>  $data
     * @param  ?array<SubscriberChannelDto>  $channels
     * @phpstan-pure
     */
    public function __construct(?string $email = null, ?string $firstName = null, ?string $lastName = null, ?string $phone = null, ?string $avatar = null, ?string $locale = null, ?array $data = null, ?array $channels = null)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->avatar = $avatar;
        $this->locale = $locale;
        $this->data = $data;
        $this->channels = $channels;
    }
}