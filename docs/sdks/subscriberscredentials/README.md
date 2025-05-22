# SubscribersCredentials
(*subscribersCredentials*)

## Overview

### Available Operations

* [append](#append) - Upsert provider credentials
* [deleteProvider](#deleteprovider) - Delete provider credentials

## append

Update credentials for a provider such as **slack** and **FCM**. 
      **providerId** is required field. This API replaces the existing deviceTokens with the provided ones.

### Example Usage

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

$updateSubscriberChannelRequestDto = new Components\UpdateSubscriberChannelRequestDto(
    providerId: Components\ChatOrPushProviderEnum::OneSignal,
    credentials: new Components\ChannelCredentials(
        webhookUrl: 'https://example.com/webhook',
        channel: 'general',
        deviceTokens: [
            'token1',
            'token2',
            'token3',
        ],
        alertUid: '12345-abcde',
        title: 'Critical Alert',
        imageUrl: 'https://example.com/image.png',
        state: 'resolved',
        externalUrl: 'https://example.com/details',
    ),
);

$response = $sdk->subscribersCredentials->append(
    subscriberId: '<id>',
    updateSubscriberChannelRequestDto: $updateSubscriberChannelRequestDto,
    idempotencyKey: '<value>'

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `subscriberId`                                                                                               | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `updateSubscriberChannelRequestDto`                                                                          | [Components\UpdateSubscriberChannelRequestDto](../../Models/Components/UpdateSubscriberChannelRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `idempotencyKey`                                                                                             | *?string*                                                                                                    | :heavy_minus_sign:                                                                                           | A header for idempotency purposes                                                                            |

### Response

**[?Operations\SubscribersV1ControllerModifySubscriberChannelResponse](../../Models/Operations/SubscribersV1ControllerModifySubscriberChannelResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## deleteProvider

Delete subscriber credentials for a provider such as **slack** and **FCM** by **providerId**. 
    This action is irreversible and will remove the credentials for the provider for particular **subscriberId**.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribersCredentials->deleteProvider(
    subscriberId: '<id>',
    providerId: '<id>',
    idempotencyKey: '<value>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `subscriberId`                    | *string*                          | :heavy_check_mark:                | N/A                               |
| `providerId`                      | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\SubscribersV1ControllerDeleteSubscriberCredentialsResponse](../../Models/Operations/SubscribersV1ControllerDeleteSubscriberCredentialsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |