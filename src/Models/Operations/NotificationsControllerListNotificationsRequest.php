<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Models\Components;
use novu\Utils\SpeakeasyMetadata;
class NotificationsControllerListNotificationsRequest
{
    /**
     * Array of channel types
     *
     * @var ?array<Components\ChannelTypeEnum> $channels
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=channels')]
    public ?array $channels = null;

    /**
     * Array of template IDs or a single template ID
     *
     * @var ?array<string> $templates
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=templates')]
    public ?array $templates = null;

    /**
     * Array of email addresses or a single email address
     *
     * @var ?array<string> $emails
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=emails')]
    public ?array $emails = null;

    /**
     * Search term (deprecated)
     *
     * @var ?string $search
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search')]
    public ?string $search = null;

    /**
     * Array of subscriber IDs or a single subscriber ID
     *
     * @var ?array<string> $subscriberIds
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=subscriberIds')]
    public ?array $subscriberIds = null;

    /**
     * Transaction ID for filtering
     *
     * @var ?string $transactionId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=transactionId')]
    public ?string $transactionId = null;

    /**
     * Date filter for records after this timestamp
     *
     * @var ?string $after
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after')]
    public ?string $after = null;

    /**
     * Date filter for records before this timestamp
     *
     * @var ?string $before
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=before')]
    public ?string $before = null;

    /**
     * A header for idempotency purposes
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=idempotency-key')]
    public ?string $idempotencyKey = null;

    /**
     * Page number for pagination
     *
     * @var ?float $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?float $page = null;

    /**
     * @param  ?array<Components\ChannelTypeEnum>  $channels
     * @param  ?array<string>  $templates
     * @param  ?array<string>  $emails
     * @param  ?string  $search
     * @param  ?array<string>  $subscriberIds
     * @param  ?float  $page
     * @param  ?string  $transactionId
     * @param  ?string  $after
     * @param  ?string  $before
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(?array $channels = null, ?array $templates = null, ?array $emails = null, ?string $search = null, ?array $subscriberIds = null, ?string $transactionId = null, ?string $after = null, ?string $before = null, ?string $idempotencyKey = null, ?float $page = 0)
    {
        $this->channels = $channels;
        $this->templates = $templates;
        $this->emails = $emails;
        $this->search = $search;
        $this->subscriberIds = $subscriberIds;
        $this->transactionId = $transactionId;
        $this->after = $after;
        $this->before = $before;
        $this->idempotencyKey = $idempotencyKey;
        $this->page = $page;
    }
}