# criteo\api\retailmedia\v2024_07\AccountsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addBrands()**](AccountsApi.md#addBrands) | **POST** /2024-07/retail-media/account-management/accounts/{accountId}/brands/add |  |
| [**createPrivateMarketDemandBrandAccount()**](AccountsApi.md#createPrivateMarketDemandBrandAccount) | **POST** /2024-07/retail-media/account-management/accounts/{accountId}/create-brand-account |  |
| [**createPrivateMarketDemandSellerAccount()**](AccountsApi.md#createPrivateMarketDemandSellerAccount) | **POST** /2024-07/retail-media/account-management/accounts/{accountId}/create-seller-account |  |
| [**getApiV1ExternalAccounts()**](AccountsApi.md#getApiV1ExternalAccounts) | **GET** /2024-07/retail-media/accounts |  |
| [**removeBrands()**](AccountsApi.md#removeBrands) | **POST** /2024-07/retail-media/account-management/accounts/{accountId}/brands/remove |  |
| [**updateSellers()**](AccountsApi.md#updateSellers) | **PUT** /2024-07/retail-media/account-management/accounts/{accountId}/sellers |  |


## `addBrands()`

```php
addBrands($account_id, $value_resource_input_of_retail_media_brands): \criteo\api\retailmedia\v2024_07\Model\ValueResourceOfRetailMediaBrands
```



Add brands to an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | the account id to update
$value_resource_input_of_retail_media_brands = new \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrands(); // \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrands | brands to associate to account

try {
    $result = $apiInstance->addBrands($account_id, $value_resource_input_of_retail_media_brands);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->addBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| the account id to update | |
| **value_resource_input_of_retail_media_brands** | [**\criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrands**](../Model/ValueResourceInputOfRetailMediaBrands.md)| brands to associate to account | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\ValueResourceOfRetailMediaBrands**](../Model/ValueResourceOfRetailMediaBrands.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrivateMarketDemandBrandAccount()`

```php
createPrivateMarketDemandBrandAccount($account_id, $value_resource_input_of_retail_media_brand_account_creation): \criteo\api\retailmedia\v2024_07\Model\ResourceOutcomeOfRetailMediaAccount
```



Creates a new child Demand Brand Account for the provided parent private market account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id for the parent private market account
$value_resource_input_of_retail_media_brand_account_creation = new \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrandAccountCreation(); // \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrandAccountCreation | Initial creation and configuration options for the new account

try {
    $result = $apiInstance->createPrivateMarketDemandBrandAccount($account_id, $value_resource_input_of_retail_media_brand_account_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createPrivateMarketDemandBrandAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id for the parent private market account | |
| **value_resource_input_of_retail_media_brand_account_creation** | [**\criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrandAccountCreation**](../Model/ValueResourceInputOfRetailMediaBrandAccountCreation.md)| Initial creation and configuration options for the new account | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\ResourceOutcomeOfRetailMediaAccount**](../Model/ResourceOutcomeOfRetailMediaAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrivateMarketDemandSellerAccount()`

```php
createPrivateMarketDemandSellerAccount($account_id, $value_resource_input_of_retail_media_seller_account_creation): \criteo\api\retailmedia\v2024_07\Model\ResourceOutcomeOfRetailMediaAccount
```



Creates a new child Demand Seller Account for the provided parent private market account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id for the parent private market account
$value_resource_input_of_retail_media_seller_account_creation = new \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaSellerAccountCreation(); // \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaSellerAccountCreation | Initial creation and configuration options for the new account

try {
    $result = $apiInstance->createPrivateMarketDemandSellerAccount($account_id, $value_resource_input_of_retail_media_seller_account_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createPrivateMarketDemandSellerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id for the parent private market account | |
| **value_resource_input_of_retail_media_seller_account_creation** | [**\criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaSellerAccountCreation**](../Model/ValueResourceInputOfRetailMediaSellerAccountCreation.md)| Initial creation and configuration options for the new account | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\ResourceOutcomeOfRetailMediaAccount**](../Model/ResourceOutcomeOfRetailMediaAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccounts()`

```php
getApiV1ExternalAccounts($limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2024_07\Model\JsonApiPageResponseOfAccount
```



Gets page of account objects that the current user can access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccounts($limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getApiV1ExternalAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\JsonApiPageResponseOfAccount**](../Model/JsonApiPageResponseOfAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeBrands()`

```php
removeBrands($account_id, $value_resource_input_of_retail_media_brands): \criteo\api\retailmedia\v2024_07\Model\ValueResourceOfRetailMediaBrands
```



Remove a brand from an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account id to update
$value_resource_input_of_retail_media_brands = new \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrands(); // \criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrands | Brands to remove from account

try {
    $result = $apiInstance->removeBrands($account_id, $value_resource_input_of_retail_media_brands);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->removeBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account id to update | |
| **value_resource_input_of_retail_media_brands** | [**\criteo\api\retailmedia\v2024_07\Model\ValueResourceInputOfRetailMediaBrands**](../Model/ValueResourceInputOfRetailMediaBrands.md)| Brands to remove from account | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\ValueResourceOfRetailMediaBrands**](../Model/ValueResourceOfRetailMediaBrands.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSellers()`

```php
updateSellers($account_id, $value_resource_collection_input_of_retail_media_seller): \criteo\api\retailmedia\v2024_07\Model\ValueResourceCollectionOutcomeOfRetailMediaSeller
```



replace the sellers assoiated with an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | the account id to update
$value_resource_collection_input_of_retail_media_seller = new \criteo\api\retailmedia\v2024_07\Model\ValueResourceCollectionInputOfRetailMediaSeller(); // \criteo\api\retailmedia\v2024_07\Model\ValueResourceCollectionInputOfRetailMediaSeller | sellers to associate

try {
    $result = $apiInstance->updateSellers($account_id, $value_resource_collection_input_of_retail_media_seller);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateSellers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| the account id to update | |
| **value_resource_collection_input_of_retail_media_seller** | [**\criteo\api\retailmedia\v2024_07\Model\ValueResourceCollectionInputOfRetailMediaSeller**](../Model/ValueResourceCollectionInputOfRetailMediaSeller.md)| sellers to associate | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\ValueResourceCollectionOutcomeOfRetailMediaSeller**](../Model/ValueResourceCollectionOutcomeOfRetailMediaSeller.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
