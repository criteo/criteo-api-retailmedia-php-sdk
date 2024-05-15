# criteo\api\retailmedia\v2024_04\AccountsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addBrands()**](AccountsApi.md#addBrands) | **POST** /2024-04/retail-media/account-management/accounts/{accountId}/brands/add |  |
| [**createPrivateMarketDemandBrandAccount()**](AccountsApi.md#createPrivateMarketDemandBrandAccount) | **POST** /2024-04/retail-media/account-management/accounts/{accountId}/create-brand-account |  |
| [**removeBrands()**](AccountsApi.md#removeBrands) | **POST** /2024-04/retail-media/account-management/accounts/{accountId}/brands/remove |  |


## `addBrands()`

```php
addBrands($account_id, $value_resource_input_of_retail_media_brands): \criteo\api\retailmedia\v2024_04\Model\ValueResourceOfRetailMediaBrands
```



Add brands to an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | the account id to update
$value_resource_input_of_retail_media_brands = new \criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrands(); // \criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrands | brands to associate to account

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
| **value_resource_input_of_retail_media_brands** | [**\criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrands**](../Model/ValueResourceInputOfRetailMediaBrands.md)| brands to associate to account | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\ValueResourceOfRetailMediaBrands**](../Model/ValueResourceOfRetailMediaBrands.md)

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
createPrivateMarketDemandBrandAccount($account_id, $value_resource_input_of_retail_media_brand_account_creation): \criteo\api\retailmedia\v2024_04\Model\ResourceOutcomeOfRetailMediaAccount
```



Creates a new child Demand Brand Account for the provided parent private market account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id for the parent private market account
$value_resource_input_of_retail_media_brand_account_creation = new \criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrandAccountCreation(); // \criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrandAccountCreation | Initial creation and configuration options for the new account

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
| **value_resource_input_of_retail_media_brand_account_creation** | [**\criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrandAccountCreation**](../Model/ValueResourceInputOfRetailMediaBrandAccountCreation.md)| Initial creation and configuration options for the new account | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\ResourceOutcomeOfRetailMediaAccount**](../Model/ResourceOutcomeOfRetailMediaAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeBrands()`

```php
removeBrands($account_id, $value_resource_input_of_retail_media_brands): \criteo\api\retailmedia\v2024_04\Model\ValueResourceOfRetailMediaBrands
```



Remove a brand from an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | the account id to update
$value_resource_input_of_retail_media_brands = new \criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrands(); // \criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrands

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
| **account_id** | **string**| the account id to update | |
| **value_resource_input_of_retail_media_brands** | [**\criteo\api\retailmedia\v2024_04\Model\ValueResourceInputOfRetailMediaBrands**](../Model/ValueResourceInputOfRetailMediaBrands.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\ValueResourceOfRetailMediaBrands**](../Model/ValueResourceOfRetailMediaBrands.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
