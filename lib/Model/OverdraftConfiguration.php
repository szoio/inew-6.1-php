<?php
/**
 * OverdraftConfiguration
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
 * OverdraftConfiguration Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OverdraftConfiguration implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OverdraftConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activation_fee' => 'int',
        'after_grace_period_fee' => 'int',
        'currency_id' => 'int',
        'currency_name' => 'string',
        'currency_unit_relation' => 'int',
        'from_amount' => 'int',
        'grace_period' => 'int',
        'to_amount' => 'int'
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
        'activation_fee' => 'activationFee',
        'after_grace_period_fee' => 'afterGracePeriodFee',
        'currency_id' => 'currencyId',
        'currency_name' => 'currencyName',
        'currency_unit_relation' => 'currencyUnitRelation',
        'from_amount' => 'fromAmount',
        'grace_period' => 'gracePeriod',
        'to_amount' => 'toAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'activation_fee' => 'setActivationFee',
        'after_grace_period_fee' => 'setAfterGracePeriodFee',
        'currency_id' => 'setCurrencyId',
        'currency_name' => 'setCurrencyName',
        'currency_unit_relation' => 'setCurrencyUnitRelation',
        'from_amount' => 'setFromAmount',
        'grace_period' => 'setGracePeriod',
        'to_amount' => 'setToAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'activation_fee' => 'getActivationFee',
        'after_grace_period_fee' => 'getAfterGracePeriodFee',
        'currency_id' => 'getCurrencyId',
        'currency_name' => 'getCurrencyName',
        'currency_unit_relation' => 'getCurrencyUnitRelation',
        'from_amount' => 'getFromAmount',
        'grace_period' => 'getGracePeriod',
        'to_amount' => 'getToAmount'
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
        $this->container['activation_fee'] = isset($data['activation_fee']) ? $data['activation_fee'] : null;
        $this->container['after_grace_period_fee'] = isset($data['after_grace_period_fee']) ? $data['after_grace_period_fee'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['currency_name'] = isset($data['currency_name']) ? $data['currency_name'] : null;
        $this->container['currency_unit_relation'] = isset($data['currency_unit_relation']) ? $data['currency_unit_relation'] : null;
        $this->container['from_amount'] = isset($data['from_amount']) ? $data['from_amount'] : null;
        $this->container['grace_period'] = isset($data['grace_period']) ? $data['grace_period'] : null;
        $this->container['to_amount'] = isset($data['to_amount']) ? $data['to_amount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['activation_fee'] === null) {
            $invalid_properties[] = "'activation_fee' can't be null";
        }
        if ($this->container['after_grace_period_fee'] === null) {
            $invalid_properties[] = "'after_grace_period_fee' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalid_properties[] = "'currency_id' can't be null";
        }
        if ($this->container['currency_name'] === null) {
            $invalid_properties[] = "'currency_name' can't be null";
        }
        if ($this->container['currency_unit_relation'] === null) {
            $invalid_properties[] = "'currency_unit_relation' can't be null";
        }
        if ($this->container['from_amount'] === null) {
            $invalid_properties[] = "'from_amount' can't be null";
        }
        if ($this->container['grace_period'] === null) {
            $invalid_properties[] = "'grace_period' can't be null";
        }
        if ($this->container['to_amount'] === null) {
            $invalid_properties[] = "'to_amount' can't be null";
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

        if ($this->container['activation_fee'] === null) {
            return false;
        }
        if ($this->container['after_grace_period_fee'] === null) {
            return false;
        }
        if ($this->container['currency_id'] === null) {
            return false;
        }
        if ($this->container['currency_name'] === null) {
            return false;
        }
        if ($this->container['currency_unit_relation'] === null) {
            return false;
        }
        if ($this->container['from_amount'] === null) {
            return false;
        }
        if ($this->container['grace_period'] === null) {
            return false;
        }
        if ($this->container['to_amount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets activation_fee
     * @return int
     */
    public function getActivationFee()
    {
        return $this->container['activation_fee'];
    }

    /**
     * Sets activation_fee
     * @param int $activation_fee the activation fee that the subscription owes when the overdraft functionality is activated
     * @return $this
     */
    public function setActivationFee($activation_fee)
    {
        $this->container['activation_fee'] = $activation_fee;

        return $this;
    }

    /**
     * Gets after_grace_period_fee
     * @return int
     */
    public function getAfterGracePeriodFee()
    {
        return $this->container['after_grace_period_fee'];
    }

    /**
     * Sets after_grace_period_fee
     * @param int $after_grace_period_fee the additional late fee in case overdraft is not paid back by topups within the grace period
     * @return $this
     */
    public function setAfterGracePeriodFee($after_grace_period_fee)
    {
        $this->container['after_grace_period_fee'] = $after_grace_period_fee;

        return $this;
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
     * Gets from_amount
     * @return int
     */
    public function getFromAmount()
    {
        return $this->container['from_amount'];
    }

    /**
     * Sets from_amount
     * @param int $from_amount the lower range this configuration is intended for
     * @return $this
     */
    public function setFromAmount($from_amount)
    {
        $this->container['from_amount'] = $from_amount;

        return $this;
    }

    /**
     * Gets grace_period
     * @return int
     */
    public function getGracePeriod()
    {
        return $this->container['grace_period'];
    }

    /**
     * Sets grace_period
     * @param int $grace_period the grace period in which no additional fees have to be paid if overdraft is paid back (in hours)
     * @return $this
     */
    public function setGracePeriod($grace_period)
    {
        $this->container['grace_period'] = $grace_period;

        return $this;
    }

    /**
     * Gets to_amount
     * @return int
     */
    public function getToAmount()
    {
        return $this->container['to_amount'];
    }

    /**
     * Sets to_amount
     * @param int $to_amount the upper range this configuration is intended for
     * @return $this
     */
    public function setToAmount($to_amount)
    {
        $this->container['to_amount'] = $to_amount;

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


