# Domains.AutoConfigure

## Overview

### Available Operations

* [retrieve](#retrieve) - Retrieve auto-configuration availability
* [start](#start) - Start DNS auto-configuration

## retrieve

Returns whether DNS auto-configuration (Domain Connect) is available for this domain. When `available` is `false`, `manualRecords` lists the DNS records the customer must add manually.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_getDomainAutoConfigure" method="get" path="/v1/domains/{domain}/auto-configure" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->domains->autoConfigure->retrieve(
    domain: 'hidden-subsidy.info'
);

if ($response->domainConnectStatusResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `domain`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\DomainsControllerGetDomainAutoConfigureResponse](../../Models/Operations/DomainsControllerGetDomainAutoConfigureResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## start

Generates a signed redirect URL the customer can follow to apply Novu DNS records at their DNS provider. After the provider completes the flow, it redirects back to `redirectUri`.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_startDomainAutoConfigure" method="post" path="/v1/domains/{domain}/auto-configure/start" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$createDomainConnectApplyUrlDto = new Components\CreateDomainConnectApplyUrlDto();

$response = $sdk->domains->autoConfigure->start(
    domain: 'criminal-other.name',
    createDomainConnectApplyUrlDto: $createDomainConnectApplyUrlDto

);

if ($response->domainConnectApplyUrlResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `domain`                                                                                               | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `createDomainConnectApplyUrlDto`                                                                       | [Components\CreateDomainConnectApplyUrlDto](../../Models/Components/CreateDomainConnectApplyUrlDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `idempotencyKey`                                                                                       | *?string*                                                                                              | :heavy_minus_sign:                                                                                     | A header for idempotency purposes                                                                      |

### Response

**[?Operations\DomainsControllerStartDomainAutoConfigureResponse](../../Models/Operations/DomainsControllerStartDomainAutoConfigureResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |