# GetSubscriberPreferencesDto


## Fields

| Field                                                                                       | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `global`                                                                                    | [Components\GlobalPreferenceDto](../../Models/Components/GlobalPreferenceDto.md)            | :heavy_check_mark:                                                                          | Global preference settings                                                                  |
| `workflows`                                                                                 | array<[Components\WorkflowPreferenceDto](../../Models/Components/WorkflowPreferenceDto.md)> | :heavy_check_mark:                                                                          | Workflow-specific preference settings                                                       |