# EventBody


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `status`                                               | [Components\Status](../../Models/Components/Status.md) | :heavy_check_mark:                                     | Status of the event                                    |
| `date`                                                 | *string*                                               | :heavy_check_mark:                                     | Date of the event                                      |
| `externalId`                                           | *?string*                                              | :heavy_minus_sign:                                     | External ID from the provider                          |
| `attempts`                                             | *?float*                                               | :heavy_minus_sign:                                     | Number of attempts                                     |
| `response`                                             | *?string*                                              | :heavy_minus_sign:                                     | Response from the provider                             |
| `row`                                                  | *?string*                                              | :heavy_minus_sign:                                     | Raw content from the provider webhook                  |