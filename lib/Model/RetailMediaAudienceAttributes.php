<?php
/**
 * RetailMediaAudienceAttributes
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2022_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2022-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2022_07\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2022_07\ObjectSerializer;

/**
 * RetailMediaAudienceAttributes Class Doc Comment
 *
 * @category Class
 * @description Fields of a retail media audience
 * @package  criteo\api\retailmedia\v2022_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetailMediaAudienceAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetailMediaAudienceAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'retailer_id' => 'string',
        'name' => 'string',
        'user_behavior_details' => '\criteo\api\retailmedia\v2022_07\Model\UserBehaviorDetails',
        'customer_list_details' => '\criteo\api\retailmedia\v2022_07\Model\CustomerListDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'retailer_id' => null,
        'name' => null,
        'user_behavior_details' => null,
        'customer_list_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'retailer_id' => 'retailerId',
        'name' => 'name',
        'user_behavior_details' => 'userBehaviorDetails',
        'customer_list_details' => 'customerListDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retailer_id' => 'setRetailerId',
        'name' => 'setName',
        'user_behavior_details' => 'setUserBehaviorDetails',
        'customer_list_details' => 'setCustomerListDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retailer_id' => 'getRetailerId',
        'name' => 'getName',
        'user_behavior_details' => 'getUserBehaviorDetails',
        'customer_list_details' => 'getCustomerListDetails'
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
        return self::$openAPIModelName;
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
        $this->container['retailer_id'] = $data['retailer_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['user_behavior_details'] = $data['user_behavior_details'] ?? null;
        $this->container['customer_list_details'] = $data['customer_list_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['retailer_id'] === null) {
            $invalidProperties[] = "'retailer_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets retailer_id
     *
     * @return string
     */
    public function getRetailerId()
    {
        return $this->container['retailer_id'];
    }

    /**
     * Sets retailer_id
     *
     * @param string $retailer_id ID of the retailer associated with this audience
     *
     * @return self
     */
    public function setRetailerId($retailer_id)
    {
        $this->container['retailer_id'] = $retailer_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the audience.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user_behavior_details
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\UserBehaviorDetails|null
     */
    public function getUserBehaviorDetails()
    {
        return $this->container['user_behavior_details'];
    }

    /**
     * Sets user_behavior_details
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\UserBehaviorDetails|null $user_behavior_details user_behavior_details
     *
     * @return self
     */
    public function setUserBehaviorDetails($user_behavior_details)
    {
        $this->container['user_behavior_details'] = $user_behavior_details;

        return $this;
    }

    /**
     * Gets customer_list_details
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\CustomerListDetails|null
     */
    public function getCustomerListDetails()
    {
        return $this->container['customer_list_details'];
    }

    /**
     * Sets customer_list_details
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\CustomerListDetails|null $customer_list_details customer_list_details
     *
     * @return self
     */
    public function setCustomerListDetails($customer_list_details)
    {
        $this->container['customer_list_details'] = $customer_list_details;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


