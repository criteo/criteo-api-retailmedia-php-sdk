# criteo\api\retailmedia\v2024_04\BalanceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApi202110ExternalBalanceCampaignsByBalanceId()**](BalanceApi.md#getApi202110ExternalBalanceCampaignsByBalanceId) | **GET** /2024-04/retail-media/balances/{balance-id}/campaigns |  |
| [**getApiV1ExternalAccountBalancesByAccountId()**](BalanceApi.md#getApiV1ExternalAccountBalancesByAccountId) | **GET** /2024-04/retail-media/accounts/{account-id}/balances |  |
| [**getApiV1ExternalAccountByAccountIdAndBalanceId()**](BalanceApi.md#getApiV1ExternalAccountByAccountIdAndBalanceId) | **GET** /2024-04/retail-media/accounts/{account-id}/balances/{balanceId} |  |
| [**patchApiV1ExternalAccountByAccountIdAndBalanceId()**](BalanceApi.md#patchApiV1ExternalAccountByAccountIdAndBalanceId) | **PATCH** /2024-04/retail-media/accounts/{account-id}/balances/{balanceId} |  |
| [**postApiV1ExternalAccountAddFundsByAccountIdAndBalanceId()**](BalanceApi.md#postApiV1ExternalAccountAddFundsByAccountIdAndBalanceId) | **POST** /2024-04/retail-media/accounts/{account-id}/balances/{balanceId}/add-funds |  |
| [**postApiV1ExternalAccountBalancesByAccountId()**](BalanceApi.md#postApiV1ExternalAccountBalancesByAccountId) | **POST** /2024-04/retail-media/accounts/{account-id}/balances |  |
| [**postApiV1ExternalAccountChangeDatesByAccountIdAndBalanceId()**](BalanceApi.md#postApiV1ExternalAccountChangeDatesByAccountIdAndBalanceId) | **POST** /2024-04/retail-media/accounts/{account-id}/balances/{balanceId}/change-dates |  |


## `getApi202110ExternalBalanceCampaignsByBalanceId()`

```php
getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2024_04\Model\BalanceCampaign202110PagedListResponse
```



Gets page of campaigns for the given balanceId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\BalanceApi(
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
    $result = $apiInstance->getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApi202110ExternalBalanceCampaignsByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| The balance to get campaigns from | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountBalancesByAccountId()`

```php
getApiV1ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2024_04\Model\BalanceResponsePagedListResponse
```



Get page of balances for the given accountId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to get page of balances for
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 0; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 25; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApiV1ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to get page of balances for | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] [default to 0] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] [default to 25] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\BalanceResponsePagedListResponse**](../Model/BalanceResponsePagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountByAccountIdAndBalanceId()`

```php
getApiV1ExternalAccountByAccountIdAndBalanceId($account_id, $balance_id): \criteo\api\retailmedia\v2024_04\Model\BalanceResponse
```



Get a balance for the given account id and balance id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance id

try {
    $result = $apiInstance->getApiV1ExternalAccountByAccountIdAndBalanceId($account_id, $balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApiV1ExternalAccountByAccountIdAndBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance id | |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApiV1ExternalAccountByAccountIdAndBalanceId()`

```php
patchApiV1ExternalAccountByAccountIdAndBalanceId($account_id, $balance_id, $update_balance_model_request): \criteo\api\retailmedia\v2024_04\Model\BalanceResponse
```



Modify a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to change the dates
$update_balance_model_request = new \criteo\api\retailmedia\v2024_04\Model\UpdateBalanceModelRequest(); // \criteo\api\retailmedia\v2024_04\Model\UpdateBalanceModelRequest

try {
    $result = $apiInstance->patchApiV1ExternalAccountByAccountIdAndBalanceId($account_id, $balance_id, $update_balance_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->patchApiV1ExternalAccountByAccountIdAndBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to change the dates | |
| **update_balance_model_request** | [**\criteo\api\retailmedia\v2024_04\Model\UpdateBalanceModelRequest**](../Model/UpdateBalanceModelRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountAddFundsByAccountIdAndBalanceId()`

```php
postApiV1ExternalAccountAddFundsByAccountIdAndBalanceId($account_id, $balance_id, $add_funds_to_balance_request): \criteo\api\retailmedia\v2024_04\Model\BalanceResponse
```



Add funds to a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to add funds to
$add_funds_to_balance_request = new \criteo\api\retailmedia\v2024_04\Model\AddFundsToBalanceRequest(); // \criteo\api\retailmedia\v2024_04\Model\AddFundsToBalanceRequest

try {
    $result = $apiInstance->postApiV1ExternalAccountAddFundsByAccountIdAndBalanceId($account_id, $balance_id, $add_funds_to_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiV1ExternalAccountAddFundsByAccountIdAndBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to add funds to | |
| **add_funds_to_balance_request** | [**\criteo\api\retailmedia\v2024_04\Model\AddFundsToBalanceRequest**](../Model/AddFundsToBalanceRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountBalancesByAccountId()`

```php
postApiV1ExternalAccountBalancesByAccountId($account_id, $create_balance_request): \criteo\api\retailmedia\v2024_04\Model\BalanceResponse
```



Create balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to create balances for
$create_balance_request = new \criteo\api\retailmedia\v2024_04\Model\CreateBalanceRequest(); // \criteo\api\retailmedia\v2024_04\Model\CreateBalanceRequest

try {
    $result = $apiInstance->postApiV1ExternalAccountBalancesByAccountId($account_id, $create_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiV1ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to create balances for | |
| **create_balance_request** | [**\criteo\api\retailmedia\v2024_04\Model\CreateBalanceRequest**](../Model/CreateBalanceRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountChangeDatesByAccountIdAndBalanceId()`

```php
postApiV1ExternalAccountChangeDatesByAccountIdAndBalanceId($account_id, $balance_id, $change_dates_of_balance_request): \criteo\api\retailmedia\v2024_04\Model\BalanceResponse
```



Change dates of a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_04\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_04\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to change the dates
$change_dates_of_balance_request = new \criteo\api\retailmedia\v2024_04\Model\ChangeDatesOfBalanceRequest(); // \criteo\api\retailmedia\v2024_04\Model\ChangeDatesOfBalanceRequest

try {
    $result = $apiInstance->postApiV1ExternalAccountChangeDatesByAccountIdAndBalanceId($account_id, $balance_id, $change_dates_of_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiV1ExternalAccountChangeDatesByAccountIdAndBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to change the dates | |
| **change_dates_of_balance_request** | [**\criteo\api\retailmedia\v2024_04\Model\ChangeDatesOfBalanceRequest**](../Model/ChangeDatesOfBalanceRequest.md)|  | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_04\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
