<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


/** Source of the execution detail */
enum ExecutionDetailsSourceEnum: string
{
    case Credentials = 'Credentials';
    case Internal = 'Internal';
    case Payload = 'Payload';
    case Webhook = 'Webhook';
}
