# InAppRenderOutput


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `subject`                                                         | *?string*                                                         | :heavy_minus_sign:                                                | Subject of the in-app notification                                |
| `body`                                                            | *string*                                                          | :heavy_check_mark:                                                | Body of the in-app notification                                   |
| `avatar`                                                          | *?string*                                                         | :heavy_minus_sign:                                                | Avatar for the in-app notification                                |
| `primaryAction`                                                   | [?Components\ActionDto](../../Models/Components/ActionDto.md)     | :heavy_minus_sign:                                                | Primary action details                                            |
| `secondaryAction`                                                 | [?Components\ActionDto](../../Models/Components/ActionDto.md)     | :heavy_minus_sign:                                                | Secondary action details                                          |
| `data`                                                            | array<string, *mixed*>                                            | :heavy_minus_sign:                                                | Additional data                                                   |
| `redirect`                                                        | [?Components\RedirectDto](../../Models/Components/RedirectDto.md) | :heavy_minus_sign:                                                | Redirect details                                                  |