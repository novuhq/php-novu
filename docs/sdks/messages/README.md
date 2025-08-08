# Messages
(*messages*)

## Overview

A message in Novu represents a notification delivered to a recipient on a particular channel. Messages contain information about the request that triggered its delivery, a view of the data sent to the recipient, and a timeline of its lifecycle events. Learn more about messages.
<https://docs.novu.co/workflows/messages>

### Available Operations

* [get](#get) - List all messages
* [delete](#delete) - Delete a message
* [deleteByTransactionId](#deletebytransactionid) - Delete messages by transactionId

## get

List all messages for the current environment. 
    This API supports filtering by **channel**, **subscriberId**, and **transactionId**. 
    This API returns a paginated list of messages.

### Example Usage

<!-- UsageSnippet language="php" operationID="MessagesController_getMessages" method="get" path="/v1/messages" -->
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

$request = new Operations\MessagesControllerGetMessagesRequest();

$response = $sdk->messages->get(
    request: $request
);

if ($response->messagesResponseDto !== null) {
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

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete a message entity from the Novu platform by **messageId**. 
    This action is irreversible. **messageId** is required and of mongodbId type.

### Example Usage

<!-- UsageSnippet language="php" operationID="MessagesController_deleteMessage" method="delete" path="/v1/messages/{messageId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->messages->delete(
    messageId: '507f1f77bcf86cd799439011'
);

if ($response->deleteMessageResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       | Example                           |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `messageId`                       | *string*                          | :heavy_check_mark:                | N/A                               | 507f1f77bcf86cd799439011          |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |                                   |

### Response

**[?Operations\MessagesControllerDeleteMessageResponse](../../Models/Operations/MessagesControllerDeleteMessageResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## deleteByTransactionId

Delete multiple messages from the Novu platform using **transactionId** of triggered event. 
    This API supports filtering by **channel** and delete all messages associated with the **transactionId**.

### Example Usage

<!-- UsageSnippet language="php" operationID="MessagesController_deleteMessagesByTransactionId" method="delete" path="/v1/messages/transaction/{transactionId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->messages->deleteByTransactionId(
    transactionId: '507f1f77bcf86cd799439011'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                 | Type                                                      | Required                                                  | Description                                               | Example                                                   |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `transactionId`                                           | *string*                                                  | :heavy_check_mark:                                        | N/A                                                       | 507f1f77bcf86cd799439011                                  |
| `channel`                                                 | [?Operations\Channel](../../Models/Operations/Channel.md) | :heavy_minus_sign:                                        | The channel of the message to be deleted                  |                                                           |
| `idempotencyKey`                                          | *?string*                                                 | :heavy_minus_sign:                                        | A header for idempotency purposes                         |                                                           |

### Response

**[?Operations\MessagesControllerDeleteMessagesByTransactionIdResponse](../../Models/Operations/MessagesControllerDeleteMessagesByTransactionIdResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |