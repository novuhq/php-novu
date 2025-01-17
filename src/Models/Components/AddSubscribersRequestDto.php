<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class AddSubscribersRequestDto
{
    /**
     * List of subscriber identifiers that will be associated to the topic
     *
     * @var array<string> $subscribers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscribers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $subscribers;

    /**
     * @param  array<string>  $subscribers
     */
    public function __construct(array $subscribers)
    {
        $this->subscribers = $subscribers;
    }
}