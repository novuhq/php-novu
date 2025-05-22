# NovuMessages
(*subscribers->messages*)

## Overview

### Available Operations

* [updateAsSeen](#updateasseen) - Update notification action status
* [markAllAs](#markallas) - Update notifications state

## updateAsSeen

Update in-app (inbox) notification's action status by its unique key identifier **messageId** and type field **type**. 
      **type** field can be **primary** or **secondary**

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$request = new Operations\SubscribersV1ControllerMarkActionAsSeenRequest(
    messageId: '<id>',
    type: '<value>',
    subscriberId: '<id>',
    markMessageActionAsSeenDto: new Components\MarkMessageActionAsSeenDto(
        status: Components\MarkMessageActionAsSeenDtoStatus::Pending,
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

## markAllAs

Update subscriber's multiple in-app (inbox) notifications state such as seen, read, unseen or unread by **subscriberId**. 
      **messageId** is of type mongodbId of notifications

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

$messageMarkAsRequestDto = new Components\MessageMarkAsRequestDto(
    messageId: [
        '<id>',
    ],
    markAs: Components\MessageMarkAsRequestDtoMarkAs::Read,
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