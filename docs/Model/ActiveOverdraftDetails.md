# ActiveOverdraftDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_date** | [**\DateTime**](\DateTime.md) | the activation date of the overdraft functionality, i.e. when the loan was issued | 
**activation_fee** | **int** | the activation fee that the subscription owes when the overdraft functionality is activated | 
**after_grace_period_fee** | **int** | the additional late fee in case there is the overdraft is not paid back by topups the grace period | 
**currency_id** | **int** | the currencyId of the currency the amounts are represented in | 
**currency_name** | **string** | the currencyName the amounts are represented in | 
**currency_unit_relation** | **int** | the currencyUnitRelation, the value by which the amounts/fees need to be divided to get the natural representation&lt;br&gt; e.g. activationFee&#x3D;500 (cents), currency&#x3D;\&quot;Euro\&quot;, currencyUnitRelation&#x3D;100 (1 Euro &#x3D; 100 cents) this would mean that the lateFee is 5€ | 
**eligible_amount** | **int** | the eligibleAmount the amount the subscription is eligible for | 
**grace_period** | **int** | the grace period in which no additional fees have to be paid if overdraft is paid back (in hours) | 
**grace_period_end_date** | [**\DateTime**](\DateTime.md) | the date when the grace period until additional fees have to be paid ends | 
**loan_amount** | **int** | the amount that was loaned to the subscription | 
**outstanding_amount** | **int** | the total amount that is outstanding, the loaned amount plus any fees minus already repaid amount | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


