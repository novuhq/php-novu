<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


/** The unit of time for the digest interval (for REGULAR type). */
enum DigestControlDtoUnit: string
{
    case Seconds = 'seconds';
    case Minutes = 'minutes';
    case Hours = 'hours';
    case Days = 'days';
    case Weeks = 'weeks';
    case Months = 'months';
}
