<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class NotificationGroup
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $environmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_environmentId')]
    public string $environmentId;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_organizationId')]
    public string $organizationId;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_parentId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     * @param  string  $name
     * @param  string  $environmentId
     * @param  string  $organizationId
     * @param  ?string  $id
     * @param  ?string  $parentId
     */
    public function __construct(string $name, string $environmentId, string $organizationId, ?string $id = null, ?string $parentId = null)
    {
        $this->name = $name;
        $this->environmentId = $environmentId;
        $this->organizationId = $organizationId;
        $this->id = $id;
        $this->parentId = $parentId;
    }
}