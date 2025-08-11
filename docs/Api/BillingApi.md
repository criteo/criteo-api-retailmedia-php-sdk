# criteo\api\retailmedia\v2025_07\BillingApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call07RetailMediaBillingPartnerReportPost()**](BillingApi.md#call07RetailMediaBillingPartnerReportPost) | **POST** /2025-07/retail-media/billing/partner-report |  |
| [**call07RetailMediaBillingPartnerReportRequestIdOutputGet()**](BillingApi.md#call07RetailMediaBillingPartnerReportRequestIdOutputGet) | **GET** /2025-07/retail-media/billing/partner-report/{requestId}/output |  |
| [**call07RetailMediaBillingPartnerReportRequestIdStatusGet()**](BillingApi.md#call07RetailMediaBillingPartnerReportRequestIdStatusGet) | **GET** /2025-07/retail-media/billing/partner-report/{requestId}/status |  |


## `call07RetailMediaBillingPartnerReportPost()`

```php
call07RetailMediaBillingPartnerReportPost($value_resource_input_partner_billing_report_request_v1): \criteo\api\retailmedia\v2025_07\Model\EntityResourceOutcomePartnerBillingReportStatusV1
```



Create a Partner Billing Report request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_07\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_resource_input_partner_billing_report_request_v1 = new \criteo\api\retailmedia\v2025_07\Model\ValueResourceInputPartnerBillingReportRequestV1(); // \criteo\api\retailmedia\v2025_07\Model\ValueResourceInputPartnerBillingReportRequestV1 | Partner Billing Report request object.

try {
    $result = $apiInstance->call07RetailMediaBillingPartnerReportPost($value_resource_input_partner_billing_report_request_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->call07RetailMediaBillingPartnerReportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_resource_input_partner_billing_report_request_v1** | [**\criteo\api\retailmedia\v2025_07\Model\ValueResourceInputPartnerBillingReportRequestV1**](../Model/ValueResourceInputPartnerBillingReportRequestV1.md)| Partner Billing Report request object. | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_07\Model\EntityResourceOutcomePartnerBillingReportStatusV1**](../Model/EntityResourceOutcomePartnerBillingReportStatusV1.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call07RetailMediaBillingPartnerReportRequestIdOutputGet()`

```php
call07RetailMediaBillingPartnerReportRequestIdOutputGet($request_id): \SplFileObject
```



Get the output of an existing Partner Billing Report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_07\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string | The id of a Partner Billing Report request.

try {
    $result = $apiInstance->call07RetailMediaBillingPartnerReportRequestIdOutputGet($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->call07RetailMediaBillingPartnerReportRequestIdOutputGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**| The id of a Partner Billing Report request. | |

### Return type

**\SplFileObject**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call07RetailMediaBillingPartnerReportRequestIdStatusGet()`

```php
call07RetailMediaBillingPartnerReportRequestIdStatusGet($request_id): \criteo\api\retailmedia\v2025_07\Model\EntityResourceOutcomePartnerBillingReportStatusV1
```



Get the status of an existing Partner Billing Report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_07\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string | The id of a Partner Billing Report request.

try {
    $result = $apiInstance->call07RetailMediaBillingPartnerReportRequestIdStatusGet($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->call07RetailMediaBillingPartnerReportRequestIdStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**| The id of a Partner Billing Report request. | |

### Return type

[**\criteo\api\retailmedia\v2025_07\Model\EntityResourceOutcomePartnerBillingReportStatusV1**](../Model/EntityResourceOutcomePartnerBillingReportStatusV1.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
