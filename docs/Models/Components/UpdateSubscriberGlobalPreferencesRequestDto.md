# UpdateSubscriberGlobalPreferencesRequestDto


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `enabled`                                                                           | *?bool*                                                                             | :heavy_minus_sign:                                                                  | Enable or disable the subscriber global preferences.                                |
| `preferences`                                                                       | array<[Components\ChannelPreference](../../Models/Components/ChannelPreference.md)> | :heavy_minus_sign:                                                                  | The subscriber global preferences for every ChannelTypeEnum.                        |