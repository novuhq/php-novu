# CustomControlsMetadataResponseDto


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `dataSchema`                                                               | array<string, *mixed*>                                                     | :heavy_minus_sign:                                                         | JSON Schema for data                                                       |
| `uiSchema`                                                                 | [?Components\UiSchema](../../Models/Components/UiSchema.md)                | :heavy_minus_sign:                                                         | UI Schema for rendering                                                    |
| `values`                                                                   | [Components\CustomControlDto](../../Models/Components/CustomControlDto.md) | :heavy_check_mark:                                                         | Control values specific to Custom step                                     |