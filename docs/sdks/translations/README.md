# Translations
(*translations*)

## Overview

Used to localize your notifications to different languages.
<https://docs.novu.co/platform/workflow/translations>

### Available Operations

* [create](#create) - Create a translation
* [retrieve](#retrieve) - Retrieve a translation
* [delete](#delete) - Delete a translation
* [upload](#upload) - Upload translation files

## create

Create a translation for a specific workflow and locale, if the translation already exists, it will be updated

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_createTranslationEndpoint" method="post" path="/v2/translations" -->
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

$createTranslationRequestDto = new Components\CreateTranslationRequestDto(
    resourceId: 'welcome-email',
    resourceType: Components\ResourceType::Layout,
    locale: 'en_US',
    content: new Components\Content(),
);

$response = $sdk->translations->create(
    createTranslationRequestDto: $createTranslationRequestDto
);

if ($response->translationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `createTranslationRequestDto`                                                                    | [Components\CreateTranslationRequestDto](../../Models/Components/CreateTranslationRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `idempotencyKey`                                                                                 | *?string*                                                                                        | :heavy_minus_sign:                                                                               | A header for idempotency purposes                                                                |

### Response

**[?Operations\TranslationControllerCreateTranslationEndpointResponse](../../Models/Operations/TranslationControllerCreateTranslationEndpointResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## retrieve

Retrieve a specific translation by resource type, resource ID and locale

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_getSingleTranslation" method="get" path="/v2/translations/{resourceType}/{resourceId}/{locale}" -->
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



$response = $sdk->translations->retrieve(
    resourceType: Operations\PathParamResourceType::Layout,
    resourceId: 'welcome-email',
    locale: 'en_US'

);

if ($response->translationResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          | Example                                                                              |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `resourceType`                                                                       | [Operations\PathParamResourceType](../../Models/Operations/PathParamResourceType.md) | :heavy_check_mark:                                                                   | Resource type                                                                        |                                                                                      |
| `resourceId`                                                                         | *string*                                                                             | :heavy_check_mark:                                                                   | Resource ID                                                                          | welcome-email                                                                        |
| `locale`                                                                             | *string*                                                                             | :heavy_check_mark:                                                                   | Locale code                                                                          | en_US                                                                                |
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |                                                                                      |

### Response

**[?Operations\TranslationControllerGetSingleTranslationResponse](../../Models/Operations/TranslationControllerGetSingleTranslationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## delete

Delete a specific translation by resource type, resource ID and locale

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_deleteTranslationEndpoint" method="delete" path="/v2/translations/{resourceType}/{resourceId}/{locale}" -->
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



$response = $sdk->translations->delete(
    resourceType: Operations\TranslationControllerDeleteTranslationEndpointPathParamResourceType::Layout,
    resourceId: '<id>',
    locale: 'pl'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                        | Type                                                                                                                                                                             | Required                                                                                                                                                                         | Description                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `resourceType`                                                                                                                                                                   | [Operations\TranslationControllerDeleteTranslationEndpointPathParamResourceType](../../Models/Operations/TranslationControllerDeleteTranslationEndpointPathParamResourceType.md) | :heavy_check_mark:                                                                                                                                                               | Resource type                                                                                                                                                                    |
| `resourceId`                                                                                                                                                                     | *string*                                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                               | Resource ID                                                                                                                                                                      |
| `locale`                                                                                                                                                                         | *string*                                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                               | Locale code                                                                                                                                                                      |
| `idempotencyKey`                                                                                                                                                                 | *?string*                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                               | A header for idempotency purposes                                                                                                                                                |

### Response

**[?Operations\TranslationControllerDeleteTranslationEndpointResponse](../../Models/Operations/TranslationControllerDeleteTranslationEndpointResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## upload

Upload one or more JSON translation files for a specific workflow. Files name must match the locale, e.g. en_US.json

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_uploadTranslationFiles" method="post" path="/v2/translations/upload" -->
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

$uploadTranslationsRequestDto = new Components\UploadTranslationsRequestDto(
    resourceId: 'welcome-email',
    resourceType: Components\UploadTranslationsRequestDtoResourceType::Workflow,
);

$response = $sdk->translations->upload(
    uploadTranslationsRequestDto: $uploadTranslationsRequestDto
);

if ($response->uploadTranslationsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `uploadTranslationsRequestDto`                                                                     | [Components\UploadTranslationsRequestDto](../../Models/Components/UploadTranslationsRequestDto.md) | :heavy_check_mark:                                                                                 | Translation files upload body details                                                              |
| `idempotencyKey`                                                                                   | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | A header for idempotency purposes                                                                  |

### Response

**[?Operations\TranslationControllerUploadTranslationFilesResponse](../../Models/Operations/TranslationControllerUploadTranslationFilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |