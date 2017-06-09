<?php
/**
 * EligibleOverdraftDetails
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
 * EligibleOverdraftDetails Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EligibleOverdraftDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EligibleOverdraftDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_id' => 'int',
        'currency_name' => 'string',
        'currency_unit_relation' => 'int',
        'eligible_amount' => 'int'
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
        'currency_id' => 'currencyId',
        'currency_name' => 'currencyName',
        'currency_unit_relation' => 'currencyUnitRelation',
        'eligible_amount' => 'eligibleAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'currency_id' => 'setCurrencyId',
        'currency_name' => 'setCurrencyName',
        'currency_unit_relation' => 'setCurrencyUnitRelation',
        'eligible_amount' => 'setEligibleAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'currency_id' => 'getCurrencyId',
        'currency_name' => 'getCurrencyName',
        'currency_unit_relation' => 'getCurrencyUnitRelation',
        'eligible_amount' => 'getEligibleAmount'
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
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['currency_name'] = isset($data['currency_name']) ? $data['currency_name'] : null;
        $this->container['currency_unit_relation'] = isset($data['currency_unit_relation']) ? $data['currency_unit_relation'] : null;
        $this->container['eligible_amount'] = isset($data['eligible_amount']) ? $data['eligible_amount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['currency_id'] === null) {
            $invalid_properties[] = "'currency_id' can't be null";
        }
        if ($this->container['currency_name'] === null) {
            $invalid_properties[] = "'currency_name' can't be null";
        }
        if ($this->container['currency_unit_relation'] === null) {
            $invalid_properties[] = "'currency_unit_relation' can't be null";
        }
        if ($this->container['eligible_amount'] === null) {
            $invalid_properties[] = "'eligible_amount' can't be null";
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

        if ($this->container['currency_id'] === null) {
            return false;
        }
        if ($this->container['currency_name'] === null) {
            return false;
        }
        if ($this->container['currency_unit_relation'] === null) {
            return false;
        }
        if ($this->container['eligible_amount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets currency_id
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     * @param int $currency_id the currencyId of the currency the amounts are represented in
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets currency_name
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->container['currency_name'];
    }

    /**
     * Sets currency_name
     * @param string $currency_name the currencyName the amounts are represented in
     * @return $this
     */
    public function setCurrencyName($currency_name)
    {
        $this->container['currency_name'] = $currency_name;

        return $this;
    }

    /**
     * Gets currency_unit_relation
     * @return int
     */
    public function getCurrencyUnitRelation()
    {
        return $this->container['currency_unit_relation'];
    }

    /**
     * Sets currency_unit_relation
     * @param int $currency_unit_relation the currencyUnitRelation, the value by which the amounts/fees need to be divided to get the natural representation<br> e.g. activationFee=500 (cents), currency=\"Euro\", currencyUnitRelation=100 (1 Euro = 100 cents) this would mean that the lateFee is 5€
     * @return $this
     */
    public function setCurrencyUnitRelation($currency_unit_relation)
    {
        $this->container['currency_unit_relation'] = $currency_unit_relation;

        return $this;
    }

    /**
     * Gets eligible_amount
     * @return int
     */
    public function getEligibleAmount()
    {
        return $this->container['eligible_amount'];
    }

    /**
     * Sets eligible_amount
     * @param int $eligible_amount the eligibleAmount the amount the subscription is eligible for
     * @return $this
     */
    public function setEligibleAmount($eligible_amount)
    {
        $this->container['eligible_amount'] = $eligible_amount;

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


