# # AsyncAttributedTransactionsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**click_attribution_window** | **string** | Optional click attribution window. | [optional] [default to 'none']
**dimensions** | **string[]** | Required output grouping fields. Empty array means no grouping fields. At least one of dimensions or metrics must be non-empty. |
**end_date** | **\DateTime** | Required inclusive report end date in YYYY-MM-DD format. Must be greater than or equal to startDate. |
**filters** | [**\criteo\api\retailmedia\preview\Model\AttributedTransactionsReportFilters**](AttributedTransactionsReportFilters.md) |  |
**format** | **string** | Output format. If omitted, json-compact is used. | [optional] [default to 'json-compact']
**metrics** | **string[]** | Required output measure fields. Empty array means no measure fields. At least one of dimensions or metrics must be non-empty. |
**start_date** | **\DateTime** | Required inclusive report start date in YYYY-MM-DD format. |
**timezone** | **string** | Optional time zone identifier. If omitted, UTC is used. If provided, it must be valid. | [optional] [default to 'UTC']
**view_attribution_window** | **string** | Optional view attribution window. | [optional] [default to 'none']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
