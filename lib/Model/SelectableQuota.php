<?php
/**
 * SelectableQuota
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
 * SelectableQuota Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SelectableQuota implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SelectableQuota';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bonus_message' => 'string',
        'bonus_threshold_amount' => 'int',
        'category' => 'string',
        'currency_id' => 'int',
        'currency_name' => 'string',
        'currency_unit_relation' => 'int',
        'range_max_amount' => 'int',
        'range_min_amount' => 'int',
        'selectable_max_amount' => 'int',
        'selectable_min_amount' => 'int',
        'shared' => 'bool'
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
        'bonus_message' => 'bonusMessage',
        'bonus_threshold_amount' => 'bonusThresholdAmount',
        'category' => 'category',
        'currency_id' => 'currencyId',
        'currency_name' => 'currencyName',
        'currency_unit_relation' => 'currencyUnitRelation',
        'range_max_amount' => 'rangeMaxAmount',
        'range_min_amount' => 'rangeMinAmount',
        'selectable_max_amount' => 'selectableMaxAmount',
        'selectable_min_amount' => 'selectableMinAmount',
        'shared' => 'shared'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bonus_message' => 'setBonusMessage',
        'bonus_threshold_amount' => 'setBonusThresholdAmount',
        'category' => 'setCategory',
        'currency_id' => 'setCurrencyId',
        'currency_name' => 'setCurrencyName',
        'currency_unit_relation' => 'setCurrencyUnitRelation',
        'range_max_amount' => 'setRangeMaxAmount',
        'range_min_amount' => 'setRangeMinAmount',
        'selectable_max_amount' => 'setSelectableMaxAmount',
        'selectable_min_amount' => 'setSelectableMinAmount',
        'shared' => 'setShared'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bonus_message' => 'getBonusMessage',
        'bonus_threshold_amount' => 'getBonusThresholdAmount',
        'category' => 'getCategory',
        'currency_id' => 'getCurrencyId',
        'currency_name' => 'getCurrencyName',
        'currency_unit_relation' => 'getCurrencyUnitRelation',
        'range_max_amount' => 'getRangeMaxAmount',
        'range_min_amount' => 'getRangeMinAmount',
        'selectable_max_amount' => 'getSelectableMaxAmount',
        'selectable_min_amount' => 'getSelectableMinAmount',
        'shared' => 'getShared'
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
        $this->container['bonus_message'] = isset($data['bonus_message']) ? $data['bonus_message'] : null;
        $this->container['bonus_threshold_amount'] = isset($data['bonus_threshold_amount']) ? $data['bonus_threshold_amount'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['currency_name'] = isset($data['currency_name']) ? $data['currency_name'] : null;
        $this->container['currency_unit_relation'] = isset($data['currency_unit_relation']) ? $data['currency_unit_relation'] : null;
        $this->container['range_max_amount'] = isset($data['range_max_amount']) ? $data['range_max_amount'] : null;
        $this->container['range_min_amount'] = isset($data['range_min_amount']) ? $data['range_min_amount'] : null;
        $this->container['selectable_max_amount'] = isset($data['selectable_max_amount']) ? $data['selectable_max_amount'] : null;
        $this->container['selectable_min_amount'] = isset($data['selectable_min_amount']) ? $data['selectable_min_amount'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalid_properties[] = "'currency_id' can't be null";
        }
        if ($this->container['currency_unit_relation'] === null) {
            $invalid_properties[] = "'currency_unit_relation' can't be null";
        }
        if ($this->container['range_max_amount'] === null) {
            $invalid_properties[] = "'range_max_amount' can't be null";
        }
        if ($this->container['range_min_amount'] === null) {
            $invalid_properties[] = "'range_min_amount' can't be null";
        }
        if ($this->container['shared'] === null) {
            $invalid_properties[] = "'shared' can't be null";
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

        if ($this->container['category'] === null) {
            return false;
        }
        if ($this->container['currency_id'] === null) {
            return false;
        }
        if ($this->container['currency_unit_relation'] === null) {
            return false;
        }
        if ($this->container['range_max_amount'] === null) {
            return false;
        }
        if ($this->container['range_min_amount'] === null) {
            return false;
        }
        if ($this->container['shared'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bonus_message
     * @return string
     */
    public function getBonusMessage()
    {
        return $this->container['bonus_message'];
    }

    /**
     * Sets bonus_message
     * @param string $bonus_message the bonusMessage
     * @return $this
     */
    public function setBonusMessage($bonus_message)
    {
        $this->container['bonus_message'] = $bonus_message;

        return $this;
    }

    /**
     * Gets bonus_threshold_amount
     * @return int
     */
    public function getBonusThresholdAmount()
    {
        return $this->container['bonus_threshold_amount'];
    }

    /**
     * Sets bonus_threshold_amount
     * @param int $bonus_threshold_amount the bonusThresholdAmount
     * @return $this
     */
    public function setBonusThresholdAmount($bonus_threshold_amount)
    {
        $this->container['bonus_threshold_amount'] = $bonus_threshold_amount;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category the category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param int $currency_id the currencyId
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
     * @param string $currency_name the currencyName
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
     * @param int $currency_unit_relation the currencyUnitRelation
     * @return $this
     */
    public function setCurrencyUnitRelation($currency_unit_relation)
    {
        $this->container['currency_unit_relation'] = $currency_unit_relation;

        return $this;
    }

    /**
     * Gets range_max_amount
     * @return int
     */
    public function getRangeMaxAmount()
    {
        return $this->container['range_max_amount'];
    }

    /**
     * Sets range_max_amount
     * @param int $range_max_amount the rangeMaxAmount
     * @return $this
     */
    public function setRangeMaxAmount($range_max_amount)
    {
        $this->container['range_max_amount'] = $range_max_amount;

        return $this;
    }

    /**
     * Gets range_min_amount
     * @return int
     */
    public function getRangeMinAmount()
    {
        return $this->container['range_min_amount'];
    }

    /**
     * Sets range_min_amount
     * @param int $range_min_amount the rangeMinAmount
     * @return $this
     */
    public function setRangeMinAmount($range_min_amount)
    {
        $this->container['range_min_amount'] = $range_min_amount;

        return $this;
    }

    /**
     * Gets selectable_max_amount
     * @return int
     */
    public function getSelectableMaxAmount()
    {
        return $this->container['selectable_max_amount'];
    }

    /**
     * Sets selectable_max_amount
     * @param int $selectable_max_amount the selectableMaxAmount
     * @return $this
     */
    public function setSelectableMaxAmount($selectable_max_amount)
    {
        $this->container['selectable_max_amount'] = $selectable_max_amount;

        return $this;
    }

    /**
     * Gets selectable_min_amount
     * @return int
     */
    public function getSelectableMinAmount()
    {
        return $this->container['selectable_min_amount'];
    }

    /**
     * Sets selectable_min_amount
     * @param int $selectable_min_amount the selectableMinAmount
     * @return $this
     */
    public function setSelectableMinAmount($selectable_min_amount)
    {
        $this->container['selectable_min_amount'] = $selectable_min_amount;

        return $this;
    }

    /**
     * Gets shared
     * @return bool
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     * @param bool $shared
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

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

