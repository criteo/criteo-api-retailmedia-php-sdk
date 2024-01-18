# criteo\api\retailmedia\preview\AccountsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPrivateMarketDemandBrandAccount()**](AccountsApi.md#createPrivateMarketDemandBrandAccount) | **POST** /preview/retail-media/account-management/accounts/{accountId}/create-brand-account |  |
| [**createPrivateMarketDemandSellerAccount()**](AccountsApi.md#createPrivateMarketDemandSellerAccount) | **POST** /preview/retail-media/account-management/accounts/{accountId}/create-seller-account |  |
| [**grantConsent()**](AccountsApi.md#grantConsent) | **POST** /preview/retail-media/accounts/{accountId}/grant-consent |  |
| [**updateBrands()**](AccountsApi.md#updateBrands) | **PUT** /preview/retail-media/account-management/accounts/{accountId}/brands |  |
| [**updateSellers()**](AccountsApi.md#updateSellers) | **PUT** /preview/retail-media/account-management/accounts/{accountId}/sellers |  |


## `createPrivateMarketDemandBrandAccount()`

```php
createPrivateMarketDemandBrandAccount($account_id, $retail_media_brand_account_creation): \criteo\api\retailmedia\preview\Model\ResourceOutcomeOfRetailMediaAccount
```



Creates a new child Demand Brand Account for the provided parent private market account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id for the parent private market account
$retail_media_brand_account_creation = new \criteo\api\retailmedia\preview\Model\RetailMediaBrandAccountCreation(); // \criteo\api\retailmedia\preview\Model\RetailMediaBrandAccountCreation | Initial creation and configuration options for the new account

try {
    $result = $apiInstance->createPrivateMarketDemandBrandAccount($account_id, $retail_media_brand_account_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createPrivateMarketDemandBrandAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id for the parent private market account | |
| **retail_media_brand_account_creation** | [**\criteo\api\retailmedia\preview\Model\RetailMediaBrandAccountCreation**](../Model/RetailMediaBrandAccountCreation.md)| Initial creation and configuration options for the new account | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ResourceOutcomeOfRetailMediaAccount**](../Model/ResourceOutcomeOfRetailMediaAccount.md)

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
createPrivateMarketDemandSellerAccount($account_id, $retail_media_seller_account_creation): \criteo\api\retailmedia\preview\Model\ResourceOutcomeOfRetailMediaAccount
```



Creates a new child Demand Seller Account for the provided parent private market account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id for the parent private market account
$retail_media_seller_account_creation = new \criteo\api\retailmedia\preview\Model\RetailMediaSellerAccountCreation(); // \criteo\api\retailmedia\preview\Model\RetailMediaSellerAccountCreation | Initial creation and configuration options for the new account

try {
    $result = $apiInstance->createPrivateMarketDemandSellerAccount($account_id, $retail_media_seller_account_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createPrivateMarketDemandSellerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id for the parent private market account | |
| **retail_media_seller_account_creation** | [**\criteo\api\retailmedia\preview\Model\RetailMediaSellerAccountCreation**](../Model/RetailMediaSellerAccountCreation.md)| Initial creation and configuration options for the new account | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ResourceOutcomeOfRetailMediaAccount**](../Model/ResourceOutcomeOfRetailMediaAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantConsent()`

```php
grantConsent($account_id, $grant_consent_input)
```



Grant consent to a business application on behalf of a Private Market demand account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The demand account ID on which to grant consent
$grant_consent_input = new \criteo\api\retailmedia\preview\Model\GrantConsentInput(); // \criteo\api\retailmedia\preview\Model\GrantConsentInput

try {
    $apiInstance->grantConsent($account_id, $grant_consent_input);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->grantConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The demand account ID on which to grant consent | |
| **grant_consent_input** | [**\criteo\api\retailmedia\preview\Model\GrantConsentInput**](../Model/GrantConsentInput.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBrands()`

```php
updateBrands($account_id, $request_body): \criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomeOfInt64
```



replace the brands for an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | the account id to update
$request_body = array(56); // int[] | brands to associate to account

try {
    $result = $apiInstance->updateBrands($account_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| the account id to update | |
| **request_body** | [**int[]**](../Model/int.md)| brands to associate to account | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomeOfInt64**](../Model/ValueResourceCollectionOutcomeOfInt64.md)

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
updateSellers($account_id, $retail_media_seller): \criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomeOfRetailMediaSeller
```



replace the sellers assoiated with an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | the account id to update
$retail_media_seller = array(new \criteo\api\retailmedia\preview\Model\RetailMediaSeller()); // \criteo\api\retailmedia\preview\Model\RetailMediaSeller[] | sellers to associate

try {
    $result = $apiInstance->updateSellers($account_id, $retail_media_seller);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateSellers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| the account id to update | |
| **retail_media_seller** | [**\criteo\api\retailmedia\preview\Model\RetailMediaSeller[]**](../Model/RetailMediaSeller.md)| sellers to associate | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomeOfRetailMediaSeller**](../Model/ValueResourceCollectionOutcomeOfRetailMediaSeller.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
