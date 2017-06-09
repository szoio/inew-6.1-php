# HeartbeatResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**correlation_id** | **string** | This field is used to correlate requests and responses in case of asynchronous communication via JMS | [optional] 
**load** | [**\iNew\Rest6_1\Model\SystemLoad**](SystemLoad.md) | the load | 
**load_factor** | **int** | the loadFactor | 
**state** | [**\iNew\Rest6_1\Model\SystemState**](SystemState.md) | the state | 
**timestamp** | **int** | the timestamp of creation of the HeartbeatRequest in milliseconds System#currentTimeMillis() | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


