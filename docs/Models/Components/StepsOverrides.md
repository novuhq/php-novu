# StepsOverrides


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      | Example                                                          |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `providers`                                                      | array<string, array<string, *mixed*>>                            | :heavy_minus_sign:                                               | Passing the provider id and the provider specific configurations | {<br/>"sendgrid": {<br/>"templateId": "1234567890"<br/>}<br/>}   |
| `layoutId`                                                       | *?string*                                                        | :heavy_minus_sign:                                               | Override the or remove the layout for this specific step         | welcome-email-layout                                             |