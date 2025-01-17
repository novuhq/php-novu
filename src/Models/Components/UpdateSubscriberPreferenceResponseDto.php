<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class UpdateSubscriberPreferenceResponseDto
{
    /**
     * The workflow information and if it is critical or not
     *
     * @var TemplateResponse $template
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('template')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\TemplateResponse')]
    public TemplateResponse $template;

    /**
     * The preferences of the subscriber regarding the related workflow
     *
     * @var Preference $preference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('preference')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\Preference')]
    public Preference $preference;

    /**
     * @param  TemplateResponse  $template
     * @param  Preference  $preference
     */
    public function __construct(TemplateResponse $template, Preference $preference)
    {
        $this->template = $template;
        $this->preference = $preference;
    }
}