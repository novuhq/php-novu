# Stats
(*notifications->stats*)

## Overview

### Available Operations

* [getGraph](#getgraph) - Get notification graph statistics
* [get](#get) - Get notification statistics

## getGraph

Get notification graph statistics

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



$response = $sdk->notifications->stats->getGraph(
    days: 517.81
);

if ($response->activityGraphStatesResponses !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `days`             | *?float*           | :heavy_minus_sign: | N/A                |

### Response

**[?Operations\NotificationsControllerGetActivityGraphStatsResponse](../../Models/Operations/NotificationsControllerGetActivityGraphStatsResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## get

Get notification statistics

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



$response = $sdk->notifications->stats->get(

);

if ($response->activityStatsResponseDto !== null) {
    // handle response
}
```

### Response

**[?Operations\NotificationsControllerGetActivityStatsResponse](../../Models/Operations/NotificationsControllerGetActivityStatsResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |