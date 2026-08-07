# Agents.Integrations

## Overview

### Available Operations

* [create](#create) - Create an agent integration
* [list](#list) - List agent integrations
* [update](#update) - Update an agent integration
* [delete](#delete) - Delete an agent integration

## create

Create a link between an agent (by identifier) and an integration (by integration **identifier**, not the internal _id).

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentIntegrationsController_addAgentIntegration" method="post" path="/v1/agents/{identifier}/integrations" -->
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

$addAgentIntegrationRequestDto = new Components\AddAgentIntegrationRequestDto();

$response = $sdk->agents->integrations->create(
    identifier: '<value>',
    addAgentIntegrationRequestDto: $addAgentIntegrationRequestDto

);

if ($response->agentIntegrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `identifier`                                                                                         | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `addAgentIntegrationRequestDto`                                                                      | [Components\AddAgentIntegrationRequestDto](../../Models/Components/AddAgentIntegrationRequestDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `idempotencyKey`                                                                                     | *?string*                                                                                            | :heavy_minus_sign:                                                                                   | A header for idempotency purposes                                                                    |

### Response

**[?Operations\AgentIntegrationsControllerAddAgentIntegrationResponse](../../Models/Operations/AgentIntegrationsControllerAddAgentIntegrationResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## list

Retrieve integration links for an agent identified by its external identifier. Supports cursor pagination via **after**, **before**, **limit**, **orderBy**, and **orderDirection**.

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentIntegrationsController_listAgentIntegrations" method="get" path="/v1/agents/{identifier}/integrations" -->
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

$request = new Operations\AgentIntegrationsControllerListAgentIntegrationsRequest(
    identifier: '<value>',
    limit: 10,
);

$response = $sdk->agents->integrations->list(
    request: $request
);

if ($response->listAgentIntegrationsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                | Type                                                                                                                                                     | Required                                                                                                                                                 | Description                                                                                                                                              |
| -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                               | [Operations\AgentIntegrationsControllerListAgentIntegrationsRequest](../../Models/Operations/AgentIntegrationsControllerListAgentIntegrationsRequest.md) | :heavy_check_mark:                                                                                                                                       | The request object to use for the request.                                                                                                               |

### Response

**[?Operations\AgentIntegrationsControllerListAgentIntegrationsResponse](../../Models/Operations/AgentIntegrationsControllerListAgentIntegrationsResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## update

Update which integration a link points to (by integration **identifier**, not the internal _id).

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentIntegrationsController_updateAgentIntegration" method="patch" path="/v1/agents/{identifier}/integrations/{agentIntegrationId}" -->
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

$updateAgentIntegrationRequestDto = new Components\UpdateAgentIntegrationRequestDto(
    integrationIdentifier: '<value>',
);

$response = $sdk->agents->integrations->update(
    identifier: '<value>',
    agentIntegrationId: '<id>',
    updateAgentIntegrationRequestDto: $updateAgentIntegrationRequestDto

);

if ($response->agentIntegrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `identifier`                                                                                               | *string*                                                                                                   | :heavy_check_mark:                                                                                         | N/A                                                                                                        |
| `agentIntegrationId`                                                                                       | *string*                                                                                                   | :heavy_check_mark:                                                                                         | N/A                                                                                                        |
| `updateAgentIntegrationRequestDto`                                                                         | [Components\UpdateAgentIntegrationRequestDto](../../Models/Components/UpdateAgentIntegrationRequestDto.md) | :heavy_check_mark:                                                                                         | N/A                                                                                                        |
| `idempotencyKey`                                                                                           | *?string*                                                                                                  | :heavy_minus_sign:                                                                                         | A header for idempotency purposes                                                                          |

### Response

**[?Operations\AgentIntegrationsControllerUpdateAgentIntegrationResponse](../../Models/Operations/AgentIntegrationsControllerUpdateAgentIntegrationResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## delete

Delete a specific agent-integration link by its document id.

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentIntegrationsController_removeAgentIntegration" method="delete" path="/v1/agents/{identifier}/integrations/{agentIntegrationId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->agents->integrations->delete(
    identifier: '<value>',
    agentIntegrationId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `identifier`                      | *string*                          | :heavy_check_mark:                | N/A                               |
| `agentIntegrationId`              | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\AgentIntegrationsControllerRemoveAgentIntegrationResponse](../../Models/Operations/AgentIntegrationsControllerRemoveAgentIntegrationResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |