# # InventoryForecastDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_impressions** | **int** | Estimated available impressions for this day. |
**average_cpm** | [**\criteo\api\retailmedia\experimental\Model\InventoryForecastDetailAverageCpm**](InventoryForecastDetailAverageCpm.md) |  |
**budget** | [**\criteo\api\retailmedia\experimental\Model\InventoryForecastDetailBudget**](InventoryForecastDetailBudget.md) |  |
**creative_formats** | **string[]** | Every creative format available on this placement configuration, restricted to the formats  the request asked for. The row aggregates them - impressions are not split per format. |
**date** | **\DateTime** | The forecast day, as &#x60;YYYY-MM-DD&#x60;. |
**keyword** | **string** | The keyword this row is for. Present only for search and search bar pages. | [optional]
**placement_config_id** | **string** | Placement configuration this row is for. |
**taxonomy_id** | **string** | The taxonomy id this row is for. Present only for category, product detail, category menu  and merchandising pages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
