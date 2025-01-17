# Preference


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `enabled`                                                                         | *bool*                                                                            | :heavy_check_mark:                                                                | Sets if the workflow is fully enabled for all channels or not for the subscriber. |
| `channels`                                                                        | [Components\PreferenceChannels](../../Models/Components/PreferenceChannels.md)    | :heavy_check_mark:                                                                | Subscriber preferences for the different channels regarding this workflow         |