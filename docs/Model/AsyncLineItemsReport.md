# # AsyncLineItemsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metrics** | **string[]** | List of metrics to report on | [optional]
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**campaign_type** | **string** | Filter the type of campaigns to report on: sponsoredProducts or onSiteDisplays | [optional]
**sales_channel** | **string** | Filter on specific sales channel: offline or online | [optional]
**format** | **string** | Format of the output | [optional] [default to 'json-compact']
**report_type** | **string** | Type of report, if no dimensions/metrics are provided, falls back to summary reportType | [optional] [default to 'summary']
**click_attribution_window** | **string** | Click attribution window | [optional] [default to 'none']
**view_attribution_window** | **string** | View attribution window | [optional] [default to 'none']
**ids** | **string[]** | Ids to report on | [optional]
**id** | **string** | Id to report on | [optional]
**start_date** | **\DateTime** | Start date |
**end_date** | **\DateTime** | End date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
