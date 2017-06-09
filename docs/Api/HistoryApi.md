# iNew\Rest6_1\HistoryApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**historyHistoryServiceGetHistory**](HistoryApi.md#historyHistoryServiceGetHistory) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/history | returns the history
[**historyHistoryServiceGetHistoryCustomer**](HistoryApi.md#historyHistoryServiceGetHistoryCustomer) | **GET** /customers/{customerAccountId}/history | returns the history
[**historyHistoryServiceGetHistorySubscription**](HistoryApi.md#historyHistoryServiceGetHistorySubscription) | **GET** /subscriptions/{subscriptionId}/history | returns the history


# **historyHistoryServiceGetHistory**
> \iNew\Rest6_1\Model\GetHistoryResponse historyHistoryServiceGetHistory($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types)

returns the history

**Access Restriction:** SELF_CARE  **Operation ID:** history::HistoryService::GetHistory  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1025000000 - An unknown error occured (client error HTTP Status 400)   1025000001 - Invalid request (client error HTTP Status 400)   1025000002 - Invalid argument (client error HTTP Status 400)  **Notes:**   the query parameters contained in group (startYear, endYear, startWeek, endWeek) and group (startDate, endDate) must not both be provided at the same time!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\HistoryApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$end_date = new \DateTime(); // \DateTime | the end date in ISO8601 format
$end_week = 56; // int | the end week
$end_year = 56; // int | the end year
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$sort_type = "sort_type_example"; // string | the attribute results are sorted by
$start_date = new \DateTime(); // \DateTime | the start date in ISO8601 format
$start_week = 56; // int | the start week
$start_year = 56; // int | the start year
$sub_types = "sub_types_example"; // string | a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER]
$types = "types_example"; // string | a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC]

try {
    $result = $api_instance->historyHistoryServiceGetHistory($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->historyHistoryServiceGetHistory: ', $e->getMessage(), PHP_EOL;
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
 **end_date** | **\DateTime**| the end date in ISO8601 format | [optional]
 **end_week** | **int**| the end week | [optional]
 **end_year** | **int**| the end year | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **sort_type** | **string**| the attribute results are sorted by | [optional]
 **start_date** | **\DateTime**| the start date in ISO8601 format | [optional]
 **start_week** | **int**| the start week | [optional]
 **start_year** | **int**| the start year | [optional]
 **sub_types** | **string**| a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER] | [optional]
 **types** | **string**| a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC] | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetHistoryResponse**](../Model/GetHistoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **historyHistoryServiceGetHistoryCustomer**
> \iNew\Rest6_1\Model\GetHistoryResponse historyHistoryServiceGetHistoryCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types)

returns the history

**Access Restriction:** SELF_CARE  **Operation ID:** history::HistoryService::GetHistoryCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1025000000 - An unknown error occured (client error HTTP Status 400)   1025000001 - Invalid request (client error HTTP Status 400)   1025000002 - Invalid argument (client error HTTP Status 400)  **Notes:**   the query parameters contained in group (startYear, endYear, startWeek, endWeek) and group (startDate, endDate) must not both be provided at the same time!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\HistoryApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$end_date = new \DateTime(); // \DateTime | the end date in ISO8601 format
$end_week = 56; // int | the end week
$end_year = 56; // int | the end year
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$sort_type = "sort_type_example"; // string | the attribute results are sorted by
$start_date = new \DateTime(); // \DateTime | the start date in ISO8601 format
$start_week = 56; // int | the start week
$start_year = 56; // int | the start year
$sub_types = "sub_types_example"; // string | a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER]
$types = "types_example"; // string | a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC]

try {
    $result = $api_instance->historyHistoryServiceGetHistoryCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->historyHistoryServiceGetHistoryCustomer: ', $e->getMessage(), PHP_EOL;
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
 **end_date** | **\DateTime**| the end date in ISO8601 format | [optional]
 **end_week** | **int**| the end week | [optional]
 **end_year** | **int**| the end year | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **sort_type** | **string**| the attribute results are sorted by | [optional]
 **start_date** | **\DateTime**| the start date in ISO8601 format | [optional]
 **start_week** | **int**| the start week | [optional]
 **start_year** | **int**| the start year | [optional]
 **sub_types** | **string**| a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER] | [optional]
 **types** | **string**| a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC] | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetHistoryResponse**](../Model/GetHistoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **historyHistoryServiceGetHistorySubscription**
> \iNew\Rest6_1\Model\GetHistoryResponse historyHistoryServiceGetHistorySubscription($subscription_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types)

returns the history

**Access Restriction:** SELF_CARE  **Operation ID:** history::HistoryService::GetHistorySubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1025000000 - An unknown error occured (client error HTTP Status 400)   1025000001 - Invalid request (client error HTTP Status 400)   1025000002 - Invalid argument (client error HTTP Status 400)  **Notes:**   the query parameters contained in group (startYear, endYear, startWeek, endWeek) and group (startDate, endDate) must not both be provided at the same time!  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>history::HistoryService::GetHistorySubscription</b><br/>It is recommended rather to use <b>history::HistoryService::GetHistorySubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\HistoryApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$end_date = new \DateTime(); // \DateTime | the end date in ISO8601 format
$end_week = 56; // int | the end week
$end_year = 56; // int | the end year
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$sort_type = "sort_type_example"; // string | the attribute results are sorted by
$start_date = new \DateTime(); // \DateTime | the start date in ISO8601 format
$start_week = 56; // int | the start week
$start_year = 56; // int | the start year
$sub_types = "sub_types_example"; // string | a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER]
$types = "types_example"; // string | a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC]

try {
    $result = $api_instance->historyHistoryServiceGetHistorySubscription($subscription_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->historyHistoryServiceGetHistorySubscription: ', $e->getMessage(), PHP_EOL;
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
 **end_date** | **\DateTime**| the end date in ISO8601 format | [optional]
 **end_week** | **int**| the end week | [optional]
 **end_year** | **int**| the end year | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **sort_type** | **string**| the attribute results are sorted by | [optional]
 **start_date** | **\DateTime**| the start date in ISO8601 format | [optional]
 **start_week** | **int**| the start week | [optional]
 **start_year** | **int**| the start year | [optional]
 **sub_types** | **string**| a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER] | [optional]
 **types** | **string**| a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC] | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetHistoryResponse**](../Model/GetHistoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

