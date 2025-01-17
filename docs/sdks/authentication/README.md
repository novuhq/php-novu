# Authentication
(*subscribers->authentication*)

## Overview

### Available Operations

* [chatAccessOauth](#chataccessoauth) - Handle chat oauth
* [oauthCallback](#oauthcallback) - Handle providers oauth redirect

## chatAccessOauth

Handle chat oauth

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\SubscribersControllerChatAccessOauthRequest(
    subscriberId: '<id>',
    providerId: '<value>',
    hmacHash: '<value>',
    environmentId: '<id>',
);

$response = $sdk->subscribers->authentication->chatAccessOauth(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [Operations\SubscribersControllerChatAccessOauthRequest](../../Models/Operations/SubscribersControllerChatAccessOauthRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\SubscribersControllerChatAccessOauthResponse](../../Models/Operations/SubscribersControllerChatAccessOauthResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## oauthCallback

Handle providers oauth redirect

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\SubscribersControllerChatOauthCallbackRequest(
    subscriberId: '<id>',
    providerId: '<value>',
    hmacHash: '<value>',
    environmentId: '<id>',
    code: '<value>',
);

$response = $sdk->subscribers->authentication->oauthCallback(
    request: $request
);

if ($response->res !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\SubscribersControllerChatOauthCallbackRequest](../../Models/Operations/SubscribersControllerChatOauthCallbackRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\SubscribersControllerChatOauthCallbackResponse](../../Models/Operations/SubscribersControllerChatOauthCallbackResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\ErrorDto           | 400, 404, 409             | application/json          |
| Errors\ValidationErrorDto | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |