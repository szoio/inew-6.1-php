# iNew\Rest6_1\BundleApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceBundleAdministrationActivate**](BundleApi.md#crceBundleAdministrationActivate) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableBundles/{bundleCode}/activate | activates the given bundle
[**crceBundleAdministrationActivateSubscription**](BundleApi.md#crceBundleAdministrationActivateSubscription) | **POST** /subscriptions/{subscriptionId}/availableBundles/{bundleCode}/activate | activates the given bundle
[**crceBundleAdministrationDeactivate**](BundleApi.md#crceBundleAdministrationDeactivate) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles/{bundleCode}/deactivate | deactivates the given bundle
[**crceBundleAdministrationDeactivateSubscription**](BundleApi.md#crceBundleAdministrationDeactivateSubscription) | **PUT** /subscriptions/{subscriptionId}/activeBundles/{bundleCode}/deactivate | deactivates the given bundle
[**crceBundleAdministrationGet**](BundleApi.md#crceBundleAdministrationGet) | **GET** /bundles/code/{bundleCode} | returns the requested bundle
[**crceBundleAdministrationGetActive**](BundleApi.md#crceBundleAdministrationGetActive) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles | returns the activated bundles for the given parameters
[**crceBundleAdministrationGetActiveSubscription**](BundleApi.md#crceBundleAdministrationGetActiveSubscription) | **GET** /subscriptions/{subscriptionId}/activeBundles | returns the activated bundles for the given parameters
[**crceBundleAdministrationGetAvailable**](BundleApi.md#crceBundleAdministrationGetAvailable) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableBundles | returns the available bundles
[**crceBundleAdministrationGetAvailableSubscription**](BundleApi.md#crceBundleAdministrationGetAvailableSubscription) | **GET** /subscriptions/{subscriptionId}/availableBundles | returns the available bundles
[**crceBundleAdministrationGetAvailableTariff**](BundleApi.md#crceBundleAdministrationGetAvailableTariff) | **GET** /tariffs/{tariffId}/availableBundles | returns the available bundles
[**crceBundleAdministrationGetBonus**](BundleApi.md#crceBundleAdministrationGetBonus) | **GET** /bundles/bonus | returns the available bonus bundles
[**crceBundleAdministrationGetByReferenceId**](BundleApi.md#crceBundleAdministrationGetByReferenceId) | **GET** /bundles/reference/{id} | returns the requested bundle
[**crceBundleAdministrationGetGroups**](BundleApi.md#crceBundleAdministrationGetGroups) | **GET** /tariffs/{tariffId}/bundleGroups | returns the requested bundle groups or subgroups if a groupCode was provided
[**crceOnlinePaymentUpdateBundle**](BundleApi.md#crceOnlinePaymentUpdateBundle) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles/{bundleCode} | updates the payment method for the given bundle
[**crceOnlinePaymentUpdateBundleSubscription**](BundleApi.md#crceOnlinePaymentUpdateBundleSubscription) | **PUT** /subscriptions/{subscriptionId}/activeBundles/{bundleCode} | updates the payment method for the given bundle
[**rtmRetailManagerActivateBundle**](BundleApi.md#rtmRetailManagerActivateBundle) | **POST** /retailer/{msisdn}/availableBundles/{bundleCode}/activate | activates the given bundle
[**rtmRetailManagerGetAvailableBundles**](BundleApi.md#rtmRetailManagerGetAvailableBundles) | **GET** /retailer/{msisdn}/availableBundles | returns the available bundles


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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceBundleAdministrationActivate: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceBundleAdministrationActivateSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceBundleAdministrationDeactivate: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundleCode identifying the bundle that should be deactivated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationDeactivateSubscription($subscription_id, $bundle_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleApi->crceBundleAdministrationDeactivateSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be returned
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationGet($bundle_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleApi->crceBundleAdministrationGet: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetActive: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$bundle_code = "bundle_code_example"; // string | the bundle code, if provided the result will be filtered to only show bundles with the provided bundle code

try {
    $result = $api_instance->crceBundleAdministrationGetActiveSubscription($subscription_id, $correlation_id, $transaction_id, $user, $bundle_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetActiveSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetAvailable: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetAvailableSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetAvailableTariff: ', $e->getMessage(), PHP_EOL;
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

# **crceBundleAdministrationGetBonus**
> \iNew\Rest6_1\Model\GetAvailableBundlesResponse crceBundleAdministrationGetBonus($correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the available bonus bundles

**Access Restriction:** CUSTOMIZATION  **Operation ID:** crce::BundleAdministration::GetBonus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available bonus bundles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\BundleApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceBundleAdministrationGetBonus($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetBonus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
$id = 789; // int | the referenceId identifying the bundle that should be returned
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationGetByReferenceId($id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetByReferenceId: ', $e->getMessage(), PHP_EOL;
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

# **crceBundleAdministrationGetGroups**
> \iNew\Rest6_1\Model\GetBundleGroupsResponse crceBundleAdministrationGetGroups($tariff_id, $correlation_id, $transaction_id, $user, $group_code)

returns the requested bundle groups or subgroups if a groupCode was provided

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetGroups  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the requested bundle groups or subgroups if a groupCode was provided

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\BundleApi();
$tariff_id = 789; // int | the tariffId, for which bundle groups should be returned
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$group_code = "group_code_example"; // string | the group code, of which subgroups should be returned

try {
    $result = $api_instance->crceBundleAdministrationGetGroups($tariff_id, $correlation_id, $transaction_id, $user, $group_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleApi->crceBundleAdministrationGetGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_id** | **int**| the tariffId, for which bundle groups should be returned |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **group_code** | **string**| the group code, of which subgroups should be returned | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetBundleGroupsResponse**](../Model/GetBundleGroupsResponse.md)

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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceOnlinePaymentUpdateBundle: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->crceOnlinePaymentUpdateBundleSubscription: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->rtmRetailManagerActivateBundle: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\BundleApi();
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
    echo 'Exception when calling BundleApi->rtmRetailManagerGetAvailableBundles: ', $e->getMessage(), PHP_EOL;
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

