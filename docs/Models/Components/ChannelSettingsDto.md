# ChannelSettingsDto


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `providerId`                                                                   | [Components\ProviderId](../../Models/Components/ProviderId.md)                 | :heavy_check_mark:                                                             | The provider identifier for the credentials                                    |
| `credentials`                                                                  | [Components\ChannelCredentials](../../Models/Components/ChannelCredentials.md) | :heavy_check_mark:                                                             | Credentials payload for the specified provider                                 |
| `integrationId`                                                                | *string*                                                                       | :heavy_check_mark:                                                             | The unique identifier of the integration associated with this channel.         |
| `integrationIdentifier`                                                        | *?string*                                                                      | :heavy_minus_sign:                                                             | The integration identifier                                                     |