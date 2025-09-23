# SubscribersNotifications
(*subscribersNotifications*)

## Overview

### Available Operations

* [getUnseenCount](#getunseencount) - Retrieve unseen notifications count

## getUnseenCount

Retrieve unseen in-app (inbox) notifications count for a subscriber by its unique key identifier **subscriberId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersV1Controller_getUnseenCount" method="get" path="/v1/subscribers/{subscriberId}/notifications/unseen" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribersNotifications->getUnseenCount(
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