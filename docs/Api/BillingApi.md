# criteo\api\retailmedia\preview\BillingApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**previewRetailMediaBillingPartnerReportPost()**](BillingApi.md#previewRetailMediaBillingPartnerReportPost) | **POST** /preview/retail-media/billing/partner-report |  |
| [**previewRetailMediaBillingPartnerReportRequestIdOutputGet()**](BillingApi.md#previewRetailMediaBillingPartnerReportRequestIdOutputGet) | **GET** /preview/retail-media/billing/partner-report/{requestId}/output |  |
| [**previewRetailMediaBillingPartnerReportRequestIdStatusGet()**](BillingApi.md#previewRetailMediaBillingPartnerReportRequestIdStatusGet) | **GET** /preview/retail-media/billing/partner-report/{requestId}/status |  |


## `previewRetailMediaBillingPartnerReportPost()`

```php
previewRetailMediaBillingPartnerReportPost($value_resource_input_partner_billing_report_request_v1): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomePartnerBillingReportStatusV1
```



Create a Partner Billing Report request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_resource_input_partner_billing_report_request_v1 = new \criteo\api\retailmedia\preview\Model\ValueResourceInputPartnerBillingReportRequestV1(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputPartnerBillingReportRequestV1 | Partner Billing Report request object.

try {
    $result = $apiInstance->previewRetailMediaBillingPartnerReportPost($value_resource_input_partner_billing_report_request_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->previewRetailMediaBillingPartnerReportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_resource_input_partner_billing_report_request_v1** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputPartnerBillingReportRequestV1**](../Model/ValueResourceInputPartnerBillingReportRequestV1.md)| Partner Billing Report request object. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomePartnerBillingReportStatusV1**](../Model/EntityResourceOutcomePartnerBillingReportStatusV1.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewRetailMediaBillingPartnerReportRequestIdOutputGet()`

```php
previewRetailMediaBillingPartnerReportRequestIdOutputGet($request_id): \SplFileObject
```



Get the output of an existing Partner Billing Report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string | The id of a Partner Billing Report request.

try {
    $result = $apiInstance->previewRetailMediaBillingPartnerReportRequestIdOutputGet($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->previewRetailMediaBillingPartnerReportRequestIdOutputGet: ', $e->getMessage(), PHP_EOL;
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

## `previewRetailMediaBillingPartnerReportRequestIdStatusGet()`

```php
previewRetailMediaBillingPartnerReportRequestIdStatusGet($request_id): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomePartnerBillingReportStatusV1
```



Get the status of an existing Partner Billing Report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string | The id of a Partner Billing Report request.

try {
    $result = $apiInstance->previewRetailMediaBillingPartnerReportRequestIdStatusGet($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->previewRetailMediaBillingPartnerReportRequestIdStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**| The id of a Partner Billing Report request. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomePartnerBillingReportStatusV1**](../Model/EntityResourceOutcomePartnerBillingReportStatusV1.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
