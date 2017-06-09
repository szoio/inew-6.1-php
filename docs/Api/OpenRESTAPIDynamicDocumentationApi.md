# iNew\Rest6_1\OpenRESTAPIDynamicDocumentationApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**administrationRestExporterAdministrationGetAvailableAdminTools**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationGetAvailableAdminTools) | **GET** /configuration/openRestApi/links | returns the list of all available GUI admin tools for the given access key
[**administrationRestExporterAdministrationGetAvailableSettings**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationGetAvailableSettings) | **GET** /configuration/openRestApi/settings | returns the list of all available GUI settings for the given access key
[**administrationRestExporterAdministrationGetAvailableTags**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationGetAvailableTags) | **GET** /configuration/openRestApi/versions/{version}/tags | returns the list of all available tags for the provided version for the given access key
[**administrationRestExporterAdministrationGetAvailableVersions**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationGetAvailableVersions) | **GET** /configuration/openRestApi/versions | returns the list of all available API versions for the given access key
[**administrationRestExporterAdministrationGetDisallowedOperations**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationGetDisallowedOperations) | **GET** /configuration/openRestApi/disallowed | returns disallowed rest operations with explanation which rule(s) disallow them for the given access key
[**administrationRestExporterAdministrationGetOperationsOverview**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationGetOperationsOverview) | **GET** /configuration/openRestApi/overview | returns the definitions for all rest operations
[**administrationRestExporterAdministrationRefreshSettingsCache**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationRefreshSettingsCache) | **PUT** /configuration/openRestApi/invalidateSettingsCache | invalidates the settings cache for single user (access key)
[**administrationRestExporterAdministrationSendFeedback**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationSendFeedback) | **POST** /configuration/openRestApi/feedback | sends feedback to whoever it may concern with the given data
[**administrationRestExporterAdministrationUpdateSettings**](OpenRESTAPIDynamicDocumentationApi.md#administrationRestExporterAdministrationUpdateSettings) | **PUT** /configuration/openRestApi/settings | updates the settings for single user (access key)


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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetAvailableAdminTools($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationGetAvailableAdminTools: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetAvailableSettings($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationGetAvailableSettings: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
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
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationGetAvailableTags: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->administrationRestExporterAdministrationGetAvailableVersions($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationGetAvailableVersions: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
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
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationGetDisallowedOperations: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
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
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationGetOperationsOverview: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationRefreshSettingsCache($correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationRefreshSettingsCache: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
$feedback = new \iNew\Rest6_1\Model\Feedback(); // \iNew\Rest6_1\Model\Feedback | the feedback
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationSendFeedback($feedback, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationSendFeedback: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new iNew\Rest6_1\Api\OpenRESTAPIDynamicDocumentationApi();
$settings = new \iNew\Rest6_1\Model\SettingList(); // \iNew\Rest6_1\Model\SettingList | the settings to update
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->administrationRestExporterAdministrationUpdateSettings($settings, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenRESTAPIDynamicDocumentationApi->administrationRestExporterAdministrationUpdateSettings: ', $e->getMessage(), PHP_EOL;
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

