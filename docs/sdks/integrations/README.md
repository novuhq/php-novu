# Integrations
(*integrations*)

## Overview

With the help of the Integration Store, you can easily integrate your favorite delivery provider. During the runtime of the API, the Integrations Store is responsible for storing the configurations of all the providers.
<https://docs.novu.co/channels-and-providers/integration-store>

### Available Operations

* [create](#create) - Create integration
* [listActive](#listactive) - Get active integrations
* [list](#list) - Get integrations
* [delete](#delete) - Delete integration
* [setPrimary](#setprimary) - Set integration as primary
* [update](#update) - Update integration

## create

Create an integration for the current environment the user is based on the API key provided

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\CreateIntegrationRequestDto(
    providerId: '<id>',
    channel: Components\CreateIntegrationRequestDtoChannel::Sms,
);

$response = $sdk->integrations->create(
    request: $request
);

if ($response->integrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Components\CreateIntegrationRequestDto](../../Models/Components/CreateIntegrationRequestDto.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\IntegrationsControllerCreateIntegrationResponse](../../Models/Operations/IntegrationsControllerCreateIntegrationResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## listActive

Return all the active integrations the user has created for that organization. Review v.0.17.0 changelog for a breaking change

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->integrations->listActive(

);

if ($response->integrationResponseDtos !== null) {
    // handle response
}
```

### Response

**[?Operations\IntegrationsControllerGetActiveIntegrationsResponse](../../Models/Operations/IntegrationsControllerGetActiveIntegrationsResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## list

Return all the integrations the user has created for that organization. Review v.0.17.0 changelog for a breaking change

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->integrations->list(

);

if ($response->integrationResponseDtos !== null) {
    // handle response
}
```

### Response

**[?Operations\IntegrationsControllerListIntegrationsResponse](../../Models/Operations/IntegrationsControllerListIntegrationsResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## delete

Delete integration

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
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

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `integrationId`    | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\IntegrationsControllerRemoveIntegrationResponse](../../Models/Operations/IntegrationsControllerRemoveIntegrationResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## setPrimary

Set integration as primary

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->integrations->setPrimary(
    integrationId: '<id>'
);

if ($response->integrationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `integrationId`    | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\IntegrationsControllerSetIntegrationAsPrimaryResponse](../../Models/Operations/IntegrationsControllerSetIntegrationAsPrimaryResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 409                  | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## update

Update integration

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
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

### Response

**[?Operations\IntegrationsControllerUpdateIntegrationByIdResponse](../../Models/Operations/IntegrationsControllerUpdateIntegrationByIdResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 409                  | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |