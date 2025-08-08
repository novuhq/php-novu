# Subscribers
(*subscribers*)

## Overview

### Available Operations

* [search](#search) - Search subscribers
* [create](#create) - Create a subscriber
* [get](#get) - Retrieve a subscriber
* [patch](#patch) - Update a subscriber
* [delete](#delete) - Delete a subscriber
* [createBulk](#createbulk) - Bulk create subscribers
* [updatePreferences](#updatepreferences) - Update subscriber preferences
* [updateCredentials](#updatecredentials) - Upsert provider credentials
* [updateOnlineStatus](#updateonlinestatus) - Update subscriber online status

## search

Search subscribers by their **email**, **phone**, **subscriberId** and **name**. 
    The search is case sensitive and supports pagination.Checkout all available filters in the query section.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_searchSubscribers" method="get" path="/v2/subscribers" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



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

## create

Create a subscriber with the subscriber attributes. 
      **subscriberId** is a required field, rest other fields are optional, if the subscriber already exists, it will be updated

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_createSubscriber" method="post" path="/v2/subscribers" -->
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

$createSubscriberRequestDto = new Components\CreateSubscriberRequestDto(
    subscriberId: '<id>',
);

$response = $sdk->subscribers->create(
    failIfExists: false,
    createSubscriberRequestDto: $createSubscriberRequestDto

);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `failIfExists`                                                                                 | *bool*                                                                                         | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `createSubscriberRequestDto`                                                                   | [Components\CreateSubscriberRequestDto](../../Models/Components/CreateSubscriberRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `idempotencyKey`                                                                               | *?string*                                                                                      | :heavy_minus_sign:                                                                             | A header for idempotency purposes                                                              |

### Response

**[?Operations\SubscribersControllerCreateSubscriberResponse](../../Models/Operations/SubscribersControllerCreateSubscriberResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\SubscriberResponseDto      | 409                               | application/json                  |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 404, 405, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## get

Retrieve a subscriber by its unique key identifier **subscriberId**. 
    **subscriberId** field is required.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_getSubscriber" method="get" path="/v2/subscribers/{subscriberId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->get(
    subscriberId: '<id>'
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

Update a subscriber by its unique key identifier **subscriberId**. 
    **subscriberId** is a required field, rest other fields are optional

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_patchSubscriber" method="patch" path="/v2/subscribers/{subscriberId}" -->
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

$patchSubscriberRequestDto = new Components\PatchSubscriberRequestDto();

$response = $sdk->subscribers->patch(
    subscriberId: '<id>',
    patchSubscriberRequestDto: $patchSubscriberRequestDto

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

Deletes a subscriber entity from the Novu platform along with associated messages, preferences, and topic subscriptions. 
      **subscriberId** is a required field.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_removeSubscriber" method="delete" path="/v2/subscribers/{subscriberId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->subscribers->delete(
    subscriberId: '<id>'
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

## createBulk


      Using this endpoint multiple subscribers can be created at once. The bulk API is limited to 500 subscribers per request.
    

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersV1Controller_bulkCreateSubscribers" method="post" path="/v1/subscribers/bulk" -->
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

$bulkSubscriberCreateDto = new Components\BulkSubscriberCreateDto(
    subscribers: [
        new Components\CreateSubscriberRequestDto(
            subscriberId: '<id>',
        ),
    ],
);

$response = $sdk->subscribers->createBulk(
    bulkSubscriberCreateDto: $bulkSubscriberCreateDto
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

## updatePreferences

Update subscriber preferences by its unique key identifier **subscriberId**. 
    **workflowId** is optional field, if provided, this API will update that workflow preference, 
    otherwise it will update global preferences

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersController_updateSubscriberPreferences" method="patch" path="/v2/subscribers/{subscriberId}/preferences" -->
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

$patchSubscriberPreferencesDto = new Components\PatchSubscriberPreferencesDto(
    channels: new Components\PatchPreferenceChannelsDto(),
);

$response = $sdk->subscribers->updatePreferences(
    subscriberId: '<id>',
    patchSubscriberPreferencesDto: $patchSubscriberPreferencesDto

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

## updateCredentials

Upsert credentials for a provider such as slack and push tokens. 
      **providerId** is required field. This API creates **deviceTokens** or appends to the existing ones.

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersV1Controller_updateSubscriberChannel" method="put" path="/v1/subscribers/{subscriberId}/credentials" -->
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
    providerId: Components\ChatOrPushProviderEnum::Slack,
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
    updateSubscriberChannelRequestDto: $updateSubscriberChannelRequestDto

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

Update the subscriber online status by its unique key identifier **subscriberId**

### Example Usage

<!-- UsageSnippet language="php" operationID="SubscribersV1Controller_updateSubscriberOnlineFlag" method="patch" path="/v1/subscribers/{subscriberId}/online-status" -->
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

$updateSubscriberOnlineFlagRequestDto = new Components\UpdateSubscriberOnlineFlagRequestDto(
    isOnline: false,
);

$response = $sdk->subscribers->updateOnlineStatus(
    subscriberId: '<id>',
    updateSubscriberOnlineFlagRequestDto: $updateSubscriberOnlineFlagRequestDto

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