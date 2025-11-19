# LayoutsControllerUpdateRequest


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `layoutId`                                                               | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |
| `updateLayoutDto`                                                        | [Components\UpdateLayoutDto](../../Models/Components/UpdateLayoutDto.md) | :heavy_check_mark:                                                       | Layout update details                                                    |