# # PageSetting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keywords** | **string[]** | Keywords to filter inventory by, up to 100. Required when &#x60;pageType&#x60; is  &#x60;search&#x60; or &#x60;searchBar&#x60;. Recommended  keywords come from &#x60;POST /retail-media/retailers/{retailerId}/recommend-keywords&#x60;. | [optional]
**page_cpm** | [**\criteo\api\retailmedia\experimental\Model\PageSettingPageCpm**](PageSettingPageCpm.md) |  | [optional]
**page_type** | **string** | Page type to forecast. |
**taxonomy_ids** | **string[]** | Retail Media category IDs to filter inventory by, up to 100. Required when  &#x60;pageType&#x60; is &#x60;category&#x60;,  &#x60;productDetail&#x60;, &#x60;categoryMenu&#x60; or  &#x60;merchandising&#x60;. The ids come from the returned category &#x60;id&#x60;  of &#x60;POST /retail-media/retailers/{retailerId}/categories/search&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
