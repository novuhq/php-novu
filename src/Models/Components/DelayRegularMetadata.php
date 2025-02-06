<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class DelayRegularMetadata
{
    /**
     *
     * @var DelayRegularMetadataType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\DelayRegularMetadataType')]
    public DelayRegularMetadataType $type;

    /**
     *
     * @var ?float $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $amount = null;

    /**
     *
     * @var ?DelayRegularMetadataUnit $unit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\DelayRegularMetadataUnit|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DelayRegularMetadataUnit $unit = null;

    /**
     * @param  DelayRegularMetadataType  $type
     * @param  ?float  $amount
     * @param  ?DelayRegularMetadataUnit  $unit
     * @phpstan-pure
     */
    public function __construct(DelayRegularMetadataType $type, ?float $amount = null, ?DelayRegularMetadataUnit $unit = null)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->unit = $unit;
    }
}