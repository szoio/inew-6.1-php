<?php
/**
 * OnlinePaymentMethodApi
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
 * OnlinePaymentMethodApi Class Doc Comment
 *
 * @category Class
 * @package  iNew\Rest6_1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OnlinePaymentMethodApi
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
     * @return OnlinePaymentMethodApi
     */
    public function setApiClient(\iNew\Rest6_1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation ucpPaymentMethodCreate
     *
     * creates a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param \iNew\Rest6_1\Model\CreditCardMethodCreate $payment_method_details the payment method details (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\CreatePaymentMethodResponse
     */
    public function ucpPaymentMethodCreate($customer_account_id, $payment_method_details, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->ucpPaymentMethodCreateWithHttpInfo($customer_account_id, $payment_method_details, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation ucpPaymentMethodCreateWithHttpInfo
     *
     * creates a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param \iNew\Rest6_1\Model\CreditCardMethodCreate $payment_method_details the payment method details (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\CreatePaymentMethodResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function ucpPaymentMethodCreateWithHttpInfo($customer_account_id, $payment_method_details, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling ucpPaymentMethodCreate');
        }
        // verify the required parameter 'payment_method_details' is set
        if ($payment_method_details === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method_details when calling ucpPaymentMethodCreate');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/onlinePaymentMethods/creditCards";
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
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($payment_method_details)) {
            $_tempBody = $payment_method_details;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\iNew\Rest6_1\Model\CreatePaymentMethodResponse',
                '/customers/{customerAccountId}/onlinePaymentMethods/creditCards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\CreatePaymentMethodResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\CreatePaymentMethodResponse', $e->getResponseHeaders());
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
     * Operation ucpPaymentMethodDelete
     *
     * deletes a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $id the payment method details ID (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\DeletePaymentMethodResponse
     */
    public function ucpPaymentMethodDelete($customer_account_id, $id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->ucpPaymentMethodDeleteWithHttpInfo($customer_account_id, $id, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation ucpPaymentMethodDeleteWithHttpInfo
     *
     * deletes a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $id the payment method details ID (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\DeletePaymentMethodResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function ucpPaymentMethodDeleteWithHttpInfo($customer_account_id, $id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling ucpPaymentMethodDelete');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ucpPaymentMethodDelete');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\iNew\Rest6_1\Model\DeletePaymentMethodResponse',
                '/customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\DeletePaymentMethodResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\DeletePaymentMethodResponse', $e->getResponseHeaders());
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
     * Operation ucpPaymentMethodGet
     *
     * gets a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $id the payment method details ID (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\GetPaymentMethodResponse
     */
    public function ucpPaymentMethodGet($customer_account_id, $id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->ucpPaymentMethodGetWithHttpInfo($customer_account_id, $id, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation ucpPaymentMethodGetWithHttpInfo
     *
     * gets a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $id the payment method details ID (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\GetPaymentMethodResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function ucpPaymentMethodGetWithHttpInfo($customer_account_id, $id, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling ucpPaymentMethodGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ucpPaymentMethodGet');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\iNew\Rest6_1\Model\GetPaymentMethodResponse',
                '/customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\GetPaymentMethodResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\GetPaymentMethodResponse', $e->getResponseHeaders());
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
     * Operation ucpPaymentMethodSearch
     *
     * searches for credit card payment methods
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\GetPaymentMethodsResponse
     */
    public function ucpPaymentMethodSearch($customer_account_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        list($response) = $this->ucpPaymentMethodSearchWithHttpInfo($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
        return $response;
    }

    /**
     * Operation ucpPaymentMethodSearchWithHttpInfo
     *
     * searches for credit card payment methods
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\GetPaymentMethodsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function ucpPaymentMethodSearchWithHttpInfo($customer_account_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling ucpPaymentMethodSearch');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/onlinePaymentMethods/creditCards";
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
                '\iNew\Rest6_1\Model\GetPaymentMethodsResponse',
                '/customers/{customerAccountId}/onlinePaymentMethods/creditCards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\GetPaymentMethodsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\GetPaymentMethodsResponse', $e->getResponseHeaders());
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
     * Operation ucpPaymentMethodUpdate
     *
     * updates a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $id null (required)
     * @param \iNew\Rest6_1\Model\CreditCardMethodUpdate $payment_method_details the payment method details (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\UpdatePaymentMethodResponse
     */
    public function ucpPaymentMethodUpdate($customer_account_id, $id, $payment_method_details, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->ucpPaymentMethodUpdateWithHttpInfo($customer_account_id, $id, $payment_method_details, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation ucpPaymentMethodUpdateWithHttpInfo
     *
     * updates a credit card payment method
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $id null (required)
     * @param \iNew\Rest6_1\Model\CreditCardMethodUpdate $payment_method_details the payment method details (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\UpdatePaymentMethodResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function ucpPaymentMethodUpdateWithHttpInfo($customer_account_id, $id, $payment_method_details, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling ucpPaymentMethodUpdate');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ucpPaymentMethodUpdate');
        }
        // verify the required parameter 'payment_method_details' is set
        if ($payment_method_details === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method_details when calling ucpPaymentMethodUpdate');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($payment_method_details)) {
            $_tempBody = $payment_method_details;
        }

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
                '\iNew\Rest6_1\Model\UpdatePaymentMethodResponse',
                '/customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\UpdatePaymentMethodResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\UpdatePaymentMethodResponse', $e->getResponseHeaders());
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