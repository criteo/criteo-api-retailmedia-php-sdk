# criteo\api\retailmedia\preview\CatalogApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**previewRetailMediaCatalogProductsBatchPost()**](CatalogApi.md#previewRetailMediaCatalogProductsBatchPost) | **POST** /preview/retail-media/catalog/products/batch |  |
| [**previewRetailMediaCatalogProductsBatchReportOperationTokenGet()**](CatalogApi.md#previewRetailMediaCatalogProductsBatchReportOperationTokenGet) | **GET** /preview/retail-media/catalog/products/batch/report/{operation-token} |  |


## `previewRetailMediaCatalogProductsBatchPost()`

```php
previewRetailMediaCatalogProductsBatchPost($products_custom_batch_request): \criteo\api\retailmedia\preview\Model\BatchAcceptedResponse
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
    $result = $apiInstance->previewRetailMediaCatalogProductsBatchPost($products_custom_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->previewRetailMediaCatalogProductsBatchPost: ', $e->getMessage(), PHP_EOL;
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

## `previewRetailMediaCatalogProductsBatchReportOperationTokenGet()`

```php
previewRetailMediaCatalogProductsBatchReportOperationTokenGet($operation_token): \criteo\api\retailmedia\preview\Model\ReportOkResponse
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
    $result = $apiInstance->previewRetailMediaCatalogProductsBatchReportOperationTokenGet($operation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->previewRetailMediaCatalogProductsBatchReportOperationTokenGet: ', $e->getMessage(), PHP_EOL;
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
