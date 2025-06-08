<!-- Start SDK Example Usage [usage] -->
### Trigger Notification Event

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
);

$response = $sdk->trigger(
    triggerEventRequestDto: $triggerEventRequestDto
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

### Broadcast Event to All

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
    triggerEventToAllRequestDto: $triggerEventToAllRequestDto
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
<!-- End SDK Example Usage [usage] -->