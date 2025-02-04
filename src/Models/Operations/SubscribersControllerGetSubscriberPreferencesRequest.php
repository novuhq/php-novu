<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Utils\SpeakeasyMetadata;
class SubscribersControllerGetSubscriberPreferencesRequest
{
    /**
     *
     * @var string $subscriberId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=subscriberId')]
    public string $subscriberId;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $subscriberId
     * @param  ?string  $idempotencyKey
     */
    public function __construct(string $subscriberId, ?string $idempotencyKey = null)
    {
        $this->subscriberId = $subscriberId;
        $this->idempotencyKey = $idempotencyKey;
    }
}