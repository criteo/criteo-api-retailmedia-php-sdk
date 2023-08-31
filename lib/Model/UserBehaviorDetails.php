<?php
/**
 * UserBehaviorDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\preview\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\preview\ObjectSerializer;

/**
 * UserBehaviorDetails Class Doc Comment
 *
 * @category Class
 * @description Details about a user behavior retail media audience
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'target_type' => false,
		'target_ids' => false,
		'lookback_window' => false,
		'user_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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

    public const TARGET_TYPE_BRAND = 'brand';
    public const TARGET_TYPE_CATEGORY = 'category';
    public const LOOKBACK_WINDOW_P7_D = 'P7D';
    public const LOOKBACK_WINDOW_P14_D = 'P14D';
    public const LOOKBACK_WINDOW_P30_D = 'P30D';
    public const LOOKBACK_WINDOW_P45_D = 'P45D';
    public const LOOKBACK_WINDOW_P60_D = 'P60D';
    public const LOOKBACK_WINDOW_P90_D = 'P90D';
    public const LOOKBACK_WINDOW_P120_D = 'P120D';
    public const LOOKBACK_WINDOW_P150_D = 'P150D';
    public const LOOKBACK_WINDOW_P180_D = 'P180D';
    public const USER_TYPE_VIEWER = 'viewer';
    public const USER_TYPE_BUYER = 'buyer';

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
        $this->setIfExists('target_type', $data ?? [], null);
        $this->setIfExists('target_ids', $data ?? [], null);
        $this->setIfExists('lookback_window', $data ?? [], null);
        $this->setIfExists('user_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if (is_null($target_type)) {
            throw new \InvalidArgumentException('non-nullable target_type cannot be null');
        }
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
        if (is_null($target_ids)) {
            throw new \InvalidArgumentException('non-nullable target_ids cannot be null');
        }
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
        if (is_null($lookback_window)) {
            throw new \InvalidArgumentException('non-nullable lookback_window cannot be null');
        }
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
        if (is_null($user_type)) {
            throw new \InvalidArgumentException('non-nullable user_type cannot be null');
        }
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
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


