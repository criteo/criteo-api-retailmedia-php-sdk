# # SkuDataPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_key** | **string** | The product SKU Key. |
**name** | **string** | A short product name. | [optional]
**description** | **string** | A product description. | [optional]
**category_id** | **string** | The category Id. | [optional]
**category** | **string** | The full category breadcrumb in the retailers catalog. | [optional]
**is_seller_sku** | **bool** | An indication of if the sku is seller sku. | [optional]
**seller_id** | **string** | The id of the seller. | [optional]
**seller_name** | **string** | The name of the seller. | [optional]
**brand_id** | **string** | The global brand id associated to the product. |
**brand_name** | **string** | The name of the global brand. |
**retailer_id** | **string** | The identifier for the retailer the product is listed by. |
**retailer_name** | **string** | The retailer name. |
**price** | **double** | The price of the product on the retailer site. |
**is_in_stock** | **bool** | An indication of if the retailer currently has the product in stock. |
**gtin** | **string** | A GTIN identifier for the product if available. Covers variations such as EANs and UPCs. | [optional]
**mpn** | **string** | The MPN for the product if available. | [optional]
**image_url** | **string** | An http image resource provided by the retailer. | [optional]
**product_page** | **string** | An The product page URL | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | The last time this product was updated in the Retail Media Catalog. Represented as a UTC ISO8601 string. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
