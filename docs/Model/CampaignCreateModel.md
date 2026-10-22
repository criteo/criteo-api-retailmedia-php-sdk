# # CampaignCreateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribution_settings** | [**\criteo\api\retailmedia\experimental\Model\AttributionSettingsCreateModel**](AttributionSettingsCreateModel.md) |  | [optional]
**bill_by_retailer_id** | **string** |  | [optional]
**budget** | [**\criteo\api\retailmedia\experimental\Model\DynamicBudgetCreateModel**](DynamicBudgetCreateModel.md) |  |
**buy_type** | **string** | Buy type of campaign, set only on creation. Auction is the only buy type currently supported. |
**campaign_type** | **string** | Type of campaign, set only on creation. |
**company_name** | **string** |  | [optional]
**drawable_balance_ids** | **string[]** |  | [optional]
**name** | **string** |  |
**objective** | **string** | Objective the campaign is optimized for. The platform derives the line item budgets from the  campaign budget to serve it. SponsoredProducts accepts clicks, conversion and revenue;  OnsiteDisplay accepts impressions. |
**on_behalf_company_name** | **string** |  | [optional]
**regulated_category** | **string** |  | [optional]
**schedule_details** | [**\criteo\api\retailmedia\experimental\Model\ScheduleDetailsCreateModel**](ScheduleDetailsCreateModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
