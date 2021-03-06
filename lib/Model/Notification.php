<?php
/**
 * Notification
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
 * Notification Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Notification implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_channels' => 'string[]',
        'category' => '\iNew\Rest6_1\Model\Category2',
        'changeable' => 'bool',
        'channel' => '\iNew\Rest6_1\Model\Channel2',
        'notification_key' => 'string',
        'notification_name' => 'string'
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
        'available_channels' => 'availableChannels',
        'category' => 'category',
        'changeable' => 'changeable',
        'channel' => 'channel',
        'notification_key' => 'notificationKey',
        'notification_name' => 'notificationName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'available_channels' => 'setAvailableChannels',
        'category' => 'setCategory',
        'changeable' => 'setChangeable',
        'channel' => 'setChannel',
        'notification_key' => 'setNotificationKey',
        'notification_name' => 'setNotificationName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'available_channels' => 'getAvailableChannels',
        'category' => 'getCategory',
        'changeable' => 'getChangeable',
        'channel' => 'getChannel',
        'notification_key' => 'getNotificationKey',
        'notification_name' => 'getNotificationName'
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
        $this->container['available_channels'] = isset($data['available_channels']) ? $data['available_channels'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['changeable'] = isset($data['changeable']) ? $data['changeable'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['notification_key'] = isset($data['notification_key']) ? $data['notification_key'] : null;
        $this->container['notification_name'] = isset($data['notification_name']) ? $data['notification_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['available_channels'] === null) {
            $invalid_properties[] = "'available_channels' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        if ($this->container['changeable'] === null) {
            $invalid_properties[] = "'changeable' can't be null";
        }
        if ($this->container['channel'] === null) {
            $invalid_properties[] = "'channel' can't be null";
        }
        if ($this->container['notification_key'] === null) {
            $invalid_properties[] = "'notification_key' can't be null";
        }
        if ($this->container['notification_name'] === null) {
            $invalid_properties[] = "'notification_name' can't be null";
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

        if ($this->container['available_channels'] === null) {
            return false;
        }
        if ($this->container['category'] === null) {
            return false;
        }
        if ($this->container['changeable'] === null) {
            return false;
        }
        if ($this->container['channel'] === null) {
            return false;
        }
        if ($this->container['notification_key'] === null) {
            return false;
        }
        if ($this->container['notification_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets available_channels
     * @return string[]
     */
    public function getAvailableChannels()
    {
        return $this->container['available_channels'];
    }

    /**
     * Sets available_channels
     * @param string[] $available_channels the channels the given notification is available to be send on, possible values are [EMAIL, MMS, NONE, PUSH, SMS, SMS_FLASH, USSD]
     * @return $this
     */
    public function setAvailableChannels($available_channels)
    {
        $this->container['available_channels'] = $available_channels;

        return $this;
    }

    /**
     * Gets category
     * @return \iNew\Rest6_1\Model\Category2
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param \iNew\Rest6_1\Model\Category2 $category the notification category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets changeable
     * @return bool
     */
    public function getChangeable()
    {
        return $this->container['changeable'];
    }

    /**
     * Sets changeable
     * @param bool $changeable a boolean indicating whether the notification channel preferences are changeable by the subscription owner
     * @return $this
     */
    public function setChangeable($changeable)
    {
        $this->container['changeable'] = $changeable;

        return $this;
    }

    /**
     * Gets channel
     * @return \iNew\Rest6_1\Model\Channel2
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     * @param \iNew\Rest6_1\Model\Channel2 $channel the notification channel
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets notification_key
     * @return string
     */
    public function getNotificationKey()
    {
        return $this->container['notification_key'];
    }

    /**
     * Sets notification_key
     * @param string $notification_key the unique key that identifies the notification
     * @return $this
     */
    public function setNotificationKey($notification_key)
    {
        $this->container['notification_key'] = $notification_key;

        return $this;
    }

    /**
     * Gets notification_name
     * @return string
     */
    public function getNotificationName()
    {
        return $this->container['notification_name'];
    }

    /**
     * Sets notification_name
     * @param string $notification_name the name of the notification
     * @return $this
     */
    public function setNotificationName($notification_name)
    {
        $this->container['notification_name'] = $notification_name;

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


