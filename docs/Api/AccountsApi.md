# criteo\api\retailmedia\experimental\AccountsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchBrands()**](AccountsApi.md#searchBrands) | **POST** /experimental/retail-media/brands/search | /experimental/retail-media/brands/search |


## `searchBrands()`

```php
searchBrands($limit, $offset, $value_resource_input_brand_id_search_request): \criteo\api\retailmedia\experimental\Model\EntityResourceCollectionOutcomeBrandIdSearchResultPagingOffsetLimitMetadata
```

/experimental/retail-media/brands/search

Search for brands given a retailer ID and search term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | the number of brands to return
$offset = 0; // int | offset of paginated results
$value_resource_input_brand_id_search_request = new \criteo\api\retailmedia\experimental\Model\ValueResourceInputBrandIdSearchRequest(); // \criteo\api\retailmedia\experimental\Model\ValueResourceInputBrandIdSearchRequest | BrandIdSearchRequest which contains the request parameters

try {
    $result = $apiInstance->searchBrands($limit, $offset, $value_resource_input_brand_id_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| the number of brands to return | [optional] [default to 25] |
| **offset** | **int**| offset of paginated results | [optional] [default to 0] |
| **value_resource_input_brand_id_search_request** | [**\criteo\api\retailmedia\experimental\Model\ValueResourceInputBrandIdSearchRequest**](../Model/ValueResourceInputBrandIdSearchRequest.md)| BrandIdSearchRequest which contains the request parameters | [optional] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\EntityResourceCollectionOutcomeBrandIdSearchResultPagingOffsetLimitMetadata**](../Model/EntityResourceCollectionOutcomeBrandIdSearchResultPagingOffsetLimitMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
