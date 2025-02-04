<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class WorkflowPreferenceDto
{
    /**
     * Whether notifications are enabled for this workflow
     *
     * @var bool $enabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('enabled')]
    public bool $enabled;

    /**
     * Channel-specific preference settings for this workflow
     *
     * @var PreferenceChannels $channels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channels')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\PreferenceChannels')]
    public PreferenceChannels $channels;

    /**
     * List of preference overrides
     *
     * @var array<Overrides> $overrides
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('overrides')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\Overrides>')]
    public array $overrides;

    /**
     * Workflow information
     *
     * @var WorkflowInfoDto $workflow
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflow')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\WorkflowInfoDto')]
    public WorkflowInfoDto $workflow;

    /**
     * @param  bool  $enabled
     * @param  PreferenceChannels  $channels
     * @param  array<Overrides>  $overrides
     * @param  WorkflowInfoDto  $workflow
     */
    public function __construct(bool $enabled, PreferenceChannels $channels, array $overrides, WorkflowInfoDto $workflow)
    {
        $this->enabled = $enabled;
        $this->channels = $channels;
        $this->overrides = $overrides;
        $this->workflow = $workflow;
    }
}