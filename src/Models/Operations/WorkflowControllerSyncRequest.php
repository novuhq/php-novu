<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class WorkflowControllerSyncRequest
{
    /**
     *
     * @var string $workflowId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workflowId')]
    public string $workflowId;

    /**
     * Sync workflow details
     *
     * @var Components\SyncWorkflowDto $syncWorkflowDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\SyncWorkflowDto $syncWorkflowDto;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $workflowId
     * @param  Components\SyncWorkflowDto  $syncWorkflowDto
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $workflowId, Components\SyncWorkflowDto $syncWorkflowDto, ?string $idempotencyKey = null)
    {
        $this->workflowId = $workflowId;
        $this->syncWorkflowDto = $syncWorkflowDto;
        $this->idempotencyKey = $idempotencyKey;
    }
}