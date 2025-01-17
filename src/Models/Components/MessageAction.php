<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class MessageAction
{
    /**
     * Status of the message action
     *
     * @var ?MessageActionStatusEnum $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\MessageActionStatusEnum|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MessageActionStatusEnum $status = null;

    /**
     * List of buttons associated with the message action
     *
     * @var ?array<MessageButton> $buttons
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('buttons')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\novu\Models\Components\MessageButton>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $buttons = null;

    /**
     * Result of the message action
     *
     * @var ?MessageActionResult $result
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('result')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\MessageActionResult|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MessageActionResult $result = null;

    /**
     * @param  ?MessageActionStatusEnum  $status
     * @param  ?array<MessageButton>  $buttons
     * @param  ?MessageActionResult  $result
     */
    public function __construct(?MessageActionStatusEnum $status = null, ?array $buttons = null, ?MessageActionResult $result = null)
    {
        $this->status = $status;
        $this->buttons = $buttons;
        $this->result = $result;
    }
}