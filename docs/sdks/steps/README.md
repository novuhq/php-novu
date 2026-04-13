# Workflows.Steps

## Overview

### Available Operations

* [generatePreview](#generatepreview) - Generate a step preview
* [retrieve](#retrieve) - Retrieve workflow step

## generatePreview

Generates a preview for a specific workflow step by its unique identifier **stepId**

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_generatePreview" method="post" path="/v2/workflows/{workflowId}/step/{stepId}/preview" -->
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

$generatePreviewRequestDto = new Components\GeneratePreviewRequestDto(
    previewPayload: new Components\PreviewPayloadDto(
        subscriber: new Components\SubscriberResponseDtoOptional(
            channels: [
                new Components\ChannelSettingsDto(
                    providerId: Components\ChatOrPushProviderEnum::NovuSlack,
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
        context: [
            'key' => 'org-acme',
        ],
    ),
);

$response = $sdk->workflows->steps->generatePreview(
    workflowId: '<id>',
    stepId: '<id>',
    generatePreviewRequestDto: $generatePreviewRequestDto

);

if ($response->generatePreviewResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `workflowId`                                                                                 | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `stepId`                                                                                     | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `generatePreviewRequestDto`                                                                  | [Components\GeneratePreviewRequestDto](../../Models/Components/GeneratePreviewRequestDto.md) | :heavy_check_mark:                                                                           | Preview generation details                                                                   |
| `idempotencyKey`                                                                             | *?string*                                                                                    | :heavy_minus_sign:                                                                           | A header for idempotency purposes                                                            |

### Response

**[?Operations\WorkflowControllerGeneratePreviewResponse](../../Models/Operations/WorkflowControllerGeneratePreviewResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Retrieves data for a specific step in a workflow

### Example Usage

<!-- UsageSnippet language="php" operationID="WorkflowController_getWorkflowStepData" method="get" path="/v2/workflows/{workflowId}/steps/{stepId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->workflows->steps->retrieve(
    workflowId: '<id>',
    stepId: '<id>'

);

if ($response->stepResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `workflowId`                      | *string*                          | :heavy_check_mark:                | N/A                               |
| `stepId`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\WorkflowControllerGetWorkflowStepDataResponse](../../Models/Operations/WorkflowControllerGetWorkflowStepDataResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |