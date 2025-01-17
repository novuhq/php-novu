# NovuTopicsSubscribers
(*topics->subscribers*)

## Overview

### Available Operations

* [check](#check) - Check topic subscriber
* [remove](#remove) - Subscribers removal

## check

Check if a subscriber belongs to a certain topic

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->topics->subscribers->check(
    externalSubscriberId: '<id>',
    topicKey: '<value>'

);

if ($response->topicSubscriberDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                  | Type                       | Required                   | Description                |
| -------------------------- | -------------------------- | -------------------------- | -------------------------- |
| `externalSubscriberId`     | *string*                   | :heavy_check_mark:         | The external subscriber id |
| `topicKey`                 | *string*                   | :heavy_check_mark:         | The topic key              |

### Response

**[?Operations\TopicsControllerGetTopicSubscriberResponse](../../Models/Operations/TopicsControllerGetTopicSubscriberResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## remove

Remove subscribers from a topic

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

$removeSubscribersRequestDto = new Components\RemoveSubscribersRequestDto(
    subscribers: [
        '<value>',
    ],
);

$response = $sdk->topics->subscribers->remove(
    topicKey: '<value>',
    removeSubscribersRequestDto: $removeSubscribersRequestDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `topicKey`                                                                                       | *string*                                                                                         | :heavy_check_mark:                                                                               | The topic key                                                                                    |
| `removeSubscribersRequestDto`                                                                    | [Components\RemoveSubscribersRequestDto](../../Models/Components/RemoveSubscribersRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |

### Response

**[?Operations\TopicsControllerRemoveSubscribersResponse](../../Models/Operations/TopicsControllerRemoveSubscribersResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |