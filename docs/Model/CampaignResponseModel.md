# # CampaignResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**attribution_settings** | [**\criteo\api\retailmedia\experimental\Model\AttributionSettingsModel**](AttributionSettingsModel.md) |  |
**bill_by_retailer_id** | **string** |  | [optional]
**budget_details** | [**\criteo\api\retailmedia\experimental\Model\BudgetDetailsModel**](BudgetDetailsModel.md) |  | [optional]
**buy_type** | **string** | Buy type of campaign, set only on creation. |
**campaign_type** | **string** | Type of campaign, set only on creation. |
**company_name** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**drawable_balance_ids** | **string[]** |  |
**id** | **string** |  | [optional]
**name** | **string** |  |
**objective** | **string** | Dynamic Campaign Budgets control: manual keeps today&#39;s behavior; clicks, conversion and  revenue activate campaign-level budget allocation. | [optional]
**on_behalf_company_name** | **string** |  | [optional]
**schedule_details** | [**\criteo\api\retailmedia\experimental\Model\ScheduleDetailsModel**](ScheduleDetailsModel.md) |  | [optional]
**status** | **string** | Campaign status, derived from the status of Line Items it holds; active if at least  one line item is active. |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
