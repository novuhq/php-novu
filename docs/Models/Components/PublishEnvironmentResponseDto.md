# PublishEnvironmentResponseDto


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `results`                                                                    | array<[Components\SyncResultDto](../../Models/Components/SyncResultDto.md)>  | :heavy_check_mark:                                                           | Sync results by resource type                                                |
| `summary`                                                                    | [Components\PublishSummaryDto](../../Models/Components/PublishSummaryDto.md) | :heavy_check_mark:                                                           | Summary of the sync operation                                                |