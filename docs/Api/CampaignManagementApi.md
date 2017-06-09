# iNew\Rest6_1\CampaignManagementApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lcmCampaignManagementServiceAdd**](CampaignManagementApi.md#lcmCampaignManagementServiceAdd) | **PUT** /campaigns/{campaignId}/addSubscriptions | adds Subscriptions to the given campaign
[**lcmCampaignManagementServiceRemove**](CampaignManagementApi.md#lcmCampaignManagementServiceRemove) | **PUT** /campaigns/{campaignId}/removeSubscriptions | removes Subscriptions from the given campaign
[**lcmCampaignSearchServiceGet**](CampaignManagementApi.md#lcmCampaignSearchServiceGet) | **GET** /campaigns | gets the campaigns available according to the given criteria
[**lcmCampaignSearchServiceGetEligible**](CampaignManagementApi.md#lcmCampaignSearchServiceGetEligible) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/campaigns | gets the campaigns the subscription is eligible for
[**lcmCampaignSearchServiceGetEligibleSubscription**](CampaignManagementApi.md#lcmCampaignSearchServiceGetEligibleSubscription) | **GET** /subscriptions/{subscriptionId}/campaigns | gets the campaigns the subscription is eligible for


# **lcmCampaignManagementServiceAdd**
> \iNew\Rest6_1\Model\CampaignModificationResponse lcmCampaignManagementServiceAdd($campaign_id, $msisdns, $correlation_id, $transaction_id, $user)

adds Subscriptions to the given campaign

**Access Restriction:** SELF_CARE  **Operation ID:** lcm::CampaignManagementService::Add  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1004000001 - An unknown error occured (server error HTTP Status 500)   1004000002 - A Database error occured (server error HTTP Status 500)   1004000003 - invalid arguments (client error HTTP Status 400)   1004000004 - An IO error occured (server error HTTP Status 500)   1004000006 - the remote service is unavailable (server error HTTP Status 500)   1004000008 - a file upload for the given campaign is already in progress (client error HTTP Status 400)   1004000013 - unknown campaign ID (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   adds Subscriptions to the given campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CampaignManagementApi();
$campaign_id = 789; // int | the campaignId
$msisdns = new \iNew\Rest6_1\Model\StringList(); // \iNew\Rest6_1\Model\StringList | the MSISDNs
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->lcmCampaignManagementServiceAdd($campaign_id, $msisdns, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManagementApi->lcmCampaignManagementServiceAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| the campaignId |
 **msisdns** | [**\iNew\Rest6_1\Model\StringList**](../Model/\iNew\Rest6_1\Model\StringList.md)| the MSISDNs |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CampaignModificationResponse**](../Model/CampaignModificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lcmCampaignManagementServiceRemove**
> \iNew\Rest6_1\Model\CampaignModificationResponse lcmCampaignManagementServiceRemove($campaign_id, $msisdns, $correlation_id, $transaction_id, $user)

removes Subscriptions from the given campaign

**Access Restriction:** SELF_CARE  **Operation ID:** lcm::CampaignManagementService::Remove  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1004000001 - An unknown error occured (server error HTTP Status 500)   1004000002 - A Database error occured (server error HTTP Status 500)   1004000003 - invalid arguments (client error HTTP Status 400)   1004000004 - An IO error occured (server error HTTP Status 500)   1004000006 - the remote service is unavailable (server error HTTP Status 500)   1004000008 - a file upload for the given campaign is already in progress (client error HTTP Status 400)   1004000013 - unknown campaign ID (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   removes Subscriptions from the given campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CampaignManagementApi();
$campaign_id = 789; // int | the campaignId
$msisdns = new \iNew\Rest6_1\Model\StringList(); // \iNew\Rest6_1\Model\StringList | the MSISDNs
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->lcmCampaignManagementServiceRemove($campaign_id, $msisdns, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManagementApi->lcmCampaignManagementServiceRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| the campaignId |
 **msisdns** | [**\iNew\Rest6_1\Model\StringList**](../Model/\iNew\Rest6_1\Model\StringList.md)| the MSISDNs |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CampaignModificationResponse**](../Model/CampaignModificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lcmCampaignSearchServiceGet**
> \iNew\Rest6_1\Model\GetCampaignsResponse lcmCampaignSearchServiceGet($correlation_id, $transaction_id, $user, $campaign_type, $end_date, $entities_per_page, $full_text, $page, $start_date, $status, $trigger_type)

gets the campaigns available according to the given criteria

**Access Restriction:** CRM  **Operation ID:** lcm::CampaignSearchService::Get  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1004000001 - An unknown error occured (server error HTTP Status 500)   1004000002 - A Database error occured (server error HTTP Status 500)   1004000003 - invalid arguments (client error HTTP Status 400)   1004000004 - An IO error occured (server error HTTP Status 500)   1004000006 - the remote service is unavailable (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the campaigns available according to the given criteria  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>lcm::CampaignSearchService::Get</b><br/>It is recommended rather to use <b>lcm::CampaignSearchService::Get</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CampaignManagementApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$campaign_type = "campaign_type_example"; // string | the campaignType
$end_date = new \DateTime(); // \DateTime | the endDate
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$full_text = "full_text_example"; // string | the fullText
$page = 56; // int | the page requested (pagination)
$start_date = new \DateTime(); // \DateTime | the startDate
$status = "status_example"; // string | the status
$trigger_type = "trigger_type_example"; // string | the triggerType

try {
    $result = $api_instance->lcmCampaignSearchServiceGet($correlation_id, $transaction_id, $user, $campaign_type, $end_date, $entities_per_page, $full_text, $page, $start_date, $status, $trigger_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManagementApi->lcmCampaignSearchServiceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **campaign_type** | **string**| the campaignType | [optional]
 **end_date** | **\DateTime**| the endDate | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **full_text** | **string**| the fullText | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **start_date** | **\DateTime**| the startDate | [optional]
 **status** | **string**| the status | [optional]
 **trigger_type** | **string**| the triggerType | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lcmCampaignSearchServiceGetEligible**
> \iNew\Rest6_1\Model\GetCampaignsResponse lcmCampaignSearchServiceGetEligible($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets the campaigns the subscription is eligible for

**Access Restriction:** SELF_CARE  **Operation ID:** lcm::CampaignSearchService::GetEligible  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1004000001 - An unknown error occured (server error HTTP Status 500)   1004000002 - A Database error occured (server error HTTP Status 500)   1004000003 - invalid arguments (client error HTTP Status 400)   1004000004 - An IO error occured (server error HTTP Status 500)   1004000006 - the remote service is unavailable (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the campaigns the subscription is eligible for

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CampaignManagementApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->lcmCampaignSearchServiceGetEligible($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManagementApi->lcmCampaignSearchServiceGetEligible: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lcmCampaignSearchServiceGetEligibleSubscription**
> \iNew\Rest6_1\Model\GetCampaignsResponse lcmCampaignSearchServiceGetEligibleSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets the campaigns the subscription is eligible for

**Access Restriction:** SELF_CARE  **Operation ID:** lcm::CampaignSearchService::GetEligibleSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1004000001 - An unknown error occured (server error HTTP Status 500)   1004000002 - A Database error occured (server error HTTP Status 500)   1004000003 - invalid arguments (client error HTTP Status 400)   1004000004 - An IO error occured (server error HTTP Status 500)   1004000006 - the remote service is unavailable (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the campaigns the subscription is eligible for  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>lcm::CampaignSearchService::GetEligibleSubscription</b><br/>It is recommended rather to use <b>lcm::CampaignSearchService::GetEligibleSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CampaignManagementApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->lcmCampaignSearchServiceGetEligibleSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManagementApi->lcmCampaignSearchServiceGetEligibleSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

