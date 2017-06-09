# InitTopupParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | the amount subscriber wants to topup his main balance, it is always is smallest charging units of the monetary currency | 
**external_voucher_id** | **string** | In case some external voucher system is used this field can be used to forward the ID, for it to be recorded in the Topup Ticket | [optional] 
**external_voucher_series** | **string** | In case some external voucher system is used this field can be used to forward the series ID the voucher belongs to, for it to be recorded in the Topup Ticket. In addition based on this series additional benefits can be configured within the system | [optional] 
**pos_id** | **string** | represents a point of sale (POS) through which the topup is performed | [optional] 
**sub_distributor_id** | **string** | represents a subdivision of topup integrator (e.g. store) through which the topup is performed | [optional] 
**unit_relation** | **int** | the unit relation the amount needs to be divided by to get to the main currency standard unit, e.g. amount&#x3D;104 unitRelation&#x3D;10 and the main currency in the country is EURO, the topup would be for 10 EURO and 40 Cents | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


