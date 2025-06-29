<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class EmailControlsMetadataResponseDto
{
    /**
     * Control values specific to Email
     *
     * @var EmailControlDto $values
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('values')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\EmailControlDto')]
    public EmailControlDto $values;

    /**
     * JSON Schema for data
     *
     * @var ?array<string, mixed> $dataSchema
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dataSchema')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $dataSchema = null;

    /**
     * UI Schema for rendering
     *
     * @var ?UiSchema $uiSchema
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('uiSchema')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\UiSchema|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UiSchema $uiSchema = null;

    /**
     * @param  EmailControlDto  $values
     * @param  ?array<string, mixed>  $dataSchema
     * @param  ?UiSchema  $uiSchema
     * @phpstan-pure
     */
    public function __construct(EmailControlDto $values, ?array $dataSchema = null, ?UiSchema $uiSchema = null)
    {
        $this->values = $values;
        $this->dataSchema = $dataSchema;
        $this->uiSchema = $uiSchema;
    }
}