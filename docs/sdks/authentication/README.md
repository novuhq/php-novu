# Authentication
(*subscribers->authentication*)

## Overview

### Available Operations

* [handleOauthCallback](#handleoauthcallback) - Handle providers oauth redirect

## handleOauthCallback

Handle providers oauth redirect

### Example Usage

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

$request = new Operations\SubscribersV1ControllerChatOauthCallbackRequest(
    subscriberId: '<id>',
    providerId: '<value>',
    hmacHash: '<value>',
    environmentId: '<id>',
    code: '<value>',
);

$response = $sdk->subscribers->authentication->handleOauthCallback(
    request: $request
);

if ($response->res !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [Operations\SubscribersV1ControllerChatOauthCallbackRequest](../../Models/Operations/SubscribersV1ControllerChatOauthCallbackRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |

### Response

**[?Operations\SubscribersV1ControllerChatOauthCallbackResponse](../../Models/Operations/SubscribersV1ControllerChatOauthCallbackResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |