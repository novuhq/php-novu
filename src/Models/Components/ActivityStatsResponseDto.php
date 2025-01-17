<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ActivityStatsResponseDto
{
    /**
     *
     * @var float $weeklySent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('weeklySent')]
    public float $weeklySent;

    /**
     *
     * @var float $monthlySent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('monthlySent')]
    public float $monthlySent;

    /**
     * @param  float  $weeklySent
     * @param  float  $monthlySent
     */
    public function __construct(float $weeklySent, float $monthlySent)
    {
        $this->weeklySent = $weeklySent;
        $this->monthlySent = $monthlySent;
    }
}