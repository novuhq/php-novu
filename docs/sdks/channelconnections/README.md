# ChannelConnections

## Overview

### Available Operations

* [list](#list) - List all channel connections
* [create](#create) - Create a channel connection
* [retrieve](#retrieve) - Retrieve a channel connection
* [update](#update) - Update a channel connection
* [delete](#delete) - Delete a channel connection

## list

List all channel connections for a resource.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelConnectionsController_listChannelConnections" method="get" path="/v1/channel-connections" -->
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

$request = new Operations\ChannelConnectionsControllerListChannelConnectionsRequest(
    limit: 10,
    subscriberId: 'subscriber-123',
    channel: Operations\Channel::Chat,
    providerId: Components\ProvidersIdEnum::Slack,
    integrationIdentifier: 'slack-prod',
    contextKeys: [
        'tenant:org-123',
        'region:us-east-1',
    ],
);

$response = $sdk->channelConnections->list(
    request: $request
);

if ($response->listChannelConnectionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                    | Type                                                                                                                                                         | Required                                                                                                                                                     | Description                                                                                                                                                  |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                                   | [Operations\ChannelConnectionsControllerListChannelConnectionsRequest](../../Models/Operations/ChannelConnectionsControllerListChannelConnectionsRequest.md) | :heavy_check_mark:                                                                                                                                           | The request object to use for the request.                                                                                                                   |

### Response

**[?Operations\ChannelConnectionsControllerListChannelConnectionsResponse](../../Models/Operations/ChannelConnectionsControllerListChannelConnectionsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Create a new channel connection for a resource for given integration. Only one channel connection is allowed per resource and integration.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelConnectionsController_createChannelConnection" method="post" path="/v1/channel-connections" -->
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

$createChannelConnectionRequestDto = new Components\CreateChannelConnectionRequestDto(
    identifier: 'slack-prod-user123-abc4',
    subscriberId: 'subscriber-123',
    context: [
        'key' => 'org-acme',
    ],
    integrationIdentifier: 'slack-prod',
    workspace: new Components\WorkspaceDto(
        id: 'T123456',
        name: 'Acme HQ',
    ),
    auth: new Components\AuthDto(
        accessToken: 'Workspace access token',
    ),
);

$response = $sdk->channelConnections->create(
    createChannelConnectionRequestDto: $createChannelConnectionRequestDto
);

if ($response->getChannelConnectionResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `createChannelConnectionRequestDto`                                                                          | [Components\CreateChannelConnectionRequestDto](../../Models/Components/CreateChannelConnectionRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `idempotencyKey`                                                                                             | *?string*                                                                                                    | :heavy_minus_sign:                                                                                           | A header for idempotency purposes                                                                            |

### Response

**[?Operations\ChannelConnectionsControllerCreateChannelConnectionResponse](../../Models/Operations/ChannelConnectionsControllerCreateChannelConnectionResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Retrieve a specific channel connection by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelConnectionsController_getChannelConnectionByIdentifier" method="get" path="/v1/channel-connections/{identifier}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->channelConnections->retrieve(
    identifier: '<value>'
);

if ($response->getChannelConnectionResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                       | Type                                            | Required                                        | Description                                     |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `identifier`                                    | *string*                                        | :heavy_check_mark:                              | The unique identifier of the channel connection |
| `idempotencyKey`                                | *?string*                                       | :heavy_minus_sign:                              | A header for idempotency purposes               |

### Response

**[?Operations\ChannelConnectionsControllerGetChannelConnectionByIdentifierResponse](../../Models/Operations/ChannelConnectionsControllerGetChannelConnectionByIdentifierResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Update an existing channel connection by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelConnectionsController_updateChannelConnection" method="patch" path="/v1/channel-connections/{identifier}" -->
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

$updateChannelConnectionRequestDto = new Components\UpdateChannelConnectionRequestDto(
    workspace: new Components\WorkspaceDto(
        id: 'T123456',
        name: 'Acme HQ',
    ),
    auth: new Components\AuthDto(
        accessToken: 'Workspace access token',
    ),
);

$response = $sdk->channelConnections->update(
    identifier: '<value>',
    updateChannelConnectionRequestDto: $updateChannelConnectionRequestDto

);

if ($response->getChannelConnectionResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `identifier`                                                                                                 | *string*                                                                                                     | :heavy_check_mark:                                                                                           | The unique identifier of the channel connection                                                              |
| `updateChannelConnectionRequestDto`                                                                          | [Components\UpdateChannelConnectionRequestDto](../../Models/Components/UpdateChannelConnectionRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `idempotencyKey`                                                                                             | *?string*                                                                                                    | :heavy_minus_sign:                                                                                           | A header for idempotency purposes                                                                            |

### Response

**[?Operations\ChannelConnectionsControllerUpdateChannelConnectionResponse](../../Models/Operations/ChannelConnectionsControllerUpdateChannelConnectionResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete a specific channel connection by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ChannelConnectionsController_deleteChannelConnection" method="delete" path="/v1/channel-connections/{identifier}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->channelConnections->delete(
    identifier: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                       | Type                                            | Required                                        | Description                                     |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `identifier`                                    | *string*                                        | :heavy_check_mark:                              | The unique identifier of the channel connection |
| `idempotencyKey`                                | *?string*                                       | :heavy_minus_sign:                              | A header for idempotency purposes               |

### Response

**[?Operations\ChannelConnectionsControllerDeleteChannelConnectionResponse](../../Models/Operations/ChannelConnectionsControllerDeleteChannelConnectionResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |