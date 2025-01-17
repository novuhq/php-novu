<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Operations;

use novu\Utils\SpeakeasyMetadata;
class TopicsControllerListTopicsRequest
{
    /**
     * A filter key to apply to the results
     *
     * @var ?string $key
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=key')]
    public ?string $key = null;

    /**
     * The page number to retrieve (starts from 0)
     *
     * @var ?int $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;

    /**
     * The number of items to return per page (default: 10)
     *
     * @var ?int $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;

    /**
     * @param  ?int  $page
     * @param  ?int  $pageSize
     * @param  ?string  $key
     */
    public function __construct(?string $key = null, ?int $page = 0, ?int $pageSize = 10)
    {
        $this->key = $key;
        $this->page = $page;
        $this->pageSize = $pageSize;
    }
}