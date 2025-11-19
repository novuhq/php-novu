# Master
(*translations->master*)

## Overview

### Available Operations

* [retrieve](#retrieve) - Retrieve master translations JSON
* [import](#import) - Import master translations JSON
* [upload](#upload) - Upload master translations JSON file

## retrieve

Retrieve all translations for a locale in master JSON format organized by resourceId (workflowId)

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_getMasterJsonEndpoint" method="get" path="/v2/translations/master-json" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->translations->master->retrieve(
    locale: 'en_US'
);

if ($response->getMasterJsonResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            | Example                                                                |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `locale`                                                               | *?string*                                                              | :heavy_minus_sign:                                                     | Locale to export. If not provided, exports organization default locale | en_US                                                                  |
| `idempotencyKey`                                                       | *?string*                                                              | :heavy_minus_sign:                                                     | A header for idempotency purposes                                      |                                                                        |

### Response

**[?Operations\TranslationControllerGetMasterJsonEndpointResponse](../../Models/Operations/TranslationControllerGetMasterJsonEndpointResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## import

Import translations for multiple workflows from master JSON format for a specific locale

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_importMasterJsonEndpoint" method="post" path="/v2/translations/master-json" -->
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

$importMasterJsonRequestDto = new Components\ImportMasterJsonRequestDto(
    locale: 'en_US',
    masterJson: new Components\MasterJson(),
);

$response = $sdk->translations->master->import(
    importMasterJsonRequestDto: $importMasterJsonRequestDto
);

if ($response->importMasterJsonResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `importMasterJsonRequestDto`                                                                   | [Components\ImportMasterJsonRequestDto](../../Models/Components/ImportMasterJsonRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `idempotencyKey`                                                                               | *?string*                                                                                      | :heavy_minus_sign:                                                                             | A header for idempotency purposes                                                              |

### Response

**[?Operations\TranslationControllerImportMasterJsonEndpointResponse](../../Models/Operations/TranslationControllerImportMasterJsonEndpointResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## upload

Upload a master JSON file containing translations for multiple workflows. Locale is automatically detected from filename (e.g., en_US.json)

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_uploadMasterJsonEndpoint" method="post" path="/v2/translations/master-json/upload" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->translations->master->upload(

);

if ($response->importMasterJsonResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\TranslationControllerUploadMasterJsonEndpointResponse](../../Models/Operations/TranslationControllerUploadMasterJsonEndpointResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |