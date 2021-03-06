<?php
/**
 * CurrencyType
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
 * CurrencyType Class Doc Comment
 *
 * @category    Class
 * @description &lt;p&gt; User: michael Date: Sep 22, 2009 Time: 12:38:34 PM &lt;/p&gt;
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CurrencyType implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CurrencyType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charging_unit' => '\iNew\Rest6_1\Model\CurrencyUnitType',
        'charging_unit_relation' => 'int',
        'group' => '\iNew\Rest6_1\Model\CurrencyGroup',
        'id' => 'int',
        'name' => 'string',
        'units' => '\iNew\Rest6_1\Model\CurrencyUnitType[]'
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
        'charging_unit' => 'chargingUnit',
        'charging_unit_relation' => 'chargingUnitRelation',
        'group' => 'group',
        'id' => 'id',
        'name' => 'name',
        'units' => 'units'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'charging_unit' => 'setChargingUnit',
        'charging_unit_relation' => 'setChargingUnitRelation',
        'group' => 'setGroup',
        'id' => 'setId',
        'name' => 'setName',
        'units' => 'setUnits'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'charging_unit' => 'getChargingUnit',
        'charging_unit_relation' => 'getChargingUnitRelation',
        'group' => 'getGroup',
        'id' => 'getId',
        'name' => 'getName',
        'units' => 'getUnits'
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
        $this->container['charging_unit'] = isset($data['charging_unit']) ? $data['charging_unit'] : null;
        $this->container['charging_unit_relation'] = isset($data['charging_unit_relation']) ? $data['charging_unit_relation'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['charging_unit'] === null) {
            $invalid_properties[] = "'charging_unit' can't be null";
        }
        if ($this->container['charging_unit_relation'] === null) {
            $invalid_properties[] = "'charging_unit_relation' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalid_properties[] = "'group' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['units'] === null) {
            $invalid_properties[] = "'units' can't be null";
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

        if ($this->container['charging_unit'] === null) {
            return false;
        }
        if ($this->container['charging_unit_relation'] === null) {
            return false;
        }
        if ($this->container['group'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['units'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets charging_unit
     * @return \iNew\Rest6_1\Model\CurrencyUnitType
     */
    public function getChargingUnit()
    {
        return $this->container['charging_unit'];
    }

    /**
     * Sets charging_unit
     * @param \iNew\Rest6_1\Model\CurrencyUnitType $charging_unit the currency unit with which charge amounts will be defined
     * @return $this
     */
    public function setChargingUnit($charging_unit)
    {
        $this->container['charging_unit'] = $charging_unit;

        return $this;
    }

    /**
     * Gets charging_unit_relation
     * @return int
     */
    public function getChargingUnitRelation()
    {
        return $this->container['charging_unit_relation'];
    }

    /**
     * Sets charging_unit_relation
     * @param int $charging_unit_relation the currency unit with which charge amounts will be defined
     * @return $this
     */
    public function setChargingUnitRelation($charging_unit_relation)
    {
        $this->container['charging_unit_relation'] = $charging_unit_relation;

        return $this;
    }

    /**
     * Gets group
     * @return \iNew\Rest6_1\Model\CurrencyGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param \iNew\Rest6_1\Model\CurrencyGroup $group a currency group to which this currency belongs to
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id a currency type unique id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name a currency type name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets units
     * @return \iNew\Rest6_1\Model\CurrencyUnitType[]
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     * @param \iNew\Rest6_1\Model\CurrencyUnitType[] $units a currency type units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

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


