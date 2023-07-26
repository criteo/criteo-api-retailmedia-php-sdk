# # AttributedTransactionsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_ids** | **string[]** | Campaign ids to report on | [optional]
**line_item_ids** | **string[]** | Line item ids to report on | [optional]
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**metrics** | **string[]** | List of metrics to report on | [optional]
**sold_by** | **string** | Filter on the type of seller | [optional]
**campaign_sub_type** | **string** | Filter on the campaign sub type | [optional]
**account_id** | **string** | Account id to report on |
**start_date** | **\DateTime** | Start date |
**end_date** | **\DateTime** | End Date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']
**click_attribution_window** | **string** | Click Attribution Window | [optional] [default to '7D']
**view_attribution_window** | **string** | View Attribution window | [optional] [default to 'none']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
