# InboxActionDto


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `label`                                                           | *string*                                                          | :heavy_check_mark:                                                | Label of the action button                                        |
| `isCompleted`                                                     | *bool*                                                            | :heavy_check_mark:                                                | Whether the action has been completed                             |
| `redirect`                                                        | [?Components\RedirectDto](../../Models/Components/RedirectDto.md) | :heavy_minus_sign:                                                | Redirect configuration for the action                             |