# # AsyncRevenueReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ids** | **string[]** | Supply account ids to report on | [optional]
**id** | **string** | Supply account id to report on | [optional]
**report_type** | **string** | Type of report | [optional]
**revenue_type** | **string** | Type of revenue | [optional]
**sold_by** | **string** | Filter on the seller: Indirect Sold, Direct Sold or Private Market | [optional]
**buy_type** | **string** | Filter on buy type: Auction, Preferred Deals or Sponsorship | [optional]
**advertiser_types** | **string[]** | Filter on the type of advertiser: retailer, brand, seller | [optional]
**sku_relations** | **string[]** | Filter on sku relations: Same SKU, Same Parent SKU, Same Category, Same Brand or Same Seller | [optional]
**format** | **string** | Format of the output | [optional]
**campaign_type** | **string** | Filter the type of campaigns to report on: sponsoredProducts or onSiteDisplays | [optional] [default to 'all']
**sales_channel** | **string** | Filter on specific sales channel: offline or online | [optional] [default to 'all']
**click_attribution_window** | **string** | Click attribution window | [optional] [default to 'none']
**view_attribution_window** | **string** | View attribution window | [optional] [default to 'none']
**dimensions** | **string[]** | List of dimensions to report on | [optional]
**metrics** | **string[]** | List of metrics to report on | [optional]
**start_date** | **\DateTime** | Start date |
**end_date** | **\DateTime** | End date |
**timezone** | **string** | Time zone : see criteo developer portal for supported time zones | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
