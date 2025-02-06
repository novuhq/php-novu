<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class UnseenCountResponse
{
    /**
     *
     * @var float $count
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('count')]
    public float $count;

    /**
     * @param  float  $count
     * @phpstan-pure
     */
    public function __construct(float $count)
    {
        $this->count = $count;
    }
}