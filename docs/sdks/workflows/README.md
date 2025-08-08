# Workflows
(*workflows*)

## Overview

All notifications are sent via a workflow. Each workflow acts as a container for the logic and blueprint that are associated with a type of notification in your system.
<https://docs.novu.co/workflows>

### Available Operations

* [create](#create) - Create a workflow
* [list](#list) - List all workflows
* [update](#update) - Update a workflow
* [get](#get) - Retrieve a workflow
* [delete](#delete) - Delete a workflow
* [patch](#patch) - Update a workflow
* [sync](#sync) - Sync a workflow

## create

Creates a new workflow in the Novu Cloud environment

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_create" method="post" path="/v2/workflows" -->
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

$createWorkflowDto = new Components\CreateWorkflowDto(
    name: '<value>',
    workflowId: '<id>',
    steps: [],
    preferences: new Components\PreferencesRequestDto(
        user: new Components\UserWorkflowPreferencesDto(
            all: new Components\WorkflowPreferenceDto(),
            channels: [
                'email' => new Components\ChannelPreferenceDto(),
                'sms' => new Components\ChannelPreferenceDto(
                    enabled: false,
                ),
            ],
        ),
        workflow: new Components\Workflow(
            all: new Components\WorkflowPreferenceDto(),
            channels: [
                'email' => new Components\ChannelPreferenceDto(),
                'sms' => new Components\ChannelPreferenceDto(
                    enabled: false,
                ),
            ],
        ),
    ),
);

$response = $sdk->workflows->create(
    createWorkflowDto: $createWorkflowDto
);

if ($response->workflowResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `createWorkflowDto`                                                          | [Components\CreateWorkflowDto](../../Models/Components/CreateWorkflowDto.md) | :heavy_check_mark:                                                           | Workflow creation details                                                    |
| `idempotencyKey`                                                             | *?string*                                                                    | :heavy_minus_sign:                                                           | A header for idempotency purposes                                            |

### Response

**[?Operations\WorkflowControllerCreateResponse](../../Models/Operations/WorkflowControllerCreateResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## list

Retrieves a list of workflows with optional filtering and pagination

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_searchWorkflows" method="get" path="/v2/workflows" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->workflows->list(
    request: $request
);

if ($response->listWorkflowResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\WorkflowControllerSearchWorkflowsRequest](../../Models/Operations/WorkflowControllerSearchWorkflowsRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\WorkflowControllerSearchWorkflowsResponse](../../Models/Operations/WorkflowControllerSearchWorkflowsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Updates the details of an existing workflow, here **workflowId** is the identifier of the workflow

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_update" method="put" path="/v2/workflows/{workflowId}" -->
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

$updateWorkflowDto = new Components\UpdateWorkflowDto(
    name: '<value>',
    steps: [],
    preferences: new Components\PreferencesRequestDto(
        user: new Components\UserWorkflowPreferencesDto(
            all: new Components\WorkflowPreferenceDto(),
            channels: [
                'email' => new Components\ChannelPreferenceDto(),
                'sms' => new Components\ChannelPreferenceDto(
                    enabled: false,
                ),
            ],
        ),
        workflow: new Components\Workflow(
            all: new Components\WorkflowPreferenceDto(),
            channels: [
                'email' => new Components\ChannelPreferenceDto(),
                'sms' => new Components\ChannelPreferenceDto(
                    enabled: false,
                ),
            ],
        ),
    ),
    origin: Components\ResourceOriginEnum::External,
);

$response = $sdk->workflows->update(
    workflowId: '<id>',
    updateWorkflowDto: $updateWorkflowDto

);

if ($response->workflowResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `workflowId`                                                                 | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `updateWorkflowDto`                                                          | [Components\UpdateWorkflowDto](../../Models/Components/UpdateWorkflowDto.md) | :heavy_check_mark:                                                           | Workflow update details                                                      |
| `idempotencyKey`                                                             | *?string*                                                                    | :heavy_minus_sign:                                                           | A header for idempotency purposes                                            |

### Response

**[?Operations\WorkflowControllerUpdateResponse](../../Models/Operations/WorkflowControllerUpdateResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## get

Fetches details of a specific workflow by its unique identifier **workflowId**

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_getWorkflow" method="get" path="/v2/workflows/{workflowId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->workflows->get(
    workflowId: '<id>'
);

if ($response->workflowResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `workflowId`                      | *string*                          | :heavy_check_mark:                | N/A                               |
| `environmentId`                   | *?string*                         | :heavy_minus_sign:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\WorkflowControllerGetWorkflowResponse](../../Models/Operations/WorkflowControllerGetWorkflowResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Removes a specific workflow by its unique identifier **workflowId**

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_removeWorkflow" method="delete" path="/v2/workflows/{workflowId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->workflows->delete(
    workflowId: '<id>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `workflowId`                      | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\WorkflowControllerRemoveWorkflowResponse](../../Models/Operations/WorkflowControllerRemoveWorkflowResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## patch

Partially updates a workflow by its unique identifier **workflowId**

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_patchWorkflow" method="patch" path="/v2/workflows/{workflowId}" -->
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

$patchWorkflowDto = new Components\PatchWorkflowDto();

$response = $sdk->workflows->patch(
    workflowId: '<id>',
    patchWorkflowDto: $patchWorkflowDto

);

if ($response->workflowResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `workflowId`                                                               | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `patchWorkflowDto`                                                         | [Components\PatchWorkflowDto](../../Models/Components/PatchWorkflowDto.md) | :heavy_check_mark:                                                         | Workflow patch details                                                     |
| `idempotencyKey`                                                           | *?string*                                                                  | :heavy_minus_sign:                                                         | A header for idempotency purposes                                          |

### Response

**[?Operations\WorkflowControllerPatchWorkflowResponse](../../Models/Operations/WorkflowControllerPatchWorkflowResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## sync

Synchronizes a workflow to the target environment

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_sync" method="put" path="/v2/workflows/{workflowId}/sync" -->
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

$syncWorkflowDto = new Components\SyncWorkflowDto(
    targetEnvironmentId: '<id>',
);

$response = $sdk->workflows->sync(
    workflowId: '<id>',
    syncWorkflowDto: $syncWorkflowDto

);

if ($response->workflowResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `workflowId`                                                             | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `syncWorkflowDto`                                                        | [Components\SyncWorkflowDto](../../Models/Components/SyncWorkflowDto.md) | :heavy_check_mark:                                                       | Sync workflow details                                                    |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |

### Response

**[?Operations\WorkflowControllerSyncResponse](../../Models/Operations/WorkflowControllerSyncResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |