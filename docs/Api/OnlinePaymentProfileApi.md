# iNew\Rest6_1\OnlinePaymentProfileApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceOnlinePaymentGetRecurringCharges**](OnlinePaymentProfileApi.md#crceOnlinePaymentGetRecurringCharges) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId}/recurringCharges | gets recurring charges for the given OnlinePaymentProfile
[**ucpOnlinePaymentProfileCreate**](OnlinePaymentProfileApi.md#ucpOnlinePaymentProfileCreate) | **POST** /customers/{customerAccountId}/onlinePaymentProfiles | creates an OnlinePaymentProfile
[**ucpOnlinePaymentProfileDelete**](OnlinePaymentProfileApi.md#ucpOnlinePaymentProfileDelete) | **DELETE** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | deletes an OnlinePaymentProfile
[**ucpOnlinePaymentProfileGet**](OnlinePaymentProfileApi.md#ucpOnlinePaymentProfileGet) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | gets an OnlinePaymentProfile
[**ucpOnlinePaymentProfileGetOneClick**](OnlinePaymentProfileApi.md#ucpOnlinePaymentProfileGetOneClick) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/oneClick | gets the one click OnlinePaymentProfile
[**ucpOnlinePaymentProfileSearch**](OnlinePaymentProfileApi.md#ucpOnlinePaymentProfileSearch) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles | gets all OnlinePaymentProfiles for the given search parameters
[**ucpOnlinePaymentProfileUpdate**](OnlinePaymentProfileApi.md#ucpOnlinePaymentProfileUpdate) | **PUT** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | updates an OnlinePaymentProfile


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

$api_instance = new iNew\Rest6_1\Api\OnlinePaymentProfileApi();
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
    echo 'Exception when calling OnlinePaymentProfileApi->crceOnlinePaymentGetRecurringCharges: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OnlinePaymentProfileApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$profile = new \iNew\Rest6_1\Model\OnlinePaymentProfileCreate(); // \iNew\Rest6_1\Model\OnlinePaymentProfileCreate | the profile
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileCreate($customer_account_id, $profile, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePaymentProfileApi->ucpOnlinePaymentProfileCreate: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OnlinePaymentProfileApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileDelete($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePaymentProfileApi->ucpOnlinePaymentProfileDelete: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OnlinePaymentProfileApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileGet($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePaymentProfileApi->ucpOnlinePaymentProfileGet: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OnlinePaymentProfileApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileGetOneClick($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePaymentProfileApi->ucpOnlinePaymentProfileGetOneClick: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OnlinePaymentProfileApi();
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
    echo 'Exception when calling OnlinePaymentProfileApi->ucpOnlinePaymentProfileSearch: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OnlinePaymentProfileApi();
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
    echo 'Exception when calling OnlinePaymentProfileApi->ucpOnlinePaymentProfileUpdate: ', $e->getMessage(), PHP_EOL;
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

