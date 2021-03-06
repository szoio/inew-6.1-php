<?php
/**
 * SearchApi
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
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  iNew\Rest6_1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
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
     * @return SearchApi
     */
    public function setApiClient(\iNew\Rest6_1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation crceSubscriberSearch
     *
     * searches for a subscription
     *
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param string $external_id the externalId (optional)
     * @param string $iccid the iccid (optional)
     * @param string $imei the imei (optional)
     * @param string $imsi the imsi (optional)
     * @param string $msisdn the msisdn (optional)
     * @param int $subscription_id the subscriptionId (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\SearchResponse
     */
    public function crceSubscriberSearch($correlation_id = null, $transaction_id = null, $user = null, $external_id = null, $iccid = null, $imei = null, $imsi = null, $msisdn = null, $subscription_id = null)
    {
        list($response) = $this->crceSubscriberSearchWithHttpInfo($correlation_id, $transaction_id, $user, $external_id, $iccid, $imei, $imsi, $msisdn, $subscription_id);
        return $response;
    }

    /**
     * Operation crceSubscriberSearchWithHttpInfo
     *
     * searches for a subscription
     *
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param string $external_id the externalId (optional)
     * @param string $iccid the iccid (optional)
     * @param string $imei the imei (optional)
     * @param string $imsi the imsi (optional)
     * @param string $msisdn the msisdn (optional)
     * @param int $subscription_id the subscriptionId (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\SearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function crceSubscriberSearchWithHttpInfo($correlation_id = null, $transaction_id = null, $user = null, $external_id = null, $iccid = null, $imei = null, $imsi = null, $msisdn = null, $subscription_id = null)
    {
        // parse inputs
        $resourcePath = "/subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($external_id !== null) {
            $queryParams['externalId'] = $this->apiClient->getSerializer()->toQueryValue($external_id);
        }
        // query params
        if ($iccid !== null) {
            $queryParams['iccid'] = $this->apiClient->getSerializer()->toQueryValue($iccid);
        }
        // query params
        if ($imei !== null) {
            $queryParams['imei'] = $this->apiClient->getSerializer()->toQueryValue($imei);
        }
        // query params
        if ($imsi !== null) {
            $queryParams['imsi'] = $this->apiClient->getSerializer()->toQueryValue($imsi);
        }
        // query params
        if ($msisdn !== null) {
            $queryParams['msisdn'] = $this->apiClient->getSerializer()->toQueryValue($msisdn);
        }
        // query params
        if ($subscription_id !== null) {
            $queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscription_id);
        }
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
                '\iNew\Rest6_1\Model\SearchResponse',
                '/subscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\SearchResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\SearchResponse', $e->getResponseHeaders());
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
     * Operation crceSubscriberSearchByCustomer
     *
     * searches for subscription for the given customer
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\SearchByCustomerResponse
     */
    public function crceSubscriberSearchByCustomer($customer_account_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        list($response) = $this->crceSubscriberSearchByCustomerWithHttpInfo($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
        return $response;
    }

    /**
     * Operation crceSubscriberSearchByCustomerWithHttpInfo
     *
     * searches for subscription for the given customer
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\SearchByCustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function crceSubscriberSearchByCustomerWithHttpInfo($customer_account_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling crceSubscriberSearchByCustomer');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($entities_per_page !== null) {
            $queryParams['entitiesPerPage'] = $this->apiClient->getSerializer()->toQueryValue($entities_per_page);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
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
                '\iNew\Rest6_1\Model\SearchByCustomerResponse',
                '/customers/{customerAccountId}/subscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\SearchByCustomerResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\SearchByCustomerResponse', $e->getResponseHeaders());
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
