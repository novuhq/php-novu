<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ListSubscribersResponseDto
{
    /**
     * List of returned Subscribers
     *
     * @var array<SubscriberResponseDto> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\SubscriberResponseDto>')]
    public array $data;

    /**
     * The cursor for the next page of results, or null if there are no more pages.
     *
     * @var ?string $next
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next')]
    public ?string $next;

    /**
     * The cursor for the previous page of results, or null if this is the first page.
     *
     * @var ?string $previous
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('previous')]
    public ?string $previous;

    /**
     * @param  array<SubscriberResponseDto>  $data
     * @param  ?string  $next
     * @param  ?string  $previous
     * @phpstan-pure
     */
    public function __construct(array $data, ?string $next = null, ?string $previous = null)
    {
        $this->data = $data;
        $this->next = $next;
        $this->previous = $previous;
    }
}