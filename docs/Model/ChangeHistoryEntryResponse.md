# # ChangeHistoryEntryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actor_role** | [**ActorRole**](ActorRole.md) | Role label of the actor that performed the change. No user identifiers are exposed. |
**changes** | [**\criteo\api\retailmedia\experimental\Model\ChangedField[]**](ChangedField.md) | Old and new values for each field changed as part of this event. |
**entity** | [**\criteo\api\retailmedia\experimental\Model\ChangeHistoryEntryResponseEntity**](ChangeHistoryEntryResponseEntity.md) |  |
**event_type** | **string** | Semantic type of the configuration change, &#x60;&lt;entityType&gt;&lt;Action&gt;&#x60; style — for example &#x60;campaignCreated&#x60;, &#x60;lineItemUpdated&#x60;, &#x60;balanceUpdated&#x60;. Additional values may be returned. |
**occurred_at** | **\DateTime** | UTC timestamp when the change occurred (ISO-8601). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
