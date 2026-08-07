# AgentsControllerUpdateAgentRequest


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `identifier`                                                                         | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |
| `updateAgentRequestDto`                                                              | [Components\UpdateAgentRequestDto](../../Models/Components/UpdateAgentRequestDto.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |