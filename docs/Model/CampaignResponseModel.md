# # CampaignResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**attribution_settings** | [**\criteo\api\retailmedia\experimental\Model\AttributionSettingsModel**](AttributionSettingsModel.md) |  |
**bill_by_retailer_id** | **string** |  | [optional]
**buy_type** | **string** | Buy type of campaign, set only on creation. |
**campaign_type** | **string** | Type of campaign, set only on creation. |
**company_name** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**drawable_balance_ids** | **string[]** |  |
**id** | **string** |  | [optional]
**name** | **string** |  |
**on_behalf_company_name** | **string** |  | [optional]
**onsite_display_details** | [**\criteo\api\retailmedia\experimental\Model\OnsiteDisplayDetailsModel**](OnsiteDisplayDetailsModel.md) |  | [optional]
**regulated_category** | **string** | Regulated category the campaign advertises in, set only on creation. |
**schedule_details** | [**\criteo\api\retailmedia\experimental\Model\ScheduleDetailsModel**](ScheduleDetailsModel.md) |  | [optional]
**sponsored_products_details** | [**\criteo\api\retailmedia\experimental\Model\SponsoredProductsDetailsModel**](SponsoredProductsDetailsModel.md) |  | [optional]
**status** | **string** | Campaign status, derived from the status of Line Items it holds; active if at least  one line item is active. |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
