# TopicsSubscribers
(*topicsSubscribers*)

## Overview

### Available Operations

* [check](#check) - Check topic subscriber

## check

Check if a subscriber belongs to a certain topic

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->topicsSubscribers->check(
    externalSubscriberId: '<id>',
    topicKey: '<value>',
    idempotencyKey: '<value>'

);

if ($response->topicSubscriberDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `externalSubscriberId`            | *string*                          | :heavy_check_mark:                | The external subscriber id        |
| `topicKey`                        | *string*                          | :heavy_check_mark:                | The topic key                     |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\TopicsV1ControllerGetTopicSubscriberResponse](../../Models/Operations/TopicsV1ControllerGetTopicSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |