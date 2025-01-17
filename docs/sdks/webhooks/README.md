# Webhooks
(*integrations->webhooks*)

## Overview

### Available Operations

* [getProviderStatus](#getproviderstatus) - Get webhook support status for provider

## getProviderStatus

Return the status of the webhook for this provider, if it is supported or if it is not based on a boolean value

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



$response = $sdk->integrations->webhooks->getProviderStatus(
    providerOrIntegrationId: '<id>'
);

if ($response->boolean !== null) {
    // handle response
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `providerOrIntegrationId` | *string*                  | :heavy_check_mark:        | N/A                       |

### Response

**[?Operations\IntegrationsControllerGetWebhookSupportStatusResponse](../../Models/Operations/IntegrationsControllerGetWebhookSupportStatusResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |