# SubscriberChannelDto


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `providerId`                                                                         | [Components\ProviderId](../../Models/Components/ProviderId.md)                       | :heavy_check_mark:                                                                   | The ID of the chat or push provider.                                                 |
| `integrationIdentifier`                                                              | *?string*                                                                            | :heavy_minus_sign:                                                                   | An optional identifier for the integration.                                          |
| `credentials`                                                                        | [Components\ChannelCredentialsDto](../../Models/Components/ChannelCredentialsDto.md) | :heavy_check_mark:                                                                   | Credentials for the channel.                                                         |