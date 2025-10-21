# criteo\api\retailmedia\preview\AccountsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountFeesSearch()**](AccountsApi.md#accountFeesSearch) | **POST** /preview/retail-media/accounts/fees/search |  |
| [**getPrivateMarketChildAccountsByAccountId()**](AccountsApi.md#getPrivateMarketChildAccountsByAccountId) | **GET** /preview/retail-media/account-management/accounts/{accountId}/private-market-child-accounts |  |
| [**updateAccountFees()**](AccountsApi.md#updateAccountFees) | **POST** /preview/retail-media/accounts/fees/update |  |


## `accountFeesSearch()`

```php
accountFeesSearch($limit, $offset, $value_resource_input_account_fees_search_request): \criteo\api\retailmedia\preview\Model\ValueResourceCollectionOutcomePrivateMarketAccountFeesAndMetadata
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
    $result = $apiInstance->accountFeesSearch($limit, $offset, $value_resource_input_account_fees_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountFeesSearch: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrivateMarketChildAccountsByAccountId()`

```php
getPrivateMarketChildAccountsByAccountId($account_id, $limit, $offset): \criteo\api\retailmedia\preview\Model\EntityResourceCollectionOutcomeOfRetailMediaChildAccountAndMetadata
```



Gets Private Market child accounts that are associated with the given account

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
    $result = $apiInstance->getPrivateMarketChildAccountsByAccountId($account_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getPrivateMarketChildAccountsByAccountId: ', $e->getMessage(), PHP_EOL;
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

## `updateAccountFees()`

```php
updateAccountFees($value_resource_input_account_fees_update_request)
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
    $apiInstance->updateAccountFees($value_resource_input_account_fees_update_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccountFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_resource_input_account_fees_update_request** | [**\criteo\api\retailmedia\preview\Model\ValueResourceInputAccountFeesUpdateRequest**](../Model/ValueResourceInputAccountFeesUpdateRequest.md)|  | [optional] |

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
