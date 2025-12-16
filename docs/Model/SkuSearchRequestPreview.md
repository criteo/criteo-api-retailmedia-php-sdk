# # SkuSearchRequestPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand_ids** | **string[]** | A list of brand Id&#39;s | [optional]
**brand_type** | **string** | Enum to set type of brand id&#39;s to filter by | [optional] [default to 'uC']
**id** | **string** |  | [optional]
**product_ids** | **string[]** | A list of product Id&#39;s, if not passed ignore and search by QueryString | [optional]
**product_id_type** | **string** | Type of Product Ids to search for. | [optional] [default to 'skuKey']
**query_string** | **string** | Query string to search for across SKU&#39;s properties (gtin, mpn, feed ID, Title, and Description) |
**retailer_id** | **string** | Retailer Id |
**sellers** | **string[]** | A list of seller names and/or seller Id&#39;s | [optional]
**sku_type** | **string** | Enum to set isSellerSku field | [optional] [default to 'brand']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
