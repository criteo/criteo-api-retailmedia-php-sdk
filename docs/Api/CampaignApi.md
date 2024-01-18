# criteo\api\retailmedia\v2023_04\CampaignApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRemoveKeywords()**](CampaignApi.md#addRemoveKeywords) | **POST** /2023-04/retail-media/line-items/{id}/keywords/add-remove |  |
| [**createAsset()**](CampaignApi.md#createAsset) | **POST** /2023-04/retail-media/assets |  |
| [**fetchKeywords()**](CampaignApi.md#fetchKeywords) | **GET** /2023-04/retail-media/line-items/{id}/keywords |  |
| [**fetchProposal()**](CampaignApi.md#fetchProposal) | **GET** /2023-04/retail-media/preferred-deal-line-items/{id}/proposal |  |
| [**getApi202110ExternalAccountBalancesByAccountId()**](CampaignApi.md#getApi202110ExternalAccountBalancesByAccountId) | **GET** /2023-04/retail-media/accounts/{account-id}/balances |  |
| [**getApi202110ExternalAccountCreativesByAccountId()**](CampaignApi.md#getApi202110ExternalAccountCreativesByAccountId) | **GET** /2023-04/retail-media/accounts/{account-id}/creatives |  |
| [**getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId()**](CampaignApi.md#getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId) | **GET** /2023-04/retail-media/auction-line-items/{line-item-id}/targeting/keywords |  |
| [**getApi202110ExternalBalanceCampaignsByBalanceId()**](CampaignApi.md#getApi202110ExternalBalanceCampaignsByBalanceId) | **GET** /2023-04/retail-media/balances/{balance-id}/campaigns |  |
| [**getApi202110ExternalCampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#getApi202110ExternalCampaignPreferredLineItemsByCampaignId) | **GET** /2023-04/retail-media/campaigns/{campaign-id}/preferred-line-items |  |
| [**getApi202110ExternalLineItemProductsByLineItemId()**](CampaignApi.md#getApi202110ExternalLineItemProductsByLineItemId) | **GET** /2023-04/retail-media/line-items/{line-item-id}/products |  |
| [**getApi202110ExternalPreferredLineItemByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemByLineItemId) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id} |  |
| [**getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket |  |
| [**getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences |  |
| [**getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores |  |
| [**getApi202110ExternalRetailerPagesByRetailerId()**](CampaignApi.md#getApi202110ExternalRetailerPagesByRetailerId) | **GET** /2023-04/retail-media/retailers/{retailerId}/pages |  |
| [**getApi202204ExternalCategorieByCategoryId()**](CampaignApi.md#getApi202204ExternalCategorieByCategoryId) | **GET** /2023-04/retail-media/categories/{categoryId} |  |
| [**getApi202204ExternalCategories()**](CampaignApi.md#getApi202204ExternalCategories) | **GET** /2023-04/retail-media/categories |  |
| [**getApi202207ExternalRetailerByRetailerIdTemplatestemplateId()**](CampaignApi.md#getApi202207ExternalRetailerByRetailerIdTemplatestemplateId) | **GET** /2023-04/retail-media/retailers/{retailer-id}/templates/{template-id} |  |
| [**getApi202207ExternalRetailerTemplatesByRetailerId()**](CampaignApi.md#getApi202207ExternalRetailerTemplatesByRetailerId) | **GET** /2023-04/retail-media/retailers/{retailer-id}/templates |  |
| [**getApi202210ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#getApi202210ExternalAccountByAccountIdCreativescreativeId) | **GET** /2023-04/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**getApi202301ExternalAccountCampaignsByAccountId()**](CampaignApi.md#getApi202301ExternalAccountCampaignsByAccountId) | **GET** /2023-04/retail-media/accounts/{account-id}/campaigns |  |
| [**getApi202301ExternalCampaignByCampaignId()**](CampaignApi.md#getApi202301ExternalCampaignByCampaignId) | **GET** /2023-04/retail-media/campaigns/{campaignId} |  |
| [**getApi202301ExternalLineItemBidMultipliersByLineItemId()**](CampaignApi.md#getApi202301ExternalLineItemBidMultipliersByLineItemId) | **GET** /2023-04/retail-media/line-items/{line-item-id}/bid-multipliers |  |
| [**getApiV1ExternalAccountBrandsByAccountId()**](CampaignApi.md#getApiV1ExternalAccountBrandsByAccountId) | **GET** /2023-04/retail-media/accounts/{accountId}/brands |  |
| [**getApiV1ExternalAccountRetailersByAccountId()**](CampaignApi.md#getApiV1ExternalAccountRetailersByAccountId) | **GET** /2023-04/retail-media/accounts/{accountId}/retailers |  |
| [**getApiV1ExternalAccounts()**](CampaignApi.md#getApiV1ExternalAccounts) | **GET** /2023-04/retail-media/accounts |  |
| [**getApiV1ExternalCatalogOutputByCatalogId()**](CampaignApi.md#getApiV1ExternalCatalogOutputByCatalogId) | **GET** /2023-04/retail-media/catalogs/{catalogId}/output |  |
| [**getApiV1ExternalCatalogStatusByCatalogId()**](CampaignApi.md#getApiV1ExternalCatalogStatusByCatalogId) | **GET** /2023-04/retail-media/catalogs/{catalogId}/status |  |
| [**getApiV2ExternalAccountLineItemsByAccountId()**](CampaignApi.md#getApiV2ExternalAccountLineItemsByAccountId) | **GET** /2023-04/retail-media/accounts/{account-id}/line-items |  |
| [**getApiV2ExternalAuctionLineItemByLineItemId()**](CampaignApi.md#getApiV2ExternalAuctionLineItemByLineItemId) | **GET** /2023-04/retail-media/auction-line-items/{line-item-id} |  |
| [**getApiV2ExternalCampaignAuctionLineItemsByCampaignId()**](CampaignApi.md#getApiV2ExternalCampaignAuctionLineItemsByCampaignId) | **GET** /2023-04/retail-media/campaigns/{campaign-id}/auction-line-items |  |
| [**getApiV2ExternalLineItemByLineItemId()**](CampaignApi.md#getApiV2ExternalLineItemByLineItemId) | **GET** /2023-04/retail-media/line-items/{line-item-id} |  |
| [**postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId) | **POST** /2023-04/retail-media/auction-line-items/{line-item-id}/targeting/keywords/append |  |
| [**postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId) | **POST** /2023-04/retail-media/auction-line-items/{line-item-id}/targeting/keywords/delete |  |
| [**postApi202110ExternalBalanceCampaignsAppendByBalanceId()**](CampaignApi.md#postApi202110ExternalBalanceCampaignsAppendByBalanceId) | **POST** /2023-04/retail-media/balances/{balance-id}/campaigns/append |  |
| [**postApi202110ExternalBalanceCampaignsDeleteByBalanceId()**](CampaignApi.md#postApi202110ExternalBalanceCampaignsDeleteByBalanceId) | **POST** /2023-04/retail-media/balances/{balance-id}/campaigns/delete |  |
| [**postApi202110ExternalCampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#postApi202110ExternalCampaignPreferredLineItemsByCampaignId) | **POST** /2023-04/retail-media/campaigns/{campaign-id}/preferred-line-items |  |
| [**postApi202110ExternalLineItemProductsAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalLineItemProductsAppendByLineItemId) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/append |  |
| [**postApi202110ExternalLineItemProductsDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalLineItemProductsDeleteByLineItemId) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/delete |  |
| [**postApi202110ExternalLineItemProductsPauseByLineItemId()**](CampaignApi.md#postApi202110ExternalLineItemProductsPauseByLineItemId) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/pause |  |
| [**postApi202110ExternalLineItemProductsUnpauseByLineItemId()**](CampaignApi.md#postApi202110ExternalLineItemProductsUnpauseByLineItemId) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/unpause |  |
| [**postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/append |  |
| [**postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/delete |  |
| [**postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/append |  |
| [**postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/delete |  |
| [**postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores/append |  |
| [**postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores/delete |  |
| [**postApi202210ExternalAccountCreativesByAccountId()**](CampaignApi.md#postApi202210ExternalAccountCreativesByAccountId) | **POST** /2023-04/retail-media/accounts/{account-id}/creatives |  |
| [**postApi202210ExternalAccountCreativesSearchByAccountId()**](CampaignApi.md#postApi202210ExternalAccountCreativesSearchByAccountId) | **POST** /2023-04/retail-media/accounts/{account-id}/creatives/search |  |
| [**postApi202301ExternalAccountCampaignsByAccountId()**](CampaignApi.md#postApi202301ExternalAccountCampaignsByAccountId) | **POST** /2023-04/retail-media/accounts/{account-id}/campaigns |  |
| [**postApiV1ExternalAccountCatalogsByAccountId()**](CampaignApi.md#postApiV1ExternalAccountCatalogsByAccountId) | **POST** /2023-04/retail-media/accounts/{accountId}/catalogs |  |
| [**postApiV2ExternalCampaignAuctionLineItemsByCampaignId()**](CampaignApi.md#postApiV2ExternalCampaignAuctionLineItemsByCampaignId) | **POST** /2023-04/retail-media/campaigns/{campaign-id}/auction-line-items |  |
| [**putApi202110ExternalPreferredLineItemByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemByLineItemId) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id} |  |
| [**putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket |  |
| [**putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences |  |
| [**putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores |  |
| [**putApi202210ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#putApi202210ExternalAccountByAccountIdCreativescreativeId) | **PUT** /2023-04/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**putApi202301ExternalCampaignByCampaignId()**](CampaignApi.md#putApi202301ExternalCampaignByCampaignId) | **PUT** /2023-04/retail-media/campaigns/{campaignId} |  |
| [**putApi202301ExternalLineItemBidMultipliersByLineItemId()**](CampaignApi.md#putApi202301ExternalLineItemBidMultipliersByLineItemId) | **PUT** /2023-04/retail-media/line-items/{line-item-id}/bid-multipliers |  |
| [**putApiV2ExternalAuctionLineItemByLineItemId()**](CampaignApi.md#putApiV2ExternalAuctionLineItemByLineItemId) | **PUT** /2023-04/retail-media/auction-line-items/{line-item-id} |  |
| [**setKeywordBids()**](CampaignApi.md#setKeywordBids) | **POST** /2023-04/retail-media/line-items/{id}/keywords/set-bid |  |
| [**submitProposal()**](CampaignApi.md#submitProposal) | **POST** /2023-04/retail-media/preferred-deal-line-items/{id}/proposal/submit |  |


## `addRemoveKeywords()`

```php
addRemoveKeywords($id, $retail_media_externalv1_add_remove_keywords_model_request): \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ResourceOutcome
```



Add or Remove keywords from the associated line item in bulk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Long external id of the associated line item
$retail_media_externalv1_add_remove_keywords_model_request = new \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1AddRemoveKeywordsModelRequest(); // \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1AddRemoveKeywordsModelRequest | Object containing keywords to be added or removed

try {
    $result = $apiInstance->addRemoveKeywords($id, $retail_media_externalv1_add_remove_keywords_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->addRemoveKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Long external id of the associated line item | |
| **retail_media_externalv1_add_remove_keywords_model_request** | [**\criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1AddRemoveKeywordsModelRequest**](../Model/RetailMediaExternalv1AddRemoveKeywordsModelRequest.md)| Object containing keywords to be added or removed | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ResourceOutcome**](../Model/RetailMediaExternalv1ResourceOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAsset()`

```php
createAsset($asset_file): \criteo\api\retailmedia\v2023_04\Model\AssetResponse
```



Creates an asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\AssetResponse**](../Model/AssetResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchKeywords()`

```php
fetchKeywords($id): \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1KeywordsModelResponse
```



Fetch keywords associated with the specified line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Long external id of the associated line item

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
| **id** | **string**| Long external id of the associated line item | |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1KeywordsModelResponse**](../Model/RetailMediaExternalv1KeywordsModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchProposal()`

```php
fetchProposal($id): \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ProposalStatusModelResponse
```



Fetch the status of a proposal to modify a Preferred Deal Line Item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The external id of a line item.

try {
    $result = $apiInstance->fetchProposal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->fetchProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The external id of a line item. | |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ProposalStatusModelResponse**](../Model/RetailMediaExternalv1ProposalStatusModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalAccountBalancesByAccountId()`

```php
getApi202110ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\Balance202110PagedListResponse
```



Gets page of balance objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to get balances for
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202110ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to get balances for | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\Balance202110PagedListResponse**](../Model/Balance202110PagedListResponse.md)

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
getApi202110ExternalAccountCreativesByAccountId($account_id): \criteo\api\retailmedia\v2023_04\Model\Creative202110ListResponse
```



Get account creatives

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\Creative202110ListResponse**](../Model/Creative202110ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId()`

```php
getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Response
```



This endpoint gets the keyword target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Response**](../Model/KeywordTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalBalanceCampaignsByBalanceId()`

```php
getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110PagedListResponse
```



Gets page of campaigns for the given balanceId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to get campaigns from
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalBalanceCampaignsByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| The balance to get campaigns from | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalCampaignPreferredLineItemsByCampaignId()`

```php
getApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110PagedListResponse
```



Gets page of preferred line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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
    $result = $apiInstance->getApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalCampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
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

[**\criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110PagedListResponse**](../Model/PreferredLineItem202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalLineItemProductsByLineItemId()`

```php
getApi202110ExternalLineItemProductsByLineItemId($line_item_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110PagedListResponse
```



This endpoint gets the promoted products on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202110ExternalLineItemProductsByLineItemId($line_item_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalLineItemProductsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110PagedListResponse**](../Model/PromotedProduct202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemByLineItemId()`

```php
getApi202110ExternalPreferredLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110Response
```



Gets the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110Response**](../Model/PreferredLineItem202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()`

```php
getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response
```



This endpoint gets the add to basket target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

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
getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response
```



This endpoint gets the audience target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

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
getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response
```



This endpoint gets the store target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

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
getApi202110ExternalRetailerPagesByRetailerId($retailer_id): \criteo\api\retailmedia\v2023_04\Model\ExternalRetailerPages202110
```



Get the page types available for the given retailer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\ExternalRetailerPages202110**](../Model/ExternalRetailerPages202110.md)

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
getApi202204ExternalCategorieByCategoryId($category_id): \criteo\api\retailmedia\v2023_04\Model\Category202204
```



Endpoint to search for a specific category by categoryId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\Category202204**](../Model/Category202204.md)

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
getApi202204ExternalCategories($retailer_id, $text_substring, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\Category202204ListResponse
```



Endpoint to search categories by text and retailer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailer id for which Categories fetched
$text_substring = 'text_substring_example'; // string | Query string to search across Categories
$page_index = 0; // int | The start position in the overall list of matches. Must be zero or greater.
$page_size = 100; // int | The maximum number of results to return with each call. Must be greater than zero.

try {
    $result = $apiInstance->getApi202204ExternalCategories($retailer_id, $text_substring, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202204ExternalCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailer id for which Categories fetched | [optional] |
| **text_substring** | **string**| Query string to search across Categories | [optional] |
| **page_index** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of results to return with each call. Must be greater than zero. | [optional] [default to 100] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\Category202204ListResponse**](../Model/Category202204ListResponse.md)

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
getApi202207ExternalRetailerByRetailerIdTemplatestemplateId($retailer_id, $template_id): \criteo\api\retailmedia\v2023_04\Model\TemplateResponse
```



Gets the template for the specified retailer id and template id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\TemplateResponse**](../Model/TemplateResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202207ExternalRetailerTemplatesByRetailerId()`

```php
getApi202207ExternalRetailerTemplatesByRetailerId($retailer_id): \criteo\api\retailmedia\v2023_04\Model\TemplateListResponse
```



Get retailer creative templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\TemplateListResponse**](../Model/TemplateListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202210ExternalAccountByAccountIdCreativescreativeId()`

```php
getApi202210ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id): \criteo\api\retailmedia\v2023_04\Model\Creative202210Response
```



Get the specified creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for
$creative_id = 'creative_id_example'; // string | Creative to get

try {
    $result = $apiInstance->getApi202210ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202210ExternalAccountByAccountIdCreativescreativeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to retrieve creatives for | |
| **creative_id** | **string**| Creative to get | |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\Creative202210Response**](../Model/Creative202210Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202301ExternalAccountCampaignsByAccountId()`

```php
getApi202301ExternalAccountCampaignsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfCampaignV202301
```



Get all the editable and creatable campaign attributes including all types of budgets for each campaigns in relation to the account id, limited by the campaign ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfCampaignV202301**](../Model/JsonApiPageResponseOfCampaignV202301.md)

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
getApi202301ExternalCampaignByCampaignId($campaign_id): \criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCampaignV202301
```



Get all the editable and creatable campaign attributes including all types of budgets given the campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCampaignV202301**](../Model/JsonApiSingleResponseOfCampaignV202301.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202301ExternalLineItemBidMultipliersByLineItemId()`

```php
getApi202301ExternalLineItemBidMultipliersByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfLineItemBidMultipliers
```



Get bid multipliers by line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item

try {
    $result = $apiInstance->getApi202301ExternalLineItemBidMultipliersByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202301ExternalLineItemBidMultipliersByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Long external id of the associated line item | |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfLineItemBidMultipliers**](../Model/JsonApiSingleResponseOfLineItemBidMultipliers.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountBrandsByAccountId()`

```php
getApiV1ExternalAccountBrandsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfBrand
```



Gets page of retailer objects that are associated with the given account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

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
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfBrand**](../Model/JsonApiPageResponseOfBrand.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountRetailersByAccountId()`

```php
getApiV1ExternalAccountRetailersByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfRetailer
```



Gets page of retailer objects that are associated with the given account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

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
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfRetailer**](../Model/JsonApiPageResponseOfRetailer.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccounts()`

```php
getApiV1ExternalAccounts($limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfAccount
```



Gets page of account objects that the current user can access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccounts($limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiPageResponseOfAccount**](../Model/JsonApiPageResponseOfAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCatalogOutputByCatalogId()`

```php
getApiV1ExternalCatalogOutputByCatalogId($catalog_id)
```



Output the indicated catalog. Catalogs are only available for retrieval when their associated status request  is at a Success status.  Produces application/x-json-stream of v2021_07 CatalogProduct json objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | A catalog ID returned from an account catalog request.

try {
    $apiInstance->getApiV1ExternalCatalogOutputByCatalogId($catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCatalogOutputByCatalogId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| A catalog ID returned from an account catalog request. | |

### Return type

void (empty response body)

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
getApiV1ExternalCatalogStatusByCatalogId($catalog_id): \criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCatalogStatus
```



Check the status of a catalog request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAccountLineItemsByAccountId()`

```php
getApiV2ExternalAccountLineItemsByAccountId($account_id, $limit_to_campaign_id, $limit_to_type, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\CommonLineItemPagedListResponse
```



Gets page of line item objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_campaign_id = array('limit_to_campaign_id_example'); // string[] | The campaign ids that you would like to limit your result set to
$limit_to_type = 'limit_to_type_example'; // string | The campaign types that you would like to limit your result set to
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV2ExternalAccountLineItemsByAccountId($account_id, $limit_to_campaign_id, $limit_to_type, $limit_to_id, $page_index, $page_size);
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
| **limit_to_type** | **string**| The campaign types that you would like to limit your result set to | [optional] |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\CommonLineItemPagedListResponse**](../Model/CommonLineItemPagedListResponse.md)

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
getApiV2ExternalAuctionLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemResponse
```



Gets the auction line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

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
getApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemPagedListResponse
```



Gets page of auction line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\AuctionLineItemPagedListResponse**](../Model/AuctionLineItemPagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalLineItemByLineItemId()`

```php
getApiV2ExternalLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2023_04\Model\CommonLineItemResponse
```



Gets the line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
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

[**\criteo\api\retailmedia\v2023_04\Model\CommonLineItemResponse**](../Model/CommonLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId()`

```php
postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId($line_item_id, $keyword_target202110_request): \criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Response
```



This endpoint appends one or more keywords to targeting on the specified line item.  The resulting state of the keyword target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$keyword_target202110_request = new \criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Request(); // \criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Request | 

try {
    $result = $apiInstance->postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId($line_item_id, $keyword_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **keyword_target202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Request**](../Model/KeywordTarget202110Request.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Response**](../Model/KeywordTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId()`

```php
postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId($line_item_id, $keyword_target202110_request): \criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Response
```



This endpoint removes one or more keywords from targeting on the specified line item.  The resulting state of the keyword target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$keyword_target202110_request = new \criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Request(); // \criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Request | 

try {
    $result = $apiInstance->postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId($line_item_id, $keyword_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **keyword_target202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Request**](../Model/KeywordTarget202110Request.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\KeywordTarget202110Response**](../Model/KeywordTarget202110Response.md)

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
postApi202110ExternalBalanceCampaignsAppendByBalanceId($balance_id, $balance_campaign202110_list_request): \criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110PagedListResponse
```



appends one or more campaigns to the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to add campaigns from
$balance_campaign202110_list_request = new \criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110ListRequest(); // \criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110ListRequest | The campaigns to append

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
| **balance_campaign202110_list_request** | [**\criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110ListRequest**](../Model/BalanceCampaign202110ListRequest.md)| The campaigns to append | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

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
postApi202110ExternalBalanceCampaignsDeleteByBalanceId($balance_id, $balance_campaign202110_list_request): \criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110PagedListResponse
```



Removes one or more campaigns on the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to remove campaigns from
$balance_campaign202110_list_request = new \criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110ListRequest(); // \criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110ListRequest | The campaigns to append

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
| **balance_campaign202110_list_request** | [**\criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110ListRequest**](../Model/BalanceCampaign202110ListRequest.md)| The campaigns to append | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

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
postApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model202110_request): \criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110Response
```



Creates a new preferred line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$preferred_line_item_create_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\PreferredLineItemCreateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\PreferredLineItemCreateModel202110Request | The line item settings to create a line item with

try {
    $result = $apiInstance->postApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalCampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **preferred_line_item_create_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\PreferredLineItemCreateModel202110Request**](../Model/PreferredLineItemCreateModel202110Request.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110Response**](../Model/PreferredLineItem202110Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalLineItemProductsAppendByLineItemId()`

```php
postApi202110ExternalLineItemProductsAppendByLineItemId($line_item_id, $promoted_product202110_list_request): \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110PagedListResponse
```



This endpoint appends one or more products to promote on the specified line item.  The resulting state of the line item is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$promoted_product202110_list_request = new \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest(); // \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest | the products to append to this line item

try {
    $result = $apiInstance->postApi202110ExternalLineItemProductsAppendByLineItemId($line_item_id, $promoted_product202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalLineItemProductsAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **promoted_product202110_list_request** | [**\criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest**](../Model/PromotedProduct202110ListRequest.md)| the products to append to this line item | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110PagedListResponse**](../Model/PromotedProduct202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalLineItemProductsDeleteByLineItemId()`

```php
postApi202110ExternalLineItemProductsDeleteByLineItemId($line_item_id, $promoted_product202110_list_request): \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110PagedListResponse
```



This endpoint removes one or more products from promotion on the specified line item.  The resulting state of the line item is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$promoted_product202110_list_request = new \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest(); // \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest | 

try {
    $result = $apiInstance->postApi202110ExternalLineItemProductsDeleteByLineItemId($line_item_id, $promoted_product202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalLineItemProductsDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with | |
| **promoted_product202110_list_request** | [**\criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest**](../Model/PromotedProduct202110ListRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110PagedListResponse**](../Model/PromotedProduct202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalLineItemProductsPauseByLineItemId()`

```php
postApi202110ExternalLineItemProductsPauseByLineItemId($line_item_id, $promoted_product202110_list_request)
```



This endpoint pauses one or more promoted products on a specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with.
$promoted_product202110_list_request = new \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest(); // \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest | The products from which their IDs will be used to pause.

try {
    $apiInstance->postApi202110ExternalLineItemProductsPauseByLineItemId($line_item_id, $promoted_product202110_list_request);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalLineItemProductsPauseByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with. | |
| **promoted_product202110_list_request** | [**\criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest**](../Model/PromotedProduct202110ListRequest.md)| The products from which their IDs will be used to pause. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalLineItemProductsUnpauseByLineItemId()`

```php
postApi202110ExternalLineItemProductsUnpauseByLineItemId($line_item_id, $promoted_product202110_list_request)
```



This endpoint unpauses one or more promoted products on a specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with.
$promoted_product202110_list_request = new \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest(); // \criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest | The products from which their IDs will be used to unpause.

try {
    $apiInstance->postApi202110ExternalLineItemProductsUnpauseByLineItemId($line_item_id, $promoted_product202110_list_request);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalLineItemProductsUnpauseByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item to interact with. | |
| **promoted_product202110_list_request** | [**\criteo\api\retailmedia\v2023_04\Model\PromotedProduct202110ListRequest**](../Model/PromotedProduct202110ListRequest.md)| The products from which their IDs will be used to unpause. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request): \criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response
```



This endpoint appends one or more add to basket ids to targeting on the specified line item.  The resulting state of the add to basket target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_ids_update_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\AddToBasketIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\AddToBasketIdsUpdateModel202110Request | Ids to append to the target

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
| **add_to_basket_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\AddToBasketIdsUpdateModel202110Request**](../Model/AddToBasketIdsUpdateModel202110Request.md)| Ids to append to the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

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
postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request): \criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response
```



This endpoint removes one or more add to basket ids from targeting on the specified line item.  The resulting state of the add to basket target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_ids_update_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\AddToBasketIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\AddToBasketIdsUpdateModel202110Request | Ids to remove from the target

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
| **add_to_basket_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\AddToBasketIdsUpdateModel202110Request**](../Model/AddToBasketIdsUpdateModel202110Request.md)| Ids to remove from the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

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
postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId($line_item_id, $audience_ids_update_model202110_request): \criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response
```



This endpoint appends one or more audiences ids to targeting on the specified line item.  The resulting state of the audience target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_ids_update_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\AudienceIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\AudienceIdsUpdateModel202110Request | Audience ids to append to the target

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
| **audience_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\AudienceIdsUpdateModel202110Request**](../Model/AudienceIdsUpdateModel202110Request.md)| Audience ids to append to the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

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
postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId($line_item_id, $audience_ids_update_model202110_request): \criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response
```



This endpoint removes one or more audiences ids from targeting on the specified line item.  The resulting state of the audience target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_ids_update_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\AudienceIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\AudienceIdsUpdateModel202110Request | Audience ids to remove from the target

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
| **audience_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\AudienceIdsUpdateModel202110Request**](../Model/AudienceIdsUpdateModel202110Request.md)| Audience ids to remove from the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

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
postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId($line_item_id, $store_ids_update_model202110_request): \criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response
```



This endpoint appends one or more store ids to targeting on the specified line item.  The resulting state of the store target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_ids_update_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\StoreIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\StoreIdsUpdateModel202110Request | Store ids to append to the target

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
| **store_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\StoreIdsUpdateModel202110Request**](../Model/StoreIdsUpdateModel202110Request.md)| Store ids to append to the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

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
postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId($line_item_id, $store_ids_update_model202110_request): \criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response
```



This endpoint removes one or more store ids from targeting on the specified line item.  The resulting state of the store target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_ids_update_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\StoreIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\StoreIdsUpdateModel202110Request | Store ids to remove from the target

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
| **store_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\StoreIdsUpdateModel202110Request**](../Model/StoreIdsUpdateModel202110Request.md)| Store ids to remove from the target | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

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
postApi202210ExternalAccountCreativesByAccountId($account_id, $creative_create_model202207): \criteo\api\retailmedia\v2023_04\Model\Creative202210Response
```



Create a creative for an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to create a creative for
$creative_create_model202207 = new \criteo\api\retailmedia\v2023_04\Model\CreativeCreateModel202207(); // \criteo\api\retailmedia\v2023_04\Model\CreativeCreateModel202207 | The creative to create

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
| **creative_create_model202207** | [**\criteo\api\retailmedia\v2023_04\Model\CreativeCreateModel202207**](../Model/CreativeCreateModel202207.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\Creative202210Response**](../Model/Creative202210Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202210ExternalAccountCreativesSearchByAccountId()`

```php
postApi202210ExternalAccountCreativesSearchByAccountId($account_id, $creative_ids): \criteo\api\retailmedia\v2023_04\Model\Creative202210ListResponse
```



Get account creatives

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for
$creative_ids = array('creative_ids_example'); // string[] | Creatives to filter by

try {
    $result = $apiInstance->postApi202210ExternalAccountCreativesSearchByAccountId($account_id, $creative_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202210ExternalAccountCreativesSearchByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to retrieve creatives for | |
| **creative_ids** | [**string[]**](../Model/string.md)| Creatives to filter by | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\Creative202210ListResponse**](../Model/Creative202210ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202301ExternalAccountCampaignsByAccountId()`

```php
postApi202301ExternalAccountCampaignsByAccountId($account_id, $post_campaign_v202301): \criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCampaignV202301
```



Create a campaign and assign budgets for the given account id with creatable campaign attributes given in request body constrained by business validation. The validation error includes details and source of errors. Pacing can be adjusted and affected by the status of the campaign and the days left on the campaign if auto daily pacing is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the campaign for.
$post_campaign_v202301 = new \criteo\api\retailmedia\v2023_04\Model\PostCampaignV202301(); // \criteo\api\retailmedia\v2023_04\Model\PostCampaignV202301 | Creatable campaign attributes

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
| **post_campaign_v202301** | [**\criteo\api\retailmedia\v2023_04\Model\PostCampaignV202301**](../Model/PostCampaignV202301.md)| Creatable campaign attributes | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCampaignV202301**](../Model/JsonApiSingleResponseOfCampaignV202301.md)

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
postApiV1ExternalAccountCatalogsByAccountId($account_id, $json_api_request_of_catalog_request): \criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCatalogStatus
```



Create a request for a Catalog available to the indicated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the catalog for.
$json_api_request_of_catalog_request = new \criteo\api\retailmedia\v2023_04\Model\JsonApiRequestOfCatalogRequest(); // \criteo\api\retailmedia\v2023_04\Model\JsonApiRequestOfCatalogRequest

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
| **json_api_request_of_catalog_request** | [**\criteo\api\retailmedia\v2023_04\Model\JsonApiRequestOfCatalogRequest**](../Model/JsonApiRequestOfCatalogRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalCampaignAuctionLineItemsByCampaignId()`

```php
postApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $auction_line_item_create_model_request): \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemResponse
```



Creates new auction line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$auction_line_item_create_model_request = new \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemCreateModelRequest(); // \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemCreateModelRequest | The line item settings to create a line item with

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
| **auction_line_item_create_model_request** | [**\criteo\api\retailmedia\v2023_04\Model\AuctionLineItemCreateModelRequest**](../Model/AuctionLineItemCreateModelRequest.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

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
putApi202110ExternalPreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model202110_request): \criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110Response
```



Updates the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$preferred_line_item_update_model202110_request = new \criteo\api\retailmedia\v2023_04\Model\PreferredLineItemUpdateModel202110Request(); // \criteo\api\retailmedia\v2023_04\Model\PreferredLineItemUpdateModel202110Request | The line item settings to create a line item with

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |
| **preferred_line_item_update_model202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\PreferredLineItemUpdateModel202110Request**](../Model/PreferredLineItemUpdateModel202110Request.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\PreferredLineItem202110Response**](../Model/PreferredLineItem202110Response.md)

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
putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id, $add_to_basket_target202110_request): \criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response
```



This endpoint sets the scope of the add to basket target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_target202110_request = new \criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Request(); // \criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Request | The add to basket target to set the scope for

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
| **add_to_basket_target202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Request**](../Model/AddToBasketTarget202110Request.md)| The add to basket target to set the scope for | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

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
putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id, $audience_target202110_request): \criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response
```



This endpoint sets the scope of the audience target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_target202110_request = new \criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Request(); // \criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Request | The audience target to set the scope for

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
| **audience_target202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Request**](../Model/AudienceTarget202110Request.md)| The audience target to set the scope for | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

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
putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id, $store_target202110_request): \criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response
```



This endpoint sets the scope of the store target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_target202110_request = new \criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Request(); // \criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Request | The store target to set the scope for

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
| **store_target202110_request** | [**\criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Request**](../Model/StoreTarget202110Request.md)| The store target to set the scope for | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

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
putApi202210ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id, $creative_update_model202207): \criteo\api\retailmedia\v2023_04\Model\Creative202210Response
```



Update a creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id containing the creative
$creative_id = 'creative_id_example'; // string | Creative to update
$creative_update_model202207 = new \criteo\api\retailmedia\v2023_04\Model\CreativeUpdateModel202207(); // \criteo\api\retailmedia\v2023_04\Model\CreativeUpdateModel202207 | The creative to create

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
| **creative_update_model202207** | [**\criteo\api\retailmedia\v2023_04\Model\CreativeUpdateModel202207**](../Model/CreativeUpdateModel202207.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\Creative202210Response**](../Model/Creative202210Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202301ExternalCampaignByCampaignId()`

```php
putApi202301ExternalCampaignByCampaignId($campaign_id, $put_campaign_v202301): \criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCampaignV202301
```



Edit a campaign for the given campaign id with a given editable attributes. This will return updated creatable and editable attributes of the campaign as the result of the operation. Pacing can be adjusted and affected by the status of the campaign and the days left on the campaign if auto daily pacing is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign Id of the updating campaign
$put_campaign_v202301 = new \criteo\api\retailmedia\v2023_04\Model\PutCampaignV202301(); // \criteo\api\retailmedia\v2023_04\Model\PutCampaignV202301 | Editable campaign attributes

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
| **put_campaign_v202301** | [**\criteo\api\retailmedia\v2023_04\Model\PutCampaignV202301**](../Model/PutCampaignV202301.md)| Editable campaign attributes | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\JsonApiSingleResponseOfCampaignV202301**](../Model/JsonApiSingleResponseOfCampaignV202301.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202301ExternalLineItemBidMultipliersByLineItemId()`

```php
putApi202301ExternalLineItemBidMultipliersByLineItemId($line_item_id, $line_item_bid_multipliers_request): \criteo\api\retailmedia\v2023_04\Model\LineItemBidMultipliersResponse
```



Replace bid multipliers on a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item
$line_item_bid_multipliers_request = new \criteo\api\retailmedia\v2023_04\Model\LineItemBidMultipliersRequest(); // \criteo\api\retailmedia\v2023_04\Model\LineItemBidMultipliersRequest

try {
    $result = $apiInstance->putApi202301ExternalLineItemBidMultipliersByLineItemId($line_item_id, $line_item_bid_multipliers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202301ExternalLineItemBidMultipliersByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Long external id of the associated line item | |
| **line_item_bid_multipliers_request** | [**\criteo\api\retailmedia\v2023_04\Model\LineItemBidMultipliersRequest**](../Model/LineItemBidMultipliersRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\LineItemBidMultipliersResponse**](../Model/LineItemBidMultipliersResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV2ExternalAuctionLineItemByLineItemId()`

```php
putApiV2ExternalAuctionLineItemByLineItemId($line_item_id, $auction_line_item_update_model_request): \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemResponse
```



Updates the auction line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$auction_line_item_update_model_request = new \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemUpdateModelRequest(); // \criteo\api\retailmedia\v2023_04\Model\AuctionLineItemUpdateModelRequest | The line item settings to create a line item with

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
| **auction_line_item_update_model_request** | [**\criteo\api\retailmedia\v2023_04\Model\AuctionLineItemUpdateModelRequest**](../Model/AuctionLineItemUpdateModelRequest.md)| The line item settings to create a line item with | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setKeywordBids()`

```php
setKeywordBids($id, $retail_media_externalv1_set_bids_model_request): \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ResourceOutcome
```



Set bid overrides for associated keywords to the given line item in bulk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Long external id of the associated line item
$retail_media_externalv1_set_bids_model_request = new \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1SetBidsModelRequest(); // \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1SetBidsModelRequest | Object containing a list of bid overrides for associated keywords

try {
    $result = $apiInstance->setKeywordBids($id, $retail_media_externalv1_set_bids_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->setKeywordBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Long external id of the associated line item | |
| **retail_media_externalv1_set_bids_model_request** | [**\criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1SetBidsModelRequest**](../Model/RetailMediaExternalv1SetBidsModelRequest.md)| Object containing a list of bid overrides for associated keywords | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ResourceOutcome**](../Model/RetailMediaExternalv1ResourceOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitProposal()`

```php
submitProposal($id): \criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ProposalStatusModelResponse
```



Submit a proposal to modify a Preferred Deal Line Item for review.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_04\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The external id of a line item.

try {
    $result = $apiInstance->submitProposal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->submitProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The external id of a line item. | |

### Return type

[**\criteo\api\retailmedia\v2023_04\Model\RetailMediaExternalv1ProposalStatusModelResponse**](../Model/RetailMediaExternalv1ProposalStatusModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
