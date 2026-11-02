# # OnsiteDisplayForecast

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_impressions** | **int** | Estimated available impressions over the whole forecast period. |
**average_cpm** | [**\criteo\api\retailmedia\experimental\Model\OnsiteDisplayForecastAverageCpm**](OnsiteDisplayForecastAverageCpm.md) |  | [optional]
**budget** | [**\criteo\api\retailmedia\experimental\Model\OnsiteDisplayForecastBudget**](OnsiteDisplayForecastBudget.md) |  |
**details** | [**\criteo\api\retailmedia\experimental\Model\InventoryForecastDetail[]**](InventoryForecastDetail.md) | Daily breakdown, one entry per row of the grain described on  &#x60;InventoryForecastDetail&#x60;. |
**page_type** | **string** | Page type this forecast applies to. |
**reservation_rate** | **float** | Proportion of inventory already reserved, from 0.0 to 1.0. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
