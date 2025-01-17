# TriggerEventResponseDto


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `acknowledged`                                                    | *bool*                                                            | :heavy_check_mark:                                                | Indicates whether the trigger was acknowledged or not             |
| `status`                                                          | [Components\Status](../../Models/Components/Status.md)            | :heavy_check_mark:                                                | Status of the trigger                                             |
| `error`                                                           | array<*string*>                                                   | :heavy_minus_sign:                                                | In case of an error, this field will contain the error message(s) |
| `transactionId`                                                   | *?string*                                                         | :heavy_minus_sign:                                                | The returned transaction ID of the trigger                        |