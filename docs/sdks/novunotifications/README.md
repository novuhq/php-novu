# Subscribers.Notifications

## Overview

### Available Operations

* [list](#list) - Retrieve subscriber notifications
* [delete](#delete) - Delete a notification
* [completeAction](#completeaction) - Complete a notification action
* [revertAction](#revertaction) - Revert a notification action
* [archive](#archive) - Archive a notification
* [markAsRead](#markasread) - Mark a notification as read
* [snooze](#snooze) - Snooze a notification
* [unarchive](#unarchive) - Unarchive a notification
* [markAsUnread](#markasunread) - Mark a notification as unread
* [unsnooze](#unsnooze) - Unsnooze a notification
* [archiveAll](#archiveall) - Archive all notifications
* [count](#count) - Retrieve subscriber notifications count
* [deleteAll](#deleteall) - Delete all notifications
* [markAllAsRead](#markallasread) - Mark all notifications as read
* [archiveAllRead](#archiveallread) - Archive all read notifications
* [markAsSeen](#markasseen) - Mark notifications as seen
* [getFeed](#getfeed) - Retrieve subscriber notifications

## list

Retrieve in-app (inbox) notifications for a subscriber by its unique key identifier **subscriberId**. 
    Supports filtering by tags, read/archived/snoozed/seen state, data attributes, severity, date range, and context keys.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_getSubscriberNotifications" method="get" path="/v2/subscribers/{subscriberId}/notifications" -->
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

$request = new Operations\SubscribersControllerGetSubscriberNotificationsRequest(
    subscriberId: '<id>',
    offset: 0,
    createdGte: 1704067200000,
    createdLte: 1735689599999,
);

$response = $sdk->subscribers->notifications->list(
    request: $request
);

if ($response->getSubscriberNotificationsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                              | Type                                                                                                                                                   | Required                                                                                                                                               | Description                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                             | [Operations\SubscribersControllerGetSubscriberNotificationsRequest](../../Models/Operations/SubscribersControllerGetSubscriberNotificationsRequest.md) | :heavy_check_mark:                                                                                                                                     | The request object to use for the request.                                                                                                             |

### Response

**[?Operations\SubscribersControllerGetSubscriberNotificationsResponse](../../Models/Operations/SubscribersControllerGetSubscriberNotificationsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete a specific in-app (inbox) notification permanently by its unique identifier **notificationId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_deleteNotification" method="delete" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->notifications->delete(
    subscriberId: '<id>',
    notificationId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `subscriberId`                     | *string*                           | :heavy_check_mark:                 | The identifier of the subscriber   |
| `notificationId`                   | *string*                           | :heavy_check_mark:                 | The identifier of the notification |
| `contextKeys`                      | array<*string*>                    | :heavy_minus_sign:                 | Context keys for filtering         |
| `idempotencyKey`                   | *?string*                          | :heavy_minus_sign:                 | A header for idempotency purposes  |

### Response

**[?Operations\SubscribersControllerDeleteNotificationResponse](../../Models/Operations/SubscribersControllerDeleteNotificationResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## completeAction

Mark a single in-app (inbox) notification's action (primary or secondary) as completed by its unique identifier **notificationId** and action type **actionType**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_completeNotificationAction" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/actions/{actionType}/complete" -->
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

$request = new Operations\SubscribersControllerCompleteNotificationActionRequest(
    subscriberId: '<id>',
    notificationId: '<id>',
    actionType: Operations\ActionType::Secondary,
);

$response = $sdk->subscribers->notifications->completeAction(
    request: $request
);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                              | Type                                                                                                                                                   | Required                                                                                                                                               | Description                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                             | [Operations\SubscribersControllerCompleteNotificationActionRequest](../../Models/Operations/SubscribersControllerCompleteNotificationActionRequest.md) | :heavy_check_mark:                                                                                                                                     | The request object to use for the request.                                                                                                             |

### Response

**[?Operations\SubscribersControllerCompleteNotificationActionResponse](../../Models/Operations/SubscribersControllerCompleteNotificationActionResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## revertAction

Revert a single in-app (inbox) notification's action (primary or secondary) to pending state by its unique identifier **notificationId** and action type **actionType**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_revertNotificationAction" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/actions/{actionType}/revert" -->
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

$request = new Operations\SubscribersControllerRevertNotificationActionRequest(
    subscriberId: '<id>',
    notificationId: '<id>',
    actionType: Operations\PathParamActionType::Primary,
);

$response = $sdk->subscribers->notifications->revertAction(
    request: $request
);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                          | Type                                                                                                                                               | Required                                                                                                                                           | Description                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                         | [Operations\SubscribersControllerRevertNotificationActionRequest](../../Models/Operations/SubscribersControllerRevertNotificationActionRequest.md) | :heavy_check_mark:                                                                                                                                 | The request object to use for the request.                                                                                                         |

### Response

**[?Operations\SubscribersControllerRevertNotificationActionResponse](../../Models/Operations/SubscribersControllerRevertNotificationActionResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## archive

Archive a specific in-app (inbox) notification by its unique identifier **notificationId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_archiveNotification" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/archive" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->notifications->archive(
    subscriberId: '<id>',
    notificationId: '<id>'

);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `subscriberId`                     | *string*                           | :heavy_check_mark:                 | The identifier of the subscriber   |
| `notificationId`                   | *string*                           | :heavy_check_mark:                 | The identifier of the notification |
| `contextKeys`                      | array<*string*>                    | :heavy_minus_sign:                 | Context keys for filtering         |
| `idempotencyKey`                   | *?string*                          | :heavy_minus_sign:                 | A header for idempotency purposes  |

### Response

**[?Operations\SubscribersControllerArchiveNotificationResponse](../../Models/Operations/SubscribersControllerArchiveNotificationResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## markAsRead

Mark a specific in-app (inbox) notification as read by its unique identifier **notificationId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_markNotificationAsRead" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/read" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->notifications->markAsRead(
    subscriberId: '<id>',
    notificationId: '<id>'

);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `subscriberId`                     | *string*                           | :heavy_check_mark:                 | The identifier of the subscriber   |
| `notificationId`                   | *string*                           | :heavy_check_mark:                 | The identifier of the notification |
| `contextKeys`                      | array<*string*>                    | :heavy_minus_sign:                 | Context keys for filtering         |
| `idempotencyKey`                   | *?string*                          | :heavy_minus_sign:                 | A header for idempotency purposes  |

### Response

**[?Operations\SubscribersControllerMarkNotificationAsReadResponse](../../Models/Operations/SubscribersControllerMarkNotificationAsReadResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## snooze

Snooze a specific in-app (inbox) notification by its unique identifier **notificationId** until a specified time.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_snoozeNotification" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/snooze" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;
use novu\Models\Operations;
use novu\Utils;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$request = new Operations\SubscribersControllerSnoozeNotificationRequest(
    subscriberId: '<id>',
    notificationId: '<id>',
    snoozeSubscriberNotificationDto: new Components\SnoozeSubscriberNotificationDto(
        snoozeUntil: Utils\Utils::parseDateTime('2026-03-01T10:00:00Z'),
    ),
);

$response = $sdk->subscribers->notifications->snooze(
    request: $request
);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                              | Type                                                                                                                                   | Required                                                                                                                               | Description                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                             | [Operations\SubscribersControllerSnoozeNotificationRequest](../../Models/Operations/SubscribersControllerSnoozeNotificationRequest.md) | :heavy_check_mark:                                                                                                                     | The request object to use for the request.                                                                                             |

### Response

**[?Operations\SubscribersControllerSnoozeNotificationResponse](../../Models/Operations/SubscribersControllerSnoozeNotificationResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## unarchive

Unarchive a specific in-app (inbox) notification by its unique identifier **notificationId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_unarchiveNotification" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/unarchive" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->notifications->unarchive(
    subscriberId: '<id>',
    notificationId: '<id>'

);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `subscriberId`                     | *string*                           | :heavy_check_mark:                 | The identifier of the subscriber   |
| `notificationId`                   | *string*                           | :heavy_check_mark:                 | The identifier of the notification |
| `contextKeys`                      | array<*string*>                    | :heavy_minus_sign:                 | Context keys for filtering         |
| `idempotencyKey`                   | *?string*                          | :heavy_minus_sign:                 | A header for idempotency purposes  |

### Response

**[?Operations\SubscribersControllerUnarchiveNotificationResponse](../../Models/Operations/SubscribersControllerUnarchiveNotificationResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## markAsUnread

Mark a specific in-app (inbox) notification as unread by its unique identifier **notificationId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_markNotificationAsUnread" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/unread" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->notifications->markAsUnread(
    subscriberId: '<id>',
    notificationId: '<id>'

);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `subscriberId`                     | *string*                           | :heavy_check_mark:                 | The identifier of the subscriber   |
| `notificationId`                   | *string*                           | :heavy_check_mark:                 | The identifier of the notification |
| `contextKeys`                      | array<*string*>                    | :heavy_minus_sign:                 | Context keys for filtering         |
| `idempotencyKey`                   | *?string*                          | :heavy_minus_sign:                 | A header for idempotency purposes  |

### Response

**[?Operations\SubscribersControllerMarkNotificationAsUnreadResponse](../../Models/Operations/SubscribersControllerMarkNotificationAsUnreadResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## unsnooze

Unsnooze a specific in-app (inbox) notification by its unique identifier **notificationId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_unsnoozeNotification" method="patch" path="/v2/subscribers/{subscriberId}/notifications/{notificationId}/unsnooze" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->notifications->unsnooze(
    subscriberId: '<id>',
    notificationId: '<id>'

);

if ($response->inboxNotificationDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `subscriberId`                     | *string*                           | :heavy_check_mark:                 | The identifier of the subscriber   |
| `notificationId`                   | *string*                           | :heavy_check_mark:                 | The identifier of the notification |
| `contextKeys`                      | array<*string*>                    | :heavy_minus_sign:                 | Context keys for filtering         |
| `idempotencyKey`                   | *?string*                          | :heavy_minus_sign:                 | A header for idempotency purposes  |

### Response

**[?Operations\SubscribersControllerUnsnoozeNotificationResponse](../../Models/Operations/SubscribersControllerUnsnoozeNotificationResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## archiveAll

Archive all in-app (inbox) notifications matching the specified filters. Supports context-based filtering.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_archiveAllNotifications" method="post" path="/v2/subscribers/{subscriberId}/notifications/archive" -->
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

$updateAllSubscriberNotificationsDto = new Components\UpdateAllSubscriberNotificationsDto();

$response = $sdk->subscribers->notifications->archiveAll(
    subscriberId: '<id>',
    updateAllSubscriberNotificationsDto: $updateAllSubscriberNotificationsDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                                   | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The identifier of the subscriber                                                                                 |
| `updateAllSubscriberNotificationsDto`                                                                            | [Components\UpdateAllSubscriberNotificationsDto](../../Models/Components/UpdateAllSubscriberNotificationsDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `idempotencyKey`                                                                                                 | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | A header for idempotency purposes                                                                                |

### Response

**[?Operations\SubscribersControllerArchiveAllNotificationsResponse](../../Models/Operations/SubscribersControllerArchiveAllNotificationsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## count

Retrieve count of in-app (inbox) notifications for a subscriber by its unique key identifier **subscriberId**. 
    Supports multiple filters to count in-app (inbox) notifications by different criteria, including context keys.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_getSubscriberNotificationsCount" method="get" path="/v2/subscribers/{subscriberId}/notifications/count" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->notifications->count(
    subscriberId: '<id>',
    filters: '[{"read":false,"archived":false},{"tags":["important"]},{"tags":{"and":[{"or":["a","b"]},{"or":["c"]}]}}]'

);

if ($response->getSubscriberNotificationsCountResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               | Example                                                                                                   |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                            | *string*                                                                                                  | :heavy_check_mark:                                                                                        | The identifier of the subscriber                                                                          |                                                                                                           |
| `filters`                                                                                                 | *string*                                                                                                  | :heavy_check_mark:                                                                                        | Array of filter objects (max 30) to count notifications by different criteria                             | [{"read":false,"archived":false},{"tags":["important"]},{"tags":{"and":[{"or":["a","b"]},{"or":["c"]}]}}] |
| `idempotencyKey`                                                                                          | *?string*                                                                                                 | :heavy_minus_sign:                                                                                        | A header for idempotency purposes                                                                         |                                                                                                           |

### Response

**[?Operations\SubscribersControllerGetSubscriberNotificationsCountResponse](../../Models/Operations/SubscribersControllerGetSubscriberNotificationsCountResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## deleteAll

Permanently delete all in-app (inbox) notifications matching the specified filters. Supports context-based filtering.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_deleteAllNotifications" method="post" path="/v2/subscribers/{subscriberId}/notifications/delete" -->
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

$updateAllSubscriberNotificationsDto = new Components\UpdateAllSubscriberNotificationsDto();

$response = $sdk->subscribers->notifications->deleteAll(
    subscriberId: '<id>',
    updateAllSubscriberNotificationsDto: $updateAllSubscriberNotificationsDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                                   | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The identifier of the subscriber                                                                                 |
| `updateAllSubscriberNotificationsDto`                                                                            | [Components\UpdateAllSubscriberNotificationsDto](../../Models/Components/UpdateAllSubscriberNotificationsDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `idempotencyKey`                                                                                                 | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | A header for idempotency purposes                                                                                |

### Response

**[?Operations\SubscribersControllerDeleteAllNotificationsResponse](../../Models/Operations/SubscribersControllerDeleteAllNotificationsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## markAllAsRead

Mark all in-app (inbox) notifications matching the specified filters as read. Supports context-based filtering.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_markAllNotificationsAsRead" method="post" path="/v2/subscribers/{subscriberId}/notifications/read" -->
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

$updateAllSubscriberNotificationsDto = new Components\UpdateAllSubscriberNotificationsDto();

$response = $sdk->subscribers->notifications->markAllAsRead(
    subscriberId: '<id>',
    updateAllSubscriberNotificationsDto: $updateAllSubscriberNotificationsDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                                   | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The identifier of the subscriber                                                                                 |
| `updateAllSubscriberNotificationsDto`                                                                            | [Components\UpdateAllSubscriberNotificationsDto](../../Models/Components/UpdateAllSubscriberNotificationsDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `idempotencyKey`                                                                                                 | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | A header for idempotency purposes                                                                                |

### Response

**[?Operations\SubscribersControllerMarkAllNotificationsAsReadResponse](../../Models/Operations/SubscribersControllerMarkAllNotificationsAsReadResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## archiveAllRead

Archive all read in-app (inbox) notifications matching the specified filters. Supports context-based filtering.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_archiveAllReadNotifications" method="post" path="/v2/subscribers/{subscriberId}/notifications/read-archive" -->
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

$updateAllSubscriberNotificationsDto = new Components\UpdateAllSubscriberNotificationsDto();

$response = $sdk->subscribers->notifications->archiveAllRead(
    subscriberId: '<id>',
    updateAllSubscriberNotificationsDto: $updateAllSubscriberNotificationsDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                                   | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The identifier of the subscriber                                                                                 |
| `updateAllSubscriberNotificationsDto`                                                                            | [Components\UpdateAllSubscriberNotificationsDto](../../Models/Components/UpdateAllSubscriberNotificationsDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `idempotencyKey`                                                                                                 | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | A header for idempotency purposes                                                                                |

### Response

**[?Operations\SubscribersControllerArchiveAllReadNotificationsResponse](../../Models/Operations/SubscribersControllerArchiveAllReadNotificationsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## markAsSeen

Mark specific and multiple in-app (inbox) notifications as seen. Supports context-based filtering.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_markNotificationsAsSeen" method="post" path="/v2/subscribers/{subscriberId}/notifications/seen" -->
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

$markSubscriberNotificationsAsSeenDto = new Components\MarkSubscriberNotificationsAsSeenDto();

$response = $sdk->subscribers->notifications->markAsSeen(
    subscriberId: '<id>',
    markSubscriberNotificationsAsSeenDto: $markSubscriberNotificationsAsSeenDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `subscriberId`                                                                                                     | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | The identifier of the subscriber                                                                                   |
| `markSubscriberNotificationsAsSeenDto`                                                                             | [Components\MarkSubscriberNotificationsAsSeenDto](../../Models/Components/MarkSubscriberNotificationsAsSeenDto.md) | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `idempotencyKey`                                                                                                   | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | A header for idempotency purposes                                                                                  |

### Response

**[?Operations\SubscribersControllerMarkNotificationsAsSeenResponse](../../Models/Operations/SubscribersControllerMarkNotificationsAsSeenResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

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