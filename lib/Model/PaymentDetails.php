<?php
/**
 * PaymentDetails
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
 * PaymentDetails Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentDetails extends AbstractDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_result' => 'string',
        'payment_method' => '\iNew\Rest6_1\Model\PaymentMethodType',
        'payment_method_info' => 'string',
        'recharge_period' => '\iNew\Rest6_1\Model\PeriodType',
        'recharge_threshold' => 'int',
        'transaction_date' => '\DateTime',
        'transaction_status' => 'string'
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
        'bank_result' => 'bankResult',
        'payment_method' => 'paymentMethod',
        'payment_method_info' => 'paymentMethodInfo',
        'recharge_period' => 'rechargePeriod',
        'recharge_threshold' => 'rechargeThreshold',
        'transaction_date' => 'transactionDate',
        'transaction_status' => 'transactionStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bank_result' => 'setBankResult',
        'payment_method' => 'setPaymentMethod',
        'payment_method_info' => 'setPaymentMethodInfo',
        'recharge_period' => 'setRechargePeriod',
        'recharge_threshold' => 'setRechargeThreshold',
        'transaction_date' => 'setTransactionDate',
        'transaction_status' => 'setTransactionStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bank_result' => 'getBankResult',
        'payment_method' => 'getPaymentMethod',
        'payment_method_info' => 'getPaymentMethodInfo',
        'recharge_period' => 'getRechargePeriod',
        'recharge_threshold' => 'getRechargeThreshold',
        'transaction_date' => 'getTransactionDate',
        'transaction_status' => 'getTransactionStatus'
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

        $this->container['bank_result'] = isset($data['bank_result']) ? $data['bank_result'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_method_info'] = isset($data['payment_method_info']) ? $data['payment_method_info'] : null;
        $this->container['recharge_period'] = isset($data['recharge_period']) ? $data['recharge_period'] : null;
        $this->container['recharge_threshold'] = isset($data['recharge_threshold']) ? $data['recharge_threshold'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['transaction_status'] = isset($data['transaction_status']) ? $data['transaction_status'] : null;
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
     * Gets bank_result
     * @return string
     */
    public function getBankResult()
    {
        return $this->container['bank_result'];
    }

    /**
     * Sets bank_result
     * @param string $bank_result the bank result message
     * @return $this
     */
    public function setBankResult($bank_result)
    {
        $this->container['bank_result'] = $bank_result;

        return $this;
    }

    /**
     * Gets payment_method
     * @return \iNew\Rest6_1\Model\PaymentMethodType
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     * @param \iNew\Rest6_1\Model\PaymentMethodType $payment_method the payment type
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_info
     * @return string
     */
    public function getPaymentMethodInfo()
    {
        return $this->container['payment_method_info'];
    }

    /**
     * Sets payment_method_info
     * @param string $payment_method_info the additional payment method information
     * @return $this
     */
    public function setPaymentMethodInfo($payment_method_info)
    {
        $this->container['payment_method_info'] = $payment_method_info;

        return $this;
    }

    /**
     * Gets recharge_period
     * @return \iNew\Rest6_1\Model\PeriodType
     */
    public function getRechargePeriod()
    {
        return $this->container['recharge_period'];
    }

    /**
     * Sets recharge_period
     * @param \iNew\Rest6_1\Model\PeriodType $recharge_period the period to be elapsed before the next payment is done
     * @return $this
     */
    public function setRechargePeriod($recharge_period)
    {
        $this->container['recharge_period'] = $recharge_period;

        return $this;
    }

    /**
     * Gets recharge_threshold
     * @return int
     */
    public function getRechargeThreshold()
    {
        return $this->container['recharge_threshold'];
    }

    /**
     * Sets recharge_threshold
     * @param int $recharge_threshold the threshold amount when the re-payment is triggered
     * @return $this
     */
    public function setRechargeThreshold($recharge_threshold)
    {
        $this->container['recharge_threshold'] = $recharge_threshold;

        return $this;
    }

    /**
     * Gets transaction_date
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     * @param \DateTime $transaction_date the payment transaction date
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets transaction_status
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     * @param string $transaction_status the payment transaction status
     * @return $this
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->container['transaction_status'] = $transaction_status;

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


