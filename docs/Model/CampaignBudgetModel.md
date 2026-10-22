# # CampaignBudgetModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Total the campaign may spend over its flight. Null when the campaign is uncapped. | [optional]
**cappings** | [**\criteo\api\retailmedia\experimental\Model\BudgetCappingModel[]**](BudgetCappingModel.md) | Per-period ceilings. Only capped periods are reported. | [optional]
**memo** | **string** | Note recorded with the latest budget change. | [optional]
**pacing** | [**\criteo\api\retailmedia\experimental\Model\PacingModel**](PacingModel.md) |  | [optional]
**remaining** | **float** | Amount left under the cap. Null when the campaign is uncapped. | [optional]
**spent** | **float** | Amount spent so far. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
