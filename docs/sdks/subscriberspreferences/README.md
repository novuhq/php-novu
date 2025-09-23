# SubscribersPreferences
(*subscribersPreferences*)

## Overview

### Available Operations

* [list](#list) - Retrieve subscriber preferences

## list

Retrieve subscriber channel preferences by its unique key identifier **subscriberId**. 
    This API returns all five channels preferences for all workflows and global preferences.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_getSubscriberPreferences" method="get" path="/v2/subscribers/{subscriberId}/preferences" -->
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



$response = $sdk->subscribersPreferences->list(
    subscriberId: '<id>',
    criticality: Operations\Criticality::NonCritical

);

if ($response->getSubscriberPreferencesDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `subscriberId`                                                    | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |
| `criticality`                                                     | [?Operations\Criticality](../../Models/Operations/Criticality.md) | :heavy_minus_sign:                                                | N/A                                                               |
| `idempotencyKey`                                                  | *?string*                                                         | :heavy_minus_sign:                                                | A header for idempotency purposes                                 |

### Response

**[?Operations\SubscribersControllerGetSubscriberPreferencesResponse](../../Models/Operations/SubscribersControllerGetSubscriberPreferencesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |