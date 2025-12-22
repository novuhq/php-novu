# Subscribers.Notifications

## Overview

### Available Operations

* [getFeed](#getfeed) - Retrieve subscriber notifications

## getFeed

Retrieve subscriber in-app (inbox) notifications by its unique key identifier **subscriberId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersV1Controller_getNotificationsFeed" method="get" path="/v1/subscribers/{subscriberId}/notifications/feed" -->
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

$request = new Operations\SubscribersV1ControllerGetNotificationsFeedRequest(
    subscriberId: '<id>',
    page: 0,
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