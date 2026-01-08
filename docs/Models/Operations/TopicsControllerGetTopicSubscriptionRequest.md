# TopicsControllerGetTopicSubscriptionRequest


## Fields

| Field                                     | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `topicKey`                                | *string*                                  | :heavy_check_mark:                        | The key identifier of the topic           |
| `identifier`                              | *string*                                  | :heavy_check_mark:                        | The unique identifier of the subscription |
| `idempotencyKey`                          | *?string*                                 | :heavy_minus_sign:                        | A header for idempotency purposes         |