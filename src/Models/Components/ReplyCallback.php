<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ReplyCallback
{
    /**
     * Indicates whether the reply callback is active.
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * The URL to which replies should be sent.
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  ?bool  $active
     * @param  ?string  $url
     * @phpstan-pure
     */
    public function __construct(?bool $active = null, ?string $url = null)
    {
        $this->active = $active;
        $this->url = $url;
    }
}