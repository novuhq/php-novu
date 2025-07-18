<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ChatControlDto
{
    /**
     * JSONLogic filter conditions for conditionally skipping the step execution. Supports complex logical operations with AND, OR, and comparison operators. See https://jsonlogic.com/ for full typing reference.
     *
     * @var ?array<string, mixed> $skip
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('skip')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $skip = null;

    /**
     * Content of the chat message.
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     * @param  ?array<string, mixed>  $skip
     * @param  ?string  $body
     * @phpstan-pure
     */
    public function __construct(?array $skip = null, ?string $body = null)
    {
        $this->skip = $skip;
        $this->body = $body;
    }
}