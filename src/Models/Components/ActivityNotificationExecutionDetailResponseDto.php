<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ActivityNotificationExecutionDetailResponseDto
{
    /**
     * Unique identifier of the execution detail
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_id')]
    public string $id;

    /**
     * Status of the execution detail
     *
     * @var ExecutionDetailsStatusEnum $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ExecutionDetailsStatusEnum')]
    public ExecutionDetailsStatusEnum $status;

    /**
     * Detailed information about the execution
     *
     * @var string $detail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('detail')]
    public string $detail;

    /**
     * Whether the execution is a retry or not
     *
     * @var bool $isRetry
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('isRetry')]
    public bool $isRetry;

    /**
     * Whether the execution is a test or not
     *
     * @var bool $isTest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('isTest')]
    public bool $isTest;

    /**
     * Provider ID of the job
     *
     * @var ProvidersIdEnum $providerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('providerId')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ProvidersIdEnum')]
    public ProvidersIdEnum $providerId;

    /**
     * Source of the execution detail
     *
     * @var ExecutionDetailsSourceEnum $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\ExecutionDetailsSourceEnum')]
    public ExecutionDetailsSourceEnum $source;

    /**
     * Creation time of the execution detail
     *
     * @var ?string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     * Raw data of the execution
     *
     * @var ?string $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $raw = null;

    /**
     * @param  string  $id
     * @param  ExecutionDetailsStatusEnum  $status
     * @param  string  $detail
     * @param  bool  $isRetry
     * @param  bool  $isTest
     * @param  ProvidersIdEnum  $providerId
     * @param  ExecutionDetailsSourceEnum  $source
     * @param  ?string  $createdAt
     * @param  ?string  $raw
     * @phpstan-pure
     */
    public function __construct(string $id, ExecutionDetailsStatusEnum $status, string $detail, bool $isRetry, bool $isTest, ProvidersIdEnum $providerId, ExecutionDetailsSourceEnum $source, ?string $createdAt = null, ?string $raw = null)
    {
        $this->id = $id;
        $this->status = $status;
        $this->detail = $detail;
        $this->isRetry = $isRetry;
        $this->isTest = $isTest;
        $this->providerId = $providerId;
        $this->source = $source;
        $this->createdAt = $createdAt;
        $this->raw = $raw;
    }
}