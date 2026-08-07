# Agents

## Overview

Agents are conversational assistants that receive inbound messages from connected channels and respond through a custom code bridge or a managed runtime provider.
<https://docs.novu.co/agents>

### Available Operations

* [create](#create) - Create an agent
* [list](#list) - List all agents
* [sendReply](#sendreply) - Send an agent reply
* [retrieve](#retrieve) - Retrieve an agent
* [update](#update) - Update an agent
* [delete](#delete) - Delete an agent
* [updateBridge](#updatebridge) - Update an agent bridge

## create

Create an agent scoped to the current environment. The identifier must be unique per environment. Set `runtime` to `managed` and supply `managedRuntime` to provision a provider-hosted agent brain.

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentsController_createAgent" method="post" path="/v1/agents" -->
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

$createAgentRequestDto = new Components\CreateAgentRequestDto(
    name: '<value>',
    identifier: '<value>',
);

$response = $sdk->agents->create(
    novuAnalyticsSource: '<value>',
    createAgentRequestDto: $createAgentRequestDto

);

if ($response->agentResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `novuAnalyticsSource`                                                                | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `createAgentRequestDto`                                                              | [Components\CreateAgentRequestDto](../../Models/Components/CreateAgentRequestDto.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |

### Response

**[?Operations\AgentsControllerCreateAgentResponse](../../Models/Operations/AgentsControllerCreateAgentResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## list

Retrieve a cursor-paginated list of agents for the current environment. Use **after**, **before**, **limit**, **orderBy**, and **orderDirection** query parameters.

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentsController_listAgents" method="get" path="/v1/agents" -->
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

$request = new Operations\AgentsControllerListAgentsRequest(
    limit: 10,
);

$response = $sdk->agents->list(
    request: $request
);

if ($response->listAgentsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AgentsControllerListAgentsRequest](../../Models/Operations/AgentsControllerListAgentsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AgentsControllerListAgentsResponse](../../Models/Operations/AgentsControllerListAgentsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## sendReply

Send a message or side-effect into an existing agent conversation from your backend.

Use this endpoint when you are not using `@novu/framework` (for example Python, Go, PHP, .NET, or Java SDKs),
or when a server process outside the bridge needs to post into a live conversation.

**Message actions**
- `reply` — markdown, interactive card, or tool-approval card (optional `files`)
- `edit` — update a previously delivered message in place
- `deleteMessages` — remove rendered platform messages (history is kept)
- `addReactions` — add emoji reactions to existing messages

**Turn control**
- `typing` — `{ status?: string }` to set status, or `"stop"` to clear
- `resolve` — mark the conversation resolved (optionally with a final reply)
- `error: true` — report a customer-runtime failure (cannot combine with other actions)

**Signals & tools**
- `signals` — metadata set/delete/clear, or trigger a Novu workflow
- `toolResults` — persist tool outputs into conversation history
- `toolApprovalRequest` — ledger a gated tool call (pair with an approval card reply)

Returns `{ data: { messageId, platformThreadId } }` when a reply or edit is delivered;
otherwise `{ data: null }`.

### Example Usage: addReaction

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="addReaction" -->
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
    addReactions: [
        new Components\AddReactionPayloadDto(
            messageId: '1712345678.123456',
            emojiName: 'white_check_mark',
        ),
    ],
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```
### Example Usage: cardReply

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="cardReply" -->
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
    reply: new Components\CardReplyContentDto(
        card: [
            'type' => 'card',
            'title' => 'Order #123',
            'children' => [
                [
                    'type' => 'text',
                    'content' => 'Your order is ready for pickup.',
                ],
                [
                    'type' => 'button',
                    'id' => 'confirm',
                    'label' => 'Confirm',
                    'style' => 'primary',
                ],
            ],
        ],
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
### Example Usage: deleteMessage

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="deleteMessage" -->
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
    deleteMessages: [
        new Components\DeleteMessagePayloadDto(
            messageId: '1712345678.123456',
        ),
    ],
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```
### Example Usage: editMessage

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="editMessage" -->
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
    edit: new Components\EditPayloadDto(
        messageId: '1712345678.123456',
        content: new Components\MarkdownReplyContentDto(
            markdown: 'Updated: the report is now final.',
        ),
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
### Example Usage: markdownReply

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="markdownReply" -->
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
### Example Usage: metadataSignal

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="metadataSignal" -->
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
    signals: [
        new Components\TriggerSignalDto(
            type: Components\TriggerSignalDtoType::Trigger,
            workflowId: 'order-shipped',
            to: 'subscriber-123',
            payload: [
                'orderId' => 'ORD-42',
            ],
        ),
    ],
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```
### Example Usage: replyWithFile

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="replyWithFile" -->
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
        markdown: 'Here is your report.',
        files: [
            new Components\FileRefDto(
                filename: 'report.pdf',
                mimeType: 'application/pdf',
                url: 'https://example.com/files/report.pdf',
            ),
        ],
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
### Example Usage: resolveConversation

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="resolveConversation" -->
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
        markdown: 'Glad that helped — marking this as resolved.',
    ),
    resolve: new Components\ResolveDto(
        summary: 'Answered billing question about invoice INV-42.',
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
### Example Usage: toolApprovalRequest

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="toolApprovalRequest" -->
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
    reply: new Components\ToolApprovalCardReplyContentDto(
        toolApprovalCard: [
            'type' => 'tool-approval-card',
            'title' => 'Approve refund?',
            'subtitle' => 'issue_refund · ORD-42 · $25.00',
            'approveLabel' => 'Approve',
            'denyLabel' => 'Deny',
        ],
    ),
    toolApprovalRequest: new Components\ToolApprovalRequestPayloadDto(
        approvalId: 'apr_01HZX',
        toolCallId: 'call_refund_1',
        name: 'issue_refund',
        input: [
            'orderId' => 'ORD-42',
            'amountCents' => 2500,
        ],
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
### Example Usage: toolResult

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="toolResult" -->
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
        markdown: 'Your order **ORD-42** has shipped and should arrive by July 16.',
    ),
    toolResults: [
        new Components\ToolResultDto(
            toolCallId: 'call_abc123',
            toolName: 'lookup_order',
            output: new Components\Output(),
            preview: 'Order ORD-42 is shipped',
        ),
    ],
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```
### Example Usage: triggerWorkflow

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="triggerWorkflow" -->
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
    signals: [
        new Components\TriggerSignalDto(
            type: Components\TriggerSignalDtoType::Trigger,
            workflowId: 'order-shipped',
            to: 'subscriber-123',
            payload: [
                'orderId' => 'ORD-42',
            ],
        ),
    ],
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```
### Example Usage: turnError

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="turnError" -->
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
    error: true,
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```
### Example Usage: typingStart

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="typingStart" -->
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
    typing: new Components\TypingStatusDto(
        status: 'Looking up your order…',
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
### Example Usage: typingStop

<!-- UsageSnippet language="php" operationID="AgentReplyController_handleAgentReplyHandler" method="post" path="/v1/agents/{agentId}/reply" example="typingStop" -->
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
    typing: Components\Typing1::Stop,
);

$response = $sdk->agents->sendReply(
    agentId: 'support-agent',
    agentReplyPayloadDto: $agentReplyPayloadDto

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                            | Required                                                                                                                                                                                                                                        | Description                                                                                                                                                                                                                                     | Example                                                                                                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `agentId`                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                              | Agent identifier (slug) for the agent that owns the conversation.                                                                                                                                                                               | support-agent                                                                                                                                                                                                                                   |
| `agentReplyPayloadDto`                                                                                                                                                                                                                          | [Components\AgentReplyPayloadDto](../../Models/Components/AgentReplyPayloadDto.md)                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                              | Reply payload. Provide at least one action: `reply`, `edit`, `resolve`, `signals`, `toolResults`, `toolApprovalRequest`, `addReactions`, `deleteMessages`, `typing`, or `error`. See named examples for common shapes used by server-side SDKs. |                                                                                                                                                                                                                                                 |
| `idempotencyKey`                                                                                                                                                                                                                                | *?string*                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                              | A header for idempotency purposes                                                                                                                                                                                                               |                                                                                                                                                                                                                                                 |

### Response

**[?Operations\AgentReplyControllerHandleAgentReplyHandlerResponse](../../Models/Operations/AgentReplyControllerHandleAgentReplyHandlerResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## retrieve

Retrieve an agent by its external identifier (not the internal MongoDB id).

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentsController_getAgent" method="get" path="/v1/agents/{identifier}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->agents->retrieve(
    identifier: '<value>'
);

if ($response->agentResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `identifier`                      | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\AgentsControllerGetAgentResponse](../../Models/Operations/AgentsControllerGetAgentResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## update

Update an agent by its external identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentsController_updateAgent" method="patch" path="/v1/agents/{identifier}" -->
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

$updateAgentRequestDto = new Components\UpdateAgentRequestDto();

$response = $sdk->agents->update(
    identifier: '<value>',
    updateAgentRequestDto: $updateAgentRequestDto

);

if ($response->agentResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `identifier`                                                                         | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `updateAgentRequestDto`                                                              | [Components\UpdateAgentRequestDto](../../Models/Components/UpdateAgentRequestDto.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |

### Response

**[?Operations\AgentsControllerUpdateAgentResponse](../../Models/Operations/AgentsControllerUpdateAgentResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## delete

Delete an agent by identifier, remove all agent-integration links, and clear the agent assignment from any workflows that reference it. For managed-runtime agents, pass `deleteFromProvider=true` to also archive the agent on the provider side (e.g. Anthropic). By default only the Novu record is deleted and the provider agent is left intact.

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentsController_deleteAgent" method="delete" path="/v1/agents/{identifier}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->agents->delete(
    identifier: '<value>',
    deleteFromProvider: '<value>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `identifier`                      | *string*                          | :heavy_check_mark:                | N/A                               |
| `deleteFromProvider`              | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\AgentsControllerDeleteAgentResponse](../../Models/Operations/AgentsControllerDeleteAgentResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## updateBridge

Update the bridge URL configuration for an agent. Used by the CLI to register dev tunnel URLs. Refuses to activate dev bridges on production environments.

### Example Usage

<!-- UsageSnippet language="php" operationID="AgentsController_updateAgentBridge" method="put" path="/v1/agents/{identifier}/bridge" -->
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

$updateAgentBridgeRequestDto = new Components\UpdateAgentBridgeRequestDto();

$response = $sdk->agents->updateBridge(
    identifier: '<value>',
    updateAgentBridgeRequestDto: $updateAgentBridgeRequestDto

);

if ($response->agentResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `identifier`                                                                                     | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `updateAgentBridgeRequestDto`                                                                    | [Components\UpdateAgentBridgeRequestDto](../../Models/Components/UpdateAgentBridgeRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `idempotencyKey`                                                                                 | *?string*                                                                                        | :heavy_minus_sign:                                                                               | A header for idempotency purposes                                                                |

### Response

**[?Operations\AgentsControllerUpdateAgentBridgeResponse](../../Models/Operations/AgentsControllerUpdateAgentBridgeResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 405, 409, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |