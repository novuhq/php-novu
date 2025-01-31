# NovuMessages
(*subscribers->messages*)

## Overview

### Available Operations

* [updateAsSeen](#updateasseen) - Mark message action as seen
* [markAll](#markall) - Marks all the subscriber messages as read, unread, seen or unseen. Optionally you can pass feed id (or array) to mark messages of a particular feed.
* [markAllAs](#markallas) - Mark a subscriber messages as seen, read, unseen or unread

## updateAsSeen

Mark message action as seen

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\SubscribersV1ControllerMarkActionAsSeenRequest(
    messageId: '<id>',
    type: '<value>',
    subscriberId: '<id>',
    markMessageActionAsSeenDto: new Components\MarkMessageActionAsSeenDto(
        status: Components\MarkMessageActionAsSeenDtoStatus::Done,
    ),
);

$response = $sdk->subscribers->messages->updateAsSeen(
    request: $request
);

if ($response->messageResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                              | Type                                                                                                                                   | Required                                                                                                                               | Description                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                             | [Operations\SubscribersV1ControllerMarkActionAsSeenRequest](../../Models/Operations/SubscribersV1ControllerMarkActionAsSeenRequest.md) | :heavy_check_mark:                                                                                                                     | The request object to use for the request.                                                                                             |

### Response

**[?Operations\SubscribersV1ControllerMarkActionAsSeenResponse](../../Models/Operations/SubscribersV1ControllerMarkActionAsSeenResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

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
    markAllMessageAsRequestDto: $markAllMessageAsRequestDto,
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                                                               | *?string*                                                                                      | :heavy_minus_sign:                                                                             | A header for idempotency purposes                                                              |

### Response

**[?Operations\SubscribersV1ControllerMarkAllUnreadAsReadResponse](../../Models/Operations/SubscribersV1ControllerMarkAllUnreadAsReadResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## markAllAs

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

$response = $sdk->subscribers->messages->markAllAs(
    subscriberId: '<id>',
    messageMarkAsRequestDto: $messageMarkAsRequestDto,
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                                                         | *?string*                                                                                | :heavy_minus_sign:                                                                       | A header for idempotency purposes                                                        |

### Response

**[?Operations\SubscribersV1ControllerMarkMessagesAsResponse](../../Models/Operations/SubscribersV1ControllerMarkMessagesAsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |