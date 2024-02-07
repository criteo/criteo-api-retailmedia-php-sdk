# # AsyncRevenueReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_type** | **string** | Type of report | [optional]
**revenue_type** | **string** | Type of revenue | [optional]
**ids** | **string[]** | List of campaign Ids to filter | [optional]
**id** | **string** | List of campaign Id to filter | [optional]
**metrics** | **string[]** | List of Metrics to report on | [optional]
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**format** | **string** | Format of the output | [optional]
**sold_by** | **string** | Filter on the seller: indirect, direct or private market | [optional]
**campaign_sub_type** | **string** | Filter on campaign subType : Auction and Preferred Deals or Lockout campaign | [optional]
**click_attribution_window** | **string** | Click attribution window | [optional] [default to 'none']
**view_attribution_window** | **string** | View attribution window | [optional] [default to 'none']
**campaign_type** | **string** | Filter the type of campaigns to report on: sponsoredProducts or onSiteDisplays | [optional]
**sales_channel** | **string** | Filter on specific sales channel: offline or online | [optional]
**start_date** | **\DateTime** | Start date |
**end_date** | **\DateTime** | End date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
