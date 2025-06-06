<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class RemoveSubscriberResponseDto
{
    /**
     * Indicates whether the operation was acknowledged by the server
     *
     * @var bool $acknowledged
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('acknowledged')]
    public bool $acknowledged;

    /**
     * Status of the subscriber removal operation
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     * @param  bool  $acknowledged
     * @param  string  $status
     * @phpstan-pure
     */
    public function __construct(bool $acknowledged, string $status)
    {
        $this->acknowledged = $acknowledged;
        $this->status = $status;
    }
}