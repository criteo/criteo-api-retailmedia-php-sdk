# # ShareOfVoiceInsight

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Account ID the insight report is generated for. |
**aggregation_level** | **string** | Aggregation level of the report. Allowed values: &#x60;category&#x60;, &#x60;keyword&#x60;. Defaults to &#x60;category&#x60;. | [optional] [default to 'category']
**dimensions** | **string[]** | Dimensions to report on. &#x60;week&#x60;, &#x60;month&#x60;, &#x60;quarter&#x60; and &#x60;year&#x60; return the first day of the period  (weeks start on Monday), which may be earlier than &#x60;startDate&#x60;; values cover only the requested range. |
**end_date** | **string** | End date of the report, in ISO 8601 format (YYYY-MM-DD). |
**filters** | [**\criteo\api\retailmedia\experimental\Model\ShareOfVoiceFilters**](ShareOfVoiceFilters.md) |  | [optional]
**format** | **string** | Output format of the report. Allowed values: &#x60;json&#x60;, &#x60;json-compact&#x60;, &#x60;json-newline&#x60;, &#x60;csv&#x60;. Defaults to &#x60;json-compact&#x60;. | [optional] [default to 'json-compact']
**metrics** | **string[]** | Metrics to report on. |
**start_date** | **string** | Start date of the report, in ISO 8601 format (YYYY-MM-DD). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
