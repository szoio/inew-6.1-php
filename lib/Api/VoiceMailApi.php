<?php
/**
 * VoiceMailApi
 * PHP version 5
 *
 * @category Class
 * @package  iNew\Rest6_1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Open REST API
 *
 * The Open REST API provides all available methods for integrators to access the I-New platform
 *
 * OpenAPI spec version: 6.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace iNew\Rest6_1\Api;

use \iNew\Rest6_1\ApiClient;
use \iNew\Rest6_1\ApiException;
use \iNew\Rest6_1\Configuration;
use \iNew\Rest6_1\ObjectSerializer;

/**
 * VoiceMailApi Class Doc Comment
 *
 * @category Class
 * @package  iNew\Rest6_1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoiceMailApi
{
    /**
     * API Client
     *
     * @var \iNew\Rest6_1\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \iNew\Rest6_1\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\iNew\Rest6_1\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \iNew\Rest6_1\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \iNew\Rest6_1\ApiClient $apiClient set the API client
     *
     * @return VoiceMailApi
     */
    public function setApiClient(\iNew\Rest6_1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation vmsSubscriberServiceGetSubscriberBoxState
     *
     * retrieves the voice mail box state
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\GetSubscriberBoxStateResponse
     */
    public function vmsSubscriberServiceGetSubscriberBoxState($customer_account_id, $subscription_id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->vmsSubscriberServiceGetSubscriberBoxStateWithHttpInfo($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation vmsSubscriberServiceGetSubscriberBoxStateWithHttpInfo
     *
     * retrieves the voice mail box state
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\GetSubscriberBoxStateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function vmsSubscriberServiceGetSubscriberBoxStateWithHttpInfo($customer_account_id, $subscription_id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling vmsSubscriberServiceGetSubscriberBoxState');
        }
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling vmsSubscriberServiceGetSubscriberBoxState');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($correlation_id !== null) {
            $headerParams['correlationId'] = $this->apiClient->getSerializer()->toHeaderValue($correlation_id);
        }
        // header params
        if ($transaction_id !== null) {
            $headerParams['transactionId'] = $this->apiClient->getSerializer()->toHeaderValue($transaction_id);
        }
        // header params
        if ($user !== null) {
            $headerParams['user'] = $this->apiClient->getSerializer()->toHeaderValue($user);
        }
        // path params
        if ($customer_account_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerAccountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_account_id),
                $resourcePath
            );
        }
        // path params
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscriptionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('accessKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['accessKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse',
                '/customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation vmsSubscriberServiceGetSubscriberBoxStateSubscription
     *
     * retrieves the voice mail box state
     *
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\GetSubscriberBoxStateResponse
     */
    public function vmsSubscriberServiceGetSubscriberBoxStateSubscription($subscription_id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->vmsSubscriberServiceGetSubscriberBoxStateSubscriptionWithHttpInfo($subscription_id, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation vmsSubscriberServiceGetSubscriberBoxStateSubscriptionWithHttpInfo
     *
     * retrieves the voice mail box state
     *
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\GetSubscriberBoxStateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function vmsSubscriberServiceGetSubscriberBoxStateSubscriptionWithHttpInfo($subscription_id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling vmsSubscriberServiceGetSubscriberBoxStateSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscriptionId}/voiceMail/state";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($correlation_id !== null) {
            $headerParams['correlationId'] = $this->apiClient->getSerializer()->toHeaderValue($correlation_id);
        }
        // header params
        if ($transaction_id !== null) {
            $headerParams['transactionId'] = $this->apiClient->getSerializer()->toHeaderValue($transaction_id);
        }
        // header params
        if ($user !== null) {
            $headerParams['user'] = $this->apiClient->getSerializer()->toHeaderValue($user);
        }
        // path params
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscriptionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('accessKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['accessKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse',
                '/subscriptions/{subscriptionId}/voiceMail/state'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation vmsSubscriberServiceSetSubscriberBoxState
     *
     * sets the voice mail box state
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $subscription_id the subscription id (required)
     * @param string $new_state ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.&lt;br&gt;SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.&lt;br&gt;NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\SetSubscriberBoxStateResponse
     */
    public function vmsSubscriberServiceSetSubscriberBoxState($customer_account_id, $subscription_id, $new_state, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->vmsSubscriberServiceSetSubscriberBoxStateWithHttpInfo($customer_account_id, $subscription_id, $new_state, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation vmsSubscriberServiceSetSubscriberBoxStateWithHttpInfo
     *
     * sets the voice mail box state
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $subscription_id the subscription id (required)
     * @param string $new_state ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.&lt;br&gt;SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.&lt;br&gt;NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\SetSubscriberBoxStateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function vmsSubscriberServiceSetSubscriberBoxStateWithHttpInfo($customer_account_id, $subscription_id, $new_state, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling vmsSubscriberServiceSetSubscriberBoxState');
        }
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling vmsSubscriberServiceSetSubscriberBoxState');
        }
        // verify the required parameter 'new_state' is set
        if ($new_state === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new_state when calling vmsSubscriberServiceSetSubscriberBoxState');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state/{newState}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($correlation_id !== null) {
            $headerParams['correlationId'] = $this->apiClient->getSerializer()->toHeaderValue($correlation_id);
        }
        // header params
        if ($transaction_id !== null) {
            $headerParams['transactionId'] = $this->apiClient->getSerializer()->toHeaderValue($transaction_id);
        }
        // header params
        if ($user !== null) {
            $headerParams['user'] = $this->apiClient->getSerializer()->toHeaderValue($user);
        }
        // path params
        if ($customer_account_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerAccountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_account_id),
                $resourcePath
            );
        }
        // path params
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscriptionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
                $resourcePath
            );
        }
        // path params
        if ($new_state !== null) {
            $resourcePath = str_replace(
                "{" . "newState" . "}",
                $this->apiClient->getSerializer()->toPathValue($new_state),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('accessKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['accessKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse',
                '/customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state/{newState}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation vmsSubscriberServiceSetSubscriberBoxStateSubscription
     *
     * sets the voice mail box state
     *
     * @param int $subscription_id the subscription id (required)
     * @param string $new_state ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.&lt;br&gt;SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.&lt;br&gt;NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\SetSubscriberBoxStateResponse
     */
    public function vmsSubscriberServiceSetSubscriberBoxStateSubscription($subscription_id, $new_state, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->vmsSubscriberServiceSetSubscriberBoxStateSubscriptionWithHttpInfo($subscription_id, $new_state, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation vmsSubscriberServiceSetSubscriberBoxStateSubscriptionWithHttpInfo
     *
     * sets the voice mail box state
     *
     * @param int $subscription_id the subscription id (required)
     * @param string $new_state ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.&lt;br&gt;SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.&lt;br&gt;NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\SetSubscriberBoxStateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function vmsSubscriberServiceSetSubscriberBoxStateSubscriptionWithHttpInfo($subscription_id, $new_state, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling vmsSubscriberServiceSetSubscriberBoxStateSubscription');
        }
        // verify the required parameter 'new_state' is set
        if ($new_state === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new_state when calling vmsSubscriberServiceSetSubscriberBoxStateSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscriptionId}/voiceMail/state/{newState}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($correlation_id !== null) {
            $headerParams['correlationId'] = $this->apiClient->getSerializer()->toHeaderValue($correlation_id);
        }
        // header params
        if ($transaction_id !== null) {
            $headerParams['transactionId'] = $this->apiClient->getSerializer()->toHeaderValue($transaction_id);
        }
        // header params
        if ($user !== null) {
            $headerParams['user'] = $this->apiClient->getSerializer()->toHeaderValue($user);
        }
        // path params
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscriptionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
                $resourcePath
            );
        }
        // path params
        if ($new_state !== null) {
            $resourcePath = str_replace(
                "{" . "newState" . "}",
                $this->apiClient->getSerializer()->toPathValue($new_state),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('accessKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['accessKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse',
                '/subscriptions/{subscriptionId}/voiceMail/state/{newState}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\RestError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
