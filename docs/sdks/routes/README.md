# Domains.Routes

## Overview

### Available Operations

* [list](#list) - List routes for a domain
* [create](#create) - Create a route
* [retrieve](#retrieve) - Retrieve a route by address
* [update](#update) - Update a route
* [delete](#delete) - Delete a route
* [test](#test) - Test an inbound route

## list

Returns a paginated list of routes attached to the domain. Optionally filter by an agent identifier to find routes pointing to a specific agent.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_listDomainRoutes" method="get" path="/v1/domains/{domain}/routes" -->
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

$request = new Operations\DomainsControllerListDomainRoutesRequest(
    domain: 'fearless-fishery.com',
    limit: 10,
);

$response = $sdk->domains->routes->list(
    request: $request
);

if ($response->listDomainRoutesResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\DomainsControllerListDomainRoutesRequest](../../Models/Operations/DomainsControllerListDomainRoutesRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\DomainsControllerListDomainRoutesResponse](../../Models/Operations/DomainsControllerListDomainRoutesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## create

Creates a route on the domain that forwards inbound mail addressed to `<address>@<domain>` to either a webhook or an agent. Each address on a domain may only have a single route.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_createDomainRoute" method="post" path="/v1/domains/{domain}/routes" -->
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

$domainRouteDto = new Components\DomainRouteDto(
    address: '6581 Birch Road',
    type: Components\DomainRouteDtoType::Webhook,
);

$response = $sdk->domains->routes->create(
    domain: 'radiant-solvency.net',
    domainRouteDto: $domainRouteDto

);

if ($response->domainRouteResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `domain`                                                               | *string*                                                               | :heavy_check_mark:                                                     | N/A                                                                    |
| `domainRouteDto`                                                       | [Components\DomainRouteDto](../../Models/Components/DomainRouteDto.md) | :heavy_check_mark:                                                     | N/A                                                                    |
| `idempotencyKey`                                                       | *?string*                                                              | :heavy_minus_sign:                                                     | A header for idempotency purposes                                      |

### Response

**[?Operations\DomainsControllerCreateDomainRouteResponse](../../Models/Operations/DomainsControllerCreateDomainRouteResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## retrieve

Returns the route bound to `<address>@<domain>`. Use `*` as the address to retrieve the wildcard route for the domain.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_getDomainRoute" method="get" path="/v1/domains/{domain}/routes/{address}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->domains->routes->retrieve(
    domain: 'adolescent-petal.net',
    address: '42531 Green Lane'

);

if ($response->domainRouteResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `domain`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `address`                         | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\DomainsControllerGetDomainRouteResponse](../../Models/Operations/DomainsControllerGetDomainRouteResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Updates the destination of the route bound to `<address>@<domain>`. The address itself is the resource identity and cannot be changed; delete and recreate the route to rename it.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_updateDomainRoute" method="patch" path="/v1/domains/{domain}/routes/{address}" -->
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

$updateDomainRouteDto = new Components\UpdateDomainRouteDto();

$response = $sdk->domains->routes->update(
    domain: 'cavernous-cycle.com',
    address: '70213 Gerlach Rue',
    updateDomainRouteDto: $updateDomainRouteDto

);

if ($response->domainRouteResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `domain`                                                                           | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |
| `address`                                                                          | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |
| `updateDomainRouteDto`                                                             | [Components\UpdateDomainRouteDto](../../Models/Components/UpdateDomainRouteDto.md) | :heavy_check_mark:                                                                 | N/A                                                                                |
| `idempotencyKey`                                                                   | *?string*                                                                          | :heavy_minus_sign:                                                                 | A header for idempotency purposes                                                  |

### Response

**[?Operations\DomainsControllerUpdateDomainRouteResponse](../../Models/Operations/DomainsControllerUpdateDomainRouteResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## delete

Removes the route bound to `<address>@<domain>`. Inbound mail for that address will no longer be processed.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_deleteDomainRoute" method="delete" path="/v1/domains/{domain}/routes/{address}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->domains->routes->delete(
    domain: 'corrupt-avalanche.biz',
    address: '753 W 4th Avenue'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `domain`                          | *string*                          | :heavy_check_mark:                | N/A                               |
| `address`                         | *string*                          | :heavy_check_mark:                | N/A                               |
| `idempotencyKey`                  | *?string*                         | :heavy_minus_sign:                | A header for idempotency purposes |

### Response

**[?Operations\DomainsControllerDeleteDomainRouteResponse](../../Models/Operations/DomainsControllerDeleteDomainRouteResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## test

Sends a synthetic inbound email through the same delivery path as production (outbound webhooks for webhook routes, signed HTTP to the agent for agent routes). Use `dryRun: true` to preview the payload without delivering.

### Example Usage

<!-- UsageSnippet language="php" operationID="DomainsController_testDomainRoute" method="post" path="/v1/domains/{domain}/routes/{address}/test" -->
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

$testDomainRouteDto = new Components\TestDomainRouteDto(
    from: new Components\TestDomainRouteFromDto(
        address: '58851 Konopelski Overpass',
    ),
    subject: '<value>',
);

$response = $sdk->domains->routes->test(
    domain: 'exalted-bonfire.com',
    address: '90499 Rowan Close',
    testDomainRouteDto: $testDomainRouteDto

);

if ($response->testDomainRouteResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `domain`                                                                       | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `address`                                                                      | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `testDomainRouteDto`                                                           | [Components\TestDomainRouteDto](../../Models/Components/TestDomainRouteDto.md) | :heavy_check_mark:                                                             | N/A                                                                            |
| `idempotencyKey`                                                               | *?string*                                                                      | :heavy_minus_sign:                                                             | A header for idempotency purposes                                              |

### Response

**[?Operations\DomainsControllerTestDomainRouteResponse](../../Models/Operations/DomainsControllerTestDomainRouteResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\ErrorDto                        | 414                                    | application/json                       |
| Errors\ErrorDto                        | 400, 401, 403, 404, 405, 409, 413, 415 | application/json                       |
| Errors\ValidationErrorDto              | 422                                    | application/json                       |
| Errors\ErrorDto                        | 500                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |