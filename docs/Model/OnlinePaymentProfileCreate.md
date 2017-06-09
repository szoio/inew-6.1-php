# OnlinePaymentProfileCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | the profile name | 
**one_click** | **bool** | true, if the searched profile is of one-click type | 
**one_click_recharge** | [**\iNew\Rest6_1\Model\RechargeBody**](RechargeBody.md) | the one-click re-charge | [optional] 
**payment_method_details_id** | **int** | the payment method details ID obtained by the create method e.g. for creating a credit card via POST /customers/{customerAccountId}/onlinePaymentMethods/creditCards | 
**repayment_details** | [**\iNew\Rest6_1\Model\RepaymentDetails**](RepaymentDetails.md) | the re-payment details | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


