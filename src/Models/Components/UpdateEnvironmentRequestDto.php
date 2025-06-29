<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class UpdateEnvironmentRequestDto
{
    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $identifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $identifier = null;

    /**
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     *
     * @var ?string $color
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('color')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $color = null;

    /**
     *
     * @var ?InBoundParseDomainDto $dns
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dns')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\InBoundParseDomainDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InBoundParseDomainDto $dns = null;

    /**
     *
     * @var ?BridgeConfigurationDto $bridge
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bridge')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\BridgeConfigurationDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BridgeConfigurationDto $bridge = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $identifier
     * @param  ?string  $parentId
     * @param  ?string  $color
     * @param  ?InBoundParseDomainDto  $dns
     * @param  ?BridgeConfigurationDto  $bridge
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $identifier = null, ?string $parentId = null, ?string $color = null, ?InBoundParseDomainDto $dns = null, ?BridgeConfigurationDto $bridge = null)
    {
        $this->name = $name;
        $this->identifier = $identifier;
        $this->parentId = $parentId;
        $this->color = $color;
        $this->dns = $dns;
        $this->bridge = $bridge;
    }
}