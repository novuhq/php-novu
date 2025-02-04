# SubscribersPreferences
(*subscribersPreferences*)

## Overview

### Available Operations

* [retrieve](#retrieve) - Get subscriber preferences
* [list](#list) - Get subscriber preferences
* [updateGlobal](#updateglobal) - Update subscriber global preferences

## retrieve

Get subscriber global and workflow specific preferences

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



$response = $sdk->subscribersPreferences->retrieve(
    subscriberId: '<id>',
    idempotencyKey: '<value>'

);

if ($response->getSubscriberPreferencesDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `subscriberId`                    | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

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

## list

Get subscriber preferences

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



$response = $sdk->subscribersPreferences->list(
    subscriberId: '<id>',
    includeInactiveChannels: false,
    idempotencyKey: '<value>'

);

if ($response->updateSubscriberPreferenceResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                                            | *string*                                                                                                                  | :heavy_check_mark:                                                                                                        | N/A                                                                                                                       |
| `includeInactiveChannels`                                                                                                 | *?bool*                                                                                                                   | :heavy_minus_sign:                                                                                                        | A flag which specifies if the inactive workflow channels should be included in the retrieved preferences. Default is true |
| `idempotencyKey`                                                                                                          | *?string*                                                                                                                 | :heavy_minus_sign:                                                                                                        | A header for idempotency purposes                                                                                         |

### Response

**[?Operations\SubscribersV1ControllerListSubscriberPreferencesResponse](../../Models/Operations/SubscribersV1ControllerListSubscriberPreferencesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

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
    updateSubscriberGlobalPreferencesRequestDto: $updateSubscriberGlobalPreferencesRequestDto,
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                                                                                                 | *?string*                                                                                                                        | :heavy_minus_sign:                                                                                                               | A header for idempotency purposes                                                                                                |

### Response

**[?Operations\SubscribersV1ControllerUpdateSubscriberGlobalPreferencesResponse](../../Models/Operations/SubscribersV1ControllerUpdateSubscriberGlobalPreferencesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |