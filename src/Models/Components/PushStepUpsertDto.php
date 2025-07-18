<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class PushStepUpsertDto
{
    /**
     * Name of the step
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Type of the step
     *
     * @var StepTypeEnum $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\StepTypeEnum')]
    public StepTypeEnum $type;

    /**
     * Unique identifier of the step
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Control values for the Push step.
     *
     * @var PushControlDto|array<string, mixed>|null $controlValues
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('controlValues')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\PushControlDto|array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public PushControlDto|array|null $controlValues = null;

    /**
     * @param  string  $name
     * @param  StepTypeEnum  $type
     * @param  ?string  $id
     * @param  PushControlDto|array<string, mixed>|null  $controlValues
     * @phpstan-pure
     */
    public function __construct(string $name, StepTypeEnum $type, ?string $id = null, PushControlDto|array|null $controlValues = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->id = $id;
        $this->controlValues = $controlValues;
    }
}