# SubscribersV1ControllerGetUnseenCountRequest


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `subscriberId`                                                          | *string*                                                                | :heavy_check_mark:                                                      | N/A                                                                     |
| `feedId`                                                                | array<*string*>                                                         | :heavy_minus_sign:                                                      | Identifier for the feed. Can be a single string or an array of strings. |
| `seen`                                                                  | *?bool*                                                                 | :heavy_minus_sign:                                                      | Indicates whether to count seen notifications.                          |
| `limit`                                                                 | *?float*                                                                | :heavy_minus_sign:                                                      | The maximum number of notifications to return.                          |
| `idempotencyKey`                                                        | *?string*                                                               | :heavy_minus_sign:                                                      | A header for idempotency purposes                                       |