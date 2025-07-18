<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class WorkflowControllerUpdateRequest
{
    /**
     *
     * @var string $workflowId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workflowId')]
    public string $workflowId;

    /**
     * Workflow update details
     *
     * @var Components\UpdateWorkflowDto $updateWorkflowDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\UpdateWorkflowDto $updateWorkflowDto;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $workflowId
     * @param  Components\UpdateWorkflowDto  $updateWorkflowDto
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $workflowId, Components\UpdateWorkflowDto $updateWorkflowDto, ?string $idempotencyKey = null)
    {
        $this->workflowId = $workflowId;
        $this->updateWorkflowDto = $updateWorkflowDto;
        $this->idempotencyKey = $idempotencyKey;
    }
}