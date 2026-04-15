# # AuctionDisplayLineItemPatchModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bidding** | [**\criteo\api\retailmedia\preview\Model\BiddingRequest**](BiddingRequest.md) |  | [optional]
**budget** | **float** | The budget for the line item | [optional]
**campaign_id** | **string** | The identifier of the campaign to which the line item belongs. | [optional]
**creative_ids** | **string[]** | The list of creative IDs associated with the line item. | [optional]
**end_date** | **\DateTime** | The end date of the line item. | [optional]
**frequency_capping** | [**\criteo\api\retailmedia\preview\Model\NillableOfLineItemCappingTargetRequest**](NillableOfLineItemCappingTargetRequest.md) |  | [optional]
**is_active** | **bool** | Indicates whether the line item is active. | [optional]
**media_type** | **string** | The media type of the line item (e.g., display or video). | [optional]
**name** | **string** | The name of the line item. | [optional]
**pacing** | [**\criteo\api\retailmedia\preview\Model\LineItemPacingRequest**](LineItemPacingRequest.md) |  | [optional]
**page_types** | **string[]** | The list of page types configured for the line item. | [optional]
**product_ids** | **string[]** | The list of product IDs targeted by the line item. | [optional]
**retailer_id** | **string** | The identifier of the retailer associated with the line item. | [optional]
**start_date** | **\DateTime** | The start date of the line item. | [optional]
**targets** | [**\criteo\api\retailmedia\preview\Model\TargetsRequest**](TargetsRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
