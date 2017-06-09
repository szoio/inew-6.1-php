# EligibleOverdraftDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_id** | **int** | the currencyId of the currency the amounts are represented in | 
**currency_name** | **string** | the currencyName the amounts are represented in | 
**currency_unit_relation** | **int** | the currencyUnitRelation, the value by which the amounts/fees need to be divided to get the natural representation&lt;br&gt; e.g. activationFee&#x3D;500 (cents), currency&#x3D;\&quot;Euro\&quot;, currencyUnitRelation&#x3D;100 (1 Euro &#x3D; 100 cents) this would mean that the lateFee is 5€ | 
**eligible_amount** | **int** | the eligibleAmount the amount the subscription is eligible for | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


