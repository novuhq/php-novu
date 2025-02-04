# Subscribers
(*subscribers*)

## Overview

### Available Operations

* [get](#get) - Get subscriber
* [patch](#patch) - Patch subscriber
* [delete](#delete) - Delete subscriber
* [search](#search) - Search for subscribers
* [updatePreferences](#updatepreferences) - Update subscriber global or workflow specific preferences
* [createBulk](#createbulk) - Bulk create subscribers
* [create](#create) - Create subscriber
* [getById](#getbyid) - Get subscriber
* [list](#list) - Get subscribers
* [~~deleteLegacy~~](#deletelegacy) - Delete subscriber :warning: **Deprecated**
* [update](#update) - Update subscriber
* [updateCredentials](#updatecredentials) - Update subscriber credentials
* [updateOnlineStatus](#updateonlinestatus) - Update subscriber online status

## get

Get subscriber by your internal id used to identify the subscriber

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



$response = $sdk->subscribers->get(
    subscriberId: '<id>',
    idempotencyKey: '<value>'

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `subscriberId`                    | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\SubscribersControllerGetSubscriberResponse](../../Models/Operations/SubscribersControllerGetSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## patch

Patch subscriber by your internal id used to identify the subscriber

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

$patchSubscriberRequestDto = new Components\PatchSubscriberRequestDto();

$response = $sdk->subscribers->patch(
    subscriberId: '<id>',
    patchSubscriberRequestDto: $patchSubscriberRequestDto,
    idempotencyKey: '<value>'

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                               | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `patchSubscriberRequestDto`                                                                  | [Components\PatchSubscriberRequestDto](../../Models/Components/PatchSubscriberRequestDto.md) | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `idempotencyKey`                                                                             | *?string*                                                                                    | :heavy_minus_sign:                                                                           | A header for idempotency purposes                                                            |

### Response

**[?Operations\SubscribersControllerPatchSubscriberResponse](../../Models/Operations/SubscribersControllerPatchSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Deletes a subscriber entity from the Novu platform

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



$response = $sdk->subscribers->delete(
    subscriberId: '<id>',
    idempotencyKey: '<value>'

);

if ($response->removeSubscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `subscriberId`                    | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\SubscribersControllerRemoveSubscriberResponse](../../Models/Operations/SubscribersControllerRemoveSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## search

Search for subscribers

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

$request = new Operations\SubscribersControllerSearchSubscribersRequest();

$response = $sdk->subscribers->search(
    request: $request
);

if ($response->listSubscribersResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\SubscribersControllerSearchSubscribersRequest](../../Models/Operations/SubscribersControllerSearchSubscribersRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\SubscribersControllerSearchSubscribersResponse](../../Models/Operations/SubscribersControllerSearchSubscribersResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## updatePreferences

Update subscriber global or workflow specific preferences

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

$patchSubscriberPreferencesDto = new Components\PatchSubscriberPreferencesDto(
    channels: new Components\PatchPreferenceChannelsDto(),
);

$response = $sdk->subscribers->updatePreferences(
    subscriberId: '<id>',
    patchSubscriberPreferencesDto: $patchSubscriberPreferencesDto,
    idempotencyKey: '<value>'

);

if ($response->getSubscriberPreferencesDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                       | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `patchSubscriberPreferencesDto`                                                                      | [Components\PatchSubscriberPreferencesDto](../../Models/Components/PatchSubscriberPreferencesDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `idempotencyKey`                                                                                     | *?string*                                                                                            | :heavy_minus_sign:                                                                                   | A header for idempotency purposes                                                                    |

### Response

**[?Operations\SubscribersControllerUpdateSubscriberPreferencesResponse](../../Models/Operations/SubscribersControllerUpdateSubscriberPreferencesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## createBulk


      Using this endpoint you can create multiple subscribers at once, to avoid multiple calls to the API.
      The bulk API is limited to 500 subscribers per request.
    

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

$bulkSubscriberCreateDto = new Components\BulkSubscriberCreateDto(
    subscribers: [
        new Components\CreateSubscriberRequestDto(
            subscriberId: '<id>',
        ),
    ],
);

$response = $sdk->subscribers->createBulk(
    bulkSubscriberCreateDto: $bulkSubscriberCreateDto,
    idempotencyKey: '<value>'

);

if ($response->bulkCreateSubscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `bulkSubscriberCreateDto`                                                                | [Components\BulkSubscriberCreateDto](../../Models/Components/BulkSubscriberCreateDto.md) | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `idempotencyKey`                                                                         | *?string*                                                                                | :heavy_minus_sign:                                                                       | A header for idempotency purposes                                                        |

### Response

**[?Operations\SubscribersV1ControllerBulkCreateSubscribersResponse](../../Models/Operations/SubscribersV1ControllerBulkCreateSubscribersResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Creates a subscriber entity, in the Novu platform. The subscriber will be later used to receive notifications, and access notification feeds. Communication credentials such as email, phone number, and 3 rd party credentials i.e slack tokens could be later associated to this entity.

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

$createSubscriberRequestDto = new Components\CreateSubscriberRequestDto(
    subscriberId: '<id>',
);

$response = $sdk->subscribers->create(
    createSubscriberRequestDto: $createSubscriberRequestDto,
    idempotencyKey: '<value>'

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `createSubscriberRequestDto`                                                                   | [Components\CreateSubscriberRequestDto](../../Models/Components/CreateSubscriberRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `idempotencyKey`                                                                               | *?string*                                                                                      | :heavy_minus_sign:                                                                             | A header for idempotency purposes                                                              |

### Response

**[?Operations\SubscribersV1ControllerCreateSubscriberResponse](../../Models/Operations/SubscribersV1ControllerCreateSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## getById

Get subscriber by your internal id used to identify the subscriber

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



$response = $sdk->subscribers->getById(
    subscriberId: '<id>',
    includeTopics: false,
    idempotencyKey: '<value>'

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                          | Type                                               | Required                                           | Description                                        |
| -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- |
| `subscriberId`                                     | *string*                                           | :heavy_check_mark:                                 | N/A                                                |
| `includeTopics`                                    | *?bool*                                            | :heavy_minus_sign:                                 | Includes the topics associated with the subscriber |
| `idempotencyKey`                                   | *?string*                                          | :heavy_minus_sign:                                 | A header for idempotency purposes                  |

### Response

**[?Operations\SubscribersV1ControllerGetSubscriberResponse](../../Models/Operations/SubscribersV1ControllerGetSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## list

Returns a list of subscribers, could paginated using the `page` and `limit` query parameter

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



$responses = $sdk->subscribers->list(
    page: 7685.78,
    limit: 10,
    idempotencyKey: '<value>'

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `page`                            | *?float*                          | :heavy_minus_sign:                | N/A                               |
| `limit`                           | *?float*                          | :heavy_minus_sign:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\SubscribersV1ControllerListSubscribersResponse](../../Models/Operations/SubscribersV1ControllerListSubscribersResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## ~~deleteLegacy~~

Deletes a subscriber entity from the Novu platform

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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



$response = $sdk->subscribers->deleteLegacy(
    subscriberId: '<id>',
    idempotencyKey: '<value>'

);

if ($response->deleteSubscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `subscriberId`                    | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\SubscribersV1ControllerRemoveSubscriberResponse](../../Models/Operations/SubscribersV1ControllerRemoveSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Used to update the subscriber entity with new information

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

$updateSubscriberRequestDto = new Components\UpdateSubscriberRequestDto(
    email: 'john.doe@example.com',
    firstName: 'John',
    lastName: 'Doe',
    phone: '+1234567890',
    avatar: 'https://example.com/avatar.jpg',
    locale: 'en-US',
    data: [
        'preferences' => [
            'notifications' => true,
            'theme' => 'dark',
        ],
        'tags' => [
            'premium',
            'newsletter',
        ],
    ],
);

$response = $sdk->subscribers->update(
    subscriberId: '<id>',
    updateSubscriberRequestDto: $updateSubscriberRequestDto,
    idempotencyKey: '<value>'

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `subscriberId`                                                                                 | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `updateSubscriberRequestDto`                                                                   | [Components\UpdateSubscriberRequestDto](../../Models/Components/UpdateSubscriberRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `idempotencyKey`                                                                               | *?string*                                                                                      | :heavy_minus_sign:                                                                             | A header for idempotency purposes                                                              |

### Response

**[?Operations\SubscribersV1ControllerUpdateSubscriberResponse](../../Models/Operations/SubscribersV1ControllerUpdateSubscriberResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## updateCredentials

Subscriber credentials associated to the delivery methods such as slack and push tokens.

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
    providerId: Components\UpdateSubscriberChannelRequestDtoProviderId::PushWebhook,
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

$response = $sdk->subscribers->updateCredentials(
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

**[?Operations\SubscribersV1ControllerUpdateSubscriberChannelResponse](../../Models/Operations/SubscribersV1ControllerUpdateSubscriberChannelResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## updateOnlineStatus

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

$response = $sdk->subscribers->updateOnlineStatus(
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