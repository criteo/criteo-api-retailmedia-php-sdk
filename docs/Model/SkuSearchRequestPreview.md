# # SkuSearchRequestPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query_string** | **string** | Query string to search for across SKU&#39;s properties (gtin, mpn, feed ID, Title, and Description) |
**retailer_id** | **string** | Retailer Id |
**sellers** | **string[]** | A list of seller names and/or seller Id&#39;s | [optional]
**brand_ids** | **string[]** | A list of brand Id&#39;s | [optional]
**sku_type** | **string** | Enum to set isSellerSku field | [optional] [default to 'brand']
**product_id_type** | **string** | Type of product Ids to search for(SkuKey, SkuId, Gtin, Mpn, Model, ParentId) | [optional] [default to 'skuKey']
**product_ids** | **string[]** | A list of product Id&#39;s, if not passed ignore and search by QueryString | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
