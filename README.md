# Criteo API SDK for PHP

## Introduction
API Client Libraries can facilitate your use of the Criteo API allowing you to build unique and customized solutions to serve your businesses and clients.
These libraries can reduce the amount of code you need to write in order to start accessing Criteo programmatically. They also can help expedite troubleshooting, should you encounter any issues.

More information: [https://developers.criteo.com/marketing-solutions/docs/php-api-client-library](https://developers.criteo.com/marketing-solutions/docs/php-api-client-library)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- Package version: 2022.01.0.221026
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.1 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

either run the following command: `composer require criteo/criteo-api-retailmedia-sdk:2022.01.0.221026`

or add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/criteo/criteo-api-retailmedia-php-sdk.git"
    }
  ],
  "require": {
    "criteo/criteo-api-retailmedia-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/criteo-api-retailmedia-sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer run-script test
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$clientId = 'YOUR_CLIENT_ID';
$clientSecret = 'YOUR_CLIENT_SECRET';

// Automatic token refresh
$apiInstance = new criteo\api\retailmedia\v2022_01\Api\AnalyticsApi(new criteo\api\retailmedia\v2022_01\TokenAutoRefreshClient($clientId, $clientSecret));

$report_id = ee439121-13e3-4734-9f67-c504dd921a41;

try {
$result = $apiInstance->getReportOutput($report_id);
print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getReportOutput: ', $e->getMessage(), PHP_EOL;
}

?>
```

You can find the full example [here](examples/).

## Documentation for API Endpoints

All URIs are relative to *https://api.criteo.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnalyticsApi* | [**getReportOutput**](docs/Api/AnalyticsApi.md#getreportoutput) | **GET** /2022-01/retail-media/reports/{reportId}/output | 
*AnalyticsApi* | [**getReportStatus**](docs/Api/AnalyticsApi.md#getreportstatus) | **GET** /2022-01/retail-media/reports/{reportId}/status | 
*AnalyticsApi* | [**requestCampaignReport**](docs/Api/AnalyticsApi.md#requestcampaignreport) | **POST** /2022-01/retail-media/reports/campaigns | 
*AnalyticsApi* | [**requestLineItemReport**](docs/Api/AnalyticsApi.md#requestlineitemreport) | **POST** /2022-01/retail-media/reports/line-items | 
*AudienceApi* | [**createAudience**](docs/Api/AudienceApi.md#createaudience) | **POST** /2022-01/retail-media/accounts/{accountId}/audiences | 
*AudienceApi* | [**getAudiencesByAccountId**](docs/Api/AudienceApi.md#getaudiencesbyaccountid) | **GET** /2022-01/retail-media/accounts/{accountId}/audiences | 
*CampaignApi* | [**getApi202110ExternalAccountBalancesByAccountId**](docs/Api/CampaignApi.md#getapi202110externalaccountbalancesbyaccountid) | **GET** /2022-01/retail-media/accounts/{account-id}/balances | 
*CampaignApi* | [**getApi202110ExternalAccountCreativesByAccountId**](docs/Api/CampaignApi.md#getapi202110externalaccountcreativesbyaccountid) | **GET** /2022-01/retail-media/accounts/{account-id}/creatives | 
*CampaignApi* | [**getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalauctionlineitemtargetingkeywordsbylineitemid) | **GET** /2022-01/retail-media/auction-line-items/{line-item-id}/targeting/keywords | 
*CampaignApi* | [**getApi202110ExternalBalanceCampaignsByBalanceId**](docs/Api/CampaignApi.md#getapi202110externalbalancecampaignsbybalanceid) | **GET** /2022-01/retail-media/balances/{balance-id}/campaigns | 
*CampaignApi* | [**getApi202110ExternalCampaignPreferredLineItemsByCampaignId**](docs/Api/CampaignApi.md#getapi202110externalcampaignpreferredlineitemsbycampaignid) | **GET** /2022-01/retail-media/campaigns/{campaign-id}/preferred-line-items | 
*CampaignApi* | [**getApi202110ExternalLineItemProductsByLineItemId**](docs/Api/CampaignApi.md#getapi202110externallineitemproductsbylineitemid) | **GET** /2022-01/retail-media/line-items/{line-item-id}/products | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitembylineitemid) | **GET** /2022-01/retail-media/preferred-line-items/{line-item-id} | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitemtargetingaddtobasketbylineitemid) | **GET** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitemtargetingaudiencesbylineitemid) | **GET** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/audiences | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitemtargetingstoresbylineitemid) | **GET** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/stores | 
*CampaignApi* | [**getApi202110ExternalRetailerPagesByRetailerId**](docs/Api/CampaignApi.md#getapi202110externalretailerpagesbyretailerid) | **GET** /2022-01/retail-media/retailers/{retailerId}/pages | 
*CampaignApi* | [**getApiV1ExternalAccountBrandsByAccountId**](docs/Api/CampaignApi.md#getapiv1externalaccountbrandsbyaccountid) | **GET** /2022-01/retail-media/accounts/{accountId}/brands | 
*CampaignApi* | [**getApiV1ExternalAccountCampaignsByAccountId**](docs/Api/CampaignApi.md#getapiv1externalaccountcampaignsbyaccountid) | **GET** /2022-01/retail-media/accounts/{accountId}/campaigns | 
*CampaignApi* | [**getApiV1ExternalAccountRetailersByAccountId**](docs/Api/CampaignApi.md#getapiv1externalaccountretailersbyaccountid) | **GET** /2022-01/retail-media/accounts/{accountId}/retailers | 
*CampaignApi* | [**getApiV1ExternalAccounts**](docs/Api/CampaignApi.md#getapiv1externalaccounts) | **GET** /2022-01/retail-media/accounts | 
*CampaignApi* | [**getApiV1ExternalCampaignByCampaignId**](docs/Api/CampaignApi.md#getapiv1externalcampaignbycampaignid) | **GET** /2022-01/retail-media/campaigns/{campaignId} | 
*CampaignApi* | [**getApiV1ExternalCatalogOutputByCatalogId**](docs/Api/CampaignApi.md#getapiv1externalcatalogoutputbycatalogid) | **GET** /2022-01/retail-media/catalogs/{catalogId}/output | 
*CampaignApi* | [**getApiV1ExternalCatalogStatusByCatalogId**](docs/Api/CampaignApi.md#getapiv1externalcatalogstatusbycatalogid) | **GET** /2022-01/retail-media/catalogs/{catalogId}/status | 
*CampaignApi* | [**getApiV2ExternalAccountLineItemsByAccountId**](docs/Api/CampaignApi.md#getapiv2externalaccountlineitemsbyaccountid) | **GET** /2022-01/retail-media/accounts/{account-id}/line-items | 
*CampaignApi* | [**getApiV2ExternalAuctionLineItemByLineItemId**](docs/Api/CampaignApi.md#getapiv2externalauctionlineitembylineitemid) | **GET** /2022-01/retail-media/auction-line-items/{line-item-id} | 
*CampaignApi* | [**getApiV2ExternalCampaignAuctionLineItemsByCampaignId**](docs/Api/CampaignApi.md#getapiv2externalcampaignauctionlineitemsbycampaignid) | **GET** /2022-01/retail-media/campaigns/{campaign-id}/auction-line-items | 
*CampaignApi* | [**getApiV2ExternalLineItemByLineItemId**](docs/Api/CampaignApi.md#getapiv2externallineitembylineitemid) | **GET** /2022-01/retail-media/line-items/{line-item-id} | 
*CampaignApi* | [**postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalauctionlineitemtargetingkeywordsappendbylineitemid) | **POST** /2022-01/retail-media/auction-line-items/{line-item-id}/targeting/keywords/append | 
*CampaignApi* | [**postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalauctionlineitemtargetingkeywordsdeletebylineitemid) | **POST** /2022-01/retail-media/auction-line-items/{line-item-id}/targeting/keywords/delete | 
*CampaignApi* | [**postApi202110ExternalBalanceCampaignsAppendByBalanceId**](docs/Api/CampaignApi.md#postapi202110externalbalancecampaignsappendbybalanceid) | **POST** /2022-01/retail-media/balances/{balance-id}/campaigns/append | 
*CampaignApi* | [**postApi202110ExternalBalanceCampaignsDeleteByBalanceId**](docs/Api/CampaignApi.md#postapi202110externalbalancecampaignsdeletebybalanceid) | **POST** /2022-01/retail-media/balances/{balance-id}/campaigns/delete | 
*CampaignApi* | [**postApi202110ExternalCampaignPreferredLineItemsByCampaignId**](docs/Api/CampaignApi.md#postapi202110externalcampaignpreferredlineitemsbycampaignid) | **POST** /2022-01/retail-media/campaigns/{campaign-id}/preferred-line-items | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductsappendbylineitemid) | **POST** /2022-01/retail-media/line-items/{line-item-id}/products/append | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductsdeletebylineitemid) | **POST** /2022-01/retail-media/line-items/{line-item-id}/products/delete | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsPauseByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductspausebylineitemid) | **POST** /2022-01/retail-media/line-items/{line-item-id}/products/pause | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsUnpauseByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductsunpausebylineitemid) | **POST** /2022-01/retail-media/line-items/{line-item-id}/products/unpause | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaddtobasketappendbylineitemid) | **POST** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/append | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaddtobasketdeletebylineitemid) | **POST** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/delete | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaudiencesappendbylineitemid) | **POST** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/append | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaudiencesdeletebylineitemid) | **POST** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/delete | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingstoresappendbylineitemid) | **POST** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/stores/append | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingstoresdeletebylineitemid) | **POST** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/stores/delete | 
*CampaignApi* | [**postApiV1ExternalAccountCampaignsByAccountId**](docs/Api/CampaignApi.md#postapiv1externalaccountcampaignsbyaccountid) | **POST** /2022-01/retail-media/accounts/{accountId}/campaigns | 
*CampaignApi* | [**postApiV1ExternalAccountCatalogsByAccountId**](docs/Api/CampaignApi.md#postapiv1externalaccountcatalogsbyaccountid) | **POST** /2022-01/retail-media/accounts/{accountId}/catalogs | 
*CampaignApi* | [**postApiV2ExternalCampaignAuctionLineItemsByCampaignId**](docs/Api/CampaignApi.md#postapiv2externalcampaignauctionlineitemsbycampaignid) | **POST** /2022-01/retail-media/campaigns/{campaign-id}/auction-line-items | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitembylineitemid) | **PUT** /2022-01/retail-media/preferred-line-items/{line-item-id} | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitemtargetingaddtobasketbylineitemid) | **PUT** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitemtargetingaudiencesbylineitemid) | **PUT** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/audiences | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitemtargetingstoresbylineitemid) | **PUT** /2022-01/retail-media/preferred-line-items/{line-item-id}/targeting/stores | 
*CampaignApi* | [**putApiV1ExternalCampaignByCampaignId**](docs/Api/CampaignApi.md#putapiv1externalcampaignbycampaignid) | **PUT** /2022-01/retail-media/campaigns/{campaignId} | 
*CampaignApi* | [**putApiV2ExternalAuctionLineItemByLineItemId**](docs/Api/CampaignApi.md#putapiv2externalauctionlineitembylineitemid) | **PUT** /2022-01/retail-media/auction-line-items/{line-item-id} | 
*GatewayApi* | [**getCurrentApplication**](docs/Api/GatewayApi.md#getcurrentapplication) | **GET** /me | 
*OAuthApi* | [**getToken**](docs/Api/OAuthApi.md#gettoken) | **POST** /oauth2/token | Creates a token based either on supplied client credentials or on single use authorization code


## Documentation For Models

 - [AccessTokenModel](docs/Model/AccessTokenModel.md)
 - [AddToBasketIdsUpdateModel202110Request](docs/Model/AddToBasketIdsUpdateModel202110Request.md)
 - [AddToBasketTarget202110Request](docs/Model/AddToBasketTarget202110Request.md)
 - [AddToBasketTarget202110Response](docs/Model/AddToBasketTarget202110Response.md)
 - [ApplicationSummaryModel](docs/Model/ApplicationSummaryModel.md)
 - [ApplicationSummaryModelResource](docs/Model/ApplicationSummaryModelResource.md)
 - [ApplicationSummaryModelResponse](docs/Model/ApplicationSummaryModelResponse.md)
 - [AuctionLineItemCreateModelRequest](docs/Model/AuctionLineItemCreateModelRequest.md)
 - [AuctionLineItemPagedListResponse](docs/Model/AuctionLineItemPagedListResponse.md)
 - [AuctionLineItemResponse](docs/Model/AuctionLineItemResponse.md)
 - [AuctionLineItemUpdateModelRequest](docs/Model/AuctionLineItemUpdateModelRequest.md)
 - [AudienceIdsUpdateModel202110Request](docs/Model/AudienceIdsUpdateModel202110Request.md)
 - [AudienceTarget202110Request](docs/Model/AudienceTarget202110Request.md)
 - [AudienceTarget202110Response](docs/Model/AudienceTarget202110Response.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Balance202110PagedListResponse](docs/Model/Balance202110PagedListResponse.md)
 - [BalanceCampaign202110ListRequest](docs/Model/BalanceCampaign202110ListRequest.md)
 - [BalanceCampaign202110PagedListResponse](docs/Model/BalanceCampaign202110PagedListResponse.md)
 - [CommonError](docs/Model/CommonError.md)
 - [CommonLineItemPagedListResponse](docs/Model/CommonLineItemPagedListResponse.md)
 - [CommonLineItemResponse](docs/Model/CommonLineItemResponse.md)
 - [CommonProblem](docs/Model/CommonProblem.md)
 - [CommonWarning](docs/Model/CommonWarning.md)
 - [CreateRetailMediaAudience](docs/Model/CreateRetailMediaAudience.md)
 - [CreateRetailMediaAudienceAttributes](docs/Model/CreateRetailMediaAudienceAttributes.md)
 - [CreateRetailMediaAudienceBody](docs/Model/CreateRetailMediaAudienceBody.md)
 - [CreateRetailMediaAudienceRequest](docs/Model/CreateRetailMediaAudienceRequest.md)
 - [CreateRetailMediaAudienceResponse](docs/Model/CreateRetailMediaAudienceResponse.md)
 - [Creative202110](docs/Model/Creative202110.md)
 - [Creative202110ListResponse](docs/Model/Creative202110ListResponse.md)
 - [CustomerListDetails](docs/Model/CustomerListDetails.md)
 - [EnvelopeReportRequest](docs/Model/EnvelopeReportRequest.md)
 - [EnvelopeReportStatus](docs/Model/EnvelopeReportStatus.md)
 - [Error](docs/Model/Error.md)
 - [ExternalAccount](docs/Model/ExternalAccount.md)
 - [ExternalAddToBasketIdsUpdateModel202110](docs/Model/ExternalAddToBasketIdsUpdateModel202110.md)
 - [ExternalAddToBasketTarget202110](docs/Model/ExternalAddToBasketTarget202110.md)
 - [ExternalAuctionLineItem](docs/Model/ExternalAuctionLineItem.md)
 - [ExternalAuctionLineItemCreateModel](docs/Model/ExternalAuctionLineItemCreateModel.md)
 - [ExternalAuctionLineItemUpdateModel](docs/Model/ExternalAuctionLineItemUpdateModel.md)
 - [ExternalAudienceIdsUpdateModel202110](docs/Model/ExternalAudienceIdsUpdateModel202110.md)
 - [ExternalAudienceTarget202110](docs/Model/ExternalAudienceTarget202110.md)
 - [ExternalBalance202110](docs/Model/ExternalBalance202110.md)
 - [ExternalBrand](docs/Model/ExternalBrand.md)
 - [ExternalCampaign](docs/Model/ExternalCampaign.md)
 - [ExternalCampaignAttributes](docs/Model/ExternalCampaignAttributes.md)
 - [ExternalCatalogRequest](docs/Model/ExternalCatalogRequest.md)
 - [ExternalCatalogStatus](docs/Model/ExternalCatalogStatus.md)
 - [ExternalCommonLineItem](docs/Model/ExternalCommonLineItem.md)
 - [ExternalEditableCampaignAttributes](docs/Model/ExternalEditableCampaignAttributes.md)
 - [ExternalKeywordTarget202110](docs/Model/ExternalKeywordTarget202110.md)
 - [ExternalLineItemCapping202110](docs/Model/ExternalLineItemCapping202110.md)
 - [ExternalLineItemPage202110](docs/Model/ExternalLineItemPage202110.md)
 - [ExternalLineItemPageCategory202110](docs/Model/ExternalLineItemPageCategory202110.md)
 - [ExternalPostCampaign](docs/Model/ExternalPostCampaign.md)
 - [ExternalPreferredLineItem202110](docs/Model/ExternalPreferredLineItem202110.md)
 - [ExternalPreferredLineItemCreateModel202110](docs/Model/ExternalPreferredLineItemCreateModel202110.md)
 - [ExternalPreferredLineItemUpdateModel202110](docs/Model/ExternalPreferredLineItemUpdateModel202110.md)
 - [ExternalPromotedProduct202110](docs/Model/ExternalPromotedProduct202110.md)
 - [ExternalPutCampaign](docs/Model/ExternalPutCampaign.md)
 - [ExternalRetailer](docs/Model/ExternalRetailer.md)
 - [ExternalRetailerPages202110](docs/Model/ExternalRetailerPages202110.md)
 - [ExternalStoreIdsUpdateModel202110](docs/Model/ExternalStoreIdsUpdateModel202110.md)
 - [ExternalStoreTarget202110](docs/Model/ExternalStoreTarget202110.md)
 - [GetPageOfAudiencesByAccountIdResponse](docs/Model/GetPageOfAudiencesByAccountIdResponse.md)
 - [InputResourceOfAuctionLineItemCreateModel](docs/Model/InputResourceOfAuctionLineItemCreateModel.md)
 - [InputResourceOfPreferredLineItemCreateModel202110](docs/Model/InputResourceOfPreferredLineItemCreateModel202110.md)
 - [JsonApiBodyWithExternalIdOfEditableCampaignAttributesAndCampaign](docs/Model/JsonApiBodyWithExternalIdOfEditableCampaignAttributesAndCampaign.md)
 - [JsonApiBodyWithIdOfInt64AndAccountAndAccount](docs/Model/JsonApiBodyWithIdOfInt64AndAccountAndAccount.md)
 - [JsonApiBodyWithIdOfInt64AndBrandAndBrand](docs/Model/JsonApiBodyWithIdOfInt64AndBrandAndBrand.md)
 - [JsonApiBodyWithIdOfInt64AndCampaignAndCampaign](docs/Model/JsonApiBodyWithIdOfInt64AndCampaignAndCampaign.md)
 - [JsonApiBodyWithIdOfInt64AndCatalogStatusAndCatalogStatus](docs/Model/JsonApiBodyWithIdOfInt64AndCatalogStatusAndCatalogStatus.md)
 - [JsonApiBodyWithIdOfInt64AndRetailerAndRetailer](docs/Model/JsonApiBodyWithIdOfInt64AndRetailerAndRetailer.md)
 - [JsonApiBodyWithoutIdOfCampaignAttributesAndCampaign](docs/Model/JsonApiBodyWithoutIdOfCampaignAttributesAndCampaign.md)
 - [JsonApiBodyWithoutIdOfCatalogRequestAndCatalogRequest](docs/Model/JsonApiBodyWithoutIdOfCatalogRequestAndCatalogRequest.md)
 - [JsonApiPageResponseOfAccount](docs/Model/JsonApiPageResponseOfAccount.md)
 - [JsonApiPageResponseOfBrand](docs/Model/JsonApiPageResponseOfBrand.md)
 - [JsonApiPageResponseOfCampaign](docs/Model/JsonApiPageResponseOfCampaign.md)
 - [JsonApiPageResponseOfRetailer](docs/Model/JsonApiPageResponseOfRetailer.md)
 - [JsonApiRequestOfCatalogRequest](docs/Model/JsonApiRequestOfCatalogRequest.md)
 - [JsonApiSingleResponseOfCampaign](docs/Model/JsonApiSingleResponseOfCampaign.md)
 - [JsonApiSingleResponseOfCatalogStatus](docs/Model/JsonApiSingleResponseOfCatalogStatus.md)
 - [KeywordTarget202110Request](docs/Model/KeywordTarget202110Request.md)
 - [KeywordTarget202110Response](docs/Model/KeywordTarget202110Response.md)
 - [OAuthErrorModel](docs/Model/OAuthErrorModel.md)
 - [PageMetadata](docs/Model/PageMetadata.md)
 - [PreferredLineItem202110PagedListResponse](docs/Model/PreferredLineItem202110PagedListResponse.md)
 - [PreferredLineItem202110Response](docs/Model/PreferredLineItem202110Response.md)
 - [PreferredLineItemCreateModel202110Request](docs/Model/PreferredLineItemCreateModel202110Request.md)
 - [PreferredLineItemUpdateModel202110Request](docs/Model/PreferredLineItemUpdateModel202110Request.md)
 - [ProblemDetails](docs/Model/ProblemDetails.md)
 - [PromotedProduct202110ListRequest](docs/Model/PromotedProduct202110ListRequest.md)
 - [PromotedProduct202110PagedListResponse](docs/Model/PromotedProduct202110PagedListResponse.md)
 - [ReportRequest](docs/Model/ReportRequest.md)
 - [ReportRequestAttributes](docs/Model/ReportRequestAttributes.md)
 - [ReportStatus](docs/Model/ReportStatus.md)
 - [ReportStatusAttributes](docs/Model/ReportStatusAttributes.md)
 - [ResourceOfAuctionLineItem](docs/Model/ResourceOfAuctionLineItem.md)
 - [ResourceOfAuctionLineItemUpdateModel](docs/Model/ResourceOfAuctionLineItemUpdateModel.md)
 - [ResourceOfBalance202110](docs/Model/ResourceOfBalance202110.md)
 - [ResourceOfBalanceCampaign202110](docs/Model/ResourceOfBalanceCampaign202110.md)
 - [ResourceOfCommonLineItem](docs/Model/ResourceOfCommonLineItem.md)
 - [ResourceOfCreative202110](docs/Model/ResourceOfCreative202110.md)
 - [ResourceOfPreferredLineItem202110](docs/Model/ResourceOfPreferredLineItem202110.md)
 - [ResourceOfPreferredLineItemUpdateModel202110](docs/Model/ResourceOfPreferredLineItemUpdateModel202110.md)
 - [ResourceOfPromotedProduct202110](docs/Model/ResourceOfPromotedProduct202110.md)
 - [RetailMediaAudience](docs/Model/RetailMediaAudience.md)
 - [RetailMediaAudienceAttributes](docs/Model/RetailMediaAudienceAttributes.md)
 - [StoreIdsUpdateModel202110Request](docs/Model/StoreIdsUpdateModel202110Request.md)
 - [StoreTarget202110Request](docs/Model/StoreTarget202110Request.md)
 - [StoreTarget202110Response](docs/Model/StoreTarget202110Response.md)
 - [UserBehaviorDetails](docs/Model/UserBehaviorDetails.md)
 - [ValueTypeResourceOfAddToBasketIdsUpdateModel202110](docs/Model/ValueTypeResourceOfAddToBasketIdsUpdateModel202110.md)
 - [ValueTypeResourceOfAddToBasketTarget202110](docs/Model/ValueTypeResourceOfAddToBasketTarget202110.md)
 - [ValueTypeResourceOfAudienceIdsUpdateModel202110](docs/Model/ValueTypeResourceOfAudienceIdsUpdateModel202110.md)
 - [ValueTypeResourceOfAudienceTarget202110](docs/Model/ValueTypeResourceOfAudienceTarget202110.md)
 - [ValueTypeResourceOfKeywordTarget202110](docs/Model/ValueTypeResourceOfKeywordTarget202110.md)
 - [ValueTypeResourceOfStoreIdsUpdateModel202110](docs/Model/ValueTypeResourceOfStoreIdsUpdateModel202110.md)
 - [ValueTypeResourceOfStoreTarget202110](docs/Model/ValueTypeResourceOfStoreTarget202110.md)


## Documentation For Authorization

In order to ease usage of this client library, you might want to use the TokenAutoRefreshClient
as explained in the [example](examples/).




### oauth


- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A


## Author
[Criteo](https://www.criteo.com/)

## Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

