<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class TopicsControllerAssignRequest
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
     * @var Components\AddSubscribersRequestDto $addSubscribersRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\AddSubscribersRequestDto $addSubscribersRequestDto;

    /**
     * @param  string  $topicKey
     * @param  Components\AddSubscribersRequestDto  $addSubscribersRequestDto
     */
    public function __construct(string $topicKey, Components\AddSubscribersRequestDto $addSubscribersRequestDto)
    {
        $this->topicKey = $topicKey;
        $this->addSubscribersRequestDto = $addSubscribersRequestDto;
    }
}