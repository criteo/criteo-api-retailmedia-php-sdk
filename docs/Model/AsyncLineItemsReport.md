# # AsyncLineItemsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_type** | **string** | Filter the type of campaigns to report on: sponsoredProducts or onSiteDisplays | [optional] [default to 'all']
**click_attribution_window** | **string** | Click attribution window | [optional] [default to 'none']
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**end_date** | **\DateTime** | End date |
**format** | **string** | Format of the output | [optional] [default to 'json-compact']
**id** | **string** | Line Item id to report on | [optional]
**ids** | **string[]** | Line Item ids to report on | [optional]
**metrics** | **string[]** | List of metrics to report on | [optional]
**report_type** | **string** | Type of report, if no dimensions/metrics are provided, falls back to summary reportType | [optional] [default to 'summary']
**sales_channel** | **string** | Filter on specific sales channel: offline or online | [optional] [default to 'all']
**search_term_targetings** | **string[]** | Filter on the type of search term targeting: unknown, automatic, manual | [optional]
**search_term_types** | **string[]** | Filter on the type of search term type: unknown, searched, entered | [optional]
**start_date** | **\DateTime** | Start date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']
**view_attribution_window** | **string** | View attribution window | [optional] [default to 'none']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
