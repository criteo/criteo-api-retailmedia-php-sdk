# criteo\api\retailmedia\preview\CampaignApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRemoveKeywords()**](CampaignApi.md#addRemoveKeywords) | **POST** /preview/retail-media/line-items/{id}/keywords/add-remove |  |
| [**deleteApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId()**](CampaignApi.md#deleteApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId) | **DELETE** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |  |
| [**fetchKeywords()**](CampaignApi.md#fetchKeywords) | **GET** /preview/retail-media/line-items/{id}/keywords |  |
| [**fetchProposal()**](CampaignApi.md#fetchProposal) | **GET** /preview/retail-media/preferred-deal-line-items/{id}/proposal |  |
| [**getApi202207ExternalRetailerByRetailerIdTemplatestemplateId()**](CampaignApi.md#getApi202207ExternalRetailerByRetailerIdTemplatestemplateId) | **GET** /preview/retail-media/retailers/{retailer-id}/templates/{template-id} |  |
| [**getApi202207ExternalRetailerTemplatesByRetailerId()**](CampaignApi.md#getApi202207ExternalRetailerTemplatesByRetailerId) | **GET** /preview/retail-media/retailers/{retailer-id}/templates |  |
| [**getApi202210ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#getApi202210ExternalAccountByAccountIdCreativescreativeId) | **GET** /preview/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**getApi202210ExternalLineItemProductButtonsByLineItemId()**](CampaignApi.md#getApi202210ExternalLineItemProductButtonsByLineItemId) | **GET** /preview/retail-media/line-items/{line-item-id}/product-buttons |  |
| [**getApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId()**](CampaignApi.md#getApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId) | **GET** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |  |
| [**getApi202301ExternalLineItemBidMultipliersByLineItemId()**](CampaignApi.md#getApi202301ExternalLineItemBidMultipliersByLineItemId) | **GET** /preview/retail-media/line-items/{line-item-id}/bid-multipliers |  |
| [**getApiV0ExternalCatalogOutputByCatalogId()**](CampaignApi.md#getApiV0ExternalCatalogOutputByCatalogId) | **GET** /preview/retail-media/catalogs/{catalogId}/output |  |
| [**getApiV0ExternalCatalogStatusByCatalogId()**](CampaignApi.md#getApiV0ExternalCatalogStatusByCatalogId) | **GET** /preview/retail-media/catalogs/{catalogId}/status |  |
| [**getApiV1ExternalAccountBrandsByAccountId()**](CampaignApi.md#getApiV1ExternalAccountBrandsByAccountId) | **GET** /preview/retail-media/accounts/{accountId}/brands |  |
| [**getApiV1ExternalAccountRetailersByAccountId()**](CampaignApi.md#getApiV1ExternalAccountRetailersByAccountId) | **GET** /preview/retail-media/accounts/{accountId}/retailers |  |
| [**getApiV1ExternalAccounts()**](CampaignApi.md#getApiV1ExternalAccounts) | **GET** /preview/retail-media/accounts |  |
| [**getApiV1ExternalRetailerBrandsByRetailerId()**](CampaignApi.md#getApiV1ExternalRetailerBrandsByRetailerId) | **GET** /preview/retail-media/retailers/{retailerId}/brands |  |
| [**getApiV1ExternalRetailerByRetailerIdSellerBySeller()**](CampaignApi.md#getApiV1ExternalRetailerByRetailerIdSellerBySeller) | **GET** /preview/retail-media/retailers/{retailerId}/sellers/{seller} |  |
| [**getApiV1ExternalRetailerCategoryCpcRatesByRetailerId()**](CampaignApi.md#getApiV1ExternalRetailerCategoryCpcRatesByRetailerId) | **GET** /preview/retail-media/retailers/{retailer-id}/cpc-rates |  |
| [**getApiV1ExternalRetailerPlacementsByRetailerId()**](CampaignApi.md#getApiV1ExternalRetailerPlacementsByRetailerId) | **GET** /preview/retail-media/retailers/{retailer-id}/placements |  |
| [**postApi202210ExternalAccountCreativesByAccountId()**](CampaignApi.md#postApi202210ExternalAccountCreativesByAccountId) | **POST** /preview/retail-media/accounts/{account-id}/creatives |  |
| [**postApi202210ExternalAccountCreativesSearchByAccountId()**](CampaignApi.md#postApi202210ExternalAccountCreativesSearchByAccountId) | **POST** /preview/retail-media/accounts/{account-id}/creatives/search |  |
| [**postApi202210ExternalLineItemProductButtonsCreateByLineItemId()**](CampaignApi.md#postApi202210ExternalLineItemProductButtonsCreateByLineItemId) | **POST** /preview/retail-media/line-items/{line-item-id}/product-buttons/create |  |
| [**postApiV0ExternalAccountCatalogsByAccountId()**](CampaignApi.md#postApiV0ExternalAccountCatalogsByAccountId) | **POST** /preview/retail-media/accounts/{accountId}/catalogs |  |
| [**postApiV1ExternalCatalogsSkuRetrieval()**](CampaignApi.md#postApiV1ExternalCatalogsSkuRetrieval) | **POST** /preview/retail-media/catalogs/sku-retrieval |  |
| [**postApiV1ExternalCatalogsSkuSearch()**](CampaignApi.md#postApiV1ExternalCatalogsSkuSearch) | **POST** /preview/retail-media/catalogs/sku-search |  |
| [**postApiV1ExternalCatalogsSkuSearchAccountIdAndRetailerId()**](CampaignApi.md#postApiV1ExternalCatalogsSkuSearchAccountIdAndRetailerId) | **POST** /preview/retail-media/catalogs/sku-search/accounts/{account-id}/retailers/{retailer-id} |  |
| [**postApiV1ExternalCatalogsSkuSearchRetailerByRetailerId()**](CampaignApi.md#postApiV1ExternalCatalogsSkuSearchRetailerByRetailerId) | **POST** /preview/retail-media/catalogs/sku/search/retailers/{retailer-id} |  |
| [**putApi202210ExternalAccountByAccountIdCreativescreativeId()**](CampaignApi.md#putApi202210ExternalAccountByAccountIdCreativescreativeId) | **PUT** /preview/retail-media/accounts/{account-id}/creatives/{creative-id} |  |
| [**putApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId()**](CampaignApi.md#putApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId) | **PUT** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |  |
| [**putApi202301ExternalLineItemBidMultipliersByLineItemId()**](CampaignApi.md#putApi202301ExternalLineItemBidMultipliersByLineItemId) | **PUT** /preview/retail-media/line-items/{line-item-id}/bid-multipliers |  |
| [**setKeywordBids()**](CampaignApi.md#setKeywordBids) | **POST** /preview/retail-media/line-items/{id}/keywords/set-bid |  |
| [**submitProposal()**](CampaignApi.md#submitProposal) | **POST** /preview/retail-media/preferred-deal-line-items/{id}/proposal/submit |  |


## `addRemoveKeywords()`

```php
addRemoveKeywords($id, $retail_media_externalv1_add_remove_keywords_model_request): \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ResourceOutcome
```



Add or Remove keywords from the associated line item in bulk

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
$id = 'id_example'; // string | Long external id of the associated line item
$retail_media_externalv1_add_remove_keywords_model_request = new \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1AddRemoveKeywordsModelRequest(); // \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1AddRemoveKeywordsModelRequest | Object containing keywords to be added or removed

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
| **retail_media_externalv1_add_remove_keywords_model_request** | [**\criteo\api\retailmedia\preview\Model\RetailMediaExternalv1AddRemoveKeywordsModelRequest**](../Model/RetailMediaExternalv1AddRemoveKeywordsModelRequest.md)| Object containing keywords to be added or removed | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ResourceOutcome**](../Model/RetailMediaExternalv1ResourceOutcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId()`

```php
deleteApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId($line_item_id, $product_button_id)
```



Delete a product button

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
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item
$product_button_id = 'product_button_id_example'; // string | Sequential id of the product button

try {
    $apiInstance->deleteApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId($line_item_id, $product_button_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Long external id of the associated line item | |
| **product_button_id** | **string**| Sequential id of the product button | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchKeywords()`

```php
fetchKeywords($id): \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1KeywordsModelResponse
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

[**\criteo\api\retailmedia\preview\Model\RetailMediaExternalv1KeywordsModelResponse**](../Model/RetailMediaExternalv1KeywordsModelResponse.md)

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
fetchProposal($id): \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ProposalStatusModelResponse
```



Fetch the status of a proposal to modify a Preferred Deal Line Item.

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

[**\criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ProposalStatusModelResponse**](../Model/RetailMediaExternalv1ProposalStatusModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202207ExternalRetailerByRetailerIdTemplatestemplateId()`

```php
getApi202207ExternalRetailerByRetailerIdTemplatestemplateId($retailer_id, $template_id): \criteo\api\retailmedia\preview\Model\TemplateResponse
```



Gets the template for the specified retailer id and template id

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

[**\criteo\api\retailmedia\preview\Model\TemplateResponse**](../Model/TemplateResponse.md)

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
getApi202207ExternalRetailerTemplatesByRetailerId($retailer_id): \criteo\api\retailmedia\preview\Model\TemplateListResponse
```



Get retailer creative templates

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

[**\criteo\api\retailmedia\preview\Model\TemplateListResponse**](../Model/TemplateListResponse.md)

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
getApi202210ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id): \criteo\api\retailmedia\preview\Model\Creative202210Response
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

[**\criteo\api\retailmedia\preview\Model\Creative202210Response**](../Model/Creative202210Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202210ExternalLineItemProductButtonsByLineItemId()`

```php
getApi202210ExternalLineItemProductButtonsByLineItemId($line_item_id): \criteo\api\retailmedia\preview\Model\ProductButtonListResponse
```



Get all the product buttons associated with a line item

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
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item

try {
    $result = $apiInstance->getApi202210ExternalLineItemProductButtonsByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202210ExternalLineItemProductButtonsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Long external id of the associated line item | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonListResponse**](../Model/ProductButtonListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId()`

```php
getApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId($line_item_id, $product_button_id): \criteo\api\retailmedia\preview\Model\ProductButtonResponse
```



Get a single product button

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
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item
$product_button_id = 'product_button_id_example'; // string | Sequential id of the product button

try {
    $result = $apiInstance->getApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId($line_item_id, $product_button_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Long external id of the associated line item | |
| **product_button_id** | **string**| Sequential id of the product button | |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonResponse**](../Model/ProductButtonResponse.md)

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
getApi202301ExternalLineItemBidMultipliersByLineItemId($line_item_id): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItemBidMultipliers
```



Get bid multipliers by line item

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

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItemBidMultipliers**](../Model/JsonApiSingleResponseOfLineItemBidMultipliers.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV0ExternalCatalogOutputByCatalogId()`

```php
getApiV0ExternalCatalogOutputByCatalogId($catalog_id)
```



Output the indicated catalog. Catalogs are only available for retrieval when their associated status request  is at a Success status.  Produces application/x-json-stream of CatalogProduct json objects.

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
    $apiInstance->getApiV0ExternalCatalogOutputByCatalogId($catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV0ExternalCatalogOutputByCatalogId: ', $e->getMessage(), PHP_EOL;
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

## `getApiV0ExternalCatalogStatusByCatalogId()`

```php
getApiV0ExternalCatalogStatusByCatalogId($catalog_id): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCatalogStatus
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
    $result = $apiInstance->getApiV0ExternalCatalogStatusByCatalogId($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV0ExternalCatalogStatusByCatalogId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| A catalog ID returned from an account catalog request. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

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
getApiV1ExternalAccountBrandsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfBrand
```



Gets page of retailer objects that are associated with the given account

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

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfBrand**](../Model/JsonApiPageResponseOfBrand.md)

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
getApiV1ExternalAccountRetailersByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfRetailer
```



Gets page of retailer objects that are associated with the given account

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

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfRetailer**](../Model/JsonApiPageResponseOfRetailer.md)

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
getApiV1ExternalAccounts($limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfAccount
```



Gets page of account objects that the current user can access

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

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfAccount**](../Model/JsonApiPageResponseOfAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalRetailerBrandsByRetailerId()`

```php
getApiV1ExternalRetailerBrandsByRetailerId($retailer_id, $sku_stock_type_filter, $brand_type): \criteo\api\retailmedia\preview\Model\BrandPreviewListResponse
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
$sku_stock_type_filter = 'sku_stock_type_filter_example'; // string | Filter to narrow down brands [first-party|third-party|first-and-third-party]. Defaults to first-and-third-party
$brand_type = 'brand_type_example'; // string | Filter to narrow down brands [all|uc|retailer]. Defaults to uc

try {
    $result = $apiInstance->getApiV1ExternalRetailerBrandsByRetailerId($retailer_id, $sku_stock_type_filter, $brand_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalRetailerBrandsByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **int**| The retailer id for which brands should be fetched. | |
| **sku_stock_type_filter** | **string**| Filter to narrow down brands [first-party|third-party|first-and-third-party]. Defaults to first-and-third-party | [optional] |
| **brand_type** | **string**| Filter to narrow down brands [all|uc|retailer]. Defaults to uc | [optional] |

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

## `postApi202210ExternalAccountCreativesByAccountId()`

```php
postApi202210ExternalAccountCreativesByAccountId($account_id, $creative_create_model202207): \criteo\api\retailmedia\preview\Model\Creative202210Response
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
$creative_create_model202207 = new \criteo\api\retailmedia\preview\Model\CreativeCreateModel202207(); // \criteo\api\retailmedia\preview\Model\CreativeCreateModel202207 | The creative to create

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
| **creative_create_model202207** | [**\criteo\api\retailmedia\preview\Model\CreativeCreateModel202207**](../Model/CreativeCreateModel202207.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\Creative202210Response**](../Model/Creative202210Response.md)

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
postApi202210ExternalAccountCreativesSearchByAccountId($account_id, $creative_ids): \criteo\api\retailmedia\preview\Model\Creative202210ListResponse
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

[**\criteo\api\retailmedia\preview\Model\Creative202210ListResponse**](../Model/Creative202210ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202210ExternalLineItemProductButtonsCreateByLineItemId()`

```php
postApi202210ExternalLineItemProductButtonsCreateByLineItemId($line_item_id, $product_button_list_request): \criteo\api\retailmedia\preview\Model\ProductButtonListResponse
```



Append new product buttons to a line item

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
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item
$product_button_list_request = new \criteo\api\retailmedia\preview\Model\ProductButtonListRequest(); // \criteo\api\retailmedia\preview\Model\ProductButtonListRequest | List of product buttons to append to the specified line item

try {
    $result = $apiInstance->postApi202210ExternalLineItemProductButtonsCreateByLineItemId($line_item_id, $product_button_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202210ExternalLineItemProductButtonsCreateByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Long external id of the associated line item | |
| **product_button_list_request** | [**\criteo\api\retailmedia\preview\Model\ProductButtonListRequest**](../Model/ProductButtonListRequest.md)| List of product buttons to append to the specified line item | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonListResponse**](../Model/ProductButtonListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV0ExternalAccountCatalogsByAccountId()`

```php
postApiV0ExternalAccountCatalogsByAccountId($account_id, $json_api_request_of_catalog_request_preview): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCatalogStatus
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
$json_api_request_of_catalog_request_preview = new \criteo\api\retailmedia\preview\Model\JsonApiRequestOfCatalogRequestPreview(); // \criteo\api\retailmedia\preview\Model\JsonApiRequestOfCatalogRequestPreview

try {
    $result = $apiInstance->postApiV0ExternalAccountCatalogsByAccountId($account_id, $json_api_request_of_catalog_request_preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV0ExternalAccountCatalogsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to request the catalog for. | |
| **json_api_request_of_catalog_request_preview** | [**\criteo\api\retailmedia\preview\Model\JsonApiRequestOfCatalogRequestPreview**](../Model/JsonApiRequestOfCatalogRequestPreview.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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

## `postApiV1ExternalCatalogsSkuSearchAccountIdAndRetailerId()`

```php
postApiV1ExternalCatalogsSkuSearchAccountIdAndRetailerId($account_id, $retailer_id, $offset, $limit, $sku_search_request_slim_preview_request): \criteo\api\retailmedia\preview\Model\SkuSlimDataPreviewListResponse
```



Endpoint to search skus by text, account and retailer with an option to filter by brands id's.

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
$account_id = 'account_id_example'; // string | The account for which skus should be searched for.
$retailer_id = 'retailer_id_example'; // string | The client id/retailer id for which skus should be searched for.
$offset = 0; // int | The start position in the overall list of matches. Must be zero or greater.
$limit = 100; // int | The maximum number of results to return with each call. Must be greater than zero.
$sku_search_request_slim_preview_request = new \criteo\api\retailmedia\preview\Model\SkuSearchRequestSlimPreviewRequest(); // \criteo\api\retailmedia\preview\Model\SkuSearchRequestSlimPreviewRequest | 

try {
    $result = $apiInstance->postApiV1ExternalCatalogsSkuSearchAccountIdAndRetailerId($account_id, $retailer_id, $offset, $limit, $sku_search_request_slim_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalCatalogsSkuSearchAccountIdAndRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account for which skus should be searched for. | |
| **retailer_id** | **string**| The client id/retailer id for which skus should be searched for. | |
| **offset** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of results to return with each call. Must be greater than zero. | [optional] [default to 100] |
| **sku_search_request_slim_preview_request** | [**\criteo\api\retailmedia\preview\Model\SkuSearchRequestSlimPreviewRequest**](../Model/SkuSearchRequestSlimPreviewRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\SkuSlimDataPreviewListResponse**](../Model/SkuSlimDataPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalCatalogsSkuSearchRetailerByRetailerId()`

```php
postApiV1ExternalCatalogsSkuSearchRetailerByRetailerId($retailer_id, $x_origin_account, $offset, $limit, $sku_search_request_slim_v2_preview_request): \criteo\api\retailmedia\preview\Model\SkuSlimDataV2ListResponse
```



Endpoint to search skus by text for a retailer with an option to filter by brands id's.

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
$retailer_id = 'retailer_id_example'; // string | The client id/retailer id for which skus should be searched for.
$x_origin_account = 'x_origin_account_example'; // string | The account id of the initiator of the call.
$offset = 0; // int | The start position in the overall list of matches. Must be zero or greater.
$limit = 100; // int | The maximum number of results to return with each call. Must be greater than zero and less than 1500. 10,000 records deep is the max limit.
$sku_search_request_slim_v2_preview_request = new \criteo\api\retailmedia\preview\Model\SkuSearchRequestSlimV2PreviewRequest(); // \criteo\api\retailmedia\preview\Model\SkuSearchRequestSlimV2PreviewRequest | 

try {
    $result = $apiInstance->postApiV1ExternalCatalogsSkuSearchRetailerByRetailerId($retailer_id, $x_origin_account, $offset, $limit, $sku_search_request_slim_v2_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalCatalogsSkuSearchRetailerByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailer_id** | **string**| The client id/retailer id for which skus should be searched for. | |
| **x_origin_account** | **string**| The account id of the initiator of the call. | [optional] |
| **offset** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of results to return with each call. Must be greater than zero and less than 1500. 10,000 records deep is the max limit. | [optional] [default to 100] |
| **sku_search_request_slim_v2_preview_request** | [**\criteo\api\retailmedia\preview\Model\SkuSearchRequestSlimV2PreviewRequest**](../Model/SkuSearchRequestSlimV2PreviewRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\SkuSlimDataV2ListResponse**](../Model/SkuSlimDataV2ListResponse.md)

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
putApi202210ExternalAccountByAccountIdCreativescreativeId($account_id, $creative_id, $creative_update_model202207): \criteo\api\retailmedia\preview\Model\Creative202210Response
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
$creative_update_model202207 = new \criteo\api\retailmedia\preview\Model\CreativeUpdateModel202207(); // \criteo\api\retailmedia\preview\Model\CreativeUpdateModel202207 | The creative to create

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
| **creative_update_model202207** | [**\criteo\api\retailmedia\preview\Model\CreativeUpdateModel202207**](../Model/CreativeUpdateModel202207.md)| The creative to create | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\Creative202210Response**](../Model/Creative202210Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId()`

```php
putApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId($line_item_id, $product_button_id, $product_button_request): \criteo\api\retailmedia\preview\Model\ProductButtonResponse
```



Update a product button

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
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item
$product_button_id = 'product_button_id_example'; // string | Sequential id of the product button
$product_button_request = new \criteo\api\retailmedia\preview\Model\ProductButtonRequest(); // \criteo\api\retailmedia\preview\Model\ProductButtonRequest | Details of the updated product button

try {
    $result = $apiInstance->putApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId($line_item_id, $product_button_id, $product_button_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Long external id of the associated line item | |
| **product_button_id** | **string**| Sequential id of the product button | |
| **product_button_request** | [**\criteo\api\retailmedia\preview\Model\ProductButtonRequest**](../Model/ProductButtonRequest.md)| Details of the updated product button | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ProductButtonResponse**](../Model/ProductButtonResponse.md)

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
putApi202301ExternalLineItemBidMultipliersByLineItemId($line_item_id, $line_item_bid_multipliers_request): \criteo\api\retailmedia\preview\Model\LineItemBidMultipliersResponse
```



Replace bid multipliers on a line item

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
$line_item_id = 'line_item_id_example'; // string | Long external id of the associated line item
$line_item_bid_multipliers_request = new \criteo\api\retailmedia\preview\Model\LineItemBidMultipliersRequest(); // \criteo\api\retailmedia\preview\Model\LineItemBidMultipliersRequest

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
| **line_item_bid_multipliers_request** | [**\criteo\api\retailmedia\preview\Model\LineItemBidMultipliersRequest**](../Model/LineItemBidMultipliersRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\LineItemBidMultipliersResponse**](../Model/LineItemBidMultipliersResponse.md)

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
setKeywordBids($id, $retail_media_externalv1_set_bids_model_request): \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ResourceOutcome
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
$id = 'id_example'; // string | Long external id of the associated line item
$retail_media_externalv1_set_bids_model_request = new \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1SetBidsModelRequest(); // \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1SetBidsModelRequest | Object containing a list of bid overrides for associated keywords

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
| **retail_media_externalv1_set_bids_model_request** | [**\criteo\api\retailmedia\preview\Model\RetailMediaExternalv1SetBidsModelRequest**](../Model/RetailMediaExternalv1SetBidsModelRequest.md)| Object containing a list of bid overrides for associated keywords | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ResourceOutcome**](../Model/RetailMediaExternalv1ResourceOutcome.md)

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
submitProposal($id): \criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ProposalStatusModelResponse
```



Submit a proposal to modify a Preferred Deal Line Item for review.

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

[**\criteo\api\retailmedia\preview\Model\RetailMediaExternalv1ProposalStatusModelResponse**](../Model/RetailMediaExternalv1ProposalStatusModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
