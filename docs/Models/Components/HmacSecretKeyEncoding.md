# HmacSecretKeyEncoding

Email webhook: how `secretKey` is interpreted when signing webhook calls. `text` signs with the raw UTF-8 bytes; `base64`/`hex` decode it to binary first (e.g. for AWS KMS).


## Values

| Name     | Value    |
| -------- | -------- |
| `Text`   | text     |
| `Base64` | base64   |
| `Hex`    | hex      |