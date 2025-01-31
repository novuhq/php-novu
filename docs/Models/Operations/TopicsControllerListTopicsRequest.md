# TopicsControllerListTopicsRequest


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `page`                                               | *?int*                                               | :heavy_minus_sign:                                   | The page number to retrieve (starts from 0)          | 0                                                    |
| `pageSize`                                           | *?int*                                               | :heavy_minus_sign:                                   | The number of items to return per page (default: 10) | 10                                                   |
| `key`                                                | *?string*                                            | :heavy_minus_sign:                                   | A filter key to apply to the results                 | exampleKey                                           |
| `idempotencyKey`                                     | *?string*                                            | :heavy_minus_sign:                                   | A header for idempotency purposes                    |                                                      |