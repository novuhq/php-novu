# AutoConfigureIntegrationResponseDto


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `success`                                                          | *bool*                                                             | :heavy_check_mark:                                                 | Indicates whether the auto-configuration was successful            |
| `message`                                                          | *?string*                                                          | :heavy_minus_sign:                                                 | Optional message describing the result or any errors that occurred |
| `integration`                                                      | [?Components\Integration](../../Models/Components/Integration.md)  | :heavy_minus_sign:                                                 | The updated configurations after auto-configuration                |