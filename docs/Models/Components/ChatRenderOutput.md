# ChatRenderOutput


## Fields

| Field                                                                           | Type                                                                            | Required                                                                        | Description                                                                     |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `body`                                                                          | *?string*                                                                       | :heavy_minus_sign:                                                              | Body of the chat message. Mutually exclusive with `card`.                       |
| `card`                                                                          | array<string, *mixed*>                                                          | :heavy_minus_sign:                                                              | Rich Chat: compiled provider-agnostic card DSL. Mutually exclusive with `body`. |