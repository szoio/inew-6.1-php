# iNew\Rest6_1\OfflineChargingApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceOfflineChargingChargeAdminEvent**](OfflineChargingApi.md#crceOfflineChargingChargeAdminEvent) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/adminEvent | Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands
[**crceOfflineChargingChargeAdminEventSubscription**](OfflineChargingApi.md#crceOfflineChargingChargeAdminEventSubscription) | **POST** /subscriptions/{subscriptionId}/charge/offline/adminEvent | Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands
[**crceOfflineChargingChargeData**](OfflineChargingApi.md#crceOfflineChargingChargeData) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/data | Method designed for charging the data sessions
[**crceOfflineChargingChargeDataSubscription**](OfflineChargingApi.md#crceOfflineChargingChargeDataSubscription) | **POST** /subscriptions/{subscriptionId}/charge/offline/data | Method designed for charging the data sessions
[**crceOfflineChargingChargeEvent**](OfflineChargingApi.md#crceOfflineChargingChargeEvent) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/event | Method designed for charging the SMS services
[**crceOfflineChargingChargeEventSubscription**](OfflineChargingApi.md#crceOfflineChargingChargeEventSubscription) | **POST** /subscriptions/{subscriptionId}/charge/offline/event | Method designed for charging the SMS services
[**crceOfflineChargingChargeSession**](OfflineChargingApi.md#crceOfflineChargingChargeSession) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/session | Method designed for charging the MOC, MTC and MFC sessions
[**crceOfflineChargingChargeSessionSubscription**](OfflineChargingApi.md#crceOfflineChargingChargeSessionSubscription) | **POST** /subscriptions/{subscriptionId}/charge/offline/session | Method designed for charging the MOC, MTC and MFC sessions
[**crceOfflineChargingOfflineCharge**](OfflineChargingApi.md#crceOfflineChargingOfflineCharge) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline | performs offline charging
[**crceOfflineChargingOfflineChargeSubscription**](OfflineChargingApi.md#crceOfflineChargingOfflineChargeSubscription) | **POST** /subscriptions/{subscriptionId}/charge/offline | performs offline charging
[**crceOfflineRatingGetDataRating**](OfflineChargingApi.md#crceOfflineRatingGetDataRating) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/data | gets the rating information for data sessions
[**crceOfflineRatingGetDataRatingSubscription**](OfflineChargingApi.md#crceOfflineRatingGetDataRatingSubscription) | **GET** /subscriptions/{subscriptionId}/charge/offline/data | gets the rating information for data sessions
[**crceOfflineRatingGetEventRating**](OfflineChargingApi.md#crceOfflineRatingGetEventRating) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/event | gets the rating information for events (SMS/MMS)
[**crceOfflineRatingGetEventRatingSubscription**](OfflineChargingApi.md#crceOfflineRatingGetEventRatingSubscription) | **GET** /subscriptions/{subscriptionId}/charge/offline/event | gets the rating information for events (SMS/MMS)
[**crceOfflineRatingGetRatings**](OfflineChargingApi.md#crceOfflineRatingGetRatings) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline | gets the rating information for all types of traffic and events
[**crceOfflineRatingGetRatingsSubscription**](OfflineChargingApi.md#crceOfflineRatingGetRatingsSubscription) | **GET** /subscriptions/{subscriptionId}/charge/offline | gets the rating information for all types of traffic and events
[**crceOfflineRatingGetSessionRating**](OfflineChargingApi.md#crceOfflineRatingGetSessionRating) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/session | gets the rating information for voice sessions (MOC/MTC/MFC)
[**crceOfflineRatingGetSessionRatingSubscription**](OfflineChargingApi.md#crceOfflineRatingGetSessionRatingSubscription) | **GET** /subscriptions/{subscriptionId}/charge/offline/session | gets the rating information for voice sessions (MOC/MTC/MFC)


# **crceOfflineChargingChargeAdminEvent**
> \iNew\Rest6_1\Model\AdminEventChargeResponse crceOfflineChargingChargeAdminEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeAdminEvent  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\AdminEventChargingParameters(); // \iNew\Rest6_1\Model\AdminEventChargingParameters | Admin Event Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeAdminEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeAdminEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\AdminEventChargingParameters**](../Model/\iNew\Rest6_1\Model\AdminEventChargingParameters.md)| Admin Event Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AdminEventChargeResponse**](../Model/AdminEventChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeAdminEventSubscription**
> \iNew\Rest6_1\Model\AdminEventChargeResponse crceOfflineChargingChargeAdminEventSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeAdminEventSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineCharging::ChargeAdminEventSubscription</b><br/>It is recommended rather to use <b>crce::OfflineCharging::ChargeAdminEventSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\AdminEventChargingParameters(); // \iNew\Rest6_1\Model\AdminEventChargingParameters | Admin Event Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeAdminEventSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeAdminEventSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\AdminEventChargingParameters**](../Model/\iNew\Rest6_1\Model\AdminEventChargingParameters.md)| Admin Event Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AdminEventChargeResponse**](../Model/AdminEventChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeData**
> \iNew\Rest6_1\Model\DataChargeResponse crceOfflineChargingChargeData($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the data sessions

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeData  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the data sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\DataChargingParameters(); // \iNew\Rest6_1\Model\DataChargingParameters | Data Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeData($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\DataChargingParameters**](../Model/\iNew\Rest6_1\Model\DataChargingParameters.md)| Data Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DataChargeResponse**](../Model/DataChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeDataSubscription**
> \iNew\Rest6_1\Model\DataChargeResponse crceOfflineChargingChargeDataSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the data sessions

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeDataSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the data sessions  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineCharging::ChargeDataSubscription</b><br/>It is recommended rather to use <b>crce::OfflineCharging::ChargeDataSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\DataChargingParameters(); // \iNew\Rest6_1\Model\DataChargingParameters | Data Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeDataSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeDataSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\DataChargingParameters**](../Model/\iNew\Rest6_1\Model\DataChargingParameters.md)| Data Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DataChargeResponse**](../Model/DataChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeEvent**
> \iNew\Rest6_1\Model\EventChargeResponse crceOfflineChargingChargeEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the SMS services

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeEvent  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the SMS services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\EventChargingParameters(); // \iNew\Rest6_1\Model\EventChargingParameters | Event Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\EventChargingParameters**](../Model/\iNew\Rest6_1\Model\EventChargingParameters.md)| Event Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\EventChargeResponse**](../Model/EventChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeEventSubscription**
> \iNew\Rest6_1\Model\EventChargeResponse crceOfflineChargingChargeEventSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the SMS services

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeEventSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the SMS services  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineCharging::ChargeEventSubscription</b><br/>It is recommended rather to use <b>crce::OfflineCharging::ChargeEventSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\EventChargingParameters(); // \iNew\Rest6_1\Model\EventChargingParameters | Event Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeEventSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeEventSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\EventChargingParameters**](../Model/\iNew\Rest6_1\Model\EventChargingParameters.md)| Event Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\EventChargeResponse**](../Model/EventChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeSession**
> \iNew\Rest6_1\Model\SessionChargeResponse crceOfflineChargingChargeSession($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the MOC, MTC and MFC sessions

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeSession  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the MOC, MTC and MFC sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\SessionChargingParameters(); // \iNew\Rest6_1\Model\SessionChargingParameters | Session Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeSession($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\SessionChargingParameters**](../Model/\iNew\Rest6_1\Model\SessionChargingParameters.md)| Session Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SessionChargeResponse**](../Model/SessionChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeSessionSubscription**
> \iNew\Rest6_1\Model\SessionChargeResponse crceOfflineChargingChargeSessionSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the MOC, MTC and MFC sessions

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeSessionSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the MOC, MTC and MFC sessions  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineCharging::ChargeSessionSubscription</b><br/>It is recommended rather to use <b>crce::OfflineCharging::ChargeSessionSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\SessionChargingParameters(); // \iNew\Rest6_1\Model\SessionChargingParameters | Session Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeSessionSubscription($subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingChargeSessionSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\SessionChargingParameters**](../Model/\iNew\Rest6_1\Model\SessionChargingParameters.md)| Session Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SessionChargeResponse**](../Model/SessionChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingOfflineCharge**
> \iNew\Rest6_1\Model\OfflineChargeResponse crceOfflineChargingOfflineCharge($customer_account_id, $subscription_id, $offline_charge_parameters, $correlation_id, $transaction_id, $user)

performs offline charging

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::OfflineCharge  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   performs offline charging

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$offline_charge_parameters = new \iNew\Rest6_1\Model\OfflineChargeParametersCharge(); // \iNew\Rest6_1\Model\OfflineChargeParametersCharge | offline charge parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingOfflineCharge($customer_account_id, $subscription_id, $offline_charge_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingOfflineCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **offline_charge_parameters** | [**\iNew\Rest6_1\Model\OfflineChargeParametersCharge**](../Model/\iNew\Rest6_1\Model\OfflineChargeParametersCharge.md)| offline charge parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\OfflineChargeResponse**](../Model/OfflineChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingOfflineChargeSubscription**
> \iNew\Rest6_1\Model\OfflineChargeResponse crceOfflineChargingOfflineChargeSubscription($subscription_id, $offline_charge_parameters, $correlation_id, $transaction_id, $user)

performs offline charging

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::OfflineChargeSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   performs offline charging  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineCharging::OfflineChargeSubscription</b><br/>It is recommended rather to use <b>crce::OfflineCharging::OfflineChargeSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$offline_charge_parameters = new \iNew\Rest6_1\Model\OfflineChargeParametersCharge(); // \iNew\Rest6_1\Model\OfflineChargeParametersCharge | offline charge parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingOfflineChargeSubscription($subscription_id, $offline_charge_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineChargingOfflineChargeSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **offline_charge_parameters** | [**\iNew\Rest6_1\Model\OfflineChargeParametersCharge**](../Model/\iNew\Rest6_1\Model\OfflineChargeParametersCharge.md)| offline charge parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\OfflineChargeResponse**](../Model/OfflineChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetDataRating**
> \iNew\Rest6_1\Model\GetDataRatingResponse crceOfflineRatingGetDataRating($customer_account_id, $subscription_id, $accumulated_data, $bearer_type, $duration, $location, $rating_group, $roaming, $correlation_id, $transaction_id, $user)

gets the rating information for data sessions

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetDataRating  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for data sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$accumulated_data = 789; // int | the accumulatedData
$bearer_type = "bearer_type_example"; // string | the bearerType
$duration = 789; // int | the duration
$location = "location_example"; // string | the location
$rating_group = 56; // int | the ratingGroup
$roaming = true; // bool | the roaming
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetDataRating($customer_account_id, $subscription_id, $accumulated_data, $bearer_type, $duration, $location, $rating_group, $roaming, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetDataRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **accumulated_data** | **int**| the accumulatedData |
 **bearer_type** | **string**| the bearerType |
 **duration** | **int**| the duration |
 **location** | **string**| the location |
 **rating_group** | **int**| the ratingGroup |
 **roaming** | **bool**| the roaming |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetDataRatingResponse**](../Model/GetDataRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetDataRatingSubscription**
> \iNew\Rest6_1\Model\GetDataRatingResponse crceOfflineRatingGetDataRatingSubscription($subscription_id, $accumulated_data, $bearer_type, $duration, $location, $rating_group, $roaming, $correlation_id, $transaction_id, $user)

gets the rating information for data sessions

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetDataRatingSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for data sessions  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineRating::GetDataRatingSubscription</b><br/>It is recommended rather to use <b>crce::OfflineRating::GetDataRatingSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$accumulated_data = 789; // int | the accumulatedData
$bearer_type = "bearer_type_example"; // string | the bearerType
$duration = 789; // int | the duration
$location = "location_example"; // string | the location
$rating_group = 56; // int | the ratingGroup
$roaming = true; // bool | the roaming
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetDataRatingSubscription($subscription_id, $accumulated_data, $bearer_type, $duration, $location, $rating_group, $roaming, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetDataRatingSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **accumulated_data** | **int**| the accumulatedData |
 **bearer_type** | **string**| the bearerType |
 **duration** | **int**| the duration |
 **location** | **string**| the location |
 **rating_group** | **int**| the ratingGroup |
 **roaming** | **bool**| the roaming |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetDataRatingResponse**](../Model/GetDataRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetEventRating**
> \iNew\Rest6_1\Model\GetEventRatingResponse crceOfflineRatingGetEventRating($customer_account_id, $subscription_id, $called_party, $location, $message_type, $number_of_segments, $roaming, $traffic_type, $correlation_id, $transaction_id, $user)

gets the rating information for events (SMS/MMS)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetEventRating  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for events (SMS/MMS)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$called_party = "called_party_example"; // string | the calledParty
$location = "location_example"; // string | the location
$message_type = "message_type_example"; // string | the messageType
$number_of_segments = 56; // int | the numberOfSegments
$roaming = true; // bool | the roaming
$traffic_type = "traffic_type_example"; // string | the trafficType
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetEventRating($customer_account_id, $subscription_id, $called_party, $location, $message_type, $number_of_segments, $roaming, $traffic_type, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetEventRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **called_party** | **string**| the calledParty |
 **location** | **string**| the location |
 **message_type** | **string**| the messageType |
 **number_of_segments** | **int**| the numberOfSegments |
 **roaming** | **bool**| the roaming |
 **traffic_type** | **string**| the trafficType |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetEventRatingResponse**](../Model/GetEventRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetEventRatingSubscription**
> \iNew\Rest6_1\Model\GetEventRatingResponse crceOfflineRatingGetEventRatingSubscription($subscription_id, $called_party, $location, $message_type, $number_of_segments, $roaming, $traffic_type, $correlation_id, $transaction_id, $user)

gets the rating information for events (SMS/MMS)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetEventRatingSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for events (SMS/MMS)  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineRating::GetEventRatingSubscription</b><br/>It is recommended rather to use <b>crce::OfflineRating::GetEventRatingSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$called_party = "called_party_example"; // string | the calledParty
$location = "location_example"; // string | the location
$message_type = "message_type_example"; // string | the messageType
$number_of_segments = 56; // int | the numberOfSegments
$roaming = true; // bool | the roaming
$traffic_type = "traffic_type_example"; // string | the trafficType
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetEventRatingSubscription($subscription_id, $called_party, $location, $message_type, $number_of_segments, $roaming, $traffic_type, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetEventRatingSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **called_party** | **string**| the calledParty |
 **location** | **string**| the location |
 **message_type** | **string**| the messageType |
 **number_of_segments** | **int**| the numberOfSegments |
 **roaming** | **bool**| the roaming |
 **traffic_type** | **string**| the trafficType |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetEventRatingResponse**](../Model/GetEventRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetRatings**
> \iNew\Rest6_1\Model\GetRatingResponse crceOfflineRatingGetRatings($customer_account_id, $subscription_id, $location, $roaming, $correlation_id, $transaction_id, $user)

gets the rating information for all types of traffic and events

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetRatings  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for all types of traffic and events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$location = "location_example"; // string | the location
$roaming = true; // bool | the roaming
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetRatings($customer_account_id, $subscription_id, $location, $roaming, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetRatings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **location** | **string**| the location |
 **roaming** | **bool**| the roaming |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRatingResponse**](../Model/GetRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetRatingsSubscription**
> \iNew\Rest6_1\Model\GetRatingResponse crceOfflineRatingGetRatingsSubscription($subscription_id, $location, $roaming, $correlation_id, $transaction_id, $user)

gets the rating information for all types of traffic and events

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetRatingsSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for all types of traffic and events  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineRating::GetRatingsSubscription</b><br/>It is recommended rather to use <b>crce::OfflineRating::GetRatingsSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$location = "location_example"; // string | the location
$roaming = true; // bool | the roaming
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetRatingsSubscription($subscription_id, $location, $roaming, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetRatingsSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **location** | **string**| the location |
 **roaming** | **bool**| the roaming |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRatingResponse**](../Model/GetRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetSessionRating**
> \iNew\Rest6_1\Model\GetSessionRatingResponse crceOfflineRatingGetSessionRating($customer_account_id, $subscription_id, $bearer_type, $called_party, $duration, $location, $roaming, $traffic_type, $correlation_id, $transaction_id, $user)

gets the rating information for voice sessions (MOC/MTC/MFC)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetSessionRating  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for voice sessions (MOC/MTC/MFC)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bearer_type = "bearer_type_example"; // string | the bearerType
$called_party = "called_party_example"; // string | the calledParty
$duration = 789; // int | the duration
$location = "location_example"; // string | the location
$roaming = true; // bool | the roaming
$traffic_type = "traffic_type_example"; // string | the trafficType
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetSessionRating($customer_account_id, $subscription_id, $bearer_type, $called_party, $duration, $location, $roaming, $traffic_type, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetSessionRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bearer_type** | **string**| the bearerType |
 **called_party** | **string**| the calledParty |
 **duration** | **int**| the duration |
 **location** | **string**| the location |
 **roaming** | **bool**| the roaming |
 **traffic_type** | **string**| the trafficType |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetSessionRatingResponse**](../Model/GetSessionRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetSessionRatingSubscription**
> \iNew\Rest6_1\Model\GetSessionRatingResponse crceOfflineRatingGetSessionRatingSubscription($subscription_id, $bearer_type, $called_party, $duration, $location, $roaming, $traffic_type, $correlation_id, $transaction_id, $user)

gets the rating information for voice sessions (MOC/MTC/MFC)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetSessionRatingSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for voice sessions (MOC/MTC/MFC)  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::OfflineRating::GetSessionRatingSubscription</b><br/>It is recommended rather to use <b>crce::OfflineRating::GetSessionRatingSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\OfflineChargingApi();
$subscription_id = 789; // int | the subscription id
$bearer_type = "bearer_type_example"; // string | the bearerType
$called_party = "called_party_example"; // string | the calledParty
$duration = 789; // int | the duration
$location = "location_example"; // string | the location
$roaming = true; // bool | the roaming
$traffic_type = "traffic_type_example"; // string | the trafficType
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetSessionRatingSubscription($subscription_id, $bearer_type, $called_party, $duration, $location, $roaming, $traffic_type, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineChargingApi->crceOfflineRatingGetSessionRatingSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **bearer_type** | **string**| the bearerType |
 **called_party** | **string**| the calledParty |
 **duration** | **int**| the duration |
 **location** | **string**| the location |
 **roaming** | **bool**| the roaming |
 **traffic_type** | **string**| the trafficType |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetSessionRatingResponse**](../Model/GetSessionRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

