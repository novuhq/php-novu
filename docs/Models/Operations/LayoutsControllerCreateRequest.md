# LayoutsControllerCreateRequest


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |
| `createLayoutDto`                                                        | [Components\CreateLayoutDto](../../Models/Components/CreateLayoutDto.md) | :heavy_check_mark:                                                       | Layout creation details                                                  |