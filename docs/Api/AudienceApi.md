# criteo\api\retailmedia\preview\AudienceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateV1()**](AudienceApi.md#bulkCreateV1) | **POST** /preview/retail-media/accounts/{account-id}/audience-segments/create |  |
| [**bulkDeleteV1()**](AudienceApi.md#bulkDeleteV1) | **POST** /preview/retail-media/accounts/{account-id}/audience-segments/delete |  |
| [**bulkUpdateV1()**](AudienceApi.md#bulkUpdateV1) | **PATCH** /preview/retail-media/accounts/{account-id}/audience-segments |  |
| [**deleteContactListIdentifiers()**](AudienceApi.md#deleteContactListIdentifiers) | **POST** /preview/retail-media/audience-segments/{audience-segment-id}/contact-list/clear |  |
| [**getContactListStatisticsV1()**](AudienceApi.md#getContactListStatisticsV1) | **GET** /preview/retail-media/accounts/{account-id}/audience-segments/{audience-segment-id}/contact-list |  |
| [**legacyGetAudienceV1()**](AudienceApi.md#legacyGetAudienceV1) | **GET** /preview/retail-media/accounts/{accountId}/audiences |  |
| [**legacyGetAudienceV2()**](AudienceApi.md#legacyGetAudienceV2) | **GET** /preview/retail-media/v2/accounts/{accountId}/audiences |  |
| [**searchV1()**](AudienceApi.md#searchV1) | **POST** /preview/retail-media/accounts/{account-id}/audience-segments/search |  |
| [**updateContactListIdentifiers()**](AudienceApi.md#updateContactListIdentifiers) | **POST** /preview/retail-media/audience-segments/{audience-segment-id}/contact-list/add-remove |  |


## `bulkCreateV1()`

```php
bulkCreateV1($account_id, $rm_audience_segment_bulk_create_input_v1): \criteo\api\retailmedia\preview\Model\RmAudienceSegmentEntityV1ListResponse
```



Creates all segments with a valid configuration, and returns the full segments. For those that cannot be created, one or multiple errors are returned.

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
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_segment_bulk_create_input_v1 = new \criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkCreateInputV1(); // \criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkCreateInputV1 | Segment creation parameter

try {
    $result = $apiInstance->bulkCreateV1($account_id, $rm_audience_segment_bulk_create_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkCreateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_segment_bulk_create_input_v1** | [**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkCreateInputV1**](../Model/RmAudienceSegmentBulkCreateInputV1.md)| Segment creation parameter | |

### Return type

[**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentEntityV1ListResponse**](../Model/RmAudienceSegmentEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteV1()`

```php
bulkDeleteV1($account_id, $rm_audience_segment_bulk_delete_input_v1): \criteo\api\retailmedia\preview\Model\RmAudienceSegmentIdEntityV1ListResponse
```



Delete the segments associated to the given audience IDs.

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
$account_id = 'account_id_example'; // string | Account id
$rm_audience_segment_bulk_delete_input_v1 = new \criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkDeleteInputV1(); // \criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkDeleteInputV1 | Segment delete request.

try {
    $result = $apiInstance->bulkDeleteV1($account_id, $rm_audience_segment_bulk_delete_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkDeleteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account id | |
| **rm_audience_segment_bulk_delete_input_v1** | [**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkDeleteInputV1**](../Model/RmAudienceSegmentBulkDeleteInputV1.md)| Segment delete request. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentIdEntityV1ListResponse**](../Model/RmAudienceSegmentIdEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateV1()`

```php
bulkUpdateV1($account_id, $rm_audience_segment_bulk_update_input_v1): \criteo\api\retailmedia\preview\Model\RmAudienceSegmentEntityV1ListResponse
```



Updates the properties of all segments with a valid configuration, and returns the full segments. For those that cannot be updated, one or multiple errors are returned.

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
$account_id = 'account_id_example'; // string | Account id
$rm_audience_segment_bulk_update_input_v1 = new \criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkUpdateInputV1(); // \criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkUpdateInputV1 | Segment Update request

try {
    $result = $apiInstance->bulkUpdateV1($account_id, $rm_audience_segment_bulk_update_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkUpdateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account id | |
| **rm_audience_segment_bulk_update_input_v1** | [**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentBulkUpdateInputV1**](../Model/RmAudienceSegmentBulkUpdateInputV1.md)| Segment Update request | |

### Return type

[**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentEntityV1ListResponse**](../Model/RmAudienceSegmentEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactListIdentifiers()`

```php
deleteContactListIdentifiers($audience_segment_id)
```



Delete all identifiers from a retail-media contact list audience-segment, with external audience segment id.

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
$audience_segment_id = 56; // int | The id of the contact list audience-segment to amend, we only accept external Id here

try {
    $apiInstance->deleteContactListIdentifiers($audience_segment_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteContactListIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **int**| The id of the contact list audience-segment to amend, we only accept external Id here | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactListStatisticsV1()`

```php
getContactListStatisticsV1($account_id, $audience_segment_id): \criteo\api\retailmedia\preview\Model\RmContactListStatisticsEntityV1Response
```



Returns the statistics of a contact list segment.

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
$account_id = 'account_id_example'; // string | Account Id
$audience_segment_id = 'audience_segment_id_example'; // string | Segment Id.

try {
    $result = $apiInstance->getContactListStatisticsV1($account_id, $audience_segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getContactListStatisticsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **audience_segment_id** | **string**| Segment Id. | |

### Return type

[**\criteo\api\retailmedia\preview\Model\RmContactListStatisticsEntityV1Response**](../Model/RmContactListStatisticsEntityV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `searchV1()`

```php
searchV1($account_id, $rm_audience_segment_search_input_v1, $limit, $offset): \criteo\api\retailmedia\preview\Model\RmAudienceSegmentEntityV1RmAudienceSegmentSearchMetadataV1ListResponse
```



Search segments based on the provided filters.( by ids or retailer ids)

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
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_segment_search_input_v1 = new \criteo\api\retailmedia\preview\Model\RmAudienceSegmentSearchInputV1(); // \criteo\api\retailmedia\preview\Model\RmAudienceSegmentSearchInputV1 | Segment creation parameter
$limit = 50; // int | The number of elements to be returned. The default is 50 and the maximum is 100.
$offset = 0; // int | The (zero-based) offset into the collection. The default is 0.

try {
    $result = $apiInstance->searchV1($account_id, $rm_audience_segment_search_input_v1, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->searchV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_segment_search_input_v1** | [**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentSearchInputV1**](../Model/RmAudienceSegmentSearchInputV1.md)| Segment creation parameter | |
| **limit** | **int**| The number of elements to be returned. The default is 50 and the maximum is 100. | [optional] [default to 50] |
| **offset** | **int**| The (zero-based) offset into the collection. The default is 0. | [optional] [default to 0] |

### Return type

[**\criteo\api\retailmedia\preview\Model\RmAudienceSegmentEntityV1RmAudienceSegmentSearchMetadataV1ListResponse**](../Model/RmAudienceSegmentEntityV1RmAudienceSegmentSearchMetadataV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactListIdentifiers()`

```php
updateContactListIdentifiers($audience_segment_id, $retail_media_contactlist_amendment_request): \criteo\api\retailmedia\preview\Model\RetailMediaContactlistOperation
```



Add/remove identifiers to or from a retail-media contact list audience-segment, with external audience segment id.

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
$audience_segment_id = 56; // int | The id of the contact list audience-segment to amend, we only accept external Id here
$retail_media_contactlist_amendment_request = new \criteo\api\retailmedia\preview\Model\RetailMediaContactlistAmendmentRequest(); // \criteo\api\retailmedia\preview\Model\RetailMediaContactlistAmendmentRequest

try {
    $result = $apiInstance->updateContactListIdentifiers($audience_segment_id, $retail_media_contactlist_amendment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateContactListIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **int**| The id of the contact list audience-segment to amend, we only accept external Id here | |
| **retail_media_contactlist_amendment_request** | [**\criteo\api\retailmedia\preview\Model\RetailMediaContactlistAmendmentRequest**](../Model/RetailMediaContactlistAmendmentRequest.md)|  | |

### Return type

[**\criteo\api\retailmedia\preview\Model\RetailMediaContactlistOperation**](../Model/RetailMediaContactlistOperation.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
