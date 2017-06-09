# OverdraftConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_fee** | **int** | the activation fee that the subscription owes when the overdraft functionality is activated | 
**after_grace_period_fee** | **int** | the additional late fee in case overdraft is not paid back by topups within the grace period | 
**currency_id** | **int** | the currencyId of the currency the amounts are represented in | 
**currency_name** | **string** | the currencyName the amounts are represented in | 
**currency_unit_relation** | **int** | the currencyUnitRelation, the value by which the amounts/fees need to be divided to get the natural representation&lt;br&gt; e.g. activationFee&#x3D;500 (cents), currency&#x3D;\&quot;Euro\&quot;, currencyUnitRelation&#x3D;100 (1 Euro &#x3D; 100 cents) this would mean that the lateFee is 5€ | 
**from_amount** | **int** | the lower range this configuration is intended for | 
**grace_period** | **int** | the grace period in which no additional fees have to be paid if overdraft is paid back (in hours) | 
**to_amount** | **int** | the upper range this configuration is intended for | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


