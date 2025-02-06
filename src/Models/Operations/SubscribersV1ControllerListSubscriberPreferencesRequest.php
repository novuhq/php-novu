<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Utils\SpeakeasyMetadata;
class SubscribersV1ControllerListSubscriberPreferencesRequest
{
    /**
     *
     * @var string $subscriberId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=subscriberId')]
    public string $subscriberId;

    /**
     * A flag which specifies if the inactive workflow channels should be included in the retrieved preferences. Default is true
     *
     * @var ?bool $includeInactiveChannels
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=includeInactiveChannels')]
    public ?bool $includeInactiveChannels = null;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $subscriberId
     * @param  ?bool  $includeInactiveChannels
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $subscriberId, ?bool $includeInactiveChannels = null, ?string $idempotencyKey = null)
    {
        $this->subscriberId = $subscriberId;
        $this->includeInactiveChannels = $includeInactiveChannels;
        $this->idempotencyKey = $idempotencyKey;
    }
}