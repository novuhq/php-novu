# SubscribersPreferences
(*subscribersPreferences*)

## Overview

### Available Operations

* [updateGlobal](#updateglobal) - Update subscriber global preferences
* [update](#update) - Update subscriber preference

## updateGlobal

Update subscriber global preferences

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

$updateSubscriberGlobalPreferencesRequestDto = new Components\UpdateSubscriberGlobalPreferencesRequestDto();

$response = $sdk->subscribersPreferences->updateGlobal(
    subscriberId: '<id>',
    updateSubscriberGlobalPreferencesRequestDto: $updateSubscriberGlobalPreferencesRequestDto

);

if ($response->updateSubscriberPreferenceGlobalResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                                                   | *string*                                                                                                                         | :heavy_check_mark:                                                                                                               | N/A                                                                                                                              |
| `updateSubscriberGlobalPreferencesRequestDto`                                                                                    | [Components\UpdateSubscriberGlobalPreferencesRequestDto](../../Models/Components/UpdateSubscriberGlobalPreferencesRequestDto.md) | :heavy_check_mark:                                                                                                               | N/A                                                                                                                              |

### Response

**[?Operations\SubscribersControllerUpdateSubscriberGlobalPreferencesResponse](../../Models/Operations/SubscribersControllerUpdateSubscriberGlobalPreferencesResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## update

Update subscriber preference

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

$updateSubscriberPreferenceRequestDto = new Components\UpdateSubscriberPreferenceRequestDto();

$response = $sdk->subscribersPreferences->update(
    subscriberId: '<id>',
    workflowId: '<id>',
    updateSubscriberPreferenceRequestDto: $updateSubscriberPreferenceRequestDto

);

if ($response->updateSubscriberPreferenceResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `subscriberId`                                                                                                     | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `workflowId`                                                                                                       | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `updateSubscriberPreferenceRequestDto`                                                                             | [Components\UpdateSubscriberPreferenceRequestDto](../../Models/Components/UpdateSubscriberPreferenceRequestDto.md) | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |

### Response

**[?Operations\SubscribersControllerUpdateSubscriberPreferenceResponse](../../Models/Operations/SubscribersControllerUpdateSubscriberPreferenceResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |