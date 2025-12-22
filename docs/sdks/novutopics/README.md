# Subscribers.Topics

## Overview

### Available Operations

* [list](#list) - Retrieve subscriber subscriptions

## list

Retrieve subscriber's topic subscriptions by its unique key identifier **subscriberId**. 
    Checkout all available filters in the query section.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_listSubscriberTopics" method="get" path="/v2/subscribers/{subscriberId}/subscriptions" -->
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
    limit: 10,
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