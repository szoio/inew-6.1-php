<?php
/**
 * OnlinePaymentProfileInfo
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
 * OnlinePaymentProfileInfo Class Doc Comment
 *
 * @category    Class
 * @description The class representing a payment profile information.&lt;br&gt;
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OnlinePaymentProfileInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OnlinePaymentProfileInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'int',
        'name' => 'string',
        'one_click' => 'bool',
        'one_click_recharge' => '\iNew\Rest6_1\Model\Recharge',
        'opp_id' => 'int',
        'payment_method_details' => '\iNew\Rest6_1\Model\CreditCardMethod',
        'repayment_details' => '\iNew\Rest6_1\Model\RepaymentDetails'
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
        'customer_id' => 'customerId',
        'name' => 'name',
        'one_click' => 'oneClick',
        'one_click_recharge' => 'oneClickRecharge',
        'opp_id' => 'oppId',
        'payment_method_details' => 'paymentMethodDetails',
        'repayment_details' => 'repaymentDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'name' => 'setName',
        'one_click' => 'setOneClick',
        'one_click_recharge' => 'setOneClickRecharge',
        'opp_id' => 'setOppId',
        'payment_method_details' => 'setPaymentMethodDetails',
        'repayment_details' => 'setRepaymentDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'name' => 'getName',
        'one_click' => 'getOneClick',
        'one_click_recharge' => 'getOneClickRecharge',
        'opp_id' => 'getOppId',
        'payment_method_details' => 'getPaymentMethodDetails',
        'repayment_details' => 'getRepaymentDetails'
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['one_click'] = isset($data['one_click']) ? $data['one_click'] : null;
        $this->container['one_click_recharge'] = isset($data['one_click_recharge']) ? $data['one_click_recharge'] : null;
        $this->container['opp_id'] = isset($data['opp_id']) ? $data['opp_id'] : null;
        $this->container['payment_method_details'] = isset($data['payment_method_details']) ? $data['payment_method_details'] : null;
        $this->container['repayment_details'] = isset($data['repayment_details']) ? $data['repayment_details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id the customer ID
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

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
     * @param string $name the profile name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets one_click
     * @return bool
     */
    public function getOneClick()
    {
        return $this->container['one_click'];
    }

    /**
     * Sets one_click
     * @param bool $one_click true, if the searched profile is of one-click type
     * @return $this
     */
    public function setOneClick($one_click)
    {
        $this->container['one_click'] = $one_click;

        return $this;
    }

    /**
     * Gets one_click_recharge
     * @return \iNew\Rest6_1\Model\Recharge
     */
    public function getOneClickRecharge()
    {
        return $this->container['one_click_recharge'];
    }

    /**
     * Sets one_click_recharge
     * @param \iNew\Rest6_1\Model\Recharge $one_click_recharge the one-click re-charge
     * @return $this
     */
    public function setOneClickRecharge($one_click_recharge)
    {
        $this->container['one_click_recharge'] = $one_click_recharge;

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
     * @param int $opp_id the profile ID
     * @return $this
     */
    public function setOppId($opp_id)
    {
        $this->container['opp_id'] = $opp_id;

        return $this;
    }

    /**
     * Gets payment_method_details
     * @return \iNew\Rest6_1\Model\CreditCardMethod
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details
     * @param \iNew\Rest6_1\Model\CreditCardMethod $payment_method_details the payment method details
     * @return $this
     */
    public function setPaymentMethodDetails($payment_method_details)
    {
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }

    /**
     * Gets repayment_details
     * @return \iNew\Rest6_1\Model\RepaymentDetails
     */
    public function getRepaymentDetails()
    {
        return $this->container['repayment_details'];
    }

    /**
     * Sets repayment_details
     * @param \iNew\Rest6_1\Model\RepaymentDetails $repayment_details the re-payment details
     * @return $this
     */
    public function setRepaymentDetails($repayment_details)
    {
        $this->container['repayment_details'] = $repayment_details;

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


