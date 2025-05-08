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


    Trigger event is the main (and only) way to send notifications to subscribers. 
    The trigger identifier is used to match the particular workflow associated with it. 
    Additional information can be passed according the body interface below.
    

### Example Usage

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
    to: new Components\SubscriberPayloadDto(
        subscriberId: '<id>',
    ),
);

$response = $sdk->trigger(
    triggerEventRequestDto: $triggerEventRequestDto,
    idempotencyKey: '<value>'

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

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## cancel


    Using a previously generated transactionId during the event trigger,
     will cancel any active or pending workflows. This is useful to cancel active digests, delays etc...
    

### Example Usage

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
    transactionId: '<id>',
    idempotencyKey: '<value>'

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
);

$response = $sdk->triggerBroadcast(
    triggerEventToAllRequestDto: $triggerEventToAllRequestDto,
    idempotencyKey: '<value>'

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

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## triggerBulk


      Using this endpoint you can trigger multiple events at once, to avoid multiple calls to the API.
      The bulk API is limited to 100 events per request.
    

### Example Usage

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
            to: new Components\TopicPayloadDto(
                topicKey: '<value>',
                type: Components\TriggerRecipientsTypeEnum::Topic,
            ),
        ),
    ],
);

$response = $sdk->triggerBulk(
    bulkTriggerEventDto: $bulkTriggerEventDto,
    idempotencyKey: '<value>'

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

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |