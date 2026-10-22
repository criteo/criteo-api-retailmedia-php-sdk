# # CampaignModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Account ID associated with the campaign, generated internally by Criteo. | [optional]
**attribution_settings** | [**\criteo\api\retailmedia\experimental\Model\AttributionSettingsModel**](AttributionSettingsModel.md) |  | [optional]
**bill_by_retailer_id** | **string** | The retailer this campaign is associated with, set only on creation. Required when using a  retailer budget balance. | [optional]
**budget** | [**\criteo\api\retailmedia\experimental\Model\CampaignBudgetModel**](CampaignBudgetModel.md) |  | [optional]
**buy_type** | **string** | Buy type of campaign, set only on creation. | [optional]
**campaign_type** | **string** | Type of campaign, set only on creation. | [optional]
**company_name** | **string** | This optional field, exclusively accessible to marketplaces within the European Union (in  compliance with the Digital Service Act - DSA), will display the name of the company  associated with the advertisement. | [optional]
**created_at** | **\DateTime** | Timestamp of campaign creation, in UTC. | [optional]
**id** | **string** | Campaign ID, generated internally by Criteo. | [optional]
**name** | **string** | Campaign name; must be unique within an Account. | [optional]
**objective** | **string** | Objective of a campaign. | [optional]
**on_behalf_company_name** | **string** | This optional field, exclusively accessible to marketplaces within the European Union (in  compliance with the Digital Service Act - DSA), will display the name of the company (on  behalf of companyName) associated with the advertisement. | [optional]
**regulated_category** | **string** | Regulated category the campaign advertises in, set only on creation. | [optional]
**schedule_details** | [**\criteo\api\retailmedia\experimental\Model\ScheduleDetailsModel**](ScheduleDetailsModel.md) |  | [optional]
**status** | **string** | Campaign status, derived from the status of Line Items it holds; active if at least  one line item is active. | [optional]
**updated_at** | **\DateTime** | Timestamp of last campaign update, in UTC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
