# DomainsControllerUpdateDomainRequest


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `domain`                                                                 | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |
| `updateDomainDto`                                                        | [Components\UpdateDomainDto](../../Models/Components/UpdateDomainDto.md) | :heavy_check_mark:                                                       | N/A                                                                      |