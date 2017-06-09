# iNew\Rest6_1\AccessControlManagementApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessAccessManagementServiceAddOperations**](AccessControlManagementApi.md#accessAccessManagementServiceAddOperations) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/operations/allow | allows operations for the access key
[**accessAccessManagementServiceAddVersions**](AccessControlManagementApi.md#accessAccessManagementServiceAddVersions) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/versions/allow | adds allowed api versions for the access key
[**accessAccessManagementServiceCloneAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceCloneAccessKey) | **POST** /configuration/openRestApi/accessControl/clone | clones the access key
[**accessAccessManagementServiceCreateAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceCreateAccessKey) | **POST** /configuration/openRestApi/accessControl/keys | creates the access key
[**accessAccessManagementServiceCreateDocumentationAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceCreateDocumentationAccessKey) | **POST** /configuration/openRestApi/accessControl/documentation/keys | creates an access key that can only be used to view documentation
[**accessAccessManagementServiceCreateRetailerAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceCreateRetailerAccessKey) | **POST** /configuration/openRestApi/accessControl/retailer/{retailerId}/keys | creates the retailer access key
[**accessAccessManagementServiceDeleteAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceDeleteAccessKey) | **DELETE** /configuration/openRestApi/accessControl/keys/{key} | deletes the access key
[**accessAccessManagementServiceGetAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceGetAccessKey) | **GET** /configuration/openRestApi/accessControl/keys/{key} | returns the access key definition for the given key string
[**accessAccessManagementServiceGetAccessKeys**](AccessControlManagementApi.md#accessAccessManagementServiceGetAccessKeys) | **GET** /configuration/openRestApi/accessControl/keys | returns the list of all available access keys according to the search filter
[**accessAccessManagementServiceRefreshAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceRefreshAccessKey) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/refresh | refreshes the access key (new key value is generated, replacing the old one)
[**accessAccessManagementServiceRefreshCache**](AccessControlManagementApi.md#accessAccessManagementServiceRefreshCache) | **PUT** /configuration/openRestApi/accessControl/refreshCache | refreshes in-memory access key cache
[**accessAccessManagementServiceRemoveOperations**](AccessControlManagementApi.md#accessAccessManagementServiceRemoveOperations) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/operations/disallow | disallows operations for the access key
[**accessAccessManagementServiceRemoveTags**](AccessControlManagementApi.md#accessAccessManagementServiceRemoveTags) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/tags/disallow | removes allowed tags for the access key
[**accessAccessManagementServiceRemoveVersions**](AccessControlManagementApi.md#accessAccessManagementServiceRemoveVersions) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/versions/disallow | removes allowed api versions for the access key
[**accessAccessManagementServiceSetRole**](AccessControlManagementApi.md#accessAccessManagementServiceSetRole) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/role | sets the access role for the access key
[**accessAccessManagementServiceStoreAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceStoreAccessKey) | **POST** /configuration/openRestApi/accessControl/store | stores the access key
[**accessAccessManagementServiceUpdateAccessKey**](AccessControlManagementApi.md#accessAccessManagementServiceUpdateAccessKey) | **PUT** /configuration/openRestApi/accessControl/keys/{key} | updates the access key


# **accessAccessManagementServiceAddOperations**
> \iNew\Rest6_1\Model\UpdateAccessKeyResponse accessAccessManagementServiceAddOperations($key, $correlation_id, $transaction_id, $user, $allowed)

allows operations for the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::AddOperations  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   allows operations for the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$allowed = "allowed_example"; // string | single or comma-separated string of operation IDs to be added to the access key

try {
    $result = $api_instance->accessAccessManagementServiceAddOperations($key, $correlation_id, $transaction_id, $user, $allowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceAddOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **allowed** | **string**| single or comma-separated string of operation IDs to be added to the access key | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateAccessKeyResponse**](../Model/UpdateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceAddVersions**
> \iNew\Rest6_1\Model\UpdateAccessKeyResponse accessAccessManagementServiceAddVersions($key, $correlation_id, $transaction_id, $user, $allowed)

adds allowed api versions for the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::AddVersions  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   adds allowed api versions for the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$allowed = "allowed_example"; // string | single or comma-separated string of api versions to be added to the access key

try {
    $result = $api_instance->accessAccessManagementServiceAddVersions($key, $correlation_id, $transaction_id, $user, $allowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceAddVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **allowed** | **string**| single or comma-separated string of api versions to be added to the access key | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateAccessKeyResponse**](../Model/UpdateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceCloneAccessKey**
> \iNew\Rest6_1\Model\CloneAccessKeyResponse accessAccessManagementServiceCloneAccessKey($assigned_to, $target_provider_id, $template_key, $correlation_id, $transaction_id, $user)

clones the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::CloneAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   clones the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$assigned_to = "assigned_to_example"; // string | asignee for the new (cloned) access key
$target_provider_id = 789; // int | providerId for the new (cloned) access key
$template_key = "template_key_example"; // string | existing access key to clone
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceCloneAccessKey($assigned_to, $target_provider_id, $template_key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceCloneAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assigned_to** | **string**| asignee for the new (cloned) access key |
 **target_provider_id** | **int**| providerId for the new (cloned) access key |
 **template_key** | **string**| existing access key to clone |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CloneAccessKeyResponse**](../Model/CloneAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceCreateAccessKey**
> \iNew\Rest6_1\Model\CreateAccessKeyResponse accessAccessManagementServiceCreateAccessKey($assigned_to, $channel, $provider_id, $role, $correlation_id, $transaction_id, $user)

creates the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::CreateAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   creates the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$assigned_to = "assigned_to_example"; // string | assignee for the new access key
$channel = "channel_example"; // string | channel for the new access key
$provider_id = 789; // int | provider id for the new access key
$role = "role_example"; // string | the role that will be compared against the access restriction of any operation being executed
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceCreateAccessKey($assigned_to, $channel, $provider_id, $role, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceCreateAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assigned_to** | **string**| assignee for the new access key |
 **channel** | **string**| channel for the new access key |
 **provider_id** | **int**| provider id for the new access key |
 **role** | **string**| the role that will be compared against the access restriction of any operation being executed |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreateAccessKeyResponse**](../Model/CreateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceCreateDocumentationAccessKey**
> \iNew\Rest6_1\Model\CreateAccessKeyResponse accessAccessManagementServiceCreateDocumentationAccessKey($access_role, $assigned_to, $correlation_id, $transaction_id, $user)

creates an access key that can only be used to view documentation

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::CreateDocumentationAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   creates an access key that can only be used to view documentation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$access_role = "access_role_example"; // string | the role that will be compared against the access restriction of any operation documentation being viewed
$assigned_to = "assigned_to_example"; // string | a String a descriptive identifier so operations can keep track of who actually is using this key e.g. \"Lemon42 CRM\"
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceCreateDocumentationAccessKey($access_role, $assigned_to, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceCreateDocumentationAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_role** | **string**| the role that will be compared against the access restriction of any operation documentation being viewed |
 **assigned_to** | **string**| a String a descriptive identifier so operations can keep track of who actually is using this key e.g. \&quot;Lemon42 CRM\&quot; |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreateAccessKeyResponse**](../Model/CreateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceCreateRetailerAccessKey**
> \iNew\Rest6_1\Model\CreateAccessKeyResponse accessAccessManagementServiceCreateRetailerAccessKey($retailer_id, $assigned_to, $correlation_id, $transaction_id, $user, $provider_ids)

creates the retailer access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::CreateRetailerAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   creates the retailer access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$retailer_id = "retailer_id_example"; // string | retailer id for the new access key
$assigned_to = "assigned_to_example"; // string | assignee for the new access key
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$provider_ids = "provider_ids_example"; // string | provider id list (csv) for the retailer access key

try {
    $result = $api_instance->accessAccessManagementServiceCreateRetailerAccessKey($retailer_id, $assigned_to, $correlation_id, $transaction_id, $user, $provider_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceCreateRetailerAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retailer_id** | **string**| retailer id for the new access key |
 **assigned_to** | **string**| assignee for the new access key |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **provider_ids** | **string**| provider id list (csv) for the retailer access key | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreateAccessKeyResponse**](../Model/CreateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceDeleteAccessKey**
> \iNew\Rest6_1\Model\DeleteAccessKeyResponse accessAccessManagementServiceDeleteAccessKey($key, $correlation_id, $transaction_id, $user)

deletes the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::DeleteAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceDeleteAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceDeleteAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeleteAccessKeyResponse**](../Model/DeleteAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceGetAccessKey**
> \iNew\Rest6_1\Model\GetAccessKeyResponse accessAccessManagementServiceGetAccessKey($key, $correlation_id, $transaction_id, $user)

returns the access key definition for the given key string

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::GetAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceGetAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceGetAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccessKeyResponse**](../Model/GetAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceGetAccessKeys**
> \iNew\Rest6_1\Model\GetAccessKeysResponse accessAccessManagementServiceGetAccessKeys($correlation_id, $transaction_id, $user, $assigned_to, $entities_per_page, $page)

returns the list of all available access keys according to the search filter

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::GetAccessKeys  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$assigned_to = "assigned_to_example"; // string | the assignedTo
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->accessAccessManagementServiceGetAccessKeys($correlation_id, $transaction_id, $user, $assigned_to, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceGetAccessKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **assigned_to** | **string**| the assignedTo | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccessKeysResponse**](../Model/GetAccessKeysResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceRefreshAccessKey**
> \iNew\Rest6_1\Model\RefreshAccessKeyResponse accessAccessManagementServiceRefreshAccessKey($key, $correlation_id, $transaction_id, $user)

refreshes the access key (new key value is generated, replacing the old one)

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::RefreshAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   the <b>key</b> provided will be refreshed, meaning all the meta-information will stay the same but the actual key will be replaced with a new key<br>the old key will not work anymore

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceRefreshAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceRefreshAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RefreshAccessKeyResponse**](../Model/RefreshAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceRefreshCache**
> \iNew\Rest6_1\Model\RefreshCacheResponse accessAccessManagementServiceRefreshCache($correlation_id, $transaction_id, $user)

refreshes in-memory access key cache

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::RefreshCache  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   refreshes in-memory access key cache, should be invoked in case access key files are manipulated directly in the storage without the use of the REST API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceRefreshCache($correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceRefreshCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RefreshCacheResponse**](../Model/RefreshCacheResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceRemoveOperations**
> \iNew\Rest6_1\Model\UpdateAccessKeyResponse accessAccessManagementServiceRemoveOperations($key, $correlation_id, $transaction_id, $user, $disallowed)

disallows operations for the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::RemoveOperations  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   disallows operations for the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$disallowed = "disallowed_example"; // string | single or comma-separated string of operation IDs to be disallowed for the access key

try {
    $result = $api_instance->accessAccessManagementServiceRemoveOperations($key, $correlation_id, $transaction_id, $user, $disallowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceRemoveOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **disallowed** | **string**| single or comma-separated string of operation IDs to be disallowed for the access key | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateAccessKeyResponse**](../Model/UpdateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceRemoveTags**
> \iNew\Rest6_1\Model\UpdateAccessKeyResponse accessAccessManagementServiceRemoveTags($key, $correlation_id, $transaction_id, $user, $disallowed)

removes allowed tags for the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::RemoveTags  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   removes allowed tags for the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$disallowed = "disallowed_example"; // string | single or comma-separated string of tags to be disallowed for the access key

try {
    $result = $api_instance->accessAccessManagementServiceRemoveTags($key, $correlation_id, $transaction_id, $user, $disallowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceRemoveTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **disallowed** | **string**| single or comma-separated string of tags to be disallowed for the access key | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateAccessKeyResponse**](../Model/UpdateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceRemoveVersions**
> \iNew\Rest6_1\Model\UpdateAccessKeyResponse accessAccessManagementServiceRemoveVersions($key, $correlation_id, $transaction_id, $user, $disallowed)

removes allowed api versions for the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::RemoveVersions  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   removes allowed api versions for the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$disallowed = "disallowed_example"; // string | single or comma-separated string of versions to be disallowed for the access key

try {
    $result = $api_instance->accessAccessManagementServiceRemoveVersions($key, $correlation_id, $transaction_id, $user, $disallowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceRemoveVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **disallowed** | **string**| single or comma-separated string of versions to be disallowed for the access key | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateAccessKeyResponse**](../Model/UpdateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceSetRole**
> \iNew\Rest6_1\Model\UpdateAccessKeyResponse accessAccessManagementServiceSetRole($key, $correlation_id, $transaction_id, $user, $role)

sets the access role for the access key

**Access Restriction:** OPERATIONS  **Operation ID:** access::AccessManagementService::SetRole  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sets the access role for the access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$role = "role_example"; // string | null

try {
    $result = $api_instance->accessAccessManagementServiceSetRole($key, $correlation_id, $transaction_id, $user, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceSetRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **role** | **string**| null | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateAccessKeyResponse**](../Model/UpdateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceStoreAccessKey**
> \iNew\Rest6_1\Model\StoreAccessKeyResponse accessAccessManagementServiceStoreAccessKey($key, $correlation_id, $transaction_id, $user)

stores the access key

**Access Restriction:** ADMIN  **Operation ID:** access::AccessManagementService::StoreAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = new \iNew\Rest6_1\Model\AccessKeyStore(); // \iNew\Rest6_1\Model\AccessKeyStore | the accessKey
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceStoreAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceStoreAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | [**\iNew\Rest6_1\Model\AccessKeyStore**](../Model/\iNew\Rest6_1\Model\AccessKeyStore.md)| the accessKey |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\StoreAccessKeyResponse**](../Model/StoreAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessAccessManagementServiceUpdateAccessKey**
> \iNew\Rest6_1\Model\UpdateAccessKeyResponse accessAccessManagementServiceUpdateAccessKey($key, $access_key, $correlation_id, $transaction_id, $user)

updates the access key

**Access Restriction:** ADMIN  **Operation ID:** access::AccessManagementService::UpdateAccessKey  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024000001 - Request is invalid (client error HTTP Status 400)   1024000002 - File storage not accessible (server error HTTP Status 500)   1024000003 - Access key not found (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AccessControlManagementApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$access_key = new \iNew\Rest6_1\Model\AccessKey(); // \iNew\Rest6_1\Model\AccessKey | the accessKey
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceUpdateAccessKey($key, $access_key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlManagementApi->accessAccessManagementServiceUpdateAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| field used to represent the access key identifier this request is intended for |
 **access_key** | [**\iNew\Rest6_1\Model\AccessKey**](../Model/\iNew\Rest6_1\Model\AccessKey.md)| the accessKey |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateAccessKeyResponse**](../Model/UpdateAccessKeyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

