# # ProblemDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**trace_id** | **string** | The request correlation ID this problem comes from. | [optional]
**trace_identifier** | **string** | The request correlation ID this problem comes from. (deprecated, use traceId instead) | [optional]
**type** | **string** | The problem&#39;s category. | [optional]
**code** | **string** | A machine-readable  error code, expressed as a string value. | [optional]
**instance** | **string** | A URI that identifies the specific occurrence of the problem. | [optional]
**title** | **string** | A short human-readable description of the problem type | [optional]
**detail** | **string** | A human-readable explanation specific to this occurrence of the problem | [optional]
**source** | **array<string,string>** | A machine-readable structure to reference to the exact location(s) causing the error(s) | [optional]
**stack_trace** | **string** | Technical information, only used in non-prod environments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
