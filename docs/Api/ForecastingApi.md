# criteo\api\retailmedia\experimental\ForecastingApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**computeOnsiteDisplayForecast()**](ForecastingApi.md#computeOnsiteDisplayForecast) | **POST** /experimental/retail-media/accounts/{account-id}/compute-onsite-display-forecast | /experimental/retail-media/accounts/{account-id}/compute-onsite-display-forecast |


## `computeOnsiteDisplayForecast()`

```php
computeOnsiteDisplayForecast($account_id, $compute_onsite_display_forecast_request): \criteo\api\retailmedia\experimental\Model\OnsiteDisplayForecastListResponse
```

/experimental/retail-media/accounts/{account-id}/compute-onsite-display-forecast

Computes a forecast of available impressions and budget for a retailer account. <br /> This endpoint is subject to specific rate limits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\experimental\Api\ForecastingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the retailer account for which to compute the onsite display forecast.
$compute_onsite_display_forecast_request = new \criteo\api\retailmedia\experimental\Model\ComputeOnsiteDisplayForecastRequest(); // \criteo\api\retailmedia\experimental\Model\ComputeOnsiteDisplayForecastRequest | Forecast computation parameters.

try {
    $result = $apiInstance->computeOnsiteDisplayForecast($account_id, $compute_onsite_display_forecast_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForecastingApi->computeOnsiteDisplayForecast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| ID of the retailer account for which to compute the onsite display forecast. | |
| **compute_onsite_display_forecast_request** | [**\criteo\api\retailmedia\experimental\Model\ComputeOnsiteDisplayForecastRequest**](../Model/ComputeOnsiteDisplayForecastRequest.md)| Forecast computation parameters. | |

### Return type

[**\criteo\api\retailmedia\experimental\Model\OnsiteDisplayForecastListResponse**](../Model/OnsiteDisplayForecastListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
