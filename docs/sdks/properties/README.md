# Properties
(*subscribers->properties*)

## Overview

### Available Operations

* [updateOnlineFlag](#updateonlineflag) - Update subscriber online status

## updateOnlineFlag

Used to update the subscriber isOnline flag.

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

$updateSubscriberOnlineFlagRequestDto = new Components\UpdateSubscriberOnlineFlagRequestDto(
    isOnline: false,
);

$response = $sdk->subscribers->properties->updateOnlineFlag(
    subscriberId: '<id>',
    updateSubscriberOnlineFlagRequestDto: $updateSubscriberOnlineFlagRequestDto,
    idempotencyKey: '<value>'

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `subscriberId`                                                                                                     | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `updateSubscriberOnlineFlagRequestDto`                                                                             | [Components\UpdateSubscriberOnlineFlagRequestDto](../../Models/Components/UpdateSubscriberOnlineFlagRequestDto.md) | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `idempotencyKey`                                                                                                   | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | A header for idempotency purposes                                                                                  |

### Response

**[?Operations\SubscribersV1ControllerUpdateSubscriberOnlineFlagResponse](../../Models/Operations/SubscribersV1ControllerUpdateSubscriberOnlineFlagResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |