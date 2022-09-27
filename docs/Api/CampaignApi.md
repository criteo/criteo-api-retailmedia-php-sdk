# criteo\api\retailmedia\preview\CampaignApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1ExternalBalanceCampaignsByBalanceId()**](CampaignApi.md#deleteApiV1ExternalBalanceCampaignsByBalanceId) | **DELETE** /preview/retail-media/balances/{balanceId}/campaigns | 
[**deleteApiV1ExternalLineItemProductsByLineItemId()**](CampaignApi.md#deleteApiV1ExternalLineItemProductsByLineItemId) | **DELETE** /preview/retail-media/line-items/{lineItemId}/products | 
[**getApiV0ExternalCatalogOutputByCatalogId()**](CampaignApi.md#getApiV0ExternalCatalogOutputByCatalogId) | **GET** /preview/retail-media/catalogs/{catalogId}/output | 
[**getApiV0ExternalCatalogStatusByCatalogId()**](CampaignApi.md#getApiV0ExternalCatalogStatusByCatalogId) | **GET** /preview/retail-media/catalogs/{catalogId}/status | 
[**getApiV1ExternalAccountBalancesByAccountId()**](CampaignApi.md#getApiV1ExternalAccountBalancesByAccountId) | **GET** /preview/retail-media/accounts/{accountId}/balances | 
[**getApiV1ExternalAccountBrandsByAccountId()**](CampaignApi.md#getApiV1ExternalAccountBrandsByAccountId) | **GET** /preview/retail-media/accounts/{accountId}/brands | 
[**getApiV1ExternalAccountCampaignsByAccountId()**](CampaignApi.md#getApiV1ExternalAccountCampaignsByAccountId) | **GET** /preview/retail-media/accounts/{accountId}/campaigns | 
[**getApiV1ExternalAccountRetailersByAccountId()**](CampaignApi.md#getApiV1ExternalAccountRetailersByAccountId) | **GET** /preview/retail-media/accounts/{accountId}/retailers | 
[**getApiV1ExternalAccounts()**](CampaignApi.md#getApiV1ExternalAccounts) | **GET** /preview/retail-media/accounts | 
[**getApiV1ExternalBalanceCampaignsByBalanceId()**](CampaignApi.md#getApiV1ExternalBalanceCampaignsByBalanceId) | **GET** /preview/retail-media/balances/{balanceId}/campaigns | 
[**getApiV1ExternalCampaignByCampaignId()**](CampaignApi.md#getApiV1ExternalCampaignByCampaignId) | **GET** /preview/retail-media/campaigns/{campaignId} | 
[**getApiV1ExternalCampaignLineItemsByCampaignId()**](CampaignApi.md#getApiV1ExternalCampaignLineItemsByCampaignId) | **GET** /preview/retail-media/campaigns/{campaignId}/line-items | 
[**getApiV1ExternalLineItemByLineItemId()**](CampaignApi.md#getApiV1ExternalLineItemByLineItemId) | **GET** /preview/retail-media/line-items/{lineItemId} | 
[**getApiV1ExternalLineItemProductsByLineItemId()**](CampaignApi.md#getApiV1ExternalLineItemProductsByLineItemId) | **GET** /preview/retail-media/line-items/{lineItemId}/products | 
[**getApiV1ExternalRetailerBrandsByRetailerId()**](CampaignApi.md#getApiV1ExternalRetailerBrandsByRetailerId) | **GET** /preview/retail-media/retailers/{retailerId}/brands | 
[**getApiV1ExternalRetailerByRetailerIdSellerBySeller()**](CampaignApi.md#getApiV1ExternalRetailerByRetailerIdSellerBySeller) | **GET** /preview/retail-media/retailers/{retailerId}/sellers/{seller} | 
[**postApiV0ExternalAccountCatalogsByAccountId()**](CampaignApi.md#postApiV0ExternalAccountCatalogsByAccountId) | **POST** /preview/retail-media/accounts/{accountId}/catalogs | 
[**postApiV1ExternalAccountCampaignsByAccountId()**](CampaignApi.md#postApiV1ExternalAccountCampaignsByAccountId) | **POST** /preview/retail-media/accounts/{accountId}/campaigns | 
[**postApiV1ExternalCampaignLineItemsByCampaignId()**](CampaignApi.md#postApiV1ExternalCampaignLineItemsByCampaignId) | **POST** /preview/retail-media/campaigns/{campaignId}/line-items | 
[**postApiV1ExternalCatalogsSkuRetrieval()**](CampaignApi.md#postApiV1ExternalCatalogsSkuRetrieval) | **POST** /preview/retail-media/catalogs/sku-retrieval | 
[**postApiV1ExternalCatalogsSkuSearch()**](CampaignApi.md#postApiV1ExternalCatalogsSkuSearch) | **POST** /preview/retail-media/catalogs/sku-search | 
[**putApiV1ExternalBalanceCampaignsByBalanceId()**](CampaignApi.md#putApiV1ExternalBalanceCampaignsByBalanceId) | **PUT** /preview/retail-media/balances/{balanceId}/campaigns | 
[**putApiV1ExternalCampaignByCampaignId()**](CampaignApi.md#putApiV1ExternalCampaignByCampaignId) | **PUT** /preview/retail-media/campaigns/{campaignId} | 
[**putApiV1ExternalLineItemByLineItemId()**](CampaignApi.md#putApiV1ExternalLineItemByLineItemId) | **PUT** /preview/retail-media/line-items/{lineItemId} | 
[**putApiV1ExternalLineItemProductsByLineItemId()**](CampaignApi.md#putApiV1ExternalLineItemProductsByLineItemId) | **PUT** /preview/retail-media/line-items/{lineItemId}/products | 


## `deleteApiV1ExternalBalanceCampaignsByBalanceId()`

```php
deleteApiV1ExternalBalanceCampaignsByBalanceId($balance_id, $json_api_data_request_of_delete_balance_campaign): \criteo\api\retailmedia\preview\Model\PageOfBalanceCampaign
```



Removes one or more campaigns on the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to remove campaigns from
$json_api_data_request_of_delete_balance_campaign = new \criteo\api\retailmedia\preview\Model\JsonApiDataRequestOfDeleteBalanceCampaign(); // \criteo\api\retailmedia\preview\Model\JsonApiDataRequestOfDeleteBalanceCampaign | The campaigns to append

try {
    $result = $apiInstance->deleteApiV1ExternalBalanceCampaignsByBalanceId($balance_id, $json_api_data_request_of_delete_balance_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteApiV1ExternalBalanceCampaignsByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_id** | **string**| The balance to remove campaigns from |
 **json_api_data_request_of_delete_balance_campaign** | [**\criteo\api\retailmedia\preview\Model\JsonApiDataRequestOfDeleteBalanceCampaign**](../Model/JsonApiDataRequestOfDeleteBalanceCampaign.md)| The campaigns to append | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\PageOfBalanceCampaign**](../Model/PageOfBalanceCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiV1ExternalLineItemProductsByLineItemId()`

```php
deleteApiV1ExternalLineItemProductsByLineItemId($line_item_id, $json_api_data_request_with_id_of_string_and_promoted_product): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfStringAndPromotedProduct
```



This endpoint removes one or more products from promotion on the specified line item.  The resulting state of the line item is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$json_api_data_request_with_id_of_string_and_promoted_product = new \criteo\api\retailmedia\preview\Model\JsonApiDataRequestWithIdOfStringAndPromotedProduct(); // \criteo\api\retailmedia\preview\Model\JsonApiDataRequestWithIdOfStringAndPromotedProduct

try {
    $result = $apiInstance->deleteApiV1ExternalLineItemProductsByLineItemId($line_item_id, $json_api_data_request_with_id_of_string_and_promoted_product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteApiV1ExternalLineItemProductsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **json_api_data_request_with_id_of_string_and_promoted_product** | [**\criteo\api\retailmedia\preview\Model\JsonApiDataRequestWithIdOfStringAndPromotedProduct**](../Model/JsonApiDataRequestWithIdOfStringAndPromotedProduct.md)|  | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfStringAndPromotedProduct**](../Model/JsonApiPageResponseOfStringAndPromotedProduct.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| A catalog ID returned from an account catalog request. |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| A catalog ID returned from an account catalog request. |

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountBalancesByAccountId()`

```php
getApiV1ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfBalance
```



Gets page of balance objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
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
    $result = $apiInstance->getApiV1ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account to get balances for |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfBalance**](../Model/JsonApiPageResponseOfBalance.md)

### Authorization

[oauth](../../README.md#oauth)

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfBrand**](../Model/JsonApiPageResponseOfBrand.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountCampaignsByAccountId()`

```php
getApiV1ExternalAccountCampaignsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfCampaign
```



Gets page of campaign objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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
    $result = $apiInstance->getApiV1ExternalAccountCampaignsByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccountCampaignsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfCampaign**](../Model/JsonApiPageResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfRetailer**](../Model/JsonApiPageResponseOfRetailer.md)

### Authorization

[oauth](../../README.md#oauth)

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfAccount**](../Model/JsonApiPageResponseOfAccount.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalBalanceCampaignsByBalanceId()`

```php
getApiV1ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\PageOfBalanceCampaign
```



Gets page of campaigns for the given balanceId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
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
    $result = $apiInstance->getApiV1ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalBalanceCampaignsByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_id** | **string**| The balance to get campaigns from |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\PageOfBalanceCampaign**](../Model/PageOfBalanceCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCampaignByCampaignId()`

```php
getApiV1ExternalCampaignByCampaignId($campaign_id): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCampaign
```



Gets the campaign for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id

try {
    $result = $apiInstance->getApiV1ExternalCampaignByCampaignId($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCampaignByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCampaign**](../Model/JsonApiSingleResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCampaignLineItemsByCampaignId()`

```php
getApiV1ExternalCampaignLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfLineItem
```



Gets page of line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalCampaignLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCampaignLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfLineItem**](../Model/JsonApiPageResponseOfLineItem.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalLineItemByLineItemId()`

```php
getApiV1ExternalLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItem
```



Gets the line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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
    $result = $apiInstance->getApiV1ExternalLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The given line item id |

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItem**](../Model/JsonApiSingleResponseOfLineItem.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalLineItemProductsByLineItemId()`

```php
getApiV1ExternalLineItemProductsByLineItemId($line_item_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfStringAndPromotedProduct
```



This endpoint gets the promoted products on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
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
    $result = $apiInstance->getApiV1ExternalLineItemProductsByLineItemId($line_item_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalLineItemProductsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfStringAndPromotedProduct**](../Model/JsonApiPageResponseOfStringAndPromotedProduct.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalRetailerBrandsByRetailerId()`

```php
getApiV1ExternalRetailerBrandsByRetailerId($retailer_id, $sku_stock_type_filter): \criteo\api\retailmedia\preview\Model\BrandPreviewListResponse
```



Gets the brands for the given retailer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

try {
    $result = $apiInstance->getApiV1ExternalRetailerBrandsByRetailerId($retailer_id, $sku_stock_type_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalRetailerBrandsByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retailer_id** | **int**| The retailer id for which brands should be fetched. |
 **sku_stock_type_filter** | **string**| Filter to narrow down brands [first-party|third-party|first-and-third-party]. Defaults to first-and-third-party | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\BrandPreviewListResponse**](../Model/BrandPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retailer_id** | **int**| The retailer id for which seller should be fetched. |
 **seller** | **string**| The seller id or seller name which should be validated. |

### Return type

[**\criteo\api\retailmedia\preview\Model\SellerPreviewResponse**](../Model/SellerPreviewResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account to request the catalog for. |
 **json_api_request_of_catalog_request_preview** | [**\criteo\api\retailmedia\preview\Model\JsonApiRequestOfCatalogRequestPreview**](../Model/JsonApiRequestOfCatalogRequestPreview.md)|  | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountCampaignsByAccountId()`

```php
postApiV1ExternalAccountCampaignsByAccountId($account_id, $external_post_campaign): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCampaign
```



Creates a new campaign with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$external_post_campaign = new \criteo\api\retailmedia\preview\Model\ExternalPostCampaign(); // \criteo\api\retailmedia\preview\Model\ExternalPostCampaign | The campaign settings to create a campaign with

try {
    $result = $apiInstance->postApiV1ExternalAccountCampaignsByAccountId($account_id, $external_post_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalAccountCampaignsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **external_post_campaign** | [**\criteo\api\retailmedia\preview\Model\ExternalPostCampaign**](../Model/ExternalPostCampaign.md)| The campaign settings to create a campaign with | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCampaign**](../Model/JsonApiSingleResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalCampaignLineItemsByCampaignId()`

```php
postApiV1ExternalCampaignLineItemsByCampaignId($campaign_id, $external_post_line_item): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItem
```



Creates a new line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$external_post_line_item = new \criteo\api\retailmedia\preview\Model\ExternalPostLineItem(); // \criteo\api\retailmedia\preview\Model\ExternalPostLineItem | The line item settings to create a line item with

try {
    $result = $apiInstance->postApiV1ExternalCampaignLineItemsByCampaignId($campaign_id, $external_post_line_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalCampaignLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **external_post_line_item** | [**\criteo\api\retailmedia\preview\Model\ExternalPostLineItem**](../Model/ExternalPostLineItem.md)| The line item settings to create a line item with | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItem**](../Model/JsonApiSingleResponseOfLineItem.md)

### Authorization

[oauth](../../README.md#oauth)

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_index** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0]
 **page_size** | **int**| The maximum number of results to return with each call. Must be greater than zero. | [optional] [default to 100]
 **request_body** | [**string[]**](../Model/string.md)| The list of SKU keys to retrieve sku information | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\SkuDataPreviewListResponse**](../Model/SkuDataPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

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


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_index = 0; // int | The start position in the overall list of matches. Must be zero or greater.
$page_size = 100; // int | The maximum number of results to return with each call. Must be greater than zero.
$sku_search_request_preview_request = new \criteo\api\retailmedia\preview\Model\SkuSearchRequestPreviewRequest(); // \criteo\api\retailmedia\preview\Model\SkuSearchRequestPreviewRequest

try {
    $result = $apiInstance->postApiV1ExternalCatalogsSkuSearch($page_index, $page_size, $sku_search_request_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalCatalogsSkuSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_index** | **int**| The start position in the overall list of matches. Must be zero or greater. | [optional] [default to 0]
 **page_size** | **int**| The maximum number of results to return with each call. Must be greater than zero. | [optional] [default to 100]
 **sku_search_request_preview_request** | [**\criteo\api\retailmedia\preview\Model\SkuSearchRequestPreviewRequest**](../Model/SkuSearchRequestPreviewRequest.md)|  | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\SkuDataPreviewListResponse**](../Model/SkuDataPreviewListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1ExternalBalanceCampaignsByBalanceId()`

```php
putApiV1ExternalBalanceCampaignsByBalanceId($balance_id, $json_api_data_request_of_put_balance_campaign): \criteo\api\retailmedia\preview\Model\PageOfBalanceCampaign
```



appends one or more campaigns to the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to add campaigns from
$json_api_data_request_of_put_balance_campaign = new \criteo\api\retailmedia\preview\Model\JsonApiDataRequestOfPutBalanceCampaign(); // \criteo\api\retailmedia\preview\Model\JsonApiDataRequestOfPutBalanceCampaign | The campaigns to append

try {
    $result = $apiInstance->putApiV1ExternalBalanceCampaignsByBalanceId($balance_id, $json_api_data_request_of_put_balance_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV1ExternalBalanceCampaignsByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_id** | **string**| The balance to add campaigns from |
 **json_api_data_request_of_put_balance_campaign** | [**\criteo\api\retailmedia\preview\Model\JsonApiDataRequestOfPutBalanceCampaign**](../Model/JsonApiDataRequestOfPutBalanceCampaign.md)| The campaigns to append | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\PageOfBalanceCampaign**](../Model/PageOfBalanceCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1ExternalCampaignByCampaignId()`

```php
putApiV1ExternalCampaignByCampaignId($campaign_id, $external_put_campaign): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCampaign
```



Updates the campaign for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$external_put_campaign = new \criteo\api\retailmedia\preview\Model\ExternalPutCampaign(); // \criteo\api\retailmedia\preview\Model\ExternalPutCampaign | The campaign settings to update that campaign with

try {
    $result = $apiInstance->putApiV1ExternalCampaignByCampaignId($campaign_id, $external_put_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV1ExternalCampaignByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **external_put_campaign** | [**\criteo\api\retailmedia\preview\Model\ExternalPutCampaign**](../Model/ExternalPutCampaign.md)| The campaign settings to update that campaign with | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfCampaign**](../Model/JsonApiSingleResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1ExternalLineItemByLineItemId()`

```php
putApiV1ExternalLineItemByLineItemId($line_item_id, $external_put_line_item): \criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItem
```



Updates the line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$external_put_line_item = new \criteo\api\retailmedia\preview\Model\ExternalPutLineItem(); // \criteo\api\retailmedia\preview\Model\ExternalPutLineItem | The line item settings to create a line item with

try {
    $result = $apiInstance->putApiV1ExternalLineItemByLineItemId($line_item_id, $external_put_line_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV1ExternalLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The given line item id |
 **external_put_line_item** | [**\criteo\api\retailmedia\preview\Model\ExternalPutLineItem**](../Model/ExternalPutLineItem.md)| The line item settings to create a line item with | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiSingleResponseOfLineItem**](../Model/JsonApiSingleResponseOfLineItem.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1ExternalLineItemProductsByLineItemId()`

```php
putApiV1ExternalLineItemProductsByLineItemId($line_item_id, $json_api_data_request_with_id_of_string_and_promoted_product): \criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfStringAndPromotedProduct
```



This endpoint appends one or more products to promote on the specified line item.  The resulting state of the line item is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$json_api_data_request_with_id_of_string_and_promoted_product = new \criteo\api\retailmedia\preview\Model\JsonApiDataRequestWithIdOfStringAndPromotedProduct(); // \criteo\api\retailmedia\preview\Model\JsonApiDataRequestWithIdOfStringAndPromotedProduct | the products to append to this line item

try {
    $result = $apiInstance->putApiV1ExternalLineItemProductsByLineItemId($line_item_id, $json_api_data_request_with_id_of_string_and_promoted_product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV1ExternalLineItemProductsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **json_api_data_request_with_id_of_string_and_promoted_product** | [**\criteo\api\retailmedia\preview\Model\JsonApiDataRequestWithIdOfStringAndPromotedProduct**](../Model/JsonApiDataRequestWithIdOfStringAndPromotedProduct.md)| the products to append to this line item | [optional]

### Return type

[**\criteo\api\retailmedia\preview\Model\JsonApiPageResponseOfStringAndPromotedProduct**](../Model/JsonApiPageResponseOfStringAndPromotedProduct.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
