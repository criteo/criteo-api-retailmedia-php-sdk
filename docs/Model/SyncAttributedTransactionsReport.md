# # SyncAttributedTransactionsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_ids** | **string[]** | Campaign ids to report on | [optional]
**line_item_ids** | **string[]** | Line item ids to report on | [optional]
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**metrics** | **string[]** | List of metrics to report on | [optional]
**account_id** | **string** | Account id to report on |
**click_attribution_window** | **string** | Click attribution window | [optional] [default to 'none']
**view_attribution_window** | **string** | View attribution window | [optional] [default to 'none']
**campaign_type** | **string** | Filter the type of campaigns to report on: sponsoredProducts or onSiteDisplays | [optional]
**sales_channel** | **string** | Filter on specific sales channel: offline or online | [optional]
**start_date** | **\DateTime** | Start date |
**end_date** | **\DateTime** | End date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
