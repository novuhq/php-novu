# UploadTranslationsResponseDto


## Fields

| Field                                     | Type                                      | Required                                  | Description                               | Example                                   |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `totalFiles`                              | *float*                                   | :heavy_check_mark:                        | Total number of files processed           | 3                                         |
| `successfulUploads`                       | *float*                                   | :heavy_check_mark:                        | Number of files successfully uploaded     | 2                                         |
| `failedUploads`                           | *float*                                   | :heavy_check_mark:                        | Number of files that failed to upload     | 1                                         |
| `errors`                                  | array<*string*>                           | :heavy_check_mark:                        | List of error messages for failed uploads | [<br/>"Invalid JSON in file: es-ES.json"<br/>] |