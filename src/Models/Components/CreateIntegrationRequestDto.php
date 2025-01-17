<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class CreateIntegrationRequestDto
{
    /**
     * The provider ID for the integration
     *
     * @var string $providerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('providerId')]
    public string $providerId;

    /**
     * The channel type for the integration
     *
     * @var CreateIntegrationRequestDtoChannel $channel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channel')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\CreateIntegrationRequestDtoChannel')]
    public CreateIntegrationRequestDtoChannel $channel;

    /**
     * The name of the integration
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The unique identifier for the integration
     *
     * @var ?string $identifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $identifier = null;

    /**
     * The ID of the associated environment
     *
     * @var ?string $environmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_environmentId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $environmentId = null;

    /**
     * The credentials for the integration
     *
     * @var ?CredentialsDto $credentials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('credentials')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\CredentialsDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CredentialsDto $credentials = null;

    /**
     * If the integration is active, the validation on the credentials field will run
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * Flag to check the integration status
     *
     * @var ?bool $check
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('check')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $check = null;

    /**
     * Conditions for the integration
     *
     * @var ?array<StepFilterDto> $conditions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('conditions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\StepFilterDto>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $conditions = null;

    /**
     * @param  string  $providerId
     * @param  CreateIntegrationRequestDtoChannel  $channel
     * @param  ?string  $name
     * @param  ?string  $identifier
     * @param  ?string  $environmentId
     * @param  ?CredentialsDto  $credentials
     * @param  ?bool  $active
     * @param  ?bool  $check
     * @param  ?array<StepFilterDto>  $conditions
     */
    public function __construct(string $providerId, CreateIntegrationRequestDtoChannel $channel, ?string $name = null, ?string $identifier = null, ?string $environmentId = null, ?CredentialsDto $credentials = null, ?bool $active = null, ?bool $check = null, ?array $conditions = null)
    {
        $this->providerId = $providerId;
        $this->channel = $channel;
        $this->name = $name;
        $this->identifier = $identifier;
        $this->environmentId = $environmentId;
        $this->credentials = $credentials;
        $this->active = $active;
        $this->check = $check;
        $this->conditions = $conditions;
    }
}