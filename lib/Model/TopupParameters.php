<?php
/**
 * TopupParameters
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
 * TopupParameters Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TopupParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TopupParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'int',
        'external_voucher_id' => 'string',
        'external_voucher_series' => 'string',
        'pos_id' => 'string',
        'sub_distributor_id' => 'string',
        'unit_relation' => 'int'
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
        'amount' => 'amount',
        'external_voucher_id' => 'externalVoucherId',
        'external_voucher_series' => 'externalVoucherSeries',
        'pos_id' => 'posId',
        'sub_distributor_id' => 'subDistributorId',
        'unit_relation' => 'unitRelation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'external_voucher_id' => 'setExternalVoucherId',
        'external_voucher_series' => 'setExternalVoucherSeries',
        'pos_id' => 'setPosId',
        'sub_distributor_id' => 'setSubDistributorId',
        'unit_relation' => 'setUnitRelation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'external_voucher_id' => 'getExternalVoucherId',
        'external_voucher_series' => 'getExternalVoucherSeries',
        'pos_id' => 'getPosId',
        'sub_distributor_id' => 'getSubDistributorId',
        'unit_relation' => 'getUnitRelation'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['external_voucher_id'] = isset($data['external_voucher_id']) ? $data['external_voucher_id'] : null;
        $this->container['external_voucher_series'] = isset($data['external_voucher_series']) ? $data['external_voucher_series'] : null;
        $this->container['pos_id'] = isset($data['pos_id']) ? $data['pos_id'] : null;
        $this->container['sub_distributor_id'] = isset($data['sub_distributor_id']) ? $data['sub_distributor_id'] : null;
        $this->container['unit_relation'] = isset($data['unit_relation']) ? $data['unit_relation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['unit_relation'] === null) {
            $invalid_properties[] = "'unit_relation' can't be null";
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

        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['unit_relation'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount the amount subscriber wants to topup his main balance, it is always is smallest charging units of the monetary currency
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets external_voucher_id
     * @return string
     */
    public function getExternalVoucherId()
    {
        return $this->container['external_voucher_id'];
    }

    /**
     * Sets external_voucher_id
     * @param string $external_voucher_id In case some external voucher system is used this field can be used to forward the ID, for it to be recorded in the Topup Ticket
     * @return $this
     */
    public function setExternalVoucherId($external_voucher_id)
    {
        $this->container['external_voucher_id'] = $external_voucher_id;

        return $this;
    }

    /**
     * Gets external_voucher_series
     * @return string
     */
    public function getExternalVoucherSeries()
    {
        return $this->container['external_voucher_series'];
    }

    /**
     * Sets external_voucher_series
     * @param string $external_voucher_series In case some external voucher system is used this field can be used to forward the series ID the voucher belongs to, for it to be recorded in the Topup Ticket. In addition based on this series additional benefits can be configured within the system
     * @return $this
     */
    public function setExternalVoucherSeries($external_voucher_series)
    {
        $this->container['external_voucher_series'] = $external_voucher_series;

        return $this;
    }

    /**
     * Gets pos_id
     * @return string
     */
    public function getPosId()
    {
        return $this->container['pos_id'];
    }

    /**
     * Sets pos_id
     * @param string $pos_id represents a point of sale (POS) through which the topup is performed
     * @return $this
     */
    public function setPosId($pos_id)
    {
        $this->container['pos_id'] = $pos_id;

        return $this;
    }

    /**
     * Gets sub_distributor_id
     * @return string
     */
    public function getSubDistributorId()
    {
        return $this->container['sub_distributor_id'];
    }

    /**
     * Sets sub_distributor_id
     * @param string $sub_distributor_id represents a subdivision of topup integrator (e.g. store) through which the topup is performed
     * @return $this
     */
    public function setSubDistributorId($sub_distributor_id)
    {
        $this->container['sub_distributor_id'] = $sub_distributor_id;

        return $this;
    }

    /**
     * Gets unit_relation
     * @return int
     */
    public function getUnitRelation()
    {
        return $this->container['unit_relation'];
    }

    /**
     * Sets unit_relation
     * @param int $unit_relation the unit relation the amount needs to be divided by to get to the main currency standard unit, e.g. amount=104 unitRelation=10 and the main currency in the country is EURO, the topup would be for 10 EURO and 40 Cents
     * @return $this
     */
    public function setUnitRelation($unit_relation)
    {
        $this->container['unit_relation'] = $unit_relation;

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


