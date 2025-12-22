# Topics.Subscriptions

## Overview

### Available Operations

* [list](#list) - List topic subscriptions
* [create](#create) - Create topic subscriptions
* [delete](#delete) - Delete topic subscriptions
* [getSubscription](#getsubscription) - Get a topic subscription
* [update](#update) - Update a topic subscription

## list

List all subscriptions of subscribers for a topic.
    Checkout all available filters in the query section.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_listTopicSubscriptions" method="get" path="/v2/topics/{topicKey}/subscriptions" -->
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

$request = new Operations\TopicsControllerListTopicSubscriptionsRequest(
    topicKey: '<value>',
    limit: 10,
);

$response = $sdk->topics->subscriptions->list(
    request: $request
);

if ($response->listTopicSubscriptionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\TopicsControllerListTopicSubscriptionsRequest](../../Models/Operations/TopicsControllerListTopicSubscriptionsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\TopicsControllerListTopicSubscriptionsResponse](../../Models/Operations/TopicsControllerListTopicSubscriptionsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

This api will create subscription for subscriberIds for a topic. 
      Its like subscribing to a common interest group. if topic does not exist, it will be created.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_createTopicSubscriptions" method="post" path="/v2/topics/{topicKey}/subscriptions" -->
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

$createTopicSubscriptionsRequestDto = new Components\CreateTopicSubscriptionsRequestDto(
    subscriptions: [
        new Components\TopicSubscriberIdentifierDto(
            identifier: 'subscriber-123-subscription-a',
            subscriberId: 'subscriber-123',
        ),
        new Components\TopicSubscriberIdentifierDto(
            identifier: 'subscriber-456-subscription-b',
            subscriberId: 'subscriber-456',
        ),
    ],
    name: 'My Topic',
    preferences: [
        new Components\WorkflowPreferenceRequestDto(
            condition: [
                '===' => [
                    [
                        'var' => 'tier',
                    ],
                    'premium',
                ],
            ],
            workflowId: 'workflow-123',
        ),
    ],
);

$response = $sdk->topics->subscriptions->create(
    topicKey: '<value>',
    createTopicSubscriptionsRequestDto: $createTopicSubscriptionsRequestDto

);

if ($response->createSubscriptionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `topicKey`                                                                                                     | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The key identifier of the topic                                                                                |
| `createTopicSubscriptionsRequestDto`                                                                           | [Components\CreateTopicSubscriptionsRequestDto](../../Models/Components/CreateTopicSubscriptionsRequestDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `idempotencyKey`                                                                                               | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | A header for idempotency purposes                                                                              |

### Response

**[?Operations\TopicsControllerCreateTopicSubscriptionsResponse](../../Models/Operations/TopicsControllerCreateTopicSubscriptionsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete subscriptions for subscriberIds for a topic.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_deleteTopicSubscriptions" method="delete" path="/v2/topics/{topicKey}/subscriptions" -->
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

$deleteTopicSubscriptionsRequestDto = new Components\DeleteTopicSubscriptionsRequestDto(
    subscriptions: [
        new Components\DeleteTopicSubscriberIdentifierDto(
            identifier: 'subscriber-123-subscription-a',
            subscriberId: 'subscriber-123',
        ),
        new Components\DeleteTopicSubscriberIdentifierDto(
            subscriberId: 'subscriber-456',
        ),
        new Components\DeleteTopicSubscriberIdentifierDto(
            identifier: 'subscriber-789-subscription-b',
        ),
    ],
);

$response = $sdk->topics->subscriptions->delete(
    topicKey: '<value>',
    deleteTopicSubscriptionsRequestDto: $deleteTopicSubscriptionsRequestDto

);

if ($response->deleteTopicSubscriptionsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `topicKey`                                                                                                     | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The key identifier of the topic                                                                                |
| `deleteTopicSubscriptionsRequestDto`                                                                           | [Components\DeleteTopicSubscriptionsRequestDto](../../Models/Components/DeleteTopicSubscriptionsRequestDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `idempotencyKey`                                                                                               | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | A header for idempotency purposes                                                                              |

### Response

**[?Operations\TopicsControllerDeleteTopicSubscriptionsResponse](../../Models/Operations/TopicsControllerDeleteTopicSubscriptionsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## getSubscription

Get a subscription by its unique identifier **subscriptionIdOrIdentifier** for a topic.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_getTopicSubscription" method="get" path="/v2/topics/{topicKey}/subscriptions/{subscriptionIdOrIdentifier}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->topics->subscriptions->getSubscription(
    topicKey: '<value>',
    subscriptionIdOrIdentifier: '<value>'

);

if ($response->subscriptionResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `topicKey`                                | *string*                                  | :heavy_check_mark:                        | The key identifier of the topic           |
| `subscriptionIdOrIdentifier`              | *string*                                  | :heavy_check_mark:                        | The unique identifier of the subscription |
| `idempotencyKey`                          | *?string*                                 | :heavy_minus_sign:                        | A header for idempotency purposes         |

### Response

**[?Operations\TopicsControllerGetTopicSubscriptionResponse](../../Models/Operations/TopicsControllerGetTopicSubscriptionResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Update a subscription by its unique identifier **subscriptionIdOrIdentifier** for a topic. You can update the preferences and name associated with the subscription.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_updateTopicSubscription" method="patch" path="/v2/topics/{topicKey}/subscriptions/{subscriptionIdOrIdentifier}" -->
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

$updateTopicSubscriptionRequestDto = new Components\UpdateTopicSubscriptionRequestDto(
    name: 'My Subscription',
    preferences: [
        new Components\WorkflowPreferenceRequestDto(
            condition: [
                '===' => [
                    [
                        'var' => 'tier',
                    ],
                    'premium',
                ],
            ],
            workflowId: 'workflow-123',
        ),
    ],
);

$response = $sdk->topics->subscriptions->update(
    topicKey: '<value>',
    subscriptionIdOrIdentifier: '<value>',
    updateTopicSubscriptionRequestDto: $updateTopicSubscriptionRequestDto

);

if ($response->subscriptionResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `topicKey`                                                                                                   | *string*                                                                                                     | :heavy_check_mark:                                                                                           | The key identifier of the topic                                                                              |
| `subscriptionIdOrIdentifier`                                                                                 | *string*                                                                                                     | :heavy_check_mark:                                                                                           | The unique identifier of the subscription                                                                    |
| `updateTopicSubscriptionRequestDto`                                                                          | [Components\UpdateTopicSubscriptionRequestDto](../../Models/Components/UpdateTopicSubscriptionRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `idempotencyKey`                                                                                             | *?string*                                                                                                    | :heavy_minus_sign:                                                                                           | A header for idempotency purposes                                                                            |

### Response

**[?Operations\TopicsControllerUpdateTopicSubscriptionResponse](../../Models/Operations/TopicsControllerUpdateTopicSubscriptionResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |