# criteo\api\retailmedia\preview\AudienceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**legacyGetAudienceV1()**](AudienceApi.md#legacyGetAudienceV1) | **GET** /preview/retail-media/accounts/{accountId}/audiences |  |
| [**legacyGetAudienceV2()**](AudienceApi.md#legacyGetAudienceV2) | **GET** /preview/retail-media/v2/accounts/{accountId}/audiences |  |


## `legacyGetAudienceV1()`

```php
legacyGetAudienceV1($account_id, $limit_to_id, $page_size, $page_index): \criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse
```



Get a page of Audiences. (deprecated Public API)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | ID of the account to which this audience belongs.
$limit_to_id = array(56); // int[] | Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId=1&limitToId=2
$page_size = 56; // int | Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page.
$page_index = 56; // int | Returns the specified page of results given a pageSize; pages are 0-indexed.

try {
    $result = $apiInstance->legacyGetAudienceV1($account_id, $limit_to_id, $page_size, $page_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->legacyGetAudienceV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| ID of the account to which this audience belongs. | |
| **limit_to_id** | [**int[]**](../Model/int.md)| Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 | [optional] |
| **page_size** | **int**| Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. | [optional] |
| **page_index** | **int**| Returns the specified page of results given a pageSize; pages are 0-indexed. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse**](../Model/RmLegacyAudienceGetEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyGetAudienceV2()`

```php
legacyGetAudienceV2($account_id, $limit_to_id, $page_size, $page_index): \criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse
```



Get a page of Audiences. (deprecated Public API)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | ID of the account to which this audience belongs.
$limit_to_id = array(56); // int[] | Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId=1&limitToId=2
$page_size = 56; // int | Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page.
$page_index = 56; // int | Returns the specified page of results given a pageSize; pages are 0-indexed.

try {
    $result = $apiInstance->legacyGetAudienceV2($account_id, $limit_to_id, $page_size, $page_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->legacyGetAudienceV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| ID of the account to which this audience belongs. | |
| **limit_to_id** | [**int[]**](../Model/int.md)| Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 | [optional] |
| **page_size** | **int**| Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. | [optional] |
| **page_index** | **int**| Returns the specified page of results given a pageSize; pages are 0-indexed. | [optional] |

### Return type

[**\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse**](../Model/RmLegacyAudienceGetEntityV2ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
