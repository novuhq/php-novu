<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class BridgeConfigurationDto
{
    /**
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  ?string  $url
     * @phpstan-pure
     */
    public function __construct(?string $url = null)
    {
        $this->url = $url;
    }
}