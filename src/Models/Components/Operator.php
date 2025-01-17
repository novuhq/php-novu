<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


enum Operator: string
{
    case Larger = 'LARGER';
    case Smaller = 'SMALLER';
    case LargerEqual = 'LARGER_EQUAL';
    case SmallerEqual = 'SMALLER_EQUAL';
    case Equal = 'EQUAL';
    case NotEqual = 'NOT_EQUAL';
    case AllIn = 'ALL_IN';
    case AnyIn = 'ANY_IN';
    case NotIn = 'NOT_IN';
    case Between = 'BETWEEN';
    case NotBetween = 'NOT_BETWEEN';
    case Like = 'LIKE';
    case NotLike = 'NOT_LIKE';
    case In = 'IN';
}
