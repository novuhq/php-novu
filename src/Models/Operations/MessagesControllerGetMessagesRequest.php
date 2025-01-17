<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class MessagesControllerGetMessagesRequest
{
    /**
     * Channel type through which the message is sent
     *
     * @var ?Components\ChannelTypeEnum $channel
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=channel')]
    public ?Components\ChannelTypeEnum $channel = null;

    /**
     *
     * @var ?string $subscriberId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=subscriberId')]
    public ?string $subscriberId = null;

    /**
     * $transactionId
     *
     * @var ?array<string> $transactionId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=transactionId')]
    public ?array $transactionId = null;

    /**
     *
     * @var ?float $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?float $page = null;

    /**
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    /**
     * @param  ?Components\ChannelTypeEnum  $channel
     * @param  ?string  $subscriberId
     * @param  ?array<string>  $transactionId
     * @param  ?float  $page
     * @param  ?float  $limit
     */
    public function __construct(?Components\ChannelTypeEnum $channel = null, ?string $subscriberId = null, ?array $transactionId = null, ?float $page = 0, ?float $limit = 10)
    {
        $this->channel = $channel;
        $this->subscriberId = $subscriberId;
        $this->transactionId = $transactionId;
        $this->page = $page;
        $this->limit = $limit;
    }
}