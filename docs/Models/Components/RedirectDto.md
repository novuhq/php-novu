# RedirectDto


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `url`                                                                       | *?string*                                                                   | :heavy_minus_sign:                                                          | URL for redirection. Must be a valid URL or start with / or {{ variable }}. |
| `target`                                                                    | [?Components\Target](../../Models/Components/Target.md)                     | :heavy_minus_sign:                                                          | Target window for the redirection.                                          |