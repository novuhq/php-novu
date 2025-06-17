# PatchWorkflowDto


## Fields

| Field                                       | Type                                        | Required                                    | Description                                 |
| ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- |
| `active`                                    | *?bool*                                     | :heavy_minus_sign:                          | Activate or deactivate the workflow         |
| `name`                                      | *?string*                                   | :heavy_minus_sign:                          | New name for the workflow                   |
| `description`                               | *?string*                                   | :heavy_minus_sign:                          | Updated description of the workflow         |
| `tags`                                      | array<*string*>                             | :heavy_minus_sign:                          | Tags associated with the workflow           |
| `payloadSchema`                             | array<string, *mixed*>                      | :heavy_minus_sign:                          | The payload JSON Schema for the workflow    |
| `validatePayload`                           | *?bool*                                     | :heavy_minus_sign:                          | Enable or disable payload schema validation |