# criteo\api\retailmedia\v2023_07\BalanceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApi202110ExternalAccountBalancesByAccountId()**](BalanceApi.md#getApi202110ExternalAccountBalancesByAccountId) | **GET** /2023-07/retail-media/accounts/{account-id}/balances |  |
| [**getApi202110ExternalBalanceCampaignsByBalanceId()**](BalanceApi.md#getApi202110ExternalBalanceCampaignsByBalanceId) | **GET** /2023-07/retail-media/balances/{balance-id}/campaigns |  |


## `getApi202110ExternalAccountBalancesByAccountId()`

```php
getApi202110ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_07\Model\Balance202110PagedListResponse
```



Gets page of balance objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_07\Api\BalanceApi(
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
    $result = $apiInstance->getApi202110ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getApi202110ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to get balances for | |
| **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional] |
| **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional] |
| **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional] |

### Return type

[**\criteo\api\retailmedia\v2023_07\Model\Balance202110PagedListResponse**](../Model/Balance202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalBalanceCampaignsByBalanceId()`

```php
getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2023_07\Model\BalanceCampaign202110PagedListResponse
```



Gets page of campaigns for the given balanceId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2023_07\Api\BalanceApi(
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

[**\criteo\api\retailmedia\v2023_07\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
