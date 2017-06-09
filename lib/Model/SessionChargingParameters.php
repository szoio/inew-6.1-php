<?php
/**
 * SessionChargingParameters
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
 * SessionChargingParameters Class Doc Comment
 *
 * @category    Class
 * @package     iNew\Rest6_1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SessionChargingParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SessionChargingParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bearer_type' => '\iNew\Rest6_1\Model\SessionBearerType',
        'called_party' => 'string',
        'calling_party' => 'string',
        'charging_trigger' => '\iNew\Rest6_1\Model\ChargingTrigger',
        'duration' => 'int',
        'location' => 'string',
        'location_detailed_id' => 'string',
        'location_number' => 'string',
        'reference_number' => 'string',
        'roaming' => 'bool',
        'session_begin_time_stamp' => '\DateTime',
        'session_id' => 'string',
        'start_time' => '\DateTime',
        'suppress_number' => 'bool',
        'traffic_type' => '\iNew\Rest6_1\Model\SessionTrafficType'
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
        'bearer_type' => 'bearerType',
        'called_party' => 'calledParty',
        'calling_party' => 'callingParty',
        'charging_trigger' => 'chargingTrigger',
        'duration' => 'duration',
        'location' => 'location',
        'location_detailed_id' => 'locationDetailedId',
        'location_number' => 'locationNumber',
        'reference_number' => 'referenceNumber',
        'roaming' => 'roaming',
        'session_begin_time_stamp' => 'sessionBeginTimeStamp',
        'session_id' => 'sessionId',
        'start_time' => 'startTime',
        'suppress_number' => 'suppressNumber',
        'traffic_type' => 'trafficType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bearer_type' => 'setBearerType',
        'called_party' => 'setCalledParty',
        'calling_party' => 'setCallingParty',
        'charging_trigger' => 'setChargingTrigger',
        'duration' => 'setDuration',
        'location' => 'setLocation',
        'location_detailed_id' => 'setLocationDetailedId',
        'location_number' => 'setLocationNumber',
        'reference_number' => 'setReferenceNumber',
        'roaming' => 'setRoaming',
        'session_begin_time_stamp' => 'setSessionBeginTimeStamp',
        'session_id' => 'setSessionId',
        'start_time' => 'setStartTime',
        'suppress_number' => 'setSuppressNumber',
        'traffic_type' => 'setTrafficType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bearer_type' => 'getBearerType',
        'called_party' => 'getCalledParty',
        'calling_party' => 'getCallingParty',
        'charging_trigger' => 'getChargingTrigger',
        'duration' => 'getDuration',
        'location' => 'getLocation',
        'location_detailed_id' => 'getLocationDetailedId',
        'location_number' => 'getLocationNumber',
        'reference_number' => 'getReferenceNumber',
        'roaming' => 'getRoaming',
        'session_begin_time_stamp' => 'getSessionBeginTimeStamp',
        'session_id' => 'getSessionId',
        'start_time' => 'getStartTime',
        'suppress_number' => 'getSuppressNumber',
        'traffic_type' => 'getTrafficType'
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
        $this->container['bearer_type'] = isset($data['bearer_type']) ? $data['bearer_type'] : null;
        $this->container['called_party'] = isset($data['called_party']) ? $data['called_party'] : null;
        $this->container['calling_party'] = isset($data['calling_party']) ? $data['calling_party'] : null;
        $this->container['charging_trigger'] = isset($data['charging_trigger']) ? $data['charging_trigger'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['location_detailed_id'] = isset($data['location_detailed_id']) ? $data['location_detailed_id'] : null;
        $this->container['location_number'] = isset($data['location_number']) ? $data['location_number'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['roaming'] = isset($data['roaming']) ? $data['roaming'] : null;
        $this->container['session_begin_time_stamp'] = isset($data['session_begin_time_stamp']) ? $data['session_begin_time_stamp'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['suppress_number'] = isset($data['suppress_number']) ? $data['suppress_number'] : null;
        $this->container['traffic_type'] = isset($data['traffic_type']) ? $data['traffic_type'] : null;
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
     * Gets bearer_type
     * @return \iNew\Rest6_1\Model\SessionBearerType
     */
    public function getBearerType()
    {
        return $this->container['bearer_type'];
    }

    /**
     * Sets bearer_type
     * @param \iNew\Rest6_1\Model\SessionBearerType $bearer_type the bearerType
     * @return $this
     */
    public function setBearerType($bearer_type)
    {
        $this->container['bearer_type'] = $bearer_type;

        return $this;
    }

    /**
     * Gets called_party
     * @return string
     */
    public function getCalledParty()
    {
        return $this->container['called_party'];
    }

    /**
     * Sets called_party
     * @param string $called_party the calledParty
     * @return $this
     */
    public function setCalledParty($called_party)
    {
        $this->container['called_party'] = $called_party;

        return $this;
    }

    /**
     * Gets calling_party
     * @return string
     */
    public function getCallingParty()
    {
        return $this->container['calling_party'];
    }

    /**
     * Sets calling_party
     * @param string $calling_party the callingParty
     * @return $this
     */
    public function setCallingParty($calling_party)
    {
        $this->container['calling_party'] = $calling_party;

        return $this;
    }

    /**
     * Gets charging_trigger
     * @return \iNew\Rest6_1\Model\ChargingTrigger
     */
    public function getChargingTrigger()
    {
        return $this->container['charging_trigger'];
    }

    /**
     * Sets charging_trigger
     * @param \iNew\Rest6_1\Model\ChargingTrigger $charging_trigger the chargingTrigger
     * @return $this
     */
    public function setChargingTrigger($charging_trigger)
    {
        $this->container['charging_trigger'] = $charging_trigger;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration the duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location the location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets location_detailed_id
     * @return string
     */
    public function getLocationDetailedId()
    {
        return $this->container['location_detailed_id'];
    }

    /**
     * Sets location_detailed_id
     * @param string $location_detailed_id the locationDetailedId
     * @return $this
     */
    public function setLocationDetailedId($location_detailed_id)
    {
        $this->container['location_detailed_id'] = $location_detailed_id;

        return $this;
    }

    /**
     * Gets location_number
     * @return string
     */
    public function getLocationNumber()
    {
        return $this->container['location_number'];
    }

    /**
     * Sets location_number
     * @param string $location_number the locationNumber
     * @return $this
     */
    public function setLocationNumber($location_number)
    {
        $this->container['location_number'] = $location_number;

        return $this;
    }

    /**
     * Gets reference_number
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     * @param string $reference_number the referenceNumber
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets roaming
     * @return bool
     */
    public function getRoaming()
    {
        return $this->container['roaming'];
    }

    /**
     * Sets roaming
     * @param bool $roaming the roaming
     * @return $this
     */
    public function setRoaming($roaming)
    {
        $this->container['roaming'] = $roaming;

        return $this;
    }

    /**
     * Gets session_begin_time_stamp
     * @return \DateTime
     */
    public function getSessionBeginTimeStamp()
    {
        return $this->container['session_begin_time_stamp'];
    }

    /**
     * Sets session_begin_time_stamp
     * @param \DateTime $session_begin_time_stamp the sessionBeginTimeStamp
     * @return $this
     */
    public function setSessionBeginTimeStamp($session_begin_time_stamp)
    {
        $this->container['session_begin_time_stamp'] = $session_begin_time_stamp;

        return $this;
    }

    /**
     * Gets session_id
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     * @param string $session_id the sessionId
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets start_time
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param \DateTime $start_time the startTime
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets suppress_number
     * @return bool
     */
    public function getSuppressNumber()
    {
        return $this->container['suppress_number'];
    }

    /**
     * Sets suppress_number
     * @param bool $suppress_number the suppressNumber
     * @return $this
     */
    public function setSuppressNumber($suppress_number)
    {
        $this->container['suppress_number'] = $suppress_number;

        return $this;
    }

    /**
     * Gets traffic_type
     * @return \iNew\Rest6_1\Model\SessionTrafficType
     */
    public function getTrafficType()
    {
        return $this->container['traffic_type'];
    }

    /**
     * Sets traffic_type
     * @param \iNew\Rest6_1\Model\SessionTrafficType $traffic_type the trafficType
     * @return $this
     */
    public function setTrafficType($traffic_type)
    {
        $this->container['traffic_type'] = $traffic_type;

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


