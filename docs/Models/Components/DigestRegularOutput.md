# DigestRegularOutput


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `amount`                                                                | *float*                                                                 | :heavy_check_mark:                                                      | Amount of time units                                                    |
| `unit`                                                                  | [Components\TimeUnitEnum](../../Models/Components/TimeUnitEnum.md)      | :heavy_check_mark:                                                      | Time unit                                                               |
| `digestKey`                                                             | *?string*                                                               | :heavy_minus_sign:                                                      | Optional digest key                                                     |
| `lookBackWindow`                                                        | [?Components\LookBackWindow](../../Models/Components/LookBackWindow.md) | :heavy_minus_sign:                                                      | Look back window configuration                                          |