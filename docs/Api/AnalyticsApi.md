# criteo\api\retailmedia\v2022_07\AnalyticsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReportOutput()**](AnalyticsApi.md#getReportOutput) | **GET** /2022-07/retail-media/reports/{reportId}/output |  |
| [**getReportStatus()**](AnalyticsApi.md#getReportStatus) | **GET** /2022-07/retail-media/reports/{reportId}/status |  |
| [**requestCampaignReport()**](AnalyticsApi.md#requestCampaignReport) | **POST** /2022-07/retail-media/reports/campaigns |  |
| [**requestLineItemReport()**](AnalyticsApi.md#requestLineItemReport) | **POST** /2022-07/retail-media/reports/line-items |  |


## `getReportOutput()`

```php
getReportOutput($report_id): string
```



Request the report output

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2022_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | report id

try {
    $result = $apiInstance->getReportOutput($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getReportOutput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| report id | |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportStatus()`

```php
getReportStatus($report_id): \criteo\api\retailmedia\v2022_07\Model\EnvelopeReportStatus
```



Get the status of the report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2022_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | report id

try {
    $result = $apiInstance->getReportStatus($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getReportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| report id | |

### Return type

[**\criteo\api\retailmedia\v2022_07\Model\EnvelopeReportStatus**](../Model/EnvelopeReportStatus.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestCampaignReport()`

```php
requestCampaignReport($envelope_report_request): \criteo\api\retailmedia\v2022_07\Model\EnvelopeReportStatus
```



Request a campaign report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2022_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_report_request = new \criteo\api\retailmedia\v2022_07\Model\EnvelopeReportRequest(); // \criteo\api\retailmedia\v2022_07\Model\EnvelopeReportRequest | Envelope of the request

try {
    $result = $apiInstance->requestCampaignReport($envelope_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->requestCampaignReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_report_request** | [**\criteo\api\retailmedia\v2022_07\Model\EnvelopeReportRequest**](../Model/EnvelopeReportRequest.md)| Envelope of the request | |

### Return type

[**\criteo\api\retailmedia\v2022_07\Model\EnvelopeReportStatus**](../Model/EnvelopeReportStatus.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestLineItemReport()`

```php
requestLineItemReport($envelope_report_request): \criteo\api\retailmedia\v2022_07\Model\EnvelopeReportStatus
```



Request a line item report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2022_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2022_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_report_request = new \criteo\api\retailmedia\v2022_07\Model\EnvelopeReportRequest(); // \criteo\api\retailmedia\v2022_07\Model\EnvelopeReportRequest | Envelope of the request

try {
    $result = $apiInstance->requestLineItemReport($envelope_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->requestLineItemReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_report_request** | [**\criteo\api\retailmedia\v2022_07\Model\EnvelopeReportRequest**](../Model/EnvelopeReportRequest.md)| Envelope of the request | |

### Return type

[**\criteo\api\retailmedia\v2022_07\Model\EnvelopeReportStatus**](../Model/EnvelopeReportStatus.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
