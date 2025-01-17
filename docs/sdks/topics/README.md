# Topics
(*topics*)

## Overview

Topics are a way to group subscribers together so that they can be notified of events at once. A topic is identified by a custom key. This can be helpful for things like sending out marketing emails or notifying users of new features. Topics can also be used to send notifications to the subscribers who have been grouped together based on their interests, location, activities and much more.
<https://docs.novu.co/subscribers/topics>

### Available Operations

* [create](#create) - Topic creation
* [delete](#delete) - Delete topic
* [get](#get) - Get topic
* [list](#list) - Get topic list filtered 
* [rename](#rename) - Rename a topic

## create

Create a topic

### Example Usage

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

$request = new Components\CreateTopicRequestDto(
    key: '<key>',
    name: '<value>',
);

$response = $sdk->topics->create(
    request: $request
);

if ($response->createTopicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Components\CreateTopicRequestDto](../../Models/Components/CreateTopicRequestDto.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\TopicsControllerCreateTopicResponse](../../Models/Operations/TopicsControllerCreateTopicResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## delete

Delete a topic by its topic key if it has no subscribers

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->topics->delete(
    topicKey: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `topicKey`         | *string*           | :heavy_check_mark: | The topic key      |

### Response

**[?Operations\TopicsControllerDeleteTopicResponse](../../Models/Operations/TopicsControllerDeleteTopicResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## get

Get a topic by its topic key

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->topics->get(
    topicKey: '<value>'
);

if ($response->getTopicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `topicKey`         | *string*           | :heavy_check_mark: | The topic key      |

### Response

**[?Operations\TopicsControllerGetTopicResponse](../../Models/Operations/TopicsControllerGetTopicResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## list

Returns a list of topics that can be paginated using the `page` query parameter and filtered by the topic key with the `key` query parameter

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->topics->list(
    page: 0,
    pageSize: 10,
    key: 'exampleKey'

);

if ($response->filterTopicsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `page`                                               | *?int*                                               | :heavy_minus_sign:                                   | The page number to retrieve (starts from 0)          | 0                                                    |
| `pageSize`                                           | *?int*                                               | :heavy_minus_sign:                                   | The number of items to return per page (default: 10) | 10                                                   |
| `key`                                                | *?string*                                            | :heavy_minus_sign:                                   | A filter key to apply to the results                 | exampleKey                                           |

### Response

**[?Operations\TopicsControllerListTopicsResponse](../../Models/Operations/TopicsControllerListTopicsResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## rename

Rename a topic by providing a new name

### Example Usage

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

$renameTopicRequestDto = new Components\RenameTopicRequestDto(
    name: '<value>',
);

$response = $sdk->topics->rename(
    topicKey: '<value>',
    renameTopicRequestDto: $renameTopicRequestDto

);

if ($response->renameTopicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `topicKey`                                                                           | *string*                                                                             | :heavy_check_mark:                                                                   | The topic key                                                                        |
| `renameTopicRequestDto`                                                              | [Components\RenameTopicRequestDto](../../Models/Components/RenameTopicRequestDto.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |

### Response

**[?Operations\TopicsControllerRenameTopicResponse](../../Models/Operations/TopicsControllerRenameTopicResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |