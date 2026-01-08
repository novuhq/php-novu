# Novu SDK

## Overview

Novu API: Novu REST API. Please see https://docs.novu.co/api-reference for more details.

Novu Documentation
<https://docs.novu.co>

### Available Operations

* [trigger](#trigger) - Trigger event
* [cancel](#cancel) - Cancel triggered event
* [triggerBroadcast](#triggerbroadcast) - Broadcast event to all
* [triggerBulk](#triggerbulk) - Bulk trigger event

## trigger

    Trigger event is the main (and only) way to send notifications to subscribers. The trigger identifier is used to match the particular workflow associated with it. Maximum number of recipients can be 100. Additional information can be passed according the body interface below.
    To prevent duplicate triggers, you can optionally pass a **transactionId** in the request body. If the same **transactionId** is used again, the trigger will be ignored. The retention period depends on your billing tier.

### Example Usage

<!-- UsageSnippet language="php" operationID="EventsController_trigger" method="post" path="/v1/events/trigger" -->
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

$triggerEventRequestDto = new Components\TriggerEventRequestDto(
    workflowId: 'workflow_identifier',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
    to: 'SUBSCRIBER_ID',
    actor: '<value>',
    context: [
        'key' => 'org-acme',
    ],
);

$response = $sdk->trigger(
    triggerEventRequestDto: $triggerEventRequestDto
);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `triggerEventRequestDto`                                                               | [Components\TriggerEventRequestDto](../../Models/Components/TriggerEventRequestDto.md) | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `idempotencyKey`                                                                       | *?string*                                                                              | :heavy_minus_sign:                                                                     | A header for idempotency purposes                                                      |

### Response

**[?Operations\EventsControllerTriggerResponse](../../Models/Operations/EventsControllerTriggerResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\PayloadValidationExceptionDto | 400                                  | application/json                     |
| Errors\ErrorDto                      | 414                                  | application/json                     |
| Errors\ErrorDto                      | 401, 403, 404, 405, 409, 413, 415    | application/json                     |
| Errors\ValidationErrorDto            | 422                                  | application/json                     |
| Errors\ErrorDto                      | 500                                  | application/json                     |
| Errors\APIException                  | 4XX, 5XX                             | \*/\*                                |

## cancel


    Using a previously generated transactionId during the event trigger,
     will cancel any active or pending workflows. This is useful to cancel active digests, delays etc...
    

### Example Usage

<!-- UsageSnippet language="php" operationID="EventsController_cancel" method="delete" path="/v1/events/trigger/{transactionId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->cancel(
    transactionId: '<id>'
);

if ($response->boolean !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `transactionId`                   | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\EventsControllerCancelResponse](../../Models/Operations/EventsControllerCancelResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## triggerBroadcast

Trigger a broadcast event to all existing subscribers, could be used to send announcements, etc.

      In the future could be used to trigger events to a subset of subscribers based on defined filters.

### Example Usage

<!-- UsageSnippet language="php" operationID="EventsController_broadcastEventToAll" method="post" path="/v1/events/trigger/broadcast" -->
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

$triggerEventToAllRequestDto = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\TriggerEventToAllRequestDtoOverrides(
        additionalProperties: [
            'fcm' => [
                'data' => [
                    'key' => 'value',
                ],
            ],
        ],
    ),
    actor: new Components\SubscriberPayloadDto(
        firstName: 'John',
        lastName: 'Doe',
        email: 'john.doe@example.com',
        phone: '+1234567890',
        avatar: 'https://example.com/avatar.jpg',
        locale: 'en-US',
        timezone: 'America/New_York',
        subscriberId: '<id>',
    ),
    context: [
        'key' => 'org-acme',
    ],
);

$response = $sdk->triggerBroadcast(
    triggerEventToAllRequestDto: $triggerEventToAllRequestDto
);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `triggerEventToAllRequestDto`                                                                    | [Components\TriggerEventToAllRequestDto](../../Models/Components/TriggerEventToAllRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `idempotencyKey`                                                                                 | *?string*                                                                                        | :heavy_minus_sign:                                                                               | A header for idempotency purposes                                                                |

### Response

**[?Operations\EventsControllerBroadcastEventToAllResponse](../../Models/Operations/EventsControllerBroadcastEventToAllResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\PayloadValidationExceptionDto | 400                                  | application/json                     |
| Errors\ErrorDto                      | 414                                  | application/json                     |
| Errors\ErrorDto                      | 401, 403, 404, 405, 409, 413, 415    | application/json                     |
| Errors\ValidationErrorDto            | 422                                  | application/json                     |
| Errors\ErrorDto                      | 500                                  | application/json                     |
| Errors\APIException                  | 4XX, 5XX                             | \*/\*                                |

## triggerBulk


      Using this endpoint you can trigger multiple events at once, to avoid multiple calls to the API.
      The bulk API is limited to 100 events per request.
    

### Example Usage

<!-- UsageSnippet language="php" operationID="EventsController_triggerBulk" method="post" path="/v1/events/trigger/bulk" -->
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

$bulkTriggerEventDto = new Components\BulkTriggerEventDto(
    events: [
        new Components\TriggerEventRequestDto(
            workflowId: 'workflow_identifier',
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            overrides: new Components\Overrides(),
            to: 'SUBSCRIBER_ID',
        ),
        new Components\TriggerEventRequestDto(
            workflowId: 'workflow_identifier',
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            overrides: new Components\Overrides(),
            to: 'SUBSCRIBER_ID',
        ),
        new Components\TriggerEventRequestDto(
            workflowId: 'workflow_identifier',
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            overrides: new Components\Overrides(),
            to: 'SUBSCRIBER_ID',
        ),
    ],
);

$response = $sdk->triggerBulk(
    bulkTriggerEventDto: $bulkTriggerEventDto
);

if ($response->triggerEventResponseDtos !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `bulkTriggerEventDto`                                                            | [Components\BulkTriggerEventDto](../../Models/Components/BulkTriggerEventDto.md) | :heavy_check_mark:                                                               | N/A                                                                              |
| `idempotencyKey`                                                                 | *?string*                                                                        | :heavy_minus_sign:                                                               | A header for idempotency purposes                                                |

### Response

**[?Operations\EventsControllerTriggerBulkResponse](../../Models/Operations/EventsControllerTriggerBulkResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\PayloadValidationExceptionDto | 400                                  | application/json                     |
| Errors\ErrorDto                      | 414                                  | application/json                     |
| Errors\ErrorDto                      | 401, 403, 404, 405, 409, 413, 415    | application/json                     |
| Errors\ValidationErrorDto            | 422                                  | application/json                     |
| Errors\ErrorDto                      | 500                                  | application/json                     |
| Errors\APIException                  | 4XX, 5XX                             | \*/\*                                |