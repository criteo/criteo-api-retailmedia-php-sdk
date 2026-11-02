# # ComputeOnsiteDisplayForecastResourceAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buy_type** | **string** | How the inventory is bought. | [optional] [default to 'auction']
**creative_formats** | **string[]** | Restricts the forecast to these creative formats. Defaults to all formats. | [optional]
**end_date** | **\DateTime** | Last day of the forecast period, inclusive, as &#x60;YYYY-MM-DD&#x60;. May equal  &#x60;startDate&#x60; for a single-day forecast. |
**frequency_capping** | [**\criteo\api\retailmedia\experimental\Model\ComputeOnsiteDisplayForecastFrequencyCapping**](ComputeOnsiteDisplayForecastFrequencyCapping.md) |  | [optional]
**page_settings** | [**\criteo\api\retailmedia\experimental\Model\PageSetting[]**](PageSetting.md) | Page types to include, at least one, and at most one entry per page type. |
**retailer_id** | **string** | Identifies the retailer whose inventory is being forecast. |
**start_date** | **\DateTime** | First day of the forecast period, as &#x60;YYYY-MM-DD&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
