# StepListResponseDto


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `slug`                                                                | *string*                                                              | :heavy_check_mark:                                                    | Slug of the step                                                      |
| `type`                                                                | [Components\StepTypeEnum](../../Models/Components/StepTypeEnum.md)    | :heavy_check_mark:                                                    | Type of the step                                                      |
| `issues`                                                              | [?Components\StepIssuesDto](../../Models/Components/StepIssuesDto.md) | :heavy_minus_sign:                                                    | Issues associated with the step                                       |