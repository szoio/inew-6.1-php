# iNew\Rest6_1\VoiceMailApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vmsSubscriberServiceGetSubscriberBoxState**](VoiceMailApi.md#vmsSubscriberServiceGetSubscriberBoxState) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state | retrieves the voice mail box state
[**vmsSubscriberServiceGetSubscriberBoxStateSubscription**](VoiceMailApi.md#vmsSubscriberServiceGetSubscriberBoxStateSubscription) | **GET** /subscriptions/{subscriptionId}/voiceMail/state | retrieves the voice mail box state
[**vmsSubscriberServiceSetSubscriberBoxState**](VoiceMailApi.md#vmsSubscriberServiceSetSubscriberBoxState) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state/{newState} | sets the voice mail box state
[**vmsSubscriberServiceSetSubscriberBoxStateSubscription**](VoiceMailApi.md#vmsSubscriberServiceSetSubscriberBoxStateSubscription) | **PUT** /subscriptions/{subscriptionId}/voiceMail/state/{newState} | sets the voice mail box state


# **vmsSubscriberServiceGetSubscriberBoxState**
> \iNew\Rest6_1\Model\GetSubscriberBoxStateResponse vmsSubscriberServiceGetSubscriberBoxState($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

retrieves the voice mail box state

**Access Restriction:** SELF_CARE  **Operation ID:** vms::SubscriberService::GetSubscriberBoxState  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1026000001 - the voice mail box is blocked (client error HTTP Status 400)   1026000002 - a fraud attempt was detected (client error HTTP Status 400)   1026000003 - the voice mail box does not have a pin (client error HTTP Status 400)   1026000004 - the requested voice mail box does not exist (server error HTTP Status 500)   1026000005 - does not exist (client error HTTP Status 400)   1026000006 - perisitence error (server error HTTP Status 500)   1026000007 - the voice mail box could not be provisioned (server error HTTP Status 500)   1026000008 - unknown error (client error HTTP Status 400)   1026000009 - the voice mail box is full (client error HTTP Status 400)   1026000010 - the voice mail box is in an invalid state (client error HTTP Status 400)  **Notes:**   retrieves the voice mail box state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\VoiceMailApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->vmsSubscriberServiceGetSubscriberBoxState($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceMailApi->vmsSubscriberServiceGetSubscriberBoxState: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse**](../Model/GetSubscriberBoxStateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vmsSubscriberServiceGetSubscriberBoxStateSubscription**
> \iNew\Rest6_1\Model\GetSubscriberBoxStateResponse vmsSubscriberServiceGetSubscriberBoxStateSubscription($subscription_id, $correlation_id, $transaction_id, $user)

retrieves the voice mail box state

**Access Restriction:** SELF_CARE  **Operation ID:** vms::SubscriberService::GetSubscriberBoxStateSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1026000001 - the voice mail box is blocked (client error HTTP Status 400)   1026000002 - a fraud attempt was detected (client error HTTP Status 400)   1026000003 - the voice mail box does not have a pin (client error HTTP Status 400)   1026000004 - the requested voice mail box does not exist (server error HTTP Status 500)   1026000005 - does not exist (client error HTTP Status 400)   1026000006 - perisitence error (server error HTTP Status 500)   1026000007 - the voice mail box could not be provisioned (server error HTTP Status 500)   1026000008 - unknown error (client error HTTP Status 400)   1026000009 - the voice mail box is full (client error HTTP Status 400)   1026000010 - the voice mail box is in an invalid state (client error HTTP Status 400)  **Notes:**   retrieves the voice mail box state  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>vms::SubscriberService::GetSubscriberBoxStateSubscription</b><br/>It is recommended rather to use <b>vms::SubscriberService::GetSubscriberBoxStateSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\VoiceMailApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->vmsSubscriberServiceGetSubscriberBoxStateSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceMailApi->vmsSubscriberServiceGetSubscriberBoxStateSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse**](../Model/GetSubscriberBoxStateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vmsSubscriberServiceSetSubscriberBoxState**
> \iNew\Rest6_1\Model\SetSubscriberBoxStateResponse vmsSubscriberServiceSetSubscriberBoxState($customer_account_id, $subscription_id, $new_state, $correlation_id, $transaction_id, $user)

sets the voice mail box state

**Access Restriction:** SELF_CARE  **Operation ID:** vms::SubscriberService::SetSubscriberBoxState  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1026000001 - the voice mail box is blocked (client error HTTP Status 400)   1026000002 - a fraud attempt was detected (client error HTTP Status 400)   1026000003 - the voice mail box does not have a pin (client error HTTP Status 400)   1026000004 - the requested voice mail box does not exist (server error HTTP Status 500)   1026000005 - does not exist (client error HTTP Status 400)   1026000006 - perisitence error (server error HTTP Status 500)   1026000007 - the voice mail box could not be provisioned (server error HTTP Status 500)   1026000008 - unknown error (client error HTTP Status 400)   1026000009 - the voice mail box is full (client error HTTP Status 400)   1026000010 - the voice mail box is in an invalid state (client error HTTP Status 400)  **Notes:**   sets the voice mail box state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\VoiceMailApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$new_state = "new_state_example"; // string | ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.<br>SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.<br>NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->vmsSubscriberServiceSetSubscriberBoxState($customer_account_id, $subscription_id, $new_state, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceMailApi->vmsSubscriberServiceSetSubscriberBoxState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **new_state** | **string**| ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.&lt;br&gt;SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.&lt;br&gt;NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse**](../Model/SetSubscriberBoxStateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vmsSubscriberServiceSetSubscriberBoxStateSubscription**
> \iNew\Rest6_1\Model\SetSubscriberBoxStateResponse vmsSubscriberServiceSetSubscriberBoxStateSubscription($subscription_id, $new_state, $correlation_id, $transaction_id, $user)

sets the voice mail box state

**Access Restriction:** SELF_CARE  **Operation ID:** vms::SubscriberService::SetSubscriberBoxStateSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1026000001 - the voice mail box is blocked (client error HTTP Status 400)   1026000002 - a fraud attempt was detected (client error HTTP Status 400)   1026000003 - the voice mail box does not have a pin (client error HTTP Status 400)   1026000004 - the requested voice mail box does not exist (server error HTTP Status 500)   1026000005 - does not exist (client error HTTP Status 400)   1026000006 - perisitence error (server error HTTP Status 500)   1026000007 - the voice mail box could not be provisioned (server error HTTP Status 500)   1026000008 - unknown error (client error HTTP Status 400)   1026000009 - the voice mail box is full (client error HTTP Status 400)   1026000010 - the voice mail box is in an invalid state (client error HTTP Status 400)  **Notes:**   sets the voice mail box state  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>vms::SubscriberService::SetSubscriberBoxStateSubscription</b><br/>It is recommended rather to use <b>vms::SubscriberService::SetSubscriberBoxStateSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\VoiceMailApi();
$subscription_id = 789; // int | the subscription id
$new_state = "new_state_example"; // string | ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.<br>SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.<br>NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->vmsSubscriberServiceSetSubscriberBoxStateSubscription($subscription_id, $new_state, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceMailApi->vmsSubscriberServiceSetSubscriberBoxStateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **new_state** | **string**| ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.&lt;br&gt;SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.&lt;br&gt;NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse**](../Model/SetSubscriberBoxStateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

