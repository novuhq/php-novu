# NovuMessages
(*subscribers->messages*)

## Overview

### Available Operations

* [updateAction](#updateaction) - Mark message action as seen
* [markAll](#markall) - Marks all the subscriber messages as read, unread, seen or unseen. Optionally you can pass feed id (or array) to mark messages of a particular feed.
* [markAs](#markas) - Mark a subscriber messages as seen, read, unseen or unread

## updateAction

Mark message action as seen

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

$markMessageActionAsSeenDto = new Components\MarkMessageActionAsSeenDto(
    status: Components\MarkMessageActionAsSeenDtoStatus::Pending,
);

$response = $sdk->subscribers->messages->updateAction(
    messageId: '<id>',
    type: '<value>',
    subscriberId: '<id>',
    markMessageActionAsSeenDto: $markMessageActionAsSeenDto

);

if ($response->messageResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `messageId`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `type`                                                                                         | *mixed*                                                                                        | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `subscriberId`                                                                                 | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `markMessageActionAsSeenDto`                                                                   | [Components\MarkMessageActionAsSeenDto](../../Models/Components/MarkMessageActionAsSeenDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\SubscribersControllerMarkActionAsSeenResponse](../../Models/Operations/SubscribersControllerMarkActionAsSeenResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## markAll

Marks all the subscriber messages as read, unread, seen or unseen. Optionally you can pass feed id (or array) to mark messages of a particular feed.

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

$markAllMessageAsRequestDto = new Components\MarkAllMessageAsRequestDto(
    markAs: Components\MarkAllMessageAsRequestDtoMarkAs::Seen,
);

$response = $sdk->subscribers->messages->markAll(
    subscriberId: '<id>',
    markAllMessageAsRequestDto: $markAllMessageAsRequestDto

);

if ($response->number !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                 | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `markAllMessageAsRequestDto`                                                                   | [Components\MarkAllMessageAsRequestDto](../../Models/Components/MarkAllMessageAsRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\SubscribersControllerMarkAllUnreadAsReadResponse](../../Models/Operations/SubscribersControllerMarkAllUnreadAsReadResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## markAs

Mark a subscriber messages as seen, read, unseen or unread

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

$messageMarkAsRequestDto = new Components\MessageMarkAsRequestDto(
    messageId: '<id>',
    markAs: Components\MarkAs::Unread,
);

$response = $sdk->subscribers->messages->markAs(
    subscriberId: '<id>',
    messageMarkAsRequestDto: $messageMarkAsRequestDto

);

if ($response->messageResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `subscriberId`                                                                           | *string*                                                                                 | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `messageMarkAsRequestDto`                                                                | [Components\MessageMarkAsRequestDto](../../Models/Components/MessageMarkAsRequestDto.md) | :heavy_check_mark:                                                                       | N/A                                                                                      |

### Response

**[?Operations\SubscribersControllerMarkMessagesAsResponse](../../Models/Operations/SubscribersControllerMarkMessagesAsResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |