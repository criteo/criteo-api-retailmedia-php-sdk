# criteo\api\retailmedia\preview\AccountsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiExternalV1AccountPrivateMarketChildAccountsByAccountId()**](AccountsApi.md#getApiExternalV1AccountPrivateMarketChildAccountsByAccountId) | **GET** /preview/retail-media/account-management/accounts/{accountId}/private-market-child-accounts |  |
| [**previewRetailMediaAccountsFeesSearchPost()**](AccountsApi.md#previewRetailMediaAccountsFeesSearchPost) | **POST** /preview/retail-media/accounts/fees/search |  |
| [**previewRetailMediaAccountsFeesUpdatePost()**](AccountsApi.md#previewRetailMediaAccountsFeesUpdatePost) | **POST** /preview/retail-media/accounts/fees/update |  |


## `getApiExternalV1AccountPrivateMarketChildAccountsByAccountId()`

```php
getApiExternalV1AccountPrivateMarketChildAccountsByAccountId($account_id, $limit, $offset): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeOfRetailMediaChildAccountAndMetadata
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
$limit = 25; // int | The number of accounts to be returned. The default is 25.
$offset = 0; // int | The (zero-based) offset into the collection of accounts. The default is 0.

try {
    $result = $apiInstance->getApiExternalV1AccountPrivateMarketChildAccountsByAccountId($account_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getApiExternalV1AccountPrivateMarketChildAccountsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **limit** | **int**| The number of accounts to be returned. The default is 25. | [optional] [default to 25] |
| **offset** | **int**| The (zero-based) offset into the collection of accounts. The default is 0. | [optional] [default to 0] |

### Return type

[**\criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeOfRetailMediaChildAccountAndMetadata**](../Model/EntityResourceCollectionOutcomeOfRetailMediaChildAccountAndMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewRetailMediaAccountsFeesSearchPost()`

```php
previewRetailMediaAccountsFeesSearchPost($limit, $offset, $value_resource_input_account_fees_search_request): \criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomePrivateMarketAccountFeesAndMetadata
```



Get fees for provided accounts

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
$limit = 50; // int | used for paging, number of results returned per request, Maximum of 500
$offset = 0; // int | used for paging, number of records to skip
$value_resource_input_account_fees_search_request = new \criteo\api\retailmedia\preview\Model\ValueResourceInputAccountFeesSearchRequest(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputAccountFeesSearchRequest

try {
    $result = $apiInstance->previewRetailMediaAccountsFeesSearchPost($limit, $offset, $value_resource_input_account_fees_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->previewRetailMediaAccountsFeesSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| used for paging, number of results returned per request, Maximum of 500 | [optional] [default to 50] |
| **offset** | **int**| used for paging, number of records to skip | [optional] [default to 0] |
| **value_resource_input_account_fees_search_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputAccountFeesSearchRequest**](../Model/ValueResourceInputAccountFeesSearchRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomePrivateMarketAccountFeesAndMetadata**](../Model/ValueResourceCollectionOutcomePrivateMarketAccountFeesAndMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewRetailMediaAccountsFeesUpdatePost()`

```php
previewRetailMediaAccountsFeesUpdatePost($value_resource_input_account_fees_update_request): \criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAccountFeesUpdateResult
```



Set fees for provided accounts

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
$value_resource_input_account_fees_update_request = new \criteo\api\retailmedia\preview\Model\ValueResourceInputAccountFeesUpdateRequest(); // \criteo\api\retailmedia\preview\Model\ValueResourceInputAccountFeesUpdateRequest

try {
    $result = $apiInstance->previewRetailMediaAccountsFeesUpdatePost($value_resource_input_account_fees_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->previewRetailMediaAccountsFeesUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_resource_input_account_fees_update_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputAccountFeesUpdateRequest**](../Model/ValueResourceInputAccountFeesUpdateRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\ValueResourceOutcomeAccountFeesUpdateResult**](../Model/ValueResourceOutcomeAccountFeesUpdateResult.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
