<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class SubscribersV1ControllerCreateSubscriberRequest
{
    /**
     *
     * @var Components\CreateSubscriberRequestDto $createSubscriberRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CreateSubscriberRequestDto $createSubscriberRequestDto;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  Components\CreateSubscriberRequestDto  $createSubscriberRequestDto
     * @param  ?string  $idempotencyKey
     */
    public function __construct(Components\CreateSubscriberRequestDto $createSubscriberRequestDto, ?string $idempotencyKey = null)
    {
        $this->createSubscriberRequestDto = $createSubscriberRequestDto;
        $this->idempotencyKey = $idempotencyKey;
    }
}