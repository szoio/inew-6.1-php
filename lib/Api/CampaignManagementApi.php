<?php
/**
 * CampaignManagementApi
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
 * CampaignManagementApi Class Doc Comment
 *
 * @category Class
 * @package  iNew\Rest6_1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignManagementApi
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
     * @return CampaignManagementApi
     */
    public function setApiClient(\iNew\Rest6_1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation lcmCampaignManagementServiceAdd
     *
     * adds Subscriptions to the given campaign
     *
     * @param int $campaign_id the campaignId (required)
     * @param \iNew\Rest6_1\Model\StringList $msisdns the MSISDNs (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\CampaignModificationResponse
     */
    public function lcmCampaignManagementServiceAdd($campaign_id, $msisdns, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->lcmCampaignManagementServiceAddWithHttpInfo($campaign_id, $msisdns, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation lcmCampaignManagementServiceAddWithHttpInfo
     *
     * adds Subscriptions to the given campaign
     *
     * @param int $campaign_id the campaignId (required)
     * @param \iNew\Rest6_1\Model\StringList $msisdns the MSISDNs (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\CampaignModificationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function lcmCampaignManagementServiceAddWithHttpInfo($campaign_id, $msisdns, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_id when calling lcmCampaignManagementServiceAdd');
        }
        // verify the required parameter 'msisdns' is set
        if ($msisdns === null) {
            throw new \InvalidArgumentException('Missing the required parameter $msisdns when calling lcmCampaignManagementServiceAdd');
        }
        // parse inputs
        $resourcePath = "/campaigns/{campaignId}/addSubscriptions";
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
        if ($campaign_id !== null) {
            $resourcePath = str_replace(
                "{" . "campaignId" . "}",
                $this->apiClient->getSerializer()->toPathValue($campaign_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($msisdns)) {
            $_tempBody = $msisdns;
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
                '\iNew\Rest6_1\Model\CampaignModificationResponse',
                '/campaigns/{campaignId}/addSubscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\CampaignModificationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\CampaignModificationResponse', $e->getResponseHeaders());
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
     * Operation lcmCampaignManagementServiceRemove
     *
     * removes Subscriptions from the given campaign
     *
     * @param int $campaign_id the campaignId (required)
     * @param \iNew\Rest6_1\Model\StringList $msisdns the MSISDNs (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\CampaignModificationResponse
     */
    public function lcmCampaignManagementServiceRemove($campaign_id, $msisdns, $correlation_id = null, $transaction_id = null, $user = null)
    {
        list($response) = $this->lcmCampaignManagementServiceRemoveWithHttpInfo($campaign_id, $msisdns, $correlation_id, $transaction_id, $user);
        return $response;
    }

    /**
     * Operation lcmCampaignManagementServiceRemoveWithHttpInfo
     *
     * removes Subscriptions from the given campaign
     *
     * @param int $campaign_id the campaignId (required)
     * @param \iNew\Rest6_1\Model\StringList $msisdns the MSISDNs (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\CampaignModificationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function lcmCampaignManagementServiceRemoveWithHttpInfo($campaign_id, $msisdns, $correlation_id = null, $transaction_id = null, $user = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_id when calling lcmCampaignManagementServiceRemove');
        }
        // verify the required parameter 'msisdns' is set
        if ($msisdns === null) {
            throw new \InvalidArgumentException('Missing the required parameter $msisdns when calling lcmCampaignManagementServiceRemove');
        }
        // parse inputs
        $resourcePath = "/campaigns/{campaignId}/removeSubscriptions";
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
        if ($campaign_id !== null) {
            $resourcePath = str_replace(
                "{" . "campaignId" . "}",
                $this->apiClient->getSerializer()->toPathValue($campaign_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($msisdns)) {
            $_tempBody = $msisdns;
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
                '\iNew\Rest6_1\Model\CampaignModificationResponse',
                '/campaigns/{campaignId}/removeSubscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\CampaignModificationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\CampaignModificationResponse', $e->getResponseHeaders());
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
     * Operation lcmCampaignSearchServiceGet
     *
     * gets the campaigns available according to the given criteria
     *
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param string $campaign_type the campaignType (optional)
     * @param \DateTime $end_date the endDate (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param string $full_text the fullText (optional)
     * @param int $page the page requested (pagination) (optional)
     * @param \DateTime $start_date the startDate (optional)
     * @param string $status the status (optional)
     * @param string $trigger_type the triggerType (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\GetCampaignsResponse
     */
    public function lcmCampaignSearchServiceGet($correlation_id = null, $transaction_id = null, $user = null, $campaign_type = null, $end_date = null, $entities_per_page = null, $full_text = null, $page = null, $start_date = null, $status = null, $trigger_type = null)
    {
        list($response) = $this->lcmCampaignSearchServiceGetWithHttpInfo($correlation_id, $transaction_id, $user, $campaign_type, $end_date, $entities_per_page, $full_text, $page, $start_date, $status, $trigger_type);
        return $response;
    }

    /**
     * Operation lcmCampaignSearchServiceGetWithHttpInfo
     *
     * gets the campaigns available according to the given criteria
     *
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param string $campaign_type the campaignType (optional)
     * @param \DateTime $end_date the endDate (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param string $full_text the fullText (optional)
     * @param int $page the page requested (pagination) (optional)
     * @param \DateTime $start_date the startDate (optional)
     * @param string $status the status (optional)
     * @param string $trigger_type the triggerType (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\GetCampaignsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function lcmCampaignSearchServiceGetWithHttpInfo($correlation_id = null, $transaction_id = null, $user = null, $campaign_type = null, $end_date = null, $entities_per_page = null, $full_text = null, $page = null, $start_date = null, $status = null, $trigger_type = null)
    {
        // parse inputs
        $resourcePath = "/campaigns";
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
        if ($campaign_type !== null) {
            $queryParams['campaignType'] = $this->apiClient->getSerializer()->toQueryValue($campaign_type);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($entities_per_page !== null) {
            $queryParams['entitiesPerPage'] = $this->apiClient->getSerializer()->toQueryValue($entities_per_page);
        }
        // query params
        if ($full_text !== null) {
            $queryParams['fullText'] = $this->apiClient->getSerializer()->toQueryValue($full_text);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($trigger_type !== null) {
            $queryParams['triggerType'] = $this->apiClient->getSerializer()->toQueryValue($trigger_type);
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
                '\iNew\Rest6_1\Model\GetCampaignsResponse',
                '/campaigns'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\GetCampaignsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\GetCampaignsResponse', $e->getResponseHeaders());
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
     * Operation lcmCampaignSearchServiceGetEligible
     *
     * gets the campaigns the subscription is eligible for
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\GetCampaignsResponse
     */
    public function lcmCampaignSearchServiceGetEligible($customer_account_id, $subscription_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        list($response) = $this->lcmCampaignSearchServiceGetEligibleWithHttpInfo($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
        return $response;
    }

    /**
     * Operation lcmCampaignSearchServiceGetEligibleWithHttpInfo
     *
     * gets the campaigns the subscription is eligible for
     *
     * @param int $customer_account_id field used to represent the customer identifier, this request is intended for (required)
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\GetCampaignsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function lcmCampaignSearchServiceGetEligibleWithHttpInfo($customer_account_id, $subscription_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        // verify the required parameter 'customer_account_id' is set
        if ($customer_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_account_id when calling lcmCampaignSearchServiceGetEligible');
        }
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling lcmCampaignSearchServiceGetEligible');
        }
        // parse inputs
        $resourcePath = "/customers/{customerAccountId}/subscriptions/{subscriptionId}/campaigns";
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
                '\iNew\Rest6_1\Model\GetCampaignsResponse',
                '/customers/{customerAccountId}/subscriptions/{subscriptionId}/campaigns'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\GetCampaignsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\GetCampaignsResponse', $e->getResponseHeaders());
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
     * Operation lcmCampaignSearchServiceGetEligibleSubscription
     *
     * gets the campaigns the subscription is eligible for
     *
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return \iNew\Rest6_1\Model\GetCampaignsResponse
     */
    public function lcmCampaignSearchServiceGetEligibleSubscription($subscription_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        list($response) = $this->lcmCampaignSearchServiceGetEligibleSubscriptionWithHttpInfo($subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
        return $response;
    }

    /**
     * Operation lcmCampaignSearchServiceGetEligibleSubscriptionWithHttpInfo
     *
     * gets the campaigns the subscription is eligible for
     *
     * @param int $subscription_id the subscription id (required)
     * @param string $correlation_id the correlation ID, to match a response with this request (will be generated if not provided) (optional)
     * @param string $transaction_id the transaction ID, if this request is part of a transaction that needs to be traceable (optional)
     * @param string $user the user making the request (optional)
     * @param int $entities_per_page the number of entities that should be returned per page (pagination) (optional)
     * @param int $page the page requested (pagination) (optional)
     * @throws \iNew\Rest6_1\ApiException on non-2xx response
     * @return array of \iNew\Rest6_1\Model\GetCampaignsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function lcmCampaignSearchServiceGetEligibleSubscriptionWithHttpInfo($subscription_id, $correlation_id = null, $transaction_id = null, $user = null, $entities_per_page = null, $page = null)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling lcmCampaignSearchServiceGetEligibleSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscriptionId}/campaigns";
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
                '\iNew\Rest6_1\Model\GetCampaignsResponse',
                '/subscriptions/{subscriptionId}/campaigns'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\iNew\Rest6_1\Model\GetCampaignsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\iNew\Rest6_1\Model\GetCampaignsResponse', $e->getResponseHeaders());
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