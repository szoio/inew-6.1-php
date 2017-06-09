# iNew\Rest6_1\AddonRetailManagerApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rtmRetailManagerActivateBundle**](AddonRetailManagerApi.md#rtmRetailManagerActivateBundle) | **POST** /retailer/{msisdn}/availableBundles/{bundleCode}/activate | activates the given bundle
[**rtmRetailManagerActivatePlan**](AddonRetailManagerApi.md#rtmRetailManagerActivatePlan) | **POST** /retailer/{msisdn}/availablePlans/{tariffPlanId}/activate | activates the given plan
[**rtmRetailManagerGetAvailableBundles**](AddonRetailManagerApi.md#rtmRetailManagerGetAvailableBundles) | **GET** /retailer/{msisdn}/availableBundles | returns the available bundles
[**rtmRetailManagerGetAvailablePlans**](AddonRetailManagerApi.md#rtmRetailManagerGetAvailablePlans) | **GET** /retailer/{msisdn}/availablePlans | returns the available plans
[**rtmRetailManagerTopup**](AddonRetailManagerApi.md#rtmRetailManagerTopup) | **PUT** /retailer/{msisdn}/topup | makes a topup with the given amount


# **rtmRetailManagerActivateBundle**
> \iNew\Rest6_1\Model\ChargeResponse rtmRetailManagerActivateBundle($msisdn, $bundle_code, $correlation_id, $transaction_id, $user, $pos_id, $sub_retailer_id)

activates the given bundle

**Access Restriction:** RETAILER  **Operation ID:** rtm::RetailManager::ActivateBundle  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1041000001 - Invalid Arguments (client error HTTP Status 400)   1041000002 - Database error (server error HTTP Status 500)   1041000003 - unknown error (server error HTTP Status 500)   1041000004 - unable to determine product price (server error HTTP Status 500)   1041000005 - product price is not representable in the expected relation (server error HTTP Status 500)   1041000050 - Retailer is not known to the system (client error HTTP Status 400)   1041000051 - Retailer is deactivated (client error HTTP Status 400)   1041000052 - Retailer is blocked (client error HTTP Status 400)   1041000053 - Retailer does not have sufficient funds (client error HTTP Status 400)   1041000054 - Topup amount not in allowed range (client error HTTP Status 400)   1041000055 - Retailer has the given withdraw type disabled (client error HTTP Status 400)  **Notes:**   activates the given bundle  **Additional Notes:**   the retailerId will be encoded in the access key and sent automatically with each request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonRetailManagerApi();
$msisdn = "msisdn_example"; // string | The phone number of the subscriber
$bundle_code = "bundle_code_example"; // string | the product ID of the bundle/plan that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$pos_id = "pos_id_example"; // string | the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)
$sub_retailer_id = "sub_retailer_id_example"; // string | the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)

try {
    $result = $api_instance->rtmRetailManagerActivateBundle($msisdn, $bundle_code, $correlation_id, $transaction_id, $user, $pos_id, $sub_retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonRetailManagerApi->rtmRetailManagerActivateBundle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msisdn** | **string**| The phone number of the subscriber |
 **bundle_code** | **string**| the product ID of the bundle/plan that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **pos_id** | **string**| the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]
 **sub_retailer_id** | **string**| the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]

### Return type

[**\iNew\Rest6_1\Model\ChargeResponse**](../Model/ChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rtmRetailManagerActivatePlan**
> \iNew\Rest6_1\Model\ChargeResponse rtmRetailManagerActivatePlan($msisdn, $tariff_plan_id, $correlation_id, $transaction_id, $user, $pos_id, $sub_retailer_id)

activates the given plan

**Access Restriction:** RETAILER  **Operation ID:** rtm::RetailManager::ActivatePlan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1041000001 - Invalid Arguments (client error HTTP Status 400)   1041000002 - Database error (server error HTTP Status 500)   1041000003 - unknown error (server error HTTP Status 500)   1041000004 - unable to determine product price (server error HTTP Status 500)   1041000005 - product price is not representable in the expected relation (server error HTTP Status 500)   1041000050 - Retailer is not known to the system (client error HTTP Status 400)   1041000051 - Retailer is deactivated (client error HTTP Status 400)   1041000052 - Retailer is blocked (client error HTTP Status 400)   1041000053 - Retailer does not have sufficient funds (client error HTTP Status 400)   1041000054 - Topup amount not in allowed range (client error HTTP Status 400)   1041000055 - Retailer has the given withdraw type disabled (client error HTTP Status 400)  **Notes:**   activates the given plan  **Additional Notes:**   the retailerId will be encoded in the access key and sent automatically with each request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonRetailManagerApi();
$msisdn = "msisdn_example"; // string | The phone number of the subscriber
$tariff_plan_id = "tariff_plan_id_example"; // string | the product ID of the bundle/plan that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$pos_id = "pos_id_example"; // string | the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)
$sub_retailer_id = "sub_retailer_id_example"; // string | the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)

try {
    $result = $api_instance->rtmRetailManagerActivatePlan($msisdn, $tariff_plan_id, $correlation_id, $transaction_id, $user, $pos_id, $sub_retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonRetailManagerApi->rtmRetailManagerActivatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msisdn** | **string**| The phone number of the subscriber |
 **tariff_plan_id** | **string**| the product ID of the bundle/plan that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **pos_id** | **string**| the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]
 **sub_retailer_id** | **string**| the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]

### Return type

[**\iNew\Rest6_1\Model\ChargeResponse**](../Model/ChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rtmRetailManagerGetAvailableBundles**
> \iNew\Rest6_1\Model\GetAvailableBundlesResponse1 rtmRetailManagerGetAvailableBundles($msisdn, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $pos_id, $sub_retailer_id)

returns the available bundles

**Access Restriction:** RETAILER  **Operation ID:** rtm::RetailManager::GetAvailableBundles  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available bundles  **Additional Notes:**   the retailerId will be encoded in the access key and sent automatically with each request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonRetailManagerApi();
$msisdn = "msisdn_example"; // string | The phone number of the subscriber
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$group_code = "group_code_example"; // string | the group code, if provided the result of this request will be filtered to only show bundles for the provided group code
$page = 56; // int | the page requested (pagination)
$pos_id = "pos_id_example"; // string | the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)
$sub_retailer_id = "sub_retailer_id_example"; // string | the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)

try {
    $result = $api_instance->rtmRetailManagerGetAvailableBundles($msisdn, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $pos_id, $sub_retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonRetailManagerApi->rtmRetailManagerGetAvailableBundles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msisdn** | **string**| The phone number of the subscriber |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **group_code** | **string**| the group code, if provided the result of this request will be filtered to only show bundles for the provided group code | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **pos_id** | **string**| the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]
 **sub_retailer_id** | **string**| the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableBundlesResponse1**](../Model/GetAvailableBundlesResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rtmRetailManagerGetAvailablePlans**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse rtmRetailManagerGetAvailablePlans($msisdn, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $pos_id, $show_shared_plans, $sub_retailer_id)

returns the available plans

**Access Restriction:** RETAILER  **Operation ID:** rtm::RetailManager::GetAvailablePlans  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans  **Additional Notes:**   the retailerId will be encoded in the access key and sent automatically with each request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonRetailManagerApi();
$msisdn = "msisdn_example"; // string | The phone number of the subscriber
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$pos_id = "pos_id_example"; // string | the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)
$sub_retailer_id = "sub_retailer_id_example"; // string | the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)

try {
    $result = $api_instance->rtmRetailManagerGetAvailablePlans($msisdn, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $pos_id, $show_shared_plans, $sub_retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonRetailManagerApi->rtmRetailManagerGetAvailablePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msisdn** | **string**| The phone number of the subscriber |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **pos_id** | **string**| the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]
 **sub_retailer_id** | **string**| the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse**](../Model/GetAvailablePlansResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rtmRetailManagerTopup**
> \iNew\Rest6_1\Model\ChargeResponse rtmRetailManagerTopup($msisdn, $amount, $correlation_id, $transaction_id, $user, $pos_id, $sub_retailer_id)

makes a topup with the given amount

**Access Restriction:** RETAILER  **Operation ID:** rtm::RetailManager::Topup  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1039000001 - Unknown error (server error HTTP Status 500)   1039000002 - Top-up amount too low (client error HTTP Status 400)   1039000003 - Top-up amount too high (client error HTTP Status 400)   1039000006 - Unknown subscriber (client error HTTP Status 400)   1039000010 - System busy (server error HTTP Status 500)   1039000013 - Internal error (server error HTTP Status 500)   1039000014 - Top-up not allowed (client error HTTP Status 400)   1039000109 - Transaction ID is not valid (client error HTTP Status 400)   1039000200 - Validation error (client error HTTP Status 400)   1039000202 - Transaction already initiated (client error HTTP Status 400)   1039000203 - Transaction is being processed (client error HTTP Status 400)   1039000204 - Transaction already committed (client error HTTP Status 400)   1039000205 - Monetary limit reached (client error HTTP Status 400)   1039000206 - Invalid currency (client error HTTP Status 400)   1041000001 - Invalid Arguments (client error HTTP Status 400)   1041000002 - Database error (server error HTTP Status 500)   1041000003 - unknown error (server error HTTP Status 500)   1041000004 - unable to determine product price (server error HTTP Status 500)   1041000005 - product price is not representable in the expected relation (server error HTTP Status 500)   1041000050 - Retailer is not known to the system (client error HTTP Status 400)   1041000051 - Retailer is deactivated (client error HTTP Status 400)   1041000052 - Retailer is blocked (client error HTTP Status 400)   1041000053 - Retailer does not have sufficient funds (client error HTTP Status 400)   1041000054 - Topup amount not in allowed range (client error HTTP Status 400)   1041000055 - Retailer has the given withdraw type disabled (client error HTTP Status 400)  **Notes:**   makes a topup with the given amount  **Additional Notes:**   the retailerId will be encoded in the access key and sent automatically with each request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonRetailManagerApi();
$msisdn = "msisdn_example"; // string | The phone number of the subscriber
$amount = new \iNew\Rest6_1\Model\AmountCreate(); // \iNew\Rest6_1\Model\AmountCreate | the amount used for the topup
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$pos_id = "pos_id_example"; // string | the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)
$sub_retailer_id = "sub_retailer_id_example"; // string | the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)

try {
    $result = $api_instance->rtmRetailManagerTopup($msisdn, $amount, $correlation_id, $transaction_id, $user, $pos_id, $sub_retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonRetailManagerApi->rtmRetailManagerTopup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msisdn** | **string**| The phone number of the subscriber |
 **amount** | [**\iNew\Rest6_1\Model\AmountCreate**](../Model/\iNew\Rest6_1\Model\AmountCreate.md)| the amount used for the topup |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **pos_id** | **string**| the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]
 **sub_retailer_id** | **string**| the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]

### Return type

[**\iNew\Rest6_1\Model\ChargeResponse**](../Model/ChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

