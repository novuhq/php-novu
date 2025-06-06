<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Utils\SpeakeasyMetadata;
class TopicsControllerListTopicSubscriptionsRequest
{
    /**
     * The key identifier of the topic
     *
     * @var string $topicKey
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=topicKey')]
    public string $topicKey;

    /**
     * Cursor for pagination indicating the starting point after which to fetch results.
     *
     * @var ?string $after
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after')]
    public ?string $after = null;

    /**
     * Cursor for pagination indicating the ending point before which to fetch results.
     *
     * @var ?string $before
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=before')]
    public ?string $before = null;

    /**
     * Limit the number of items to return (max 100)
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    /**
     * Direction of sorting
     *
     * @var ?TopicsControllerListTopicSubscriptionsQueryParamOrderDirection $orderDirection
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=orderDirection')]
    public ?TopicsControllerListTopicSubscriptionsQueryParamOrderDirection $orderDirection = null;

    /**
     * Field to order by
     *
     * @var ?string $orderBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=orderBy')]
    public ?string $orderBy = null;

    /**
     * Include cursor item in response
     *
     * @var ?bool $includeCursor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=includeCursor')]
    public ?bool $includeCursor = null;

    /**
     * Filter by subscriber ID
     *
     * @var ?string $subscriberId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=subscriberId')]
    public ?string $subscriberId = null;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $topicKey
     * @param  ?string  $after
     * @param  ?string  $before
     * @param  ?float  $limit
     * @param  ?TopicsControllerListTopicSubscriptionsQueryParamOrderDirection  $orderDirection
     * @param  ?string  $orderBy
     * @param  ?bool  $includeCursor
     * @param  ?string  $subscriberId
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $topicKey, ?string $after = null, ?string $before = null, ?float $limit = null, ?TopicsControllerListTopicSubscriptionsQueryParamOrderDirection $orderDirection = null, ?string $orderBy = null, ?bool $includeCursor = null, ?string $subscriberId = null, ?string $idempotencyKey = null)
    {
        $this->topicKey = $topicKey;
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->orderDirection = $orderDirection;
        $this->orderBy = $orderBy;
        $this->includeCursor = $includeCursor;
        $this->subscriberId = $subscriberId;
        $this->idempotencyKey = $idempotencyKey;
    }
}