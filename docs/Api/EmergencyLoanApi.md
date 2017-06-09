# iNew\Rest6_1\EmergencyLoanApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceEmergencyLoanGetAvailableLoans**](EmergencyLoanApi.md#crceEmergencyLoanGetAvailableLoans) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/available | Returns the loans, which can be requested by the subscriber
[**crceEmergencyLoanGetAvailableLoansSubscription**](EmergencyLoanApi.md#crceEmergencyLoanGetAvailableLoansSubscription) | **GET** /subscriptions/{subscriptionId}/loans/available | Returns the loans, which can be requested by the subscriber
[**crceEmergencyLoanGetLoanStatus**](EmergencyLoanApi.md#crceEmergencyLoanGetLoanStatus) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/status | Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount
[**crceEmergencyLoanGetLoanStatusSubscription**](EmergencyLoanApi.md#crceEmergencyLoanGetLoanStatusSubscription) | **GET** /subscriptions/{subscriptionId}/loans/status | Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount
[**crceEmergencyLoanRepayLoan**](EmergencyLoanApi.md#crceEmergencyLoanRepayLoan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/repay | Repays (partially or fully) the subscriber’s loan
[**crceEmergencyLoanRepayLoanSubscription**](EmergencyLoanApi.md#crceEmergencyLoanRepayLoanSubscription) | **PUT** /subscriptions/{subscriptionId}/loans/repay | Repays (partially or fully) the subscriber’s loan
[**crceEmergencyLoanRequestLoan**](EmergencyLoanApi.md#crceEmergencyLoanRequestLoan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/request | Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible
[**crceEmergencyLoanRequestLoanSubscription**](EmergencyLoanApi.md#crceEmergencyLoanRequestLoanSubscription) | **PUT** /subscriptions/{subscriptionId}/loans/request | Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible


# **crceEmergencyLoanGetAvailableLoans**
> \iNew\Rest6_1\Model\GetAvailableLoansResponse crceEmergencyLoanGetAvailableLoans($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Returns the loans, which can be requested by the subscriber

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::GetAvailableLoans  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the loans, which can be requested by the subscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanGetAvailableLoans($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanGetAvailableLoans: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetAvailableLoansResponse**](../Model/GetAvailableLoansResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanGetAvailableLoansSubscription**
> \iNew\Rest6_1\Model\GetAvailableLoansResponse crceEmergencyLoanGetAvailableLoansSubscription($subscription_id, $correlation_id, $transaction_id, $user)

Returns the loans, which can be requested by the subscriber

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::GetAvailableLoansSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the loans, which can be requested by the subscriber  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::EmergencyLoan::GetAvailableLoansSubscription</b><br/>It is recommended rather to use <b>crce::EmergencyLoan::GetAvailableLoansSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanGetAvailableLoansSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanGetAvailableLoansSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetAvailableLoansResponse**](../Model/GetAvailableLoansResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanGetLoanStatus**
> \iNew\Rest6_1\Model\GetLoanStatusResponse crceEmergencyLoanGetLoanStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::GetLoanStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanGetLoanStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanGetLoanStatus: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetLoanStatusResponse**](../Model/GetLoanStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanGetLoanStatusSubscription**
> \iNew\Rest6_1\Model\GetLoanStatusResponse crceEmergencyLoanGetLoanStatusSubscription($subscription_id, $correlation_id, $transaction_id, $user)

Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::GetLoanStatusSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::EmergencyLoan::GetLoanStatusSubscription</b><br/>It is recommended rather to use <b>crce::EmergencyLoan::GetLoanStatusSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanGetLoanStatusSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanGetLoanStatusSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetLoanStatusResponse**](../Model/GetLoanStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanRepayLoan**
> \iNew\Rest6_1\Model\LoanRepayResponse crceEmergencyLoanRepayLoan($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

Repays (partially or fully) the subscriber’s loan

**Access Restriction:** CRM  **Operation ID:** crce::EmergencyLoan::RepayLoan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Repays (partially or fully) the subscriber’s loan. Both those successful responses have the following response codes: partially paid 1001120004 and fully paid 1001120005

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\LoanParameters(); // \iNew\Rest6_1\Model\LoanParameters | 
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanRepayLoan($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanRepayLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\LoanParameters**](../Model/\iNew\Rest6_1\Model\LoanParameters.md)|  |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\LoanRepayResponse**](../Model/LoanRepayResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanRepayLoanSubscription**
> \iNew\Rest6_1\Model\LoanRepayResponse crceEmergencyLoanRepayLoanSubscription($subscription_id, $parameters, $correlation_id, $transaction_id, $user)

Repays (partially or fully) the subscriber’s loan

**Access Restriction:** CRM  **Operation ID:** crce::EmergencyLoan::RepayLoanSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Repays (partially or fully) the subscriber’s loan. Both those successful responses have the following response codes: partially paid 1001120004 and fully paid 1001120005  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::EmergencyLoan::RepayLoanSubscription</b><br/>It is recommended rather to use <b>crce::EmergencyLoan::RepayLoanSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\LoanParameters(); // \iNew\Rest6_1\Model\LoanParameters | 
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanRepayLoanSubscription($subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanRepayLoanSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\LoanParameters**](../Model/\iNew\Rest6_1\Model\LoanParameters.md)|  |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\LoanRepayResponse**](../Model/LoanRepayResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanRequestLoan**
> \iNew\Rest6_1\Model\LoanRequestResponse crceEmergencyLoanRequestLoan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $parameters)

Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::RequestLoan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$parameters = new \iNew\Rest6_1\Model\LoanParameters(); // \iNew\Rest6_1\Model\LoanParameters | if provided the given amount will be requested, otherwise the default amount defined in the Tariff will be requested

try {
    $result = $api_instance->crceEmergencyLoanRequestLoan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanRequestLoan: ', $e->getMessage(), PHP_EOL;
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
 **parameters** | [**\iNew\Rest6_1\Model\LoanParameters**](../Model/\iNew\Rest6_1\Model\LoanParameters.md)| if provided the given amount will be requested, otherwise the default amount defined in the Tariff will be requested | [optional]

### Return type

[**\iNew\Rest6_1\Model\LoanRequestResponse**](../Model/LoanRequestResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanRequestLoanSubscription**
> \iNew\Rest6_1\Model\LoanRequestResponse crceEmergencyLoanRequestLoanSubscription($subscription_id, $correlation_id, $transaction_id, $user, $parameters)

Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::RequestLoanSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::EmergencyLoan::RequestLoanSubscription</b><br/>It is recommended rather to use <b>crce::EmergencyLoan::RequestLoanSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\EmergencyLoanApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$parameters = new \iNew\Rest6_1\Model\LoanParameters(); // \iNew\Rest6_1\Model\LoanParameters | if provided the given amount will be requested, otherwise the default amount defined in the Tariff will be requested

try {
    $result = $api_instance->crceEmergencyLoanRequestLoanSubscription($subscription_id, $correlation_id, $transaction_id, $user, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmergencyLoanApi->crceEmergencyLoanRequestLoanSubscription: ', $e->getMessage(), PHP_EOL;
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
 **parameters** | [**\iNew\Rest6_1\Model\LoanParameters**](../Model/\iNew\Rest6_1\Model\LoanParameters.md)| if provided the given amount will be requested, otherwise the default amount defined in the Tariff will be requested | [optional]

### Return type

[**\iNew\Rest6_1\Model\LoanRequestResponse**](../Model/LoanRequestResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

