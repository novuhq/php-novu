# WorkflowControllerCreateRequest


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `idempotencyKey`                                                             | *?string*                                                                    | :heavy_minus_sign:                                                           | A header for idempotency purposes                                            |
| `createWorkflowDto`                                                          | [Components\CreateWorkflowDto](../../Models/Components/CreateWorkflowDto.md) | :heavy_check_mark:                                                           | Workflow creation details                                                    |