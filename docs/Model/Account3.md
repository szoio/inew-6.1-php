# Account3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | the amount this account was topped up in smallest units of monetary currency | 
**currency_id** | **int** | ID of currency in which units the account balance is represented | 
**currency_name** | **string** | name of currency in which units the account balance is represented | 
**expiry_date** | [**\DateTime**](\DateTime.md) | date of expiration until when the account balance can be used for consumption after the topup | [optional] 
**new_balance** | **int** | the account balance after the topup in smallest units of monetary currency | 
**unit_relation** | **int** | the unit relation the amount needs to be divided by to get to the main currency standard unit, e.g. amount&#x3D;104 unitRelation&#x3D;10 and the main currency in the country is EURO, the topup would be for 10 EURO and 40 Cents | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


