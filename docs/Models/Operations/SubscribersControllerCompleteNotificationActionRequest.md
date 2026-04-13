# SubscribersControllerCompleteNotificationActionRequest


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `subscriberId`                                                 | *string*                                                       | :heavy_check_mark:                                             | The identifier of the subscriber                               |
| `notificationId`                                               | *string*                                                       | :heavy_check_mark:                                             | The identifier of the notification                             |
| `actionType`                                                   | [Operations\ActionType](../../Models/Operations/ActionType.md) | :heavy_check_mark:                                             | The type of action (primary or secondary)                      |
| `contextKeys`                                                  | array<*string*>                                                | :heavy_minus_sign:                                             | Context keys for filtering                                     |
| `idempotencyKey`                                               | *?string*                                                      | :heavy_minus_sign:                                             | A header for idempotency purposes                              |