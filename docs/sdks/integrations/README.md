# Integrations

## Overview

With the help of the Integration Store, you can easily integrate your favorite delivery provider. During the runtime of the API, the Integrations Store is responsible for storing the configurations of all the providers.
<https://docs.novu.co/platform/integrations/overview>

### Available Operations

* [list](#list) - List all integrations
* [create](#create) - Create an integration
* [update](#update) - Update an integration
* [delete](#delete) - Delete an integration
* [integrationsControllerAutoConfigureIntegration](#integrationscontrollerautoconfigureintegration) - Auto-configure an integration for inbound webhooks
* [setAsPrimary](#setasprimary) - Update integration as primary
* [createMobileLink](#createmobilelink) - Issue a short-lived mobile setup link for an existing integration
* [integrationsControllerConfigureIntegrationWebhook](#integrationscontrollerconfigureintegrationwebhook) - Configure a chat integration webhook
* [listActive](#listactive) - List active integrations
* [generateConnectOAuthUrl](#generateconnectoauthurl) - Generate OAuth URL for a workspace/tenant connection
* [linkChannelEndpoint](#linkchannelendpoint) - Issue a URL to link a subscriber chat identity
* [generateLinkUserOAuthUrl](#generatelinkuseroauthurl) - Generate OAuth URL to link a subscriber user identity
* [~~generateChatOAuthUrl~~](#generatechatoauthurl) - Generate chat OAuth URL :warning: **Deprecated**

## list

List all the channels integrations created in the organization. Only integration metadata is returned, credentials field is returned as an empty object.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_listIntegrations" method="get" path="/v1/integrations" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->integrations->list(

);

if ($response->integrationResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\IntegrationsControllerListIntegrationsResponse](../../Models/Operations/IntegrationsControllerListIntegrationsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Create an integration for the current environment the user is based on the API key provided. 
    Each provider supports different credentials, check the provider documentation for more details. Only integration metadata is returned, credentials field is returned as an empty object.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_createIntegration" method="post" path="/v1/integrations" -->
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

$createIntegrationRequestDto = new Components\CreateIntegrationRequestDto();

$response = $sdk->integrations->create(
    createIntegrationRequestDto: $createIntegrationRequestDto
);

if ($response->integrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `createIntegrationRequestDto`                                                                    | [Components\CreateIntegrationRequestDto](../../Models/Components/CreateIntegrationRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `idempotencyKey`                                                                                 | *?string*                                                                                        | :heavy_minus_sign:                                                                               | A header for idempotency purposes                                                                |

### Response

**[?Operations\IntegrationsControllerCreateIntegrationResponse](../../Models/Operations/IntegrationsControllerCreateIntegrationResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Update an integration by its unique key identifier **integrationId**. 
    Each provider supports different credentials, check the provider documentation for more details. Only integration metadata is returned, credentials field is returned as an empty object.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_updateIntegrationById" method="put" path="/v1/integrations/{integrationId}" -->
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

$updateIntegrationRequestDto = new Components\UpdateIntegrationRequestDto();

$response = $sdk->integrations->update(
    integrationId: '<id>',
    updateIntegrationRequestDto: $updateIntegrationRequestDto

);

if ($response->integrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `integrationId`                                                                                  | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `updateIntegrationRequestDto`                                                                    | [Components\UpdateIntegrationRequestDto](../../Models/Components/UpdateIntegrationRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `idempotencyKey`                                                                                 | *?string*                                                                                        | :heavy_minus_sign:                                                                               | A header for idempotency purposes                                                                |

### Response

**[?Operations\IntegrationsControllerUpdateIntegrationByIdResponse](../../Models/Operations/IntegrationsControllerUpdateIntegrationByIdResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## delete

Delete an integration by its unique key identifier **integrationId**. 
    This action is irreversible. Only integration metadata is returned, credentials field is returned as empty object.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_removeIntegration" method="delete" path="/v1/integrations/{integrationId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->integrations->delete(
    integrationId: '<id>'
);

if ($response->integrationResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `integrationId`                   | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\IntegrationsControllerRemoveIntegrationResponse](../../Models/Operations/IntegrationsControllerRemoveIntegrationResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## integrationsControllerAutoConfigureIntegration

Auto-configure an integration by its unique key identifier **integrationId** for inbound webhook support. 
    This will automatically generate required webhook signing keys and configure webhook endpoints. Only integration metadata is returned, credentials field is returned as an empty object.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_autoConfigureIntegration" method="post" path="/v1/integrations/{integrationId}/auto-configure" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->integrations->integrationsControllerAutoConfigureIntegration(
    integrationId: '<id>'
);

if ($response->autoConfigureIntegrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `integrationId`                   | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\IntegrationsControllerAutoConfigureIntegrationResponse](../../Models/Operations/IntegrationsControllerAutoConfigureIntegrationResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## setAsPrimary

Update an integration as **primary** by its unique key identifier **integrationId**. 
    This API will set the integration as primary for that channel in the current environment. 
    Primary integration is used to deliver notification for sms and email channels in the workflow. 
    Only integration metadata is returned, credentials field is returned as an empty object.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_setIntegrationAsPrimary" method="post" path="/v1/integrations/{integrationId}/set-primary" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->integrations->setAsPrimary(
    integrationId: '<id>'
);

if ($response->integrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `integrationId`                   | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\IntegrationsControllerSetIntegrationAsPrimaryResponse](../../Models/Operations/IntegrationsControllerSetIntegrationAsPrimaryResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## createMobileLink

Returns an opaque, single-use setup token plus a mobile URL for configuring an existing chat integration. Telegram is the only supported provider initially.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_createIntegrationMobileLink" method="post" path="/v1/integrations/{integrationIdentifier}/mobile-link" -->
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

$issueIntegrationMobileLinkRequestDto = new Components\IssueIntegrationMobileLinkRequestDto(
    subscriberId: 'subscriber-123',
);

$response = $sdk->integrations->createMobileLink(
    integrationIdentifier: '<value>',
    issueIntegrationMobileLinkRequestDto: $issueIntegrationMobileLinkRequestDto

);

if ($response->issueTelegramMobileLinkResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `integrationIdentifier`                                                                                            | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `issueIntegrationMobileLinkRequestDto`                                                                             | [Components\IssueIntegrationMobileLinkRequestDto](../../Models/Components/IssueIntegrationMobileLinkRequestDto.md) | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `idempotencyKey`                                                                                                   | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | A header for idempotency purposes                                                                                  |

### Response

**[?Operations\IntegrationsControllerCreateIntegrationMobileLinkResponse](../../Models/Operations/IntegrationsControllerCreateIntegrationMobileLinkResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## integrationsControllerConfigureIntegrationWebhook

Registers the Novu webhook URL with the chat provider for the specified integration. Telegram is the only supported provider initially.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_configureIntegrationWebhook" method="post" path="/v1/integrations/{integrationIdentifier}/webhook/configure" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->integrations->integrationsControllerConfigureIntegrationWebhook(
    integrationIdentifier: '<value>'
);

if ($response->configureTelegramWebhookResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `integrationIdentifier`           | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\IntegrationsControllerConfigureIntegrationWebhookResponse](../../Models/Operations/IntegrationsControllerConfigureIntegrationWebhookResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## listActive

List all the active integrations created in the organization. Only integration metadata is returned, credentials field is returned as an empty object.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_getActiveIntegrations" method="get" path="/v1/integrations/active" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->integrations->listActive(

);

if ($response->integrationResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\IntegrationsControllerGetActiveIntegrationsResponse](../../Models/Operations/IntegrationsControllerGetActiveIntegrationsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## generateConnectOAuthUrl

Generate an OAuth URL that creates a workspace or tenant-level channel connection (Slack workspace install or MS Teams admin consent). 
    The generated URL expires after 5 minutes.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_generateConnectOAuthUrl" method="post" path="/v1/integrations/channel-connections/oauth" -->
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

$generateConnectOauthUrlRequestDto = new Components\GenerateConnectOauthUrlRequestDto(
    subscriberId: 'subscriber-123',
    integrationIdentifier: '<value>',
    connectionIdentifier: 'slack-connection-abc123',
    context: [
        'key' => 'org-acme',
    ],
    scope: [
        'chat:write',
        'chat:write.public',
        'channels:read',
    ],
    connectionMode: Components\GenerateConnectOauthUrlRequestDtoConnectionMode::Shared,
    autoLinkUser: true,
);

$response = $sdk->integrations->generateConnectOAuthUrl(
    generateConnectOauthUrlRequestDto: $generateConnectOauthUrlRequestDto
);

if ($response->generateChatOAuthUrlResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `generateConnectOauthUrlRequestDto`                                                                          | [Components\GenerateConnectOauthUrlRequestDto](../../Models/Components/GenerateConnectOauthUrlRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `idempotencyKey`                                                                                             | *?string*                                                                                                    | :heavy_minus_sign:                                                                                           | A header for idempotency purposes                                                                            |

### Response

**[?Operations\IntegrationsControllerGenerateConnectOAuthUrlResponse](../../Models/Operations/IntegrationsControllerGenerateConnectOAuthUrlResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## linkChannelEndpoint

Returns a provider-specific URL the subscriber opens to link their chat identity. The integration provider is resolved from integrationIdentifier; Telegram returns a deep link.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_linkChannelEndpoint" method="post" path="/v1/integrations/channel-endpoints/link" -->
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

$linkChannelEndpointRequestDto = new Components\LinkChannelEndpointRequestDto(
    integrationIdentifier: 'telegram-bot',
    subscriberId: 'subscriber-123',
);

$response = $sdk->integrations->linkChannelEndpoint(
    linkChannelEndpointRequestDto: $linkChannelEndpointRequestDto
);

if ($response->linkChannelEndpointResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `linkChannelEndpointRequestDto`                                                                      | [Components\LinkChannelEndpointRequestDto](../../Models/Components/LinkChannelEndpointRequestDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `idempotencyKey`                                                                                     | *?string*                                                                                            | :heavy_minus_sign:                                                                                   | A header for idempotency purposes                                                                    |

### Response

**[?Operations\IntegrationsControllerLinkChannelEndpointResponse](../../Models/Operations/IntegrationsControllerLinkChannelEndpointResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## generateLinkUserOAuthUrl

Generate an OAuth URL that links a specific subscriber to their chat identity (Slack user ID or MS Teams user OID). 
    The generated URL expires after 5 minutes.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_generateLinkUserOAuthUrl" method="post" path="/v1/integrations/channel-endpoints/oauth" -->
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

$generateLinkUserOauthUrlRequestDto = new Components\GenerateLinkUserOauthUrlRequestDto(
    subscriberId: 'subscriber-123',
    integrationIdentifier: '<value>',
    connectionIdentifier: 'slack-connection-abc123',
    context: [
        'key' => 'org-acme',
    ],
    userScope: [
        'identity.basic',
    ],
);

$response = $sdk->integrations->generateLinkUserOAuthUrl(
    generateLinkUserOauthUrlRequestDto: $generateLinkUserOauthUrlRequestDto
);

if ($response->generateChatOAuthUrlResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `generateLinkUserOauthUrlRequestDto`                                                                           | [Components\GenerateLinkUserOauthUrlRequestDto](../../Models/Components/GenerateLinkUserOauthUrlRequestDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `idempotencyKey`                                                                                               | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | A header for idempotency purposes                                                                              |

### Response

**[?Operations\IntegrationsControllerGenerateLinkUserOAuthUrlResponse](../../Models/Operations/IntegrationsControllerGenerateLinkUserOAuthUrlResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## ~~generateChatOAuthUrl~~

**Deprecated** — use `POST /integrations/channel-connections/oauth` (connect) or `POST /integrations/channel-endpoints/oauth` (link_user) instead.
    Generate an OAuth URL for chat integrations like Slack and MS Teams. 
    This URL allows subscribers to authorize the integration, enabling the system to send messages 
    through their chat workspace. The generated URL expires after 5 minutes.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="IntegrationsController_getChatOAuthUrl" method="post" path="/v1/integrations/chat/oauth" -->
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

$generateChatOauthUrlRequestDto = new Components\GenerateChatOauthUrlRequestDto(
    subscriberId: 'subscriber-123',
    integrationIdentifier: '<value>',
    connectionIdentifier: 'slack-connection-abc123',
    context: [
        'key' => 'org-acme',
    ],
    scope: [
        'chat:write',
        'chat:write.public',
        'channels:read',
        'groups:read',
        'users:read',
        'users:read.email',
        'incoming-webhook',
    ],
    userScope: [
        'identity.basic',
    ],
    mode: Components\Mode::LinkUser,
    connectionMode: Components\GenerateChatOauthUrlRequestDtoConnectionMode::Shared,
    autoLinkUser: true,
);

$response = $sdk->integrations->generateChatOAuthUrl(
    generateChatOauthUrlRequestDto: $generateChatOauthUrlRequestDto
);

if ($response->generateChatOAuthUrlResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `generateChatOauthUrlRequestDto`                                                                       | [Components\GenerateChatOauthUrlRequestDto](../../Models/Components/GenerateChatOauthUrlRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `idempotencyKey`                                                                                       | *?string*                                                                                              | :heavy_minus_sign:                                                                                     | A header for idempotency purposes                                                                      |

### Response

**[?Operations\IntegrationsControllerGetChatOAuthUrlResponse](../../Models/Operations/IntegrationsControllerGetChatOAuthUrlResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |