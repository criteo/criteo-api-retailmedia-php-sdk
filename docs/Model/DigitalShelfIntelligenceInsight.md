# # DigitalShelfIntelligenceInsight

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Account ID the insight report is generated for. |
**aggregation_level** | **string** | Aggregation level of the report. Allowed values: &#x60;brand&#x60;, &#x60;sku&#x60;. |
**end_date** | **string** | End date of the report (inclusive), in ISO 8601 format (YYYY-MM-DD).  Adjusted to the Sunday of the week containing the provided date. |
**filters** | [**\criteo\api\retailmedia\preview\Model\DigitalShelfIntelligenceFilters**](DigitalShelfIntelligenceFilters.md) |  | [optional]
**format** | **string** | Output format of the report. Allowed values: &#x60;json&#x60;, &#x60;json-compact&#x60;, &#x60;json-newline&#x60;, &#x60;csv&#x60;. Defaults to &#x60;json-compact&#x60;. | [optional] [default to 'json-compact']
**metrics** | **string[]** | Metrics to report on. |
**start_date** | **string** | Start date of the report (inclusive), in ISO 8601 format (YYYY-MM-DD).  Adjusted to the Monday of the week containing the provided date. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
