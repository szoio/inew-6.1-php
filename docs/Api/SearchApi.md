# iNew\Rest6_1\SearchApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceSubscriberSearch**](SearchApi.md#crceSubscriberSearch) | **GET** /subscriptions | searches for a subscription
[**crceSubscriberSearchByCustomer**](SearchApi.md#crceSubscriberSearchByCustomer) | **GET** /customers/{customerAccountId}/subscriptions | searches for subscription for the given customer


# **crceSubscriberSearch**
> \iNew\Rest6_1\Model\SearchResponse crceSubscriberSearch($correlation_id, $transaction_id, $user, $external_id, $iccid, $imei, $imsi, $msisdn, $subscription_id)

searches for a subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Subscriber::Search  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   searches for a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\SearchApi();
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$external_id = "external_id_example"; // string | the externalId
$iccid = "iccid_example"; // string | the iccid
$imei = "imei_example"; // string | the imei
$imsi = "imsi_example"; // string | the imsi
$msisdn = "msisdn_example"; // string | the msisdn
$subscription_id = 789; // int | the subscriptionId

try {
    $result = $api_instance->crceSubscriberSearch($correlation_id, $transaction_id, $user, $external_id, $iccid, $imei, $imsi, $msisdn, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->crceSubscriberSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **external_id** | **string**| the externalId | [optional]
 **iccid** | **string**| the iccid | [optional]
 **imei** | **string**| the imei | [optional]
 **imsi** | **string**| the imsi | [optional]
 **msisdn** | **string**| the msisdn | [optional]
 **subscription_id** | **int**| the subscriptionId | [optional]

### Return type

[**\iNew\Rest6_1\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceSubscriberSearchByCustomer**
> \iNew\Rest6_1\Model\SearchByCustomerResponse crceSubscriberSearchByCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

searches for subscription for the given customer

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Subscriber::SearchByCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   searches for subscription for the given customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\SearchApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceSubscriberSearchByCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->crceSubscriberSearchByCustomer: ', $e->getMessage(), PHP_EOL;
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
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\SearchByCustomerResponse**](../Model/SearchByCustomerResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

