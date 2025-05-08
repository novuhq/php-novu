# Topics
(*topics*)

## Overview

Topics are a way to group subscribers together so that they can be notified of events at once. A topic is identified by a custom key. This can be helpful for things like sending out marketing emails or notifying users of new features. Topics can also be used to send notifications to the subscribers who have been grouped together based on their interests, location, activities and much more.
<https://docs.novu.co/subscribers/topics>

### Available Operations

* [create](#create) - Topic creation
* [list](#list) - Get topic list filtered 
* [delete](#delete) - Delete topic
* [get](#get) - Get topic
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
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$createTopicRequestDto = new Components\CreateTopicRequestDto(
    key: '<key>',
    name: '<value>',
);

$response = $sdk->topics->create(
    createTopicRequestDto: $createTopicRequestDto,
    idempotencyKey: '<value>'

);

if ($response->createTopicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `createTopicRequestDto`                                                              | [Components\CreateTopicRequestDto](../../Models/Components/CreateTopicRequestDto.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |

### Response

**[?Operations\TopicsControllerCreateTopicResponse](../../Models/Operations/TopicsControllerCreateTopicResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## list

Returns a list of topics that can be paginated using the `page` query parameter and filtered by the topic key with the `key` query parameter

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



$response = $sdk->topics->list(
    page: 0,
    pageSize: 10,
    key: 'exampleKey',
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                     | *?string*                                            | :heavy_minus_sign:                                   | A header for idempotency purposes                    |                                                      |

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

## delete

Delete a topic by its topic key if it has no subscribers

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



$response = $sdk->topics->delete(
    topicKey: '<value>',
    idempotencyKey: '<value>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `topicKey`                        | *string*                          | :heavy_check_mark:                | The topic key                     |
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

## get

Get a topic by its topic key

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



$response = $sdk->topics->get(
    topicKey: '<value>',
    idempotencyKey: '<value>'

);

if ($response->getTopicResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `topicKey`                        | *string*                          | :heavy_check_mark:                | The topic key                     |
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
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$renameTopicRequestDto = new Components\RenameTopicRequestDto(
    name: '<value>',
);

$response = $sdk->topics->rename(
    topicKey: '<value>',
    renameTopicRequestDto: $renameTopicRequestDto,
    idempotencyKey: '<value>'

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
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |

### Response

**[?Operations\TopicsControllerRenameTopicResponse](../../Models/Operations/TopicsControllerRenameTopicResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |