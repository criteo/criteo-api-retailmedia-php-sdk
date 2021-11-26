<?php

// Install Criteo API SDK, via composer for example: `composer require criteo/criteo-api-retailmedia-sdk`
// Then import it as follow:
// require_once(__DIR__ . '/vendor/autoload.php');

use criteo\api\retailmedia\v2021_10\Api\AnalyticsApi;
use criteo\api\retailmedia\v2021_10\TokenAutoRefreshClient;

/*
 * Although the OpenAPI specification, then this generated client, you can't simply use the API key feature.
 * i.e, the next two lines are useless:
 * $config = Criteo\Marketing\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
 * $config = Criteo\Marketing\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
 *
 * To benefit from automatic token refresh and to avoid setting the correct value for Authorization header for each call,
 * we introduced a wrapper around Guzzle Http client: TokenAutoRefreshClient.
 * If you don't want this feature, use: GuzzleHttp\Client (or simply don't specify any client parameter).
*/

$clientId = 'YOUR_CLIENT_ID';
$clientSecret = 'YOUR_CLIENT_SECRET';

$apiInstance = new AnalyticsApi(new TokenAutoRefreshClient($clientId, $clientSecret));
        
$reportId = 1;

try {
    $result = $apiInstance->getReportStatus($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getReportStatus: ', $e->getMessage(), PHP_EOL;
}
