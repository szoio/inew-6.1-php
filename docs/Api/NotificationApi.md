# iNew\Rest6_1\NotificationApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**snaSubscriberNotificationAdministrationServiceGetCategories**](NotificationApi.md#snaSubscriberNotificationAdministrationServiceGetCategories) | **GET** /configuration/notifications/categories | returns the available notification categories
[**snaSubscriberNotificationAdministrationServiceGetNotifications**](NotificationApi.md#snaSubscriberNotificationAdministrationServiceGetNotifications) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notifications | returns the available notifications for the given subscription
[**snaSubscriberNotificationAdministrationServiceGetNotificationsConfiguration**](NotificationApi.md#snaSubscriberNotificationAdministrationServiceGetNotificationsConfiguration) | **GET** /configuration/notifications | returns the available notifications
[**snaSubscriberNotificationAdministrationServiceGetNotificationsSubscription**](NotificationApi.md#snaSubscriberNotificationAdministrationServiceGetNotificationsSubscription) | **GET** /subscriptions/{subscriptionId}/notifications | returns the available notifications for the given subscription
[**snaSubscriberNotificationAdministrationServiceSetNotificationPreferences**](NotificationApi.md#snaSubscriberNotificationAdministrationServiceSetNotificationPreferences) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notifications/preferences | sets the notification preferences
[**snaSubscriberNotificationAdministrationServiceSetNotificationPreferencesSubscription**](NotificationApi.md#snaSubscriberNotificationAdministrationServiceSetNotificationPreferencesSubscription) | **POST** /subscriptions/{subscriptionId}/notifications/preferences | sets the notification preferences
[**snaSubscriberNotificationServiceSend**](NotificationApi.md#snaSubscriberNotificationServiceSend) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notifyViaTemplate | sends a notification to the given subscription based on a notification key and parameters
[**snaSubscriberNotificationServiceSendByCategory**](NotificationApi.md#snaSubscriberNotificationServiceSendByCategory) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notify/{channel} | sends a notification to the given subscription with the given contents
[**snaSubscriberNotificationServiceSendByCategorySubscription**](NotificationApi.md#snaSubscriberNotificationServiceSendByCategorySubscription) | **POST** /subscriptions/{subscriptionId}/notify/{channel} | sends a notification to the given subscription with the given contents
[**snaSubscriberNotificationServiceSendImmediate**](NotificationApi.md#snaSubscriberNotificationServiceSendImmediate) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notify | sends a SMS to the given subscription immediately with the given contents
[**snaSubscriberNotificationServiceSendImmediateSubscription**](NotificationApi.md#snaSubscriberNotificationServiceSendImmediateSubscription) | **POST** /subscriptions/{subscriptionId}/notify | sends a SMS to the given subscription immediately with the given contents
[**snaSubscriberNotificationServiceSendSubscription**](NotificationApi.md#snaSubscriberNotificationServiceSendSubscription) | **POST** /subscriptions/{subscriptionId}/notifyViaTemplate | sends a notification to the given subscription based on a notification key and parameters


# **snaSubscriberNotificationAdministrationServiceGetCategories**
> \iNew\Rest6_1\Model\GetCategoriesResponse snaSubscriberNotificationAdministrationServiceGetCategories($correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the available notification categories

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationAdministrationService::GetCategories  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available notification categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceGetCategories($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationAdministrationServiceGetCategories: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetCategoriesResponse**](../Model/GetCategoriesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationAdministrationServiceGetNotifications**
> \iNew\Rest6_1\Model\GetNotificationsResponse snaSubscriberNotificationAdministrationServiceGetNotifications($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the available notifications for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationAdministrationService::GetNotifications  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available notifications for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceGetNotifications($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationAdministrationServiceGetNotifications: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetNotificationsResponse**](../Model/GetNotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationAdministrationServiceGetNotificationsConfiguration**
> \iNew\Rest6_1\Model\GetNotificationsResponse snaSubscriberNotificationAdministrationServiceGetNotificationsConfiguration($correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the available notifications

**Access Restriction:** CRM  **Operation ID:** sna::SubscriberNotificationAdministrationService::GetNotificationsConfiguration  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceGetNotificationsConfiguration($correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationAdministrationServiceGetNotificationsConfiguration: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetNotificationsResponse**](../Model/GetNotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationAdministrationServiceGetNotificationsSubscription**
> \iNew\Rest6_1\Model\GetNotificationsResponse snaSubscriberNotificationAdministrationServiceGetNotificationsSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the available notifications for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationAdministrationService::GetNotificationsSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available notifications for the given subscription  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>sna::SubscriberNotificationAdministrationService::GetNotificationsSubscription</b><br/>It is recommended rather to use <b>sna::SubscriberNotificationAdministrationService::GetNotificationsSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceGetNotificationsSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationAdministrationServiceGetNotificationsSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetNotificationsResponse**](../Model/GetNotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationAdministrationServiceSetNotificationPreferences**
> \iNew\Rest6_1\Model\SetNotificationPreferencesResponse snaSubscriberNotificationAdministrationServiceSetNotificationPreferences($customer_account_id, $subscription_id, $preferences, $correlation_id, $transaction_id, $user)

sets the notification preferences

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationAdministrationService::SetNotificationPreferences  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sets the notification preferences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$preferences = new \iNew\Rest6_1\Model\ChannelPreferenceList(); // \iNew\Rest6_1\Model\ChannelPreferenceList | the preferences
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceSetNotificationPreferences($customer_account_id, $subscription_id, $preferences, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationAdministrationServiceSetNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **preferences** | [**\iNew\Rest6_1\Model\ChannelPreferenceList**](../Model/\iNew\Rest6_1\Model\ChannelPreferenceList.md)| the preferences |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetNotificationPreferencesResponse**](../Model/SetNotificationPreferencesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationAdministrationServiceSetNotificationPreferencesSubscription**
> \iNew\Rest6_1\Model\SetNotificationPreferencesResponse snaSubscriberNotificationAdministrationServiceSetNotificationPreferencesSubscription($subscription_id, $preferences, $correlation_id, $transaction_id, $user)

sets the notification preferences

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationAdministrationService::SetNotificationPreferencesSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sets the notification preferences  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>sna::SubscriberNotificationAdministrationService::SetNotificationPreferencesSubscription</b><br/>It is recommended rather to use <b>sna::SubscriberNotificationAdministrationService::SetNotificationPreferencesSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$subscription_id = 789; // int | the subscription id
$preferences = new \iNew\Rest6_1\Model\ChannelPreferenceList(); // \iNew\Rest6_1\Model\ChannelPreferenceList | the preferences
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceSetNotificationPreferencesSubscription($subscription_id, $preferences, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationAdministrationServiceSetNotificationPreferencesSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **preferences** | [**\iNew\Rest6_1\Model\ChannelPreferenceList**](../Model/\iNew\Rest6_1\Model\ChannelPreferenceList.md)| the preferences |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetNotificationPreferencesResponse**](../Model/SetNotificationPreferencesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSend**
> \iNew\Rest6_1\Model\SendNotificationResponse snaSubscriberNotificationServiceSend($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user, $channel)

sends a notification to the given subscription based on a notification key and parameters

**Access Restriction:** CRM  **Operation ID:** sna::SubscriberNotificationService::Send  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000002 - the template is unknown (client error HTTP Status 400)   1019000003 - the notification is unknown (client error HTTP Status 400)   1019000004 - the template cannot be resolved (client error HTTP Status 400)   1019000005 - scheduling error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a notification to the given subscription based on a notification key and parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$contents = new \iNew\Rest6_1\Model\ContentsSend(); // \iNew\Rest6_1\Model\ContentsSend | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$channel = "channel_example"; // string | the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured)

try {
    $result = $api_instance->snaSubscriberNotificationServiceSend($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationServiceSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSend**](../Model/\iNew\Rest6_1\Model\ContentsSend.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **channel** | **string**| the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured) | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendNotificationResponse**](../Model/SendNotificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSendByCategory**
> \iNew\Rest6_1\Model\SendNotificationResponse snaSubscriberNotificationServiceSendByCategory($customer_account_id, $subscription_id, $channel, $contents, $correlation_id, $transaction_id, $user)

sends a notification to the given subscription with the given contents

**Access Restriction:** CRM  **Operation ID:** sna::SubscriberNotificationService::SendByCategory  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000007 - unknown category (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a notification to the given subscription with the given contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$channel = "channel_example"; // string | the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured)
$contents = new \iNew\Rest6_1\Model\ContentsSendByCategory(); // \iNew\Rest6_1\Model\ContentsSendByCategory | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationServiceSendByCategory($customer_account_id, $subscription_id, $channel, $contents, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationServiceSendByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **channel** | **string**| the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured) |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSendByCategory**](../Model/\iNew\Rest6_1\Model\ContentsSendByCategory.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendNotificationResponse**](../Model/SendNotificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSendByCategorySubscription**
> \iNew\Rest6_1\Model\SendNotificationResponse snaSubscriberNotificationServiceSendByCategorySubscription($subscription_id, $channel, $contents, $correlation_id, $transaction_id, $user)

sends a notification to the given subscription with the given contents

**Access Restriction:** CRM  **Operation ID:** sna::SubscriberNotificationService::SendByCategorySubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000007 - unknown category (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a notification to the given subscription with the given contents  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>sna::SubscriberNotificationService::SendByCategorySubscription</b><br/>It is recommended rather to use <b>sna::SubscriberNotificationService::SendByCategorySubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$subscription_id = 789; // int | the subscription id
$channel = "channel_example"; // string | the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured)
$contents = new \iNew\Rest6_1\Model\ContentsSendByCategory(); // \iNew\Rest6_1\Model\ContentsSendByCategory | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationServiceSendByCategorySubscription($subscription_id, $channel, $contents, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationServiceSendByCategorySubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **channel** | **string**| the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured) |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSendByCategory**](../Model/\iNew\Rest6_1\Model\ContentsSendByCategory.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendNotificationResponse**](../Model/SendNotificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSendImmediate**
> \iNew\Rest6_1\Model\SendImmediateResponse snaSubscriberNotificationServiceSendImmediate($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user)

sends a SMS to the given subscription immediately with the given contents

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationService::SendImmediate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a SMS to the given subscription immediately with the given contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$contents = new \iNew\Rest6_1\Model\ContentsSendImmediate(); // \iNew\Rest6_1\Model\ContentsSendImmediate | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationServiceSendImmediate($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationServiceSendImmediate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSendImmediate**](../Model/\iNew\Rest6_1\Model\ContentsSendImmediate.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendImmediateResponse**](../Model/SendImmediateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSendImmediateSubscription**
> \iNew\Rest6_1\Model\SendImmediateResponse snaSubscriberNotificationServiceSendImmediateSubscription($subscription_id, $contents, $correlation_id, $transaction_id, $user)

sends a SMS to the given subscription immediately with the given contents

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationService::SendImmediateSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a SMS to the given subscription immediately with the given contents  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>sna::SubscriberNotificationService::SendImmediateSubscription</b><br/>It is recommended rather to use <b>sna::SubscriberNotificationService::SendImmediateSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$subscription_id = 789; // int | the subscription id
$contents = new \iNew\Rest6_1\Model\ContentsSendImmediate(); // \iNew\Rest6_1\Model\ContentsSendImmediate | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationServiceSendImmediateSubscription($subscription_id, $contents, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationServiceSendImmediateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSendImmediate**](../Model/\iNew\Rest6_1\Model\ContentsSendImmediate.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendImmediateResponse**](../Model/SendImmediateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSendSubscription**
> \iNew\Rest6_1\Model\SendNotificationResponse snaSubscriberNotificationServiceSendSubscription($subscription_id, $contents, $correlation_id, $transaction_id, $user, $channel)

sends a notification to the given subscription based on a notification key and parameters

**Access Restriction:** CRM  **Operation ID:** sna::SubscriberNotificationService::SendSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000002 - the template is unknown (client error HTTP Status 400)   1019000003 - the notification is unknown (client error HTTP Status 400)   1019000004 - the template cannot be resolved (client error HTTP Status 400)   1019000005 - scheduling error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a notification to the given subscription based on a notification key and parameters  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>sna::SubscriberNotificationService::SendSubscription</b><br/>It is recommended rather to use <b>sna::SubscriberNotificationService::SendSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\NotificationApi();
$subscription_id = 789; // int | the subscription id
$contents = new \iNew\Rest6_1\Model\ContentsSend(); // \iNew\Rest6_1\Model\ContentsSend | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$channel = "channel_example"; // string | the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured)

try {
    $result = $api_instance->snaSubscriberNotificationServiceSendSubscription($subscription_id, $contents, $correlation_id, $transaction_id, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->snaSubscriberNotificationServiceSendSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSend**](../Model/\iNew\Rest6_1\Model\ContentsSend.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **channel** | **string**| the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured) | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendNotificationResponse**](../Model/SendNotificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

