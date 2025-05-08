# TopicsControllerRenameTopicRequest


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `topicKey`                                                                           | *string*                                                                             | :heavy_check_mark:                                                                   | The topic key                                                                        |
| `idempotencyKey`                                                                     | *?string*                                                                            | :heavy_minus_sign:                                                                   | A header for idempotency purposes                                                    |
| `renameTopicRequestDto`                                                              | [Components\RenameTopicRequestDto](../../Models/Components/RenameTopicRequestDto.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |