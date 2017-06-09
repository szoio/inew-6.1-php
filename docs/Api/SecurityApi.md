# iNew\Rest6_1\SecurityApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ucpSecurityServiceChangePin**](SecurityApi.md#ucpSecurityServiceChangePin) | **PUT** /customers/{customerAccountId}/security/changePin | changes the pin for the given customerAccountId. Current pin needs to be provided
[**ucpSecurityServiceDisableSecurity**](SecurityApi.md#ucpSecurityServiceDisableSecurity) | **PUT** /customers/{customerAccountId}/security/disable | disables the security info for the given customerAccountId
[**ucpSecurityServiceEnableSecurity**](SecurityApi.md#ucpSecurityServiceEnableSecurity) | **PUT** /customers/{customerAccountId}/security/enable | enables the security info for the given customerAccountId
[**ucpSecurityServiceGetSecurityStatus**](SecurityApi.md#ucpSecurityServiceGetSecurityStatus) | **GET** /customers/{customerAccountId}/security/status | gets the security status for the given customerAccountId
[**ucpSecurityServiceInitialPinSetup**](SecurityApi.md#ucpSecurityServiceInitialPinSetup) | **POST** /customers/{customerAccountId}/security/initialPinSetup | sets up the pin for the given customerAccountId for the first time
[**ucpSecurityServiceResetPin**](SecurityApi.md#ucpSecurityServiceResetPin) | **PUT** /customers/{customerAccountId}/security/resetPin | resets the pin for the given customerAccountId
[**ucpSecurityServiceVerifyPin**](SecurityApi.md#ucpSecurityServiceVerifyPin) | **GET** /customers/{customerAccountId}/security/verifyPin | verifies the pin for the given customerAccountId


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

$api_instance = new iNew\Rest6_1\Api\SecurityApi();
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
    echo 'Exception when calling SecurityApi->ucpSecurityServiceChangePin: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\SecurityApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceDisableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->ucpSecurityServiceDisableSecurity: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\SecurityApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceEnableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->ucpSecurityServiceEnableSecurity: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\SecurityApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceGetSecurityStatus($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->ucpSecurityServiceGetSecurityStatus: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\SecurityApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceInitialPinSetup($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->ucpSecurityServiceInitialPinSetup: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\SecurityApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$new_pin = "new_pin_example"; // string | the new pin to be set, if not provided the system will generate a new one and notify the customer
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceResetPin($customer_account_id, $correlation_id, $new_pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->ucpSecurityServiceResetPin: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\SecurityApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceVerifyPin($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->ucpSecurityServiceVerifyPin: ', $e->getMessage(), PHP_EOL;
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

