# 

## Introduction
API Client Libraries can facilitate your use of the Criteo API allowing you to build unique and customized solutions to serve your businesses and clients.
These libraries can reduce the amount of code you need to write in order to start accessing Criteo programmatically. They also can help expedite troubleshooting, should you encounter any issues.

More information: [https://developers.criteo.com/](https://developers.criteo.com/)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- Package version: 2023.04.0.230811
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

This project is tested with PHP 8.0.
However it should work fine with PHP 7.4 too.

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

either run the following command: `composer require criteo/criteo-api-retailmedia-sdk:2023.04.0.230811`

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

## Example

Please see [test/ExampleApplication.php](test/ExampleApplication.php) for an example on how to perform a simple call.

## Documentation for API Endpoints

All URIs are relative to *https://api.criteo.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnalyticsApi* | [**getReportOutput**](docs/Api/AnalyticsApi.md#getreportoutput) | **GET** /2023-04/retail-media/reports/{reportId}/output | 
*AnalyticsApi* | [**getReportStatus**](docs/Api/AnalyticsApi.md#getreportstatus) | **GET** /2023-04/retail-media/reports/{reportId}/status | 
*AnalyticsApi* | [**requestCampaignReport**](docs/Api/AnalyticsApi.md#requestcampaignreport) | **POST** /2023-04/retail-media/reports/campaigns | 
*AnalyticsApi* | [**requestLineItemReport**](docs/Api/AnalyticsApi.md#requestlineitemreport) | **POST** /2023-04/retail-media/reports/line-items | 
*AudienceApi* | [**createAudience**](docs/Api/AudienceApi.md#createaudience) | **POST** /2023-04/retail-media/accounts/{accountId}/audiences | 
*AudienceApi* | [**createRetailMediaAudienceV2**](docs/Api/AudienceApi.md#createretailmediaaudiencev2) | **POST** /2023-04/retail-media/v2/accounts/{accountId}/audiences | 
*AudienceApi* | [**getAudiencesByAccountId**](docs/Api/AudienceApi.md#getaudiencesbyaccountid) | **GET** /2023-04/retail-media/accounts/{accountId}/audiences | 
*AudienceApi* | [**getRetailMediaAudienceV2ListByAccountId**](docs/Api/AudienceApi.md#getretailmediaaudiencev2listbyaccountid) | **GET** /2023-04/retail-media/v2/accounts/{accountId}/audiences | 
*CampaignApi* | [**addRemoveKeywords**](docs/Api/CampaignApi.md#addremovekeywords) | **POST** /2023-04/retail-media/line-items/{id}/keywords/add-remove | 
*CampaignApi* | [**createAsset**](docs/Api/CampaignApi.md#createasset) | **POST** /2023-04/retail-media/assets | 
*CampaignApi* | [**fetchKeywords**](docs/Api/CampaignApi.md#fetchkeywords) | **GET** /2023-04/retail-media/line-items/{id}/keywords | 
*CampaignApi* | [**fetchProposal**](docs/Api/CampaignApi.md#fetchproposal) | **GET** /2023-04/retail-media/preferred-deal-line-items/{id}/proposal | 
*CampaignApi* | [**getApi202110ExternalAccountBalancesByAccountId**](docs/Api/CampaignApi.md#getapi202110externalaccountbalancesbyaccountid) | **GET** /2023-04/retail-media/accounts/{account-id}/balances | 
*CampaignApi* | [**getApi202110ExternalAccountCreativesByAccountId**](docs/Api/CampaignApi.md#getapi202110externalaccountcreativesbyaccountid) | **GET** /2023-04/retail-media/accounts/{account-id}/creatives | 
*CampaignApi* | [**getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalauctionlineitemtargetingkeywordsbylineitemid) | **GET** /2023-04/retail-media/auction-line-items/{line-item-id}/targeting/keywords | 
*CampaignApi* | [**getApi202110ExternalBalanceCampaignsByBalanceId**](docs/Api/CampaignApi.md#getapi202110externalbalancecampaignsbybalanceid) | **GET** /2023-04/retail-media/balances/{balance-id}/campaigns | 
*CampaignApi* | [**getApi202110ExternalCampaignPreferredLineItemsByCampaignId**](docs/Api/CampaignApi.md#getapi202110externalcampaignpreferredlineitemsbycampaignid) | **GET** /2023-04/retail-media/campaigns/{campaign-id}/preferred-line-items | 
*CampaignApi* | [**getApi202110ExternalLineItemProductsByLineItemId**](docs/Api/CampaignApi.md#getapi202110externallineitemproductsbylineitemid) | **GET** /2023-04/retail-media/line-items/{line-item-id}/products | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitembylineitemid) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id} | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitemtargetingaddtobasketbylineitemid) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitemtargetingaudiencesbylineitemid) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences | 
*CampaignApi* | [**getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId**](docs/Api/CampaignApi.md#getapi202110externalpreferredlineitemtargetingstoresbylineitemid) | **GET** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores | 
*CampaignApi* | [**getApi202110ExternalRetailerPagesByRetailerId**](docs/Api/CampaignApi.md#getapi202110externalretailerpagesbyretailerid) | **GET** /2023-04/retail-media/retailers/{retailerId}/pages | 
*CampaignApi* | [**getApi202204ExternalCategorieByCategoryId**](docs/Api/CampaignApi.md#getapi202204externalcategoriebycategoryid) | **GET** /2023-04/retail-media/categories/{categoryId} | 
*CampaignApi* | [**getApi202204ExternalCategories**](docs/Api/CampaignApi.md#getapi202204externalcategories) | **GET** /2023-04/retail-media/categories | 
*CampaignApi* | [**getApi202207ExternalRetailerByRetailerIdTemplatestemplateId**](docs/Api/CampaignApi.md#getapi202207externalretailerbyretaileridtemplatestemplateid) | **GET** /2023-04/retail-media/retailers/{retailer-id}/templates/{template-id} | 
*CampaignApi* | [**getApi202207ExternalRetailerTemplatesByRetailerId**](docs/Api/CampaignApi.md#getapi202207externalretailertemplatesbyretailerid) | **GET** /2023-04/retail-media/retailers/{retailer-id}/templates | 
*CampaignApi* | [**getApi202210ExternalAccountByAccountIdCreativescreativeId**](docs/Api/CampaignApi.md#getapi202210externalaccountbyaccountidcreativescreativeid) | **GET** /2023-04/retail-media/accounts/{account-id}/creatives/{creative-id} | 
*CampaignApi* | [**getApi202301ExternalAccountCampaignsByAccountId**](docs/Api/CampaignApi.md#getapi202301externalaccountcampaignsbyaccountid) | **GET** /2023-04/retail-media/accounts/{accountId}/campaigns | 
*CampaignApi* | [**getApi202301ExternalCampaignByCampaignId**](docs/Api/CampaignApi.md#getapi202301externalcampaignbycampaignid) | **GET** /2023-04/retail-media/campaigns/{campaignId} | 
*CampaignApi* | [**getApi202301ExternalLineItemBidMultipliersByLineItemId**](docs/Api/CampaignApi.md#getapi202301externallineitembidmultipliersbylineitemid) | **GET** /2023-04/retail-media/line-items/{line-item-id}/bid-multipliers | 
*CampaignApi* | [**getApiV1ExternalAccountBrandsByAccountId**](docs/Api/CampaignApi.md#getapiv1externalaccountbrandsbyaccountid) | **GET** /2023-04/retail-media/accounts/{accountId}/brands | 
*CampaignApi* | [**getApiV1ExternalAccountRetailersByAccountId**](docs/Api/CampaignApi.md#getapiv1externalaccountretailersbyaccountid) | **GET** /2023-04/retail-media/accounts/{accountId}/retailers | 
*CampaignApi* | [**getApiV1ExternalAccounts**](docs/Api/CampaignApi.md#getapiv1externalaccounts) | **GET** /2023-04/retail-media/accounts | 
*CampaignApi* | [**getApiV1ExternalCatalogOutputByCatalogId**](docs/Api/CampaignApi.md#getapiv1externalcatalogoutputbycatalogid) | **GET** /2023-04/retail-media/catalogs/{catalogId}/output | 
*CampaignApi* | [**getApiV1ExternalCatalogStatusByCatalogId**](docs/Api/CampaignApi.md#getapiv1externalcatalogstatusbycatalogid) | **GET** /2023-04/retail-media/catalogs/{catalogId}/status | 
*CampaignApi* | [**getApiV2ExternalAccountLineItemsByAccountId**](docs/Api/CampaignApi.md#getapiv2externalaccountlineitemsbyaccountid) | **GET** /2023-04/retail-media/accounts/{account-id}/line-items | 
*CampaignApi* | [**getApiV2ExternalAuctionLineItemByLineItemId**](docs/Api/CampaignApi.md#getapiv2externalauctionlineitembylineitemid) | **GET** /2023-04/retail-media/auction-line-items/{line-item-id} | 
*CampaignApi* | [**getApiV2ExternalCampaignAuctionLineItemsByCampaignId**](docs/Api/CampaignApi.md#getapiv2externalcampaignauctionlineitemsbycampaignid) | **GET** /2023-04/retail-media/campaigns/{campaign-id}/auction-line-items | 
*CampaignApi* | [**getApiV2ExternalLineItemByLineItemId**](docs/Api/CampaignApi.md#getapiv2externallineitembylineitemid) | **GET** /2023-04/retail-media/line-items/{line-item-id} | 
*CampaignApi* | [**postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalauctionlineitemtargetingkeywordsappendbylineitemid) | **POST** /2023-04/retail-media/auction-line-items/{line-item-id}/targeting/keywords/append | 
*CampaignApi* | [**postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalauctionlineitemtargetingkeywordsdeletebylineitemid) | **POST** /2023-04/retail-media/auction-line-items/{line-item-id}/targeting/keywords/delete | 
*CampaignApi* | [**postApi202110ExternalBalanceCampaignsAppendByBalanceId**](docs/Api/CampaignApi.md#postapi202110externalbalancecampaignsappendbybalanceid) | **POST** /2023-04/retail-media/balances/{balance-id}/campaigns/append | 
*CampaignApi* | [**postApi202110ExternalBalanceCampaignsDeleteByBalanceId**](docs/Api/CampaignApi.md#postapi202110externalbalancecampaignsdeletebybalanceid) | **POST** /2023-04/retail-media/balances/{balance-id}/campaigns/delete | 
*CampaignApi* | [**postApi202110ExternalCampaignPreferredLineItemsByCampaignId**](docs/Api/CampaignApi.md#postapi202110externalcampaignpreferredlineitemsbycampaignid) | **POST** /2023-04/retail-media/campaigns/{campaign-id}/preferred-line-items | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductsappendbylineitemid) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/append | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductsdeletebylineitemid) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/delete | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsPauseByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductspausebylineitemid) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/pause | 
*CampaignApi* | [**postApi202110ExternalLineItemProductsUnpauseByLineItemId**](docs/Api/CampaignApi.md#postapi202110externallineitemproductsunpausebylineitemid) | **POST** /2023-04/retail-media/line-items/{line-item-id}/products/unpause | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaddtobasketappendbylineitemid) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/append | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaddtobasketdeletebylineitemid) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/delete | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaudiencesappendbylineitemid) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/append | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingaudiencesdeletebylineitemid) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/delete | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingstoresappendbylineitemid) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores/append | 
*CampaignApi* | [**postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId**](docs/Api/CampaignApi.md#postapi202110externalpreferredlineitemtargetingstoresdeletebylineitemid) | **POST** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores/delete | 
*CampaignApi* | [**postApi202210ExternalAccountCreativesByAccountId**](docs/Api/CampaignApi.md#postapi202210externalaccountcreativesbyaccountid) | **POST** /2023-04/retail-media/accounts/{account-id}/creatives | 
*CampaignApi* | [**postApi202210ExternalAccountCreativesSearchByAccountId**](docs/Api/CampaignApi.md#postapi202210externalaccountcreativessearchbyaccountid) | **POST** /2023-04/retail-media/accounts/{account-id}/creatives/search | 
*CampaignApi* | [**postApi202301ExternalAccountCampaignsByAccountId**](docs/Api/CampaignApi.md#postapi202301externalaccountcampaignsbyaccountid) | **POST** /2023-04/retail-media/accounts/{accountId}/campaigns | 
*CampaignApi* | [**postApiV1ExternalAccountCatalogsByAccountId**](docs/Api/CampaignApi.md#postapiv1externalaccountcatalogsbyaccountid) | **POST** /2023-04/retail-media/accounts/{accountId}/catalogs | 
*CampaignApi* | [**postApiV2ExternalCampaignAuctionLineItemsByCampaignId**](docs/Api/CampaignApi.md#postapiv2externalcampaignauctionlineitemsbycampaignid) | **POST** /2023-04/retail-media/campaigns/{campaign-id}/auction-line-items | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitembylineitemid) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id} | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitemtargetingaddtobasketbylineitemid) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitemtargetingaudiencesbylineitemid) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/audiences | 
*CampaignApi* | [**putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId**](docs/Api/CampaignApi.md#putapi202110externalpreferredlineitemtargetingstoresbylineitemid) | **PUT** /2023-04/retail-media/preferred-line-items/{line-item-id}/targeting/stores | 
*CampaignApi* | [**putApi202210ExternalAccountByAccountIdCreativescreativeId**](docs/Api/CampaignApi.md#putapi202210externalaccountbyaccountidcreativescreativeid) | **PUT** /2023-04/retail-media/accounts/{account-id}/creatives/{creative-id} | 
*CampaignApi* | [**putApi202301ExternalCampaignByCampaignId**](docs/Api/CampaignApi.md#putapi202301externalcampaignbycampaignid) | **PUT** /2023-04/retail-media/campaigns/{campaignId} | 
*CampaignApi* | [**putApi202301ExternalLineItemBidMultipliersByLineItemId**](docs/Api/CampaignApi.md#putapi202301externallineitembidmultipliersbylineitemid) | **PUT** /2023-04/retail-media/line-items/{line-item-id}/bid-multipliers | 
*CampaignApi* | [**putApiV2ExternalAuctionLineItemByLineItemId**](docs/Api/CampaignApi.md#putapiv2externalauctionlineitembylineitemid) | **PUT** /2023-04/retail-media/auction-line-items/{line-item-id} | 
*CampaignApi* | [**setKeywordBids**](docs/Api/CampaignApi.md#setkeywordbids) | **POST** /2023-04/retail-media/line-items/{id}/keywords/set-bid | 
*CampaignApi* | [**submitProposal**](docs/Api/CampaignApi.md#submitproposal) | **POST** /2023-04/retail-media/preferred-deal-line-items/{id}/proposal/submit | 
*GatewayApi* | [**getCurrentApplication**](docs/Api/GatewayApi.md#getcurrentapplication) | **GET** /2023-04/retail-media/me | 


## Documentation For Models

 - [AddToBasketIdsUpdateModel202110Request](docs/Model/AddToBasketIdsUpdateModel202110Request.md)
 - [AddToBasketTarget202110Request](docs/Model/AddToBasketTarget202110Request.md)
 - [AddToBasketTarget202110Response](docs/Model/AddToBasketTarget202110Response.md)
 - [ApplicationSummaryModel](docs/Model/ApplicationSummaryModel.md)
 - [ApplicationSummaryModelResource](docs/Model/ApplicationSummaryModelResource.md)
 - [ApplicationSummaryModelResponse](docs/Model/ApplicationSummaryModelResponse.md)
 - [Asset](docs/Model/Asset.md)
 - [AssetResource](docs/Model/AssetResource.md)
 - [AssetResponse](docs/Model/AssetResponse.md)
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
 - [CampaignAttributesV202301](docs/Model/CampaignAttributesV202301.md)
 - [CampaignV202301](docs/Model/CampaignV202301.md)
 - [Category202204](docs/Model/Category202204.md)
 - [Category202204ListResponse](docs/Model/Category202204ListResponse.md)
 - [ChoiceOption](docs/Model/ChoiceOption.md)
 - [ChoiceVariableSpecification](docs/Model/ChoiceVariableSpecification.md)
 - [ChoiceVariableValue](docs/Model/ChoiceVariableValue.md)
 - [ColorVariableValue](docs/Model/ColorVariableValue.md)
 - [CommonError](docs/Model/CommonError.md)
 - [CommonLineItemPagedListResponse](docs/Model/CommonLineItemPagedListResponse.md)
 - [CommonLineItemResponse](docs/Model/CommonLineItemResponse.md)
 - [CommonProblem](docs/Model/CommonProblem.md)
 - [CommonStatusCodeResponse](docs/Model/CommonStatusCodeResponse.md)
 - [CommonWarning](docs/Model/CommonWarning.md)
 - [CreateRetailMediaAudience](docs/Model/CreateRetailMediaAudience.md)
 - [CreateRetailMediaAudienceAttributes](docs/Model/CreateRetailMediaAudienceAttributes.md)
 - [CreateRetailMediaAudienceBody](docs/Model/CreateRetailMediaAudienceBody.md)
 - [CreateRetailMediaAudienceRequest](docs/Model/CreateRetailMediaAudienceRequest.md)
 - [CreateRetailMediaAudienceResponse](docs/Model/CreateRetailMediaAudienceResponse.md)
 - [CreateRetailMediaAudienceV2](docs/Model/CreateRetailMediaAudienceV2.md)
 - [CreateRetailMediaAudienceV2Attributes](docs/Model/CreateRetailMediaAudienceV2Attributes.md)
 - [CreateRetailMediaAudienceV2Data](docs/Model/CreateRetailMediaAudienceV2Data.md)
 - [CreateRetailMediaAudienceV2Request](docs/Model/CreateRetailMediaAudienceV2Request.md)
 - [CreateUserBehaviorSegmentV2](docs/Model/CreateUserBehaviorSegmentV2.md)
 - [Creative202110](docs/Model/Creative202110.md)
 - [Creative202110ListResponse](docs/Model/Creative202110ListResponse.md)
 - [Creative202210](docs/Model/Creative202210.md)
 - [Creative202210ListResponse](docs/Model/Creative202210ListResponse.md)
 - [Creative202210Response](docs/Model/Creative202210Response.md)
 - [CreativeCreateModel202207](docs/Model/CreativeCreateModel202207.md)
 - [CreativeUpdateModel202207](docs/Model/CreativeUpdateModel202207.md)
 - [CustomerListDetails](docs/Model/CustomerListDetails.md)
 - [EditableCampaignAttributesV202301](docs/Model/EditableCampaignAttributesV202301.md)
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
 - [ExternalCatalogRequest](docs/Model/ExternalCatalogRequest.md)
 - [ExternalCatalogStatus](docs/Model/ExternalCatalogStatus.md)
 - [ExternalCommonLineItem](docs/Model/ExternalCommonLineItem.md)
 - [ExternalKeywordTarget202110](docs/Model/ExternalKeywordTarget202110.md)
 - [ExternalLineItemCapping202110](docs/Model/ExternalLineItemCapping202110.md)
 - [ExternalLineItemPage202110](docs/Model/ExternalLineItemPage202110.md)
 - [ExternalLineItemPageCategory202110](docs/Model/ExternalLineItemPageCategory202110.md)
 - [ExternalPreferredLineItem202110](docs/Model/ExternalPreferredLineItem202110.md)
 - [ExternalPreferredLineItemCreateModel202110](docs/Model/ExternalPreferredLineItemCreateModel202110.md)
 - [ExternalPreferredLineItemUpdateModel202110](docs/Model/ExternalPreferredLineItemUpdateModel202110.md)
 - [ExternalPromotedProduct202110](docs/Model/ExternalPromotedProduct202110.md)
 - [ExternalRetailer](docs/Model/ExternalRetailer.md)
 - [ExternalRetailerPages202110](docs/Model/ExternalRetailerPages202110.md)
 - [ExternalStoreIdsUpdateModel202110](docs/Model/ExternalStoreIdsUpdateModel202110.md)
 - [ExternalStoreTarget202110](docs/Model/ExternalStoreTarget202110.md)
 - [FilesVariableValue](docs/Model/FilesVariableValue.md)
 - [FilesVariablesSpecification](docs/Model/FilesVariablesSpecification.md)
 - [GetPageOfAudiencesByAccountIdResponse](docs/Model/GetPageOfAudiencesByAccountIdResponse.md)
 - [HyperlinkVariableValue](docs/Model/HyperlinkVariableValue.md)
 - [InputResourceOfAuctionLineItemCreateModel](docs/Model/InputResourceOfAuctionLineItemCreateModel.md)
 - [InputResourceOfPreferredLineItemCreateModel202110](docs/Model/InputResourceOfPreferredLineItemCreateModel202110.md)
 - [JsonApiBodyWithExternalIdOfEditableCampaignAttributesV202301AndCampaignV202301](docs/Model/JsonApiBodyWithExternalIdOfEditableCampaignAttributesV202301AndCampaignV202301.md)
 - [JsonApiBodyWithIdOfInt64AndAccountAndAccount](docs/Model/JsonApiBodyWithIdOfInt64AndAccountAndAccount.md)
 - [JsonApiBodyWithIdOfInt64AndBrandAndBrand](docs/Model/JsonApiBodyWithIdOfInt64AndBrandAndBrand.md)
 - [JsonApiBodyWithIdOfInt64AndCampaignV202301AndCampaignV202301](docs/Model/JsonApiBodyWithIdOfInt64AndCampaignV202301AndCampaignV202301.md)
 - [JsonApiBodyWithIdOfInt64AndCatalogStatusAndCatalogStatus](docs/Model/JsonApiBodyWithIdOfInt64AndCatalogStatusAndCatalogStatus.md)
 - [JsonApiBodyWithIdOfInt64AndLineItemBidMultipliersAndLineItemBidMultipliers](docs/Model/JsonApiBodyWithIdOfInt64AndLineItemBidMultipliersAndLineItemBidMultipliers.md)
 - [JsonApiBodyWithIdOfInt64AndRetailerAndRetailer](docs/Model/JsonApiBodyWithIdOfInt64AndRetailerAndRetailer.md)
 - [JsonApiBodyWithoutIdOfCampaignAttributesV202301AndCampaignV202301](docs/Model/JsonApiBodyWithoutIdOfCampaignAttributesV202301AndCampaignV202301.md)
 - [JsonApiBodyWithoutIdOfCatalogRequestAndCatalogRequest](docs/Model/JsonApiBodyWithoutIdOfCatalogRequestAndCatalogRequest.md)
 - [JsonApiPageResponseOfAccount](docs/Model/JsonApiPageResponseOfAccount.md)
 - [JsonApiPageResponseOfBrand](docs/Model/JsonApiPageResponseOfBrand.md)
 - [JsonApiPageResponseOfCampaignV202301](docs/Model/JsonApiPageResponseOfCampaignV202301.md)
 - [JsonApiPageResponseOfRetailer](docs/Model/JsonApiPageResponseOfRetailer.md)
 - [JsonApiRequestOfCatalogRequest](docs/Model/JsonApiRequestOfCatalogRequest.md)
 - [JsonApiSingleResponseOfCampaignV202301](docs/Model/JsonApiSingleResponseOfCampaignV202301.md)
 - [JsonApiSingleResponseOfCatalogStatus](docs/Model/JsonApiSingleResponseOfCatalogStatus.md)
 - [JsonApiSingleResponseOfLineItemBidMultipliers](docs/Model/JsonApiSingleResponseOfLineItemBidMultipliers.md)
 - [KeywordTarget202110Request](docs/Model/KeywordTarget202110Request.md)
 - [KeywordTarget202110Response](docs/Model/KeywordTarget202110Response.md)
 - [LineItemBidMultipliers](docs/Model/LineItemBidMultipliers.md)
 - [LineItemBidMultipliersRequest](docs/Model/LineItemBidMultipliersRequest.md)
 - [LineItemBidMultipliersResponse](docs/Model/LineItemBidMultipliersResponse.md)
 - [PageMetadata](docs/Model/PageMetadata.md)
 - [PageTypeEnvironment](docs/Model/PageTypeEnvironment.md)
 - [PostCampaignV202301](docs/Model/PostCampaignV202301.md)
 - [PreferredLineItem202110PagedListResponse](docs/Model/PreferredLineItem202110PagedListResponse.md)
 - [PreferredLineItem202110Response](docs/Model/PreferredLineItem202110Response.md)
 - [PreferredLineItemCreateModel202110Request](docs/Model/PreferredLineItemCreateModel202110Request.md)
 - [PreferredLineItemUpdateModel202110Request](docs/Model/PreferredLineItemUpdateModel202110Request.md)
 - [ProblemDetails](docs/Model/ProblemDetails.md)
 - [PromotedProduct202110ListRequest](docs/Model/PromotedProduct202110ListRequest.md)
 - [PromotedProduct202110PagedListResponse](docs/Model/PromotedProduct202110PagedListResponse.md)
 - [PutCampaignV202301](docs/Model/PutCampaignV202301.md)
 - [ReportRequest](docs/Model/ReportRequest.md)
 - [ReportRequestAttributes](docs/Model/ReportRequestAttributes.md)
 - [ReportStatus](docs/Model/ReportStatus.md)
 - [ReportStatusAttributes](docs/Model/ReportStatusAttributes.md)
 - [ResourceOfAuctionLineItem](docs/Model/ResourceOfAuctionLineItem.md)
 - [ResourceOfAuctionLineItemUpdateModel](docs/Model/ResourceOfAuctionLineItemUpdateModel.md)
 - [ResourceOfBalance202110](docs/Model/ResourceOfBalance202110.md)
 - [ResourceOfBalanceCampaign202110](docs/Model/ResourceOfBalanceCampaign202110.md)
 - [ResourceOfCategory202204](docs/Model/ResourceOfCategory202204.md)
 - [ResourceOfCommonLineItem](docs/Model/ResourceOfCommonLineItem.md)
 - [ResourceOfCreative202110](docs/Model/ResourceOfCreative202110.md)
 - [ResourceOfCreative202210](docs/Model/ResourceOfCreative202210.md)
 - [ResourceOfLineItemBidMultipliers](docs/Model/ResourceOfLineItemBidMultipliers.md)
 - [ResourceOfPreferredLineItem202110](docs/Model/ResourceOfPreferredLineItem202110.md)
 - [ResourceOfPreferredLineItemUpdateModel202110](docs/Model/ResourceOfPreferredLineItemUpdateModel202110.md)
 - [ResourceOfPromotedProduct202110](docs/Model/ResourceOfPromotedProduct202110.md)
 - [ResourceOfTemplate](docs/Model/ResourceOfTemplate.md)
 - [RetailMediaAudience](docs/Model/RetailMediaAudience.md)
 - [RetailMediaAudienceAttributes](docs/Model/RetailMediaAudienceAttributes.md)
 - [RetailMediaAudienceV2](docs/Model/RetailMediaAudienceV2.md)
 - [RetailMediaAudienceV2Attributes](docs/Model/RetailMediaAudienceV2Attributes.md)
 - [RetailMediaAudienceV2ListResponse](docs/Model/RetailMediaAudienceV2ListResponse.md)
 - [RetailMediaAudienceV2Response](docs/Model/RetailMediaAudienceV2Response.md)
 - [RetailMediaExternalv1AddRemoveKeywordModel](docs/Model/RetailMediaExternalv1AddRemoveKeywordModel.md)
 - [RetailMediaExternalv1AddRemoveKeywordsModel](docs/Model/RetailMediaExternalv1AddRemoveKeywordsModel.md)
 - [RetailMediaExternalv1AddRemoveKeywordsModelRequest](docs/Model/RetailMediaExternalv1AddRemoveKeywordsModelRequest.md)
 - [RetailMediaExternalv1AddRemoveKeywordsModelResource](docs/Model/RetailMediaExternalv1AddRemoveKeywordsModelResource.md)
 - [RetailMediaExternalv1InputKeywordsModel](docs/Model/RetailMediaExternalv1InputKeywordsModel.md)
 - [RetailMediaExternalv1KeywordDataModel](docs/Model/RetailMediaExternalv1KeywordDataModel.md)
 - [RetailMediaExternalv1KeywordsModel](docs/Model/RetailMediaExternalv1KeywordsModel.md)
 - [RetailMediaExternalv1KeywordsModelResource](docs/Model/RetailMediaExternalv1KeywordsModelResource.md)
 - [RetailMediaExternalv1KeywordsModelResponse](docs/Model/RetailMediaExternalv1KeywordsModelResponse.md)
 - [RetailMediaExternalv1ProblemDetails](docs/Model/RetailMediaExternalv1ProblemDetails.md)
 - [RetailMediaExternalv1ProposalStatusModel](docs/Model/RetailMediaExternalv1ProposalStatusModel.md)
 - [RetailMediaExternalv1ProposalStatusModelResource](docs/Model/RetailMediaExternalv1ProposalStatusModelResource.md)
 - [RetailMediaExternalv1ProposalStatusModelResponse](docs/Model/RetailMediaExternalv1ProposalStatusModelResponse.md)
 - [RetailMediaExternalv1ResourceOutcome](docs/Model/RetailMediaExternalv1ResourceOutcome.md)
 - [RetailMediaExternalv1SetBidModel](docs/Model/RetailMediaExternalv1SetBidModel.md)
 - [RetailMediaExternalv1SetBidsModel](docs/Model/RetailMediaExternalv1SetBidsModel.md)
 - [RetailMediaExternalv1SetBidsModelRequest](docs/Model/RetailMediaExternalv1SetBidsModelRequest.md)
 - [RetailMediaExternalv1SetBidsModelResource](docs/Model/RetailMediaExternalv1SetBidsModelResource.md)
 - [Section](docs/Model/Section.md)
 - [StoreIdsUpdateModel202110Request](docs/Model/StoreIdsUpdateModel202110Request.md)
 - [StoreTarget202110Request](docs/Model/StoreTarget202110Request.md)
 - [StoreTarget202110Response](docs/Model/StoreTarget202110Response.md)
 - [Template](docs/Model/Template.md)
 - [TemplateListResponse](docs/Model/TemplateListResponse.md)
 - [TemplateResponse](docs/Model/TemplateResponse.md)
 - [TemplateVariable](docs/Model/TemplateVariable.md)
 - [TemplateVariableValue](docs/Model/TemplateVariableValue.md)
 - [TextVariableSpecification](docs/Model/TextVariableSpecification.md)
 - [TextVariableValue](docs/Model/TextVariableValue.md)
 - [UserBehaviorDetails](docs/Model/UserBehaviorDetails.md)
 - [UserBehaviorDetailsV2](docs/Model/UserBehaviorDetailsV2.md)
 - [ValueTypeResourceOfAddToBasketIdsUpdateModel202110](docs/Model/ValueTypeResourceOfAddToBasketIdsUpdateModel202110.md)
 - [ValueTypeResourceOfAddToBasketTarget202110](docs/Model/ValueTypeResourceOfAddToBasketTarget202110.md)
 - [ValueTypeResourceOfAudienceIdsUpdateModel202110](docs/Model/ValueTypeResourceOfAudienceIdsUpdateModel202110.md)
 - [ValueTypeResourceOfAudienceTarget202110](docs/Model/ValueTypeResourceOfAudienceTarget202110.md)
 - [ValueTypeResourceOfKeywordTarget202110](docs/Model/ValueTypeResourceOfKeywordTarget202110.md)
 - [ValueTypeResourceOfStoreIdsUpdateModel202110](docs/Model/ValueTypeResourceOfStoreIdsUpdateModel202110.md)
 - [ValueTypeResourceOfStoreTarget202110](docs/Model/ValueTypeResourceOfStoreTarget202110.md)


## Documentation For Authorization



### oauth


- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A



### oauth


- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://api.criteo.com/oauth2
- **Scopes**: N/A


## Author
[Criteo](https://www.criteo.com/)

## Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

