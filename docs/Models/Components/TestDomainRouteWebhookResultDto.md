# TestDomainRouteWebhookResultDto


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `skipped`                                                                            | *?bool*                                                                              | :heavy_minus_sign:                                                                   | True when outbound webhooks are disabled for this environment (nothing was emitted). |
| `latencyMs`                                                                          | *float*                                                                              | :heavy_check_mark:                                                                   | N/A                                                                                  |