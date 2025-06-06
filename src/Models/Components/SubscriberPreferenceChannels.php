<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class SubscriberPreferenceChannels
{
    /**
     * Email channel preference
     *
     * @var ?bool $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $email = null;

    /**
     * SMS channel preference
     *
     * @var ?bool $sms
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sms')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $sms = null;

    /**
     * In-app channel preference
     *
     * @var ?bool $inApp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('in_app')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $inApp = null;

    /**
     * Chat channel preference
     *
     * @var ?bool $chat
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('chat')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $chat = null;

    /**
     * Push notification channel preference
     *
     * @var ?bool $push
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('push')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $push = null;

    /**
     * @param  ?bool  $email
     * @param  ?bool  $sms
     * @param  ?bool  $inApp
     * @param  ?bool  $chat
     * @param  ?bool  $push
     * @phpstan-pure
     */
    public function __construct(?bool $email = null, ?bool $sms = null, ?bool $inApp = null, ?bool $chat = null, ?bool $push = null)
    {
        $this->email = $email;
        $this->sms = $sms;
        $this->inApp = $inApp;
        $this->chat = $chat;
        $this->push = $push;
    }
}