<?php
/**
 * TariffPlanType
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
 * TariffPlanType Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TariffPlanType implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TariffPlanType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => '\iNew\Rest6_1\Model\TariffCategory',
        'charges' => '\iNew\Rest6_1\Model\ChargeExt[]',
        'group_rating_used' => 'bool',
        'id' => 'int',
        'included_quota' => '\iNew\Rest6_1\Model\QuotaType1[]',
        'last_renewal_date' => '\DateTime',
        'name' => 'string',
        'next_renewal_date' => '\DateTime',
        'payment_option' => '\iNew\Rest6_1\Model\PaymentOption',
        'periodic_charge' => '\iNew\Rest6_1\Model\Charge4',
        'renewal_period' => '\iNew\Rest6_1\Model\TariffPeriod',
        'shared' => 'bool',
        'shared_details' => '\iNew\Rest6_1\Model\SharedPlanDetails1',
        'status' => '\iNew\Rest6_1\Model\TariffPlanStatus'
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
        'category' => 'category',
        'charges' => 'charges',
        'group_rating_used' => 'groupRatingUsed',
        'id' => 'id',
        'included_quota' => 'includedQuota',
        'last_renewal_date' => 'lastRenewalDate',
        'name' => 'name',
        'next_renewal_date' => 'nextRenewalDate',
        'payment_option' => 'paymentOption',
        'periodic_charge' => 'periodicCharge',
        'renewal_period' => 'renewalPeriod',
        'shared' => 'shared',
        'shared_details' => 'sharedDetails',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'charges' => 'setCharges',
        'group_rating_used' => 'setGroupRatingUsed',
        'id' => 'setId',
        'included_quota' => 'setIncludedQuota',
        'last_renewal_date' => 'setLastRenewalDate',
        'name' => 'setName',
        'next_renewal_date' => 'setNextRenewalDate',
        'payment_option' => 'setPaymentOption',
        'periodic_charge' => 'setPeriodicCharge',
        'renewal_period' => 'setRenewalPeriod',
        'shared' => 'setShared',
        'shared_details' => 'setSharedDetails',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'charges' => 'getCharges',
        'group_rating_used' => 'getGroupRatingUsed',
        'id' => 'getId',
        'included_quota' => 'getIncludedQuota',
        'last_renewal_date' => 'getLastRenewalDate',
        'name' => 'getName',
        'next_renewal_date' => 'getNextRenewalDate',
        'payment_option' => 'getPaymentOption',
        'periodic_charge' => 'getPeriodicCharge',
        'renewal_period' => 'getRenewalPeriod',
        'shared' => 'getShared',
        'shared_details' => 'getSharedDetails',
        'status' => 'getStatus'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['charges'] = isset($data['charges']) ? $data['charges'] : null;
        $this->container['group_rating_used'] = isset($data['group_rating_used']) ? $data['group_rating_used'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['included_quota'] = isset($data['included_quota']) ? $data['included_quota'] : null;
        $this->container['last_renewal_date'] = isset($data['last_renewal_date']) ? $data['last_renewal_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['next_renewal_date'] = isset($data['next_renewal_date']) ? $data['next_renewal_date'] : null;
        $this->container['payment_option'] = isset($data['payment_option']) ? $data['payment_option'] : null;
        $this->container['periodic_charge'] = isset($data['periodic_charge']) ? $data['periodic_charge'] : null;
        $this->container['renewal_period'] = isset($data['renewal_period']) ? $data['renewal_period'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['shared_details'] = isset($data['shared_details']) ? $data['shared_details'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['last_renewal_date'] === null) {
            $invalid_properties[] = "'last_renewal_date' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['next_renewal_date'] === null) {
            $invalid_properties[] = "'next_renewal_date' can't be null";
        }
        if ($this->container['payment_option'] === null) {
            $invalid_properties[] = "'payment_option' can't be null";
        }
        if ($this->container['periodic_charge'] === null) {
            $invalid_properties[] = "'periodic_charge' can't be null";
        }
        if ($this->container['renewal_period'] === null) {
            $invalid_properties[] = "'renewal_period' can't be null";
        }
        if ($this->container['shared'] === null) {
            $invalid_properties[] = "'shared' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['last_renewal_date'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['next_renewal_date'] === null) {
            return false;
        }
        if ($this->container['payment_option'] === null) {
            return false;
        }
        if ($this->container['periodic_charge'] === null) {
            return false;
        }
        if ($this->container['renewal_period'] === null) {
            return false;
        }
        if ($this->container['shared'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets category
     * @return \iNew\Rest6_1\Model\TariffCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param \iNew\Rest6_1\Model\TariffCategory $category the category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets charges
     * @return \iNew\Rest6_1\Model\ChargeExt[]
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     * @param \iNew\Rest6_1\Model\ChargeExt[] $charges
     * @return $this
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets group_rating_used
     * @return bool
     */
    public function getGroupRatingUsed()
    {
        return $this->container['group_rating_used'];
    }

    /**
     * Sets group_rating_used
     * @param bool $group_rating_used the groupRatingUsed
     * @return $this
     */
    public function setGroupRatingUsed($group_rating_used)
    {
        $this->container['group_rating_used'] = $group_rating_used;

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
     * @param int $id the id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets included_quota
     * @return \iNew\Rest6_1\Model\QuotaType1[]
     */
    public function getIncludedQuota()
    {
        return $this->container['included_quota'];
    }

    /**
     * Sets included_quota
     * @param \iNew\Rest6_1\Model\QuotaType1[] $included_quota the includedQuota
     * @return $this
     */
    public function setIncludedQuota($included_quota)
    {
        $this->container['included_quota'] = $included_quota;

        return $this;
    }

    /**
     * Gets last_renewal_date
     * @return \DateTime
     */
    public function getLastRenewalDate()
    {
        return $this->container['last_renewal_date'];
    }

    /**
     * Sets last_renewal_date
     * @param \DateTime $last_renewal_date the lastRenewalDate
     * @return $this
     */
    public function setLastRenewalDate($last_renewal_date)
    {
        $this->container['last_renewal_date'] = $last_renewal_date;

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
     * @param string $name the name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets next_renewal_date
     * @return \DateTime
     */
    public function getNextRenewalDate()
    {
        return $this->container['next_renewal_date'];
    }

    /**
     * Sets next_renewal_date
     * @param \DateTime $next_renewal_date the nextRenewalDate
     * @return $this
     */
    public function setNextRenewalDate($next_renewal_date)
    {
        $this->container['next_renewal_date'] = $next_renewal_date;

        return $this;
    }

    /**
     * Gets payment_option
     * @return \iNew\Rest6_1\Model\PaymentOption
     */
    public function getPaymentOption()
    {
        return $this->container['payment_option'];
    }

    /**
     * Sets payment_option
     * @param \iNew\Rest6_1\Model\PaymentOption $payment_option if ALL this plan can be activated with either the online payment profile, or with the main balance
     * @return $this
     */
    public function setPaymentOption($payment_option)
    {
        $this->container['payment_option'] = $payment_option;

        return $this;
    }

    /**
     * Gets periodic_charge
     * @return \iNew\Rest6_1\Model\Charge4
     */
    public function getPeriodicCharge()
    {
        return $this->container['periodic_charge'];
    }

    /**
     * Sets periodic_charge
     * @param \iNew\Rest6_1\Model\Charge4 $periodic_charge the periodicCharge
     * @return $this
     */
    public function setPeriodicCharge($periodic_charge)
    {
        $this->container['periodic_charge'] = $periodic_charge;

        return $this;
    }

    /**
     * Gets renewal_period
     * @return \iNew\Rest6_1\Model\TariffPeriod
     */
    public function getRenewalPeriod()
    {
        return $this->container['renewal_period'];
    }

    /**
     * Sets renewal_period
     * @param \iNew\Rest6_1\Model\TariffPeriod $renewal_period the renewalPeriod
     * @return $this
     */
    public function setRenewalPeriod($renewal_period)
    {
        $this->container['renewal_period'] = $renewal_period;

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
     * @param bool $shared the shared
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets shared_details
     * @return \iNew\Rest6_1\Model\SharedPlanDetails1
     */
    public function getSharedDetails()
    {
        return $this->container['shared_details'];
    }

    /**
     * Sets shared_details
     * @param \iNew\Rest6_1\Model\SharedPlanDetails1 $shared_details the sharedDetails
     * @return $this
     */
    public function setSharedDetails($shared_details)
    {
        $this->container['shared_details'] = $shared_details;

        return $this;
    }

    /**
     * Gets status
     * @return \iNew\Rest6_1\Model\TariffPlanStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \iNew\Rest6_1\Model\TariffPlanStatus $status the status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


