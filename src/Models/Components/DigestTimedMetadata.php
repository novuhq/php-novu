<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class DigestTimedMetadata
{
    /**
     *
     * @var DigestTimedMetadataType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\DigestTimedMetadataType')]
    public DigestTimedMetadataType $type;

    /**
     *
     * @var ?float $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $amount = null;

    /**
     *
     * @var ?DigestTimedMetadataUnit $unit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\DigestTimedMetadataUnit|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DigestTimedMetadataUnit $unit = null;

    /**
     *
     * @var ?string $digestKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('digestKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $digestKey = null;

    /**
     *
     * @var ?TimedConfig $timed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timed')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\TimedConfig|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimedConfig $timed = null;

    /**
     * @param  DigestTimedMetadataType  $type
     * @param  ?float  $amount
     * @param  ?DigestTimedMetadataUnit  $unit
     * @param  ?string  $digestKey
     * @param  ?TimedConfig  $timed
     * @phpstan-pure
     */
    public function __construct(DigestTimedMetadataType $type, ?float $amount = null, ?DigestTimedMetadataUnit $unit = null, ?string $digestKey = null, ?TimedConfig $timed = null)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->unit = $unit;
        $this->digestKey = $digestKey;
        $this->timed = $timed;
    }
}