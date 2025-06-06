<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class ConstraintValidation
{
    /**
     * List of validation error messages
     *
     * @var array<string> $messages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('messages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $messages;

    /**
     * Value that failed validation
     *
     * @var string|float|bool|Four|array<string|float|bool|array<string, mixed>|null>|null $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\novu\Models\Components\Four|array<string|float|bool|array<string, mixed>|null>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|Four|array|null $value = null;

    /**
     * @param  array<string>  $messages
     * @param  string|float|bool|Four|array<string|float|bool|array<string, mixed>|null>|null  $value
     * @phpstan-pure
     */
    public function __construct(array $messages, string|float|bool|Four|array|null $value = null)
    {
        $this->messages = $messages;
        $this->value = $value;
    }
}