# TopicsSubscribers
(*topicsSubscribers*)

## Overview

### Available Operations

* [add](#add) - Subscribers addition

## add

Add subscribers to a topic by key

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$addSubscribersRequestDto = new Components\AddSubscribersRequestDto(
    subscribers: [
        '<value>',
    ],
);

$response = $sdk->topicsSubscribers->add(
    topicKey: '<value>',
    addSubscribersRequestDto: $addSubscribersRequestDto

);

if ($response->assignSubscriberToTopicDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `topicKey`                                                                                 | *string*                                                                                   | :heavy_check_mark:                                                                         | The topic key                                                                              |
| `addSubscribersRequestDto`                                                                 | [Components\AddSubscribersRequestDto](../../Models/Components/AddSubscribersRequestDto.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\TopicsControllerAssignResponse](../../Models/Operations/TopicsControllerAssignResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |