# Activity

## Overview

### Available Operations

* [track](#track) - Track activity and engagement events

## track

Track activity and engagement events for a specific delivery provider

### Example Usage

<!-- UsageSnippet language="php" operationID="InboundWebhooksController_handleWebhook" method="post" path="/v2/inbound-webhooks/delivery-providers/{environmentId}/{integrationId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->activity->track(
    environmentId: '<id>',
    integrationId: '<id>',
    requestBody: '<value>'

);

if ($response->webhookResultDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `environmentId`                                      | *string*                                             | :heavy_check_mark:                                   | The environment identifier                           |
| `integrationId`                                      | *string*                                             | :heavy_check_mark:                                   | The integration identifier for the delivery provider |
| `requestBody`                                        | *mixed*                                              | :heavy_check_mark:                                   | Webhook event payload from the delivery provider     |
| `idempotencyKey`                                     | *?string*                                            | :heavy_minus_sign:                                   | A header for idempotency purposes                    |

### Response

**[?Operations\InboundWebhooksControllerHandleWebhookResponse](../../Models/Operations/InboundWebhooksControllerHandleWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |