# NovuTopicsSubscribers
(*topics->subscribers*)

## Overview

### Available Operations

* [assign](#assign) - Subscribers addition
* [remove](#remove) - Subscribers removal

## assign

Add subscribers to a topic by key

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$addSubscribersRequestDto = new Components\AddSubscribersRequestDto(
    subscribers: [
        '<value>',
    ],
);

$response = $sdk->topics->subscribers->assign(
    topicKey: '<value>',
    addSubscribersRequestDto: $addSubscribersRequestDto,
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                                                           | *?string*                                                                                  | :heavy_minus_sign:                                                                         | A header for idempotency purposes                                                          |

### Response

**[?Operations\TopicsControllerAssignResponse](../../Models/Operations/TopicsControllerAssignResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

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
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$removeSubscribersRequestDto = new Components\RemoveSubscribersRequestDto(
    subscribers: [
        '<value>',
    ],
);

$response = $sdk->topics->subscribers->remove(
    topicKey: '<value>',
    removeSubscribersRequestDto: $removeSubscribersRequestDto,
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                                                                 | *?string*                                                                                        | :heavy_minus_sign:                                                                               | A header for idempotency purposes                                                                |

### Response

**[?Operations\TopicsControllerRemoveSubscribersResponse](../../Models/Operations/TopicsControllerRemoveSubscribersResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |