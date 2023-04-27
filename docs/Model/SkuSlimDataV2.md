# # SkuSlimDataV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A short product name. | [optional]
**description** | **string** | A short description of the product. | [optional]
**retailer_category** | [**\criteo\api\retailmedia\preview\Model\RetailerCategory**](RetailerCategory.md) |  | [optional]
**global_category_id** | **string** | The global category Id. | [optional]
**global_brand** | [**\criteo\api\retailmedia\preview\Model\GlobalBrand**](GlobalBrand.md) |  | [optional]
**retailer_brand** | [**\criteo\api\retailmedia\preview\Model\RetailerBrand**](RetailerBrand.md) |  | [optional]
**price** | **float** | The price of the product on the retailer site. |
**is_in_stock** | **bool** | An indication of if the retailer currently has the product in stock. |
**gtin** | **string** | A GTIN identifier for the product if available. Covers variations such as EANs and UPCs. | [optional]
**mpn** | **string** | The MPN for the product if available. | [optional]
**image_url** | **string** | An http image resource provided by the retailer. | [optional]
**updated_at** | **\DateTime** | The last time this product was updated in the Retail Media Catalog. Represented as a UTC ISO8601 string. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
