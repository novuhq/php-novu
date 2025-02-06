<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class TopicsControllerRenameTopicRequest
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
     * @var Components\RenameTopicRequestDto $renameTopicRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\RenameTopicRequestDto $renameTopicRequestDto;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $topicKey
     * @param  Components\RenameTopicRequestDto  $renameTopicRequestDto
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $topicKey, Components\RenameTopicRequestDto $renameTopicRequestDto, ?string $idempotencyKey = null)
    {
        $this->topicKey = $topicKey;
        $this->renameTopicRequestDto = $renameTopicRequestDto;
        $this->idempotencyKey = $idempotencyKey;
    }
}