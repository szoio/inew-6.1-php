# iNew\Rest6_1\AddonOnlinePaymentsApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceBundleAdministrationActivate**](AddonOnlinePaymentsApi.md#crceBundleAdministrationActivate) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableBundles/{bundleCode}/activate | activates the given bundle
[**crceBundleAdministrationActivateSubscription**](AddonOnlinePaymentsApi.md#crceBundleAdministrationActivateSubscription) | **POST** /subscriptions/{subscriptionId}/availableBundles/{bundleCode}/activate | activates the given bundle
[**crceBundleAdministrationDeactivate**](AddonOnlinePaymentsApi.md#crceBundleAdministrationDeactivate) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles/{bundleCode}/deactivate | deactivates the given bundle
[**crceBundleAdministrationDeactivateSubscription**](AddonOnlinePaymentsApi.md#crceBundleAdministrationDeactivateSubscription) | **PUT** /subscriptions/{subscriptionId}/activeBundles/{bundleCode}/deactivate | deactivates the given bundle
[**crceBundleAdministrationGet**](AddonOnlinePaymentsApi.md#crceBundleAdministrationGet) | **GET** /bundles/code/{bundleCode} | returns the requested bundle
[**crceBundleAdministrationGetActive**](AddonOnlinePaymentsApi.md#crceBundleAdministrationGetActive) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles | returns the activated bundles for the given parameters
[**crceBundleAdministrationGetActiveSubscription**](AddonOnlinePaymentsApi.md#crceBundleAdministrationGetActiveSubscription) | **GET** /subscriptions/{subscriptionId}/activeBundles | returns the activated bundles for the given parameters
[**crceBundleAdministrationGetAvailable**](AddonOnlinePaymentsApi.md#crceBundleAdministrationGetAvailable) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableBundles | returns the available bundles
[**crceBundleAdministrationGetAvailableSubscription**](AddonOnlinePaymentsApi.md#crceBundleAdministrationGetAvailableSubscription) | **GET** /subscriptions/{subscriptionId}/availableBundles | returns the available bundles
[**crceBundleAdministrationGetAvailableTariff**](AddonOnlinePaymentsApi.md#crceBundleAdministrationGetAvailableTariff) | **GET** /tariffs/{tariffId}/availableBundles | returns the available bundles
[**crceBundleAdministrationGetByReferenceId**](AddonOnlinePaymentsApi.md#crceBundleAdministrationGetByReferenceId) | **GET** /bundles/reference/{id} | returns the requested bundle
[**crceOnlinePaymentGetRecurringCharges**](AddonOnlinePaymentsApi.md#crceOnlinePaymentGetRecurringCharges) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId}/recurringCharges | gets recurring charges for the given OnlinePaymentProfile
[**crceOnlinePaymentGetRecurringOnlinePayments**](AddonOnlinePaymentsApi.md#crceOnlinePaymentGetRecurringOnlinePayments) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/recurringOnlinePayments | gets recurring online payments for the given subscription
[**crceOnlinePaymentGetRecurringOnlinePaymentsCustomer**](AddonOnlinePaymentsApi.md#crceOnlinePaymentGetRecurringOnlinePaymentsCustomer) | **GET** /customers/{customerAccountId}/recurringOnlinePayments | gets recurring online payments for the given customer
[**crceOnlinePaymentGetRecurringOnlinepaymentsSubscription**](AddonOnlinePaymentsApi.md#crceOnlinePaymentGetRecurringOnlinepaymentsSubscription) | **GET** /subscriptions/{subscriptionId}/recurringOnlinePayments | gets recurring online payments for the given subscription
[**crceOnlinePaymentUpdateBundle**](AddonOnlinePaymentsApi.md#crceOnlinePaymentUpdateBundle) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles/{bundleCode} | updates the payment method for the given bundle
[**crceOnlinePaymentUpdateBundleSubscription**](AddonOnlinePaymentsApi.md#crceOnlinePaymentUpdateBundleSubscription) | **PUT** /subscriptions/{subscriptionId}/activeBundles/{bundleCode} | updates the payment method for the given bundle
[**crceOnlinePaymentUpdatePlan**](AddonOnlinePaymentsApi.md#crceOnlinePaymentUpdatePlan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan/{tariffPlanId} | updates the payment method for the given plan
[**crceOnlinePaymentUpdatePlanSubscription**](AddonOnlinePaymentsApi.md#crceOnlinePaymentUpdatePlanSubscription) | **PUT** /subscriptions/{subscriptionId}/activePlan/{tariffPlanId} | updates the payment method for the given plan
[**crceTariffActivatePlan**](AddonOnlinePaymentsApi.md#crceTariffActivatePlan) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/activate | activates the given plan
[**crceTariffActivatePlanSubscription**](AddonOnlinePaymentsApi.md#crceTariffActivatePlanSubscription) | **POST** /subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/activate | activates the given plan
[**crceTariffDeactivatePlan**](AddonOnlinePaymentsApi.md#crceTariffDeactivatePlan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan/{tariffPlanId}/deactivate | deactivates the given plan
[**crceTariffDeactivatePlanSubscription**](AddonOnlinePaymentsApi.md#crceTariffDeactivatePlanSubscription) | **PUT** /subscriptions/{subscriptionId}/activePlan/{tariffPlanId}/deactivate | deactivates the given plan
[**crceTariffGetActivePlan**](AddonOnlinePaymentsApi.md#crceTariffGetActivePlan) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan | returns the activated plan for the given parameters
[**crceTariffGetActivePlanSubscription**](AddonOnlinePaymentsApi.md#crceTariffGetActivePlanSubscription) | **GET** /subscriptions/{subscriptionId}/activePlan | returns the activated plan for the given parameters
[**crceTariffGetAvailablePlans**](AddonOnlinePaymentsApi.md#crceTariffGetAvailablePlans) | **GET** /tariffs/{tariffId}/availablePlans | returns the available plans
[**crceTariffGetAvailablePlansCustomer**](AddonOnlinePaymentsApi.md#crceTariffGetAvailablePlansCustomer) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans | returns the available plans
[**crceTariffGetAvailablePlansSubscription**](AddonOnlinePaymentsApi.md#crceTariffGetAvailablePlansSubscription) | **GET** /subscriptions/{subscriptionId}/availablePlans | returns the available plans
[**ucpOnlinePaymentProfileCreate**](AddonOnlinePaymentsApi.md#ucpOnlinePaymentProfileCreate) | **POST** /customers/{customerAccountId}/onlinePaymentProfiles | creates an OnlinePaymentProfile
[**ucpOnlinePaymentProfileDelete**](AddonOnlinePaymentsApi.md#ucpOnlinePaymentProfileDelete) | **DELETE** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | deletes an OnlinePaymentProfile
[**ucpOnlinePaymentProfileGet**](AddonOnlinePaymentsApi.md#ucpOnlinePaymentProfileGet) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | gets an OnlinePaymentProfile
[**ucpOnlinePaymentProfileGetOneClick**](AddonOnlinePaymentsApi.md#ucpOnlinePaymentProfileGetOneClick) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/oneClick | gets the one click OnlinePaymentProfile
[**ucpOnlinePaymentProfileSearch**](AddonOnlinePaymentsApi.md#ucpOnlinePaymentProfileSearch) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles | gets all OnlinePaymentProfiles for the given search parameters
[**ucpOnlinePaymentProfileUpdate**](AddonOnlinePaymentsApi.md#ucpOnlinePaymentProfileUpdate) | **PUT** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | updates an OnlinePaymentProfile
[**ucpPaymentMethodCreate**](AddonOnlinePaymentsApi.md#ucpPaymentMethodCreate) | **POST** /customers/{customerAccountId}/onlinePaymentMethods/creditCards | creates a credit card payment method
[**ucpPaymentMethodDelete**](AddonOnlinePaymentsApi.md#ucpPaymentMethodDelete) | **DELETE** /customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id} | deletes a credit card payment method
[**ucpPaymentMethodGet**](AddonOnlinePaymentsApi.md#ucpPaymentMethodGet) | **GET** /customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id} | gets a credit card payment method
[**ucpPaymentMethodSearch**](AddonOnlinePaymentsApi.md#ucpPaymentMethodSearch) | **GET** /customers/{customerAccountId}/onlinePaymentMethods/creditCards | searches for credit card payment methods
[**ucpPaymentMethodUpdate**](AddonOnlinePaymentsApi.md#ucpPaymentMethodUpdate) | **PUT** /customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id} | updates a credit card payment method
[**ucpSecurityServiceChangePin**](AddonOnlinePaymentsApi.md#ucpSecurityServiceChangePin) | **PUT** /customers/{customerAccountId}/security/changePin | changes the pin for the given customerAccountId. Current pin needs to be provided
[**ucpSecurityServiceDisableSecurity**](AddonOnlinePaymentsApi.md#ucpSecurityServiceDisableSecurity) | **PUT** /customers/{customerAccountId}/security/disable | disables the security info for the given customerAccountId
[**ucpSecurityServiceEnableSecurity**](AddonOnlinePaymentsApi.md#ucpSecurityServiceEnableSecurity) | **PUT** /customers/{customerAccountId}/security/enable | enables the security info for the given customerAccountId
[**ucpSecurityServiceGetSecurityStatus**](AddonOnlinePaymentsApi.md#ucpSecurityServiceGetSecurityStatus) | **GET** /customers/{customerAccountId}/security/status | gets the security status for the given customerAccountId
[**ucpSecurityServiceInitialPinSetup**](AddonOnlinePaymentsApi.md#ucpSecurityServiceInitialPinSetup) | **POST** /customers/{customerAccountId}/security/initialPinSetup | sets up the pin for the given customerAccountId for the first time
[**ucpSecurityServiceResetPin**](AddonOnlinePaymentsApi.md#ucpSecurityServiceResetPin) | **PUT** /customers/{customerAccountId}/security/resetPin | resets the pin for the given customerAccountId
[**ucpSecurityServiceVerifyPin**](AddonOnlinePaymentsApi.md#ucpSecurityServiceVerifyPin) | **GET** /customers/{customerAccountId}/security/verifyPin | verifies the pin for the given customerAccountId


# **crceBundleAdministrationActivate**
> \iNew\Rest6_1\Model\ActivateBundleResponse crceBundleAdministrationActivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $pin, $transaction_id, $user, $opp_id)

activates the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::Activate  **Possible response codes:**   -1 - in progress (successful HTTP Status 200)   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   activates the given bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$opp_id = 789; // int | the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment

try {
    $result = $api_instance->crceBundleAdministrationActivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $pin, $transaction_id, $user, $opp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundle code identifying the bundle that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **opp_id** | **int**| the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment | [optional]

### Return type

[**\iNew\Rest6_1\Model\ActivateBundleResponse**](../Model/ActivateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationActivateSubscription**
> \iNew\Rest6_1\Model\ActivateBundleResponse crceBundleAdministrationActivateSubscription($subscription_id, $bundle_code, $correlation_id, $pin, $transaction_id, $user, $opp_id)

activates the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::ActivateSubscription  **Possible response codes:**   -1 - in progress (successful HTTP Status 200)   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   activates the given bundle  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::BundleAdministration::ActivateSubscription</b><br/>It is recommended rather to use <b>crce::BundleAdministration::ActivateSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$opp_id = 789; // int | the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment

try {
    $result = $api_instance->crceBundleAdministrationActivateSubscription($subscription_id, $bundle_code, $correlation_id, $pin, $transaction_id, $user, $opp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationActivateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundle code identifying the bundle that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **opp_id** | **int**| the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment | [optional]

### Return type

[**\iNew\Rest6_1\Model\ActivateBundleResponse**](../Model/ActivateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationDeactivate**
> \iNew\Rest6_1\Model\DeactivateBundleResponse crceBundleAdministrationDeactivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $transaction_id, $user)

deactivates the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::Deactivate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deactivates the given bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundleCode identifying the bundle that should be deactivated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationDeactivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationDeactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundleCode identifying the bundle that should be deactivated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeactivateBundleResponse**](../Model/DeactivateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationDeactivateSubscription**
> \iNew\Rest6_1\Model\DeactivateBundleResponse crceBundleAdministrationDeactivateSubscription($subscription_id, $bundle_code, $correlation_id, $transaction_id, $user)

deactivates the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::DeactivateSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deactivates the given bundle  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::BundleAdministration::DeactivateSubscription</b><br/>It is recommended rather to use <b>crce::BundleAdministration::DeactivateSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundleCode identifying the bundle that should be deactivated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationDeactivateSubscription($subscription_id, $bundle_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationDeactivateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundleCode identifying the bundle that should be deactivated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeactivateBundleResponse**](../Model/DeactivateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGet**
> \iNew\Rest6_1\Model\GetBundleResponse crceBundleAdministrationGet($bundle_code, $correlation_id, $transaction_id, $user)

returns the requested bundle

**Access Restriction:** CUSTOMIZATION  **Operation ID:** crce::BundleAdministration::Get  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the requested bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be returned
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationGet($bundle_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_code** | **string**| the bundle code identifying the bundle that should be returned |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetBundleResponse**](../Model/GetBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetActive**
> \iNew\Rest6_1\Model\GetActivatedBundlesResponse crceBundleAdministrationGetActive($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $bundle_code)

returns the activated bundles for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetActive  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the activated bundles for the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$bundle_code = "bundle_code_example"; // string | the bundle code, if provided the result will be filtered to only show bundles with the provided bundle code

try {
    $result = $api_instance->crceBundleAdministrationGetActive($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $bundle_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationGetActive: ', $e->getMessage(), PHP_EOL;
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
 **bundle_code** | **string**| the bundle code, if provided the result will be filtered to only show bundles with the provided bundle code | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetActivatedBundlesResponse**](../Model/GetActivatedBundlesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetActiveSubscription**
> \iNew\Rest6_1\Model\GetActivatedBundlesResponse crceBundleAdministrationGetActiveSubscription($subscription_id, $correlation_id, $transaction_id, $user, $bundle_code)

returns the activated bundles for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetActiveSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the activated bundles for the given parameters  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::BundleAdministration::GetActiveSubscription</b><br/>It is recommended rather to use <b>crce::BundleAdministration::GetActiveSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$bundle_code = "bundle_code_example"; // string | the bundle code, if provided the result will be filtered to only show bundles with the provided bundle code

try {
    $result = $api_instance->crceBundleAdministrationGetActiveSubscription($subscription_id, $correlation_id, $transaction_id, $user, $bundle_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationGetActiveSubscription: ', $e->getMessage(), PHP_EOL;
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
 **bundle_code** | **string**| the bundle code, if provided the result will be filtered to only show bundles with the provided bundle code | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetActivatedBundlesResponse**](../Model/GetActivatedBundlesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetAvailable**
> \iNew\Rest6_1\Model\GetAvailableBundlesResponse crceBundleAdministrationGetAvailable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option)

returns the available bundles

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetAvailable  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available bundles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$group_code = "group_code_example"; // string | the group code, if provided the result of this request will be filtered to only show bundles for the provided group code
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method

try {
    $result = $api_instance->crceBundleAdministrationGetAvailable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationGetAvailable: ', $e->getMessage(), PHP_EOL;
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
 **group_code** | **string**| the group code, if provided the result of this request will be filtered to only show bundles for the provided group code | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableBundlesResponse**](../Model/GetAvailableBundlesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetAvailableSubscription**
> \iNew\Rest6_1\Model\GetAvailableBundlesResponse crceBundleAdministrationGetAvailableSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option)

returns the available bundles

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetAvailableSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available bundles  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::BundleAdministration::GetAvailableSubscription</b><br/>It is recommended rather to use <b>crce::BundleAdministration::GetAvailableSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$group_code = "group_code_example"; // string | the group code, if provided the result of this request will be filtered to only show bundles for the provided group code
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method

try {
    $result = $api_instance->crceBundleAdministrationGetAvailableSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationGetAvailableSubscription: ', $e->getMessage(), PHP_EOL;
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
 **group_code** | **string**| the group code, if provided the result of this request will be filtered to only show bundles for the provided group code | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableBundlesResponse**](../Model/GetAvailableBundlesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetAvailableTariff**
> \iNew\Rest6_1\Model\GetAvailableBundlesResponse crceBundleAdministrationGetAvailableTariff($tariff_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option)

returns the available bundles

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetAvailableTariff  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available bundles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$tariff_id = 789; // int | the tariff ID for which the available bundles should be listed
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$group_code = "group_code_example"; // string | the group code, if provided the result of this request will be filtered to only show bundles for the provided group code
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method

try {
    $result = $api_instance->crceBundleAdministrationGetAvailableTariff($tariff_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationGetAvailableTariff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_id** | **int**| the tariff ID for which the available bundles should be listed |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **group_code** | **string**| the group code, if provided the result of this request will be filtered to only show bundles for the provided group code | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableBundlesResponse**](../Model/GetAvailableBundlesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetByReferenceId**
> \iNew\Rest6_1\Model\GetBundleResponse crceBundleAdministrationGetByReferenceId($id, $correlation_id, $transaction_id, $user)

returns the requested bundle

**Access Restriction:** CUSTOMIZATION  **Operation ID:** crce::BundleAdministration::GetByReferenceId  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the requested bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$id = 789; // int | the referenceId identifying the bundle that should be returned
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationGetByReferenceId($id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceBundleAdministrationGetByReferenceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the referenceId identifying the bundle that should be returned |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetBundleResponse**](../Model/GetBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentGetRecurringCharges**
> \iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse crceOnlinePaymentGetRecurringCharges($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets recurring charges for the given OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::GetRecurringCharges  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Lists all recurring (scheduled) online payments for the given OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the online payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceOnlinePaymentGetRecurringCharges($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentGetRecurringCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| the online payment profile ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse**](../Model/GetRecurringOnlinePaymentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentGetRecurringOnlinePayments**
> \iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse crceOnlinePaymentGetRecurringOnlinePayments($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets recurring online payments for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::GetRecurringOnlinePayments  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Lists all recurring (scheduled) online payments for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceOnlinePaymentGetRecurringOnlinePayments($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentGetRecurringOnlinePayments: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse**](../Model/GetRecurringOnlinePaymentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentGetRecurringOnlinePaymentsCustomer**
> \iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse crceOnlinePaymentGetRecurringOnlinePaymentsCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets recurring online payments for the given customer

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::GetRecurringOnlinePaymentsCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Lists all recurring (scheduled) online payments for the given customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceOnlinePaymentGetRecurringOnlinePaymentsCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentGetRecurringOnlinePaymentsCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse**](../Model/GetRecurringOnlinePaymentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentGetRecurringOnlinepaymentsSubscription**
> \iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse crceOnlinePaymentGetRecurringOnlinepaymentsSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets recurring online payments for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::GetRecurringOnlinepaymentsSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Lists all recurring (scheduled) online payments for the given subscription  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OnlinePayment::GetRecurringOnlinepaymentsSubscription</b><br/>It is recommended rather to use <b>crce::OnlinePayment::GetRecurringOnlinepaymentsSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceOnlinePaymentGetRecurringOnlinepaymentsSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentGetRecurringOnlinepaymentsSubscription: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse**](../Model/GetRecurringOnlinePaymentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentUpdateBundle**
> \iNew\Rest6_1\Model\UpdateBundleResponse crceOnlinePaymentUpdateBundle($customer_account_id, $subscription_id, $bundle_code, $payment, $correlation_id, $pin, $transaction_id, $user)

updates the payment method for the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::UpdateBundle  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Updates payment option for renewals of activated bundle. Depending on onlinePaymentProfileId: <ul> <li>if oppId is not null, next bundle renewals will be purchased using that payment profile <li>if oppId is null, next bundle renewals will be purchased using main balance </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be updated
$payment = new \iNew\Rest6_1\Model\PaymentMethod(); // \iNew\Rest6_1\Model\PaymentMethod | the payment method that should be used
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOnlinePaymentUpdateBundle($customer_account_id, $subscription_id, $bundle_code, $payment, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentUpdateBundle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundle code identifying the bundle that should be updated |
 **payment** | [**\iNew\Rest6_1\Model\PaymentMethod**](../Model/\iNew\Rest6_1\Model\PaymentMethod.md)| the payment method that should be used |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateBundleResponse**](../Model/UpdateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentUpdateBundleSubscription**
> \iNew\Rest6_1\Model\UpdateBundleResponse crceOnlinePaymentUpdateBundleSubscription($subscription_id, $bundle_code, $payment, $correlation_id, $pin, $transaction_id, $user)

updates the payment method for the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::UpdateBundleSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Updates payment option for renewals of activated bundle. Depending on onlinePaymentProfileId: <ul> <li>if oppId is not null, next bundle renewals will be purchased using that payment profile <li>if oppId is null, next bundle renewals will be purchased using main balance </ul>  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OnlinePayment::UpdateBundleSubscription</b><br/>It is recommended rather to use <b>crce::OnlinePayment::UpdateBundleSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be updated
$payment = new \iNew\Rest6_1\Model\PaymentMethod(); // \iNew\Rest6_1\Model\PaymentMethod | the payment method that should be used
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOnlinePaymentUpdateBundleSubscription($subscription_id, $bundle_code, $payment, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentUpdateBundleSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundle code identifying the bundle that should be updated |
 **payment** | [**\iNew\Rest6_1\Model\PaymentMethod**](../Model/\iNew\Rest6_1\Model\PaymentMethod.md)| the payment method that should be used |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateBundleResponse**](../Model/UpdateBundleResponse.md)

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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentUpdatePlan: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceOnlinePaymentUpdatePlanSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffActivatePlan: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffActivatePlanSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffDeactivatePlan: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan id to deactivate
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffDeactivatePlanSubscription($subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffDeactivatePlanSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffGetActivePlan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffGetActivePlan: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffGetActivePlanSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffGetActivePlanSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffGetAvailablePlans: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffGetAvailablePlansCustomer: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
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
    echo 'Exception when calling AddonOnlinePaymentsApi->crceTariffGetAvailablePlansSubscription: ', $e->getMessage(), PHP_EOL;
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

# **ucpOnlinePaymentProfileCreate**
> \iNew\Rest6_1\Model\CreateOnlinePaymentProfileResponse ucpOnlinePaymentProfileCreate($customer_account_id, $profile, $correlation_id, $transaction_id, $user)

creates an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Create  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   creates an OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$profile = new \iNew\Rest6_1\Model\OnlinePaymentProfileCreate(); // \iNew\Rest6_1\Model\OnlinePaymentProfileCreate | the profile
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileCreate($customer_account_id, $profile, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpOnlinePaymentProfileCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **profile** | [**\iNew\Rest6_1\Model\OnlinePaymentProfileCreate**](../Model/\iNew\Rest6_1\Model\OnlinePaymentProfileCreate.md)| the profile |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreateOnlinePaymentProfileResponse**](../Model/CreateOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileDelete**
> \iNew\Rest6_1\Model\DeleteOnlinePaymentProfileResponse ucpOnlinePaymentProfileDelete($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user)

deletes an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Delete  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Deletes a payment profile by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileDelete($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpOnlinePaymentProfileDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| the payment profile ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeleteOnlinePaymentProfileResponse**](../Model/DeleteOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileGet**
> \iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse ucpOnlinePaymentProfileGet($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user)

gets an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Get  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches a payment profile by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileGet($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpOnlinePaymentProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| the payment profile ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse**](../Model/GetOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileGetOneClick**
> \iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse ucpOnlinePaymentProfileGetOneClick($customer_account_id, $correlation_id, $transaction_id, $user)

gets the one click OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::GetOneClick  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the one click OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileGetOneClick($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpOnlinePaymentProfileGetOneClick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse**](../Model/GetOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileSearch**
> \iNew\Rest6_1\Model\GetOnlinePaymentProfilesResponse ucpOnlinePaymentProfileSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $name, $one_click, $page, $payment_method_id)

gets all OnlinePaymentProfiles for the given search parameters

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Search  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches multiple payment profiles by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$name = "name_example"; // string | the payment profile name
$one_click = true; // bool | null
$page = 56; // int | the page requested (pagination)
$payment_method_id = 789; // int | the payment method ID

try {
    $result = $api_instance->ucpOnlinePaymentProfileSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $name, $one_click, $page, $payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpOnlinePaymentProfileSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **name** | **string**| the payment profile name | [optional]
 **one_click** | **bool**| null | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_method_id** | **int**| the payment method ID | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOnlinePaymentProfilesResponse**](../Model/GetOnlinePaymentProfilesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileUpdate**
> \iNew\Rest6_1\Model\UpdateOnlinePaymentProfileResponse ucpOnlinePaymentProfileUpdate($customer_account_id, $opp_id, $profile, $correlation_id, $transaction_id, $user)

updates an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Update  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates an OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | null
$profile = new \iNew\Rest6_1\Model\OnlinePaymentProfileUpdate(); // \iNew\Rest6_1\Model\OnlinePaymentProfileUpdate | the profile
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileUpdate($customer_account_id, $opp_id, $profile, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpOnlinePaymentProfileUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| null |
 **profile** | [**\iNew\Rest6_1\Model\OnlinePaymentProfileUpdate**](../Model/\iNew\Rest6_1\Model\OnlinePaymentProfileUpdate.md)| the profile |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateOnlinePaymentProfileResponse**](../Model/UpdateOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodCreate**
> \iNew\Rest6_1\Model\CreatePaymentMethodResponse ucpPaymentMethodCreate($customer_account_id, $payment_method_details, $correlation_id, $transaction_id, $user)

creates a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Create  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Creates a payment method by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$payment_method_details = new \iNew\Rest6_1\Model\CreditCardMethodCreate(); // \iNew\Rest6_1\Model\CreditCardMethodCreate | the payment method details
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodCreate($customer_account_id, $payment_method_details, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpPaymentMethodCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **payment_method_details** | [**\iNew\Rest6_1\Model\CreditCardMethodCreate**](../Model/\iNew\Rest6_1\Model\CreditCardMethodCreate.md)| the payment method details |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreatePaymentMethodResponse**](../Model/CreatePaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodDelete**
> \iNew\Rest6_1\Model\DeletePaymentMethodResponse ucpPaymentMethodDelete($customer_account_id, $id, $correlation_id, $transaction_id, $user)

deletes a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Delete  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Deletes a payment method by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$id = 789; // int | the payment method details ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodDelete($customer_account_id, $id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpPaymentMethodDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **id** | **int**| the payment method details ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeletePaymentMethodResponse**](../Model/DeletePaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodGet**
> \iNew\Rest6_1\Model\GetPaymentMethodResponse ucpPaymentMethodGet($customer_account_id, $id, $correlation_id, $transaction_id, $user)

gets a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Get  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches a payment method by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$id = 789; // int | the payment method details ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodGet($customer_account_id, $id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpPaymentMethodGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **id** | **int**| the payment method details ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPaymentMethodResponse**](../Model/GetPaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodSearch**
> \iNew\Rest6_1\Model\GetPaymentMethodsResponse ucpPaymentMethodSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

searches for credit card payment methods

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Search  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches multiple payment methods by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->ucpPaymentMethodSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpPaymentMethodSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPaymentMethodsResponse**](../Model/GetPaymentMethodsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodUpdate**
> \iNew\Rest6_1\Model\UpdatePaymentMethodResponse ucpPaymentMethodUpdate($customer_account_id, $id, $payment_method_details, $correlation_id, $transaction_id, $user)

updates a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Update  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates a credit card payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$id = 789; // int | null
$payment_method_details = new \iNew\Rest6_1\Model\CreditCardMethodUpdate(); // \iNew\Rest6_1\Model\CreditCardMethodUpdate | the payment method details
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodUpdate($customer_account_id, $id, $payment_method_details, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpPaymentMethodUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **id** | **int**| null |
 **payment_method_details** | [**\iNew\Rest6_1\Model\CreditCardMethodUpdate**](../Model/\iNew\Rest6_1\Model\CreditCardMethodUpdate.md)| the payment method details |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdatePaymentMethodResponse**](../Model/UpdatePaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceChangePin**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceChangePin($new_pin, $customer_account_id, $correlation_id, $pin, $transaction_id, $user)

changes the pin for the given customerAccountId. Current pin needs to be provided

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::ChangePin  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Saves (creates or updates) the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$new_pin = "new_pin_example"; // string | the newPin
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceChangePin($new_pin, $customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpSecurityServiceChangePin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_pin** | **string**| the newPin |
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceDisableSecurity**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceDisableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

disables the security info for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::DisableSecurity  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Saves (creates or updates) the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceDisableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpSecurityServiceDisableSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceEnableSecurity**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceEnableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

enables the security info for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::EnableSecurity  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Pin needs to be provided. Note: Creates the security info if it doesn't already exist, using the provided pin/token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceEnableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpSecurityServiceEnableSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceGetSecurityStatus**
> \iNew\Rest6_1\Model\GetSecurityStatusResponse ucpSecurityServiceGetSecurityStatus($customer_account_id, $correlation_id, $transaction_id, $user)

gets the security status for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::GetSecurityStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000019 - Unknown customer (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Queries the security status (security enabled / disabled) by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceGetSecurityStatus($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpSecurityServiceGetSecurityStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetSecurityStatusResponse**](../Model/GetSecurityStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceInitialPinSetup**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceInitialPinSetup($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

sets up the pin for the given customerAccountId for the first time

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::InitialPinSetup  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001110002 - Role already present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Saves (creates or updates) the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceInitialPinSetup($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpSecurityServiceInitialPinSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceResetPin**
> \iNew\Rest6_1\Model\ResetSecurityInfoResponse ucpSecurityServiceResetPin($customer_account_id, $correlation_id, $new_pin, $transaction_id, $user)

resets the pin for the given customerAccountId

**Access Restriction:** CRM  **Operation ID:** ucp::SecurityService::ResetPin  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001110003 - No email address configured (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Resets the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$new_pin = "new_pin_example"; // string | the new pin to be set, if not provided the system will generate a new one and notify the customer
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceResetPin($customer_account_id, $correlation_id, $new_pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpSecurityServiceResetPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **new_pin** | **string**| the new pin to be set, if not provided the system will generate a new one and notify the customer | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ResetSecurityInfoResponse**](../Model/ResetSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceVerifyPin**
> \iNew\Rest6_1\Model\VerifySecurityInfoResponse ucpSecurityServiceVerifyPin($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

verifies the pin for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::VerifyPin  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Verifies the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonOnlinePaymentsApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceVerifyPin($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonOnlinePaymentsApi->ucpSecurityServiceVerifyPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\VerifySecurityInfoResponse**](../Model/VerifySecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

