# criteo\api\retailmedia\experimental\AudienceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateAudience()**](AudienceApi.md#bulkCreateAudience) | **POST** /experimental/retail-media/accounts/{account-id}/audiences/create | /experimental/retail-media/accounts/{account-id}/audiences/create |
| [**bulkDeleteAudiences()**](AudienceApi.md#bulkDeleteAudiences) | **POST** /experimental/retail-media/accounts/{account-id}/audiences/delete | /experimental/retail-media/accounts/{account-id}/audiences/delete |
| [**bulkUpdateAudience()**](AudienceApi.md#bulkUpdateAudience) | **PATCH** /experimental/retail-media/accounts/{account-id}/audiences | /experimental/retail-media/accounts/{account-id}/audiences |
| [**computeAudienceSegmentsSizes()**](AudienceApi.md#computeAudienceSegmentsSizes) | **POST** /experimental/retail-media/accounts/{account-id}/audience-segments/compute-sizes | /experimental/retail-media/accounts/{account-id}/audience-segments/compute-sizes |
| [**computeAudiencesSizes()**](AudienceApi.md#computeAudiencesSizes) | **POST** /experimental/retail-media/accounts/{account-id}/audiences/compute-sizes | /experimental/retail-media/accounts/{account-id}/audiences/compute-sizes |
| [**estimateAudienceSegmentSize()**](AudienceApi.md#estimateAudienceSegmentSize) | **POST** /experimental/retail-media/accounts/{account-id}/audience-segments/estimate-size | /experimental/retail-media/accounts/{account-id}/audience-segments/estimate-size |
| [**estimateAudienceSize()**](AudienceApi.md#estimateAudienceSize) | **POST** /experimental/retail-media/accounts/{account-id}/audiences/estimate-size | /experimental/retail-media/accounts/{account-id}/audiences/estimate-size |


## `bulkCreateAudience()`

```php
bulkCreateAudience($account_id, $rm_audience_bulk_create_input_v1): \criteo\api\retailmedia\experimental\Model\RmAudienceEntityV1ListResponse
```

/experimental/retail-media/accounts/{account-id}/audiences/create

Creates all audiences with a valid configuration, and returns their IDs. For those that cannot be created, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_bulk_create_input_v1 = new \criteo\api\retailmedia\experimental\Model\RmAudienceBulkCreateInputV1(); // \criteo\api\retailmedia\experimental\Model\RmAudienceBulkCreateInputV1 | Audience creation parameter

try {
    $result = $apiInstance->bulkCreateAudience($account_id, $rm_audience_bulk_create_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkCreateAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_bulk_create_input_v1** | [**\criteo\api\retailmedia\experimental\Model\RmAudienceBulkCreateInputV1**](../Model/RmAudienceBulkCreateInputV1.md)| Audience creation parameter | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\RmAudienceEntityV1ListResponse**](../Model/RmAudienceEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAudiences()`

```php
bulkDeleteAudiences($account_id, $rm_audience_bulk_delete_input_v1): \criteo\api\retailmedia\experimental\Model\RmAudienceSegmentIdEntityV1ListResponse
```

/experimental/retail-media/accounts/{account-id}/audiences/delete

Deletes the audiences associated to the given IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_bulk_delete_input_v1 = new \criteo\api\retailmedia\experimental\Model\RmAudienceBulkDeleteInputV1(); // \criteo\api\retailmedia\experimental\Model\RmAudienceBulkDeleteInputV1 | 

try {
    $result = $apiInstance->bulkDeleteAudiences($account_id, $rm_audience_bulk_delete_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkDeleteAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_bulk_delete_input_v1** | [**\criteo\api\retailmedia\experimental\Model\RmAudienceBulkDeleteInputV1**](../Model/RmAudienceBulkDeleteInputV1.md)|  | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\RmAudienceSegmentIdEntityV1ListResponse**](../Model/RmAudienceSegmentIdEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAudience()`

```php
bulkUpdateAudience($account_id, $rm_audience_bulk_update_input_v1): \criteo\api\retailmedia\experimental\Model\RmAudienceEntityV1ListResponse
```

/experimental/retail-media/accounts/{account-id}/audiences

Updates the properties of all audiences with a valid configuration, and returns their IDs. For those that cannot be updated, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_bulk_update_input_v1 = new \criteo\api\retailmedia\experimental\Model\RmAudienceBulkUpdateInputV1(); // \criteo\api\retailmedia\experimental\Model\RmAudienceBulkUpdateInputV1 | 

try {
    $result = $apiInstance->bulkUpdateAudience($account_id, $rm_audience_bulk_update_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkUpdateAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_bulk_update_input_v1** | [**\criteo\api\retailmedia\experimental\Model\RmAudienceBulkUpdateInputV1**](../Model/RmAudienceBulkUpdateInputV1.md)|  | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\RmAudienceEntityV1ListResponse**](../Model/RmAudienceEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `computeAudienceSegmentsSizes()`

```php
computeAudienceSegmentsSizes($account_id, $rm_audience_segment_compute_sizes_input_v1): \criteo\api\retailmedia\experimental\Model\RmAudienceSegmentSizeEntityV1ListResponse
```

/experimental/retail-media/accounts/{account-id}/audience-segments/compute-sizes

Gets the size of all segments. An error is returned for those whose size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account id
$rm_audience_segment_compute_sizes_input_v1 = new \criteo\api\retailmedia\experimental\Model\RmAudienceSegmentComputeSizesInputV1(); // \criteo\api\retailmedia\experimental\Model\RmAudienceSegmentComputeSizesInputV1 | 

try {
    $result = $apiInstance->computeAudienceSegmentsSizes($account_id, $rm_audience_segment_compute_sizes_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->computeAudienceSegmentsSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account id | |
| **rm_audience_segment_compute_sizes_input_v1** | [**\criteo\api\retailmedia\experimental\Model\RmAudienceSegmentComputeSizesInputV1**](../Model/RmAudienceSegmentComputeSizesInputV1.md)|  | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\RmAudienceSegmentSizeEntityV1ListResponse**](../Model/RmAudienceSegmentSizeEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `computeAudiencesSizes()`

```php
computeAudiencesSizes($account_id, $rm_audience_compute_sizes_input_v1): \criteo\api\retailmedia\experimental\Model\RmAudienceSizeEntityV1ListResponse
```

/experimental/retail-media/accounts/{account-id}/audiences/compute-sizes

Gets the size of all audiences. An error is returned for those whose size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_compute_sizes_input_v1 = new \criteo\api\retailmedia\experimental\Model\RmAudienceComputeSizesInputV1(); // \criteo\api\retailmedia\experimental\Model\RmAudienceComputeSizesInputV1 | 

try {
    $result = $apiInstance->computeAudiencesSizes($account_id, $rm_audience_compute_sizes_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->computeAudiencesSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_compute_sizes_input_v1** | [**\criteo\api\retailmedia\experimental\Model\RmAudienceComputeSizesInputV1**](../Model/RmAudienceComputeSizesInputV1.md)|  | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\RmAudienceSizeEntityV1ListResponse**](../Model/RmAudienceSizeEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateAudienceSegmentSize()`

```php
estimateAudienceSegmentSize($account_id, $rm_audience_segment_estimate_size_input_v1): \criteo\api\retailmedia\experimental\Model\RmAudienceSegmentSizeEstimationV1Response
```

/experimental/retail-media/accounts/{account-id}/audience-segments/estimate-size

Gets the size estimation of a non existent segment. An error is returned when size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_segment_estimate_size_input_v1 = new \criteo\api\retailmedia\experimental\Model\RmAudienceSegmentEstimateSizeInputV1(); // \criteo\api\retailmedia\experimental\Model\RmAudienceSegmentEstimateSizeInputV1 | 

try {
    $result = $apiInstance->estimateAudienceSegmentSize($account_id, $rm_audience_segment_estimate_size_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->estimateAudienceSegmentSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_segment_estimate_size_input_v1** | [**\criteo\api\retailmedia\experimental\Model\RmAudienceSegmentEstimateSizeInputV1**](../Model/RmAudienceSegmentEstimateSizeInputV1.md)|  | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\RmAudienceSegmentSizeEstimationV1Response**](../Model/RmAudienceSegmentSizeEstimationV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateAudienceSize()`

```php
estimateAudienceSize($account_id, $rm_audience_estimate_size_input_v1): \criteo\api\retailmedia\experimental\Model\RmAudienceSizeEstimationV1Response
```

/experimental/retail-media/accounts/{account-id}/audiences/estimate-size

Gets the size estimation of a non existent audience. An error is returned when size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account Id
$rm_audience_estimate_size_input_v1 = new \criteo\api\retailmedia\experimental\Model\RmAudienceEstimateSizeInputV1(); // \criteo\api\retailmedia\experimental\Model\RmAudienceEstimateSizeInputV1 | 

try {
    $result = $apiInstance->estimateAudienceSize($account_id, $rm_audience_estimate_size_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->estimateAudienceSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account Id | |
| **rm_audience_estimate_size_input_v1** | [**\criteo\api\retailmedia\experimental\Model\RmAudienceEstimateSizeInputV1**](../Model/RmAudienceEstimateSizeInputV1.md)|  | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\RmAudienceSizeEstimationV1Response**](../Model/RmAudienceSizeEstimationV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
