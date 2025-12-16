# criteo\api\retailmedia\preview\CatalogApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCatalogProductsBatchReport()**](CatalogApi.md#getCatalogProductsBatchReport) | **GET** /preview/retail-media/catalog/products/batch/report/{operation-token} |  |
| [**offerLoadV1()**](CatalogApi.md#offerLoadV1) | **POST** /preview/retail-media/retailers/{retailerId}/offers/load |  |
| [**offerSetBbwV1()**](CatalogApi.md#offerSetBbwV1) | **POST** /preview/retail-media/retailers/{retailerId}/offers/set-buy-box-winners |  |
| [**offerUpdateV1()**](CatalogApi.md#offerUpdateV1) | **POST** /preview/retail-media/retailers/{retailerId}/offers/update |  |
| [**submitCatalogProductsBatch()**](CatalogApi.md#submitCatalogProductsBatch) | **POST** /preview/retail-media/catalog/products/batch |  |


## `getCatalogProductsBatchReport()`

```php
getCatalogProductsBatchReport($operation_token): \criteo\api\retailmedia\preview\Model\ReportOkResponse
```



Get the report of an asynchronous batch operation previously requested

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_token = 'operation_token_example'; // string | The token returned by the batch endpoint.

try {
    $result = $apiInstance->getCatalogProductsBatchReport($operation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogProductsBatchReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_token** | **string**| The token returned by the batch endpoint. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ReportOkResponse**](../Model/ReportOkResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerLoadV1()`

```php
offerLoadV1($retailer_id, $value_resource_input_load_sku_offers_request): \criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAsyncJobResponse
```



Replace the offers for one or more SKUs with a snapshot of the new offers for each respective SKU

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailer for which these offers will be loaded
$value_resource_input_load_sku_offers_request = new \criteo\api\retailmedia\preview\Model\ValueResourceInputLoadSkuOffersRequest(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputLoadSkuOffersRequest

try {
    $result = $apiInstance->offerLoadV1($retailer_id, $value_resource_input_load_sku_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->offerLoadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailer for which these offers will be loaded | |
| **value_resource_input_load_sku_offers_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputLoadSkuOffersRequest**](../Model/ValueResourceInputLoadSkuOffersRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAsyncJobResponse**](../Model/ValueResourceOutcomeAsyncJobResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerSetBbwV1()`

```php
offerSetBbwV1($retailer_id, $value_resource_input_set_sku_buy_box_winners_request): \criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAsyncJobResponse
```



Update the buy box winner for one or more SKUs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailer for which these buy box winners will be set
$value_resource_input_set_sku_buy_box_winners_request = new \criteo\api\retailmedia\preview\Model\ValueResourceInputSetSkuBuyBoxWinnersRequest(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputSetSkuBuyBoxWinnersRequest

try {
    $result = $apiInstance->offerSetBbwV1($retailer_id, $value_resource_input_set_sku_buy_box_winners_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->offerSetBbwV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailer for which these buy box winners will be set | |
| **value_resource_input_set_sku_buy_box_winners_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputSetSkuBuyBoxWinnersRequest**](../Model/ValueResourceInputSetSkuBuyBoxWinnersRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAsyncJobResponse**](../Model/ValueResourceOutcomeAsyncJobResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerUpdateV1()`

```php
offerUpdateV1($retailer_id, $value_resource_input_update_offers_request): \criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAsyncJobResponse
```



Update one or more offers by replacing each offer's price and availability with the given values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailer for which these offers will be updated
$value_resource_input_update_offers_request = new \criteo\api\retailmedia\preview\Model\ValueResourceInputUpdateOffersRequest(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputUpdateOffersRequest

try {
    $result = $apiInstance->offerUpdateV1($retailer_id, $value_resource_input_update_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->offerUpdateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailer for which these offers will be updated | |
| **value_resource_input_update_offers_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputUpdateOffersRequest**](../Model/ValueResourceInputUpdateOffersRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAsyncJobResponse**](../Model/ValueResourceOutcomeAsyncJobResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitCatalogProductsBatch()`

```php
submitCatalogProductsBatch($products_custom_batch_request): \criteo\api\retailmedia\preview\Model\BatchAcceptedResponse
```



Used to publish a batch of operations to insert, update and deletes products.  The batch is processed asynchronously.The response provides an operationToken which can be used to track  the status of the report of the operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_custom_batch_request = new \criteo\api\retailmedia\preview\Model\ProductsCustomBatchRequest(); // \criteo\api\retailmedia\preview\Model\ProductsCustomBatchRequest

try {
    $result = $apiInstance->submitCatalogProductsBatch($products_custom_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->submitCatalogProductsBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products_custom_batch_request** | [**\criteo\api\retailmedia\preview\Model\ProductsCustomBatchRequest**](../Model/ProductsCustomBatchRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\BatchAcceptedResponse**](../Model/BatchAcceptedResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
