# criteo\api\retailmedia\experimental\CampaignApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProducts()**](CampaignApi.md#addProducts) | **POST** /experimental/retail-media/line-items/{line-item-id}/products/add | /experimental/retail-media/line-items/{line-item-id}/products/add |
| [**appendProductButtonByLineItemId()**](CampaignApi.md#appendProductButtonByLineItemId) | **POST** /experimental/retail-media/line-items/{line-item-id}/product-buttons/create | /experimental/retail-media/line-items/{line-item-id}/product-buttons/create |
| [**createAuctionLineItem()**](CampaignApi.md#createAuctionLineItem) | **POST** /experimental/retail-media/campaigns/{campaignId}/auction-line-items | /experimental/retail-media/campaigns/{campaignId}/auction-line-items |
| [**createCampaign()**](CampaignApi.md#createCampaign) | **POST** /experimental/retail-media/accounts/{account-id}/campaigns | /experimental/retail-media/accounts/{account-id}/campaigns |
| [**createCreative()**](CampaignApi.md#createCreative) | **POST** /experimental/retail-media/accounts/{account-id}/creatives | /experimental/retail-media/accounts/{account-id}/creatives |
| [**createLineItem()**](CampaignApi.md#createLineItem) | **POST** /experimental/retail-media/line-items | /experimental/retail-media/line-items |
| [**createPreferredLineItemByCampaignId()**](CampaignApi.md#createPreferredLineItemByCampaignId) | **POST** /experimental/retail-media/campaigns/{campaign-id}/preferred-line-items | /experimental/retail-media/campaigns/{campaign-id}/preferred-line-items |
| [**createTargetsByLineItemId()**](CampaignApi.md#createTargetsByLineItemId) | **POST** /experimental/retail-media/line-items/{line-item-id}/targets/create | /experimental/retail-media/line-items/{line-item-id}/targets/create |
| [**deleteCreatives()**](CampaignApi.md#deleteCreatives) | **POST** /experimental/retail-media/line-items/{line-item-id}/creatives/delete | /experimental/retail-media/line-items/{line-item-id}/creatives/delete |
| [**deleteProductButtonByLineItemAndProductButtonId()**](CampaignApi.md#deleteProductButtonByLineItemAndProductButtonId) | **DELETE** /experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} | /experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |
| [**deleteProducts()**](CampaignApi.md#deleteProducts) | **POST** /experimental/retail-media/line-items/{line-item-id}/products/delete | /experimental/retail-media/line-items/{line-item-id}/products/delete |
| [**fetchCreatives()**](CampaignApi.md#fetchCreatives) | **GET** /experimental/retail-media/line-items/{line-item-id}/creatives | /experimental/retail-media/line-items/{line-item-id}/creatives |
| [**getBiddingStrategyByLineItemId()**](CampaignApi.md#getBiddingStrategyByLineItemId) | **GET** /experimental/retail-media/line-items/{line-item-id}/bidding-strategy | /experimental/retail-media/line-items/{line-item-id}/bidding-strategy |
| [**getCampaign()**](CampaignApi.md#getCampaign) | **GET** /experimental/retail-media/accounts/{account-id}/campaigns/{campaign-id} | /experimental/retail-media/accounts/{account-id}/campaigns/{campaign-id} |
| [**getCapoutHistory()**](CampaignApi.md#getCapoutHistory) | **POST** /experimental/retail-media/accounts/{account-id}/line-items/cap-out-history | /experimental/retail-media/accounts/{account-id}/line-items/cap-out-history |
| [**getCatalogStatus()**](CampaignApi.md#getCatalogStatus) | **GET** /experimental/retail-media/catalogs/{catalogId}/status | /experimental/retail-media/catalogs/{catalogId}/status |
| [**getCreative()**](CampaignApi.md#getCreative) | **GET** /experimental/retail-media/accounts/{account-id}/creatives/{creative-id} | /experimental/retail-media/accounts/{account-id}/creatives/{creative-id} |
| [**getProductButtonByLineItemAndProductButtonId()**](CampaignApi.md#getProductButtonByLineItemAndProductButtonId) | **GET** /experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} | /experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |
| [**getProductButtonsByLineItemId()**](CampaignApi.md#getProductButtonsByLineItemId) | **GET** /experimental/retail-media/line-items/{line-item-id}/product-buttons | /experimental/retail-media/line-items/{line-item-id}/product-buttons |
| [**getTargetsByLineItemId()**](CampaignApi.md#getTargetsByLineItemId) | **GET** /experimental/retail-media/line-items/{line-item-id}/targets | /experimental/retail-media/line-items/{line-item-id}/targets |
| [**lineItemsDemandSearch()**](CampaignApi.md#lineItemsDemandSearch) | **POST** /experimental/retail-media/line-items/demand-search | /experimental/retail-media/line-items/demand-search |
| [**lineItemsSupplySearch()**](CampaignApi.md#lineItemsSupplySearch) | **POST** /experimental/retail-media/line-items/supply-search | /experimental/retail-media/line-items/supply-search |
| [**searchAccountCreatives()**](CampaignApi.md#searchAccountCreatives) | **POST** /experimental/retail-media/accounts/{account-id}/creatives/search | /experimental/retail-media/accounts/{account-id}/creatives/search |
| [**searchCampaigns()**](CampaignApi.md#searchCampaigns) | **POST** /experimental/retail-media/accounts/{account-id}/campaigns/search | /experimental/retail-media/accounts/{account-id}/campaigns/search |
| [**setBiddingStrategyByLineItemId()**](CampaignApi.md#setBiddingStrategyByLineItemId) | **POST** /experimental/retail-media/line-items/{line-item-id}/set-bidding-strategy | /experimental/retail-media/line-items/{line-item-id}/set-bidding-strategy |
| [**submitLineItem()**](CampaignApi.md#submitLineItem) | **POST** /experimental/retail-media/line-items/{line-item-id}/submit | /experimental/retail-media/line-items/{line-item-id}/submit |
| [**updateAuctionLineItem()**](CampaignApi.md#updateAuctionLineItem) | **PUT** /experimental/retail-media/auction-line-items/{lineItemId} | /experimental/retail-media/auction-line-items/{lineItemId} |
| [**updateCampaign()**](CampaignApi.md#updateCampaign) | **PATCH** /experimental/retail-media/accounts/{account-id}/campaigns/{campaign-id} | /experimental/retail-media/accounts/{account-id}/campaigns/{campaign-id} |
| [**updateCreative()**](CampaignApi.md#updateCreative) | **PUT** /experimental/retail-media/accounts/{account-id}/creatives/{creative-id} | /experimental/retail-media/accounts/{account-id}/creatives/{creative-id} |
| [**updateLineItem()**](CampaignApi.md#updateLineItem) | **PATCH** /experimental/retail-media/line-items/{line-item-id} | /experimental/retail-media/line-items/{line-item-id} |
| [**updatePreferredLineItemByLineItemId()**](CampaignApi.md#updatePreferredLineItemByLineItemId) | **PUT** /experimental/retail-media/preferred-line-items/{line-item-id} | /experimental/retail-media/preferred-line-items/{line-item-id} |
| [**updateProductButtonByLineItemAndProductButtonId()**](CampaignApi.md#updateProductButtonByLineItemAndProductButtonId) | **PUT** /experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} | /experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} |
| [**updateTargetsByLineItemId()**](CampaignApi.md#updateTargetsByLineItemId) | **POST** /experimental/retail-media/line-items/{line-item-id}/targets/update | /experimental/retail-media/line-items/{line-item-id}/targets/update |
| [**upsertCreatives()**](CampaignApi.md#upsertCreatives) | **POST** /experimental/retail-media/line-items/{line-item-id}/creatives/upsert | /experimental/retail-media/line-items/{line-item-id}/creatives/upsert |


## `addProducts()`

```php
addProducts($line_item_id, $add_products_model_request): \criteo\api\retailmedia\experimental\Model\AddProductsResultModelResponse
```

/experimental/retail-media/line-items/{line-item-id}/products/add

Add products to a line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item id.
$add_products_model_request = new \criteo\api\retailmedia\experimental\Model\AddProductsModelRequest(); // \criteo\api\retailmedia\experimental\Model\AddProductsModelRequest | The products to add.

try {
    $result = $apiInstance->addProducts($line_item_id, $add_products_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->addProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item id. | |
| **add_products_model_request** | [**\criteo\api\retailmedia\experimental\Model\AddProductsModelRequest**](../Model/AddProductsModelRequest.md)| The products to add. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\AddProductsResultModelResponse**](../Model/AddProductsResultModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appendProductButtonByLineItemId()`

```php
appendProductButtonByLineItemId($line_item_id, $product_button_request_list_request): \criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse
```

/experimental/retail-media/line-items/{line-item-id}/product-buttons/create

Add Specific Product Buttons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | LineItemId for productButton retrieval
$product_button_request_list_request = new \criteo\api\retailmedia\experimental\Model\ProductButtonRequestListRequest(); // \criteo\api\retailmedia\experimental\Model\ProductButtonRequestListRequest | List of Product Buttons to append

try {
    $result = $apiInstance->appendProductButtonByLineItemId($line_item_id, $product_button_request_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->appendProductButtonByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| LineItemId for productButton retrieval | |
| **product_button_request_list_request** | [**\criteo\api\retailmedia\experimental\Model\ProductButtonRequestListRequest**](../Model/ProductButtonRequestListRequest.md)| List of Product Buttons to append | [optional] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAuctionLineItem()`

```php
createAuctionLineItem($campaign_id, $value_resource_input_of_sponsored_products_line_item_create_request_model): \criteo\api\retailmedia\experimental\Model\EntityResourceOutcomeOfSponsoredProductsLineItem
```

/experimental/retail-media/campaigns/{campaignId}/auction-line-items

Creates new auction line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$value_resource_input_of_sponsored_products_line_item_create_request_model = new \criteo\api\retailmedia\experimental\Model\ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel(); // \criteo\api\retailmedia\experimental\Model\ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel | The line item settings to create a line item with

try {
    $result = $apiInstance->createAuctionLineItem($campaign_id, $value_resource_input_of_sponsored_products_line_item_create_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createAuctionLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **value_resource_input_of_sponsored_products_line_item_create_request_model** | [**\criteo\api\retailmedia\experimental\Model\ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel**](../Model/ValueResourceInputOfSponsoredProductsLineItemCreateRequestModel.md)| The line item settings to create a line item with | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\EntityResourceOutcomeOfSponsoredProductsLineItem**](../Model/EntityResourceOutcomeOfSponsoredProductsLineItem.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaign()`

```php
createCampaign($account_id, $campaign_create_model_request): \criteo\api\retailmedia\experimental\Model\CampaignResponseModelResponse
```

/experimental/retail-media/accounts/{account-id}/campaigns

Creates a campaign under the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The external id of the account.
$campaign_create_model_request = new \criteo\api\retailmedia\experimental\Model\CampaignCreateModelRequest(); // \criteo\api\retailmedia\experimental\Model\CampaignCreateModelRequest | The campaign to create.

try {
    $result = $apiInstance->createCampaign($account_id, $campaign_create_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The external id of the account. | |
| **campaign_create_model_request** | [**\criteo\api\retailmedia\experimental\Model\CampaignCreateModelRequest**](../Model/CampaignCreateModelRequest.md)| The campaign to create. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\CampaignResponseModelResponse**](../Model/CampaignResponseModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreative()`

```php
createCreative($account_id, $creative_create_model2): \criteo\api\retailmedia\experimental\Model\Creative2Response
```

/experimental/retail-media/accounts/{account-id}/creatives

Create a creative for an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to create a creative for
$creative_create_model2 = new \criteo\api\retailmedia\experimental\Model\CreativeCreateModel2(); // \criteo\api\retailmedia\experimental\Model\CreativeCreateModel2 | The creative to create

try {
    $result = $apiInstance->createCreative($account_id, $creative_create_model2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to create a creative for | |
| **creative_create_model2** | [**\criteo\api\retailmedia\experimental\Model\CreativeCreateModel2**](../Model/CreativeCreateModel2.md)| The creative to create | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\Creative2Response**](../Model/Creative2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLineItem()`

```php
createLineItem($experimental_create_line_item_model_request): \criteo\api\retailmedia\experimental\Model\ExperimentalLineItemModelResponse
```

/experimental/retail-media/line-items

Create a new line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experimental_create_line_item_model_request = new \criteo\api\retailmedia\experimental\Model\ExperimentalCreateLineItemModelRequest(); // \criteo\api\retailmedia\experimental\Model\ExperimentalCreateLineItemModelRequest | Line item details

try {
    $result = $apiInstance->createLineItem($experimental_create_line_item_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **experimental_create_line_item_model_request** | [**\criteo\api\retailmedia\experimental\Model\ExperimentalCreateLineItemModelRequest**](../Model/ExperimentalCreateLineItemModelRequest.md)| Line item details | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ExperimentalLineItemModelResponse**](../Model/ExperimentalLineItemModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPreferredLineItemByCampaignId()`

```php
createPreferredLineItemByCampaignId($campaign_id, $preferred_line_item_create_model_v2_request): \criteo\api\retailmedia\experimental\Model\PreferredLineItemV2Response
```

/experimental/retail-media/campaigns/{campaign-id}/preferred-line-items

Creates a new preferred line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$preferred_line_item_create_model_v2_request = new \criteo\api\retailmedia\experimental\Model\PreferredLineItemCreateModelV2Request(); // \criteo\api\retailmedia\experimental\Model\PreferredLineItemCreateModelV2Request | The line item settings to create a line item with

try {
    $result = $apiInstance->createPreferredLineItemByCampaignId($campaign_id, $preferred_line_item_create_model_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createPreferredLineItemByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The given campaign id | |
| **preferred_line_item_create_model_v2_request** | [**\criteo\api\retailmedia\experimental\Model\PreferredLineItemCreateModelV2Request**](../Model/PreferredLineItemCreateModelV2Request.md)| The line item settings to create a line item with | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\PreferredLineItemV2Response**](../Model/PreferredLineItemV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTargetsByLineItemId()`

```php
createTargetsByLineItemId($line_item_id, $create_target_request_model_list_request): \criteo\api\retailmedia\experimental\Model\TargetListResponse
```

/experimental/retail-media/line-items/{line-item-id}/targets/create

Creates a given target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | Unique identifier for the line item
$create_target_request_model_list_request = new \criteo\api\retailmedia\experimental\Model\CreateTargetRequestModelListRequest(); // \criteo\api\retailmedia\experimental\Model\CreateTargetRequestModelListRequest | Target to configure on the line item

try {
    $result = $apiInstance->createTargetsByLineItemId($line_item_id, $create_target_request_model_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createTargetsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Unique identifier for the line item | |
| **create_target_request_model_list_request** | [**\criteo\api\retailmedia\experimental\Model\CreateTargetRequestModelListRequest**](../Model/CreateTargetRequestModelListRequest.md)| Target to configure on the line item | [optional] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\TargetListResponse**](../Model/TargetListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCreatives()`

```php
deleteCreatives($line_item_id, $delete_creatives_model_request): \criteo\api\retailmedia\experimental\Model\Outcome
```

/experimental/retail-media/line-items/{line-item-id}/creatives/delete

Delete creatives and their product collections from a line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The external line item id.
$delete_creatives_model_request = new \criteo\api\retailmedia\experimental\Model\DeleteCreativesModelRequest(); // \criteo\api\retailmedia\experimental\Model\DeleteCreativesModelRequest | The stable creative identifiers to delete.

try {
    $result = $apiInstance->deleteCreatives($line_item_id, $delete_creatives_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCreatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The external line item id. | |
| **delete_creatives_model_request** | [**\criteo\api\retailmedia\experimental\Model\DeleteCreativesModelRequest**](../Model/DeleteCreativesModelRequest.md)| The stable creative identifiers to delete. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\Outcome**](../Model/Outcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductButtonByLineItemAndProductButtonId()`

```php
deleteProductButtonByLineItemAndProductButtonId($line_item_id, $product_button_id): \criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse
```

/experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id}

Delete Specific Product Button

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | LineItemId for productButton delete
$product_button_id = 'product_button_id_example'; // string | productButtonId used for delete

try {
    $result = $apiInstance->deleteProductButtonByLineItemAndProductButtonId($line_item_id, $product_button_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteProductButtonByLineItemAndProductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| LineItemId for productButton delete | |
| **product_button_id** | **string**| productButtonId used for delete | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProducts()`

```php
deleteProducts($line_item_id, $delete_product_model_request): \criteo\api\retailmedia\experimental\Model\Outcome
```

/experimental/retail-media/line-items/{line-item-id}/products/delete

Delete products from a line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item id.
$delete_product_model_request = new \criteo\api\retailmedia\experimental\Model\DeleteProductModelRequest(); // \criteo\api\retailmedia\experimental\Model\DeleteProductModelRequest | The products to delete.

try {
    $result = $apiInstance->deleteProducts($line_item_id, $delete_product_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item id. | |
| **delete_product_model_request** | [**\criteo\api\retailmedia\experimental\Model\DeleteProductModelRequest**](../Model/DeleteProductModelRequest.md)| The products to delete. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\Outcome**](../Model/Outcome.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchCreatives()`

```php
fetchCreatives($line_item_id): \criteo\api\retailmedia\experimental\Model\FetchCreativesModelResponse
```

/experimental/retail-media/line-items/{line-item-id}/creatives

Retrieve the creatives and product collections associated with a line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The external line item id.

try {
    $result = $apiInstance->fetchCreatives($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->fetchCreatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The external line item id. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\FetchCreativesModelResponse**](../Model/FetchCreativesModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBiddingStrategyByLineItemId()`

```php
getBiddingStrategyByLineItemId($line_item_id): \criteo\api\retailmedia\experimental\Model\BiddingSettingsResponse
```

/experimental/retail-media/line-items/{line-item-id}/bidding-strategy

Returns the current bidding configuration for a Display auction line item, including the active  bidding strategy and any preserved Standard and Adaptive strategy settings. Other line item types are  not currently supported by this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The identifier of the line item whose bidding settings are requested.

try {
    $result = $apiInstance->getBiddingStrategyByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getBiddingStrategyByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The identifier of the line item whose bidding settings are requested. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\BiddingSettingsResponse**](../Model/BiddingSettingsResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($account_id, $campaign_id): \criteo\api\retailmedia\experimental\Model\CampaignResponseModelResponse
```

/experimental/retail-media/accounts/{account-id}/campaigns/{campaign-id}

Gets a campaign by its external id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The external id of the account.
$campaign_id = 'campaign_id_example'; // string | The external id of the campaign.

try {
    $result = $apiInstance->getCampaign($account_id, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The external id of the account. | |
| **campaign_id** | **string**| The external id of the campaign. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\CampaignResponseModelResponse**](../Model/CampaignResponseModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCapoutHistory()`

```php
getCapoutHistory($account_id, $value_resource_input_line_item_budget_cap_out_history_request): \criteo\api\retailmedia\experimental\Model\ValueResourceOutcomeLineItemBudgetCapOutHistoryResponse
```

/experimental/retail-media/accounts/{account-id}/line-items/cap-out-history

Get the cap out history for line items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | account id that own the lineitem
$value_resource_input_line_item_budget_cap_out_history_request = new \criteo\api\retailmedia\experimental\Model\ValueResourceInputLineItemBudgetCapOutHistoryRequest(); // \criteo\api\retailmedia\experimental\Model\ValueResourceInputLineItemBudgetCapOutHistoryRequest | lineitem budgetcapout history  object

try {
    $result = $apiInstance->getCapoutHistory($account_id, $value_resource_input_line_item_budget_cap_out_history_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCapoutHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| account id that own the lineitem | |
| **value_resource_input_line_item_budget_cap_out_history_request** | [**\criteo\api\retailmedia\experimental\Model\ValueResourceInputLineItemBudgetCapOutHistoryRequest**](../Model/ValueResourceInputLineItemBudgetCapOutHistoryRequest.md)| lineitem budgetcapout history  object | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ValueResourceOutcomeLineItemBudgetCapOutHistoryResponse**](../Model/ValueResourceOutcomeLineItemBudgetCapOutHistoryResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCatalogStatus()`

```php
getCatalogStatus($catalog_id): \criteo\api\retailmedia\experimental\Model\EntityResourceOutcomeOfCatalogStatusV2
```

/experimental/retail-media/catalogs/{catalogId}/status

Check the status of a catalog request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | A catalog ID returned from an account catalog request.

try {
    $result = $apiInstance->getCatalogStatus($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCatalogStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| A catalog ID returned from an account catalog request. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\EntityResourceOutcomeOfCatalogStatusV2**](../Model/EntityResourceOutcomeOfCatalogStatusV2.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreative()`

```php
getCreative($account_id, $creative_id): \criteo\api\retailmedia\experimental\Model\Creative2Response
```

/experimental/retail-media/accounts/{account-id}/creatives/{creative-id}

Get the specified creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for
$creative_id = 'creative_id_example'; // string | Creative to get

try {
    $result = $apiInstance->getCreative($account_id, $creative_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to retrieve creatives for | |
| **creative_id** | **string**| Creative to get | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\Creative2Response**](../Model/Creative2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductButtonByLineItemAndProductButtonId()`

```php
getProductButtonByLineItemAndProductButtonId($line_item_id, $product_button_id): \criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse
```

/experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id}

Get Specific Product Button

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | LineItemId for productButton retrieval
$product_button_id = 'product_button_id_example'; // string | productButtonId used for retrieval

try {
    $result = $apiInstance->getProductButtonByLineItemAndProductButtonId($line_item_id, $product_button_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getProductButtonByLineItemAndProductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| LineItemId for productButton retrieval | |
| **product_button_id** | **string**| productButtonId used for retrieval | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductButtonsByLineItemId()`

```php
getProductButtonsByLineItemId($line_item_id): \criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse
```

/experimental/retail-media/line-items/{line-item-id}/product-buttons

Get LineItem Product Buttons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | LineItemId for productButton retrieval

try {
    $result = $apiInstance->getProductButtonsByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getProductButtonsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| LineItemId for productButton retrieval | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTargetsByLineItemId()`

```php
getTargetsByLineItemId($line_item_id, $limit, $offset): \criteo\api\retailmedia\experimental\Model\TargetListResponseWithPageMetadata
```

/experimental/retail-media/line-items/{line-item-id}/targets

Returns a list of targets for a given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | Unique identifier of the Line Item for which targets will be fetched
$limit = 500; // int | The number of elements to be returned. Defaults to 500.
$offset = 0; // int | The (zero-based) starting offset in the collection. Defaults to 0.

try {
    $result = $apiInstance->getTargetsByLineItemId($line_item_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getTargetsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Unique identifier of the Line Item for which targets will be fetched | |
| **limit** | **int**| The number of elements to be returned. Defaults to 500. | [optional] [default to 500] |
| **offset** | **int**| The (zero-based) starting offset in the collection. Defaults to 0. | [optional] [default to 0] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\TargetListResponseWithPageMetadata**](../Model/TargetListResponseWithPageMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lineItemsDemandSearch()`

```php
lineItemsDemandSearch($demand_search_request): \criteo\api\retailmedia\experimental\Model\LineItemListResponseWithPagination
```

/experimental/retail-media/line-items/demand-search

Search line items accessible from demand accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$demand_search_request = new \criteo\api\retailmedia\experimental\Model\DemandSearchRequest(); // \criteo\api\retailmedia\experimental\Model\DemandSearchRequest | Search criteria and pagination.

try {
    $result = $apiInstance->lineItemsDemandSearch($demand_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->lineItemsDemandSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **demand_search_request** | [**\criteo\api\retailmedia\experimental\Model\DemandSearchRequest**](../Model/DemandSearchRequest.md)| Search criteria and pagination. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\LineItemListResponseWithPagination**](../Model/LineItemListResponseWithPagination.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lineItemsSupplySearch()`

```php
lineItemsSupplySearch($supply_search_request): \criteo\api\retailmedia\experimental\Model\LineItemListResponseWithPagination
```

/experimental/retail-media/line-items/supply-search

Search line items accessible from a supply account and its retailers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_search_request = new \criteo\api\retailmedia\experimental\Model\SupplySearchRequest(); // \criteo\api\retailmedia\experimental\Model\SupplySearchRequest | Search criteria and pagination.

try {
    $result = $apiInstance->lineItemsSupplySearch($supply_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->lineItemsSupplySearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_search_request** | [**\criteo\api\retailmedia\experimental\Model\SupplySearchRequest**](../Model/SupplySearchRequest.md)| Search criteria and pagination. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\LineItemListResponseWithPagination**](../Model/LineItemListResponseWithPagination.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAccountCreatives()`

```php
searchAccountCreatives($account_id, $entity_resource_input_creative_search_request, $limit, $offset): \criteo\api\retailmedia\experimental\Model\EntityResourceCollectionOutcomeCreativeSearchResponseAndMetadata
```

/experimental/retail-media/accounts/{account-id}/creatives/search

Get account creatives

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for
$entity_resource_input_creative_search_request = new \criteo\api\retailmedia\experimental\Model\EntityResourceInputCreativeSearchRequest(); // \criteo\api\retailmedia\experimental\Model\EntityResourceInputCreativeSearchRequest | search request filter
$limit = 50; // int | limit to paginated result
$offset = 0; // int | offset to paginated result

try {
    $result = $apiInstance->searchAccountCreatives($account_id, $entity_resource_input_creative_search_request, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchAccountCreatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id to retrieve creatives for | |
| **entity_resource_input_creative_search_request** | [**\criteo\api\retailmedia\experimental\Model\EntityResourceInputCreativeSearchRequest**](../Model/EntityResourceInputCreativeSearchRequest.md)| search request filter | |
| **limit** | **int**| limit to paginated result | [optional] [default to 50] |
| **offset** | **int**| offset to paginated result | [optional] [default to 0] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\EntityResourceCollectionOutcomeCreativeSearchResponseAndMetadata**](../Model/EntityResourceCollectionOutcomeCreativeSearchResponseAndMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCampaigns()`

```php
searchCampaigns($account_id, $campaign_search_model_request): \criteo\api\retailmedia\experimental\Model\CampaignResponseModelListResponseWithCampaignSearchMetadataModel
```

/experimental/retail-media/accounts/{account-id}/campaigns/search

Searches campaigns under an account using optional filters and pagination.  Budgets are sourced from the search index, so they lag a campaign that has just changed.  Search does not perform Kobalos enrichment, so drawable balance ids are not included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The external id of the account.
$campaign_search_model_request = new \criteo\api\retailmedia\experimental\Model\CampaignSearchModelRequest(); // \criteo\api\retailmedia\experimental\Model\CampaignSearchModelRequest | Optional search filters and pagination.

try {
    $result = $apiInstance->searchCampaigns($account_id, $campaign_search_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The external id of the account. | |
| **campaign_search_model_request** | [**\criteo\api\retailmedia\experimental\Model\CampaignSearchModelRequest**](../Model/CampaignSearchModelRequest.md)| Optional search filters and pagination. | [optional] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\CampaignResponseModelListResponseWithCampaignSearchMetadataModel**](../Model/CampaignResponseModelListResponseWithCampaignSearchMetadataModel.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setBiddingStrategyByLineItemId()`

```php
setBiddingStrategyByLineItemId($line_item_id, $bidding_settings_request): \criteo\api\retailmedia\experimental\Model\BiddingSettingsResponse
```

/experimental/retail-media/line-items/{line-item-id}/set-bidding-strategy

Replaces the submitted Standard page-type bids and updates the supplied strategy settings. Omitted  settings are preserved. Other line item types are not currently supported by this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The identifier of the line item whose bidding settings are being updated.
$bidding_settings_request = new \criteo\api\retailmedia\experimental\Model\BiddingSettingsRequest(); // \criteo\api\retailmedia\experimental\Model\BiddingSettingsRequest | The bidding settings to apply.

try {
    $result = $apiInstance->setBiddingStrategyByLineItemId($line_item_id, $bidding_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->setBiddingStrategyByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The identifier of the line item whose bidding settings are being updated. | |
| **bidding_settings_request** | [**\criteo\api\retailmedia\experimental\Model\BiddingSettingsRequest**](../Model/BiddingSettingsRequest.md)| The bidding settings to apply. | [optional] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\BiddingSettingsResponse**](../Model/BiddingSettingsResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitLineItem()`

```php
submitLineItem($line_item_id, $submit_line_item_request_model_request)
```

/experimental/retail-media/line-items/{line-item-id}/submit

Submits a Commerce Display line item for retailer review, transitioning its eligible reviewable  properties to In Review. A successful submission responds with 204 No Content and an empty body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The external id of the line item to submit.
$submit_line_item_request_model_request = new \criteo\api\retailmedia\experimental\Model\SubmitLineItemRequestModelRequest(); // \criteo\api\retailmedia\experimental\Model\SubmitLineItemRequestModelRequest | The submission details, including an optional comment for the reviewer.

try {
    $apiInstance->submitLineItem($line_item_id, $submit_line_item_request_model_request);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->submitLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The external id of the line item to submit. | |
| **submit_line_item_request_model_request** | [**\criteo\api\retailmedia\experimental\Model\SubmitLineItemRequestModelRequest**](../Model/SubmitLineItemRequestModelRequest.md)| The submission details, including an optional comment for the reviewer. | [optional] |

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

## `updateAuctionLineItem()`

```php
updateAuctionLineItem($line_item_id, $value_resource_input_of_sponsored_products_line_item_update_request_model): \criteo\api\retailmedia\experimental\Model\EntityResourceOutcomeOfSponsoredProductsLineItem
```

/experimental/retail-media/auction-line-items/{lineItemId}

Updates a Sponsored Products Line Item given a line item id and a request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The external line item ID of the sponsored products line item.
$value_resource_input_of_sponsored_products_line_item_update_request_model = new \criteo\api\retailmedia\experimental\Model\ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel(); // \criteo\api\retailmedia\experimental\Model\ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel | An update request containing all details of the requested update.

try {
    $result = $apiInstance->updateAuctionLineItem($line_item_id, $value_resource_input_of_sponsored_products_line_item_update_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateAuctionLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The external line item ID of the sponsored products line item. | |
| **value_resource_input_of_sponsored_products_line_item_update_request_model** | [**\criteo\api\retailmedia\experimental\Model\ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel**](../Model/ValueResourceInputOfSponsoredProductsLineItemUpdateRequestModel.md)| An update request containing all details of the requested update. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\EntityResourceOutcomeOfSponsoredProductsLineItem**](../Model/EntityResourceOutcomeOfSponsoredProductsLineItem.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaign()`

```php
updateCampaign($account_id, $campaign_id, $campaign_update_model_request): \criteo\api\retailmedia\experimental\Model\CampaignResponseModelResponse
```

/experimental/retail-media/accounts/{account-id}/campaigns/{campaign-id}

Selectively updates a campaign. Omitted properties remain unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The external id of the account.
$campaign_id = 'campaign_id_example'; // string | The external id of the campaign.
$campaign_update_model_request = new \criteo\api\retailmedia\experimental\Model\CampaignUpdateModelRequest(); // \criteo\api\retailmedia\experimental\Model\CampaignUpdateModelRequest | The campaign fields to update.

try {
    $result = $apiInstance->updateCampaign($account_id, $campaign_id, $campaign_update_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The external id of the account. | |
| **campaign_id** | **string**| The external id of the campaign. | |
| **campaign_update_model_request** | [**\criteo\api\retailmedia\experimental\Model\CampaignUpdateModelRequest**](../Model/CampaignUpdateModelRequest.md)| The campaign fields to update. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\CampaignResponseModelResponse**](../Model/CampaignResponseModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreative()`

```php
updateCreative($account_id, $creative_id, $creative_update_model2): \criteo\api\retailmedia\experimental\Model\Creative2Response
```

/experimental/retail-media/accounts/{account-id}/creatives/{creative-id}

Update a creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id containing the creative
$creative_id = 'creative_id_example'; // string | Creative to update
$creative_update_model2 = new \criteo\api\retailmedia\experimental\Model\CreativeUpdateModel2(); // \criteo\api\retailmedia\experimental\Model\CreativeUpdateModel2 | The creative to create

try {
    $result = $apiInstance->updateCreative($account_id, $creative_id, $creative_update_model2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| External account id containing the creative | |
| **creative_id** | **string**| Creative to update | |
| **creative_update_model2** | [**\criteo\api\retailmedia\experimental\Model\CreativeUpdateModel2**](../Model/CreativeUpdateModel2.md)| The creative to create | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\Creative2Response**](../Model/Creative2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLineItem()`

```php
updateLineItem($line_item_id, $experimental_update_line_item_model_request): \criteo\api\retailmedia\experimental\Model\ExperimentalLineItemModelResponse
```

/experimental/retail-media/line-items/{line-item-id}

Update an existing line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item id
$experimental_update_line_item_model_request = new \criteo\api\retailmedia\experimental\Model\ExperimentalUpdateLineItemModelRequest(); // \criteo\api\retailmedia\experimental\Model\ExperimentalUpdateLineItemModelRequest | Line item details

try {
    $result = $apiInstance->updateLineItem($line_item_id, $experimental_update_line_item_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item id | |
| **experimental_update_line_item_model_request** | [**\criteo\api\retailmedia\experimental\Model\ExperimentalUpdateLineItemModelRequest**](../Model/ExperimentalUpdateLineItemModelRequest.md)| Line item details | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ExperimentalLineItemModelResponse**](../Model/ExperimentalLineItemModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePreferredLineItemByLineItemId()`

```php
updatePreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model_v2_request): \criteo\api\retailmedia\experimental\Model\PreferredLineItemV2Response
```

/experimental/retail-media/preferred-line-items/{line-item-id}

Updates the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$preferred_line_item_update_model_v2_request = new \criteo\api\retailmedia\experimental\Model\PreferredLineItemUpdateModelV2Request(); // \criteo\api\retailmedia\experimental\Model\PreferredLineItemUpdateModelV2Request | The line item settings to create a line item with

try {
    $result = $apiInstance->updatePreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updatePreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The given line item id | |
| **preferred_line_item_update_model_v2_request** | [**\criteo\api\retailmedia\experimental\Model\PreferredLineItemUpdateModelV2Request**](../Model/PreferredLineItemUpdateModelV2Request.md)| The line item settings to create a line item with | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\PreferredLineItemV2Response**](../Model/PreferredLineItemV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductButtonByLineItemAndProductButtonId()`

```php
updateProductButtonByLineItemAndProductButtonId($line_item_id, $product_button_id, $product_button_request_request): \criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse
```

/experimental/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id}

Update Specific Product Button

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | LineItemId for productButton update
$product_button_id = 'product_button_id_example'; // string | productButtonId used for update
$product_button_request_request = new \criteo\api\retailmedia\experimental\Model\ProductButtonRequestRequest(); // \criteo\api\retailmedia\experimental\Model\ProductButtonRequestRequest | Specific Product button update info

try {
    $result = $apiInstance->updateProductButtonByLineItemAndProductButtonId($line_item_id, $product_button_id, $product_button_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateProductButtonByLineItemAndProductButtonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| LineItemId for productButton update | |
| **product_button_id** | **string**| productButtonId used for update | |
| **product_button_request_request** | [**\criteo\api\retailmedia\experimental\Model\ProductButtonRequestRequest**](../Model/ProductButtonRequestRequest.md)| Specific Product button update info | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\ProductButtonResponseListResponse**](../Model/ProductButtonResponseListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTargetsByLineItemId()`

```php
updateTargetsByLineItemId($line_item_id, $target_list_request): \criteo\api\retailmedia\experimental\Model\TargetListResponse
```

/experimental/retail-media/line-items/{line-item-id}/targets/update

Updates targets in bulk. The request has PATCH-like semantics: immutable target details identify  each target, while mutable fields supplied in the request are updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | Unique identifier for the line item.
$target_list_request = new \criteo\api\retailmedia\experimental\Model\TargetListRequest(); // \criteo\api\retailmedia\experimental\Model\TargetListRequest | Targets to update.

try {
    $result = $apiInstance->updateTargetsByLineItemId($line_item_id, $target_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateTargetsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| Unique identifier for the line item. | |
| **target_list_request** | [**\criteo\api\retailmedia\experimental\Model\TargetListRequest**](../Model/TargetListRequest.md)| Targets to update. | [optional] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\TargetListResponse**](../Model/TargetListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertCreatives()`

```php
upsertCreatives($line_item_id, $upsert_creatives_model_request): \criteo\api\retailmedia\experimental\Model\CreativesModelResponse
```

/experimental/retail-media/line-items/{line-item-id}/creatives/upsert

Resolves each supplied stable creative identifier to its latest revision and  associates those revisions with the line item's proposal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item id.
$upsert_creatives_model_request = new \criteo\api\retailmedia\experimental\Model\UpsertCreativesModelRequest(); // \criteo\api\retailmedia\experimental\Model\UpsertCreativesModelRequest | The creatives to upsert.

try {
    $result = $apiInstance->upsertCreatives($line_item_id, $upsert_creatives_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->upsertCreatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **line_item_id** | **string**| The line item id. | |
| **upsert_creatives_model_request** | [**\criteo\api\retailmedia\experimental\Model\UpsertCreativesModelRequest**](../Model/UpsertCreativesModelRequest.md)| The creatives to upsert. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\CreativesModelResponse**](../Model/CreativesModelResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
