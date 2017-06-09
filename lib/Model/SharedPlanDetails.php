<?php
/**
 * SharedPlanDetails
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
 * SharedPlanDetails Class Doc Comment
 *
 * @category    Class
 * @description Common class with all properties specific for shared plans
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SharedPlanDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SharedPlanDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_subscriber_fee' => '\iNew\Rest6_1\Model\Charge4',
        'add_subscriber_quota' => '\iNew\Rest6_1\Model\QuotaType1[]',
        'number_of_free_subscribers' => 'int'
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
        'add_subscriber_fee' => 'addSubscriberFee',
        'add_subscriber_quota' => 'addSubscriberQuota',
        'number_of_free_subscribers' => 'numberOfFreeSubscribers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'add_subscriber_fee' => 'setAddSubscriberFee',
        'add_subscriber_quota' => 'setAddSubscriberQuota',
        'number_of_free_subscribers' => 'setNumberOfFreeSubscribers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'add_subscriber_fee' => 'getAddSubscriberFee',
        'add_subscriber_quota' => 'getAddSubscriberQuota',
        'number_of_free_subscribers' => 'getNumberOfFreeSubscribers'
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
        $this->container['add_subscriber_fee'] = isset($data['add_subscriber_fee']) ? $data['add_subscriber_fee'] : null;
        $this->container['add_subscriber_quota'] = isset($data['add_subscriber_quota']) ? $data['add_subscriber_quota'] : null;
        $this->container['number_of_free_subscribers'] = isset($data['number_of_free_subscribers']) ? $data['number_of_free_subscribers'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['add_subscriber_fee'] === null) {
            $invalid_properties[] = "'add_subscriber_fee' can't be null";
        }
        if ($this->container['add_subscriber_quota'] === null) {
            $invalid_properties[] = "'add_subscriber_quota' can't be null";
        }
        if ($this->container['number_of_free_subscribers'] === null) {
            $invalid_properties[] = "'number_of_free_subscribers' can't be null";
        }
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

        if ($this->container['add_subscriber_fee'] === null) {
            return false;
        }
        if ($this->container['add_subscriber_quota'] === null) {
            return false;
        }
        if ($this->container['number_of_free_subscribers'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets add_subscriber_fee
     * @return \iNew\Rest6_1\Model\Charge4
     */
    public function getAddSubscriberFee()
    {
        return $this->container['add_subscriber_fee'];
    }

    /**
     * Sets add_subscriber_fee
     * @param \iNew\Rest6_1\Model\Charge4 $add_subscriber_fee periodic add-on fee added to the periodic base fee of the plan for each new user in the pool which is over the limit of users available to share resources of sponsor for the base fee
     * @return $this
     */
    public function setAddSubscriberFee($add_subscriber_fee)
    {
        $this->container['add_subscriber_fee'] = $add_subscriber_fee;

        return $this;
    }

    /**
     * Gets add_subscriber_quota
     * @return \iNew\Rest6_1\Model\QuotaType1[]
     */
    public function getAddSubscriberQuota()
    {
        return $this->container['add_subscriber_quota'];
    }

    /**
     * Sets add_subscriber_quota
     * @param \iNew\Rest6_1\Model\QuotaType1[] $add_subscriber_quota add-on shared accounts added to the shared resources for each new user in the pool which is over the limit of users available to share resources of sponsor for the base fee
     * @return $this
     */
    public function setAddSubscriberQuota($add_subscriber_quota)
    {
        $this->container['add_subscriber_quota'] = $add_subscriber_quota;

        return $this;
    }

    /**
     * Gets number_of_free_subscribers
     * @return int
     */
    public function getNumberOfFreeSubscribers()
    {
        return $this->container['number_of_free_subscribers'];
    }

    /**
     * Sets number_of_free_subscribers
     * @param int $number_of_free_subscribers maximum number of subscribers which can use the shared resources and are included in periodic base fee subscriber pays for the plan
     * @return $this
     */
    public function setNumberOfFreeSubscribers($number_of_free_subscribers)
    {
        $this->container['number_of_free_subscribers'] = $number_of_free_subscribers;

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


