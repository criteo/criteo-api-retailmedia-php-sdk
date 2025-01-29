# criteo\api\retailmedia\preview\CatalogApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**previewRetailMediaCatalogProductsBatchPost()**](CatalogApi.md#previewRetailMediaCatalogProductsBatchPost) | **POST** /preview/retail-media/catalog/products/batch |  |
| [**previewRetailMediaCatalogProductsBatchReportOperationTokenGet()**](CatalogApi.md#previewRetailMediaCatalogProductsBatchReportOperationTokenGet) | **GET** /preview/retail-media/catalog/products/batch/report/{operation-token} |  |
| [**searchBrandsByNameAsyncV1()**](CatalogApi.md#searchBrandsByNameAsyncV1) | **POST** /preview/retail-media/brands/search |  |


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

## `searchBrandsByNameAsyncV1()`

```php
searchBrandsByNameAsyncV1($offset, $limit, $value_resource_input_brand_id_search_request): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeBrandIdSearchResult
```



Search for brands given a retailer ID and search term.

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
$offset = 0; // int | offset of paginated results
$limit = 25; // int | the number of brands to return
$value_resource_input_brand_id_search_request = new \criteo\api\retailmedia\preview\Model\ValueResourceInputBrandIdSearchRequest(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputBrandIdSearchRequest | BrandIdSearchRequest which contains the request parameters

try {
    $result = $apiInstance->searchBrandsByNameAsyncV1($offset, $limit, $value_resource_input_brand_id_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->searchBrandsByNameAsyncV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| offset of paginated results | [optional] [default to 0] |
| **limit** | **int**| the number of brands to return | [optional] [default to 25] |
| **value_resource_input_brand_id_search_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputBrandIdSearchRequest**](../Model/ValueResourceInputBrandIdSearchRequest.md)| BrandIdSearchRequest which contains the request parameters | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeBrandIdSearchResult**](../Model/EntityResourceCollectionOutcomeBrandIdSearchResult.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
