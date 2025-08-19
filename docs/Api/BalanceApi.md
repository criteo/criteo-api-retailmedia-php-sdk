# criteo\api\retailmedia\preview\BalanceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiExternalV2AccountBalancesByAccountId()**](BalanceApi.md#getApiExternalV2AccountBalancesByAccountId) | **GET** /preview/retail-media/accounts/{account-id}/balances |  |
| [**getApiExternalV2AccountByAccountIdBalancesbalanceId()**](BalanceApi.md#getApiExternalV2AccountByAccountIdBalancesbalanceId) | **GET** /preview/retail-media/accounts/{account-id}/balances/{balance-id} |  |
| [**getBalanceHistory()**](BalanceApi.md#getBalanceHistory) | **GET** /preview/retail-media/balances/{balanceId}/history |  |
| [**patchApiExternalV2AccountByAccountIdBalancesbalanceId()**](BalanceApi.md#patchApiExternalV2AccountByAccountIdBalancesbalanceId) | **PATCH** /preview/retail-media/accounts/{account-id}/balances/{balance-id} |  |
| [**postApiExternalV2AccountBalancesByAccountId()**](BalanceApi.md#postApiExternalV2AccountBalancesByAccountId) | **POST** /preview/retail-media/accounts/{account-id}/balances |  |
| [**postApiExternalV2AccountChangeDatesByAccountIdBalancesbalanceId()**](BalanceApi.md#postApiExternalV2AccountChangeDatesByAccountIdBalancesbalanceId) | **POST** /preview/retail-media/accounts/{account-id}/balances/{balance-id}/change-dates |  |


## `getApiExternalV2AccountBalancesByAccountId()`

```php
getApiExternalV2AccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\preview\Model\BalanceResponseV2PagedListResponse
```



Gets page of balance objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to get balances for
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiExternalV2AccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApiExternalV2AccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to get balances for | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\preview\Model\BalanceResponseV2PagedListResponse**](../Model/BalanceResponseV2PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiExternalV2AccountByAccountIdBalancesbalanceId()`

```php
getApiExternalV2AccountByAccountIdBalancesbalanceId($account_id, $balance_id): \criteo\api\retailmedia\preview\Model\BalanceResponseV2Response
```



Get a balance for the given account id and balance id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance id

try {
    $result = $apiInstance->getApiExternalV2AccountByAccountIdBalancesbalanceId($account_id, $balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApiExternalV2AccountByAccountIdBalancesbalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance id | |

### Return type

[**\criteo\api\retailmedia\preview\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalanceHistory()`

```php
getBalanceHistory($balance_id, $limit, $limit_to_change_types, $offset): \criteo\api\retailmedia\preview\Model\PageOfBalanceHistoryChangeDataCaptureV1
```



Gets the balance's historical change data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | Balance id.
$limit = 25; // int | The number of elements to be returned.
$limit_to_change_types = 'limit_to_change_types_example'; // string | Comma separated change types string that will be queried.
$offset = 0; // int | The (zero-based) starting offset in the collection.

try {
    $result = $apiInstance->getBalanceHistory($balance_id, $limit, $limit_to_change_types, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getBalanceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| Balance id. | |
| **limit** | **int**| The number of elements to be returned. | [optional] [default to 25] |
| **limit_to_change_types** | **string**| Comma separated change types string that will be queried. | [optional] |
| **offset** | **int**| The (zero-based) starting offset in the collection. | [optional] [default to 0] |

### Return type

[**\criteo\api\retailmedia\preview\Model\PageOfBalanceHistoryChangeDataCaptureV1**](../Model/PageOfBalanceHistoryChangeDataCaptureV1.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApiExternalV2AccountByAccountIdBalancesbalanceId()`

```php
patchApiExternalV2AccountByAccountIdBalancesbalanceId($account_id, $balance_id, $update_balance_model_v2_request): \criteo\api\retailmedia\preview\Model\BalanceResponseV2Response
```



Modify a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to change the dates
$update_balance_model_v2_request = new \criteo\api\retailmedia\preview\Model\UpdateBalanceModelV2Request(); // \criteo\api\retailmedia\preview\Model\UpdateBalanceModelV2Request | An object that represents the available options to modify a balance.

try {
    $result = $apiInstance->patchApiExternalV2AccountByAccountIdBalancesbalanceId($account_id, $balance_id, $update_balance_model_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->patchApiExternalV2AccountByAccountIdBalancesbalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to change the dates | |
| **update_balance_model_v2_request** | [**\criteo\api\retailmedia\preview\Model\UpdateBalanceModelV2Request**](../Model/UpdateBalanceModelV2Request.md)| An object that represents the available options to modify a balance. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiExternalV2AccountBalancesByAccountId()`

```php
postApiExternalV2AccountBalancesByAccountId($account_id, $create_balance_v2_request)
```



Create balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to create balances for
$create_balance_v2_request = new \criteo\api\retailmedia\preview\Model\CreateBalanceV2Request(); // \criteo\api\retailmedia\preview\Model\CreateBalanceV2Request | An object that represents the available options to set when creating a Retail Media Balance

try {
    $apiInstance->postApiExternalV2AccountBalancesByAccountId($account_id, $create_balance_v2_request);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiExternalV2AccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to create balances for | |
| **create_balance_v2_request** | [**\criteo\api\retailmedia\preview\Model\CreateBalanceV2Request**](../Model/CreateBalanceV2Request.md)| An object that represents the available options to set when creating a Retail Media Balance | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiExternalV2AccountChangeDatesByAccountIdBalancesbalanceId()`

```php
postApiExternalV2AccountChangeDatesByAccountIdBalancesbalanceId($account_id, $balance_id, $change_dates_of_balance_v2_request): \criteo\api\retailmedia\preview\Model\BalanceResponseV2Response
```



Change dates of a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to change the dates
$change_dates_of_balance_v2_request = new \criteo\api\retailmedia\preview\Model\ChangeDatesOfBalanceV2Request(); // \criteo\api\retailmedia\preview\Model\ChangeDatesOfBalanceV2Request | An object that represents the available options to modify schedule of a balance.

try {
    $result = $apiInstance->postApiExternalV2AccountChangeDatesByAccountIdBalancesbalanceId($account_id, $balance_id, $change_dates_of_balance_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiExternalV2AccountChangeDatesByAccountIdBalancesbalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to change the dates | |
| **change_dates_of_balance_v2_request** | [**\criteo\api\retailmedia\preview\Model\ChangeDatesOfBalanceV2Request**](../Model/ChangeDatesOfBalanceV2Request.md)| An object that represents the available options to modify schedule of a balance. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
