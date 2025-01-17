# Subscribers
(*subscribers*)

## Overview

### Available Operations

* [createBulk](#createbulk) - Bulk create subscribers
* [create](#create) - Create subscriber
* [get](#get) - Get subscriber
* [list](#list) - Get subscribers
* [delete](#delete) - Delete subscriber
* [update](#update) - Update subscriber
* [updateOnlineStatus](#updateonlinestatus) - Update subscriber online status

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

$request = new Components\BulkSubscriberCreateDto(
    subscribers: [
        new Components\CreateSubscriberRequestDto(
            subscriberId: '<id>',
        ),
    ],
);

$response = $sdk->subscribers->createBulk(
    request: $request
);

if ($response->bulkCreateSubscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Components\BulkSubscriberCreateDto](../../Models/Components/BulkSubscriberCreateDto.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\SubscribersControllerBulkCreateSubscribersResponse](../../Models/Operations/SubscribersControllerBulkCreateSubscribersResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

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

$request = new Components\CreateSubscriberRequestDto(
    subscriberId: '<id>',
);

$response = $sdk->subscribers->create(
    request: $request
);

if ($response->subscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Components\CreateSubscriberRequestDto](../../Models/Components/CreateSubscriberRequestDto.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\SubscribersControllerCreateSubscriberResponse](../../Models/Operations/SubscribersControllerCreateSubscriberResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

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
    includeTopics: false

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

### Response

**[?Operations\SubscribersControllerGetSubscriberResponse](../../Models/Operations/SubscribersControllerGetSubscriberResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

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
    limit: 10

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `page`             | *?float*           | :heavy_minus_sign: | N/A                |
| `limit`            | *?float*           | :heavy_minus_sign: | N/A                |

### Response

**[?Operations\SubscribersControllerListSubscribersResponse](../../Models/Operations/SubscribersControllerListSubscribersResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

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
    subscriberId: '<id>'
);

if ($response->deleteSubscriberResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `subscriberId`     | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\SubscribersControllerRemoveSubscriberResponse](../../Models/Operations/SubscribersControllerRemoveSubscriberResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

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
    updateSubscriberRequestDto: $updateSubscriberRequestDto

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

### Response

**[?Operations\SubscribersControllerUpdateSubscriberResponse](../../Models/Operations/SubscribersControllerUpdateSubscriberResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

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

### Response

**[?Operations\SubscribersControllerUpdateSubscriberOnlineFlagResponse](../../Models/Operations/SubscribersControllerUpdateSubscriberOnlineFlagResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |