<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class DelayStepResponseDto
{
    /**
     * Controls metadata for the delay step
     *
     * @var DelayControlsMetadataResponseDto $controls
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('controls')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\DelayControlsMetadataResponseDto')]
    public DelayControlsMetadataResponseDto $controls;

    /**
     * JSON Schema for variables, follows the JSON Schema standard
     *
     * @var array<string, mixed> $variables
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('variables')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>')]
    public array $variables;

    /**
     * Unique identifier of the step
     *
     * @var string $stepId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stepId')]
    public string $stepId;

    /**
     * Database identifier of the step
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    public string $id;

    /**
     * Name of the step
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Slug of the step
     *
     * @var DelayStepResponseDtoSlug $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\DelayStepResponseDtoSlug')]
    public DelayStepResponseDtoSlug $slug;

    /**
     * Type of the step
     *
     * @var StepTypeEnum $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\StepTypeEnum')]
    public StepTypeEnum $type;

    /**
     * Origin of the workflow
     *
     * @var ResourceOriginEnum $origin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('origin')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ResourceOriginEnum')]
    public ResourceOriginEnum $origin;

    /**
     * Workflow identifier
     *
     * @var string $workflowId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflowId')]
    public string $workflowId;

    /**
     * Workflow database identifier
     *
     * @var string $workflowDatabaseId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflowDatabaseId')]
    public string $workflowDatabaseId;

    /**
     * Control values for the delay step
     *
     * @var ?DelayStepResponseDtoControlValues $controlValues
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('controlValues')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\DelayStepResponseDtoControlValues|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DelayStepResponseDtoControlValues $controlValues = null;

    /**
     * Issues associated with the step
     *
     * @var ?StepIssuesDto $issues
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('issues')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\StepIssuesDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?StepIssuesDto $issues = null;

    /**
     * @param  DelayControlsMetadataResponseDto  $controls
     * @param  array<string, mixed>  $variables
     * @param  string  $stepId
     * @param  string  $id
     * @param  string  $name
     * @param  DelayStepResponseDtoSlug  $slug
     * @param  StepTypeEnum  $type
     * @param  ResourceOriginEnum  $origin
     * @param  string  $workflowId
     * @param  string  $workflowDatabaseId
     * @param  ?DelayStepResponseDtoControlValues  $controlValues
     * @param  ?StepIssuesDto  $issues
     * @phpstan-pure
     */
    public function __construct(DelayControlsMetadataResponseDto $controls, array $variables, string $stepId, string $id, string $name, DelayStepResponseDtoSlug $slug, StepTypeEnum $type, ResourceOriginEnum $origin, string $workflowId, string $workflowDatabaseId, ?DelayStepResponseDtoControlValues $controlValues = null, ?StepIssuesDto $issues = null)
    {
        $this->controls = $controls;
        $this->variables = $variables;
        $this->stepId = $stepId;
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->type = $type;
        $this->origin = $origin;
        $this->workflowId = $workflowId;
        $this->workflowDatabaseId = $workflowDatabaseId;
        $this->controlValues = $controlValues;
        $this->issues = $issues;
    }
}