# criteo\api\retailmedia\v2021_10\GatewayApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentApplication()**](GatewayApi.md#getCurrentApplication) | **GET** /me | 


## `getCurrentApplication()`

```php
getCurrentApplication(): \criteo\api\retailmedia\v2021_10\Model\ApplicationSummaryModelResponse
```



Get information about the currently logged application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentApplication();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->getCurrentApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\ApplicationSummaryModelResponse**](../Model/ApplicationSummaryModelResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
