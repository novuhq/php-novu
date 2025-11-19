# Contexts
(*contexts*)

## Overview

### Available Operations

* [create](#create) - Create a context
* [list](#list) - List all contexts
* [update](#update) - Update a context
* [retrieve](#retrieve) - Retrieve a context
* [delete](#delete) - Delete a context

## create

Create a new context with the specified type, id, and data. Returns 409 if context already exists.

      **type** and **id** are required fields, **data** is optional, if the context already exists, it returns the 409 response

### Example Usage

<!-- UsageSnippet language="php" operationID="ContextsController_createContext" method="post" path="/v2/contexts" -->
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

$createContextRequestDto = new Components\CreateContextRequestDto(
    type: 'tenant',
    id: 'org-acme',
    data: new Components\Data(),
);

$response = $sdk->contexts->create(
    createContextRequestDto: $createContextRequestDto
);

if ($response->getContextResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `createContextRequestDto`                                                                | [Components\CreateContextRequestDto](../../Models/Components/CreateContextRequestDto.md) | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `idempotencyKey`                                                                         | *?string*                                                                                | :heavy_minus_sign:                                                                       | A header for idempotency purposes                                                        |

### Response

**[?Operations\ContextsControllerCreateContextResponse](../../Models/Operations/ContextsControllerCreateContextResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## list

Retrieve a paginated list of all contexts, optionally filtered by type and key pattern.

      **type** and **id** are optional fields, if provided, only contexts with the matching type and id will be returned.
      **search** is an optional field, if provided, only contexts with the matching key pattern will be returned.
      Checkout all possible parameters in the query section below for more details

### Example Usage

<!-- UsageSnippet language="php" operationID="ContextsController_listContexts" method="get" path="/v2/contexts" -->
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

$request = new Operations\ContextsControllerListContextsRequest(
    id: 'tenant-prod-123',
    search: 'tenant',
);

$response = $sdk->contexts->list(
    request: $request
);

if ($response->listContextsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\ContextsControllerListContextsRequest](../../Models/Operations/ContextsControllerListContextsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\ContextsControllerListContextsResponse](../../Models/Operations/ContextsControllerListContextsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Update the data of an existing context.
      **type** and **id** are required fields, **data** is required. Only the data field is updated, the rest of the context is not affected.
      If the context does not exist, it returns the 404 response

### Example Usage

<!-- UsageSnippet language="php" operationID="ContextsController_updateContext" method="patch" path="/v2/contexts/{type}/{id}" -->
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

$updateContextRequestDto = new Components\UpdateContextRequestDto(
    data: new Components\UpdateContextRequestDtoData(),
);

$response = $sdk->contexts->update(
    id: '<id>',
    type: '<value>',
    updateContextRequestDto: $updateContextRequestDto

);

if ($response->getContextResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `id`                                                                                     | *string*                                                                                 | :heavy_check_mark:                                                                       | Context ID                                                                               |
| `type`                                                                                   | *string*                                                                                 | :heavy_check_mark:                                                                       | Context type                                                                             |
| `updateContextRequestDto`                                                                | [Components\UpdateContextRequestDto](../../Models/Components/UpdateContextRequestDto.md) | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `idempotencyKey`                                                                         | *?string*                                                                                | :heavy_minus_sign:                                                                       | A header for idempotency purposes                                                        |

### Response

**[?Operations\ContextsControllerUpdateContextResponse](../../Models/Operations/ContextsControllerUpdateContextResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Retrieve a specific context by its type and id.
      **type** and **id** are required fields, if the context does not exist, it returns the 404 response

### Example Usage

<!-- UsageSnippet language="php" operationID="ContextsController_getContext" method="get" path="/v2/contexts/{type}/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->contexts->retrieve(
    id: '<id>',
    type: '<value>'

);

if ($response->getContextResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `id`                              | *string*                          | :heavy_check_mark:                | Context ID                        |
| `type`                            | *string*                          | :heavy_check_mark:                | Context type                      |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\ContextsControllerGetContextResponse](../../Models/Operations/ContextsControllerGetContextResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete a context by its type and id.
      **type** and **id** are required fields, if the context does not exist, it returns the 404 response

### Example Usage

<!-- UsageSnippet language="php" operationID="ContextsController_deleteContext" method="delete" path="/v2/contexts/{type}/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->contexts->delete(
    id: '<id>',
    type: '<value>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `id`                              | *string*                          | :heavy_check_mark:                | Context ID                        |
| `type`                            | *string*                          | :heavy_check_mark:                | Context type                      |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\ContextsControllerDeleteContextResponse](../../Models/Operations/ContextsControllerDeleteContextResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |