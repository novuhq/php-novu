<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class NotificationTriggerVariableResponse
{
    /**
     * The name of the variable
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The value of the variable
     *
     * @var ?NotificationTriggerVariableResponseValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\NotificationTriggerVariableResponseValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?NotificationTriggerVariableResponseValue $value = null;

    /**
     * The type of the variable
     *
     * @var ?NotificationTriggerVariableResponseType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\NotificationTriggerVariableResponseType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?NotificationTriggerVariableResponseType $type = null;

    /**
     * @param  string  $name
     * @param  ?NotificationTriggerVariableResponseValue  $value
     * @param  ?NotificationTriggerVariableResponseType  $type
     * @phpstan-pure
     */
    public function __construct(string $name, ?NotificationTriggerVariableResponseValue $value = null, ?NotificationTriggerVariableResponseType $type = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }
}