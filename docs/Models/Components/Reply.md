# Reply

Outbound message content. Exactly one of `markdown`, `card`, or `toolApprovalCard`. Optional `files` attach to the message. Cannot be combined with `edit`.


## Supported Types

### `Components\MarkdownReplyContentDto`

```php
/**
* @var \novu\Models\Components\MarkdownReplyContentDto
*/
Components\MarkdownReplyContentDto $value = /* values here */
```

### `Components\CardReplyContentDto`

```php
/**
* @var \novu\Models\Components\CardReplyContentDto
*/
Components\CardReplyContentDto $value = /* values here */
```

### `Components\ToolApprovalCardReplyContentDto`

```php
/**
* @var \novu\Models\Components\ToolApprovalCardReplyContentDto
*/
Components\ToolApprovalCardReplyContentDto $value = /* values here */
```

