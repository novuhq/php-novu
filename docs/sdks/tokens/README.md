# Subscribers.Tokens

## Overview

### Available Operations

* [create](#create) - Create a subscriber login token

## create

Create a short-lived, Novu-signed login token for the subscriber identified by **subscriberId**.

    Call it from your backend with your secret key, then pass the token to the browser, which exchanges it for an Inbox session.
    Creating a token does not read or change the subscriber, so the subscriber does not need to exist yet.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_createSubscriberToken" method="post" path="/v2/subscribers/{subscriberId}/tokens" -->
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

$createSubscriberTokenRequestDto = new Components\CreateSubscriberTokenRequestDto(
    context: [
        'key' => 'org-acme',
    ],
    subscriber: new Components\BaseSubscriberFieldsDto(
        firstName: 'John',
        lastName: 'Doe',
        email: 'john.doe@example.com',
        phone: '+1234567890',
        avatar: 'https://example.com/avatar.jpg',
        locale: 'en-US',
        timezone: 'America/New_York',
    ),
    scope: [
        Components\SubscriberTokenScopeEnum::ChannelsShared,
    ],
    expiresIn: 600,
);

$response = $sdk->subscribers->tokens->create(
    subscriberId: '<id>',
    createSubscriberTokenRequestDto: $createSubscriberTokenRequestDto

);

if ($response->createSubscriberTokenResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                           | *string*                                                                                                 | :heavy_check_mark:                                                                                       | The identifier of the subscriber                                                                         |
| `createSubscriberTokenRequestDto`                                                                        | [Components\CreateSubscriberTokenRequestDto](../../Models/Components/CreateSubscriberTokenRequestDto.md) | :heavy_check_mark:                                                                                       | N/A                                                                                                      |
| `idempotencyKey`                                                                                         | *?string*                                                                                                | :heavy_minus_sign:                                                                                       | A header for idempotency purposes                                                                        |

### Response

**[?Operations\SubscribersControllerCreateSubscriberTokenResponse](../../Models/Operations/SubscribersControllerCreateSubscriberTokenResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |