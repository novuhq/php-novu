# InAppControlsMetadataResponseDto


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `dataSchema`                                                             | array<string, *mixed*>                                                   | :heavy_minus_sign:                                                       | JSON Schema for data                                                     |
| `uiSchema`                                                               | [?Components\UiSchema](../../Models/Components/UiSchema.md)              | :heavy_minus_sign:                                                       | UI Schema for rendering                                                  |
| `values`                                                                 | [Components\InAppControlDto](../../Models/Components/InAppControlDto.md) | :heavy_check_mark:                                                       | Control values specific to In-App                                        |