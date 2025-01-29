# novuhq/novu

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
* [novuhq/novu](#novuhqnovu)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Pagination](#pagination)
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
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\TriggerEventRequestDto(
    name: 'workflow_identifier',
    to: new Components\SubscriberPayloadDto(
        subscriberId: '<id>',
    ),
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    bridgeUrl: 'https://example.com/bridge',
    overrides: [
        'fcm' => [
            'data' => [
                'key' => 'value',
            ],
        ],
    ],
);

$response = $sdk->trigger(
    request: $request
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
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\BulkTriggerEventDto(
    events: [
        new Components\TriggerEventRequestDto(
            name: 'workflow_identifier',
            to: new Components\TopicPayloadDto(
                topicKey: '<value>',
                type: Components\TriggerRecipientsTypeEnum::Topic,
            ),
            payload: [
                'comment_id' => 'string',
                'post' => [
                    'text' => 'string',
                ],
            ],
            bridgeUrl: 'https://example.com/bridge',
            overrides: [
                'fcm' => [
                    'data' => [
                        'key' => 'value',
                    ],
                ],
            ],
        ),
    ],
);

$response = $sdk->triggerBulk(
    request: $request
);

if ($response->triggerEventResponseDtos !== null) {
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
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
);

$response = $sdk->broadcast(
    request: $request
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
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->cancel(
    transactionId: '<id>'
);

if ($response->dataBooleanDto !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name     | Type   | Scheme  |
| -------- | ------ | ------- |
| `apiKey` | apiKey | API key |

To authenticate with the API the `apiKey` parameter must be set when initializing the SDK. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
);

$response = $sdk->broadcast(
    request: $request
);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [integrations](docs/sdks/integrations/README.md)

* [create](docs/sdks/integrations/README.md#create) - Create integration
* [listActive](docs/sdks/integrations/README.md#listactive) - Get active integrations
* [list](docs/sdks/integrations/README.md#list) - Get integrations
* [delete](docs/sdks/integrations/README.md#delete) - Delete integration
* [setPrimary](docs/sdks/integrations/README.md#setprimary) - Set integration as primary
* [update](docs/sdks/integrations/README.md#update) - Update integration

#### [integrations->webhooks](docs/sdks/webhooks/README.md)

* [getProviderStatus](docs/sdks/webhooks/README.md#getproviderstatus) - Get webhook support status for provider

### [messages](docs/sdks/messages/README.md)

* [delete](docs/sdks/messages/README.md#delete) - Delete message
* [deleteByTransactionId](docs/sdks/messages/README.md#deletebytransactionid) - Delete messages by transactionId
* [list](docs/sdks/messages/README.md#list) - Get messages

### [notifications](docs/sdks/notifications/README.md)

* [get](docs/sdks/notifications/README.md#get) - Get notification
* [list](docs/sdks/notifications/README.md#list) - Get notifications

#### [notifications->stats](docs/sdks/stats/README.md)

* [getGraph](docs/sdks/stats/README.md#getgraph) - Get notification graph statistics
* [get](docs/sdks/stats/README.md#get) - Get notification statistics

### [Novu SDK](docs/sdks/novu/README.md)

* [broadcast](docs/sdks/novu/README.md#broadcast) - Broadcast event to all
* [cancel](docs/sdks/novu/README.md#cancel) - Cancel triggered event
* [trigger](docs/sdks/novu/README.md#trigger) - Trigger event
* [triggerBulk](docs/sdks/novu/README.md#triggerbulk) - Bulk trigger event

### [subscribers](docs/sdks/subscribers/README.md)

* [createBulk](docs/sdks/subscribers/README.md#createbulk) - Bulk create subscribers
* [create](docs/sdks/subscribers/README.md#create) - Create subscriber
* [get](docs/sdks/subscribers/README.md#get) - Get subscriber
* [list](docs/sdks/subscribers/README.md#list) - Get subscribers
* [delete](docs/sdks/subscribers/README.md#delete) - Delete subscriber
* [update](docs/sdks/subscribers/README.md#update) - Update subscriber
* [updateOnlineStatus](docs/sdks/subscribers/README.md#updateonlinestatus) - Update subscriber online status

#### [subscribers->authentication](docs/sdks/authentication/README.md)

* [chatAccessOauth](docs/sdks/authentication/README.md#chataccessoauth) - Handle chat oauth
* [oauthCallback](docs/sdks/authentication/README.md#oauthcallback) - Handle providers oauth redirect

#### [subscribers->credentials](docs/sdks/credentials/README.md)

* [delete](docs/sdks/credentials/README.md#delete) - Delete subscriber credentials by providerId
* [append](docs/sdks/credentials/README.md#append) - Modify subscriber credentials
* [update](docs/sdks/credentials/README.md#update) - Update subscriber credentials

#### [subscribers->messages](docs/sdks/novumessages/README.md)

* [updateAction](docs/sdks/novumessages/README.md#updateaction) - Mark message action as seen
* [markAll](docs/sdks/novumessages/README.md#markall) - Marks all the subscriber messages as read, unread, seen or unseen. Optionally you can pass feed id (or array) to mark messages of a particular feed.
* [markAs](docs/sdks/novumessages/README.md#markas) - Mark a subscriber messages as seen, read, unseen or unread

#### [subscribers->notifications](docs/sdks/novusubscribersnotifications/README.md)

* [getFeed](docs/sdks/novusubscribersnotifications/README.md#getfeed) - Get in-app notification feed for a particular subscriber
* [unseenCount](docs/sdks/novusubscribersnotifications/README.md#unseencount) - Get the unseen in-app notifications count for subscribers feed

#### [subscribers->preferences](docs/sdks/preferences/README.md)

* [retrieveByLevel](docs/sdks/preferences/README.md#retrievebylevel) - Get subscriber preferences by level
* [list](docs/sdks/preferences/README.md#list) - Get subscriber preferences

### [subscribersPreferences](docs/sdks/subscriberspreferences/README.md)

* [updateGlobal](docs/sdks/subscriberspreferences/README.md#updateglobal) - Update subscriber global preferences
* [update](docs/sdks/subscriberspreferences/README.md#update) - Update subscriber preference

### [support](docs/sdks/support/README.md)

* [createThread](docs/sdks/support/README.md#createthread)
* [fetchUserOrganizations](docs/sdks/support/README.md#fetchuserorganizations)

### [topics](docs/sdks/topics/README.md)

* [create](docs/sdks/topics/README.md#create) - Topic creation
* [delete](docs/sdks/topics/README.md#delete) - Delete topic
* [get](docs/sdks/topics/README.md#get) - Get topic
* [list](docs/sdks/topics/README.md#list) - Get topic list filtered 
* [rename](docs/sdks/topics/README.md#rename) - Rename a topic

#### [topics->subscribers](docs/sdks/novutopicssubscribers/README.md)

* [check](docs/sdks/novutopicssubscribers/README.md#check) - Check topic subscriber
* [remove](docs/sdks/novutopicssubscribers/README.md#remove) - Subscribers removal

### [topicsSubscribers](docs/sdks/topicssubscribers/README.md)

* [add](docs/sdks/topicssubscribers/README.md#add) - Subscribers addition

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Pagination [pagination] -->
## Pagination

Some of the endpoints in this SDK support pagination. To use pagination, you make your SDK calls as usual, but the
returned object will be a `Generator` instead of an individual response.

Working with generators is as simple as iterating over the responses in a `foreach` loop, and you can see an example below:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$responses = $sdk->subscribers->list(
    page: 7685.78,
    limit: 10

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```
<!-- End Pagination [pagination] -->

<!-- Start Retries [retries] -->
## Retries

Some of the endpoints in this SDK support retries. If you use the SDK without any configuration, it will fall back to the default retry strategy provided by the API. However, the default retry strategy can be overridden on a per-operation basis, or across the entire SDK.

To change the default retry strategy for a single API call, simply provide an `Options` object built with a `RetryConfig` object to the call:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;
use novu\Utils\Retry;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
);

$response = $sdk->broadcast(
    request: $request,
    options: Utils\Options->builder()->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        ))->build()
);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

If you'd like to override the default retry strategy for all operations that support retries, you can pass a `RetryConfig` object to the `SDKBuilder->setRetryConfig` function when initializing the SDK:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;
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
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
);

$response = $sdk->broadcast(
    request: $request
);

if ($response->triggerEventResponseDto !== null) {
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

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `broadcast` method throws the following exceptions:

| Error Type                | Status Code   | Content Type     |
| ------------------------- | ------------- | ---------------- |
| Errors\ErrorDto           | 400, 404, 409 | application/json |
| Errors\ValidationErrorDto | 422           | application/json |
| Errors\APIException       | 4XX, 5XX      | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

try {
    $request = new Components\TriggerEventToAllRequestDto(
        name: '<value>',
        payload: [
            'comment_id' => 'string',
            'post' => [
                'text' => 'string',
            ],
        ],
        overrides: new Components\Overrides(),
    );

    $response = $sdk->broadcast(
        request: $request
    );

    if ($response->triggerEventResponseDto !== null) {
        // handle response
    }
} catch (Errors\ErrorDtoThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ValidationErrorDtoThrowable $e) {
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

| #   | Server                   |
| --- | ------------------------ |
| 0   | `https://api.novu.co`    |
| 1   | `https://eu.api.novu.co` |

#### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setServerIndex(1)
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
);

$response = $sdk->broadcast(
    request: $request
);

if ($response->triggerEventResponseDto !== null) {
    // handle response
}
```

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use novu;
use novu\Models\Components;

$sdk = novu\Novu::builder()
    ->setServerURL('https://api.novu.co')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Components\TriggerEventToAllRequestDto(
    name: '<value>',
    payload: [
        'comment_id' => 'string',
        'post' => [
            'text' => 'string',
        ],
    ],
    overrides: new Components\Overrides(),
);

$response = $sdk->broadcast(
    request: $request
);

if ($response->triggerEventResponseDto !== null) {
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
