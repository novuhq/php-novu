# SubscribersCredentials
(*subscribersCredentials*)

## Overview

### Available Operations

* [deleteProvider](#deleteprovider) - Delete subscriber credentials by providerId
* [append](#append) - Modify subscriber credentials

## deleteProvider

Delete subscriber credentials such as slack and expo tokens.

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

## append

Subscriber credentials associated to the delivery methods such as slack and push tokens.

    This endpoint appends provided credentials and deviceTokens to the existing ones.

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

$updateSubscriberChannelRequestDto = new Components\UpdateSubscriberChannelRequestDto(
    providerId: Components\UpdateSubscriberChannelRequestDtoProviderId::Zulip,
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