<?php
/**
 * UserBehaviorDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2022_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2022-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2022_04\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2022_04\ObjectSerializer;

/**
 * UserBehaviorDetails Class Doc Comment
 *
 * @category Class
 * @description Details about a user behavior retail media audience
 * @package  criteo\api\retailmedia\v2022_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserBehaviorDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserBehaviorDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'target_type' => 'string',
        'target_ids' => 'string[]',
        'lookback_window' => 'string',
        'user_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'target_type' => null,
        'target_ids' => null,
        'lookback_window' => null,
        'user_type' => null
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
        'target_type' => 'targetType',
        'target_ids' => 'targetIds',
        'lookback_window' => 'lookbackWindow',
        'user_type' => 'userType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_type' => 'setTargetType',
        'target_ids' => 'setTargetIds',
        'lookback_window' => 'setLookbackWindow',
        'user_type' => 'setUserType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_type' => 'getTargetType',
        'target_ids' => 'getTargetIds',
        'lookback_window' => 'getLookbackWindow',
        'user_type' => 'getUserType'
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

    const TARGET_TYPE_BRAND = 'brand';
    const TARGET_TYPE_CATEGORY = 'category';
    const LOOKBACK_WINDOW_P7_D = 'P7D';
    const LOOKBACK_WINDOW_P14_D = 'P14D';
    const LOOKBACK_WINDOW_P30_D = 'P30D';
    const LOOKBACK_WINDOW_P45_D = 'P45D';
    const LOOKBACK_WINDOW_P60_D = 'P60D';
    const LOOKBACK_WINDOW_P90_D = 'P90D';
    const LOOKBACK_WINDOW_P120_D = 'P120D';
    const LOOKBACK_WINDOW_P150_D = 'P150D';
    const LOOKBACK_WINDOW_P180_D = 'P180D';
    const USER_TYPE_VIEWER = 'viewer';
    const USER_TYPE_BUYER = 'buyer';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_BRAND,
            self::TARGET_TYPE_CATEGORY,
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
        $this->container['target_type'] = $data['target_type'] ?? null;
        $this->container['target_ids'] = $data['target_ids'] ?? null;
        $this->container['lookback_window'] = $data['lookback_window'] ?? null;
        $this->container['user_type'] = $data['user_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['target_type'] === null) {
            $invalidProperties[] = "'target_type' can't be null";
        }
        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($this->container['target_type']) && !in_array($this->container['target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'target_type', must be one of '%s'",
                $this->container['target_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['target_ids'] === null) {
            $invalidProperties[] = "'target_ids' can't be null";
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
     * Gets target_type
     *
     * @return string
     */
    public function getTargetType()
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param string $target_type Type of target
     *
     * @return self
     */
    public function setTargetType($target_type)
    {
        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!in_array($target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'target_type', must be one of '%s'",
                    $target_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['target_type'] = $target_type;

        return $this;
    }

    /**
     * Gets target_ids
     *
     * @return string[]
     */
    public function getTargetIds()
    {
        return $this->container['target_ids'];
    }

    /**
     * Sets target_ids
     *
     * @param string[] $target_ids ist of ids for the target type
     *
     * @return self
     */
    public function setTargetIds($target_ids)
    {
        $this->container['target_ids'] = $target_ids;

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


