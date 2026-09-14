# criteo\api\retailmedia\experimental\BalanceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPageOfBalancesV1()**](BalanceApi.md#getPageOfBalancesV1) | **GET** /experimental/retail-media/accounts/{accountId}/balances | /experimental/retail-media/accounts/{accountId}/balances |


## `getPageOfBalancesV1()`

```php
getPageOfBalancesV1($account_id, $limit, $limit_to_id, $offset): \criteo\api\retailmedia\experimental\Model\EntityResourceCollectionOutcomeBalanceV1AndMetadata
```

/experimental/retail-media/accounts/{accountId}/balances

Gets page of balance objects for the given account id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to get balances for.
$limit = 25; // int | The number of elements to be returned.
$limit_to_id = array('limit_to_id_example'); // string[] | The balance ids which the result is limited to.
$offset = 0; // int | The (zero-based) starting offset in the collection.

try {
    $result = $apiInstance->getPageOfBalancesV1($account_id, $limit, $limit_to_id, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getPageOfBalancesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account to get balances for. | |
| **limit** | **int**| The number of elements to be returned. | [optional] [default to 25] |
| **limit_to_id** | [**string[]**](../Model/string.md)| The balance ids which the result is limited to. | [optional] |
| **offset** | **int**| The (zero-based) starting offset in the collection. | [optional] [default to 0] |

### Return type

[**\criteo\api\retailmedia\experimental\Model\EntityResourceCollectionOutcomeBalanceV1AndMetadata**](../Model/EntityResourceCollectionOutcomeBalanceV1AndMetadata.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
