# criteo\api\retailmedia\v2024_07\BalanceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApi202110ExternalBalanceCampaignsByBalanceId()**](BalanceApi.md#getApi202110ExternalBalanceCampaignsByBalanceId) | **GET** /2024-07/retail-media/balances/{balance-id}/campaigns |  |
| [**getApiV2ExternalAccountBalancesByAccountId()**](BalanceApi.md#getApiV2ExternalAccountBalancesByAccountId) | **GET** /2024-07/retail-media/accounts/{account-id}/balances |  |
| [**getApiV2ExternalAccountByAccountIdBalancesbalanceId()**](BalanceApi.md#getApiV2ExternalAccountByAccountIdBalancesbalanceId) | **GET** /2024-07/retail-media/accounts/{account-id}/balances/{balance-id} |  |
| [**getBalanceHistory()**](BalanceApi.md#getBalanceHistory) | **GET** /2024-07/retail-media/balances/{balanceId}/history |  |
| [**patchApiV2ExternalAccountByAccountIdBalancesbalanceId()**](BalanceApi.md#patchApiV2ExternalAccountByAccountIdBalancesbalanceId) | **PATCH** /2024-07/retail-media/accounts/{account-id}/balances/{balance-id} |  |
| [**postApiV2ExternalAccountAddFundsByAccountIdBalancesbalanceId()**](BalanceApi.md#postApiV2ExternalAccountAddFundsByAccountIdBalancesbalanceId) | **POST** /2024-07/retail-media/accounts/{account-id}/balances/{balance-id}/add-funds |  |
| [**postApiV2ExternalAccountBalancesByAccountId()**](BalanceApi.md#postApiV2ExternalAccountBalancesByAccountId) | **POST** /2024-07/retail-media/accounts/{account-id}/balances |  |
| [**postApiV2ExternalAccountChangeDatesByAccountIdBalancesbalanceId()**](BalanceApi.md#postApiV2ExternalAccountChangeDatesByAccountIdBalancesbalanceId) | **POST** /2024-07/retail-media/accounts/{account-id}/balances/{balance-id}/change-dates |  |


## `getApi202110ExternalBalanceCampaignsByBalanceId()`

```php
getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2024_07\Model\BalanceCampaign202110PagedListResponse
```



Gets page of campaigns for the given balanceId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
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

[**\criteo\api\retailmedia\v2024_07\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAccountBalancesByAccountId()`

```php
getApiV2ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2024_07\Model\PagedResourceCollectionOutcomeOfBalanceResponseV2
```



Gets page of balance objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
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
    $result = $apiInstance->getApiV2ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApiV2ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
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

[**\criteo\api\retailmedia\v2024_07\Model\PagedResourceCollectionOutcomeOfBalanceResponseV2**](../Model/PagedResourceCollectionOutcomeOfBalanceResponseV2.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAccountByAccountIdBalancesbalanceId()`

```php
getApiV2ExternalAccountByAccountIdBalancesbalanceId($account_id, $balance_id): \criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response
```



Get a balance for the given account id and balance id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance id

try {
    $result = $apiInstance->getApiV2ExternalAccountByAccountIdBalancesbalanceId($account_id, $balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApiV2ExternalAccountByAccountIdBalancesbalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance id | |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

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
getBalanceHistory($balance_id, $offset, $limit, $limit_to_change_types): \criteo\api\retailmedia\v2024_07\Model\PageOfBalanceHistoryChangeDataCaptureV1
```



Gets the balance's historical change data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | Balance id.
$offset = 0; // int | The (zero-based) starting offset in the collection.
$limit = 25; // int | The number of elements to be returned.
$limit_to_change_types = 'limit_to_change_types_example'; // string | Comma separated change types string that will be queried.

try {
    $result = $apiInstance->getBalanceHistory($balance_id, $offset, $limit, $limit_to_change_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getBalanceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| Balance id. | |
| **offset** | **int**| The (zero-based) starting offset in the collection. | [optional] [default to 0] |
| **limit** | **int**| The number of elements to be returned. | [optional] [default to 25] |
| **limit_to_change_types** | **string**| Comma separated change types string that will be queried. | [optional] |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\PageOfBalanceHistoryChangeDataCaptureV1**](../Model/PageOfBalanceHistoryChangeDataCaptureV1.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApiV2ExternalAccountByAccountIdBalancesbalanceId()`

```php
patchApiV2ExternalAccountByAccountIdBalancesbalanceId($account_id, $balance_id, $update_balance_model_v2_request): \criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response
```



Modify a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to change the dates
$update_balance_model_v2_request = new \criteo\api\retailmedia\v2024_07\Model\UpdateBalanceModelV2Request(); // \criteo\api\retailmedia\v2024_07\Model\UpdateBalanceModelV2Request | An object that represents the available options to modify a balance.

try {
    $result = $apiInstance->patchApiV2ExternalAccountByAccountIdBalancesbalanceId($account_id, $balance_id, $update_balance_model_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->patchApiV2ExternalAccountByAccountIdBalancesbalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to change the dates | |
| **update_balance_model_v2_request** | [**\criteo\api\retailmedia\v2024_07\Model\UpdateBalanceModelV2Request**](../Model/UpdateBalanceModelV2Request.md)| An object that represents the available options to modify a balance. | |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalAccountAddFundsByAccountIdBalancesbalanceId()`

```php
postApiV2ExternalAccountAddFundsByAccountIdBalancesbalanceId($account_id, $balance_id, $add_funds_to_balance_v2_request): \criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response
```



Add funds to a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to add funds to
$add_funds_to_balance_v2_request = new \criteo\api\retailmedia\v2024_07\Model\AddFundsToBalanceV2Request(); // \criteo\api\retailmedia\v2024_07\Model\AddFundsToBalanceV2Request | An object that represents the available options of adding funds to a balance.

try {
    $result = $apiInstance->postApiV2ExternalAccountAddFundsByAccountIdBalancesbalanceId($account_id, $balance_id, $add_funds_to_balance_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiV2ExternalAccountAddFundsByAccountIdBalancesbalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to add funds to | |
| **add_funds_to_balance_v2_request** | [**\criteo\api\retailmedia\v2024_07\Model\AddFundsToBalanceV2Request**](../Model/AddFundsToBalanceV2Request.md)| An object that represents the available options of adding funds to a balance. | |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalAccountBalancesByAccountId()`

```php
postApiV2ExternalAccountBalancesByAccountId($account_id, $create_balance_v2_request): \criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response
```



Create balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to create balances for
$create_balance_v2_request = new \criteo\api\retailmedia\v2024_07\Model\CreateBalanceV2Request(); // \criteo\api\retailmedia\v2024_07\Model\CreateBalanceV2Request | An object that represents the available options to set when creating a Retail Media Balance

try {
    $result = $apiInstance->postApiV2ExternalAccountBalancesByAccountId($account_id, $create_balance_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiV2ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to create balances for | |
| **create_balance_v2_request** | [**\criteo\api\retailmedia\v2024_07\Model\CreateBalanceV2Request**](../Model/CreateBalanceV2Request.md)| An object that represents the available options to set when creating a Retail Media Balance | |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalAccountChangeDatesByAccountIdBalancesbalanceId()`

```php
postApiV2ExternalAccountChangeDatesByAccountIdBalancesbalanceId($account_id, $balance_id, $change_dates_of_balance_v2_request): \criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response
```



Change dates of a balance for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2024_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2024_07\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account of the balance
$balance_id = 'balance_id_example'; // string | The balance to change the dates
$change_dates_of_balance_v2_request = new \criteo\api\retailmedia\v2024_07\Model\ChangeDatesOfBalanceV2Request(); // \criteo\api\retailmedia\v2024_07\Model\ChangeDatesOfBalanceV2Request | An object that represents the available options to modify schedule of a balance.

try {
    $result = $apiInstance->postApiV2ExternalAccountChangeDatesByAccountIdBalancesbalanceId($account_id, $balance_id, $change_dates_of_balance_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->postApiV2ExternalAccountChangeDatesByAccountIdBalancesbalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account of the balance | |
| **balance_id** | **string**| The balance to change the dates | |
| **change_dates_of_balance_v2_request** | [**\criteo\api\retailmedia\v2024_07\Model\ChangeDatesOfBalanceV2Request**](../Model/ChangeDatesOfBalanceV2Request.md)| An object that represents the available options to modify schedule of a balance. | |

### Return type

[**\criteo\api\retailmedia\v2024_07\Model\BalanceResponseV2Response**](../Model/BalanceResponseV2Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
