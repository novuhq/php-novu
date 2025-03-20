<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ActivityNotificationTemplateResponseDto
{
    /**
     * Name of the template
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Triggers of the template
     *
     * @var array<NotificationTriggerDto> $triggers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('triggers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\NotificationTriggerDto>')]
    public array $triggers;

    /**
     * Unique identifier of the template
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Origin of the workflow
     *
     * @var ?WorkflowOriginEnum $origin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('origin')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\WorkflowOriginEnum|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WorkflowOriginEnum $origin = null;

    /**
     * @param  string  $name
     * @param  array<NotificationTriggerDto>  $triggers
     * @param  ?string  $id
     * @param  ?WorkflowOriginEnum  $origin
     * @phpstan-pure
     */
    public function __construct(string $name, array $triggers, ?string $id = null, ?WorkflowOriginEnum $origin = null)
    {
        $this->name = $name;
        $this->triggers = $triggers;
        $this->id = $id;
        $this->origin = $origin;
    }
}