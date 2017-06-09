# iNew\Rest6_1\PlanApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceFlexiPlanServiceGetPlanCustomerTemplate**](PlanApi.md#crceFlexiPlanServiceGetPlanCustomerTemplate) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/template | retrieves the plan template for the given flexiplan
[**crceFlexiPlanServiceGetPlanSubscriptionTemplate**](PlanApi.md#crceFlexiPlanServiceGetPlanSubscriptionTemplate) | **GET** /subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/template | retrieves the plan template for the given flexiplan
[**crceFlexiPlanServiceGetPlanTariffTemplate**](PlanApi.md#crceFlexiPlanServiceGetPlanTariffTemplate) | **GET** /tariffs/{tariffId}/availablePlans/{tariffPlanId}/template | retrieves the plan template for the given flexiplan
[**crceFlexiPlanServiceGetPlanTemplate**](PlanApi.md#crceFlexiPlanServiceGetPlanTemplate) | **GET** /plans/{tariffPlanId}/template | retrieves the plan template for the given flexiplan
[**crceOnlinePaymentUpdatePlan**](PlanApi.md#crceOnlinePaymentUpdatePlan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan/{tariffPlanId} | updates the payment method for the given plan
[**crceOnlinePaymentUpdatePlanSubscription**](PlanApi.md#crceOnlinePaymentUpdatePlanSubscription) | **PUT** /subscriptions/{subscriptionId}/activePlan/{tariffPlanId} | updates the payment method for the given plan
[**crceTariffActivatePlan**](PlanApi.md#crceTariffActivatePlan) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/activate | activates the given plan
[**crceTariffActivatePlanSubscription**](PlanApi.md#crceTariffActivatePlanSubscription) | **POST** /subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/activate | activates the given plan
[**crceTariffDeactivatePlan**](PlanApi.md#crceTariffDeactivatePlan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan/{tariffPlanId}/deactivate | deactivates the given plan
[**crceTariffDeactivatePlanSubscription**](PlanApi.md#crceTariffDeactivatePlanSubscription) | **PUT** /subscriptions/{subscriptionId}/activePlan/{tariffPlanId}/deactivate | deactivates the given plan
[**crceTariffGetActivePlan**](PlanApi.md#crceTariffGetActivePlan) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan | returns the activated plan for the given parameters
[**crceTariffGetActivePlanSubscription**](PlanApi.md#crceTariffGetActivePlanSubscription) | **GET** /subscriptions/{subscriptionId}/activePlan | returns the activated plan for the given parameters
[**crceTariffGetAvailablePlans**](PlanApi.md#crceTariffGetAvailablePlans) | **GET** /tariffs/{tariffId}/availablePlans | returns the available plans
[**crceTariffGetAvailablePlansCustomer**](PlanApi.md#crceTariffGetAvailablePlansCustomer) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans | returns the available plans
[**crceTariffGetAvailablePlansSubscription**](PlanApi.md#crceTariffGetAvailablePlansSubscription) | **GET** /subscriptions/{subscriptionId}/availablePlans | returns the available plans
[**rtmRetailManagerActivatePlan**](PlanApi.md#rtmRetailManagerActivatePlan) | **POST** /retailer/{msisdn}/availablePlans/{tariffPlanId}/activate | activates the given plan
[**rtmRetailManagerGetAvailablePlans**](PlanApi.md#rtmRetailManagerGetAvailablePlans) | **GET** /retailer/{msisdn}/availablePlans | returns the available plans


# **crceFlexiPlanServiceGetPlanCustomerTemplate**
> \iNew\Rest6_1\Model\GetPlanTemplateResponse crceFlexiPlanServiceGetPlanCustomerTemplate($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user)

retrieves the plan template for the given flexiplan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::FlexiPlanService::GetPlanCustomerTemplate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   Provides detailed information about flexi-plan with all selectable quota ranges and available quota combinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the planId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceFlexiPlanServiceGetPlanCustomerTemplate($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceFlexiPlanServiceGetPlanCustomerTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the planId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanTemplateResponse**](../Model/GetPlanTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceFlexiPlanServiceGetPlanSubscriptionTemplate**
> \iNew\Rest6_1\Model\GetPlanTemplateResponse crceFlexiPlanServiceGetPlanSubscriptionTemplate($subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user)

retrieves the plan template for the given flexiplan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::FlexiPlanService::GetPlanSubscriptionTemplate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   Provides detailed information about flexi-plan with all selectable quota ranges and available quota combinations  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::FlexiPlanService::GetPlanSubscriptionTemplate</b><br/>It is recommended rather to use <b>crce::FlexiPlanService::GetPlanSubscriptionTemplate</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the planId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceFlexiPlanServiceGetPlanSubscriptionTemplate($subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceFlexiPlanServiceGetPlanSubscriptionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the planId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanTemplateResponse**](../Model/GetPlanTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceFlexiPlanServiceGetPlanTariffTemplate**
> \iNew\Rest6_1\Model\GetPlanTemplateResponse crceFlexiPlanServiceGetPlanTariffTemplate($tariff_id, $tariff_plan_id, $correlation_id, $transaction_id, $user)

retrieves the plan template for the given flexiplan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::FlexiPlanService::GetPlanTariffTemplate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   Provides detailed information about flexi-plan with all selectable quota ranges and available quota combinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$tariff_id = 789; // int | null
$tariff_plan_id = 789; // int | the planId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceFlexiPlanServiceGetPlanTariffTemplate($tariff_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceFlexiPlanServiceGetPlanTariffTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_id** | **int**| null |
 **tariff_plan_id** | **int**| the planId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanTemplateResponse**](../Model/GetPlanTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceFlexiPlanServiceGetPlanTemplate**
> \iNew\Rest6_1\Model\GetPlanTemplateResponse crceFlexiPlanServiceGetPlanTemplate($tariff_plan_id, $correlation_id, $transaction_id, $user)

retrieves the plan template for the given flexiplan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::FlexiPlanService::GetPlanTemplate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   Provides detailed information about flexi-plan with all selectable quota ranges and available quota combinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$tariff_plan_id = 789; // int | the planId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceFlexiPlanServiceGetPlanTemplate($tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceFlexiPlanServiceGetPlanTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_plan_id** | **int**| the planId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanTemplateResponse**](../Model/GetPlanTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentUpdatePlan**
> \iNew\Rest6_1\Model\UpdatePlanResponse crceOnlinePaymentUpdatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $payment, $correlation_id, $pin, $transaction_id, $user)

updates the payment method for the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::UpdatePlan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Updates payment option for renewals of activated plan. Depending on onlinePaymentProfileId: <ul> <li>if oppId is not null, next plan renewals will be purchased using that payment profile <li>if oppId is null, next plan renewals will be purchased using main balance </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan ID identifying the plan that should be updated
$payment = new \iNew\Rest6_1\Model\PaymentMethod(); // \iNew\Rest6_1\Model\PaymentMethod | the payment method that should be used
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOnlinePaymentUpdatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $payment, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceOnlinePaymentUpdatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan ID identifying the plan that should be updated |
 **payment** | [**\iNew\Rest6_1\Model\PaymentMethod**](../Model/\iNew\Rest6_1\Model\PaymentMethod.md)| the payment method that should be used |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdatePlanResponse**](../Model/UpdatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentUpdatePlanSubscription**
> \iNew\Rest6_1\Model\UpdatePlanResponse crceOnlinePaymentUpdatePlanSubscription($subscription_id, $tariff_plan_id, $payment, $correlation_id, $pin, $transaction_id, $user)

updates the payment method for the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::UpdatePlanSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Updates payment option for renewals of activated plan. Depending on onlinePaymentProfileId: <ul> <li>if oppId is not null, next plan renewals will be purchased using that payment profile <li>if oppId is null, next plan renewals will be purchased using main balance </ul>  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OnlinePayment::UpdatePlanSubscription</b><br/>It is recommended rather to use <b>crce::OnlinePayment::UpdatePlanSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan ID identifying the plan that should be updated
$payment = new \iNew\Rest6_1\Model\PaymentMethod(); // \iNew\Rest6_1\Model\PaymentMethod | the payment method that should be used
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOnlinePaymentUpdatePlanSubscription($subscription_id, $tariff_plan_id, $payment, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceOnlinePaymentUpdatePlanSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan ID identifying the plan that should be updated |
 **payment** | [**\iNew\Rest6_1\Model\PaymentMethod**](../Model/\iNew\Rest6_1\Model\PaymentMethod.md)| the payment method that should be used |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdatePlanResponse**](../Model/UpdatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffActivatePlan**
> \iNew\Rest6_1\Model\ActivatePlanResponse crceTariffActivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $pin, $transaction_id, $user, $opp_id, $definition)

activates the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::ActivatePlan  **Possible response codes:**   -1 - in progress (successful HTTP Status 200)   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   activates the given plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan ID of the plan that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$opp_id = 789; // int | the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment
$definition = new \iNew\Rest6_1\Model\PlanDefinition(); // \iNew\Rest6_1\Model\PlanDefinition | the definition with which to activate, in case the selected plan has a category of DEFINABLE_TARIFF_PLAN

try {
    $result = $api_instance->crceTariffActivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $pin, $transaction_id, $user, $opp_id, $definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffActivatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan ID of the plan that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **opp_id** | **int**| the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment | [optional]
 **definition** | [**\iNew\Rest6_1\Model\PlanDefinition**](../Model/\iNew\Rest6_1\Model\PlanDefinition.md)| the definition with which to activate, in case the selected plan has a category of DEFINABLE_TARIFF_PLAN | [optional]

### Return type

[**\iNew\Rest6_1\Model\ActivatePlanResponse**](../Model/ActivatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffActivatePlanSubscription**
> \iNew\Rest6_1\Model\ActivatePlanResponse crceTariffActivatePlanSubscription($subscription_id, $tariff_plan_id, $correlation_id, $pin, $transaction_id, $user, $opp_id, $definition)

activates the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::ActivatePlanSubscription  **Possible response codes:**   -1 - in progress (successful HTTP Status 200)   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   activates the given plan  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::Tariff::ActivatePlanSubscription</b><br/>It is recommended rather to use <b>crce::Tariff::ActivatePlanSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan ID of the plan that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$opp_id = 789; // int | the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment
$definition = new \iNew\Rest6_1\Model\PlanDefinition(); // \iNew\Rest6_1\Model\PlanDefinition | the definition with which to activate, in case the selected plan has a category of DEFINABLE_TARIFF_PLAN

try {
    $result = $api_instance->crceTariffActivatePlanSubscription($subscription_id, $tariff_plan_id, $correlation_id, $pin, $transaction_id, $user, $opp_id, $definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffActivatePlanSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan ID of the plan that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **opp_id** | **int**| the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment | [optional]
 **definition** | [**\iNew\Rest6_1\Model\PlanDefinition**](../Model/\iNew\Rest6_1\Model\PlanDefinition.md)| the definition with which to activate, in case the selected plan has a category of DEFINABLE_TARIFF_PLAN | [optional]

### Return type

[**\iNew\Rest6_1\Model\ActivatePlanResponse**](../Model/ActivatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffDeactivatePlan**
> \iNew\Rest6_1\Model\DeactivatePlanResponse crceTariffDeactivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user)

deactivates the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::DeactivatePlan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deactivates the given plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan id to deactivate
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffDeactivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffDeactivatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan id to deactivate |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeactivatePlanResponse**](../Model/DeactivatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffDeactivatePlanSubscription**
> \iNew\Rest6_1\Model\DeactivatePlanResponse crceTariffDeactivatePlanSubscription($subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user)

deactivates the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::DeactivatePlanSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deactivates the given plan  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::Tariff::DeactivatePlanSubscription</b><br/>It is recommended rather to use <b>crce::Tariff::DeactivatePlanSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan id to deactivate
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffDeactivatePlanSubscription($subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffDeactivatePlanSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan id to deactivate |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeactivatePlanResponse**](../Model/DeactivatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetActivePlan**
> \iNew\Rest6_1\Model\GetPlanResponse crceTariffGetActivePlan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

returns the activated plan for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetActivePlan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the activated plan for the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffGetActivePlan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffGetActivePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanResponse**](../Model/GetPlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetActivePlanSubscription**
> \iNew\Rest6_1\Model\GetPlanResponse crceTariffGetActivePlanSubscription($subscription_id, $correlation_id, $transaction_id, $user)

returns the activated plan for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetActivePlanSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the activated plan for the given parameters  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::Tariff::GetActivePlanSubscription</b><br/>It is recommended rather to use <b>crce::Tariff::GetActivePlanSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffGetActivePlanSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffGetActivePlanSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanResponse**](../Model/GetPlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetAvailablePlans**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse1 crceTariffGetAvailablePlans($tariff_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans)

returns the available plans

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetAvailablePlans  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::Tariff::GetAvailablePlans</b><br/>It is recommended rather to use <b>crce::Tariff::GetAvailablePlans</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$tariff_id = 789; // int | the tariff ID for which the available plans should be listed
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise)
$show_flexi_plans = true; // bool | a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)

try {
    $result = $api_instance->crceTariffGetAvailablePlans($tariff_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffGetAvailablePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_id** | **int**| the tariff ID for which the available plans should be listed |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise) | [optional]
 **show_flexi_plans** | **bool**| a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse1**](../Model/GetAvailablePlansResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetAvailablePlansCustomer**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse1 crceTariffGetAvailablePlansCustomer($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans)

returns the available plans

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetAvailablePlansCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise)
$show_flexi_plans = true; // bool | a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)

try {
    $result = $api_instance->crceTariffGetAvailablePlansCustomer($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffGetAvailablePlansCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise) | [optional]
 **show_flexi_plans** | **bool**| a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse1**](../Model/GetAvailablePlansResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetAvailablePlansSubscription**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse1 crceTariffGetAvailablePlansSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans)

returns the available plans

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetAvailablePlansSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::Tariff::GetAvailablePlansSubscription</b><br/>It is recommended rather to use <b>crce::Tariff::GetAvailablePlansSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\PlanApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise)
$show_flexi_plans = true; // bool | a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)

try {
    $result = $api_instance->crceTariffGetAvailablePlansSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->crceTariffGetAvailablePlansSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise) | [optional]
 **show_flexi_plans** | **bool**| a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse1**](../Model/GetAvailablePlansResponse1.md)

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

$api_instance = new iNew\Rest6_1\Api\PlanApi();
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
    echo 'Exception when calling PlanApi->rtmRetailManagerActivatePlan: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\PlanApi();
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
    echo 'Exception when calling PlanApi->rtmRetailManagerGetAvailablePlans: ', $e->getMessage(), PHP_EOL;
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

