<!-- Start SDK Example Usage [usage] -->
### Broadcast Event to All

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

$triggerEventToAllRequestDto = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\TriggerEventToAllRequestDtoOverrides(),
);

$response = $sdk->triggerBroadcast(
    triggerEventToAllRequestDto: $triggerEventToAllRequestDto,
    idempotencyKey: '<value>'

);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

### Cancel Triggered Event

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->cancel(
    transactionId: '<id>',
    idempotencyKey: '<value>'

);

if ($response->dataBooleanDto !== null) {
    // handle response
}
```

### Trigger Notification Event

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

$triggerEventRequestDto = new Components\TriggerEventRequestDto(
    workflowId: 'workflow_identifier',
    to: new Components\SubscriberPayloadDto(
        subscriberId: '<id>',
    ),
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: [
        'fcm' => [
            'data' => [
                'key' => 'value',
            ],
        ],
    ],
);

$response = $sdk->trigger(
    triggerEventRequestDto: $triggerEventRequestDto,
    idempotencyKey: '<value>'

);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

### Trigger Notification Events in Bulk

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

$bulkTriggerEventDto = new Components\BulkTriggerEventDto(
    events: [
        new Components\TriggerEventRequestDto(
            workflowId: 'workflow_identifier',
            to: new Components\TopicPayloadDto(
                topicKey: '<value>',
                type: Components\TriggerRecipientsTypeEnum::Topic,
            ),
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            overrides: [
                'fcm' => [
                    'data' => [
                        'key' => 'value',
                    ],
                ],
            ],
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
<!-- End SDK Example Usage [usage] -->