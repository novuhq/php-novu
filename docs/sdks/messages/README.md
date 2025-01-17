# Messages
(*messages*)

## Overview

A message in Novu represents a notification delivered to a recipient on a particular channel. Messages contain information about the request that triggered its delivery, a view of the data sent to the recipient, and a timeline of its lifecycle events. Learn more about messages.
<https://docs.novu.co/workflows/messages>

### Available Operations

* [delete](#delete) - Delete message
* [deleteByTransactionId](#deletebytransactionid) - Delete messages by transactionId
* [list](#list) - Get messages

## delete

Deletes a message entity from the Novu platform

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



$response = $sdk->messages->delete(
    messageId: '<id>'
);

if ($response->deleteMessageResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `messageId`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\MessagesControllerDeleteMessageResponse](../../Models/Operations/MessagesControllerDeleteMessageResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## deleteByTransactionId

Deletes messages entity from the Novu platform using TransactionId of message

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



$response = $sdk->messages->deleteByTransactionId(
    transactionId: '<id>',
    channel: Operations\Channel::Push

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                 | Type                                                      | Required                                                  | Description                                               |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `transactionId`                                           | *string*                                                  | :heavy_check_mark:                                        | N/A                                                       |
| `channel`                                                 | [?Operations\Channel](../../Models/Operations/Channel.md) | :heavy_minus_sign:                                        | The channel of the message to be deleted                  |

### Response

**[?Operations\MessagesControllerDeleteMessagesByTransactionIdResponse](../../Models/Operations/MessagesControllerDeleteMessagesByTransactionIdResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## list

Returns a list of messages, could paginate using the `page` query parameter

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

$request = new Operations\MessagesControllerGetMessagesRequest();

$response = $sdk->messages->list(
    request: $request
);

if ($response->activitiesResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\MessagesControllerGetMessagesRequest](../../Models/Operations/MessagesControllerGetMessagesRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\MessagesControllerGetMessagesResponse](../../Models/Operations/MessagesControllerGetMessagesResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |