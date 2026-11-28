# Activity.Requests

## Overview

### Available Operations

* [list](#list) - List activity requests
* [retrieve](#retrieve) - Retrieve activity request

## list

Retrieve a list of activity requests with optional filtering and pagination.

### Example Usage

<!-- UsageSnippet language="php" operationID="ActivityController_getLogs" method="get" path="/v1/activity/requests" -->
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

$request = new Operations\ActivityControllerGetLogsRequest(
    statusCodes: [
        200,
        404,
        500,
    ],
    createdGte: 1640995200,
);

$response = $sdk->activity->requests->list(
    request: $request
);

if ($response->getRequestsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ActivityControllerGetLogsRequest](../../Models/Operations/ActivityControllerGetLogsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ActivityControllerGetLogsResponse](../../Models/Operations/ActivityControllerGetLogsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Retrieve detailed traces and information for a specific activity request by ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="ActivityController_getRequestTraces" method="get" path="/v1/activity/requests/{requestId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->activity->requests->retrieve(
    requestId: '<id>'
);

if ($response->getRequestResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `requestId`                       | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\ActivityControllerGetRequestTracesResponse](../../Models/Operations/ActivityControllerGetRequestTracesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |