<?php
/**
 * CreateRetailMediaAudienceAttributes
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
 * CreateRetailMediaAudienceAttributes Class Doc Comment
 *
 * @category Class
 * @description Parameters needed to create an audience
 * @package  criteo\api\retailmedia\v2022_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateRetailMediaAudienceAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateRetailMediaAudienceAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_type' => 'string',
        'lookback_window' => 'string',
        'brand_ids' => 'string[]',
        'category_ids' => 'string[]',
        'retailer_id' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_type' => null,
        'lookback_window' => null,
        'brand_ids' => null,
        'category_ids' => null,
        'retailer_id' => null,
        'name' => null
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
        'user_type' => 'userType',
        'lookback_window' => 'lookbackWindow',
        'brand_ids' => 'brandIds',
        'category_ids' => 'categoryIds',
        'retailer_id' => 'retailerId',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_type' => 'setUserType',
        'lookback_window' => 'setLookbackWindow',
        'brand_ids' => 'setBrandIds',
        'category_ids' => 'setCategoryIds',
        'retailer_id' => 'setRetailerId',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_type' => 'getUserType',
        'lookback_window' => 'getLookbackWindow',
        'brand_ids' => 'getBrandIds',
        'category_ids' => 'getCategoryIds',
        'retailer_id' => 'getRetailerId',
        'name' => 'getName'
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

    const USER_TYPE_VIEWER = 'viewer';
    const USER_TYPE_BUYER = 'buyer';
    const LOOKBACK_WINDOW_P7_D = 'P7D';
    const LOOKBACK_WINDOW_P14_D = 'P14D';
    const LOOKBACK_WINDOW_P30_D = 'P30D';
    const LOOKBACK_WINDOW_P45_D = 'P45D';
    const LOOKBACK_WINDOW_P60_D = 'P60D';
    const LOOKBACK_WINDOW_P90_D = 'P90D';
    const LOOKBACK_WINDOW_P120_D = 'P120D';
    const LOOKBACK_WINDOW_P150_D = 'P150D';
    const LOOKBACK_WINDOW_P180_D = 'P180D';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserTypeAllowableValues()
    {
        return [
            self::USER_TYPE_VIEWER,
            self::USER_TYPE_BUYER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLookbackWindowAllowableValues()
    {
        return [
            self::LOOKBACK_WINDOW_P7_D,
            self::LOOKBACK_WINDOW_P14_D,
            self::LOOKBACK_WINDOW_P30_D,
            self::LOOKBACK_WINDOW_P45_D,
            self::LOOKBACK_WINDOW_P60_D,
            self::LOOKBACK_WINDOW_P90_D,
            self::LOOKBACK_WINDOW_P120_D,
            self::LOOKBACK_WINDOW_P150_D,
            self::LOOKBACK_WINDOW_P180_D,
        ];
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
        $this->container['user_type'] = $data['user_type'] ?? null;
        $this->container['lookback_window'] = $data['lookback_window'] ?? null;
        $this->container['brand_ids'] = $data['brand_ids'] ?? null;
        $this->container['category_ids'] = $data['category_ids'] ?? null;
        $this->container['retailer_id'] = $data['retailer_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_type'] === null) {
            $invalidProperties[] = "'user_type' can't be null";
        }
        $allowedValues = $this->getUserTypeAllowableValues();
        if (!is_null($this->container['user_type']) && !in_array($this->container['user_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'user_type', must be one of '%s'",
                $this->container['user_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['lookback_window'] === null) {
            $invalidProperties[] = "'lookback_window' can't be null";
        }
        $allowedValues = $this->getLookbackWindowAllowableValues();
        if (!is_null($this->container['lookback_window']) && !in_array($this->container['lookback_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'lookback_window', must be one of '%s'",
                $this->container['lookback_window'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets user_type
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string $user_type Type of the user
     *
     * @return self
     */
    public function setUserType($user_type)
    {
        $allowedValues = $this->getUserTypeAllowableValues();
        if (!in_array($user_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'user_type', must be one of '%s'",
                    $user_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets lookback_window
     *
     * @return string
     */
    public function getLookbackWindow()
    {
        return $this->container['lookback_window'];
    }

    /**
     * Sets lookback_window
     *
     * @param string $lookback_window Length of lookback window
     *
     * @return self
     */
    public function setLookbackWindow($lookback_window)
    {
        $allowedValues = $this->getLookbackWindowAllowableValues();
        if (!in_array($lookback_window, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'lookback_window', must be one of '%s'",
                    $lookback_window,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lookback_window'] = $lookback_window;

        return $this;
    }

    /**
     * Gets brand_ids
     *
     * @return string[]|null
     */
    public function getBrandIds()
    {
        return $this->container['brand_ids'];
    }

    /**
     * Sets brand_ids
     *
     * @param string[]|null $brand_ids The brands to target
     *
     * @return self
     */
    public function setBrandIds($brand_ids)
    {
        $this->container['brand_ids'] = $brand_ids;

        return $this;
    }

    /**
     * Gets category_ids
     *
     * @return string[]|null
     */
    public function getCategoryIds()
    {
        return $this->container['category_ids'];
    }

    /**
     * Sets category_ids
     *
     * @param string[]|null $category_ids The categories to target
     *
     * @return self
     */
    public function setCategoryIds($category_ids)
    {
        $this->container['category_ids'] = $category_ids;

        return $this;
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


