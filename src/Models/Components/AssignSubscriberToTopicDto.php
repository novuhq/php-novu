<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


class AssignSubscriberToTopicDto
{
    /**
     * List of successfully assigned subscriber IDs
     *
     * @var array<string> $succeeded
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('succeeded')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $succeeded;

    /**
     * Details about failed assignments
     *
     * @var ?FailedAssignmentsDto $failed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('failed')]
    #[\Speakeasy\Serializer\Annotation\Type('\novu\Models\Components\FailedAssignmentsDto|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?FailedAssignmentsDto $failed = null;

    /**
     * @param  array<string>  $succeeded
     * @param  ?FailedAssignmentsDto  $failed
     * @phpstan-pure
     */
    public function __construct(array $succeeded, ?FailedAssignmentsDto $failed = null)
    {
        $this->succeeded = $succeeded;
        $this->failed = $failed;
    }
}