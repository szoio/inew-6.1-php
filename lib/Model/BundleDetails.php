<?php
/**
 * BundleDetails
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
 * BundleDetails Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BundleDetails extends AbstractDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BundleDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activation_date' => '\DateTime',
        'code' => 'string',
        'group' => 'string',
        'name' => 'string',
        'opp_id' => 'int',
        'renewal_date' => '\DateTime'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'activation_date' => 'activationDate',
        'code' => 'code',
        'group' => 'group',
        'name' => 'name',
        'opp_id' => 'oppId',
        'renewal_date' => 'renewalDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'activation_date' => 'setActivationDate',
        'code' => 'setCode',
        'group' => 'setGroup',
        'name' => 'setName',
        'opp_id' => 'setOppId',
        'renewal_date' => 'setRenewalDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'activation_date' => 'getActivationDate',
        'code' => 'getCode',
        'group' => 'getGroup',
        'name' => 'getName',
        'opp_id' => 'getOppId',
        'renewal_date' => 'getRenewalDate'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
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
        parent::__construct($data);

        $this->container['activation_date'] = isset($data['activation_date']) ? $data['activation_date'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['opp_id'] = isset($data['opp_id']) ? $data['opp_id'] : null;
        $this->container['renewal_date'] = isset($data['renewal_date']) ? $data['renewal_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets activation_date
     * @return \DateTime
     */
    public function getActivationDate()
    {
        return $this->container['activation_date'];
    }

    /**
     * Sets activation_date
     * @param \DateTime $activation_date the activation date
     * @return $this
     */
    public function setActivationDate($activation_date)
    {
        $this->container['activation_date'] = $activation_date;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code the bundle code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets group
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param string $group the bundle group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

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
     * @param string $name the bundle name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets opp_id
     * @return int
     */
    public function getOppId()
    {
        return $this->container['opp_id'];
    }

    /**
     * Sets opp_id
     * @param int $opp_id the online payment profile ID
     * @return $this
     */
    public function setOppId($opp_id)
    {
        $this->container['opp_id'] = $opp_id;

        return $this;
    }

    /**
     * Gets renewal_date
     * @return \DateTime
     */
    public function getRenewalDate()
    {
        return $this->container['renewal_date'];
    }

    /**
     * Sets renewal_date
     * @param \DateTime $renewal_date the renewal date
     * @return $this
     */
    public function setRenewalDate($renewal_date)
    {
        $this->container['renewal_date'] = $renewal_date;

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


