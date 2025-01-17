# EmailBlock


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `type`                                                                         | [Components\EmailBlockTypeEnum](../../Models/Components/EmailBlockTypeEnum.md) | :heavy_check_mark:                                                             | Type of the email block                                                        |
| `content`                                                                      | *string*                                                                       | :heavy_check_mark:                                                             | Content of the email block                                                     |
| `url`                                                                          | *?string*                                                                      | :heavy_minus_sign:                                                             | URL associated with the email block, if any                                    |
| `styles`                                                                       | [?Components\EmailBlockStyles](../../Models/Components/EmailBlockStyles.md)    | :heavy_minus_sign:                                                             | Styles applied to the email block                                              |