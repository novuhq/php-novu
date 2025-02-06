<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class TimedConfig
{
    /**
     *
     * @var ?string $atTime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('atTime')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $atTime = null;

    /**
     * $weekDays
     *
     * @var ?array<TimedConfigWeekDays> $weekDays
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('weekDays')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\TimedConfigWeekDays>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $weekDays = null;

    /**
     * $monthDays
     *
     * @var ?array<string> $monthDays
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('monthDays')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $monthDays = null;

    /**
     *
     * @var ?Ordinal $ordinal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ordinal')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\Ordinal|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Ordinal $ordinal = null;

    /**
     *
     * @var ?OrdinalValue $ordinalValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ordinalValue')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\OrdinalValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrdinalValue $ordinalValue = null;

    /**
     *
     * @var ?MonthlyType $monthlyType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('monthlyType')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\MonthlyType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MonthlyType $monthlyType = null;

    /**
     * @param  ?string  $atTime
     * @param  ?array<TimedConfigWeekDays>  $weekDays
     * @param  ?array<string>  $monthDays
     * @param  ?Ordinal  $ordinal
     * @param  ?OrdinalValue  $ordinalValue
     * @param  ?MonthlyType  $monthlyType
     * @phpstan-pure
     */
    public function __construct(?string $atTime = null, ?array $weekDays = null, ?array $monthDays = null, ?Ordinal $ordinal = null, ?OrdinalValue $ordinalValue = null, ?MonthlyType $monthlyType = null)
    {
        $this->atTime = $atTime;
        $this->weekDays = $weekDays;
        $this->monthDays = $monthDays;
        $this->ordinal = $ordinal;
        $this->ordinalValue = $ordinalValue;
        $this->monthlyType = $monthlyType;
    }
}