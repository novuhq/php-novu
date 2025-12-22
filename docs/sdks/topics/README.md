# Topics

## Overview

Topics are a way to group subscribers together so that they can be notified of events at once. A topic is identified by a custom key. This can be helpful for things like sending out marketing emails or notifying users of new features. Topics can also be used to send notifications to the subscribers who have been grouped together based on their interests, location, activities and much more.
<https://docs.novu.co/subscribers/topics>

### Available Operations

* [list](#list) - List all topics
* [create](#create) - Create a topic
* [get](#get) - Retrieve a topic
* [update](#update) - Update a topic
* [delete](#delete) - Delete a topic

## list

This api returns a paginated list of topics.
    Topics can be filtered by **key**, **name**, or **includeCursor** to paginate through the list. 
    Checkout all available filters in the query section.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_listTopics" method="get" path="/v2/topics" -->
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

$request = new Operations\TopicsControllerListTopicsRequest(
    limit: 10,
);

$response = $sdk->topics->list(
    request: $request
);

if ($response->listTopicsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\TopicsControllerListTopicsRequest](../../Models/Operations/TopicsControllerListTopicsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\TopicsControllerListTopicsResponse](../../Models/Operations/TopicsControllerListTopicsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Creates a new topic if it does not exist, or updates an existing topic if it already exists. Use ?failIfExists=true to prevent updates.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_upsertTopic" method="post" path="/v2/topics" -->
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

$createUpdateTopicRequestDto = new Components\CreateUpdateTopicRequestDto(
    key: 'task:12345',
    name: 'Task Title',
);

$response = $sdk->topics->create(
    createUpdateTopicRequestDto: $createUpdateTopicRequestDto
);

if ($response->topicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `createUpdateTopicRequestDto`                                                                    | [Components\CreateUpdateTopicRequestDto](../../Models/Components/CreateUpdateTopicRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `failIfExists`                                                                                   | *?bool*                                                                                          | :heavy_minus_sign:                                                                               | If true, the request will fail if a topic with the same key already exists                       |
| `idempotencyKey`                                                                                 | *?string*                                                                                        | :heavy_minus_sign:                                                                               | A header for idempotency purposes                                                                |

### Response

**[?Operations\TopicsControllerUpsertTopicResponse](../../Models/Operations/TopicsControllerUpsertTopicResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\TopicResponseDto           | 409                               | application/json                  |
| Errors\ErrorDto                   | 414                               | application/json                  |
| Errors\ErrorDto                   | 400, 401, 403, 404, 405, 413, 415 | application/json                  |
| Errors\ValidationErrorDto         | 422                               | application/json                  |
| Errors\ErrorDto                   | 500                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## get

Retrieve a topic by its unique key identifier **topicKey**

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_getTopic" method="get" path="/v2/topics/{topicKey}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->topics->get(
    topicKey: '<value>'
);

if ($response->topicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `topicKey`                        | *string*                          | :heavy_check_mark:                | The key identifier of the topic   |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\TopicsControllerGetTopicResponse](../../Models/Operations/TopicsControllerGetTopicResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Update a topic name by its unique key identifier **topicKey**

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_updateTopic" method="patch" path="/v2/topics/{topicKey}" -->
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

$updateTopicRequestDto = new Components\UpdateTopicRequestDto(
    name: 'Updated Topic Name',
);

$response = $sdk->topics->update(
    topicKey: '<value>',
    updateTopicRequestDto: $updateTopicRequestDto

);

if ($response->topicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `topicKey`                                                                           | *string*                                                                             | :heavy_check_mark:                                                                   | The key identifier of the topic                                                      |
| `updateTopicRequestDto`                                                              | [Components\UpdateTopicRequestDto](../../Models/Components/UpdateTopicRequestDto.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |

### Response

**[?Operations\TopicsControllerUpdateTopicResponse](../../Models/Operations/TopicsControllerUpdateTopicResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Delete a topic by its unique key identifier **topicKey**. 
    This action is irreversible and will remove all subscriptions to the topic.

### Example Usage

<!-- UsageSnippet language="php" operationID="TopicsController_deleteTopic" method="delete" path="/v2/topics/{topicKey}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->topics->delete(
    topicKey: '<value>'
);

if ($response->deleteTopicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `topicKey`                        | *string*                          | :heavy_check_mark:                | The key identifier of the topic   |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\TopicsControllerDeleteTopicResponse](../../Models/Operations/TopicsControllerDeleteTopicResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |