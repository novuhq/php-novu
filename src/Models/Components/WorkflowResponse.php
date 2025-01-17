<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class WorkflowResponse
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     *
     * @var bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    public bool $active;

    /**
     *
     * @var bool $draft
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('draft')]
    public bool $draft;

    /**
     *
     * @var PreferenceChannels $preferenceSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('preferenceSettings')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\PreferenceChannels')]
    public PreferenceChannels $preferenceSettings;

    /**
     *
     * @var bool $critical
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('critical')]
    public bool $critical;

    /**
     * $tags
     *
     * @var array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $tags;

    /**
     * $steps
     *
     * @var array<NotificationStepDto> $steps
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('steps')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\NotificationStepDto>')]
    public array $steps;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_organizationId')]
    public string $organizationId;

    /**
     *
     * @var string $creatorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_creatorId')]
    public string $creatorId;

    /**
     *
     * @var string $environmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_environmentId')]
    public string $environmentId;

    /**
     * $triggers
     *
     * @var array<NotificationTrigger> $triggers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('triggers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\NotificationTrigger>')]
    public array $triggers;

    /**
     *
     * @var string $notificationGroupId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_notificationGroupId')]
    public string $notificationGroupId;

    /**
     *
     * @var bool $deleted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted')]
    public bool $deleted;

    /**
     *
     * @var string $deletedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deletedAt')]
    public string $deletedAt;

    /**
     *
     * @var string $deletedBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deletedBy')]
    public string $deletedBy;

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
     *
     * @var ?NotificationGroup $notificationGroup
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notificationGroup')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\NotificationGroup|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?NotificationGroup $notificationGroup = null;

    /**
     *
     * @var ?WorkflowResponseData $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\WorkflowResponseData|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WorkflowResponseData $data = null;

    /**
     *
     * @var ?WorkflowIntegrationStatus $workflowIntegrationStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflowIntegrationStatus')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\WorkflowIntegrationStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WorkflowIntegrationStatus $workflowIntegrationStatus = null;

    /**
     * @param  string  $name
     * @param  string  $description
     * @param  bool  $active
     * @param  bool  $draft
     * @param  PreferenceChannels  $preferenceSettings
     * @param  bool  $critical
     * @param  array<string>  $tags
     * @param  array<NotificationStepDto>  $steps
     * @param  string  $organizationId
     * @param  string  $creatorId
     * @param  string  $environmentId
     * @param  array<NotificationTrigger>  $triggers
     * @param  string  $notificationGroupId
     * @param  bool  $deleted
     * @param  string  $deletedAt
     * @param  string  $deletedBy
     * @param  ?string  $id
     * @param  ?string  $parentId
     * @param  ?NotificationGroup  $notificationGroup
     * @param  ?WorkflowResponseData  $data
     * @param  ?WorkflowIntegrationStatus  $workflowIntegrationStatus
     */
    public function __construct(string $name, string $description, bool $active, bool $draft, PreferenceChannels $preferenceSettings, bool $critical, array $tags, array $steps, string $organizationId, string $creatorId, string $environmentId, array $triggers, string $notificationGroupId, bool $deleted, string $deletedAt, string $deletedBy, ?string $id = null, ?string $parentId = null, ?NotificationGroup $notificationGroup = null, ?WorkflowResponseData $data = null, ?WorkflowIntegrationStatus $workflowIntegrationStatus = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->active = $active;
        $this->draft = $draft;
        $this->preferenceSettings = $preferenceSettings;
        $this->critical = $critical;
        $this->tags = $tags;
        $this->steps = $steps;
        $this->organizationId = $organizationId;
        $this->creatorId = $creatorId;
        $this->environmentId = $environmentId;
        $this->triggers = $triggers;
        $this->notificationGroupId = $notificationGroupId;
        $this->deleted = $deleted;
        $this->deletedAt = $deletedAt;
        $this->deletedBy = $deletedBy;
        $this->id = $id;
        $this->parentId = $parentId;
        $this->notificationGroup = $notificationGroup;
        $this->data = $data;
        $this->workflowIntegrationStatus = $workflowIntegrationStatus;
    }
}