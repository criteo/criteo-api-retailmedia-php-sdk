# criteo\api\retailmedia\v2025_04\CampaignApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRemoveKeywords()**](CampaignApi.md#addRemoveKeywords) | **POST** /2025-04/retail-media/line-items/{id}/keywords/add-remove |  |
| [**appendPromotedProducts()**](CampaignApi.md#appendPromotedProducts) | **POST** /2025-04/retail-media/line-items/{line-item-id}/products/append |  |
| [**createAsset()**](CampaignApi.md#createAsset) | **POST** /2025-04/retail-media/assets |  |
| [**deletePromotedProducts()**](CampaignApi.md#deletePromotedProducts) | **POST** /2025-04/retail-media/line-items/{line-item-id}/products/delete |  |
| [**fetchKeywords()**](CampaignApi.md#fetchKeywords) | **GET** /2025-04/retail-media/line-items/{id}/keywords |  |
| [**fetchPromotedProducts()**](CampaignApi.md#fetchPromotedProducts) | **GET** /2025-04/retail-media/line-items/{line-item-id}/products |  |
| [**getApi202110ExternalAccountCreativesByAccountId()**](CampaignApi.md#getApi202110ExternalAccountCreativesByAccountId) | **GET** /2025-04/retail-media/accounts/{account-id}/creatives |  |
| [**getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId) | **GET** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket |  |
| [**getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId) | **GET** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences |  |
| [**getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId) | **GET** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores |  |
| [**getApi202110ExternalRetailerPagesByRetailerId()**](CampaignApi.md#getApi202110ExternalRetailerPagesByRetailerId) | **GET** /2025-04/retail-media/retailers/{retailerId}/pages |  |
| [**getApi202204ExternalCategorieByCategoryId()**](CampaignApi.md#getApi202204ExternalCategorieByCategoryId) | **GET** /2025-04/retail-media/categories/{categoryId} |  |
| [**getApi202204ExternalCategories()**](CampaignApi.md#getApi202204ExternalCategories) | **GET** /2025-04/retail-media/categories |  |
| [**getApi202207ExternalRetailerByRetailerIdTemplatestemplateId()**](CampaignApi.md#getApi202207ExternalRetailerByRetailerIdTemplatestemplateId) | **GET** /2025-04/retail-media/retailers/{retailer-id}/templates/{template-id} |  |
| [**getApi202207ExternalRetailerTemplatesByRetailerId()**](CampaignApi.md#getApi202207ExternalRetailerTemplatesByRetailerId) | **GET** /2025-04/retail-media/retailers/{retailer-id}/templates |  |
| [**getApi202301ExternalAccountCampaignsByAccountId()**](CampaignApi.md#getApi202301ExternalAccountCampaignsByAccountId) | **GET** /2025-04/retail-media/accounts/{account-id}/campaigns |  |
| [**getApi202301ExternalCampaignByCampaignId()**](CampaignApi.md#getApi202301ExternalCampaignByCampaignId) | **GET** /2025-04/retail-media/campaigns/{campaignId} |  |
| [**getApiV1ExternalAccountBrandsByAccountId()**](CampaignApi.md#getApiV1ExternalAccountBrandsByAccountId) | **GET** /2025-04/retail-media/accounts/{accountId}/brands |  |
| [**getApiV1ExternalAccountRetailersByAccountId()**](CampaignApi.md#getApiV1ExternalAccountRetailersByAccountId) | **GET** /2025-04/retail-media/accounts/{accountId}/retailers |  |
| [**getApiV1ExternalCatalogOutputByCatalogId()**](CampaignApi.md#getApiV1ExternalCatalogOutputByCatalogId) | **GET** /2025-04/retail-media/catalogs/{catalogId}/output |  |
| [**getApiV1ExternalCatalogStatusByCatalogId()**](CampaignApi.md#getApiV1ExternalCatalogStatusByCatalogId) | **GET** /2025-04/retail-media/catalogs/{catalogId}/status |  |
| [**getApiV2ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#getApiV2ExternalAccountByAccountIdCreativescreativeId) | **GET** /2025-04/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**getApiV2ExternalAccountLineItemsByAccountId()**](CampaignApi.md#getApiV2ExternalAccountLineItemsByAccountId) | **GET** /2025-04/retail-media/accounts/{account-id}/line-items |  |
| [**getApiV2ExternalAuctionLineItemByLineItemId()**](CampaignApi.md#getApiV2ExternalAuctionLineItemByLineItemId) | **GET** /2025-04/retail-media/auction-line-items/{line-item-id} |  |
| [**getApiV2ExternalCampaignAuctionLineItemsByCampaignId()**](CampaignApi.md#getApiV2ExternalCampaignAuctionLineItemsByCampaignId) | **GET** /2025-04/retail-media/campaigns/{campaign-id}/auction-line-items |  |
| [**getApiV2ExternalCampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#getApiV2ExternalCampaignPreferredLineItemsByCampaignId) | **GET** /2025-04/retail-media/campaigns/{campaign-id}/preferred-line-items |  |
| [**getApiV2ExternalLineItemBidMultipliersByLineItemId()**](CampaignApi.md#getApiV2ExternalLineItemBidMultipliersByLineItemId) | **GET** /2025-04/retail-media/line-items/{line-item-id}/bid-multipliers |  |
| [**getApiV2ExternalLineItemByLineItemId()**](CampaignApi.md#getApiV2ExternalLineItemByLineItemId) | **GET** /2025-04/retail-media/line-items/{line-item-id} |  |
| [**getApiV2ExternalPreferredLineItemByLineItemId()**](CampaignApi.md#getApiV2ExternalPreferredLineItemByLineItemId) | **GET** /2025-04/retail-media/preferred-line-items/{line-item-id} |  |
| [**getCampaignBudgetOverrides()**](CampaignApi.md#getCampaignBudgetOverrides) | **GET** /2025-04/retail-media/campaigns/{campaignId}/campaign-budget-overrides |  |
| [**getCpcMinBidsBySkuIdsV1()**](CampaignApi.md#getCpcMinBidsBySkuIdsV1) | **POST** /2025-04/retail-media/retailers/{retailerId}/cpc-min-bids |  |
| [**getLineItemBudgetOverrides()**](CampaignApi.md#getLineItemBudgetOverrides) | **GET** /2025-04/retail-media/line-items/{lineItemId}/line-item-budget-overrides |  |
| [**getRecommendedKeywords()**](CampaignApi.md#getRecommendedKeywords) | **GET** /2025-04/retail-media/line-items/{externalLineItemId}/keywords/recommended |  |
| [**pausePromotedProducts()**](CampaignApi.md#pausePromotedProducts) | **POST** /2025-04/retail-media/line-items/{line-item-id}/products/pause |  |
| [**postApi202110ExternalBalanceCampaignsAppendByBalanceId()**](CampaignApi.md#postApi202110ExternalBalanceCampaignsAppendByBalanceId) | **POST** /2025-04/retail-media/balances/{balance-id}/campaigns/append |  |
| [**postApi202110ExternalBalanceCampaignsDeleteByBalanceId()**](CampaignApi.md#postApi202110ExternalBalanceCampaignsDeleteByBalanceId) | **POST** /2025-04/retail-media/balances/{balance-id}/campaigns/delete |  |
| [**postApi202110ExternalCampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#postApi202110ExternalCampaignPreferredLineItemsByCampaignId) | **POST** /2025-04/retail-media/campaigns/{campaign-id}/preferred-line-items |  |
| [**postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId) | **POST** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/append |  |
| [**postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId) | **POST** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/delete |  |
| [**postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId) | **POST** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/append |  |
| [**postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId) | **POST** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/delete |  |
| [**postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId) | **POST** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores/append |  |
| [**postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId) | **POST** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores/delete |  |
| [**postApi202210ExternalAccountCreativesByAccountId()**](CampaignApi.md#postApi202210ExternalAccountCreativesByAccountId) | **POST** /2025-04/retail-media/accounts/{account-id}/creatives |  |
| [**postApi202301ExternalAccountCampaignsByAccountId()**](CampaignApi.md#postApi202301ExternalAccountCampaignsByAccountId) | **POST** /2025-04/retail-media/accounts/{account-id}/campaigns |  |
| [**postApiV1ExternalAccountCatalogsByAccountId()**](CampaignApi.md#postApiV1ExternalAccountCatalogsByAccountId) | **POST** /2025-04/retail-media/accounts/{accountId}/catalogs |  |
| [**postApiV1ExternalAccountCatalogsSellersByAccountId()**](CampaignApi.md#postApiV1ExternalAccountCatalogsSellersByAccountId) | **POST** /2025-04/retail-media/accounts/{accountId}/catalogs/sellers |  |
| [**postApiV2ExternalAccountCreativesSearchByAccountId()**](CampaignApi.md#postApiV2ExternalAccountCreativesSearchByAccountId) | **POST** /2025-04/retail-media/accounts/{account-id}/creatives/search |  |
| [**postApiV2ExternalCampaignAuctionLineItemsByCampaignId()**](CampaignApi.md#postApiV2ExternalCampaignAuctionLineItemsByCampaignId) | **POST** /2025-04/retail-media/campaigns/{campaign-id}/auction-line-items |  |
| [**putApi202110ExternalPreferredLineItemByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemByLineItemId) | **PUT** /2025-04/retail-media/preferred-line-items/{line-item-id} |  |
| [**putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId) | **PUT** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket |  |
| [**putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId) | **PUT** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences |  |
| [**putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId) | **PUT** /2025-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores |  |
| [**putApi202210ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#putApi202210ExternalAccountByAccountIdCreativescreativeId) | **PUT** /2025-04/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**putApi202301ExternalCampaignByCampaignId()**](CampaignApi.md#putApi202301ExternalCampaignByCampaignId) | **PUT** /2025-04/retail-media/campaigns/{campaignId} |  |
| [**putApiV2ExternalAuctionLineItemByLineItemId()**](CampaignApi.md#putApiV2ExternalAuctionLineItemByLineItemId) | **PUT** /2025-04/retail-media/auction-line-items/{line-item-id} |  |
| [**putApiV2ExternalLineItemBidMultipliersByLineItemId()**](CampaignApi.md#putApiV2ExternalLineItemBidMultipliersByLineItemId) | **PUT** /2025-04/retail-media/line-items/{line-item-id}/bid-multipliers |  |
| [**setKeywordBids()**](CampaignApi.md#setKeywordBids) | **POST** /2025-04/retail-media/line-items/{id}/keywords/set-bid |  |
| [**unpausePromotedProducts()**](CampaignApi.md#unpausePromotedProducts) | **POST** /2025-04/retail-media/line-items/{line-item-id}/products/unpause |  |
| [**updateCampaignBudgetOverrides()**](CampaignApi.md#updateCampaignBudgetOverrides) | **PUT** /2025-04/retail-media/campaigns/{campaignId}/campaign-budget-overrides |  |
| [**updateLineItemBudgetOverrides()**](CampaignApi.md#updateLineItemBudgetOverrides) | **PUT** /2025-04/retail-media/line-items/{lineItemId}/line-item-budget-overrides |  |


## `addRemoveKeywords()`

```php
addRemoveKeywords($id, $add_remove_keywords_model_request): \criteo\api\retailmedia\v2025_04\Model\ResourceOutcome
```



Add or Remove keywords from the line item in bulk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the line item
$add_remove_keywords_model_request = new \criteo\api\retailmedia\v2025_04\Model\AddRemoveKeywordsModelRequest(); // \criteo\api\retailmedia\v2025_04\Model\AddRemoveKeywordsModelRequest

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
| **add_remove_keywords_model_request** | [**\criteo\api\retailmedia\v2025_04\Model\AddRemoveKeywordsModelRequest**](../Model/AddRemoveKeywordsModelRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ResourceOutcome**](../Model/ResourceOutcome.md)

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
appendPromotedProducts($line_item_id, $promoted_product_resource_collection_input): \criteo\api\retailmedia\v2025_04\Model\ProductResourceOutcome
```



Append a collection of promoted products to a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

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
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ProductResourceOutcome**](../Model/ProductResourceOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAsset()`

```php
createAsset($asset_file): \criteo\api\retailmedia\v2025_04\Model\AssetResponse
```



Creates an asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_file = "/path/to/file.txt"; // \SplFileObject | The asset binary content

try {
    $result = $apiInstance->createAsset($asset_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_file** | **\SplFileObject****\SplFileObject**| The asset binary content | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AssetResponse**](../Model/AssetResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
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
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

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
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

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
fetchKeywords($id): \criteo\api\retailmedia\v2025_04\Model\KeywordsModelResponse
```



Fetch keywords associated with the specified line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2025_04\Model\KeywordsModelResponse**](../Model/KeywordsModelResponse.md)

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
fetchPromotedProducts($line_item_id, $fields, $limit, $offset): \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionOutcome
```



Retrieve a page of promoted products for a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionOutcome**](../Model/PromotedProductResourceCollectionOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalAccountCreativesByAccountId()`

```php
getApi202110ExternalAccountCreativesByAccountId($account_id): \criteo\api\retailmedia\v2025_04\Model\Creative202110ListResponse
```



Get account creatives

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for

try {
    $result = $apiInstance->getApi202110ExternalAccountCreativesByAccountId($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalAccountCreativesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to retrieve creatives for | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\Creative202110ListResponse**](../Model/Creative202110ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()`

```php
getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id): \criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response
```



This endpoint gets the add to basket target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()`

```php
getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id): \criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response
```



This endpoint gets the audience target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()`

```php
getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id): \criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response
```



This endpoint gets the store target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalRetailerPagesByRetailerId()`

```php
getApi202110ExternalRetailerPagesByRetailerId($retailer_id): \criteo\api\retailmedia\v2025_04\Model\ExternalRetailerPages202110
```



Get the page types available for the given retailer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailers to fetch pages for

try {
    $result = $apiInstance->getApi202110ExternalRetailerPagesByRetailerId($retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalRetailerPagesByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailers to fetch pages for | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ExternalRetailerPages202110**](../Model/ExternalRetailerPages202110.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202204ExternalCategorieByCategoryId()`

```php
getApi202204ExternalCategorieByCategoryId($category_id): \criteo\api\retailmedia\v2025_04\Model\Category202204
```



Endpoint to search for a specific category by categoryId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | ID of the desired category

try {
    $result = $apiInstance->getApi202204ExternalCategorieByCategoryId($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202204ExternalCategorieByCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **int**| ID of the desired category | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\Category202204**](../Model/Category202204.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202204ExternalCategories()`

```php
getApi202204ExternalCategories($page_index, $page_size, $retailer_id, $text_substring): \criteo\api\retailmedia\v2025_04\Model\Category202204ListResponse
```



Endpoint to search categories by text and retailer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_index = 0; // int | The start position in the overall list of matches. Must be zero or greater.
$page_size = 100; // int | The maximum number of results to return with each call. Must be greater than zero.
$retailer_id = 56; // int | The retailer id for which Categories fetched
$text_substring = 'text_substring_example'; // string | Query string to search across Categories

try {
    $result = $apiInstance->getApi202204ExternalCategories($page_index, $page_size, $retailer_id, $text_substring);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202204ExternalCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_index** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of results to return with each call. Must be greater than zero. | [optional] [default to 100] |
| **retailer_id** | **int**| The retailer id for which Categories fetched | [optional] |
| **text_substring** | **string**| Query string to search across Categories | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\Category202204ListResponse**](../Model/Category202204ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202207ExternalRetailerByRetailerIdTemplatestemplateId()`

```php
getApi202207ExternalRetailerByRetailerIdTemplatestemplateId($retailer_id, $template_id): \criteo\api\retailmedia\v2025_04\Model\TemplateResponse
```



Gets the template for the specified retailer id and template id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | Retailer Id
$template_id = 56; // int | Template Id

try {
    $result = $apiInstance->getApi202207ExternalRetailerByRetailerIdTemplatestemplateId($retailer_id, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202207ExternalRetailerByRetailerIdTemplatestemplateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| Retailer Id | |
| **template_id** | **int**| Template Id | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\TemplateResponse**](../Model/TemplateResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202207ExternalRetailerTemplatesByRetailerId()`

```php
getApi202207ExternalRetailerTemplatesByRetailerId($retailer_id): \criteo\api\retailmedia\v2025_04\Model\TemplateListResponse
```



Get retailer creative templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | External retailer id to retrieve creative templates for

try {
    $result = $apiInstance->getApi202207ExternalRetailerTemplatesByRetailerId($retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202207ExternalRetailerTemplatesByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| External retailer id to retrieve creative templates for | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\TemplateListResponse**](../Model/TemplateListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202301ExternalAccountCampaignsByAccountId()`

```php
getApi202301ExternalAccountCampaignsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2025_04\Model\JsonApiPageResponseOfCampaignV202301
```



Get all the editable and creatable campaign attributes including all types of budgets for each campaigns in relation to the account id, limited by the campaign ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the campaign for.
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202301ExternalAccountCampaignsByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202301ExternalAccountCampaignsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to request the campaign for. | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiPageResponseOfCampaignV202301**](../Model/JsonApiPageResponseOfCampaignV202301.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202301ExternalCampaignByCampaignId()`

```php
getApi202301ExternalCampaignByCampaignId($campaign_id): \criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCampaignV202301
```



Get all the editable and creatable campaign attributes including all types of budgets given the campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign Id of the campaign detail

try {
    $result = $apiInstance->getApi202301ExternalCampaignByCampaignId($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202301ExternalCampaignByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign Id of the campaign detail | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCampaignV202301**](../Model/JsonApiSingleResponseOfCampaignV202301.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountBrandsByAccountId()`

```php
getApiV1ExternalAccountBrandsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2025_04\Model\JsonApiPageResponseOfBrand
```



Gets page of retailer objects that are associated with the given account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccountBrandsByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccountBrandsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The given account id | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiPageResponseOfBrand**](../Model/JsonApiPageResponseOfBrand.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountRetailersByAccountId()`

```php
getApiV1ExternalAccountRetailersByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2025_04\Model\JsonApiPageResponseOfRetailer
```



Gets page of retailer objects that are associated with the given account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccountRetailersByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccountRetailersByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The given account id | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiPageResponseOfRetailer**](../Model/JsonApiPageResponseOfRetailer.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCatalogOutputByCatalogId()`

```php
getApiV1ExternalCatalogOutputByCatalogId($catalog_id): \SplFileObject
```



Output the indicated catalog. Catalogs are only available for retrieval when their associated status request  is at a Success status.  Produces application/x-json-stream of v2021_07 CatalogProduct json objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | A catalog ID returned from an account catalog request.

try {
    $result = $apiInstance->getApiV1ExternalCatalogOutputByCatalogId($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCatalogOutputByCatalogId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| A catalog ID returned from an account catalog request. | |

### Return type

**\SplFileObject**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/x-json-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCatalogStatusByCatalogId()`

```php
getApiV1ExternalCatalogStatusByCatalogId($catalog_id): \criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCatalogStatus
```



Check the status of a catalog request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | A catalog ID returned from an account catalog request.

try {
    $result = $apiInstance->getApiV1ExternalCatalogStatusByCatalogId($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCatalogStatusByCatalogId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| A catalog ID returned from an account catalog request. | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

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
getApiV2ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id): \criteo\api\retailmedia\v2025_04\Model\Creative2Response
```



Get the specified creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2025_04\Model\Creative2Response**](../Model/Creative2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAccountLineItemsByAccountId()`

```php
getApiV2ExternalAccountLineItemsByAccountId($account_id, $limit_to_campaign_id, $limit_to_id, $limit_to_type, $page_index, $page_size): \criteo\api\retailmedia\v2025_04\Model\CommonLineItemPagedListResponse
```



Gets page of line item objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_campaign_id = array('limit_to_campaign_id_example'); // string[] | The campaign ids that you would like to limit your result set to
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$limit_to_type = 'limit_to_type_example'; // string | The campaign types that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV2ExternalAccountLineItemsByAccountId($account_id, $limit_to_campaign_id, $limit_to_id, $limit_to_type, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalAccountLineItemsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The given account id | |
| **limit_to_campaign_id** | [**string[]**](../Model/string.md)| The campaign ids that you would like to limit your result set to | [optional] |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **limit_to_type** | **string**| The campaign types that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\CommonLineItemPagedListResponse**](../Model/CommonLineItemPagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAuctionLineItemByLineItemId()`

```php
getApiV2ExternalAuctionLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemResponse
```



Gets the auction line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApiV2ExternalAuctionLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalAuctionLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalCampaignAuctionLineItemsByCampaignId()`

```php
getApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemPagedListResponse
```



Gets page of auction line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalCampaignAuctionLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AuctionLineItemPagedListResponse**](../Model/AuctionLineItemPagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalCampaignPreferredLineItemsByCampaignId()`

```php
getApiV2ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2PagedListResponse
```



Gets page of preferred line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV2ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalCampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2PagedListResponse**](../Model/PreferredLineItemV2PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalLineItemBidMultipliersByLineItemId()`

```php
getApiV2ExternalLineItemBidMultipliersByLineItemId($line_item_id): \criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfLineItemBidMultipliersV2
```



Fetch all bid multipliers for a given line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | External LineItemId for bid multiplier retrieval

try {
    $result = $apiInstance->getApiV2ExternalLineItemBidMultipliersByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalLineItemBidMultipliersByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| External LineItemId for bid multiplier retrieval | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfLineItemBidMultipliersV2**](../Model/JsonApiSingleResponseOfLineItemBidMultipliersV2.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalLineItemByLineItemId()`

```php
getApiV2ExternalLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2025_04\Model\CommonLineItemResponse
```



Gets the line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApiV2ExternalLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\CommonLineItemResponse**](../Model/CommonLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalPreferredLineItemByLineItemId()`

```php
getApiV2ExternalPreferredLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2Response
```



Gets the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApiV2ExternalPreferredLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalPreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2Response**](../Model/PreferredLineItemV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignBudgetOverrides()`

```php
getCampaignBudgetOverrides($campaign_id): \criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfCampaignBudgetOverrides
```



Get current campaign budget overrides by given campaign id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign id.

try {
    $result = $apiInstance->getCampaignBudgetOverrides($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignBudgetOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Campaign id. | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfCampaignBudgetOverrides**](../Model/ValueResourceOutcomeOfCampaignBudgetOverrides.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCpcMinBidsBySkuIdsV1()`

```php
getCpcMinBidsBySkuIdsV1($retailer_id, $value_resource_input_cpc_min_bids_request): \criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeCpcMinBidsResponse
```



Get overall and individual minimum bid amount for given retailer id and sku id list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | Retailer Id.
$value_resource_input_cpc_min_bids_request = new \criteo\api\retailmedia\v2025_04\Model\ValueResourceInputCpcMinBidsRequest(); // \criteo\api\retailmedia\v2025_04\Model\ValueResourceInputCpcMinBidsRequest | Cpc minimum bid amount request object.

try {
    $result = $apiInstance->getCpcMinBidsBySkuIdsV1($retailer_id, $value_resource_input_cpc_min_bids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCpcMinBidsBySkuIdsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| Retailer Id. | |
| **value_resource_input_cpc_min_bids_request** | [**\criteo\api\retailmedia\v2025_04\Model\ValueResourceInputCpcMinBidsRequest**](../Model/ValueResourceInputCpcMinBidsRequest.md)| Cpc minimum bid amount request object. | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeCpcMinBidsResponse**](../Model/ValueResourceOutcomeCpcMinBidsResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLineItemBudgetOverrides()`

```php
getLineItemBudgetOverrides($line_item_id): \criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfLineItemBudgetOverrides
```



Gets a collection of monthly and daily budget overrides for the provided line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item id to get budget overrides for.

try {
    $result = $apiInstance->getLineItemBudgetOverrides($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getLineItemBudgetOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item id to get budget overrides for. | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfLineItemBudgetOverrides**](../Model/ValueResourceOutcomeOfLineItemBudgetOverrides.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecommendedKeywords()`

```php
getRecommendedKeywords($external_line_item_id): \criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfRecommendedKeywordsResult
```



Retrieves a collection of recommended keywords for a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_line_item_id = 'external_line_item_id_example'; // string | The line item identifier

try {
    $result = $apiInstance->getRecommendedKeywords($external_line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getRecommendedKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_line_item_id** | **string**| The line item identifier | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfRecommendedKeywordsResult**](../Model/ValueResourceOutcomeOfRecommendedKeywordsResult.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

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
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

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

## `postApi202110ExternalBalanceCampaignsAppendByBalanceId()`

```php
postApi202110ExternalBalanceCampaignsAppendByBalanceId($balance_id, $balance_campaign202110_list_request): \criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110PagedListResponse
```



appends one or more campaigns to the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to add campaigns from
$balance_campaign202110_list_request = new \criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110ListRequest(); // \criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110ListRequest | The campaigns to append

try {
    $result = $apiInstance->postApi202110ExternalBalanceCampaignsAppendByBalanceId($balance_id, $balance_campaign202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalBalanceCampaignsAppendByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| The balance to add campaigns from | |
| **balance_campaign202110_list_request** | [**\criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110ListRequest**](../Model/BalanceCampaign202110ListRequest.md)| The campaigns to append | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalBalanceCampaignsDeleteByBalanceId()`

```php
postApi202110ExternalBalanceCampaignsDeleteByBalanceId($balance_id, $balance_campaign202110_list_request): \criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110PagedListResponse
```



Removes one or more campaigns on the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to remove campaigns from
$balance_campaign202110_list_request = new \criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110ListRequest(); // \criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110ListRequest | The campaigns to append

try {
    $result = $apiInstance->postApi202110ExternalBalanceCampaignsDeleteByBalanceId($balance_id, $balance_campaign202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalBalanceCampaignsDeleteByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| The balance to remove campaigns from | |
| **balance_campaign202110_list_request** | [**\criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110ListRequest**](../Model/BalanceCampaign202110ListRequest.md)| The campaigns to append | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalCampaignPreferredLineItemsByCampaignId()`

```php
postApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model_v2_request): \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2Response
```



Creates a new preferred line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$preferred_line_item_create_model_v2_request = new \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemCreateModelV2Request(); // \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemCreateModelV2Request | The line item settings to create a line item with

try {
    $result = $apiInstance->postApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalCampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **preferred_line_item_create_model_v2_request** | [**\criteo\api\retailmedia\v2025_04\Model\PreferredLineItemCreateModelV2Request**](../Model/PreferredLineItemCreateModelV2Request.md)| The line item settings to create a line item with | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2Response**](../Model/PreferredLineItemV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request): \criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response
```



This endpoint appends one or more add to basket ids to targeting on the specified line item.  The resulting state of the add to basket target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_ids_update_model202110_request = new \criteo\api\retailmedia\v2025_04\Model\AddToBasketIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2025_04\Model\AddToBasketIdsUpdateModel202110Request | Ids to append to the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **add_to_basket_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\AddToBasketIdsUpdateModel202110Request**](../Model/AddToBasketIdsUpdateModel202110Request.md)| Ids to append to the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request): \criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response
```



This endpoint removes one or more add to basket ids from targeting on the specified line item.  The resulting state of the add to basket target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_ids_update_model202110_request = new \criteo\api\retailmedia\v2025_04\Model\AddToBasketIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2025_04\Model\AddToBasketIdsUpdateModel202110Request | Ids to remove from the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **add_to_basket_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\AddToBasketIdsUpdateModel202110Request**](../Model/AddToBasketIdsUpdateModel202110Request.md)| Ids to remove from the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId($line_item_id, $audience_ids_update_model202110_request): \criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response
```



This endpoint appends one or more audiences ids to targeting on the specified line item.  The resulting state of the audience target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_ids_update_model202110_request = new \criteo\api\retailmedia\v2025_04\Model\AudienceIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2025_04\Model\AudienceIdsUpdateModel202110Request | Audience ids to append to the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId($line_item_id, $audience_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **audience_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\AudienceIdsUpdateModel202110Request**](../Model/AudienceIdsUpdateModel202110Request.md)| Audience ids to append to the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId($line_item_id, $audience_ids_update_model202110_request): \criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response
```



This endpoint removes one or more audiences ids from targeting on the specified line item.  The resulting state of the audience target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_ids_update_model202110_request = new \criteo\api\retailmedia\v2025_04\Model\AudienceIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2025_04\Model\AudienceIdsUpdateModel202110Request | Audience ids to remove from the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId($line_item_id, $audience_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **audience_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\AudienceIdsUpdateModel202110Request**](../Model/AudienceIdsUpdateModel202110Request.md)| Audience ids to remove from the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId($line_item_id, $store_ids_update_model202110_request): \criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response
```



This endpoint appends one or more store ids to targeting on the specified line item.  The resulting state of the store target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_ids_update_model202110_request = new \criteo\api\retailmedia\v2025_04\Model\StoreIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2025_04\Model\StoreIdsUpdateModel202110Request | Store ids to append to the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId($line_item_id, $store_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **store_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\StoreIdsUpdateModel202110Request**](../Model/StoreIdsUpdateModel202110Request.md)| Store ids to append to the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId($line_item_id, $store_ids_update_model202110_request): \criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response
```



This endpoint removes one or more store ids from targeting on the specified line item.  The resulting state of the store target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_ids_update_model202110_request = new \criteo\api\retailmedia\v2025_04\Model\StoreIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2025_04\Model\StoreIdsUpdateModel202110Request | Store ids to remove from the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId($line_item_id, $store_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **store_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\StoreIdsUpdateModel202110Request**](../Model/StoreIdsUpdateModel202110Request.md)| Store ids to remove from the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202210ExternalAccountCreativesByAccountId()`

```php
postApi202210ExternalAccountCreativesByAccountId($account_id, $creative_create_model202207): \criteo\api\retailmedia\v2025_04\Model\Creative202210Response
```



Create a creative for an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to create a creative for
$creative_create_model202207 = new \criteo\api\retailmedia\v2025_04\Model\CreativeCreateModel202207(); // \criteo\api\retailmedia\v2025_04\Model\CreativeCreateModel202207 | The creative to create

try {
    $result = $apiInstance->postApi202210ExternalAccountCreativesByAccountId($account_id, $creative_create_model202207);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202210ExternalAccountCreativesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to create a creative for | |
| **creative_create_model202207** | [**\criteo\api\retailmedia\v2025_04\Model\CreativeCreateModel202207**](../Model/CreativeCreateModel202207.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\Creative202210Response**](../Model/Creative202210Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202301ExternalAccountCampaignsByAccountId()`

```php
postApi202301ExternalAccountCampaignsByAccountId($account_id, $post_campaign_v202301): \criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCampaignV202301
```



Create a campaign and assign budgets for the given account id with creatable campaign attributes given in request body constrained by business validation. The validation error includes details and source of errors. Pacing can be adjusted and affected by the status of the campaign and the days left on the campaign if auto daily pacing is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the campaign for.
$post_campaign_v202301 = new \criteo\api\retailmedia\v2025_04\Model\PostCampaignV202301(); // \criteo\api\retailmedia\v2025_04\Model\PostCampaignV202301 | Creatable campaign attributes

try {
    $result = $apiInstance->postApi202301ExternalAccountCampaignsByAccountId($account_id, $post_campaign_v202301);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202301ExternalAccountCampaignsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to request the campaign for. | |
| **post_campaign_v202301** | [**\criteo\api\retailmedia\v2025_04\Model\PostCampaignV202301**](../Model/PostCampaignV202301.md)| Creatable campaign attributes | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCampaignV202301**](../Model/JsonApiSingleResponseOfCampaignV202301.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountCatalogsByAccountId()`

```php
postApiV1ExternalAccountCatalogsByAccountId($account_id, $json_api_request_of_catalog_request): \criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCatalogStatus
```



Create a request for a Catalog available to the indicated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the catalog for.
$json_api_request_of_catalog_request = new \criteo\api\retailmedia\v2025_04\Model\JsonApiRequestOfCatalogRequest(); // \criteo\api\retailmedia\v2025_04\Model\JsonApiRequestOfCatalogRequest

try {
    $result = $apiInstance->postApiV1ExternalAccountCatalogsByAccountId($account_id, $json_api_request_of_catalog_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalAccountCatalogsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to request the catalog for. | |
| **json_api_request_of_catalog_request** | [**\criteo\api\retailmedia\v2025_04\Model\JsonApiRequestOfCatalogRequest**](../Model/JsonApiRequestOfCatalogRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountCatalogsSellersByAccountId()`

```php
postApiV1ExternalAccountCatalogsSellersByAccountId($account_id, $json_api_request_of_seller_catalog_request): \criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCatalogStatus
```



Create a request for a Catalog available to the indicated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the catalog for.
$json_api_request_of_seller_catalog_request = new \criteo\api\retailmedia\v2025_04\Model\JsonApiRequestOfSellerCatalogRequest(); // \criteo\api\retailmedia\v2025_04\Model\JsonApiRequestOfSellerCatalogRequest

try {
    $result = $apiInstance->postApiV1ExternalAccountCatalogsSellersByAccountId($account_id, $json_api_request_of_seller_catalog_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalAccountCatalogsSellersByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to request the catalog for. | |
| **json_api_request_of_seller_catalog_request** | [**\criteo\api\retailmedia\v2025_04\Model\JsonApiRequestOfSellerCatalogRequest**](../Model/JsonApiRequestOfSellerCatalogRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

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
postApiV2ExternalAccountCreativesSearchByAccountId($account_id, $creative_ids): \criteo\api\retailmedia\v2025_04\Model\Creative2ListResponse
```



Get account creatives

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2025_04\Model\Creative2ListResponse**](../Model/Creative2ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalCampaignAuctionLineItemsByCampaignId()`

```php
postApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $auction_line_item_create_model_request): \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemResponse
```



Creates new auction line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$auction_line_item_create_model_request = new \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemCreateModelRequest(); // \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemCreateModelRequest | The line item settings to create a line item with

try {
    $result = $apiInstance->postApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $auction_line_item_create_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV2ExternalCampaignAuctionLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **auction_line_item_create_model_request** | [**\criteo\api\retailmedia\v2025_04\Model\AuctionLineItemCreateModelRequest**](../Model/AuctionLineItemCreateModelRequest.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemByLineItemId()`

```php
putApi202110ExternalPreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model_v2_request): \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2Response
```



Updates the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$preferred_line_item_update_model_v2_request = new \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemUpdateModelV2Request(); // \criteo\api\retailmedia\v2025_04\Model\PreferredLineItemUpdateModelV2Request | The line item settings to create a line item with

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |
| **preferred_line_item_update_model_v2_request** | [**\criteo\api\retailmedia\v2025_04\Model\PreferredLineItemUpdateModelV2Request**](../Model/PreferredLineItemUpdateModelV2Request.md)| The line item settings to create a line item with | |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\PreferredLineItemV2Response**](../Model/PreferredLineItemV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()`

```php
putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id, $add_to_basket_target202110_request): \criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response
```



This endpoint sets the scope of the add to basket target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_target202110_request = new \criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Request(); // \criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Request | The add to basket target to set the scope for

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id, $add_to_basket_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **add_to_basket_target202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Request**](../Model/AddToBasketTarget202110Request.md)| The add to basket target to set the scope for | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()`

```php
putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id, $audience_target202110_request): \criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response
```



This endpoint sets the scope of the audience target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_target202110_request = new \criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Request(); // \criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Request | The audience target to set the scope for

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id, $audience_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **audience_target202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Request**](../Model/AudienceTarget202110Request.md)| The audience target to set the scope for | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()`

```php
putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id, $store_target202110_request): \criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response
```



This endpoint sets the scope of the store target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_target202110_request = new \criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Request(); // \criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Request | The store target to set the scope for

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id, $store_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **store_target202110_request** | [**\criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Request**](../Model/StoreTarget202110Request.md)| The store target to set the scope for | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202210ExternalAccountByAccountIdCreativescreativeId()`

```php
putApi202210ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id, $creative_update_model202207): \criteo\api\retailmedia\v2025_04\Model\Creative202210Response
```



Update a creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id containing the creative
$creative_id = 'creative_id_example'; // string | Creative to update
$creative_update_model202207 = new \criteo\api\retailmedia\v2025_04\Model\CreativeUpdateModel202207(); // \criteo\api\retailmedia\v2025_04\Model\CreativeUpdateModel202207 | The creative to create

try {
    $result = $apiInstance->putApi202210ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id, $creative_update_model202207);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202210ExternalAccountByAccountIdCreativescreativeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id containing the creative | |
| **creative_id** | **string**| Creative to update | |
| **creative_update_model202207** | [**\criteo\api\retailmedia\v2025_04\Model\CreativeUpdateModel202207**](../Model/CreativeUpdateModel202207.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\Creative202210Response**](../Model/Creative202210Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202301ExternalCampaignByCampaignId()`

```php
putApi202301ExternalCampaignByCampaignId($campaign_id, $put_campaign_v202301): \criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCampaignV202301
```



Edit a campaign for the given campaign id with a given editable attributes. This will return updated creatable and editable attributes of the campaign as the result of the operation. Pacing can be adjusted and affected by the status of the campaign and the days left on the campaign if auto daily pacing is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign Id of the updating campaign
$put_campaign_v202301 = new \criteo\api\retailmedia\v2025_04\Model\PutCampaignV202301(); // \criteo\api\retailmedia\v2025_04\Model\PutCampaignV202301 | Editable campaign attributes

try {
    $result = $apiInstance->putApi202301ExternalCampaignByCampaignId($campaign_id, $put_campaign_v202301);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202301ExternalCampaignByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign Id of the updating campaign | |
| **put_campaign_v202301** | [**\criteo\api\retailmedia\v2025_04\Model\PutCampaignV202301**](../Model/PutCampaignV202301.md)| Editable campaign attributes | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\JsonApiSingleResponseOfCampaignV202301**](../Model/JsonApiSingleResponseOfCampaignV202301.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV2ExternalAuctionLineItemByLineItemId()`

```php
putApiV2ExternalAuctionLineItemByLineItemId($line_item_id, $auction_line_item_update_model_request): \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemResponse
```



Updates the auction line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$auction_line_item_update_model_request = new \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemUpdateModelRequest(); // \criteo\api\retailmedia\v2025_04\Model\AuctionLineItemUpdateModelRequest | The line item settings to create a line item with

try {
    $result = $apiInstance->putApiV2ExternalAuctionLineItemByLineItemId($line_item_id, $auction_line_item_update_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV2ExternalAuctionLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |
| **auction_line_item_update_model_request** | [**\criteo\api\retailmedia\v2025_04\Model\AuctionLineItemUpdateModelRequest**](../Model/AuctionLineItemUpdateModelRequest.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV2ExternalLineItemBidMultipliersByLineItemId()`

```php
putApiV2ExternalLineItemBidMultipliersByLineItemId($line_item_id, $line_item_bid_multipliers_v2_request): \criteo\api\retailmedia\v2025_04\Model\LineItemBidMultipliersV2Response
```



Updates the bid multipliers for a given line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | External LineItemId for bid multiplier retrieval
$line_item_bid_multipliers_v2_request = new \criteo\api\retailmedia\v2025_04\Model\LineItemBidMultipliersV2Request(); // \criteo\api\retailmedia\v2025_04\Model\LineItemBidMultipliersV2Request | New Bid Multipliers to be set

try {
    $result = $apiInstance->putApiV2ExternalLineItemBidMultipliersByLineItemId($line_item_id, $line_item_bid_multipliers_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV2ExternalLineItemBidMultipliersByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| External LineItemId for bid multiplier retrieval | |
| **line_item_bid_multipliers_v2_request** | [**\criteo\api\retailmedia\v2025_04\Model\LineItemBidMultipliersV2Request**](../Model/LineItemBidMultipliersV2Request.md)| New Bid Multipliers to be set | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\LineItemBidMultipliersV2Response**](../Model/LineItemBidMultipliersV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setKeywordBids()`

```php
setKeywordBids($id, $set_bids_model_request): \criteo\api\retailmedia\v2025_04\Model\ResourceOutcome
```



Set bid overrides for associated keywords to the given line item in bulk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the line item
$set_bids_model_request = new \criteo\api\retailmedia\v2025_04\Model\SetBidsModelRequest(); // \criteo\api\retailmedia\v2025_04\Model\SetBidsModelRequest

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
| **set_bids_model_request** | [**\criteo\api\retailmedia\v2025_04\Model\SetBidsModelRequest**](../Model/SetBidsModelRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ResourceOutcome**](../Model/ResourceOutcome.md)

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
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | ID of the line item
$promoted_product_resource_collection_input = new \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput(); // \criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput | Request body whose {data} contains an array of promoted products.

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
| **promoted_product_resource_collection_input** | [**\criteo\api\retailmedia\v2025_04\Model\PromotedProductResourceCollectionInput**](../Model/PromotedProductResourceCollectionInput.md)| Request body whose {data} contains an array of promoted products. | [optional] |

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

## `updateCampaignBudgetOverrides()`

```php
updateCampaignBudgetOverrides($campaign_id, $value_resource_input_of_campaign_budget_overrides): \criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfCampaignBudgetOverrides
```



Update campaign budget overrides by given campaign id and new campaign budget overrides settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign id.
$value_resource_input_of_campaign_budget_overrides = new \criteo\api\retailmedia\v2025_04\Model\ValueResourceInputOfCampaignBudgetOverrides(); // \criteo\api\retailmedia\v2025_04\Model\ValueResourceInputOfCampaignBudgetOverrides | New campaign budget overrides settings value resource input.

try {
    $result = $apiInstance->updateCampaignBudgetOverrides($campaign_id, $value_resource_input_of_campaign_budget_overrides);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaignBudgetOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Campaign id. | |
| **value_resource_input_of_campaign_budget_overrides** | [**\criteo\api\retailmedia\v2025_04\Model\ValueResourceInputOfCampaignBudgetOverrides**](../Model/ValueResourceInputOfCampaignBudgetOverrides.md)| New campaign budget overrides settings value resource input. | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfCampaignBudgetOverrides**](../Model/ValueResourceOutcomeOfCampaignBudgetOverrides.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLineItemBudgetOverrides()`

```php
updateLineItemBudgetOverrides($line_item_id, $value_resource_input_of_line_item_budget_overrides): \criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfLineItemBudgetOverrides
```



Update line item budget overrides by given line item id and new line item budget overrides settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2025_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2025_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | Line item id.
$value_resource_input_of_line_item_budget_overrides = new \criteo\api\retailmedia\v2025_04\Model\ValueResourceInputOfLineItemBudgetOverrides(); // \criteo\api\retailmedia\v2025_04\Model\ValueResourceInputOfLineItemBudgetOverrides | New line item budget overrides settings value resource input.

try {
    $result = $apiInstance->updateLineItemBudgetOverrides($line_item_id, $value_resource_input_of_line_item_budget_overrides);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateLineItemBudgetOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Line item id. | |
| **value_resource_input_of_line_item_budget_overrides** | [**\criteo\api\retailmedia\v2025_04\Model\ValueResourceInputOfLineItemBudgetOverrides**](../Model/ValueResourceInputOfLineItemBudgetOverrides.md)| New line item budget overrides settings value resource input. | [optional] |

### Return type

[**\criteo\api\retailmedia\v2025_04\Model\ValueResourceOutcomeOfLineItemBudgetOverrides**](../Model/ValueResourceOutcomeOfLineItemBudgetOverrides.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
