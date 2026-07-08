# ConfigureTelegramWebhookResponseDto


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `webhookUrl`                                           | *string*                                               | :heavy_check_mark:                                     | URL Novu registered with Telegram for incoming updates |
| `configuredAt`                                         | *string*                                               | :heavy_check_mark:                                     | ISO-8601 timestamp the webhook was configured at       |
| `botUsername`                                          | *string*                                               | :heavy_check_mark:                                     | Resolved bot username from getMe                       |