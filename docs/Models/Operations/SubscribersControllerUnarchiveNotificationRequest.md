# SubscribersControllerUnarchiveNotificationRequest


## Fields

| Field                              | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `subscriberId`                     | *string*                           | :heavy_check_mark:                 | The identifier of the subscriber   |
| `notificationId`                   | *string*                           | :heavy_check_mark:                 | The identifier of the notification |
| `contextKeys`                      | array<*string*>                    | :heavy_minus_sign:                 | Context keys for filtering         |
| `idempotencyKey`                   | *?string*                          | :heavy_minus_sign:                 | A header for idempotency purposes  |