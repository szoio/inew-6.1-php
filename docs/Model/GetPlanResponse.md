# GetPlanResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**correlation_id** | **string** | this field is used to correlate requests and responses in case of asynchronous communication via JMS&lt;br&gt; The correlationId of any response must always be set to the same value given in the request for any API call! | 
**payload** | [**\iNew\Rest6_1\Model\TariffPlanType**](TariffPlanType.md) | the payload | [optional] 
**provider_id** | **int** | the unique MVNO provider ID | 
**response_code** | **int** | the response code value | 
**response_detail** | **string** | contains detailed information about the responseCode | 
**transaction_id** | **string** | this field is used to indicate that the message is part of a specific transaction&lt;br&gt; the difference to correlationId is that while the correlationId should be just match for one request/response exchange, the transactionId can be the same for several request/response exchanges that are part of one transaction | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


