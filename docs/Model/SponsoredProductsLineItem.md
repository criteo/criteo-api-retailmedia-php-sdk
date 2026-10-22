# # SponsoredProductsLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid_strategy** | **string** | Bid strategy for the line item. | [optional]
**budget** | **float** | The total budget allocated for this line item. | [optional]
**budget_remaining** | **float** | The amount of the budget that remains available. |
**budget_spent** | **float** | The amount of the budget that has been spent so far. | [optional]
**campaign_id** | **string** | The ID of the campaign this line item belongs to. |
**created_at** | **\DateTime** | The date and time when the line item was created. |
**daily_pacing** | **float** | The daily pacing limit for budget spending. | [optional]
**end_date** | **\DateTime** | The date and time when the line item stops running. | [optional]
**flight_schedule** | [**\criteo\api\retailmedia\experimental\Model\FlightSchedule**](FlightSchedule.md) |  | [optional]
**is_auto_daily_pacing** | **bool** | Indicates whether automatic daily pacing is enabled. | [optional]
**keyword_strategy** | **string** | The keyword targeting strategy for this line item. | [optional]
**max_bid** | **float** | The maximum bid amount allowed for this line item. | [optional]
**monthly_pacing** | **float** | The monthly pacing limit for budget spending. | [optional]
**name** | **string** | The name of the line item. |
**optimization_strategy** | **string** | The optimization strategy for this line item. | [optional]
**start_date** | **\DateTime** | The date and time when the line item starts running. |
**status** | **string** | The current status of the line item.                unknown: could not be determined (data issue, not a line item state).  draft: never fully configured, has never served.  scheduled: configured, start date is in the future.  active: in flight, funded, under no budget cap.  paused: previously active, manually deactivated.                ended: end date passed, within the last 90 days.  archived: end date passed more than 90 days ago - same as ended, just older, not reversible.                noFunds: no currently-active funding source (no Active mapped Insertion Order, no active  Make-Good credit IO) - a missing-funding problem, separate from any budget cap.  budgetHit: a budget cap (daily, hourly, monthly, or total) is capped with zero or below  remaining. Doesn&#39;t distinguish line item vs. campaign budget, or which cap type.                draft/scheduled/ended/archived short-circuit before the funding/budget check runs, so  those states never report noFunds or budgetHit regardless of underlying financial data.  Where both would apply, noFunds takes precedence over budgetHit. | [optional]
**target_bid** | **float** | The target bid amount for the line item. | [optional]
**target_retailer_id** | **string** | The ID of the retailer targeted by this line item. |
**updated_at** | **\DateTime** | The date and time when the line item was last updated. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
