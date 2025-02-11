# criteo\api\retailmedia\preview\AccountsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiExternalV1AccountPrivateMarketChildAccountsByAccountId()**](AccountsApi.md#getApiExternalV1AccountPrivateMarketChildAccountsByAccountId) | **GET** /preview/retail-media/account-management/accounts/{accountId}/private-market-child-accounts |  |
| [**grantConsent()**](AccountsApi.md#grantConsent) | **POST** /preview/retail-media/accounts/{accountId}/grant-consent |  |
| [**searchSellers()**](AccountsApi.md#searchSellers) | **POST** /preview/retail-media/accounts/sellers/search |  |


## `getApiExternalV1AccountPrivateMarketChildAccountsByAccountId()`

```php
getApiExternalV1AccountPrivateMarketChildAccountsByAccountId($account_id, $offset, $limit): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeOfRetailMediaChildAccount
```



Gets page of private market child accounts that are associated with the given account

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
$account_id = 'account_id_example'; // string | Account Id
$offset = 0; // int | The (zero-based) offset into the collection of accounts. The default is 0.
$limit = 25; // int | The number of accounts to be returned. The default is 25.

try {
    $result = $apiInstance->getApiExternalV1AccountPrivateMarketChildAccountsByAccountId($account_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getApiExternalV1AccountPrivateMarketChildAccountsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **offset** | **int**| The (zero-based) offset into the collection of accounts. The default is 0. | [optional] [default to 0] |
| **limit** | **int**| The number of accounts to be returned. The default is 25. | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeOfRetailMediaChildAccount**](../Model/EntityResourceCollectionOutcomeOfRetailMediaChildAccount.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `searchSellers()`

```php
searchSellers($value_resource_input_of_seller_search): \criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomeOfSellerSearchResult
```



Get the sellers mapped to provided accounts

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
$value_resource_input_of_seller_search = new \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSellerSearch(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputOfSellerSearch | 

try {
    $result = $apiInstance->searchSellers($value_resource_input_of_seller_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchSellers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_resource_input_of_seller_search** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputOfSellerSearch**](../Model/ValueResourceInputOfSellerSearch.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomeOfSellerSearchResult**](../Model/ValueResourceCollectionOutcomeOfSellerSearchResult.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
