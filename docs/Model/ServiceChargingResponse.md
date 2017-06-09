# ServiceChargingResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charged_accounts** | [**\iNew\Rest6_1\Model\Account[]**](Account.md) | List of all accounts that were charged | 
**reference_id** | **string** | External identifier provided by the source system in the originating request | 
**session_id** | **string** | Identifier of the charging transaction in the I-New platform. Can be used by the source system for reconciliation purposes | 
**transaction_date** | [**\DateTime**](\DateTime.md) | Date/time when the system received the charging request | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


