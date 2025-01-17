# Support
(*support*)

## Overview

### Available Operations

* [createThread](#createthread)
* [fetchUserOrganizations](#fetchuserorganizations)

## createThread

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

$request = new Components\CreateSupportThreadDto(
    text: '<value>',
);

$response = $sdk->support->createThread(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Components\CreateSupportThreadDto](../../Models/Components/CreateSupportThreadDto.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\SupportControllerCreateThreadResponse](../../Models/Operations/SupportControllerCreateThreadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## fetchUserOrganizations

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

$request = new Components\PlainCardRequestDto(
    timestamp: '<value>',
);

$response = $sdk->support->fetchUserOrganizations(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Components\PlainCardRequestDto](../../Models/Components/PlainCardRequestDto.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\SupportControllerFetchUserOrganizationsResponse](../../Models/Operations/SupportControllerFetchUserOrganizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |