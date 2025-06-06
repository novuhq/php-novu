<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class SubscriberDto
{
    /**
     * The identifier of the subscriber
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    public string $id;

    /**
     * The external identifier of the subscriber
     *
     * @var string $subscriberId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscriberId')]
    public string $subscriberId;

    /**
     * The avatar URL of the subscriber
     *
     * @var ?string $avatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatar = null;

    /**
     * The first name of the subscriber
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('firstName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The last name of the subscriber
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * The email of the subscriber
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * @param  string  $id
     * @param  string  $subscriberId
     * @param  ?string  $avatar
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $email
     * @phpstan-pure
     */
    public function __construct(string $id, string $subscriberId, ?string $avatar = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null)
    {
        $this->id = $id;
        $this->subscriberId = $subscriberId;
        $this->avatar = $avatar;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
}