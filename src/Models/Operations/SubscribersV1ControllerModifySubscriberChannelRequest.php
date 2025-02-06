<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class SubscribersV1ControllerModifySubscriberChannelRequest
{
    /**
     *
     * @var string $subscriberId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=subscriberId')]
    public string $subscriberId;

    /**
     *
     * @var Components\UpdateSubscriberChannelRequestDto $updateSubscriberChannelRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\UpdateSubscriberChannelRequestDto $updateSubscriberChannelRequestDto;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $subscriberId
     * @param  Components\UpdateSubscriberChannelRequestDto  $updateSubscriberChannelRequestDto
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $subscriberId, Components\UpdateSubscriberChannelRequestDto $updateSubscriberChannelRequestDto, ?string $idempotencyKey = null)
    {
        $this->subscriberId = $subscriberId;
        $this->updateSubscriberChannelRequestDto = $updateSubscriberChannelRequestDto;
        $this->idempotencyKey = $idempotencyKey;
    }
}