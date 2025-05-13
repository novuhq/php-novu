# Subscriptions
(*topics->subscriptions*)

## Overview

### Available Operations

* [list](#list) - List topic subscriptions
* [create](#create) - Create topic subscriptions, if the topic does not exist, it will be created.
* [delete](#delete) - Delete topic subscriptions

## list

List topic subscriptions

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$request = new Operations\TopicsControllerListTopicSubscriptionsRequest(
    topicKey: '<value>',
);

$response = $sdk->topics->subscriptions->list(
    request: $request
);

if ($response->listTopicSubscriptionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\TopicsControllerListTopicSubscriptionsRequest](../../Models/Operations/TopicsControllerListTopicSubscriptionsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\TopicsControllerListTopicSubscriptionsResponse](../../Models/Operations/TopicsControllerListTopicSubscriptionsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Create topic subscriptions, if the topic does not exist, it will be created.

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

$createTopicSubscriptionsRequestDto = new Components\CreateTopicSubscriptionsRequestDto(
    subscriberIds: [
        'subscriberId1',
        'subscriberId2',
    ],
);

$response = $sdk->topics->subscriptions->create(
    topicKey: '<value>',
    createTopicSubscriptionsRequestDto: $createTopicSubscriptionsRequestDto,
    idempotencyKey: '<value>'

);

if ($response->createTopicSubscriptionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `topicKey`                                                                                                     | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The key identifier of the topic                                                                                |
| `createTopicSubscriptionsRequestDto`                                                                           | [Components\CreateTopicSubscriptionsRequestDto](../../Models/Components/CreateTopicSubscriptionsRequestDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `idempotencyKey`                                                                                               | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | A header for idempotency purposes                                                                              |

### Response

**[?Operations\TopicsControllerCreateTopicSubscriptionsResponse](../../Models/Operations/TopicsControllerCreateTopicSubscriptionsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete topic subscriptions

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

$deleteTopicSubscriptionsRequestDto = new Components\DeleteTopicSubscriptionsRequestDto(
    subscriberIds: [
        'subscriberId1',
        'subscriberId2',
    ],
);

$response = $sdk->topics->subscriptions->delete(
    topicKey: '<value>',
    deleteTopicSubscriptionsRequestDto: $deleteTopicSubscriptionsRequestDto,
    idempotencyKey: '<value>'

);

if ($response->deleteTopicSubscriptionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `topicKey`                                                                                                     | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The key identifier of the topic                                                                                |
| `deleteTopicSubscriptionsRequestDto`                                                                           | [Components\DeleteTopicSubscriptionsRequestDto](../../Models/Components/DeleteTopicSubscriptionsRequestDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `idempotencyKey`                                                                                               | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | A header for idempotency purposes                                                                              |

### Response

**[?Operations\TopicsControllerDeleteTopicSubscriptionsResponse](../../Models/Operations/TopicsControllerDeleteTopicSubscriptionsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |