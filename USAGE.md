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
    bridgeUrl: 'https://your-tunnel.novu.co/api/novu',
    overrides: new Components\Overrides(),
    agentId: 'support-agent',
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
    agentId: 'support-agent',
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

### Send an agent reply

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

$agentReplyPayloadDto = new Components\AgentReplyPayloadDto(
    conversationId: '64f5a1c2e8b7a3d9f0c1b2a3',
    integrationIdentifier: 'slack-support',
    reply: new Components\MarkdownReplyContentDto(
        markdown: '**Report ready.** Your weekly summary is attached.',
    ),
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->