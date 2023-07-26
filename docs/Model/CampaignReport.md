# # CampaignReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_type** | **string** |  | [optional]
**campaign_ids** | **string[]** | List of campaign Ids to filter | [optional]
**metrics** | **string[]** | List of Metrics to report on | [optional]
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**account_id** | **string** | Account id to report on |
**start_date** | **\DateTime** | Start date |
**end_date** | **\DateTime** | End Date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']
**click_attribution_window** | **string** | Click Attribution Window | [optional] [default to '7D']
**view_attribution_window** | **string** | View Attribution window | [optional] [default to 'none']
**campaign_type** | **string** | Filter the type of campaign to report on | [optional]
**sales_channel** | **string** | Filter on the channel of sales | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
