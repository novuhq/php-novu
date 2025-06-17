# WorkflowControllerSyncRequest


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `workflowId`                                                             | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |
| `syncWorkflowDto`                                                        | [Components\SyncWorkflowDto](../../Models/Components/SyncWorkflowDto.md) | :heavy_check_mark:                                                       | Sync workflow details                                                    |