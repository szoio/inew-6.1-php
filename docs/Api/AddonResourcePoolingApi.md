# iNew\Rest6_1\AddonResourcePoolingApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crcePoolAdministrationAcceptOffer**](AddonResourcePoolingApi.md#crcePoolAdministrationAcceptOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/acceptOffer/{confirmationCode} | accepts the offer to join the given pool (pool admin or pool user)
[**crcePoolAdministrationAcceptOfferSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationAcceptOfferSubscription) | **PUT** /subscriptions/{subscriptionId}/pools/{poolId}/acceptOffer/{confirmationCode} | accepts the offer to join the given pool (pool admin or pool user)
[**crcePoolAdministrationCreatePool**](AddonResourcePoolingApi.md#crcePoolAdministrationCreatePool) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools | creates a pool
[**crcePoolAdministrationCreatePoolSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationCreatePoolSubscription) | **POST** /subscriptions/{subscriptionId}/pools | creates a pool
[**crcePoolAdministrationDeletePool**](AddonResourcePoolingApi.md#crcePoolAdministrationDeletePool) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId} | deletes a pool
[**crcePoolAdministrationDeletePoolSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationDeletePoolSubscription) | **DELETE** /subscriptions/{subscriptionId}/pools/{poolId} | deletes a pool
[**crcePoolAdministrationGetPoolDetails**](AddonResourcePoolingApi.md#crcePoolAdministrationGetPoolDetails) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools | gets the pooling status details (pool admin and user)
[**crcePoolAdministrationGetPoolDetailsSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationGetPoolDetailsSubscription) | **GET** /subscriptions/{subscriptionId}/pools | gets the pooling status details (pool admin and user)
[**crcePoolAdministrationLeavePool**](AddonResourcePoolingApi.md#crcePoolAdministrationLeavePool) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/leave | leave the given pool (pool user)
[**crcePoolAdministrationLeavePoolSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationLeavePoolSubscription) | **PUT** /subscriptions/{subscriptionId}/pools/{poolId}/leave | leave the given pool (pool user)
[**crcePoolAdministrationOffer**](AddonResourcePoolingApi.md#crcePoolAdministrationOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/sendOffer | sends an offer to join the pool to another subscription (pool admin)
[**crcePoolAdministrationOfferSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationOfferSubscription) | **PUT** /subscriptions/{subscriptionId}/pools/{poolId}/sendOffer | sends an offer to join the pool to another subscription (pool admin)
[**crcePoolAdministrationRefuseOffer**](AddonResourcePoolingApi.md#crcePoolAdministrationRefuseOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/refuseOffer | refuse the offer to join the given pool (pool user)
[**crcePoolAdministrationRefuseOfferSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationRefuseOfferSubscription) | **PUT** /subscriptions/{subscriptionId}/pools/{poolId}/refuseOffer | refuse the offer to join the given pool (pool user)
[**crcePoolAdministrationRemoveFromPool**](AddonResourcePoolingApi.md#crcePoolAdministrationRemoveFromPool) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/remove | removes the given subscription from the pool (pool admin)
[**crcePoolAdministrationRemoveFromPoolSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationRemoveFromPoolSubscription) | **PUT** /subscriptions/{subscriptionId}/pools/{poolId}/remove | removes the given subscription from the pool (pool admin)
[**crcePoolAdministrationRevokeOffer**](AddonResourcePoolingApi.md#crcePoolAdministrationRevokeOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/revokeOffer | revokes the offer to join the pool for a subscription (pool admin)
[**crcePoolAdministrationRevokeOfferSubscription**](AddonResourcePoolingApi.md#crcePoolAdministrationRevokeOfferSubscription) | **PUT** /subscriptions/{subscriptionId}/pools/{poolId}/revokeOffer | revokes the offer to join the pool for a subscription (pool admin)
[**crceTariffGetAvailablePlans**](AddonResourcePoolingApi.md#crceTariffGetAvailablePlans) | **GET** /tariffs/{tariffId}/availablePlans | returns the available plans
[**crceTariffGetAvailablePlansCustomer**](AddonResourcePoolingApi.md#crceTariffGetAvailablePlansCustomer) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans | returns the available plans
[**crceTariffGetAvailablePlansSubscription**](AddonResourcePoolingApi.md#crceTariffGetAvailablePlansSubscription) | **GET** /subscriptions/{subscriptionId}/availablePlans | returns the available plans
[**rtmRetailManagerGetAvailablePlans**](AddonResourcePoolingApi.md#rtmRetailManagerGetAvailablePlans) | **GET** /retailer/{msisdn}/availablePlans | returns the available plans


# **crcePoolAdministrationAcceptOffer**
> \iNew\Rest6_1\Model\ConfirmSubscriberAdditionResponse crcePoolAdministrationAcceptOffer($customer_account_id, $subscription_id, $pool_id, $confirmation_code, $correlation_id, $transaction_id, $user, $pool_user)

accepts the offer to join the given pool (pool admin or pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::AcceptOffer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   accepts the offer to join the given pool (pool admin or pool user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$confirmation_code = "confirmation_code_example"; // string | the confirmationCode
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | In case the owner of the pool confirms for the new user, one of the identifiers has to be provided

try {
    $result = $api_instance->crcePoolAdministrationAcceptOffer($customer_account_id, $subscription_id, $pool_id, $confirmation_code, $correlation_id, $transaction_id, $user, $pool_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationAcceptOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **confirmation_code** | **string**| the confirmationCode |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| In case the owner of the pool confirms for the new user, one of the identifiers has to be provided | [optional]

### Return type

[**\iNew\Rest6_1\Model\ConfirmSubscriberAdditionResponse**](../Model/ConfirmSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationAcceptOfferSubscription**
> \iNew\Rest6_1\Model\ConfirmSubscriberAdditionResponse crcePoolAdministrationAcceptOfferSubscription($subscription_id, $pool_id, $confirmation_code, $correlation_id, $transaction_id, $user, $pool_user)

accepts the offer to join the given pool (pool admin or pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::AcceptOfferSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   accepts the offer to join the given pool (pool admin or pool user)  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::AcceptOfferSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::AcceptOfferSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$confirmation_code = "confirmation_code_example"; // string | the confirmationCode
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | In case the owner of the pool confirms for the new user, one of the identifiers has to be provided

try {
    $result = $api_instance->crcePoolAdministrationAcceptOfferSubscription($subscription_id, $pool_id, $confirmation_code, $correlation_id, $transaction_id, $user, $pool_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationAcceptOfferSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **confirmation_code** | **string**| the confirmationCode |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| In case the owner of the pool confirms for the new user, one of the identifiers has to be provided | [optional]

### Return type

[**\iNew\Rest6_1\Model\ConfirmSubscriberAdditionResponse**](../Model/ConfirmSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationCreatePool**
> \iNew\Rest6_1\Model\CreatePoolResponse crcePoolAdministrationCreatePool($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

creates a pool

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::CreatePool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Creates and returns new pool for subscriber. If subscriber already owns a pool, the existing one is returned in the response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationCreatePool($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationCreatePool: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\CreatePoolResponse**](../Model/CreatePoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationCreatePoolSubscription**
> \iNew\Rest6_1\Model\CreatePoolResponse crcePoolAdministrationCreatePoolSubscription($subscription_id, $correlation_id, $transaction_id, $user)

creates a pool

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::CreatePoolSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Creates and returns new pool for subscriber. If subscriber already owns a pool, the existing one is returned in the response  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::CreatePoolSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::CreatePoolSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationCreatePoolSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationCreatePoolSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\CreatePoolResponse**](../Model/CreatePoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationDeletePool**
> \iNew\Rest6_1\Model\DeletePoolResponse crcePoolAdministrationDeletePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

deletes a pool

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::DeletePool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Deletes existing pool. Should be possible only if there are no resources shared by sponsors currently

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationDeletePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationDeletePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeletePoolResponse**](../Model/DeletePoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationDeletePoolSubscription**
> \iNew\Rest6_1\Model\DeletePoolResponse crcePoolAdministrationDeletePoolSubscription($subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

deletes a pool

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::DeletePoolSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Deletes existing pool. Should be possible only if there are no resources shared by sponsors currently  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::DeletePoolSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::DeletePoolSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationDeletePoolSubscription($subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationDeletePoolSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeletePoolResponse**](../Model/DeletePoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationGetPoolDetails**
> \iNew\Rest6_1\Model\GetPoolDetailsResponse crcePoolAdministrationGetPoolDetails($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

gets the pooling status details (pool admin and user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::GetPoolDetails  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns detailed information about pools subscriber is participating in. Subscriber can be part of two pools - one as a owner/sponsor, second one as a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationGetPoolDetails($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationGetPoolDetails: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetPoolDetailsResponse**](../Model/GetPoolDetailsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationGetPoolDetailsSubscription**
> \iNew\Rest6_1\Model\GetPoolDetailsResponse crcePoolAdministrationGetPoolDetailsSubscription($subscription_id, $correlation_id, $transaction_id, $user)

gets the pooling status details (pool admin and user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::GetPoolDetailsSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns detailed information about pools subscriber is participating in. Subscriber can be part of two pools - one as a owner/sponsor, second one as a user  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::GetPoolDetailsSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::GetPoolDetailsSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationGetPoolDetailsSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationGetPoolDetailsSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\GetPoolDetailsResponse**](../Model/GetPoolDetailsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationLeavePool**
> \iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse crcePoolAdministrationLeavePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

leave the given pool (pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::LeavePool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Removes subscriber from the pool of sponsor subscriber. If subscriber is still unauthorized or valid member of the pool, he is directly removed out of it and cannot use shared resources of the sponsor anymore

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationLeavePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationLeavePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse**](../Model/RemoveSubscriberFromPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationLeavePoolSubscription**
> \iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse crcePoolAdministrationLeavePoolSubscription($subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

leave the given pool (pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::LeavePoolSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Removes subscriber from the pool of sponsor subscriber. If subscriber is still unauthorized or valid member of the pool, he is directly removed out of it and cannot use shared resources of the sponsor anymore  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::LeavePoolSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::LeavePoolSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationLeavePoolSubscription($subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationLeavePoolSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse**](../Model/RemoveSubscriberFromPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationOffer**
> \iNew\Rest6_1\Model\AddSubscriberToPoolResponse crcePoolAdministrationOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

sends an offer to join the pool to another subscription (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::Offer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends an offer to join the pool to another subscription (pool admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AddSubscriberToPoolResponse**](../Model/AddSubscriberToPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationOfferSubscription**
> \iNew\Rest6_1\Model\AddSubscriberToPoolResponse crcePoolAdministrationOfferSubscription($subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

sends an offer to join the pool to another subscription (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::OfferSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends an offer to join the pool to another subscription (pool admin)  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::OfferSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::OfferSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationOfferSubscription($subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationOfferSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AddSubscriberToPoolResponse**](../Model/AddSubscriberToPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRefuseOffer**
> \iNew\Rest6_1\Model\CancelSubscriberAdditionResponse crcePoolAdministrationRefuseOffer($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

refuse the offer to join the given pool (pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RefuseOffer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Cancels the subscriber addition to the pool. Reserved charges are returned to sponsor subscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRefuseOffer($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationRefuseOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelSubscriberAdditionResponse**](../Model/CancelSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRefuseOfferSubscription**
> \iNew\Rest6_1\Model\CancelSubscriberAdditionResponse crcePoolAdministrationRefuseOfferSubscription($subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

refuse the offer to join the given pool (pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RefuseOfferSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Cancels the subscriber addition to the pool. Reserved charges are returned to sponsor subscriber  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::RefuseOfferSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::RefuseOfferSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRefuseOfferSubscription($subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationRefuseOfferSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelSubscriberAdditionResponse**](../Model/CancelSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRemoveFromPool**
> \iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse crcePoolAdministrationRemoveFromPool($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

removes the given subscription from the pool (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RemoveFromPool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Removes the given ID/IMSI/ICCID/MSISDN from the pool. Is only possible if given subscriptionId is the owner of the pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRemoveFromPool($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationRemoveFromPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse**](../Model/RemoveSubscriberFromPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRemoveFromPoolSubscription**
> \iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse crcePoolAdministrationRemoveFromPoolSubscription($subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

removes the given subscription from the pool (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RemoveFromPoolSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Removes the given ID/IMSI/ICCID/MSISDN from the pool. Is only possible if given subscriptionId is the owner of the pool  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::RemoveFromPoolSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::RemoveFromPoolSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRemoveFromPoolSubscription($subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationRemoveFromPoolSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse**](../Model/RemoveSubscriberFromPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRevokeOffer**
> \iNew\Rest6_1\Model\CancelSubscriberAdditionResponse crcePoolAdministrationRevokeOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

revokes the offer to join the pool for a subscription (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RevokeOffer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Revokes the offer for the given ID/IMSI/ICCID/MSISDN to join the pool. Is only possible if given subscriptionId is the owner of the pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRevokeOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationRevokeOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelSubscriberAdditionResponse**](../Model/CancelSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRevokeOfferSubscription**
> \iNew\Rest6_1\Model\CancelSubscriberAdditionResponse crcePoolAdministrationRevokeOfferSubscription($subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

revokes the offer to join the pool for a subscription (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RevokeOfferSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Revokes the offer for the given ID/IMSI/ICCID/MSISDN to join the pool. Is only possible if given subscriptionId is the owner of the pool  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::PoolAdministration::RevokeOfferSubscription</b><br/>It is recommended rather to use <b>crce::PoolAdministration::RevokeOfferSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRevokeOfferSubscription($subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crcePoolAdministrationRevokeOfferSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelSubscriberAdditionResponse**](../Model/CancelSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetAvailablePlans**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse1 crceTariffGetAvailablePlans($tariff_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans)

returns the available plans

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetAvailablePlans  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::Tariff::GetAvailablePlans</b><br/>It is recommended rather to use <b>crce::Tariff::GetAvailablePlans</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$tariff_id = 789; // int | the tariff ID for which the available plans should be listed
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise)
$show_flexi_plans = true; // bool | a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)

try {
    $result = $api_instance->crceTariffGetAvailablePlans($tariff_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crceTariffGetAvailablePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_id** | **int**| the tariff ID for which the available plans should be listed |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise) | [optional]
 **show_flexi_plans** | **bool**| a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse1**](../Model/GetAvailablePlansResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetAvailablePlansCustomer**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse1 crceTariffGetAvailablePlansCustomer($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans)

returns the available plans

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetAvailablePlansCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise)
$show_flexi_plans = true; // bool | a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)

try {
    $result = $api_instance->crceTariffGetAvailablePlansCustomer($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crceTariffGetAvailablePlansCustomer: ', $e->getMessage(), PHP_EOL;
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
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise) | [optional]
 **show_flexi_plans** | **bool**| a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse1**](../Model/GetAvailablePlansResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetAvailablePlansSubscription**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse1 crceTariffGetAvailablePlansSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans)

returns the available plans

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetAvailablePlansSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>crce::Tariff::GetAvailablePlansSubscription</b><br/>It is recommended rather to use <b>crce::Tariff::GetAvailablePlansSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise)
$show_flexi_plans = true; // bool | a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)

try {
    $result = $api_instance->crceTariffGetAvailablePlansSubscription($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->crceTariffGetAvailablePlansSubscription: ', $e->getMessage(), PHP_EOL;
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
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise) | [optional]
 **show_flexi_plans** | **bool**| a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse1**](../Model/GetAvailablePlansResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rtmRetailManagerGetAvailablePlans**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse rtmRetailManagerGetAvailablePlans($msisdn, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $pos_id, $show_shared_plans, $sub_retailer_id)

returns the available plans

**Access Restriction:** RETAILER  **Operation ID:** rtm::RetailManager::GetAvailablePlans  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans  **Additional Notes:**   the retailerId will be encoded in the access key and sent automatically with each request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\AddonResourcePoolingApi();
$msisdn = "msisdn_example"; // string | The phone number of the subscriber
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$pos_id = "pos_id_example"; // string | the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)
$sub_retailer_id = "sub_retailer_id_example"; // string | the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key)

try {
    $result = $api_instance->rtmRetailManagerGetAvailablePlans($msisdn, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $pos_id, $show_shared_plans, $sub_retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonResourcePoolingApi->rtmRetailManagerGetAvailablePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msisdn** | **string**| The phone number of the subscriber |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **pos_id** | **string**| the the ID identifying the point of sale e.g. a specific terminal, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]
 **sub_retailer_id** | **string**| the ID identifying the sub retailer e.g. a subsidiary company, can be used to track whoever authorized the transaction in more detail (the retailer ID will definitely be part of the transaction since it is encoded in the access key) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse**](../Model/GetAvailablePlansResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

