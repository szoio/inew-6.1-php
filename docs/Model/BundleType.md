# BundleType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bundle_code** | **string** |  | 
**category** | [**\iNew\Rest6_1\Model\Category**](Category.md) |  | 
**charged_upfront** | **bool** |  | 
**description** | **string** |  | [optional] 
**expires** | **int** |  | [optional] 
**expiry_unit** | [**\iNew\Rest6_1\Model\ExpiryUnit**](ExpiryUnit.md) |  | [optional] 
**group** | [**\iNew\Rest6_1\Model\GroupType**](GroupType.md) |  | 
**included_quota** | [**\iNew\Rest6_1\Model\QuotaType[]**](QuotaType.md) |  | [optional] 
**initial_charges** | [**\iNew\Rest6_1\Model\Charge[]**](Charge.md) | the charges that will be tried to be charged on the bundle purchase | [optional] 
**name** | **string** |  | 
**number_of_renewals** | **int** |  | [optional] 
**payment_option** | [**\iNew\Rest6_1\Model\PaymentOption**](PaymentOption.md) | if ALL this plan can be activated with either the online payment profile, or with the main balance | 
**periodic** | **bool** |  | 
**periodic_charges** | [**\iNew\Rest6_1\Model\Charge[]**](Charge.md) | the list of charges that will be tried to be charged on the bundle renewal. This list is empty, if the bundle is not periodic | [optional] 
**type** | [**\iNew\Rest6_1\Model\Type**](Type.md) |  | 
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**valid_to** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


