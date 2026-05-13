# EnvironmentVariables

## Overview

### Available Operations

* [list](#list) - List all variables
* [create](#create) - Create a variable
* [retrieve](#retrieve) - Get environment variable
* [update](#update) - Update a variable
* [delete](#delete) - Delete environment variable
* [usage](#usage) - Retrieve a variable usage

## list

Returns all environment variables for the current organization. Secret values are masked.

### Example Usage

<!-- UsageSnippet language="php" operationID="EnvironmentVariablesController_listEnvironmentVariables" method="get" path="/v1/environment-variables" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->environmentVariables->list(

);

if ($response->environmentVariableResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `search`                                                 | *?string*                                                | :heavy_minus_sign:                                       | Filter variables by key (case-insensitive partial match) |
| `idempotencyKey`                                         | *?string*                                                | :heavy_minus_sign:                                       | A header for idempotency purposes                        |

### Response

**[?Operations\EnvironmentVariablesControllerListEnvironmentVariablesResponse](../../Models/Operations/EnvironmentVariablesControllerListEnvironmentVariablesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Creates a new environment variable. Keys must be uppercase with underscores only (e.g. BASE_URL). Secret variables are encrypted at rest and masked in API responses.

### Example Usage

<!-- UsageSnippet language="php" operationID="EnvironmentVariablesController_createEnvironmentVariable" method="post" path="/v1/environment-variables" -->
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

$createEnvironmentVariableRequestDto = new Components\CreateEnvironmentVariableRequestDto(
    key: '<key>',
);

$response = $sdk->environmentVariables->create(
    createEnvironmentVariableRequestDto: $createEnvironmentVariableRequestDto
);

if ($response->environmentVariableResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `createEnvironmentVariableRequestDto`                                                                            | [Components\CreateEnvironmentVariableRequestDto](../../Models/Components/CreateEnvironmentVariableRequestDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `idempotencyKey`                                                                                                 | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | A header for idempotency purposes                                                                                |

### Response

**[?Operations\EnvironmentVariablesControllerCreateEnvironmentVariableResponse](../../Models/Operations/EnvironmentVariablesControllerCreateEnvironmentVariableResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 404, 405, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## retrieve

Returns a single environment variable by key. Secret values are masked.

### Example Usage

<!-- UsageSnippet language="php" operationID="EnvironmentVariablesController_getEnvironmentVariable" method="get" path="/v1/environment-variables/{variableKey}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->environmentVariables->retrieve(
    variableKey: 'BASE_URL'
);

if ($response->environmentVariableResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `variableKey`                                              | *string*                                                   | :heavy_check_mark:                                         | The unique key of the environment variable (e.g. BASE_URL) | BASE_URL                                                   |
| `idempotencyKey`                                           | *?string*                                                  | :heavy_minus_sign:                                         | A header for idempotency purposes                          |                                                            |

### Response

**[?Operations\EnvironmentVariablesControllerGetEnvironmentVariableResponse](../../Models/Operations/EnvironmentVariablesControllerGetEnvironmentVariableResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## update

Updates an existing environment variable. Providing `values` merges them into the existing per-environment values by `_environmentId`; envs not present in the request keep their stored value. Submitting the masked secret placeholder (the value returned by read endpoints for secret variables) as a real value is rejected.

### Example Usage

<!-- UsageSnippet language="php" operationID="EnvironmentVariablesController_updateEnvironmentVariable" method="patch" path="/v1/environment-variables/{variableKey}" -->
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

$updateEnvironmentVariableRequestDto = new Components\UpdateEnvironmentVariableRequestDto();

$response = $sdk->environmentVariables->update(
    variableKey: 'BASE_URL',
    updateEnvironmentVariableRequestDto: $updateEnvironmentVariableRequestDto

);

if ($response->environmentVariableResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      | Example                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `variableKey`                                                                                                    | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The unique key of the environment variable (e.g. BASE_URL)                                                       | BASE_URL                                                                                                         |
| `updateEnvironmentVariableRequestDto`                                                                            | [Components\UpdateEnvironmentVariableRequestDto](../../Models/Components/UpdateEnvironmentVariableRequestDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |                                                                                                                  |
| `idempotencyKey`                                                                                                 | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | A header for idempotency purposes                                                                                |                                                                                                                  |

### Response

**[?Operations\EnvironmentVariablesControllerUpdateEnvironmentVariableResponse](../../Models/Operations/EnvironmentVariablesControllerUpdateEnvironmentVariableResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## delete

Deletes an environment variable by key.

### Example Usage

<!-- UsageSnippet language="php" operationID="EnvironmentVariablesController_deleteEnvironmentVariable" method="delete" path="/v1/environment-variables/{variableKey}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->environmentVariables->delete(
    variableKey: 'BASE_URL'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `variableKey`                                              | *string*                                                   | :heavy_check_mark:                                         | The unique key of the environment variable (e.g. BASE_URL) | BASE_URL                                                   |
| `idempotencyKey`                                           | *?string*                                                  | :heavy_minus_sign:                                         | A header for idempotency purposes                          |                                                            |

### Response

**[?Operations\EnvironmentVariablesControllerDeleteEnvironmentVariableResponse](../../Models/Operations/EnvironmentVariablesControllerDeleteEnvironmentVariableResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## usage

Returns the workflows that reference this environment variable via `{{env.KEY}}` in their step controls. **variableId** is required.

### Example Usage

<!-- UsageSnippet language="php" operationID="EnvironmentVariablesController_getEnvironmentVariableUsage" method="get" path="/v1/environment-variables/{variableKey}/usage" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->environmentVariables->usage(
    variableKey: 'BASE_URL'
);

if ($response->getEnvironmentVariableUsageResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `variableKey`                                              | *string*                                                   | :heavy_check_mark:                                         | The unique key of the environment variable (e.g. BASE_URL) | BASE_URL                                                   |
| `idempotencyKey`                                           | *?string*                                                  | :heavy_minus_sign:                                         | A header for idempotency purposes                          |                                                            |

### Response

**[?Operations\EnvironmentVariablesControllerGetEnvironmentVariableUsageResponse](../../Models/Operations/EnvironmentVariablesControllerGetEnvironmentVariableUsageResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |