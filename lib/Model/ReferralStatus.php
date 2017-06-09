<?php
/**
 * ReferralStatus
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
 * ReferralStatus Class Doc Comment
 *
 * @category    Class
 * @description Defines the current status of the referral code including how many times it has been used and when is the expire date
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReferralStatus implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ReferralStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_usage' => 'int',
        'expired' => 'bool',
        'expiry_date' => '\DateTime',
        'ref_code' => '\iNew\Rest6_1\Model\ReferralCodeInfo'
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
        'current_usage' => 'currentUsage',
        'expired' => 'expired',
        'expiry_date' => 'expiryDate',
        'ref_code' => 'refCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'current_usage' => 'setCurrentUsage',
        'expired' => 'setExpired',
        'expiry_date' => 'setExpiryDate',
        'ref_code' => 'setRefCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'current_usage' => 'getCurrentUsage',
        'expired' => 'getExpired',
        'expiry_date' => 'getExpiryDate',
        'ref_code' => 'getRefCode'
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
        $this->container['current_usage'] = isset($data['current_usage']) ? $data['current_usage'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['ref_code'] = isset($data['ref_code']) ? $data['ref_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['current_usage'] === null) {
            $invalid_properties[] = "'current_usage' can't be null";
        }
        if ($this->container['expired'] === null) {
            $invalid_properties[] = "'expired' can't be null";
        }
        if ($this->container['expiry_date'] === null) {
            $invalid_properties[] = "'expiry_date' can't be null";
        }
        if ($this->container['ref_code'] === null) {
            $invalid_properties[] = "'ref_code' can't be null";
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

        if ($this->container['current_usage'] === null) {
            return false;
        }
        if ($this->container['expired'] === null) {
            return false;
        }
        if ($this->container['expiry_date'] === null) {
            return false;
        }
        if ($this->container['ref_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets current_usage
     * @return int
     */
    public function getCurrentUsage()
    {
        return $this->container['current_usage'];
    }

    /**
     * Sets current_usage
     * @param int $current_usage Referral code usage count
     * @return $this
     */
    public function setCurrentUsage($current_usage)
    {
        $this->container['current_usage'] = $current_usage;

        return $this;
    }

    /**
     * Gets expired
     * @return bool
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     * @param bool $expired a boolean indicating if this referral code already expired
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets expiry_date
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     * @param \DateTime $expiry_date Referral code expire date
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets ref_code
     * @return \iNew\Rest6_1\Model\ReferralCodeInfo
     */
    public function getRefCode()
    {
        return $this->container['ref_code'];
    }

    /**
     * Sets ref_code
     * @param \iNew\Rest6_1\Model\ReferralCodeInfo $ref_code Referral code details
     * @return $this
     */
    public function setRefCode($ref_code)
    {
        $this->container['ref_code'] = $ref_code;

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

