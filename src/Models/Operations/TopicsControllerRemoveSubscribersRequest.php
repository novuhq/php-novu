<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class TopicsControllerRemoveSubscribersRequest
{
    /**
     * The topic key
     *
     * @var string $topicKey
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=topicKey')]
    public string $topicKey;

    /**
     *
     * @var Components\RemoveSubscribersRequestDto $removeSubscribersRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\RemoveSubscribersRequestDto $removeSubscribersRequestDto;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $topicKey
     * @param  Components\RemoveSubscribersRequestDto  $removeSubscribersRequestDto
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $topicKey, Components\RemoveSubscribersRequestDto $removeSubscribersRequestDto, ?string $idempotencyKey = null)
    {
        $this->topicKey = $topicKey;
        $this->removeSubscribersRequestDto = $removeSubscribersRequestDto;
        $this->idempotencyKey = $idempotencyKey;
    }
}