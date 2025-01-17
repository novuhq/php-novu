# NovuSubscribersNotifications
(*subscribers->notifications*)

## Overview

### Available Operations

* [getFeed](#getfeed) - Get in-app notification feed for a particular subscriber
* [unseenCount](#unseencount) - Get the unseen in-app notifications count for subscribers feed

## getFeed

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

$request = new Operations\SubscribersControllerGetNotificationsFeedRequest(
    subscriberId: '<id>',
    payload: 'btoa(JSON.stringify({ foo: 123 })) results in base64 encoded string like eyJmb28iOjEyM30=',
);

$response = $sdk->subscribers->notifications->getFeed(
    request: $request
);

if ($response->feedResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                  | Type                                                                                                                                       | Required                                                                                                                                   | Description                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                 | [Operations\SubscribersControllerGetNotificationsFeedRequest](../../Models/Operations/SubscribersControllerGetNotificationsFeedRequest.md) | :heavy_check_mark:                                                                                                                         | The request object to use for the request.                                                                                                 |

### Response

**[?Operations\SubscribersControllerGetNotificationsFeedResponse](../../Models/Operations/SubscribersControllerGetNotificationsFeedResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

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
    limit: 100

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

### Response

**[?Operations\SubscribersControllerGetUnseenCountResponse](../../Models/Operations/SubscribersControllerGetUnseenCountResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |