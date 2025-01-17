# AssignSubscriberToTopicDto


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `succeeded`                                                                         | array<*string*>                                                                     | :heavy_check_mark:                                                                  | List of successfully assigned subscriber IDs                                        |
| `failed`                                                                            | [?Components\FailedAssignmentsDto](../../Models/Components/FailedAssignmentsDto.md) | :heavy_minus_sign:                                                                  | Details about failed assignments                                                    |