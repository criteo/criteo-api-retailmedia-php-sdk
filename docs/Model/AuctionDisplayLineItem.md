# # AuctionDisplayLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bidding** | [**\criteo\api\retailmedia\preview\Model\Bidding**](Bidding.md) |  |
**budget** | **float** | The budget for the line item |
**campaign_id** | **string** | The identifier of the campaign to which the line item belongs. |
**creative_ids** | **string[]** | The list of creative IDs associated with the line item. |
**end_date** | **\DateTime** | The end date of the line item. | [optional]
**frequency_capping** | [**\criteo\api\retailmedia\preview\Model\LineItemCappingTarget**](LineItemCappingTarget.md) |  | [optional]
**is_proposal** | **bool** | Indicates whether the line item is a proposal. |
**media_type** | **string** | The media type of the line item (e.g., display or video). |
**name** | **string** | The name of the line item. |
**pacing** | [**\criteo\api\retailmedia\preview\Model\LineItemPacing**](LineItemPacing.md) |  |
**page_types** | **string[]** | The list of page types where the line item can be displayed. |
**product_ids** | **string[]** | The list of product IDs targeted by the line item. |
**retailer_id** | **string** | The identifier of the retailer associated with the line item. |
**start_date** | **\DateTime** | The start date of the line item. |
**status** | **string** | The current status of the line item. |
**targets** | [**\criteo\api\retailmedia\preview\Model\Targets**](Targets.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
