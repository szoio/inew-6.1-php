# Campaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by** | **int** | the user ID from LCM GUI which created the campaign | 
**created_on** | [**\DateTime**](\DateTime.md) | the date the campaign was created on | 
**description** | **string** | the description of the campaign | 
**end_date** | [**\DateTime**](\DateTime.md) | the end date of the campaign | 
**id** | **int** | the campaign ID | 
**name** | **string** | the name of the campaign | 
**start_date** | [**\DateTime**](\DateTime.md) | the start date of the campaign | 
**status** | [**\iNew\Rest6_1\Model\CampaignStatus**](CampaignStatus.md) |  | 
**subscriber_count** | **int** | the subscribers count | 
**subscriber_selection** | [**\iNew\Rest6_1\Model\CampaignSubscriberSelection**](CampaignSubscriberSelection.md) | Denotes the eligibility rules for campaigns and its subscribers. That means, in regards to the chosen eligibility, either all or certain (restricted) subscribers may be applicable for the campaign having this status | 
**type** | [**\iNew\Rest6_1\Model\CampaignType**](CampaignType.md) | the type of the campaign | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


