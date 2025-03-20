# SubscribersAuthentication
(*subscribersAuthentication*)

## Overview

### Available Operations

* [chatAccessOauth](#chataccessoauth) - Handle chat oauth

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
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$request = new Operations\SubscribersV1ControllerChatAccessOauthRequest(
    subscriberId: '<id>',
    providerId: '<value>',
    hmacHash: '<value>',
    environmentId: '<id>',
);

$response = $sdk->subscribersAuthentication->chatAccessOauth(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\SubscribersV1ControllerChatAccessOauthRequest](../../Models/Operations/SubscribersV1ControllerChatAccessOauthRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\SubscribersV1ControllerChatAccessOauthResponse](../../Models/Operations/SubscribersV1ControllerChatAccessOauthResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |