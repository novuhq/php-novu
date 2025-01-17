<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


/** Status of the trigger */
enum Status: string
{
    case Error = 'error';
    case TriggerNotActive = 'trigger_not_active';
    case NoWorkflowActiveStepsDefined = 'no_workflow_active_steps_defined';
    case NoWorkflowStepsDefined = 'no_workflow_steps_defined';
    case Processed = 'processed';
    case NoTenantFound = 'no_tenant_found';
}
