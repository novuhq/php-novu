# WorkflowPreferenceDto


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `enabled`                                                                      | *bool*                                                                         | :heavy_check_mark:                                                             | Whether notifications are enabled for this workflow                            |
| `channels`                                                                     | [Components\PreferenceChannels](../../Models/Components/PreferenceChannels.md) | :heavy_check_mark:                                                             | Channel-specific preference settings for this workflow                         |
| `overrides`                                                                    | array<[Components\Overrides](../../Models/Components/Overrides.md)>            | :heavy_check_mark:                                                             | List of preference overrides                                                   |
| `workflow`                                                                     | [Components\WorkflowInfoDto](../../Models/Components/WorkflowInfoDto.md)       | :heavy_check_mark:                                                             | Workflow information                                                           |