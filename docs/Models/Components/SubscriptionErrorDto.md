# SubscriptionErrorDto


## Fields

| Field                                                       | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `subscriberId`                                              | *string*                                                    | :heavy_check_mark:                                          | The subscriber ID that failed                               | invalid-subscriber-id                                       |
| `code`                                                      | *string*                                                    | :heavy_check_mark:                                          | The error code                                              | SUBSCRIBER_NOT_FOUND                                        |
| `message`                                                   | *string*                                                    | :heavy_check_mark:                                          | The error message                                           | Subscriber with ID invalid-subscriber-id could not be found |