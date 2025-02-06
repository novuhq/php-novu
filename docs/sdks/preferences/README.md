# Preferences
(*subscribers->preferences*)

## Overview

### Available Operations

* [~~getByLevel~~](#getbylevel) - Get subscriber preferences by level :warning: **Deprecated**
* [update](#update) - Update subscriber preference

## ~~getByLevel~~

Get subscriber preferences by level

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->subscribers->preferences->getByLevel(
    preferenceLevel: Operations\Parameter::Global,
    subscriberId: '<id>',
    includeInactiveChannels: false,
    idempotencyKey: '<value>'

);

if ($response->getSubscriberPreferencesResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `preferenceLevel`                                                                                                         | [Operations\Parameter](../../Models/Operations/Parameter.md)                                                              | :heavy_check_mark:                                                                                                        | the preferences level to be retrieved (template / global)                                                                 |
| `subscriberId`                                                                                                            | *string*                                                                                                                  | :heavy_check_mark:                                                                                                        | N/A                                                                                                                       |
| `includeInactiveChannels`                                                                                                 | *?bool*                                                                                                                   | :heavy_minus_sign:                                                                                                        | A flag which specifies if the inactive workflow channels should be included in the retrieved preferences. Default is true |
| `idempotencyKey`                                                                                                          | *?string*                                                                                                                 | :heavy_minus_sign:                                                                                                        | A header for idempotency purposes                                                                                         |

### Response

**[?Operations\SubscribersV1ControllerGetSubscriberPreferenceByLevelResponse](../../Models/Operations/SubscribersV1ControllerGetSubscriberPreferenceByLevelResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

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

$response = $sdk->subscribers->preferences->update(
    subscriberId: '<id>',
    workflowId: '<id>',
    updateSubscriberPreferenceRequestDto: $updateSubscriberPreferenceRequestDto,
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                                                                                   | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | A header for idempotency purposes                                                                                  |

### Response

**[?Operations\SubscribersV1ControllerUpdateSubscriberPreferenceResponse](../../Models/Operations/SubscribersV1ControllerUpdateSubscriberPreferenceResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |