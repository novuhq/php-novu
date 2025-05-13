# NovuTopics
(*subscribers->topics*)

## Overview

### Available Operations

* [list](#list) - List topics a subscriber is subscribed to

## list

List topic subscriptions for a subscriber with pagination and filtering

### Example Usage

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

$request = new Operations\SubscribersControllerListSubscriberTopicsRequest(
    subscriberId: '<id>',
);

$response = $sdk->subscribers->topics->list(
    request: $request
);

if ($response->listTopicSubscriptionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                  | Type                                                                                                                                       | Required                                                                                                                                   | Description                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                 | [Operations\SubscribersControllerListSubscriberTopicsRequest](../../Models/Operations/SubscribersControllerListSubscriberTopicsRequest.md) | :heavy_check_mark:                                                                                                                         | The request object to use for the request.                                                                                                 |

### Response

**[?Operations\SubscribersControllerListSubscriberTopicsResponse](../../Models/Operations/SubscribersControllerListSubscriberTopicsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |