# # LineItemProductInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_product_details** | **object** | Onsite Display-specific product details supplied when adding a product. A display product is  identified entirely by its resource id, so this object carries no fields of its own today; it  exists so display can gain request-only fields without reshaping the request. | [optional]
**product_type** | **string** | The type of the product, selecting which detail object is read. |
**sponsored_product_details** | [**\criteo\api\retailmedia\experimental\Model\SponsoredProductDetails**](SponsoredProductDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
