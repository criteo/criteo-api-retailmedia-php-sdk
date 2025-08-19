# criteo\api\retailmedia\preview\CampaignApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRemoveKeywords()**](CampaignApi.md#addRemoveKeywords) | **POST** /preview/retail-media/line-items/{id}/keywords/add-remove |  |
| [**appendPromotedProducts()**](CampaignApi.md#appendPromotedProducts) | **POST** /preview/retail-media/line-items/{line-item-id}/products/append |  |
| [**categoriesSearchV1()**](CampaignApi.md#categoriesSearchV1) | **POST** /preview/retail-media/retailers/{retailerId}/categories/search |  |
| [**createAuctionLineItemV2()**](CampaignApi.md#createAuctionLineItemV2) | **POST** /preview/retail-media/campaigns/{campaignId}/auction-line-items |  |
| [**deleteApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId()**](CampaignApi.md#deleteApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId) | **DELETE** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |  |
| [**deletePromotedProducts()**](CampaignApi.md#deletePromotedProducts) | **POST** /preview/retail-media/line-items/{line-item-id}/products/delete |  |
| [**fetchKeywords()**](CampaignApi.md#fetchKeywords) | **GET** /preview/retail-media/line-items/{id}/keywords |  |
| [**fetchPromotedProducts()**](CampaignApi.md#fetchPromotedProducts) | **GET** /preview/retail-media/line-items/{line-item-id}/products |  |
| [**getApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId()**](CampaignApi.md#getApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId) | **GET** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |  |
| [**getApiExternalV1LineItemProductButtonsByLineItemId()**](CampaignApi.md#getApiExternalV1LineItemProductButtonsByLineItemId) | **GET** /preview/retail-media/line-items/{line-item-id}/product-buttons |  |
| [**getApiExternalV2CampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#getApiExternalV2CampaignPreferredLineItemsByCampaignId) | **GET** /preview/retail-media/campaigns/{campaign-id}/preferred-line-items |  |
| [**getApiExternalV2CatalogStatusByCatalogId()**](CampaignApi.md#getApiExternalV2CatalogStatusByCatalogId) | **GET** /preview/retail-media/catalogs/{catalogId}/status |  |
| [**getApiExternalV2PreferredLineItemByLineItemId()**](CampaignApi.md#getApiExternalV2PreferredLineItemByLineItemId) | **GET** /preview/retail-media/preferred-line-items/{line-item-id} |  |
| [**getApiV1ExternalRetailerBrandsByRetailerId()**](CampaignApi.md#getApiV1ExternalRetailerBrandsByRetailerId) | **GET** /preview/retail-media/retailers/{retailerId}/brands |  |
| [**getApiV1ExternalRetailerByRetailerIdSellerBySeller()**](CampaignApi.md#getApiV1ExternalRetailerByRetailerIdSellerBySeller) | **GET** /preview/retail-media/retailers/{retailerId}/sellers/{seller} |  |
| [**getApiV1ExternalRetailerCategoryCpcRatesByRetailerId()**](CampaignApi.md#getApiV1ExternalRetailerCategoryCpcRatesByRetailerId) | **GET** /preview/retail-media/retailers/{retailer-id}/cpc-rates |  |
| [**getApiV1ExternalRetailerPlacementsByRetailerId()**](CampaignApi.md#getApiV1ExternalRetailerPlacementsByRetailerId) | **GET** /preview/retail-media/retailers/{retailer-id}/placements |  |
| [**getApiV2ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#getApiV2ExternalAccountByAccountIdCreativescreativeId) | **GET** /preview/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**getAuctionLineItemV2()**](CampaignApi.md#getAuctionLineItemV2) | **GET** /preview/retail-media/auction-line-items/{lineItemId} |  |
| [**getAuctionLineItemsByCampaignIdV2()**](CampaignApi.md#getAuctionLineItemsByCampaignIdV2) | **GET** /preview/retail-media/campaigns/{campaignId}/auction-line-items |  |
| [**getRecommendedCategories()**](CampaignApi.md#getRecommendedCategories) | **POST** /preview/retail-media/retailers/{retailerId}/recommend-categories |  |
| [**inReviewReportV1()**](CampaignApi.md#inReviewReportV1) | **GET** /preview/retail-media/accounts/{account-id}/keywords/in-review-report |  |
| [**pausePromotedProducts()**](CampaignApi.md#pausePromotedProducts) | **POST** /preview/retail-media/line-items/{line-item-id}/products/pause |  |
| [**postApiExternalV1LineItemProductButtonsCreateByLineItemId()**](CampaignApi.md#postApiExternalV1LineItemProductButtonsCreateByLineItemId) | **POST** /preview/retail-media/line-items/{line-item-id}/product-buttons/create |  |
| [**postApiExternalV2AccountBrandCatalogExportByAccountId()**](CampaignApi.md#postApiExternalV2AccountBrandCatalogExportByAccountId) | **POST** /preview/retail-media/accounts/{accountId}/brand-catalog-export |  |
| [**postApiExternalV2AccountSellerCatalogExportByAccountId()**](CampaignApi.md#postApiExternalV2AccountSellerCatalogExportByAccountId) | **POST** /preview/retail-media/accounts/{accountId}/seller-catalog-export |  |
| [**postApiExternalV2CampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#postApiExternalV2CampaignPreferredLineItemsByCampaignId) | **POST** /preview/retail-media/campaigns/{campaign-id}/preferred-line-items |  |
| [**postApiV1ExternalCatalogsSkuRetrieval()**](CampaignApi.md#postApiV1ExternalCatalogsSkuRetrieval) | **POST** /preview/retail-media/catalogs/sku-retrieval |  |
| [**postApiV1ExternalCatalogsSkuSearch()**](CampaignApi.md#postApiV1ExternalCatalogsSkuSearch) | **POST** /preview/retail-media/catalogs/sku-search |  |
| [**postApiV2ExternalAccountCreativesByAccountId()**](CampaignApi.md#postApiV2ExternalAccountCreativesByAccountId) | **POST** /preview/retail-media/accounts/{account-id}/creatives |  |
| [**postApiV2ExternalAccountCreativesSearchByAccountId()**](CampaignApi.md#postApiV2ExternalAccountCreativesSearchByAccountId) | **POST** /preview/retail-media/accounts/{account-id}/creatives/search |  |
| [**putApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId()**](CampaignApi.md#putApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId) | **PUT** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |  |
| [**putApiExternalV2PreferredLineItemByLineItemId()**](CampaignApi.md#putApiExternalV2PreferredLineItemByLineItemId) | **PUT** /preview/retail-media/preferred-line-items/{line-item-id} |  |
| [**putApiV2ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#putApiV2ExternalAccountByAccountIdCreativescreativeId) | **PUT** /preview/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**recommendedKeywords()**](CampaignApi.md#recommendedKeywords) | **POST** /preview/retail-media/retailers/{retailerId}/recommend-keywords |  |
| [**searchBrandsByNameAsyncV1()**](CampaignApi.md#searchBrandsByNameAsyncV1) | **POST** /preview/retail-media/brands/search |  |
| [**setKeywordBids()**](CampaignApi.md#setKeywordBids) | **POST** /preview/retail-media/line-items/{id}/keywords/set-bid |  |
| [**unpausePromotedProducts()**](CampaignApi.md#unpausePromotedProducts) | **POST** /preview/retail-media/line-items/{line-item-id}/products/unpause |  |
| [**updateAuctionLineItemV2()**](CampaignApi.md#updateAuctionLineItemV2) | **PUT** /preview/retail-media/auction-line-items/{lineItemId} |  |
| [**updateKeywordReviewsV1()**](CampaignApi.md#updateKeywordReviewsV1) | **POST** /preview/retail-media/line-items/{line-item-id}/keywords/review |  |


## `addRemoveKeywords()`

```php
addRemoveKeywords($id, $add_remove_keywords_model_request): \criteo\api\retailmedia\preview\Model\ResourceOutcome
```



Add or Remove keywords from the line item in bulk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the line item
$add_remove_keywords_model_request = new \criteo\api\retailmedia\preview\Model\AddRemoveKeywordsModelRequest(); // \criteo\api\retailmedia\preview\Model\AddRemoveKeywordsModelRequest

try {
    $result = $apiInstance->addRemoveKeywords($id, $add_remove_keywords_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->addRemoveKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the line item | |
| **add_remove_keywords_model_request** | [**\criteo\api\retailmedia\preview\Model\AddRemoveKeywordsModelRequest**](../Model/AddRemoveKeywordsModelRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ResourceOutcome**](../Model/ResourceOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appendPromotedProducts()`

```php
appendPromotedProducts($line_item_id, $promoted_product_resource_collection_input): \criteo\api\retailmedia\preview\Model\ProductResourceOutcome
```



Append a collection of promoted products to a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

try {
    $result = $apiInstance->appendPromotedProducts($line_item_id, $promoted_product_resource_collection_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->appendPromotedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| ID of the line item | |
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductResourceOutcome**](../Model/ProductResourceOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesSearchV1()`

```php
categoriesSearchV1($retailer_id, $limit, $offset, $value_resource_input_categories_search_request_v1): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeCategory202204Metadata
```



Search a retailer categories by given text substring and category ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | Retailer id.
$limit = 50; // int | Limit of the search result.
$offset = 0; // int | Offset of the search result.
$value_resource_input_categories_search_request_v1 = new \criteo\api\retailmedia\preview\Model\ValueResourceInputCategoriesSearchRequestV1(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputCategoriesSearchRequestV1 | Request of categories search.

try {
    $result = $apiInstance->categoriesSearchV1($retailer_id, $limit, $offset, $value_resource_input_categories_search_request_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->categoriesSearchV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| Retailer id. | |
| **limit** | **int**| Limit of the search result. | [optional] [default to 50] |
| **offset** | **int**| Offset of the search result. | [optional] [default to 0] |
| **value_resource_input_categories_search_request_v1** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputCategoriesSearchRequestV1**](../Model/ValueResourceInputCategoriesSearchRequestV1.md)| Request of categories search. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeCategory202204Metadata**](../Model/EntityResourceCollectionOutcomeCategory202204Metadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAuctionLineItemV2()`

```php
createAuctionLineItemV2($campaign_id, $value_resource_input_of_sponsored_products_line_item_create_request_model): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfSponsoredProductsLineItem
```



Creates new auction line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$value_resource_input_of_sponsored_products_line_item_create_request_model = new \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel | The line item settings to create a line item with

try {
    $result = $apiInstance->createAuctionLineItemV2($campaign_id, $value_resource_input_of_sponsored_products_line_item_create_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createAuctionLineItemV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **value_resource_input_of_sponsored_products_line_item_create_request_model** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel**](../Model/ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfSponsoredProductsLineItem**](../Model/EntityResourceOutcomeOfSponsoredProductsLineItem.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId()`

```php
deleteApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId($line_item_id, $product_button_id): \criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse
```



Delete Specific Product Button

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | External LineItemId for productButton delete
$product_button_id = 'product_button_id_example'; // string | productButtonId used for delete

try {
    $result = $apiInstance->deleteApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId($line_item_id, $product_button_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| External LineItemId for productButton delete | |
| **product_button_id** | **string**| productButtonId used for delete | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePromotedProducts()`

```php
deletePromotedProducts($line_item_id, $promoted_product_resource_collection_input)
```



Remove a collection of promoted products from a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

try {
    $apiInstance->deletePromotedProducts($line_item_id, $promoted_product_resource_collection_input);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deletePromotedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| ID of the line item | |
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchKeywords()`

```php
fetchKeywords($id): \criteo\api\retailmedia\preview\Model\KeywordsModelResponse
```



Fetch keywords associated with the specified line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the line item

try {
    $result = $apiInstance->fetchKeywords($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->fetchKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the line item | |

### Return type

[**\criteo\api\retailmedia\preview\Model\KeywordsModelResponse**](../Model/KeywordsModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPromotedProducts()`

```php
fetchPromotedProducts($line_item_id, $fields, $limit, $offset): \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionOutcome
```



Retrieve a page of promoted products for a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item.
$fields = 'fields_example'; // string | A comma separated list of attribute names from the response model to compute and return.              Valid values are `status` and `bidOverride` in any order. Defaults to `status`.
$limit = 56; // int | Maximum page size to fetch. Defaults to 500.
$offset = 56; // int | Offset of the first item to fetch. Defaults to zero.

try {
    $result = $apiInstance->fetchPromotedProducts($line_item_id, $fields, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->fetchPromotedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| ID of the line item. | |
| **fields** | **string**| A comma separated list of attribute names from the response model to compute and return.              Valid values are &#x60;status&#x60; and &#x60;bidOverride&#x60; in any order. Defaults to &#x60;status&#x60;. | [optional] |
| **limit** | **int**| Maximum page size to fetch. Defaults to 500. | [optional] |
| **offset** | **int**| Offset of the first item to fetch. Defaults to zero. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionOutcome**](../Model/PromotedProductResourceCollectionOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId()`

```php
getApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId($line_item_id, $product_button_id): \criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse
```



Get Specific Product Button

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | External LineItemId for productButton retrieval
$product_button_id = 'product_button_id_example'; // string | productButtonId used for retrieval

try {
    $result = $apiInstance->getApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId($line_item_id, $product_button_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| External LineItemId for productButton retrieval | |
| **product_button_id** | **string**| productButtonId used for retrieval | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiExternalV1LineItemProductButtonsByLineItemId()`

```php
getApiExternalV1LineItemProductButtonsByLineItemId($line_item_id): \criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse
```



Get LineItem Product Buttons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | External LineItemId for productButton retrieval

try {
    $result = $apiInstance->getApiExternalV1LineItemProductButtonsByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiExternalV1LineItemProductButtonsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| External LineItemId for productButton retrieval | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiExternalV2CampaignPreferredLineItemsByCampaignId()`

```php
getApiExternalV2CampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\PreferredLineItemV2PagedListResponse
```



Gets page of preferred line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiExternalV2CampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiExternalV2CampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\preview\Model\PreferredLineItemV2PagedListResponse**](../Model/PreferredLineItemV2PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiExternalV2CatalogStatusByCatalogId()`

```php
getApiExternalV2CatalogStatusByCatalogId($catalog_id): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfCatalogStatusV2
```



Check the status of a catalog request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | A catalog ID returned from an account catalog request.

try {
    $result = $apiInstance->getApiExternalV2CatalogStatusByCatalogId($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiExternalV2CatalogStatusByCatalogId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| A catalog ID returned from an account catalog request. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfCatalogStatusV2**](../Model/EntityResourceOutcomeOfCatalogStatusV2.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiExternalV2PreferredLineItemByLineItemId()`

```php
getApiExternalV2PreferredLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\preview\Model\PreferredLineItemV2Response
```



Gets the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApiExternalV2PreferredLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiExternalV2PreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |

### Return type

[**\criteo\api\retailmedia\preview\Model\PreferredLineItemV2Response**](../Model/PreferredLineItemV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalRetailerBrandsByRetailerId()`

```php
getApiV1ExternalRetailerBrandsByRetailerId($retailer_id, $brand_type, $sku_stock_type_filter): \criteo\api\retailmedia\preview\Model\BrandPreviewListResponse
```



Gets the brands for the given retailer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailer id for which brands should be fetched.
$brand_type = 'brand_type_example'; // string | Filter to narrow down brands [all|uc|retailer]. Defaults to uc
$sku_stock_type_filter = 'sku_stock_type_filter_example'; // string | Filter to narrow down brands [first-party|third-party|first-and-third-party]. Defaults to first-and-third-party

try {
    $result = $apiInstance->getApiV1ExternalRetailerBrandsByRetailerId($retailer_id, $brand_type, $sku_stock_type_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalRetailerBrandsByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailer id for which brands should be fetched. | |
| **brand_type** | **string**| Filter to narrow down brands [all|uc|retailer]. Defaults to uc | [optional] |
| **sku_stock_type_filter** | **string**| Filter to narrow down brands [first-party|third-party|first-and-third-party]. Defaults to first-and-third-party | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\BrandPreviewListResponse**](../Model/BrandPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalRetailerByRetailerIdSellerBySeller()`

```php
getApiV1ExternalRetailerByRetailerIdSellerBySeller($retailer_id, $seller): \criteo\api\retailmedia\preview\Model\SellerPreviewResponse
```



Endpoint to get market place seller id and name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailer id for which seller should be fetched.
$seller = 'seller_example'; // string | The seller id or seller name which should be validated.

try {
    $result = $apiInstance->getApiV1ExternalRetailerByRetailerIdSellerBySeller($retailer_id, $seller);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalRetailerByRetailerIdSellerBySeller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailer id for which seller should be fetched. | |
| **seller** | **string**| The seller id or seller name which should be validated. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\SellerPreviewResponse**](../Model/SellerPreviewResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalRetailerCategoryCpcRatesByRetailerId()`

```php
getApiV1ExternalRetailerCategoryCpcRatesByRetailerId($retailer_id, $fields): \criteo\api\retailmedia\preview\Model\CpcRateCardPreviewResponse
```



Gets the minimum cpc bid for the retailer, and optionally the categories under the retailer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 'retailer_id_example'; // string | The retailer id
$fields = array('fields_example'); // string[] | The fields in the response that is to be included

try {
    $result = $apiInstance->getApiV1ExternalRetailerCategoryCpcRatesByRetailerId($retailer_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalRetailerCategoryCpcRatesByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **string**| The retailer id | |
| **fields** | [**string[]**](../Model/string.md)| The fields in the response that is to be included | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\CpcRateCardPreviewResponse**](../Model/CpcRateCardPreviewResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalRetailerPlacementsByRetailerId()`

```php
getApiV1ExternalRetailerPlacementsByRetailerId($retailer_id): \criteo\api\retailmedia\preview\Model\PlacementPreviewListResponse
```



Gets all placement information for the given retailer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 'retailer_id_example'; // string | The retailer id for which placements should be fetched.

try {
    $result = $apiInstance->getApiV1ExternalRetailerPlacementsByRetailerId($retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalRetailerPlacementsByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **string**| The retailer id for which placements should be fetched. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\PlacementPreviewListResponse**](../Model/PlacementPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAccountByAccountIdCreativescreativeId()`

```php
getApiV2ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id): \criteo\api\retailmedia\preview\Model\Creative2Response
```



Get the specified creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for
$creative_id = 'creative_id_example'; // string | Creative to get

try {
    $result = $apiInstance->getApiV2ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalAccountByAccountIdCreativescreativeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to retrieve creatives for | |
| **creative_id** | **string**| Creative to get | |

### Return type

[**\criteo\api\retailmedia\preview\Model\Creative2Response**](../Model/Creative2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuctionLineItemV2()`

```php
getAuctionLineItemV2($line_item_id): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfSponsoredProductsLineItem
```



Gets a sponsored product line item by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 56; // int | The id of the line item

try {
    $result = $apiInstance->getAuctionLineItemV2($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAuctionLineItemV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **int**| The id of the line item | |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfSponsoredProductsLineItem**](../Model/EntityResourceOutcomeOfSponsoredProductsLineItem.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuctionLineItemsByCampaignIdV2()`

```php
getAuctionLineItemsByCampaignIdV2($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeOfSponsoredProductsLineItemAndMetadata
```



Gets a page of sponsored product line items by campaign id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The id of the campaign
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getAuctionLineItemsByCampaignIdV2($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAuctionLineItemsByCampaignIdV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The id of the campaign | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeOfSponsoredProductsLineItemAndMetadata**](../Model/EntityResourceCollectionOutcomeOfSponsoredProductsLineItemAndMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecommendedCategories()`

```php
getRecommendedCategories($retailer_id, $value_resource_input_recommended_categories_request_v1): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeCategory202204
```



Endpoint to get recommended categories by given retailer id and sku id list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | Retailer id.
$value_resource_input_recommended_categories_request_v1 = new \criteo\api\retailmedia\preview\Model\ValueResourceInputRecommendedCategoriesRequestV1(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputRecommendedCategoriesRequestV1 | Request of recommended categories.

try {
    $result = $apiInstance->getRecommendedCategories($retailer_id, $value_resource_input_recommended_categories_request_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getRecommendedCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| Retailer id. | |
| **value_resource_input_recommended_categories_request_v1** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputRecommendedCategoriesRequestV1**](../Model/ValueResourceInputRecommendedCategoriesRequestV1.md)| Request of recommended categories. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeCategory202204**](../Model/EntityResourceCollectionOutcomeCategory202204.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inReviewReportV1()`

```php
inReviewReportV1($account_id, $limit, $offset): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeLineItemKeywordReviewReportAndMetadata
```



Generate a list of reports for line items which contain one or more actionable keyword reviews

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The account to generate a report for
$limit = 25; // int | Number of items per page
$offset = 0; // int | Offset for pagination

try {
    $result = $apiInstance->inReviewReportV1($account_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->inReviewReportV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| The account to generate a report for | |
| **limit** | **int**| Number of items per page | [optional] [default to 25] |
| **offset** | **int**| Offset for pagination | [optional] [default to 0] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeLineItemKeywordReviewReportAndMetadata**](../Model/EntityResourceCollectionOutcomeLineItemKeywordReviewReportAndMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pausePromotedProducts()`

```php
pausePromotedProducts($line_item_id, $promoted_product_resource_collection_input)
```



Pause a collection of promoted products associated with a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

try {
    $apiInstance->pausePromotedProducts($line_item_id, $promoted_product_resource_collection_input);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->pausePromotedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| ID of the line item | |
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiExternalV1LineItemProductButtonsCreateByLineItemId()`

```php
postApiExternalV1LineItemProductButtonsCreateByLineItemId($line_item_id, $product_button_request_list_request): \criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse
```



Add Specific Product Buttons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | External LineItemId for productButton retrieval
$product_button_request_list_request = new \criteo\api\retailmedia\preview\Model\ProductButtonRequestListRequest(); // \criteo\api\retailmedia\preview\Model\ProductButtonRequestListRequest | List of Product Buttons to append

try {
    $result = $apiInstance->postApiExternalV1LineItemProductButtonsCreateByLineItemId($line_item_id, $product_button_request_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiExternalV1LineItemProductButtonsCreateByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| External LineItemId for productButton retrieval | |
| **product_button_request_list_request** | [**\criteo\api\retailmedia\preview\Model\ProductButtonRequestListRequest**](../Model/ProductButtonRequestListRequest.md)| List of Product Buttons to append | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiExternalV2AccountBrandCatalogExportByAccountId()`

```php
postApiExternalV2AccountBrandCatalogExportByAccountId($account_id, $value_resource_input_of_brand_catalog_request_v2): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfCatalogStatusV2
```



Create a request for a Catalog available to the indicated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the catalog for.
$value_resource_input_of_brand_catalog_request_v2 = new \criteo\api\retailmedia\preview\Model\ValueResourceInputOfBrandCatalogRequestV2(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputOfBrandCatalogRequestV2

try {
    $result = $apiInstance->postApiExternalV2AccountBrandCatalogExportByAccountId($account_id, $value_resource_input_of_brand_catalog_request_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiExternalV2AccountBrandCatalogExportByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to request the catalog for. | |
| **value_resource_input_of_brand_catalog_request_v2** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputOfBrandCatalogRequestV2**](../Model/ValueResourceInputOfBrandCatalogRequestV2.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfCatalogStatusV2**](../Model/EntityResourceOutcomeOfCatalogStatusV2.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiExternalV2AccountSellerCatalogExportByAccountId()`

```php
postApiExternalV2AccountSellerCatalogExportByAccountId($account_id, $value_resource_input_of_seller_catalog_request_v2): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfCatalogStatusV2
```



Create a request for a Catalog available to the indicated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the catalog for.
$value_resource_input_of_seller_catalog_request_v2 = new \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSellerCatalogRequestV2(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSellerCatalogRequestV2

try {
    $result = $apiInstance->postApiExternalV2AccountSellerCatalogExportByAccountId($account_id, $value_resource_input_of_seller_catalog_request_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiExternalV2AccountSellerCatalogExportByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to request the catalog for. | |
| **value_resource_input_of_seller_catalog_request_v2** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputOfSellerCatalogRequestV2**](../Model/ValueResourceInputOfSellerCatalogRequestV2.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfCatalogStatusV2**](../Model/EntityResourceOutcomeOfCatalogStatusV2.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiExternalV2CampaignPreferredLineItemsByCampaignId()`

```php
postApiExternalV2CampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model_v2_request)
```



Creates a new preferred line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$preferred_line_item_create_model_v2_request = new \criteo\api\retailmedia\preview\Model\PreferredLineItemCreateModelV2Request(); // \criteo\api\retailmedia\preview\Model\PreferredLineItemCreateModelV2Request | The line item settings to create a line item with

try {
    $apiInstance->postApiExternalV2CampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model_v2_request);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiExternalV2CampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **preferred_line_item_create_model_v2_request** | [**\criteo\api\retailmedia\preview\Model\PreferredLineItemCreateModelV2Request**](../Model/PreferredLineItemCreateModelV2Request.md)| The line item settings to create a line item with | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalCatalogsSkuRetrieval()`

```php
postApiV1ExternalCatalogsSkuRetrieval($page_index, $page_size, $request_body): \criteo\api\retailmedia\preview\Model\SkuDataPreviewListResponse
```



Endpoint to search skus by text, retailer and sellers/brands.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_index = 0; // int | The start position in the overall list of matches. Must be zero or greater.
$page_size = 100; // int | The maximum number of results to return with each call. Must be greater than zero.
$request_body = array('request_body_example'); // string[] | The list of SKU keys to retrieve sku information

try {
    $result = $apiInstance->postApiV1ExternalCatalogsSkuRetrieval($page_index, $page_size, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalCatalogsSkuRetrieval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_index** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of results to return with each call. Must be greater than zero. | [optional] [default to 100] |
| **request_body** | [**string[]**](../Model/string.md)| The list of SKU keys to retrieve sku information | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\SkuDataPreviewListResponse**](../Model/SkuDataPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalCatalogsSkuSearch()`

```php
postApiV1ExternalCatalogsSkuSearch($page_index, $page_size, $sku_search_request_preview_request): \criteo\api\retailmedia\preview\Model\SkuDataPreviewListResponse
```



Endpoint to search skus by text, retailer and sellers/brands.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_index = 0; // int | The start position in the overall list of matches. Must be zero or greater.
$page_size = 100; // int | The maximum number of results to return with each call. Must be greater than zero.
$sku_search_request_preview_request = new \criteo\api\retailmedia\preview\Model\SkuSearchRequestPreviewRequest(); // \criteo\api\retailmedia\preview\Model\SkuSearchRequestPreviewRequest | 

try {
    $result = $apiInstance->postApiV1ExternalCatalogsSkuSearch($page_index, $page_size, $sku_search_request_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalCatalogsSkuSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_index** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of results to return with each call. Must be greater than zero. | [optional] [default to 100] |
| **sku_search_request_preview_request** | [**\criteo\api\retailmedia\preview\Model\SkuSearchRequestPreviewRequest**](../Model/SkuSearchRequestPreviewRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\SkuDataPreviewListResponse**](../Model/SkuDataPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalAccountCreativesByAccountId()`

```php
postApiV2ExternalAccountCreativesByAccountId($account_id, $creative_create_model2): \criteo\api\retailmedia\preview\Model\Creative2Response
```



Create a creative for an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to create a creative for
$creative_create_model2 = new \criteo\api\retailmedia\preview\Model\CreativeCreateModel2(); // \criteo\api\retailmedia\preview\Model\CreativeCreateModel2 | The creative to create

try {
    $result = $apiInstance->postApiV2ExternalAccountCreativesByAccountId($account_id, $creative_create_model2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV2ExternalAccountCreativesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to create a creative for | |
| **creative_create_model2** | [**\criteo\api\retailmedia\preview\Model\CreativeCreateModel2**](../Model/CreativeCreateModel2.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\Creative2Response**](../Model/Creative2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalAccountCreativesSearchByAccountId()`

```php
postApiV2ExternalAccountCreativesSearchByAccountId($account_id, $creative_ids): \criteo\api\retailmedia\preview\Model\Creative2ListResponse
```



Get account creatives

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for
$creative_ids = array('creative_ids_example'); // string[] | Creatives to filter by

try {
    $result = $apiInstance->postApiV2ExternalAccountCreativesSearchByAccountId($account_id, $creative_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV2ExternalAccountCreativesSearchByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to retrieve creatives for | |
| **creative_ids** | [**string[]**](../Model/string.md)| Creatives to filter by | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\Creative2ListResponse**](../Model/Creative2ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId()`

```php
putApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId($line_item_id, $product_button_id, $product_button_request_request): \criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse
```



Update Specific Product Button

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | External LineItemId for productButton update
$product_button_id = 'product_button_id_example'; // string | productButtonId used for update
$product_button_request_request = new \criteo\api\retailmedia\preview\Model\ProductButtonRequestRequest(); // \criteo\api\retailmedia\preview\Model\ProductButtonRequestRequest | Specific Product button update info

try {
    $result = $apiInstance->putApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId($line_item_id, $product_button_id, $product_button_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiExternalV1LineItemByLineItemIdProductButtonsproductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| External LineItemId for productButton update | |
| **product_button_id** | **string**| productButtonId used for update | |
| **product_button_request_request** | [**\criteo\api\retailmedia\preview\Model\ProductButtonRequestRequest**](../Model/ProductButtonRequestRequest.md)| Specific Product button update info | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiExternalV2PreferredLineItemByLineItemId()`

```php
putApiExternalV2PreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model_v2_request): \criteo\api\retailmedia\preview\Model\PreferredLineItemV2Response
```



Updates the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$preferred_line_item_update_model_v2_request = new \criteo\api\retailmedia\preview\Model\PreferredLineItemUpdateModelV2Request(); // \criteo\api\retailmedia\preview\Model\PreferredLineItemUpdateModelV2Request | The line item settings to create a line item with

try {
    $result = $apiInstance->putApiExternalV2PreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiExternalV2PreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |
| **preferred_line_item_update_model_v2_request** | [**\criteo\api\retailmedia\preview\Model\PreferredLineItemUpdateModelV2Request**](../Model/PreferredLineItemUpdateModelV2Request.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\PreferredLineItemV2Response**](../Model/PreferredLineItemV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV2ExternalAccountByAccountIdCreativescreativeId()`

```php
putApiV2ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id, $creative_update_model2): \criteo\api\retailmedia\preview\Model\Creative2Response
```



Update a creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id containing the creative
$creative_id = 'creative_id_example'; // string | Creative to update
$creative_update_model2 = new \criteo\api\retailmedia\preview\Model\CreativeUpdateModel2(); // \criteo\api\retailmedia\preview\Model\CreativeUpdateModel2 | The creative to create

try {
    $result = $apiInstance->putApiV2ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id, $creative_update_model2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV2ExternalAccountByAccountIdCreativescreativeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id containing the creative | |
| **creative_id** | **string**| Creative to update | |
| **creative_update_model2** | [**\criteo\api\retailmedia\preview\Model\CreativeUpdateModel2**](../Model/CreativeUpdateModel2.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\Creative2Response**](../Model/Creative2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recommendedKeywords()`

```php
recommendedKeywords($retailer_id, $value_resource_input_recommended_keywords_request_v1): \criteo\api\retailmedia\preview\Model\ValueResourceOutcomeRecommendedKeywordsResponseV1
```



Recommend keywords by given retailer id and sku ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 'retailer_id_example'; // string | Retailer id.
$value_resource_input_recommended_keywords_request_v1 = new \criteo\api\retailmedia\preview\Model\ValueResourceInputRecommendedKeywordsRequestV1(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputRecommendedKeywordsRequestV1 | Request of recommended keywords.

try {
    $result = $apiInstance->recommendedKeywords($retailer_id, $value_resource_input_recommended_keywords_request_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->recommendedKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **string**| Retailer id. | |
| **value_resource_input_recommended_keywords_request_v1** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputRecommendedKeywordsRequestV1**](../Model/ValueResourceInputRecommendedKeywordsRequestV1.md)| Request of recommended keywords. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceOutcomeRecommendedKeywordsResponseV1**](../Model/ValueResourceOutcomeRecommendedKeywordsResponseV1.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchBrandsByNameAsyncV1()`

```php
searchBrandsByNameAsyncV1($limit, $offset, $value_resource_input_brand_id_search_request): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeBrandIdSearchResultPagingOffsetLimitMetadata
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


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | the number of brands to return
$offset = 0; // int | offset of paginated results
$value_resource_input_brand_id_search_request = new \criteo\api\retailmedia\preview\Model\ValueResourceInputBrandIdSearchRequest(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputBrandIdSearchRequest | BrandIdSearchRequest which contains the request parameters

try {
    $result = $apiInstance->searchBrandsByNameAsyncV1($limit, $offset, $value_resource_input_brand_id_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchBrandsByNameAsyncV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| the number of brands to return | [optional] [default to 25] |
| **offset** | **int**| offset of paginated results | [optional] [default to 0] |
| **value_resource_input_brand_id_search_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputBrandIdSearchRequest**](../Model/ValueResourceInputBrandIdSearchRequest.md)| BrandIdSearchRequest which contains the request parameters | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeBrandIdSearchResultPagingOffsetLimitMetadata**](../Model/EntityResourceCollectionOutcomeBrandIdSearchResultPagingOffsetLimitMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setKeywordBids()`

```php
setKeywordBids($id, $set_bids_model_request): \criteo\api\retailmedia\preview\Model\ResourceOutcome
```



Set bid overrides for associated keywords to the given line item in bulk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the line item
$set_bids_model_request = new \criteo\api\retailmedia\preview\Model\SetBidsModelRequest(); // \criteo\api\retailmedia\preview\Model\SetBidsModelRequest

try {
    $result = $apiInstance->setKeywordBids($id, $set_bids_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->setKeywordBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the line item | |
| **set_bids_model_request** | [**\criteo\api\retailmedia\preview\Model\SetBidsModelRequest**](../Model/SetBidsModelRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ResourceOutcome**](../Model/ResourceOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpausePromotedProducts()`

```php
unpausePromotedProducts($line_item_id, $promoted_product_resource_collection_input)
```



Un-pause a collection of promoted products associated with a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

try {
    $apiInstance->unpausePromotedProducts($line_item_id, $promoted_product_resource_collection_input);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->unpausePromotedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| ID of the line item | |
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\preview\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAuctionLineItemV2()`

```php
updateAuctionLineItemV2($line_item_id, $value_resource_input_of_sponsored_products_line_item_update_request_model): \criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfSponsoredProductsLineItem
```



Updates a Sponsored Products Line Item given a line item id and a request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The external line item ID of the sponsored products line item.
$value_resource_input_of_sponsored_products_line_item_update_request_model = new \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel | An update request containing all details of the requested update.

try {
    $result = $apiInstance->updateAuctionLineItemV2($line_item_id, $value_resource_input_of_sponsored_products_line_item_update_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateAuctionLineItemV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The external line item ID of the sponsored products line item. | |
| **value_resource_input_of_sponsored_products_line_item_update_request_model** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel**](../Model/ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel.md)| An update request containing all details of the requested update. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceOutcomeOfSponsoredProductsLineItem**](../Model/EntityResourceOutcomeOfSponsoredProductsLineItem.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateKeywordReviewsV1()`

```php
updateKeywordReviewsV1($line_item_id, $value_resource_input_retail_media_keywords_review): \criteo\api\retailmedia\preview\Model\ValueResourceOutcomeRetailMediaKeywordsReviewResult
```



Update the status of keyword reviews under a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 56; // int | The line item to update keyword review statuses for
$value_resource_input_retail_media_keywords_review = new \criteo\api\retailmedia\preview\Model\ValueResourceInputRetailMediaKeywordsReview(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputRetailMediaKeywordsReview | Request object containing a list of Phrase-ReviewState pairs to update

try {
    $result = $apiInstance->updateKeywordReviewsV1($line_item_id, $value_resource_input_retail_media_keywords_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateKeywordReviewsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **int**| The line item to update keyword review statuses for | |
| **value_resource_input_retail_media_keywords_review** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputRetailMediaKeywordsReview**](../Model/ValueResourceInputRetailMediaKeywordsReview.md)| Request object containing a list of Phrase-ReviewState pairs to update | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceOutcomeRetailMediaKeywordsReviewResult**](../Model/ValueResourceOutcomeRetailMediaKeywordsReviewResult.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
