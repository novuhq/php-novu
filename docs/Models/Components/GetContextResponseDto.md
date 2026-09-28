# GetContextResponseDto


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `type`                                                               | *string*                                                             | :heavy_check_mark:                                                   | Context type (e.g., tenant, app, workspace)                          |
| `id`                                                                 | *string*                                                             | :heavy_check_mark:                                                   | Unique identifier for this context                                   |
| `data`                                                               | array<string, *mixed*>                                               | :heavy_check_mark:                                                   | Custom data associated with this context                             |
| `bridgeUrl`                                                          | *?string*                                                            | :heavy_minus_sign:                                                   | Bridge URL override for agent connect, if configured on this context |
| `createdAt`                                                          | *string*                                                             | :heavy_check_mark:                                                   | Creation timestamp                                                   |
| `updatedAt`                                                          | *string*                                                             | :heavy_check_mark:                                                   | Last update timestamp                                                |