# InboundWebhooksControllerHandleWebhookRequest


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `environmentId`                                      | *string*                                             | :heavy_check_mark:                                   | The environment identifier                           |
| `integrationId`                                      | *string*                                             | :heavy_check_mark:                                   | The integration identifier for the delivery provider |
| `idempotencyKey`                                     | *?string*                                            | :heavy_minus_sign:                                   | A header for idempotency purposes                    |
| `requestBody`                                        | *mixed*                                              | :heavy_check_mark:                                   | Webhook event payload from the delivery provider     |