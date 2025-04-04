# SubscribersV1ControllerChatOauthCallbackRequest


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `subscriberId`                                               | *string*                                                     | :heavy_check_mark:                                           | N/A                                                          |
| `providerId`                                                 | *mixed*                                                      | :heavy_check_mark:                                           | N/A                                                          |
| `hmacHash`                                                   | *string*                                                     | :heavy_check_mark:                                           | HMAC hash for the request                                    |
| `environmentId`                                              | *string*                                                     | :heavy_check_mark:                                           | The ID of the environment, must be a valid MongoDB ID        |
| `code`                                                       | *string*                                                     | :heavy_check_mark:                                           | Optional authorization code returned from the OAuth provider |
| `integrationIdentifier`                                      | *?string*                                                    | :heavy_minus_sign:                                           | Optional integration identifier                              |
| `idempotencyKey`                                             | *?string*                                                    | :heavy_minus_sign:                                           | A header for idempotency purposes                            |