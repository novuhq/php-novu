# WorkflowControllerUpdateRequest


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `workflowId`                                                                 | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `idempotencyKey`                                                             | *?string*                                                                    | :heavy_minus_sign:                                                           | A header for idempotency purposes                                            |
| `updateWorkflowDto`                                                          | [Components\UpdateWorkflowDto](../../Models/Components/UpdateWorkflowDto.md) | :heavy_check_mark:                                                           | Workflow update details                                                      |