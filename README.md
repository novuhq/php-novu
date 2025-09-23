<!-- speakeasy-ignore-start -->

<div align="center">
  <a href="https://novu.co?utm_source=github" target="_blank">
  <picture>
    <source media="(prefers-color-scheme: dark)" srcset="https://user-images.githubusercontent.com/2233092/213641039-220ac15f-f367-4d13-9eaf-56e79433b8c1.png">
    <img alt="Novu Logo" src="https://user-images.githubusercontent.com/2233092/213641043-3bbb3f21-3c53-4e67-afe5-755aeb222159.png" width="280"/>
  </picture>
  </a>
</div>

<br/>

<p align="center">
   <a href="https://www.producthunt.com/products/novu">
    <img src="https://img.shields.io/badge/Product%20Hunt-Golden%20Kitty%20Award%202023-yellow" alt="Product Hunt">
  </a>
  <a href="https://news.ycombinator.com/item?id=38419513"><img src="https://img.shields.io/badge/Hacker%20News-%231-%23FF6600" alt="Hacker News"></a>
  <a href="https://www.npmjs.com/package/@novu/node">
    <img src="https://img.shields.io/npm/dm/@novu/node" alt="npm downloads">
  </a>
</p>

<h1 align="center">The &lt;Inbox /&gt; infrastructure for modern products</h1>

<div align="center">
The notification platform that turns complex multi-channel delivery into a single <Inbox /> component. Built for developers, designed for growth, powered by open source.
</div>

<!-- speakeasy-ignore-end -->

# Novu PHP SDK

