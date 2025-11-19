# LayoutsControllerDuplicateRequest


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `layoutId`                                                                     | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `idempotencyKey`                                                               | *?string*                                                                      | :heavy_minus_sign:                                                             | A header for idempotency purposes                                              |
| `duplicateLayoutDto`                                                           | [Components\DuplicateLayoutDto](../../Models/Components/DuplicateLayoutDto.md) | :heavy_check_mark:                                                             | N/A                                                                            |