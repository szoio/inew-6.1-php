# AccessKey

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_role** | [**\iNew\Rest6_1\Model\AccessRole**](AccessRole.md) |  | [optional] 
**access_rules** | [**\iNew\Rest6_1\Model\AccessRule[]**](AccessRule.md) | the access rules of this key&lt;br&gt; if any single AccessRule is violated then the AccessKey has no permission to access the operation and ACCESS_DENIED will be returned | 
**assigned_to** | **string** | a String a descriptive identifier so operations can keep track of who actually is using this key e.g. \&quot;Lemon42 CRM\&quot; | 
**channel** | [**\iNew\Rest6_1\Model\Channel**](Channel.md) | the Channel that will be set as a parameter for operations invoked with this key | 
**key** | **string** | the String to use as the id of the AccessKey | 
**parameter_restrictions** | [**\iNew\Rest6_1\Model\ParameterRestriction[]**](ParameterRestriction.md) | list of ParameterRestriction objects for granting access to rest operation parameters | [optional] 
**properties** | **map[string,string]** | a map which stores additional values (like retailerId) | [optional] 
**provider_id** | **int** | the MVNO provider id that will be set as a parameter for operations invoked with this key&lt;br&gt; a &lt;code&gt;null&lt;/code&gt; value is allowed and the AccessKey will be interpreted as an MVNA key which can only be used to maintain AccessKeys if the access rules do not restrict this | [optional] 
**retailer_key** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