[![Latest Stable Version](https://poser.pugx.org/unicodeveloper/novu/v/stable.svg)](https://packagist.org/packages/unicodeveloper/novu)
[![License](https://poser.pugx.org/unicodeveloper/novu/license.svg)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/unicodeveloper/novu.svg)](https://packagist.org/packages/unicodeveloper/novu)

> The [PHP Novu](https://novu.co) SDK and package provides a fluent and expressive interface for interacting with Novu's API and managing notifications.


Developer-friendly & type-safe Php SDK specifically catered to leverage *novuhq/novu* API.

<div align="left">
    <a href="https://www.speakeasy.com/?utm_source=novuhq/novu&utm_campaign=php"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


<br /><br />
> [!IMPORTANT]
> This SDK is not yet ready for production use. To complete setup please follow the steps outlined in your [workspace](https://app.speakeasy.com/org/novu/novu). Delete this section before > publishing to a package manager.

<!-- Start Summary [summary] -->
## Summary

Novu API: Novu REST API. Please see https://docs.novu.co/api-reference for more details.

For more information about the API: [Novu Documentation](https://docs.novu.co)
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [Novu PHP SDK](#novu-php-sdk)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Retries](#retries)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "novuhq/novu"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Trigger Notification Event

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

$triggerEventRequestDto = new Components\TriggerEventRequestDto(
    workflowId: 'workflow_identifier',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
    to: 'SUBSCRIBER_ID',
);

$response = $sdk->trigger(
    triggerEventRequestDto: $triggerEventRequestDto
);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

### Cancel Triggered Event

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->cancel(
    transactionId: '<id>'
);

if ($response->boolean !== null) {
    // handle response
}
```

### Broadcast Event to All

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

$triggerEventToAllRequestDto = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\TriggerEventToAllRequestDtoOverrides(
        additionalProperties: [
            'fcm' => [
                'data' => [
                    'key' => 'value',
                ],
            ],
        ],
    ),
);

$response = $sdk->triggerBroadcast(
    triggerEventToAllRequestDto: $triggerEventToAllRequestDto
);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

### Trigger Notification Events in Bulk

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

$bulkTriggerEventDto = new Components\BulkTriggerEventDto(
    events: [
        new Components\TriggerEventRequestDto(
            workflowId: 'workflow_identifier',
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            overrides: new Components\Overrides(),
            to: 'SUBSCRIBER_ID',
        ),
        new Components\TriggerEventRequestDto(
            workflowId: 'workflow_identifier',
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            overrides: new Components\Overrides(),
            to: 'SUBSCRIBER_ID',
        ),
        new Components\TriggerEventRequestDto(
            workflowId: 'workflow_identifier',
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            overrides: new Components\Overrides(),
            to: 'SUBSCRIBER_ID',
        ),
    ],
);

$response = $sdk->triggerBulk(
    bulkTriggerEventDto: $bulkTriggerEventDto
);

if ($response->triggerEventResponseDtos !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name        | Type   | Scheme  |
| ----------- | ------ | ------- |
| `secretKey` | apiKey | API key |

To authenticate with the API the `secretKey` parameter must be set when initializing the SDK. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->inboundWebhooksControllerHandleWebhook(
    environmentId: '<id>',
    integrationId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [environments](docs/sdks/environments/README.md)

* [getTags](docs/sdks/environments/README.md#gettags) - Get environment tags
* [create](docs/sdks/environments/README.md#create) - Create an environment
* [list](docs/sdks/environments/README.md#list) - List all environments
* [update](docs/sdks/environments/README.md#update) - Update an environment
* [delete](docs/sdks/environments/README.md#delete) - Delete an environment

### [integrations](docs/sdks/integrations/README.md)

* [list](docs/sdks/integrations/README.md#list) - List all integrations
* [create](docs/sdks/integrations/README.md#create) - Create an integration
* [update](docs/sdks/integrations/README.md#update) - Update an integration
* [delete](docs/sdks/integrations/README.md#delete) - Delete an integration
* [integrationsControllerAutoConfigureIntegration](docs/sdks/integrations/README.md#integrationscontrollerautoconfigureintegration) - Auto-configure an integration for inbound webhooks
* [setAsPrimary](docs/sdks/integrations/README.md#setasprimary) - Update integration as primary
* [listActive](docs/sdks/integrations/README.md#listactive) - List active integrations

### [layouts](docs/sdks/layouts/README.md)

* [create](docs/sdks/layouts/README.md#create) - Create a layout
* [list](docs/sdks/layouts/README.md#list) - List all layouts
* [update](docs/sdks/layouts/README.md#update) - Update a layout
* [retrieve](docs/sdks/layouts/README.md#retrieve) - Retrieve a layout
* [delete](docs/sdks/layouts/README.md#delete) - Delete a layout
* [duplicate](docs/sdks/layouts/README.md#duplicate) - Duplicate a layout
* [generatePreview](docs/sdks/layouts/README.md#generatepreview) - Generate layout preview
* [usage](docs/sdks/layouts/README.md#usage) - Get layout usage

### [messages](docs/sdks/messages/README.md)

* [get](docs/sdks/messages/README.md#get) - List all messages
* [delete](docs/sdks/messages/README.md#delete) - Delete a message
* [deleteByTransactionId](docs/sdks/messages/README.md#deletebytransactionid) - Delete messages by transactionId

### [notifications](docs/sdks/notifications/README.md)

* [list](docs/sdks/notifications/README.md#list) - List all events
* [get](docs/sdks/notifications/README.md#get) - Retrieve an event

### [Novu SDK](docs/sdks/novu/README.md)

* [inboundWebhooksControllerHandleWebhook](docs/sdks/novu/README.md#inboundwebhookscontrollerhandlewebhook)
* [trigger](docs/sdks/novu/README.md#trigger) - Trigger event
* [cancel](docs/sdks/novu/README.md#cancel) - Cancel triggered event
* [triggerBroadcast](docs/sdks/novu/README.md#triggerbroadcast) - Broadcast event to all
* [triggerBulk](docs/sdks/novu/README.md#triggerbulk) - Bulk trigger event

### [subscribers](docs/sdks/subscribers/README.md)

* [search](docs/sdks/subscribers/README.md#search) - Search subscribers
* [create](docs/sdks/subscribers/README.md#create) - Create a subscriber
* [get](docs/sdks/subscribers/README.md#get) - Retrieve a subscriber
* [patch](docs/sdks/subscribers/README.md#patch) - Update a subscriber
* [delete](docs/sdks/subscribers/README.md#delete) - Delete a subscriber
* [createBulk](docs/sdks/subscribers/README.md#createbulk) - Bulk create subscribers
* [updatePreferences](docs/sdks/subscribers/README.md#updatepreferences) - Update subscriber preferences
* [updateCredentials](docs/sdks/subscribers/README.md#updatecredentials) - Upsert provider credentials
* [updateOnlineStatus](docs/sdks/subscribers/README.md#updateonlinestatus) - Update subscriber online status

#### [subscribers->messages](docs/sdks/novumessages/README.md)

* [updateAsSeen](docs/sdks/novumessages/README.md#updateasseen) - Update notification action status
* [markAllAs](docs/sdks/novumessages/README.md#markallas) - Update notifications state

#### [subscribers->notifications](docs/sdks/novunotifications/README.md)

* [getFeed](docs/sdks/novunotifications/README.md#getfeed) - Retrieve subscriber notifications

#### [subscribers->preferences](docs/sdks/preferences/README.md)

* [bulkUpdate](docs/sdks/preferences/README.md#bulkupdate) - Bulk update subscriber preferences

#### [subscribers->topics](docs/sdks/novutopics/README.md)

* [list](docs/sdks/novutopics/README.md#list) - Retrieve subscriber subscriptions

### [subscribersCredentials](docs/sdks/subscriberscredentials/README.md)

* [append](docs/sdks/subscriberscredentials/README.md#append) - Update provider credentials
* [deleteProvider](docs/sdks/subscriberscredentials/README.md#deleteprovider) - Delete provider credentials

### [subscribersMessages](docs/sdks/subscribersmessages/README.md)

* [markAll](docs/sdks/subscribersmessages/README.md#markall) - Update all notifications state

### [subscribersNotifications](docs/sdks/subscribersnotifications/README.md)

* [getUnseenCount](docs/sdks/subscribersnotifications/README.md#getunseencount) - Retrieve unseen notifications count

### [subscribersPreferences](docs/sdks/subscriberspreferences/README.md)

* [list](docs/sdks/subscriberspreferences/README.md#list) - Retrieve subscriber preferences

### [topics](docs/sdks/topics/README.md)

* [list](docs/sdks/topics/README.md#list) - List all topics
* [create](docs/sdks/topics/README.md#create) - Create a topic
* [get](docs/sdks/topics/README.md#get) - Retrieve a topic
* [update](docs/sdks/topics/README.md#update) - Update a topic
* [delete](docs/sdks/topics/README.md#delete) - Delete a topic

#### [topics->subscriptions](docs/sdks/subscriptions/README.md)

* [list](docs/sdks/subscriptions/README.md#list) - List topic subscriptions
* [create](docs/sdks/subscriptions/README.md#create) - Create topic subscriptions
* [delete](docs/sdks/subscriptions/README.md#delete) - Delete topic subscriptions

### [topicsSubscribers](docs/sdks/topicssubscribers/README.md)

* [check](docs/sdks/topicssubscribers/README.md#check) - Check topic subscriber

### [translations](docs/sdks/translations/README.md)

* [create](docs/sdks/translations/README.md#create) - Create a translation
* [retrieve](docs/sdks/translations/README.md#retrieve) - Retrieve a translation
* [delete](docs/sdks/translations/README.md#delete) - Delete a translation
* [upload](docs/sdks/translations/README.md#upload) - Upload translation files

#### [translations->groups](docs/sdks/groups/README.md)

* [delete](docs/sdks/groups/README.md#delete) - Delete a translation group
* [retrieve](docs/sdks/groups/README.md#retrieve) - Retrieve a translation group

#### [translations->master](docs/sdks/master/README.md)

* [retrieve](docs/sdks/master/README.md#retrieve) - Retrieve master translations JSON
* [import](docs/sdks/master/README.md#import) - Import master translations JSON
* [upload](docs/sdks/master/README.md#upload) - Upload master translations JSON file

### [workflows](docs/sdks/workflows/README.md)

* [create](docs/sdks/workflows/README.md#create) - Create a workflow
* [list](docs/sdks/workflows/README.md#list) - List all workflows
* [update](docs/sdks/workflows/README.md#update) - Update a workflow
* [get](docs/sdks/workflows/README.md#get) - Retrieve a workflow
* [delete](docs/sdks/workflows/README.md#delete) - Delete a workflow
* [patch](docs/sdks/workflows/README.md#patch) - Update a workflow
* [sync](docs/sdks/workflows/README.md#sync) - Sync a workflow

#### [workflows->steps](docs/sdks/steps/README.md)

* [retrieve](docs/sdks/steps/README.md#retrieve) - Retrieve workflow step

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Retries [retries] -->
## Retries

Some of the endpoints in this SDK support retries. If you use the SDK without any configuration, it will fall back to the default retry strategy provided by the API. However, the default retry strategy can be overridden on a per-operation basis, or across the entire SDK.

To change the default retry strategy for a single API call, simply provide an `Options` object built with a `RetryConfig` object to the call:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Utils\Retry;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->inboundWebhooksControllerHandleWebhook(
    environmentId: '<id>',
    integrationId: '<id>',
    options: Utils\Options->builder()->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        ))->build()

);

if ($response->statusCode === 200) {
    // handle response
}
```

If you'd like to override the default retry strategy for all operations that support retries, you can pass a `RetryConfig` object to the `SDKBuilder->setRetryConfig` function when initializing the SDK:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Utils\Retry;

$sdk = novu\Novu::builder()
    ->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        )
  )
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->inboundWebhooksControllerHandleWebhook(
    environmentId: '<id>',
    integrationId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```
<!-- End Retries [retries] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\APIException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `trigger` method throws the following exceptions:

| Error Type                           | Status Code                       | Content Type     |
| ------------------------------------ | --------------------------------- | ---------------- |
| Errors\PayloadValidationExceptionDto | 400                               | application/json |
| Errors\ErrorDto                      | 414                               | application/json |
| Errors\ErrorDto                      | 401, 403, 404, 405, 409, 413, 415 | application/json |
| Errors\ValidationErrorDto            | 422                               | application/json |
| Errors\ErrorDto                      | 500                               | application/json |
| Errors\APIException                  | 4XX, 5XX                          | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;
use novu\Models\Errors;

$sdk = novu\Novu::builder()
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();

try {
    $triggerEventRequestDto = new Components\TriggerEventRequestDto(
        workflowId: 'workflow_identifier',
        payload: [
            'comment_id' => 'string',
            'post' => [
                'text' => 'string',
            ],
        ],
        overrides: new Components\Overrides(),
        to: 'SUBSCRIBER_ID',
    );

    $response = $sdk->trigger(
        triggerEventRequestDto: $triggerEventRequestDto
    );

    if ($response->triggerEventResponseDto !== null) {
        // handle response
    }
} catch (Errors\PayloadValidationExceptionDtoThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ErrorDtoThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ErrorDtoThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ValidationErrorDtoThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ErrorDtoThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\APIException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Select Server by Index

You can override the default server globally using the `setServerIndex(int $serverIdx)` builder method when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| #   | Server                   | Description |
| --- | ------------------------ | ----------- |
| 0   | `https://api.novu.co`    |             |
| 1   | `https://eu.api.novu.co` |             |

#### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setServerIndex(1)
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->inboundWebhooksControllerHandleWebhook(
    environmentId: '<id>',
    integrationId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setServerURL('https://eu.api.novu.co')
    ->setSecurity(
        'YOUR_SECRET_KEY_HERE'
    )
    ->build();



$response = $sdk->inboundWebhooksControllerHandleWebhook(
    environmentId: '<id>',
    integrationId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release. 

### SDK Created by [Speakeasy](https://www.speakeasy.com/?utm_source=novuhq/novu&utm_campaign=php)
