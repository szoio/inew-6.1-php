# iNew\Rest6_1\MVNAConfigurationApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessAccessManagementServiceAddOperations**](MVNAConfigurationApi.md#accessAccessManagementServiceAddOperations) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/operations/allow | allows operations for the access key
[**accessAccessManagementServiceAddVersions**](MVNAConfigurationApi.md#accessAccessManagementServiceAddVersions) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/versions/allow | adds allowed api versions for the access key
[**accessAccessManagementServiceCloneAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceCloneAccessKey) | **POST** /configuration/openRestApi/accessControl/clone | clones the access key
[**accessAccessManagementServiceCreateAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceCreateAccessKey) | **POST** /configuration/openRestApi/accessControl/keys | creates the access key
[**accessAccessManagementServiceCreateDocumentationAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceCreateDocumentationAccessKey) | **POST** /configuration/openRestApi/accessControl/documentation/keys | creates an access key that can only be used to view documentation
[**accessAccessManagementServiceCreateRetailerAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceCreateRetailerAccessKey) | **POST** /configuration/openRestApi/accessControl/retailer/{retailerId}/keys | creates the retailer access key
[**accessAccessManagementServiceDeleteAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceDeleteAccessKey) | **DELETE** /configuration/openRestApi/accessControl/keys/{key} | deletes the access key
[**accessAccessManagementServiceGetAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceGetAccessKey) | **GET** /configuration/openRestApi/accessControl/keys/{key} | returns the access key definition for the given key string
[**accessAccessManagementServiceGetAccessKeys**](MVNAConfigurationApi.md#accessAccessManagementServiceGetAccessKeys) | **GET** /configuration/openRestApi/accessControl/keys | returns the list of all available access keys according to the search filter
[**accessAccessManagementServiceRefreshAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceRefreshAccessKey) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/refresh | refreshes the access key (new key value is generated, replacing the old one)
[**accessAccessManagementServiceRefreshCache**](MVNAConfigurationApi.md#accessAccessManagementServiceRefreshCache) | **PUT** /configuration/openRestApi/accessControl/refreshCache | refreshes in-memory access key cache
[**accessAccessManagementServiceRemoveOperations**](MVNAConfigurationApi.md#accessAccessManagementServiceRemoveOperations) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/operations/disallow | disallows operations for the access key
[**accessAccessManagementServiceRemoveTags**](MVNAConfigurationApi.md#accessAccessManagementServiceRemoveTags) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/tags/disallow | removes allowed tags for the access key
[**accessAccessManagementServiceRemoveVersions**](MVNAConfigurationApi.md#accessAccessManagementServiceRemoveVersions) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/versions/disallow | removes allowed api versions for the access key
[**accessAccessManagementServiceSetRole**](MVNAConfigurationApi.md#accessAccessManagementServiceSetRole) | **PUT** /configuration/openRestApi/accessControl/keys/{key}/role | sets the access role for the access key
[**accessAccessManagementServiceStoreAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceStoreAccessKey) | **POST** /configuration/openRestApi/accessControl/store | stores the access key
[**accessAccessManagementServiceUpdateAccessKey**](MVNAConfigurationApi.md#accessAccessManagementServiceUpdateAccessKey) | **PUT** /configuration/openRestApi/accessControl/keys/{key} | updates the access key
[**administrationRestExporterAdministrationGetAvailableAdminTools**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetAvailableAdminTools) | **GET** /configuration/openRestApi/links | returns the list of all available GUI admin tools for the given access key
[**administrationRestExporterAdministrationGetAvailableSettings**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetAvailableSettings) | **GET** /configuration/openRestApi/settings | returns the list of all available GUI settings for the given access key
[**administrationRestExporterAdministrationGetAvailableTags**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetAvailableTags) | **GET** /configuration/openRestApi/versions/{version}/tags | returns the list of all available tags for the provided version for the given access key
[**administrationRestExporterAdministrationGetAvailableVersions**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetAvailableVersions) | **GET** /configuration/openRestApi/versions | returns the list of all available API versions for the given access key
[**administrationRestExporterAdministrationGetConfiguration**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetConfiguration) | **GET** /configuration/openRestApi | returns the list of all configuration points
[**administrationRestExporterAdministrationGetDisallowedOperations**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetDisallowedOperations) | **GET** /configuration/openRestApi/disallowed | returns disallowed rest operations with explanation which rule(s) disallow them for the given access key
[**administrationRestExporterAdministrationGetHeartbeat**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetHeartbeat) | **GET** /heartbeat | heartbeat to check the health of ORA
[**administrationRestExporterAdministrationGetOperationsOverview**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetOperationsOverview) | **GET** /configuration/openRestApi/overview | returns the definitions for all rest operations
[**administrationRestExporterAdministrationGetResponseCode**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetResponseCode) | **GET** /configuration/responseCodes/{code} | returns the definition for the given response code
[**administrationRestExporterAdministrationGetResponseCodes**](MVNAConfigurationApi.md#administrationRestExporterAdministrationGetResponseCodes) | **GET** /configuration/responseCodes | returns the definitions for all response codes
[**administrationRestExporterAdministrationRefreshSettingsCache**](MVNAConfigurationApi.md#administrationRestExporterAdministrationRefreshSettingsCache) | **PUT** /configuration/openRestApi/invalidateSettingsCache | invalidates the settings cache for single user (access key)
[**administrationRestExporterAdministrationSendFeedback**](MVNAConfigurationApi.md#administrationRestExporterAdministrationSendFeedback) | **POST** /configuration/openRestApi/feedback | sends feedback to whoever it may concern with the given data
[**administrationRestExporterAdministrationSetConfiguration**](MVNAConfigurationApi.md#administrationRestExporterAdministrationSetConfiguration) | **PUT** /configuration/openRestApi | updates the given configuration point with the given configuration
[**administrationRestExporterAdministrationUpdateSettings**](MVNAConfigurationApi.md#administrationRestExporterAdministrationUpdateSettings) | **PUT** /configuration/openRestApi/settings | updates the settings for single user (access key)
[**crceProviderGetProviders**](MVNAConfigurationApi.md#crceProviderGetProviders) | **GET** /configuration/providers | Returns the list of all accessible MVNOs (Providers) in the system


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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$allowed = "allowed_example"; // string | single or comma-separated string of operation IDs to be added to the access key

try {
    $result = $api_instance->accessAccessManagementServiceAddOperations($key, $correlation_id, $transaction_id, $user, $allowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceAddOperations: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$allowed = "allowed_example"; // string | single or comma-separated string of api versions to be added to the access key

try {
    $result = $api_instance->accessAccessManagementServiceAddVersions($key, $correlation_id, $transaction_id, $user, $allowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceAddVersions: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
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
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceCloneAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
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
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceCreateAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$access_role = "access_role_example"; // string | the role that will be compared against the access restriction of any operation documentation being viewed
$assigned_to = "assigned_to_example"; // string | a String a descriptive identifier so operations can keep track of who actually is using this key e.g. \"Lemon42 CRM\"
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceCreateDocumentationAccessKey($access_role, $assigned_to, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceCreateDocumentationAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
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
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceCreateRetailerAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceDeleteAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceDeleteAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceGetAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceGetAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
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
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceGetAccessKeys: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceRefreshAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceRefreshAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceRefreshCache($correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceRefreshCache: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$disallowed = "disallowed_example"; // string | single or comma-separated string of operation IDs to be disallowed for the access key

try {
    $result = $api_instance->accessAccessManagementServiceRemoveOperations($key, $correlation_id, $transaction_id, $user, $disallowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceRemoveOperations: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$disallowed = "disallowed_example"; // string | single or comma-separated string of tags to be disallowed for the access key

try {
    $result = $api_instance->accessAccessManagementServiceRemoveTags($key, $correlation_id, $transaction_id, $user, $disallowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceRemoveTags: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$disallowed = "disallowed_example"; // string | single or comma-separated string of versions to be disallowed for the access key

try {
    $result = $api_instance->accessAccessManagementServiceRemoveVersions($key, $correlation_id, $transaction_id, $user, $disallowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceRemoveVersions: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$role = "role_example"; // string | null

try {
    $result = $api_instance->accessAccessManagementServiceSetRole($key, $correlation_id, $transaction_id, $user, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceSetRole: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = new \iNew\Rest6_1\Model\AccessKeyStore(); // \iNew\Rest6_1\Model\AccessKeyStore | the accessKey
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceStoreAccessKey($key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceStoreAccessKey: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$key = "key_example"; // string | field used to represent the access key identifier this request is intended for
$access_key = new \iNew\Rest6_1\Model\AccessKey(); // \iNew\Rest6_1\Model\AccessKey | the accessKey
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->accessAccessManagementServiceUpdateAccessKey($key, $access_key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->accessAccessManagementServiceUpdateAccessKey: ', $e->getMessage(), PHP_EOL;
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

# **administrationRestExporterAdministrationGetAvailableAdminTools**
> \iNew\Rest6_1\Model\GetAvailableAdminToolsResponse administrationRestExporterAdministrationGetAvailableAdminTools($correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the list of all available GUI admin tools for the given access key

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetAvailableAdminTools  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the list of all available GUI admin tools for the given access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetAvailableAdminTools($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetAvailableAdminTools: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetAvailableAdminToolsResponse**](../Model/GetAvailableAdminToolsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetAvailableSettings**
> \iNew\Rest6_1\Model\GetAvailableSettingsResponse administrationRestExporterAdministrationGetAvailableSettings($correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the list of all available GUI settings for the given access key

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetAvailableSettings  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the list of all available GUI settings for the given access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetAvailableSettings($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetAvailableSettings: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetAvailableSettingsResponse**](../Model/GetAvailableSettingsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetAvailableTags**
> \iNew\Rest6_1\Model\GetAvailableTagsResponse administrationRestExporterAdministrationGetAvailableTags($version, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the list of all available tags for the provided version for the given access key

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetAvailableTags  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the list of all available tags for the provided version for the given access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$version = "version_example"; // string | the version
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetAvailableTags($version, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetAvailableTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| the version |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableTagsResponse**](../Model/GetAvailableTagsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetAvailableVersions**
> \iNew\Rest6_1\Model\GetAvailableVersionsResponse administrationRestExporterAdministrationGetAvailableVersions($correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the list of all available API versions for the given access key

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetAvailableVersions  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the list of all available API versions for the given access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetAvailableVersions($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetAvailableVersions: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetAvailableVersionsResponse**](../Model/GetAvailableVersionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetConfiguration**
> \iNew\Rest6_1\Model\GetConfigurationResponse administrationRestExporterAdministrationGetConfiguration($correlation_id, $transaction_id, $user, $entities_per_page, $name, $page)

returns the list of all configuration points

**Access Restriction:** OPERATIONS  **Operation ID:** administration::RestExporterAdministration::GetConfiguration  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the list of all configuration points

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$name = "name_example"; // string | the configurationName
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetConfiguration($correlation_id, $transaction_id, $user, $entities_per_page, $name, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetConfiguration: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| the configurationName | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetConfigurationResponse**](../Model/GetConfigurationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetDisallowedOperations**
> \iNew\Rest6_1\Model\GetDisallowedOperationsResponse administrationRestExporterAdministrationGetDisallowedOperations($correlation_id, $transaction_id, $user, $entities_per_page, $operation_id, $page, $tags)

returns disallowed rest operations with explanation which rule(s) disallow them for the given access key

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetDisallowedOperations  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns disallowed rest operations with explanation which rule(s) disallow them for the given access key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$operation_id = "operation_id_example"; // string | the operationId
$page = 56; // int | the page requested (pagination)
$tags = "tags_example"; // string | the tags

try {
    $result = $api_instance->administrationRestExporterAdministrationGetDisallowedOperations($correlation_id, $transaction_id, $user, $entities_per_page, $operation_id, $page, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetDisallowedOperations: ', $e->getMessage(), PHP_EOL;
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
 **operation_id** | **string**| the operationId | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **tags** | **string**| the tags | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetDisallowedOperationsResponse**](../Model/GetDisallowedOperationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetHeartbeat**
> \iNew\Rest6_1\Model\GetHeartbeatResponse administrationRestExporterAdministrationGetHeartbeat($correlation_id, $transaction_id, $user)

heartbeat to check the health of ORA

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetHeartbeat  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationGetHeartbeat($correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetHeartbeat: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetHeartbeatResponse**](../Model/GetHeartbeatResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetOperationsOverview**
> \iNew\Rest6_1\Model\GetOperationsOverviewResponse administrationRestExporterAdministrationGetOperationsOverview($correlation_id, $transaction_id, $user, $enabled, $entities_per_page, $exposed, $http_method, $operation_id, $page, $role, $tags, $type)

returns the definitions for all rest operations

**Access Restriction:** OPERATIONS  **Operation ID:** administration::RestExporterAdministration::GetOperationsOverview  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$enabled = true; // bool | the enabled
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$exposed = true; // bool | the exposed
$http_method = "http_method_example"; // string | the httpMethod
$operation_id = "operation_id_example"; // string | the operationId
$page = 56; // int | the page requested (pagination)
$role = "role_example"; // string | the accessRole
$tags = "tags_example"; // string | the tags
$type = "type_example"; // string | the restOperationType

try {
    $result = $api_instance->administrationRestExporterAdministrationGetOperationsOverview($correlation_id, $transaction_id, $user, $enabled, $entities_per_page, $exposed, $http_method, $operation_id, $page, $role, $tags, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetOperationsOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **enabled** | **bool**| the enabled | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **exposed** | **bool**| the exposed | [optional]
 **http_method** | **string**| the httpMethod | [optional]
 **operation_id** | **string**| the operationId | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **role** | **string**| the accessRole | [optional]
 **tags** | **string**| the tags | [optional]
 **type** | **string**| the restOperationType | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOperationsOverviewResponse**](../Model/GetOperationsOverviewResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetResponseCode**
> \iNew\Rest6_1\Model\GetResponseCodeResponse administrationRestExporterAdministrationGetResponseCode($code, $correlation_id, $transaction_id, $user)

returns the definition for the given response code

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetResponseCode  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$code = 56; // int | the code
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationGetResponseCode($code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetResponseCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **int**| the code |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetResponseCodeResponse**](../Model/GetResponseCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationGetResponseCodes**
> \iNew\Rest6_1\Model\GetResponseCodesResponse administrationRestExporterAdministrationGetResponseCodes($correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the definitions for all response codes

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::GetResponseCodes  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetResponseCodes($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationGetResponseCodes: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetResponseCodesResponse**](../Model/GetResponseCodesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationRefreshSettingsCache**
> \iNew\Rest6_1\Model\InvalidateSettingsCacheResponse administrationRestExporterAdministrationRefreshSettingsCache($correlation_id, $transaction_id, $user)

invalidates the settings cache for single user (access key)

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::RefreshSettingsCache  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   invalidates the settings cache for single user (access key)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationRefreshSettingsCache($correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationRefreshSettingsCache: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\InvalidateSettingsCacheResponse**](../Model/InvalidateSettingsCacheResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationSendFeedback**
> \iNew\Rest6_1\Model\SendFeedbackResponse administrationRestExporterAdministrationSendFeedback($feedback, $correlation_id, $transaction_id, $user)

sends feedback to whoever it may concern with the given data

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::SendFeedback  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends feedback to whoever it may concern with the given data, this operation does not verify the access key and will never return ACCESS_DENIED

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$feedback = new \iNew\Rest6_1\Model\Feedback(); // \iNew\Rest6_1\Model\Feedback | the feedback
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationSendFeedback($feedback, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationSendFeedback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedback** | [**\iNew\Rest6_1\Model\Feedback**](../Model/\iNew\Rest6_1\Model\Feedback.md)| the feedback |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendFeedbackResponse**](../Model/SendFeedbackResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationSetConfiguration**
> \iNew\Rest6_1\Model\SetConfigurationResponse administrationRestExporterAdministrationSetConfiguration($name, $value, $correlation_id, $transaction_id, $user)

updates the given configuration point with the given configuration

**Access Restriction:** OPERATIONS  **Operation ID:** administration::RestExporterAdministration::SetConfiguration  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$name = "name_example"; // string | the configurationName
$value = "value_example"; // string | the value
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationSetConfiguration($name, $value, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationSetConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| the configurationName |
 **value** | **string**| the value |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetConfigurationResponse**](../Model/SetConfigurationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrationRestExporterAdministrationUpdateSettings**
> \iNew\Rest6_1\Model\UpdateSettingsResponse administrationRestExporterAdministrationUpdateSettings($settings, $correlation_id, $transaction_id, $user)

updates the settings for single user (access key)

**Access Restriction:** ALL  **Operation ID:** administration::RestExporterAdministration::UpdateSettings  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates the settings for single user (access key)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$settings = new \iNew\Rest6_1\Model\SettingList(); // \iNew\Rest6_1\Model\SettingList | the settings to update
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationUpdateSettings($settings, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->administrationRestExporterAdministrationUpdateSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings** | [**\iNew\Rest6_1\Model\SettingList**](../Model/\iNew\Rest6_1\Model\SettingList.md)| the settings to update |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSettingsResponse**](../Model/UpdateSettingsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceProviderGetProviders**
> \iNew\Rest6_1\Model\GetProvidersResponse crceProviderGetProviders($correlation_id, $transaction_id, $user, $entities_per_page, $page, $provider_name)

Returns the list of all accessible MVNOs (Providers) in the system

**Access Restriction:** CRM  **Operation ID:** crce::Provider::GetProviders  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the list of all accessible MVNOs (Providers) in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\MVNAConfigurationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$provider_name = "provider_name_example"; // string | the providerName

try {
    $result = $api_instance->crceProviderGetProviders($correlation_id, $transaction_id, $user, $entities_per_page, $page, $provider_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MVNAConfigurationApi->crceProviderGetProviders: ', $e->getMessage(), PHP_EOL;
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
 **provider_name** | **string**| the providerName | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetProvidersResponse**](../Model/GetProvidersResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

