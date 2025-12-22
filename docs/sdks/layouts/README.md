# Layouts

## Overview

Layouts are reusable wrappers for your email notifications.
<https://docs.novu.co/platform/workflow/layouts>

### Available Operations

* [create](#create) - Create a layout
* [list](#list) - List all layouts
* [update](#update) - Update a layout
* [retrieve](#retrieve) - Retrieve a layout
* [delete](#delete) - Delete a layout
* [duplicate](#duplicate) - Duplicate a layout
* [generatePreview](#generatepreview) - Generate layout preview
* [usage](#usage) - Get layout usage

## create

Creates a new layout in the Novu Cloud environment

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController_create" method="post" path="/v2/layouts" -->
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

$createLayoutDto = new Components\CreateLayoutDto(
    layoutId: '<id>',
    name: '<value>',
);

$response = $sdk->layouts->create(
    createLayoutDto: $createLayoutDto
);

if ($response->layoutResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `createLayoutDto`                                                        | [Components\CreateLayoutDto](../../Models/Components/CreateLayoutDto.md) | :heavy_check_mark:                                                       | Layout creation details                                                  |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |

### Response

**[?Operations\LayoutsControllerCreateResponse](../../Models/Operations/LayoutsControllerCreateResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## list

Retrieves a list of layouts with optional filtering and pagination

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController_list" method="get" path="/v2/layouts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$request = new Operations\LayoutsControllerListRequest(
    limit: 10,
    offset: 0,
);

$response = $sdk->layouts->list(
    request: $request
);

if ($response->listLayoutResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\LayoutsControllerListRequest](../../Models/Operations/LayoutsControllerListRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\LayoutsControllerListResponse](../../Models/Operations/LayoutsControllerListResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Updates the details of an existing layout, here **layoutId** is the identifier of the layout

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController_update" method="put" path="/v2/layouts/{layoutId}" -->
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

$updateLayoutDto = new Components\UpdateLayoutDto(
    name: '<value>',
);

$response = $sdk->layouts->update(
    layoutId: '<id>',
    updateLayoutDto: $updateLayoutDto

);

if ($response->layoutResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `layoutId`                                                               | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `updateLayoutDto`                                                        | [Components\UpdateLayoutDto](../../Models/Components/UpdateLayoutDto.md) | :heavy_check_mark:                                                       | Layout update details                                                    |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |

### Response

**[?Operations\LayoutsControllerUpdateResponse](../../Models/Operations/LayoutsControllerUpdateResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Fetches details of a specific layout by its unique identifier **layoutId**

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController_get" method="get" path="/v2/layouts/{layoutId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->layouts->retrieve(
    layoutId: '<id>'
);

if ($response->layoutResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `layoutId`                        | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\LayoutsControllerGetResponse](../../Models/Operations/LayoutsControllerGetResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Removes a specific layout by its unique identifier **layoutId**

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController__delete" method="delete" path="/v2/layouts/{layoutId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->layouts->delete(
    layoutId: '<id>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                           | Type                                | Required                            | Description                         |
| ----------------------------------- | ----------------------------------- | ----------------------------------- | ----------------------------------- |
| `layoutId`                          | *string*                            | :heavy_check_mark:                  | The unique identifier of the layout |
| `idempotencyKey`                    | *?string*                           | :heavy_minus_sign:                  | A header for idempotency purposes   |

### Response

**[?Operations\LayoutsControllerDeleteResponse](../../Models/Operations/LayoutsControllerDeleteResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## duplicate

Duplicates a layout by its unique identifier **layoutId**. This will create a new layout with the content of the original layout.

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController_duplicate" method="post" path="/v2/layouts/{layoutId}/duplicate" -->
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

$duplicateLayoutDto = new Components\DuplicateLayoutDto(
    name: '<value>',
);

$response = $sdk->layouts->duplicate(
    layoutId: '<id>',
    duplicateLayoutDto: $duplicateLayoutDto

);

if ($response->layoutResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `layoutId`                                                                     | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `duplicateLayoutDto`                                                           | [Components\DuplicateLayoutDto](../../Models/Components/DuplicateLayoutDto.md) | :heavy_check_mark:                                                             | N/A                                                                            |
| `idempotencyKey`                                                               | *?string*                                                                      | :heavy_minus_sign:                                                             | A header for idempotency purposes                                              |

### Response

**[?Operations\LayoutsControllerDuplicateResponse](../../Models/Operations/LayoutsControllerDuplicateResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## generatePreview

Generates a preview for a layout by its unique identifier **layoutId**

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController_generatePreview" method="post" path="/v2/layouts/{layoutId}/preview" -->
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

$layoutPreviewRequestDto = new Components\LayoutPreviewRequestDto(
    previewPayload: new Components\LayoutPreviewPayloadDto(
        subscriber: new Components\SubscriberResponseDtoOptional(
            channels: [
                new Components\ChannelSettingsDto(
                    providerId: Components\ChatOrPushProviderEnum::Mattermost,
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
                    integrationId: '<id>',
                ),
            ],
        ),
    ),
);

$response = $sdk->layouts->generatePreview(
    layoutId: '<id>',
    layoutPreviewRequestDto: $layoutPreviewRequestDto

);

if ($response->generateLayoutPreviewResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `layoutId`                                                                               | *string*                                                                                 | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `layoutPreviewRequestDto`                                                                | [Components\LayoutPreviewRequestDto](../../Models/Components/LayoutPreviewRequestDto.md) | :heavy_check_mark:                                                                       | Layout preview generation details                                                        |
| `idempotencyKey`                                                                         | *?string*                                                                                | :heavy_minus_sign:                                                                       | A header for idempotency purposes                                                        |

### Response

**[?Operations\LayoutsControllerGeneratePreviewResponse](../../Models/Operations/LayoutsControllerGeneratePreviewResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## usage

Retrieves information about workflows that use the specified layout by its unique identifier **layoutId**

### Example Usage

<!-- UsageSnippet language="php" operationID="LayoutsController_getUsage" method="get" path="/v2/layouts/{layoutId}/usage" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->layouts->usage(
    layoutId: '<id>'
);

if ($response->getLayoutUsageResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `layoutId`                        | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\LayoutsControllerGetUsageResponse](../../Models/Operations/LayoutsControllerGetUsageResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |