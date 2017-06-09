# PaymentDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank_result** | **string** | the bank result message | [optional] 
**payment_method** | [**\iNew\Rest6_1\Model\PaymentMethodType**](PaymentMethodType.md) | the payment type | [optional] 
**payment_method_info** | **string** | the additional payment method information | [optional] 
**recharge_period** | [**\iNew\Rest6_1\Model\PeriodType**](PeriodType.md) | the period to be elapsed before the next payment is done | [optional] 
**recharge_threshold** | **int** | the threshold amount when the re-payment is triggered | [optional] 
**transaction_date** | [**\DateTime**](\DateTime.md) | the payment transaction date | [optional] 
**transaction_status** | **string** | the payment transaction status | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


