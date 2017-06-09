# CostLimitStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_units** | **int** | Limit in smallest units of main currency which subscriber cannot exceed for the traffic and zone types | 
**next_reset_date** | [**\DateTime**](\DateTime.md) | Date until the current subscriber&#39;s usage is applicable for cost limit or the date of next usage reset | 
**traffic_type** | [**\iNew\Rest6_1\Model\CostControlTrafficType**](CostControlTrafficType.md) | Traffic type for the cost control limitation | 
**used_units** | **int** | Number of smallest units in main currency subscriber has already spent for the specific cost control limitation | 
**zone_type** | [**\iNew\Rest6_1\Model\CostControlZoneType**](CostControlZoneType.md) | all available zone types for cost control limitation | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


