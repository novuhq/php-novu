# ChannelEndpoints

## Overview

### Available Operations

* [list](#list) - List channel endpoints
* [create](#create) - Create channel endpoint for a resource
* [retrieve](#retrieve) - Retrieve channel endpoint by identifier
* [update](#update) - Update channel endpoint
* [delete](#delete) - Delete channel endpoint by identifier

## list

Retrieve all channel endpoints for a resource based on query filters.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelEndpointsController_listChannelEndpoints" method="get" path="/v1/channel-endpoints" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$request = new Operations\ChannelEndpointsControllerListChannelEndpointsRequest(
    limit: 10,
    subscriberId: 'subscriber-123',
    contextKeys: [
        'tenant:org-123',
        'region:us-east-1',
    ],
    providerId: Components\ProvidersIdEnum::Slack,
    integrationIdentifier: 'slack-prod',
    connectionIdentifier: 'slack-connection-abc123',
);

$response = $sdk->channelEndpoints->list(
    request: $request
);

if ($response->listChannelEndpointsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                            | Type                                                                                                                                                 | Required                                                                                                                                             | Description                                                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                           | [Operations\ChannelEndpointsControllerListChannelEndpointsRequest](../../Models/Operations/ChannelEndpointsControllerListChannelEndpointsRequest.md) | :heavy_check_mark:                                                                                                                                   | The request object to use for the request.                                                                                                           |

### Response

**[?Operations\ChannelEndpointsControllerListChannelEndpointsResponse](../../Models/Operations/ChannelEndpointsControllerListChannelEndpointsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Create a new channel endpoint for a resource.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelEndpointsController_createChannelEndpoint" method="post" path="/v1/channel-endpoints" -->
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



$response = $sdk->channelEndpoints->create(
    requestBody: new Components\CreateSlackChannelEndpointDto(
        subscriberId: 'subscriber-123',
        integrationIdentifier: 'slack-prod',
        type: Components\CreateSlackChannelEndpointDtoType::SlackChannel,
        endpoint: new Components\SlackChannelEndpointDto(
            channelId: 'C123456789',
        ),
    )
);

if ($response->getChannelEndpointResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                        | Type                                                                                                                                                                                                                                                                                                                             | Required                                                                                                                                                                                                                                                                                                                         | Description                                                                                                                                                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `requestBody`                                                                                                                                                                                                                                                                                                                    | [Components\CreateSlackChannelEndpointDto\|Components\CreateSlackUserEndpointDto\|Components\CreateWebhookEndpointDto\|Components\CreatePhoneEndpointDto\|Components\CreateMsTeamsChannelEndpointDto\|Components\CreateMsTeamsUserEndpointDto](../../Models/Operations/ChannelEndpointsControllerCreateChannelEndpointRequestBody.md) | :heavy_check_mark:                                                                                                                                                                                                                                                                                                               | Channel endpoint creation request. The structure varies based on the type field.                                                                                                                                                                                                                                                 |
| `idempotencyKey`                                                                                                                                                                                                                                                                                                                 | *?string*                                                                                                                                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                               | A header for idempotency purposes                                                                                                                                                                                                                                                                                                |

### Response

**[?Operations\ChannelEndpointsControllerCreateChannelEndpointResponse](../../Models/Operations/ChannelEndpointsControllerCreateChannelEndpointResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Retrieve a specific channel endpoint by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelEndpointsController_getChannelEndpoint" method="get" path="/v1/channel-endpoints/{identifier}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->channelEndpoints->retrieve(
    identifier: '<value>'
);

if ($response->getChannelEndpointResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                     | Type                                          | Required                                      | Description                                   |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| `identifier`                                  | *string*                                      | :heavy_check_mark:                            | The unique identifier of the channel endpoint |
| `idempotencyKey`                              | *?string*                                     | :heavy_minus_sign:                            | A header for idempotency purposes             |

### Response

**[?Operations\ChannelEndpointsControllerGetChannelEndpointResponse](../../Models/Operations/ChannelEndpointsControllerGetChannelEndpointResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Update an existing channel endpoint by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelEndpointsController_updateChannelEndpoint" method="patch" path="/v1/channel-endpoints/{identifier}" -->
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

$updateChannelEndpointRequestDto = new Components\UpdateChannelEndpointRequestDto(
    endpoint: new Components\SlackUserEndpointDto(
        userId: 'U123456789',
    ),
);

$response = $sdk->channelEndpoints->update(
    identifier: '<value>',
    updateChannelEndpointRequestDto: $updateChannelEndpointRequestDto

);

if ($response->getChannelEndpointResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `identifier`                                                                                             | *string*                                                                                                 | :heavy_check_mark:                                                                                       | The unique identifier of the channel endpoint                                                            |
| `updateChannelEndpointRequestDto`                                                                        | [Components\UpdateChannelEndpointRequestDto](../../Models/Components/UpdateChannelEndpointRequestDto.md) | :heavy_check_mark:                                                                                       | N/A                                                                                                      |
| `idempotencyKey`                                                                                         | *?string*                                                                                                | :heavy_minus_sign:                                                                                       | A header for idempotency purposes                                                                        |

### Response

**[?Operations\ChannelEndpointsControllerUpdateChannelEndpointResponse](../../Models/Operations/ChannelEndpointsControllerUpdateChannelEndpointResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete a specific channel endpoint by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelEndpointsController_deleteChannelEndpoint" method="delete" path="/v1/channel-endpoints/{identifier}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->channelEndpoints->delete(
    identifier: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                     | Type                                          | Required                                      | Description                                   |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| `identifier`                                  | *string*                                      | :heavy_check_mark:                            | The unique identifier of the channel endpoint |
| `idempotencyKey`                              | *?string*                                     | :heavy_minus_sign:                            | A header for idempotency purposes             |

### Response

**[?Operations\ChannelEndpointsControllerDeleteChannelEndpointResponse](../../Models/Operations/ChannelEndpointsControllerDeleteChannelEndpointResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |