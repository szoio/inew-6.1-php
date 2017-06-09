# SponsorPoolInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_date** | [**\DateTime**](\DateTime.md) | the date when pool was created (when owner of the pool activated a shared plan) | 
**id** | **int** | the id of the subscriber&#39;s pool | 
**owner** | [**\iNew\Rest6_1\Model\PoolSubscriber**](PoolSubscriber.md) | the owner subscriber of the pool which can manipulate the pool subscribers | 
**sponsor** | [**\iNew\Rest6_1\Model\PoolSubscriber**](PoolSubscriber.md) | the sponsor of this pool, null if this sponsor is actually the owner | 
**subscribers** | [**\iNew\Rest6_1\Model\PoolSubscriber[]**](PoolSubscriber.md) | the list of subscribers belonging to the pool | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


