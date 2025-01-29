# # Template

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creative_format** | **string** | The kind of creative this template can be used to build. |
**name** | **string** | The name of the template |
**sku_collection_min** | **int** | Minimum number of skus in the collection |
**sku_collection_max** | **int** | Maximum number of skus in the collection | [optional]
**sku_per_collection_min** | **int** | Minimum number of skus per collection |
**sku_per_collection_max** | **int** | Maximum number of skus per collection | [optional]
**displayable_skus_max** | **int** | Maximum number of displayable skus | [optional]
**all_collections_mandatory** | **bool** | Marks whether or not all collections are mandatory |
**created_at** | **\DateTime** | The time at which the template was created |
**updated_at** | **\DateTime** | The time at which the template was updated |
**sections** | [**\criteo\api\retailmedia\v2024_01\Model\Section[]**](Section.md) | The sections holding various template variables |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
