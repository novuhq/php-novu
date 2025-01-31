# NovuNotifications
(*subscribers->notifications*)

## Overview

### Available Operations

* [feed](#feed) - Get in-app notification feed for a particular subscriber
* [unseenCount](#unseencount) - Get the unseen in-app notifications count for subscribers feed

## feed

Get in-app notification feed for a particular subscriber

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\SubscribersV1ControllerGetNotificationsFeedRequest(
    subscriberId: '<id>',
    payload: 'btoa(JSON.stringify({ foo: 123 })) results in base64 encoded string like eyJmb28iOjEyM30=',
);

$response = $sdk->subscribers->notifications->feed(
    request: $request
);

if ($response->feedResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                      | Type                                                                                                                                           | Required                                                                                                                                       | Description                                                                                                                                    |
| ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                     | [Operations\SubscribersV1ControllerGetNotificationsFeedRequest](../../Models/Operations/SubscribersV1ControllerGetNotificationsFeedRequest.md) | :heavy_check_mark:                                                                                                                             | The request object to use for the request.                                                                                                     |

### Response

**[?Operations\SubscribersV1ControllerGetNotificationsFeedResponse](../../Models/Operations/SubscribersV1ControllerGetNotificationsFeedResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## unseenCount

Get the unseen in-app notifications count for subscribers feed

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



$response = $sdk->subscribers->notifications->unseenCount(
    subscriberId: '<id>',
    seen: false,
    limit: 100,
    idempotencyKey: '<value>'

);

if ($response->unseenCountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                      | Type                                           | Required                                       | Description                                    |
| ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- |
| `subscriberId`                                 | *string*                                       | :heavy_check_mark:                             | N/A                                            |
| `seen`                                         | *?bool*                                        | :heavy_minus_sign:                             | Indicates whether to count seen notifications. |
| `limit`                                        | *?float*                                       | :heavy_minus_sign:                             | The maximum number of notifications to return. |
| `idempotencyKey`                               | *?string*                                      | :heavy_minus_sign:                             | A header for idempotency purposes              |

### Response

**[?Operations\SubscribersV1ControllerGetUnseenCountResponse](../../Models/Operations/SubscribersV1ControllerGetUnseenCountResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |