# # SyncCampaignsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_type** | **string** | Type of report, if no dimensions/metrics are provided, falls back to summary reportType | [optional] [default to 'summary']
**campaign_ids** | **string[]** | Campaign ids to filter | [optional]
**account_id** | **string** | Account id to report on |
**click_attribution_window** | **string** | Click attribution window | [optional] [default to 'none']
**view_attribution_window** | **string** | View attribution window | [optional] [default to 'none']
**campaign_type** | **string** | Filter the type of campaigns to report on: sponsoredProducts or onSiteDisplays | [optional]
**sales_channel** | **string** | Filter on specific sales channel: offline or online | [optional]
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**metrics** | **string[]** | List of metrics to report on | [optional]
**start_date** | **\DateTime** | Start date |
**end_date** | **\DateTime** | End date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
