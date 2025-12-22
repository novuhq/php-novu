# Subscribers.Preferences

## Overview

### Available Operations

* [bulkUpdate](#bulkupdate) - Bulk update subscriber preferences

## bulkUpdate

Bulk update subscriber preferences by its unique key identifier **subscriberId**. 
    This API allows updating multiple workflow preferences in a single request.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_bulkUpdateSubscriberPreferences" method="patch" path="/v2/subscribers/{subscriberId}/preferences/bulk" -->
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

$bulkUpdateSubscriberPreferencesDto = new Components\BulkUpdateSubscriberPreferencesDto(
    preferences: [],
);

$response = $sdk->subscribers->preferences->bulkUpdate(
    subscriberId: '<id>',
    bulkUpdateSubscriberPreferencesDto: $bulkUpdateSubscriberPreferencesDto

);

if ($response->getPreferencesResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                                 | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `bulkUpdateSubscriberPreferencesDto`                                                                           | [Components\BulkUpdateSubscriberPreferencesDto](../../Models/Components/BulkUpdateSubscriberPreferencesDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `idempotencyKey`                                                                                               | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | A header for idempotency purposes                                                                              |

### Response

**[?Operations\SubscribersControllerBulkUpdateSubscriberPreferencesResponse](../../Models/Operations/SubscribersControllerBulkUpdateSubscriberPreferencesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |