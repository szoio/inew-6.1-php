<?php
/**
 * HistoryEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  iNew\Rest6_1
 * @author   Swaagger Codegen team
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

namespace iNew\Rest6_1\Model;

use \ArrayAccess;

/**
 * HistoryEvent Class Doc Comment
 *
 * @category    Class
 * @description The history event represents an entry in a subscriber&#39;s history.&lt;br&gt; It contains all relevant data to be search plus all additional details and charges set that occurred for that specific event.&lt;br&gt; The charges and details are stored in String representation; the ApiUtil class provides methods to deserialize these.&lt;br&gt;
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HistoryEvent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'HistoryEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charges' => '\iNew\Rest6_1\Model\Charge2[]',
        'customer_id' => 'int',
        'details' => '\iNew\Rest6_1\Model\AbstractDetails',
        'event_date' => '\DateTime',
        'operation' => 'string',
        'result_code' => 'string',
        'session_id' => 'string',
        'sub_type' => 'string',
        'subscription_id' => 'int',
        'type' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'charges' => 'charges',
        'customer_id' => 'customerId',
        'details' => 'details',
        'event_date' => 'eventDate',
        'operation' => 'operation',
        'result_code' => 'resultCode',
        'session_id' => 'sessionId',
        'sub_type' => 'subType',
        'subscription_id' => 'subscriptionId',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'charges' => 'setCharges',
        'customer_id' => 'setCustomerId',
        'details' => 'setDetails',
        'event_date' => 'setEventDate',
        'operation' => 'setOperation',
        'result_code' => 'setResultCode',
        'session_id' => 'setSessionId',
        'sub_type' => 'setSubType',
        'subscription_id' => 'setSubscriptionId',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'charges' => 'getCharges',
        'customer_id' => 'getCustomerId',
        'details' => 'getDetails',
        'event_date' => 'getEventDate',
        'operation' => 'getOperation',
        'result_code' => 'getResultCode',
        'session_id' => 'getSessionId',
        'sub_type' => 'getSubType',
        'subscription_id' => 'getSubscriptionId',
        'type' => 'getType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['charges'] = isset($data['charges']) ? $data['charges'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['sub_type'] = isset($data['sub_type']) ? $data['sub_type'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets charges
     * @return \iNew\Rest6_1\Model\Charge2[]
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     * @param \iNew\Rest6_1\Model\Charge2[] $charges the charge details
     * @return $this
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id the customerId ID
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets details
     * @return \iNew\Rest6_1\Model\AbstractDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param \iNew\Rest6_1\Model\AbstractDetails $details the details will contain different attributes depending on the type, those types are contained within the Swagger JSON definition but unfortunately not visible in Swagger UI
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets event_date
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     * @param \DateTime $event_date the event date
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets operation
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     * @param string $operation the operation
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets result_code
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     * @param string $result_code the result code
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets session_id
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     * @param string $session_id the session ID
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets sub_type
     * @return string
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     * @param string $sub_type the event subtype name
     * @return $this
     */
    public function setSubType($sub_type)
    {
        $this->container['sub_type'] = $sub_type;

        return $this;
    }

    /**
     * Gets subscription_id
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     * @param int $subscription_id the subscription ID
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type the event type name
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\iNew\Rest6_1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\iNew\Rest6_1\ObjectSerializer::sanitizeForSerialization($this));
    }
}


