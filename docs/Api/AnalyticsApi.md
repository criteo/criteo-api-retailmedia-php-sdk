# criteo\api\retailmedia\preview\AnalyticsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateAsyncCampaignReport()**](AnalyticsApi.md#generateAsyncCampaignReport) | **POST** /preview/retail-media/reports/campaigns |  |
| [**generateAsyncLineItemsReport()**](AnalyticsApi.md#generateAsyncLineItemsReport) | **POST** /preview/retail-media/reports/line-items |  |
| [**generateAsyncRevenueReport()**](AnalyticsApi.md#generateAsyncRevenueReport) | **POST** /preview/retail-media/reports/revenue |  |
| [**generateAttributedTransactionsReport()**](AnalyticsApi.md#generateAttributedTransactionsReport) | **POST** /preview/retail-media/reports/sync/attributed-transactions |  |
| [**generateCampaignReports()**](AnalyticsApi.md#generateCampaignReports) | **POST** /preview/retail-media/reports/sync/campaigns |  |
| [**generateLineItemsReports()**](AnalyticsApi.md#generateLineItemsReports) | **POST** /preview/retail-media/reports/sync/line-items |  |
| [**getAsyncExportOutput()**](AnalyticsApi.md#getAsyncExportOutput) | **GET** /preview/retail-media/reports/{reportId}/output |  |
| [**getAsyncExportStatus()**](AnalyticsApi.md#getAsyncExportStatus) | **GET** /preview/retail-media/reports/{reportId}/status |  |
| [**getSkuByProductId()**](AnalyticsApi.md#getSkuByProductId) | **POST** /preview/retail-media/catalogs/sku/search/accounts/{accountId}/retailers/{retailerId}/by-id |  |


## `generateAsyncCampaignReport()`

```php
generateAsyncCampaignReport($async_campaign_report_request): \criteo\api\retailmedia\preview\Model\AsyncReportResponse
```



Return an async Campaign Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$async_campaign_report_request = new \criteo\api\retailmedia\preview\Model\AsyncCampaignReportRequest(); // \criteo\api\retailmedia\preview\Model\AsyncCampaignReportRequest

try {
    $result = $apiInstance->generateAsyncCampaignReport($async_campaign_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->generateAsyncCampaignReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **async_campaign_report_request** | [**\criteo\api\retailmedia\preview\Model\AsyncCampaignReportRequest**](../Model/AsyncCampaignReportRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAsyncLineItemsReport()`

```php
generateAsyncLineItemsReport($async_line_item_report_request): \criteo\api\retailmedia\preview\Model\AsyncReportResponse
```



Return an async Line Item Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$async_line_item_report_request = new \criteo\api\retailmedia\preview\Model\AsyncLineItemReportRequest(); // \criteo\api\retailmedia\preview\Model\AsyncLineItemReportRequest

try {
    $result = $apiInstance->generateAsyncLineItemsReport($async_line_item_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->generateAsyncLineItemsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **async_line_item_report_request** | [**\criteo\api\retailmedia\preview\Model\AsyncLineItemReportRequest**](../Model/AsyncLineItemReportRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAsyncRevenueReport()`

```php
generateAsyncRevenueReport($async_revenue_report_request): \criteo\api\retailmedia\preview\Model\AsyncReportResponse
```



Return an async Revenue Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$async_revenue_report_request = new \criteo\api\retailmedia\preview\Model\AsyncRevenueReportRequest(); // \criteo\api\retailmedia\preview\Model\AsyncRevenueReportRequest

try {
    $result = $apiInstance->generateAsyncRevenueReport($async_revenue_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->generateAsyncRevenueReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **async_revenue_report_request** | [**\criteo\api\retailmedia\preview\Model\AsyncRevenueReportRequest**](../Model/AsyncRevenueReportRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAttributedTransactionsReport()`

```php
generateAttributedTransactionsReport($attributed_transaction_report_request): \criteo\api\retailmedia\preview\Model\ReportResponse
```



Return an Attributed Transactions Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributed_transaction_report_request = new \criteo\api\retailmedia\preview\Model\AttributedTransactionReportRequest(); // \criteo\api\retailmedia\preview\Model\AttributedTransactionReportRequest

try {
    $result = $apiInstance->generateAttributedTransactionsReport($attributed_transaction_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->generateAttributedTransactionsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributed_transaction_report_request** | [**\criteo\api\retailmedia\preview\Model\AttributedTransactionReportRequest**](../Model/AttributedTransactionReportRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCampaignReports()`

```php
generateCampaignReports($campaign_report_request): \criteo\api\retailmedia\preview\Model\ReportResponse
```



Return a Campaign Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_report_request = new \criteo\api\retailmedia\preview\Model\CampaignReportRequest(); // \criteo\api\retailmedia\preview\Model\CampaignReportRequest

try {
    $result = $apiInstance->generateCampaignReports($campaign_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->generateCampaignReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_report_request** | [**\criteo\api\retailmedia\preview\Model\CampaignReportRequest**](../Model/CampaignReportRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateLineItemsReports()`

```php
generateLineItemsReports($line_item_report_request): \criteo\api\retailmedia\preview\Model\ReportResponse
```



Return a Line Item Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_report_request = new \criteo\api\retailmedia\preview\Model\LineItemReportRequest(); // \criteo\api\retailmedia\preview\Model\LineItemReportRequest

try {
    $result = $apiInstance->generateLineItemsReports($line_item_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->generateLineItemsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_report_request** | [**\criteo\api\retailmedia\preview\Model\LineItemReportRequest**](../Model/LineItemReportRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsyncExportOutput()`

```php
getAsyncExportOutput($report_id): string
```



Return the output of an async report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | The ID of the report to retrieve

try {
    $result = $apiInstance->getAsyncExportOutput($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAsyncExportOutput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The ID of the report to retrieve | |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsyncExportStatus()`

```php
getAsyncExportStatus($report_id): \criteo\api\retailmedia\preview\Model\AsyncReportResponse
```



Return the status of an async report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | The ID of the report to retrieve

try {
    $result = $apiInstance->getAsyncExportStatus($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAsyncExportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The ID of the report to retrieve | |

### Return type

[**\criteo\api\retailmedia\preview\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSkuByProductId()`

```php
getSkuByProductId($account_id, $retailer_id, $offset, $limit, $sku_search_request): \criteo\api\retailmedia\preview\Model\ResourceCollectionOutcomeOfSkuSearchResult
```



Gets a list of SKUs based on a privided list of Product Ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | account id
$retailer_id = 56; // int | retailer id
$offset = 0; // int | skip a number of matches before retrning results, used with limit
$limit = 100; // int | max number of results to return
$sku_search_request = new \criteo\api\retailmedia\preview\Model\SkuSearchRequest(); // \criteo\api\retailmedia\preview\Model\SkuSearchRequest | 

try {
    $result = $apiInstance->getSkuByProductId($account_id, $retailer_id, $offset, $limit, $sku_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getSkuByProductId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| account id | |
| **retailer_id** | **int**| retailer id | |
| **offset** | **int**| skip a number of matches before retrning results, used with limit | [optional] [default to 0] |
| **limit** | **int**| max number of results to return | [optional] [default to 100] |
| **sku_search_request** | [**\criteo\api\retailmedia\preview\Model\SkuSearchRequest**](../Model/SkuSearchRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ResourceCollectionOutcomeOfSkuSearchResult**](../Model/ResourceCollectionOutcomeOfSkuSearchResult.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
