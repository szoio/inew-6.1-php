<?php
/**
 * SessionChargingRes
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
 * SessionChargingRes Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SessionChargingRes implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SessionChargingRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charged_accounts' => '\iNew\Rest6_1\Model\Account2[]',
        'uncharged_balance' => '\iNew\Rest6_1\Model\Account2',
        'uncharged_duration' => 'int'
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
        'charged_accounts' => 'chargedAccounts',
        'uncharged_balance' => 'unchargedBalance',
        'uncharged_duration' => 'unchargedDuration'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'charged_accounts' => 'setChargedAccounts',
        'uncharged_balance' => 'setUnchargedBalance',
        'uncharged_duration' => 'setUnchargedDuration'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'charged_accounts' => 'getChargedAccounts',
        'uncharged_balance' => 'getUnchargedBalance',
        'uncharged_duration' => 'getUnchargedDuration'
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
        $this->container['charged_accounts'] = isset($data['charged_accounts']) ? $data['charged_accounts'] : null;
        $this->container['uncharged_balance'] = isset($data['uncharged_balance']) ? $data['uncharged_balance'] : null;
        $this->container['uncharged_duration'] = isset($data['uncharged_duration']) ? $data['uncharged_duration'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['charged_accounts'] === null) {
            $invalid_properties[] = "'charged_accounts' can't be null";
        }
        if ($this->container['uncharged_balance'] === null) {
            $invalid_properties[] = "'uncharged_balance' can't be null";
        }
        if ($this->container['uncharged_duration'] === null) {
            $invalid_properties[] = "'uncharged_duration' can't be null";
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

        if ($this->container['charged_accounts'] === null) {
            return false;
        }
        if ($this->container['uncharged_balance'] === null) {
            return false;
        }
        if ($this->container['uncharged_duration'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets charged_accounts
     * @return \iNew\Rest6_1\Model\Account2[]
     */
    public function getChargedAccounts()
    {
        return $this->container['charged_accounts'];
    }

    /**
     * Sets charged_accounts
     * @param \iNew\Rest6_1\Model\Account2[] $charged_accounts the charged accounts
     * @return $this
     */
    public function setChargedAccounts($charged_accounts)
    {
        $this->container['charged_accounts'] = $charged_accounts;

        return $this;
    }

    /**
     * Gets uncharged_balance
     * @return \iNew\Rest6_1\Model\Account2
     */
    public function getUnchargedBalance()
    {
        return $this->container['uncharged_balance'];
    }

    /**
     * Sets uncharged_balance
     * @param \iNew\Rest6_1\Model\Account2 $uncharged_balance the balance uncharged
     * @return $this
     */
    public function setUnchargedBalance($uncharged_balance)
    {
        $this->container['uncharged_balance'] = $uncharged_balance;

        return $this;
    }

    /**
     * Gets uncharged_duration
     * @return int
     */
    public function getUnchargedDuration()
    {
        return $this->container['uncharged_duration'];
    }

    /**
     * Sets uncharged_duration
     * @param int $uncharged_duration the call duration that was not charged
     * @return $this
     */
    public function setUnchargedDuration($uncharged_duration)
    {
        $this->container['uncharged_duration'] = $uncharged_duration;

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


