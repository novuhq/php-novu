# Groups
(*translations->groups*)

## Overview

### Available Operations

* [delete](#delete) - Delete a translation group
* [retrieve](#retrieve) - Retrieve a translation group

## delete

Delete an entire translation group and all its translations

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_deleteTranslationGroupEndpoint" method="delete" path="/v2/translations/{resourceType}/{resourceId}" -->
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



$response = $sdk->translations->groups->delete(
    resourceType: Operations\ResourceType::Workflow,
    resourceId: 'welcome-email'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `resourceType`                                                     | [Operations\ResourceType](../../Models/Operations/ResourceType.md) | :heavy_check_mark:                                                 | Resource type                                                      | workflow                                                           |
| `resourceId`                                                       | *string*                                                           | :heavy_check_mark:                                                 | Resource ID                                                        | welcome-email                                                      |
| `idempotencyKey`                                                   | *?string*                                                          | :heavy_minus_sign:                                                 | A header for idempotency purposes                                  |                                                                    |

### Response

**[?Operations\TranslationControllerDeleteTranslationGroupEndpointResponse](../../Models/Operations/TranslationControllerDeleteTranslationGroupEndpointResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## retrieve

Retrieves a single translation group by resource type (workflow, layout) and resource ID (workflowId, layoutId)

### Example Usage

<!-- UsageSnippet language="php" operationID="TranslationController_getTranslationGroupEndpoint" method="get" path="/v2/translations/group/{resourceType}/{resourceId}" -->
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



$response = $sdk->translations->groups->retrieve(
    resourceType: Operations\TranslationControllerGetTranslationGroupEndpointPathParamResourceType::Workflow,
    resourceId: 'welcome-email'

);

if ($response->translationGroupDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                            | Type                                                                                                                                                                                 | Required                                                                                                                                                                             | Description                                                                                                                                                                          | Example                                                                                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `resourceType`                                                                                                                                                                       | [Operations\TranslationControllerGetTranslationGroupEndpointPathParamResourceType](../../Models/Operations/TranslationControllerGetTranslationGroupEndpointPathParamResourceType.md) | :heavy_check_mark:                                                                                                                                                                   | Resource type                                                                                                                                                                        | workflow                                                                                                                                                                             |
| `resourceId`                                                                                                                                                                         | *string*                                                                                                                                                                             | :heavy_check_mark:                                                                                                                                                                   | Resource ID                                                                                                                                                                          | welcome-email                                                                                                                                                                        |
| `idempotencyKey`                                                                                                                                                                     | *?string*                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                   | A header for idempotency purposes                                                                                                                                                    |                                                                                                                                                                                      |

### Response

**[?Operations\TranslationControllerGetTranslationGroupEndpointResponse](../../Models/Operations/TranslationControllerGetTranslationGroupEndpointResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |