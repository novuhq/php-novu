# Webhooks
(*integrations->webhooks*)

## Overview

### Available Operations

* [getSupportStatus](#getsupportstatus) - Get webhook support status for provider

## getSupportStatus

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



$response = $sdk->integrations->webhooks->getSupportStatus(
    providerOrIntegrationId: '<id>',
    idempotencyKey: '<value>'

);

if ($response->boolean !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `providerOrIntegrationId`         | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\IntegrationsControllerGetWebhookSupportStatusResponse](../../Models/Operations/IntegrationsControllerGetWebhookSupportStatusResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |