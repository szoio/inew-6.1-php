# TariffPlanType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\iNew\Rest6_1\Model\TariffCategory**](TariffCategory.md) | the category | 
**charges** | [**\iNew\Rest6_1\Model\ChargeExt[]**](ChargeExt.md) |  | [optional] 
**group_rating_used** | **bool** | the groupRatingUsed | [optional] 
**id** | **int** | the id | 
**included_quota** | [**\iNew\Rest6_1\Model\QuotaType1[]**](QuotaType1.md) | the includedQuota | [optional] 
**last_renewal_date** | [**\DateTime**](\DateTime.md) | the lastRenewalDate | 
**name** | **string** | the name | 
**next_renewal_date** | [**\DateTime**](\DateTime.md) | the nextRenewalDate | 
**payment_option** | [**\iNew\Rest6_1\Model\PaymentOption**](PaymentOption.md) | if ALL this plan can be activated with either the online payment profile, or with the main balance | 
**periodic_charge** | [**\iNew\Rest6_1\Model\Charge4**](Charge4.md) | the periodicCharge | 
**renewal_period** | [**\iNew\Rest6_1\Model\TariffPeriod**](TariffPeriod.md) | the renewalPeriod | 
**shared** | **bool** | the shared | 
**shared_details** | [**\iNew\Rest6_1\Model\SharedPlanDetails1**](SharedPlanDetails1.md) | the sharedDetails | [optional] 
**status** | [**\iNew\Rest6_1\Model\TariffPlanStatus**](TariffPlanStatus.md) | the status | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


