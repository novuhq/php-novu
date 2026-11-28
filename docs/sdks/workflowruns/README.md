# Activity.WorkflowRuns

## Overview

### Available Operations

* [list](#list) - List workflow runs
* [retrieve](#retrieve) - Retrieve workflow run

## list

Retrieve a list of workflow runs with optional filtering and pagination.

### Example Usage

<!-- UsageSnippet language="php" operationID="ActivityController_getWorkflowRuns" method="get" path="/v1/activity/workflow-runs" -->
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

$request = new Operations\ActivityControllerGetWorkflowRunsRequest();

$response = $sdk->activity->workflowRuns->list(
    request: $request
);

if ($response->getWorkflowRunsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\ActivityControllerGetWorkflowRunsRequest](../../Models/Operations/ActivityControllerGetWorkflowRunsRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\ActivityControllerGetWorkflowRunsResponse](../../Models/Operations/ActivityControllerGetWorkflowRunsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Retrieve detailed information for a specific workflow run by ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="ActivityController_getWorkflowRun" method="get" path="/v1/activity/workflow-runs/{workflowRunId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->activity->workflowRuns->retrieve(
    workflowRunId: '<id>'
);

if ($response->getWorkflowRunResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `workflowRunId`                   | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\ActivityControllerGetWorkflowRunResponse](../../Models/Operations/ActivityControllerGetWorkflowRunResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |