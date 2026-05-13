# TestDomainRouteAgentResultDto


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `agentId`                                                       | *string*                                                        | :heavy_check_mark:                                              | N/A                                                             |
| `httpStatus`                                                    | *float*                                                         | :heavy_check_mark:                                              | N/A                                                             |
| `agentReply`                                                    | [?Components\AgentReply](../../Models/Components/AgentReply.md) | :heavy_minus_sign:                                              | Parsed JSON body from the agent webhook response when JSON.     |
| `latencyMs`                                                     | *float*                                                         | :heavy_check_mark:                                              | N/A                                                             |