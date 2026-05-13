# Domains

## Overview

Used to manage your inbound email domains.
<https://docs.novu.co/platform/domains>

### Available Operations

* [list](#list) - List domains for an environment
* [create](#create) - Create a domain
* [retrieve](#retrieve) - Retrieve a domain by name
* [update](#update) - Update a domain
* [delete](#delete) - Delete a domain
* [diagnose](#diagnose) - Diagnose inbound DNS for a domain
* [verify](#verify) - Verify a domain

## list

Returns a paginated list of inbound-email domains in the current environment. Supports cursor pagination and a name contains filter.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_listDomains" method="get" path="/v1/domains" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Operations;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

$request = new Operations\DomainsControllerListDomainsRequest(
    limit: 10,
);

$response = $sdk->domains->list(
    request: $request
);

if ($response->listDomainsResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\DomainsControllerListDomainsRequest](../../Models/Operations/DomainsControllerListDomainsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\DomainsControllerListDomainsResponse](../../Models/Operations/DomainsControllerListDomainsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Registers a new inbound-email domain. The response includes the DNS records customers must add at their DNS provider before the domain can receive mail.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_createDomain" method="post" path="/v1/domains" -->
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

$createDomainDto = new Components\CreateDomainDto(
    name: '<value>',
);

$response = $sdk->domains->create(
    createDomainDto: $createDomainDto
);

if ($response->domainResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `createDomainDto`                                                        | [Components\CreateDomainDto](../../Models/Components/CreateDomainDto.md) | :heavy_check_mark:                                                       | N/A                                                                      |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |

### Response

**[?Operations\DomainsControllerCreateDomainResponse](../../Models/Operations/DomainsControllerCreateDomainResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Returns the domain configuration and the DNS records that must be in place. This is a pure read; call `domains.verify` to refresh verification status from DNS.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_getDomain" method="get" path="/v1/domains/{domain}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->domains->retrieve(
    domain: 'foolish-requirement.org'
);

if ($response->domainResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `domain`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\DomainsControllerGetDomainResponse](../../Models/Operations/DomainsControllerGetDomainResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Updates optional domain fields. When `data` is provided, it replaces the entire metadata object; omit `data` to leave it unchanged.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_updateDomain" method="patch" path="/v1/domains/{domain}" -->
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

$updateDomainDto = new Components\UpdateDomainDto();

$response = $sdk->domains->update(
    domain: 'ordinary-eternity.org',
    updateDomainDto: $updateDomainDto

);

if ($response->domainResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `domain`                                                                 | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `updateDomainDto`                                                        | [Components\UpdateDomainDto](../../Models/Components/UpdateDomainDto.md) | :heavy_check_mark:                                                       | N/A                                                                      |
| `idempotencyKey`                                                         | *?string*                                                                | :heavy_minus_sign:                                                       | A header for idempotency purposes                                        |

### Response

**[?Operations\DomainsControllerUpdateDomainResponse](../../Models/Operations/DomainsControllerUpdateDomainResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Removes the domain and cascades the deletion to all of its routes. Inbound mail for that domain stops being processed immediately.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_deleteDomain" method="delete" path="/v1/domains/{domain}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->domains->delete(
    domain: 'complicated-finer.org'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `domain`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\DomainsControllerDeleteDomainResponse](../../Models/Operations/DomainsControllerDeleteDomainResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## diagnose

Runs live DNS checks for inbound email readiness (MX correctness, apex CNAME collision, and common DNS blocklists for the Novu mail host). Returns structured issues with plain-language fixes.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_diagnoseDomain" method="post" path="/v1/domains/{domain}/diagnose" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->domains->diagnose(
    domain: 'alive-publication.biz'
);

if ($response->diagnoseDomainResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `domain`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\DomainsControllerDiagnoseDomainResponse](../../Models/Operations/DomainsControllerDiagnoseDomainResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## verify

Performs a live DNS lookup to refresh the MX record status of the domain and updates the verification status accordingly. Returns the latest domain configuration.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_verifyDomain" method="post" path="/v1/domains/{domain}/verify" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->domains->verify(
    domain: 'formal-fork.com'
);

if ($response->domainResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `domain`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\DomainsControllerVerifyDomainResponse](../../Models/Operations/DomainsControllerVerifyDomainResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |