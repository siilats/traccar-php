<?php
/**
 * Permission
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * traccar
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.16
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Permission Class Doc Comment
 *
 * @category Class
 * @description This is a permission map that contain two object indexes. It is used to link/unlink objects. Order is important. Example: { deviceId:8, geofenceId: 16 }
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Permission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Permission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'int',
        'device_id' => 'int',
        'group_id' => 'int',
        'geofence_id' => 'int',
        'calendar_id' => 'int',
        'attribute_id' => 'int',
        'driver_id' => 'int',
        'managed_user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => null,
        'device_id' => null,
        'group_id' => null,
        'geofence_id' => null,
        'calendar_id' => null,
        'attribute_id' => null,
        'driver_id' => null,
        'managed_user_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_id' => 'userId',
        'device_id' => 'deviceId',
        'group_id' => 'groupId',
        'geofence_id' => 'geofenceId',
        'calendar_id' => 'calendarId',
        'attribute_id' => 'attributeId',
        'driver_id' => 'driverId',
        'managed_user_id' => 'managedUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'device_id' => 'setDeviceId',
        'group_id' => 'setGroupId',
        'geofence_id' => 'setGeofenceId',
        'calendar_id' => 'setCalendarId',
        'attribute_id' => 'setAttributeId',
        'driver_id' => 'setDriverId',
        'managed_user_id' => 'setManagedUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'device_id' => 'getDeviceId',
        'group_id' => 'getGroupId',
        'geofence_id' => 'getGeofenceId',
        'calendar_id' => 'getCalendarId',
        'attribute_id' => 'getAttributeId',
        'driver_id' => 'getDriverId',
        'managed_user_id' => 'getManagedUserId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['geofence_id'] = isset($data['geofence_id']) ? $data['geofence_id'] : null;
        $this->container['calendar_id'] = isset($data['calendar_id']) ? $data['calendar_id'] : null;
        $this->container['attribute_id'] = isset($data['attribute_id']) ? $data['attribute_id'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['managed_user_id'] = isset($data['managed_user_id']) ? $data['managed_user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id User Id, can be only first parameter
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return int
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param int $device_id Device Id, can be first parameter or second only in combination with userId
     *
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id Group Id, can be first parameter or second only in combination with userId
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets geofence_id
     *
     * @return int
     */
    public function getGeofenceId()
    {
        return $this->container['geofence_id'];
    }

    /**
     * Sets geofence_id
     *
     * @param int $geofence_id Geofence Id, can be second parameter only
     *
     * @return $this
     */
    public function setGeofenceId($geofence_id)
    {
        $this->container['geofence_id'] = $geofence_id;

        return $this;
    }

    /**
     * Gets calendar_id
     *
     * @return int
     */
    public function getCalendarId()
    {
        return $this->container['calendar_id'];
    }

    /**
     * Sets calendar_id
     *
     * @param int $calendar_id Geofence Id, can be second parameter only and only in combination with userId
     *
     * @return $this
     */
    public function setCalendarId($calendar_id)
    {
        $this->container['calendar_id'] = $calendar_id;

        return $this;
    }

    /**
     * Gets attribute_id
     *
     * @return int
     */
    public function getAttributeId()
    {
        return $this->container['attribute_id'];
    }

    /**
     * Sets attribute_id
     *
     * @param int $attribute_id Computed Attribute Id, can be second parameter only
     *
     * @return $this
     */
    public function setAttributeId($attribute_id)
    {
        $this->container['attribute_id'] = $attribute_id;

        return $this;
    }

    /**
     * Gets driver_id
     *
     * @return int
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     *
     * @param int $driver_id Driver Id, can be second parameter only
     *
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets managed_user_id
     *
     * @return int
     */
    public function getManagedUserId()
    {
        return $this->container['managed_user_id'];
    }

    /**
     * Sets managed_user_id
     *
     * @param int $managed_user_id User Id, can be second parameter only and only in combination with userId
     *
     * @return $this
     */
    public function setManagedUserId($managed_user_id)
    {
        $this->container['managed_user_id'] = $managed_user_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


