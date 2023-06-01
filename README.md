# 

## Introduction
API Client Libraries can facilitate your use of the Criteo API allowing you to build unique and customized solutions to serve your businesses and clients.
These libraries can reduce the amount of code you need to write in order to start accessing Criteo programmatically. They also can help expedite troubleshooting, should you encounter any issues.

More information: [https://developers.criteo.com/](https://developers.criteo.com/)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- Package version: 0.0.230601
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

This project is tested with PHP 8.0.
However it should work fine with PHP 7.x too.

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

either run the following command: `composer require criteo/criteo-api-retailmedia-sdk:0.0.230601`

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
*AnalyticsApi* | [**getCampaignReports**](docs/Api/AnalyticsApi.md#getcampaignreports) | **POST** /preview/retail-media/reports/sync/campaigns | 
*AnalyticsApi* | [**getLineItemsReports**](docs/Api/AnalyticsApi.md#getlineitemsreports) | **POST** /preview/retail-media/reports/sync/line-items | 
*AnalyticsApi* | [**getReportOutput**](docs/Api/AnalyticsApi.md#getreportoutput) | **GET** /preview/retail-media/reports/{reportId}/output | 
*AnalyticsApi* | [**getReportStatus**](docs/Api/AnalyticsApi.md#getreportstatus) | **GET** /preview/retail-media/reports/{reportId}/status | 
*AnalyticsApi* | [**requestCampaignReport**](docs/Api/AnalyticsApi.md#requestcampaignreport) | **POST** /preview/retail-media/reports/campaigns | 
*AnalyticsApi* | [**requestLineItemReport**](docs/Api/AnalyticsApi.md#requestlineitemreport) | **POST** /preview/retail-media/reports/line-items | 
*AudienceApi* | [**createAudience**](docs/Api/AudienceApi.md#createaudience) | **POST** /preview/retail-media/accounts/{accountId}/audiences | 
*AudienceApi* | [**createRetailMediaAudienceV2**](docs/Api/AudienceApi.md#createretailmediaaudiencev2) | **POST** /preview/retail-media/v2/accounts/{accountId}/audiences | 
*AudienceApi* | [**getAudiencesByAccountId**](docs/Api/AudienceApi.md#getaudiencesbyaccountid) | **GET** /preview/retail-media/accounts/{accountId}/audiences | 
*AudienceApi* | [**getRetailMediaAudienceV2ListByAccountId**](docs/Api/AudienceApi.md#getretailmediaaudiencev2listbyaccountid) | **GET** /preview/retail-media/v2/accounts/{accountId}/audiences | 
*CampaignApi* | [**addRemoveKeywords**](docs/Api/CampaignApi.md#addremovekeywords) | **POST** /preview/retail-media/line-items/{id}/keywords/add-remove | 
*CampaignApi* | [**deleteApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId**](docs/Api/CampaignApi.md#deleteapi202210externallineitemproductbuttonsbylineitemidproductbuttonid) | **DELETE** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} | 
*CampaignApi* | [**fetchKeywords**](docs/Api/CampaignApi.md#fetchkeywords) | **GET** /preview/retail-media/line-items/{id}/keywords | 
*CampaignApi* | [**fetchProposal**](docs/Api/CampaignApi.md#fetchproposal) | **GET** /preview/retail-media/preferred-deal-line-items/{id}/proposal | 
*CampaignApi* | [**getApi202207ExternalRetailerByRetailerIdTemplatestemplateId**](docs/Api/CampaignApi.md#getapi202207externalretailerbyretaileridtemplatestemplateid) | **GET** /preview/retail-media/retailers/{retailer-id}/templates/{template-id} | 
*CampaignApi* | [**getApi202207ExternalRetailerTemplatesByRetailerId**](docs/Api/CampaignApi.md#getapi202207externalretailertemplatesbyretailerid) | **GET** /preview/retail-media/retailers/{retailer-id}/templates | 
*CampaignApi* | [**getApi202210ExternalAccountByAccountIdCreativescreativeId**](docs/Api/CampaignApi.md#getapi202210externalaccountbyaccountidcreativescreativeid) | **GET** /preview/retail-media/accounts/{account-id}/creatives/{creative-id} | 
*CampaignApi* | [**getApi202210ExternalLineItemProductButtonsByLineItemId**](docs/Api/CampaignApi.md#getapi202210externallineitemproductbuttonsbylineitemid) | **GET** /preview/retail-media/line-items/{line-item-id}/product-buttons | 
*CampaignApi* | [**getApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId**](docs/Api/CampaignApi.md#getapi202210externallineitemproductbuttonsbylineitemidproductbuttonid) | **GET** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} | 
*CampaignApi* | [**getApi202301ExternalLineItemBidMultipliersByLineItemId**](docs/Api/CampaignApi.md#getapi202301externallineitembidmultipliersbylineitemid) | **GET** /preview/retail-media/line-items/{line-item-id}/bid-multipliers | 
*CampaignApi* | [**getApiV0ExternalCatalogOutputByCatalogId**](docs/Api/CampaignApi.md#getapiv0externalcatalogoutputbycatalogid) | **GET** /preview/retail-media/catalogs/{catalogId}/output | 
*CampaignApi* | [**getApiV0ExternalCatalogStatusByCatalogId**](docs/Api/CampaignApi.md#getapiv0externalcatalogstatusbycatalogid) | **GET** /preview/retail-media/catalogs/{catalogId}/status | 
*CampaignApi* | [**getApiV1ExternalAccountBrandsByAccountId**](docs/Api/CampaignApi.md#getapiv1externalaccountbrandsbyaccountid) | **GET** /preview/retail-media/accounts/{accountId}/brands | 
*CampaignApi* | [**getApiV1ExternalAccountRetailersByAccountId**](docs/Api/CampaignApi.md#getapiv1externalaccountretailersbyaccountid) | **GET** /preview/retail-media/accounts/{accountId}/retailers | 
*CampaignApi* | [**getApiV1ExternalAccounts**](docs/Api/CampaignApi.md#getapiv1externalaccounts) | **GET** /preview/retail-media/accounts | 
*CampaignApi* | [**getApiV1ExternalRetailerBrandsByRetailerId**](docs/Api/CampaignApi.md#getapiv1externalretailerbrandsbyretailerid) | **GET** /preview/retail-media/retailers/{retailerId}/brands | 
*CampaignApi* | [**getApiV1ExternalRetailerByRetailerIdSellerBySeller**](docs/Api/CampaignApi.md#getapiv1externalretailerbyretaileridsellerbyseller) | **GET** /preview/retail-media/retailers/{retailerId}/sellers/{seller} | 
*CampaignApi* | [**getApiV1ExternalRetailerCategoryCpcRatesByRetailerId**](docs/Api/CampaignApi.md#getapiv1externalretailercategorycpcratesbyretailerid) | **GET** /preview/retail-media/retailers/{retailer-id}/cpc-rates | 
*CampaignApi* | [**getApiV1ExternalRetailerPlacementsByRetailerId**](docs/Api/CampaignApi.md#getapiv1externalretailerplacementsbyretailerid) | **GET** /preview/retail-media/retailers/{retailer-id}/placements | 
*CampaignApi* | [**postApi202210ExternalAccountCreativesByAccountId**](docs/Api/CampaignApi.md#postapi202210externalaccountcreativesbyaccountid) | **POST** /preview/retail-media/accounts/{account-id}/creatives | 
*CampaignApi* | [**postApi202210ExternalAccountCreativesSearchByAccountId**](docs/Api/CampaignApi.md#postapi202210externalaccountcreativessearchbyaccountid) | **POST** /preview/retail-media/accounts/{account-id}/creatives/search | 
*CampaignApi* | [**postApi202210ExternalLineItemProductButtonsCreateByLineItemId**](docs/Api/CampaignApi.md#postapi202210externallineitemproductbuttonscreatebylineitemid) | **POST** /preview/retail-media/line-items/{line-item-id}/product-buttons/create | 
*CampaignApi* | [**postApiV0ExternalAccountCatalogsByAccountId**](docs/Api/CampaignApi.md#postapiv0externalaccountcatalogsbyaccountid) | **POST** /preview/retail-media/accounts/{accountId}/catalogs | 
*CampaignApi* | [**postApiV1ExternalCatalogsSkuRetrieval**](docs/Api/CampaignApi.md#postapiv1externalcatalogsskuretrieval) | **POST** /preview/retail-media/catalogs/sku-retrieval | 
*CampaignApi* | [**postApiV1ExternalCatalogsSkuSearch**](docs/Api/CampaignApi.md#postapiv1externalcatalogsskusearch) | **POST** /preview/retail-media/catalogs/sku-search | 
*CampaignApi* | [**postApiV1ExternalCatalogsSkuSearchAccountIdAndRetailerId**](docs/Api/CampaignApi.md#postapiv1externalcatalogsskusearchaccountidandretailerid) | **POST** /preview/retail-media/catalogs/sku-search/accounts/{account-id}/retailers/{retailer-id} | 
*CampaignApi* | [**postApiV1ExternalCatalogsSkuSearchRetailerByRetailerId**](docs/Api/CampaignApi.md#postapiv1externalcatalogsskusearchretailerbyretailerid) | **POST** /preview/retail-media/catalogs/sku/search/retailers/{retailer-id} | 
*CampaignApi* | [**putApi202210ExternalAccountByAccountIdCreativescreativeId**](docs/Api/CampaignApi.md#putapi202210externalaccountbyaccountidcreativescreativeid) | **PUT** /preview/retail-media/accounts/{account-id}/creatives/{creative-id} | 
*CampaignApi* | [**putApi202210ExternalLineItemProductButtonsByLineItemIdProductButtonId**](docs/Api/CampaignApi.md#putapi202210externallineitemproductbuttonsbylineitemidproductbuttonid) | **PUT** /preview/retail-media/line-items/{line-item-id}/product-buttons/{product-button-id} | 
*CampaignApi* | [**putApi202301ExternalLineItemBidMultipliersByLineItemId**](docs/Api/CampaignApi.md#putapi202301externallineitembidmultipliersbylineitemid) | **PUT** /preview/retail-media/line-items/{line-item-id}/bid-multipliers | 
*CampaignApi* | [**setKeywordBids**](docs/Api/CampaignApi.md#setkeywordbids) | **POST** /preview/retail-media/line-items/{id}/keywords/set-bid | 
*CampaignApi* | [**submitProposal**](docs/Api/CampaignApi.md#submitproposal) | **POST** /preview/retail-media/preferred-deal-line-items/{id}/proposal/submit | 
*GatewayApi* | [**getCurrentApplication**](docs/Api/GatewayApi.md#getcurrentapplication) | **GET** /preview/retail-media/me | 


## Documentation For Models

 - [ApplicationSummaryModel](docs/Model/ApplicationSummaryModel.md)
 - [ApplicationSummaryModelResource](docs/Model/ApplicationSummaryModelResource.md)
 - [ApplicationSummaryModelResponse](docs/Model/ApplicationSummaryModelResponse.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [BrandPreview](docs/Model/BrandPreview.md)
 - [BrandPreviewListResponse](docs/Model/BrandPreviewListResponse.md)
 - [CampaignReport](docs/Model/CampaignReport.md)
 - [CampaignReportRequest](docs/Model/CampaignReportRequest.md)
 - [CampaignReportResource](docs/Model/CampaignReportResource.md)
 - [Category202204](docs/Model/Category202204.md)
 - [ChoiceOption](docs/Model/ChoiceOption.md)
 - [ChoiceVariableSpecification](docs/Model/ChoiceVariableSpecification.md)
 - [ChoiceVariableValue](docs/Model/ChoiceVariableValue.md)
 - [ColorVariableValue](docs/Model/ColorVariableValue.md)
 - [CommonError](docs/Model/CommonError.md)
 - [CommonProblem](docs/Model/CommonProblem.md)
 - [CommonStatusCodeResponse](docs/Model/CommonStatusCodeResponse.md)
 - [CommonWarning](docs/Model/CommonWarning.md)
 - [CpcRateCardPreview](docs/Model/CpcRateCardPreview.md)
 - [CpcRateCardPreviewResponse](docs/Model/CpcRateCardPreviewResponse.md)
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
 - [Creative202210](docs/Model/Creative202210.md)
 - [Creative202210ListResponse](docs/Model/Creative202210ListResponse.md)
 - [Creative202210Response](docs/Model/Creative202210Response.md)
 - [CreativeCreateModel202207](docs/Model/CreativeCreateModel202207.md)
 - [CreativeUpdateModel202207](docs/Model/CreativeUpdateModel202207.md)
 - [CustomerListDetails](docs/Model/CustomerListDetails.md)
 - [EnvelopeReportRequest](docs/Model/EnvelopeReportRequest.md)
 - [EnvelopeReportStatus](docs/Model/EnvelopeReportStatus.md)
 - [Error](docs/Model/Error.md)
 - [ExportReportColumn](docs/Model/ExportReportColumn.md)
 - [ExportReportMetaData](docs/Model/ExportReportMetaData.md)
 - [ExternalAccount](docs/Model/ExternalAccount.md)
 - [ExternalBrand](docs/Model/ExternalBrand.md)
 - [ExternalCatalogRequestPreview](docs/Model/ExternalCatalogRequestPreview.md)
 - [ExternalCatalogStatus](docs/Model/ExternalCatalogStatus.md)
 - [ExternalProductButtonRequest](docs/Model/ExternalProductButtonRequest.md)
 - [ExternalProductButtonResponse](docs/Model/ExternalProductButtonResponse.md)
 - [ExternalRetailer](docs/Model/ExternalRetailer.md)
 - [FilesVariableValue](docs/Model/FilesVariableValue.md)
 - [FilesVariablesSpecification](docs/Model/FilesVariablesSpecification.md)
 - [GetPageOfAudiencesByAccountIdResponse](docs/Model/GetPageOfAudiencesByAccountIdResponse.md)
 - [GlobalBrand](docs/Model/GlobalBrand.md)
 - [HyperlinkVariableValue](docs/Model/HyperlinkVariableValue.md)
 - [JsonApiBodyWithIdOfInt64AndAccountAndAccount](docs/Model/JsonApiBodyWithIdOfInt64AndAccountAndAccount.md)
 - [JsonApiBodyWithIdOfInt64AndBrandAndBrand](docs/Model/JsonApiBodyWithIdOfInt64AndBrandAndBrand.md)
 - [JsonApiBodyWithIdOfInt64AndCatalogStatusAndCatalogStatus](docs/Model/JsonApiBodyWithIdOfInt64AndCatalogStatusAndCatalogStatus.md)
 - [JsonApiBodyWithIdOfInt64AndLineItemBidMultipliersAndLineItemBidMultipliers](docs/Model/JsonApiBodyWithIdOfInt64AndLineItemBidMultipliersAndLineItemBidMultipliers.md)
 - [JsonApiBodyWithIdOfInt64AndRetailerAndRetailer](docs/Model/JsonApiBodyWithIdOfInt64AndRetailerAndRetailer.md)
 - [JsonApiBodyWithoutIdOfCatalogRequestAndCatalogRequestPreview](docs/Model/JsonApiBodyWithoutIdOfCatalogRequestAndCatalogRequestPreview.md)
 - [JsonApiPageResponseOfAccount](docs/Model/JsonApiPageResponseOfAccount.md)
 - [JsonApiPageResponseOfBrand](docs/Model/JsonApiPageResponseOfBrand.md)
 - [JsonApiPageResponseOfRetailer](docs/Model/JsonApiPageResponseOfRetailer.md)
 - [JsonApiRequestOfCatalogRequestPreview](docs/Model/JsonApiRequestOfCatalogRequestPreview.md)
 - [JsonApiSingleResponseOfCatalogStatus](docs/Model/JsonApiSingleResponseOfCatalogStatus.md)
 - [JsonApiSingleResponseOfLineItemBidMultipliers](docs/Model/JsonApiSingleResponseOfLineItemBidMultipliers.md)
 - [LineItemBidMultipliers](docs/Model/LineItemBidMultipliers.md)
 - [LineItemBidMultipliersRequest](docs/Model/LineItemBidMultipliersRequest.md)
 - [LineItemBidMultipliersResponse](docs/Model/LineItemBidMultipliersResponse.md)
 - [LineItemReport](docs/Model/LineItemReport.md)
 - [LineItemReportRequest](docs/Model/LineItemReportRequest.md)
 - [LineItemReportResource](docs/Model/LineItemReportResource.md)
 - [PageMetadata](docs/Model/PageMetadata.md)
 - [PageTypeEnvironment](docs/Model/PageTypeEnvironment.md)
 - [PlacementPreview](docs/Model/PlacementPreview.md)
 - [PlacementPreviewListResponse](docs/Model/PlacementPreviewListResponse.md)
 - [ProblemDetails](docs/Model/ProblemDetails.md)
 - [ProductButtonListRequest](docs/Model/ProductButtonListRequest.md)
 - [ProductButtonListResponse](docs/Model/ProductButtonListResponse.md)
 - [ProductButtonRequest](docs/Model/ProductButtonRequest.md)
 - [ProductButtonResponse](docs/Model/ProductButtonResponse.md)
 - [ReportDataResponseResource](docs/Model/ReportDataResponseResource.md)
 - [ReportOutcome](docs/Model/ReportOutcome.md)
 - [ReportRequest](docs/Model/ReportRequest.md)
 - [ReportRequestAttributes](docs/Model/ReportRequestAttributes.md)
 - [ReportResponse](docs/Model/ReportResponse.md)
 - [ReportStatus](docs/Model/ReportStatus.md)
 - [ReportStatusAttributes](docs/Model/ReportStatusAttributes.md)
 - [ResourceOfBrandPreview](docs/Model/ResourceOfBrandPreview.md)
 - [ResourceOfCpcRateCardPreview](docs/Model/ResourceOfCpcRateCardPreview.md)
 - [ResourceOfCreative202210](docs/Model/ResourceOfCreative202210.md)
 - [ResourceOfLineItemBidMultipliers](docs/Model/ResourceOfLineItemBidMultipliers.md)
 - [ResourceOfPlacementPreview](docs/Model/ResourceOfPlacementPreview.md)
 - [ResourceOfProductButtonRequest](docs/Model/ResourceOfProductButtonRequest.md)
 - [ResourceOfProductButtonResponse](docs/Model/ResourceOfProductButtonResponse.md)
 - [ResourceOfSellerPreview](docs/Model/ResourceOfSellerPreview.md)
 - [ResourceOfSkuDataPreview](docs/Model/ResourceOfSkuDataPreview.md)
 - [ResourceOfSkuSearchRequestPreview](docs/Model/ResourceOfSkuSearchRequestPreview.md)
 - [ResourceOfSkuSearchRequestSlimPreview](docs/Model/ResourceOfSkuSearchRequestSlimPreview.md)
 - [ResourceOfSkuSearchRequestSlimV2Preview](docs/Model/ResourceOfSkuSearchRequestSlimV2Preview.md)
 - [ResourceOfSkuSlimDataPreview](docs/Model/ResourceOfSkuSlimDataPreview.md)
 - [ResourceOfSkuSlimDataV2](docs/Model/ResourceOfSkuSlimDataV2.md)
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
 - [RetailerBrand](docs/Model/RetailerBrand.md)
 - [RetailerCategory](docs/Model/RetailerCategory.md)
 - [Section](docs/Model/Section.md)
 - [SellerPreview](docs/Model/SellerPreview.md)
 - [SellerPreviewResponse](docs/Model/SellerPreviewResponse.md)
 - [SkuDataPreview](docs/Model/SkuDataPreview.md)
 - [SkuDataPreviewListResponse](docs/Model/SkuDataPreviewListResponse.md)
 - [SkuSearchRequestPreview](docs/Model/SkuSearchRequestPreview.md)
 - [SkuSearchRequestPreviewRequest](docs/Model/SkuSearchRequestPreviewRequest.md)
 - [SkuSearchRequestSlimPreview](docs/Model/SkuSearchRequestSlimPreview.md)
 - [SkuSearchRequestSlimPreviewRequest](docs/Model/SkuSearchRequestSlimPreviewRequest.md)
 - [SkuSearchRequestSlimV2Preview](docs/Model/SkuSearchRequestSlimV2Preview.md)
 - [SkuSearchRequestSlimV2PreviewRequest](docs/Model/SkuSearchRequestSlimV2PreviewRequest.md)
 - [SkuSlimDataPreview](docs/Model/SkuSlimDataPreview.md)
 - [SkuSlimDataPreviewListResponse](docs/Model/SkuSlimDataPreviewListResponse.md)
 - [SkuSlimDataV2](docs/Model/SkuSlimDataV2.md)
 - [SkuSlimDataV2ListResponse](docs/Model/SkuSlimDataV2ListResponse.md)
 - [Template](docs/Model/Template.md)
 - [TemplateListResponse](docs/Model/TemplateListResponse.md)
 - [TemplateResponse](docs/Model/TemplateResponse.md)
 - [TemplateVariable](docs/Model/TemplateVariable.md)
 - [TemplateVariableValue](docs/Model/TemplateVariableValue.md)
 - [TextVariableSpecification](docs/Model/TextVariableSpecification.md)
 - [TextVariableValue](docs/Model/TextVariableValue.md)
 - [UserBehaviorDetails](docs/Model/UserBehaviorDetails.md)
 - [UserBehaviorDetailsV2](docs/Model/UserBehaviorDetailsV2.md)


## Documentation For Authorization

In order to ease usage of this client library, you might want to use the TokenAutoRefreshClient
as explained in the [example](examples/).




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

