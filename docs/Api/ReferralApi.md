# iNew\Rest6_1\ReferralApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**referralReferralServiceAssign**](ReferralApi.md#referralReferralServiceAssign) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals/assignCode | Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)
[**referralReferralServiceAssignSubscription**](ReferralApi.md#referralReferralServiceAssignSubscription) | **POST** /subscriptions/{subscriptionId}/referrals/assignCode | Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)
[**referralReferralServiceGetStatus**](ReferralApi.md#referralReferralServiceGetStatus) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals | queries the status of the subscription&#39;s referrals, such as its expire date and current amount of usages
[**referralReferralServiceGetStatusByCode**](ReferralApi.md#referralReferralServiceGetStatusByCode) | **GET** /referrals/{referralCode} | Queries the status of the given referral code such as its expire date and current amount of usages
[**referralReferralServiceGetStatusSubscription**](ReferralApi.md#referralReferralServiceGetStatusSubscription) | **GET** /subscriptions/{subscriptionId}/referrals | queries the status of the subscription&#39;s referrals, such as its expire date and current amount of usages
[**referralReferralServiceRedeem**](ReferralApi.md#referralReferralServiceRedeem) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals/redeemCode/{referralCode} | Validates the provided referral code and rewards the referral code user and owner
[**referralReferralServiceRedeemSubscription**](ReferralApi.md#referralReferralServiceRedeemSubscription) | **POST** /subscriptions/{subscriptionId}/referrals/redeemCode/{referralCode} | Validates the provided referral code and rewards the referral code user and owner
[**referralReferralServiceResend**](ReferralApi.md#referralReferralServiceResend) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals/resendCode | Resends already assigned referral code to the owner via preferred type of notification (SMS or email)
[**referralReferralServiceResendSubscription**](ReferralApi.md#referralReferralServiceResendSubscription) | **POST** /subscriptions/{subscriptionId}/referrals/resendCode | Resends already assigned referral code to the owner via preferred type of notification (SMS or email)


# **referralReferralServiceAssign**
> \iNew\Rest6_1\Model\ReferralCodeResponse referralReferralServiceAssign($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::Assign  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceAssign($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceAssign: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\ReferralCodeResponse**](../Model/ReferralCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceAssignSubscription**
> \iNew\Rest6_1\Model\ReferralCodeResponse referralReferralServiceAssignSubscription($subscription_id, $correlation_id, $transaction_id, $user)

Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::AssignSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>referral::ReferralService::AssignSubscription</b><br/>It is recommended rather to use <b>referral::ReferralService::AssignSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceAssignSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceAssignSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\ReferralCodeResponse**](../Model/ReferralCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceGetStatus**
> \iNew\Rest6_1\Model\ReferralStatusResponse referralReferralServiceGetStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

queries the status of the subscription's referrals, such as its expire date and current amount of usages

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::GetStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   queries the status of the subscription's referrals, such as its expire date and current amount of usages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceGetStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceGetStatus: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\ReferralStatusResponse**](../Model/ReferralStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceGetStatusByCode**
> \iNew\Rest6_1\Model\ReferralStatusResponse referralReferralServiceGetStatusByCode($referral_code, $correlation_id, $transaction_id, $user)

Queries the status of the given referral code such as its expire date and current amount of usages

**Access Restriction:** CRM  **Operation ID:** referral::ReferralService::GetStatusByCode  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Queries the status of the given referral code such as its expire date and current amount of usages  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>referral::ReferralService::GetStatusByCode</b><br/>It is recommended rather to use <b>referral::ReferralService::GetStatusByCode</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$referral_code = "referral_code_example"; // string | the referral code
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceGetStatusByCode($referral_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceGetStatusByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referral_code** | **string**| the referral code |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ReferralStatusResponse**](../Model/ReferralStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceGetStatusSubscription**
> \iNew\Rest6_1\Model\ReferralStatusResponse referralReferralServiceGetStatusSubscription($subscription_id, $correlation_id, $transaction_id, $user)

queries the status of the subscription's referrals, such as its expire date and current amount of usages

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::GetStatusSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   queries the status of the subscription's referrals, such as its expire date and current amount of usages  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>referral::ReferralService::GetStatusSubscription</b><br/>It is recommended rather to use <b>referral::ReferralService::GetStatusSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceGetStatusSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceGetStatusSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\ReferralStatusResponse**](../Model/ReferralStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceRedeem**
> \iNew\Rest6_1\Model\ReferralRewardResponse referralReferralServiceRedeem($customer_account_id, $subscription_id, $referral_code, $correlation_id, $transaction_id, $user)

Validates the provided referral code and rewards the referral code user and owner

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::Redeem  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Validates the provided referral code and rewards the referral code user and owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$referral_code = "referral_code_example"; // string | the referral code
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceRedeem($customer_account_id, $subscription_id, $referral_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceRedeem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **referral_code** | **string**| the referral code |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ReferralRewardResponse**](../Model/ReferralRewardResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceRedeemSubscription**
> \iNew\Rest6_1\Model\ReferralRewardResponse referralReferralServiceRedeemSubscription($subscription_id, $referral_code, $correlation_id, $transaction_id, $user)

Validates the provided referral code and rewards the referral code user and owner

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::RedeemSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Validates the provided referral code and rewards the referral code user and owner  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>referral::ReferralService::RedeemSubscription</b><br/>It is recommended rather to use <b>referral::ReferralService::RedeemSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$subscription_id = 789; // int | the subscription id
$referral_code = "referral_code_example"; // string | the referral code
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceRedeemSubscription($subscription_id, $referral_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceRedeemSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| the subscription id |
 **referral_code** | **string**| the referral code |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ReferralRewardResponse**](../Model/ReferralRewardResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceResend**
> \iNew\Rest6_1\Model\ReferralCodeResponse referralReferralServiceResend($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Resends already assigned referral code to the owner via preferred type of notification (SMS or email)

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::Resend  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Resends already assigned referral code to the owner via preferred type of notification (SMS or email)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceResend($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceResend: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\ReferralCodeResponse**](../Model/ReferralCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceResendSubscription**
> \iNew\Rest6_1\Model\ReferralCodeResponse referralReferralServiceResendSubscription($subscription_id, $correlation_id, $transaction_id, $user)

Resends already assigned referral code to the owner via preferred type of notification (SMS or email)

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::ResendSubscription  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Resends already assigned referral code to the owner via preferred type of notification (SMS or email)  **Additional Notes:**   This operation is a shortcut (without <i>customerAccountId</i>) for <b>referral::ReferralService::ResendSubscription</b><br/>It is recommended rather to use <b>referral::ReferralService::ResendSubscription</b>, in case the client knows the <i>customerAccountId</i>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\ReferralApi();
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceResendSubscription($subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->referralReferralServiceResendSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\iNew\Rest6_1\Model\ReferralCodeResponse**](../Model/ReferralCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

