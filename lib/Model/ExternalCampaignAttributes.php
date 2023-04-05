<?php
/**
 * ExternalCampaignAttributes
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.3.0
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
 * ExternalCampaignAttributes Class Doc Comment
 *
 * @category Class
 * @description An object that represents the available options to set when creating a Retail Media Campaign
 * @package  criteo\api\retailmedia\v2022_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExternalCampaignAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalCampaignAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'drawable_balance_ids' => 'string[]',
        'click_attribution_window' => 'string',
        'view_attribution_window' => 'string',
        'name' => 'string',
        'budget' => 'float',
        'click_attribution_scope' => 'string',
        'view_attribution_scope' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'drawable_balance_ids' => 'long-id',
        'click_attribution_window' => null,
        'view_attribution_window' => null,
        'name' => null,
        'budget' => 'decimal',
        'click_attribution_scope' => null,
        'view_attribution_scope' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'drawable_balance_ids' => false,
		'click_attribution_window' => false,
		'view_attribution_window' => false,
		'name' => false,
		'budget' => false,
		'click_attribution_scope' => false,
		'view_attribution_scope' => false
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
        'type' => 'type',
        'drawable_balance_ids' => 'drawableBalanceIds',
        'click_attribution_window' => 'clickAttributionWindow',
        'view_attribution_window' => 'viewAttributionWindow',
        'name' => 'name',
        'budget' => 'budget',
        'click_attribution_scope' => 'clickAttributionScope',
        'view_attribution_scope' => 'viewAttributionScope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'drawable_balance_ids' => 'setDrawableBalanceIds',
        'click_attribution_window' => 'setClickAttributionWindow',
        'view_attribution_window' => 'setViewAttributionWindow',
        'name' => 'setName',
        'budget' => 'setBudget',
        'click_attribution_scope' => 'setClickAttributionScope',
        'view_attribution_scope' => 'setViewAttributionScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'drawable_balance_ids' => 'getDrawableBalanceIds',
        'click_attribution_window' => 'getClickAttributionWindow',
        'view_attribution_window' => 'getViewAttributionWindow',
        'name' => 'getName',
        'budget' => 'getBudget',
        'click_attribution_scope' => 'getClickAttributionScope',
        'view_attribution_scope' => 'getViewAttributionScope'
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

    public const TYPE_UNKNOWN = 'unknown';
    public const TYPE_AUCTION = 'auction';
    public const TYPE_PREFERRED = 'preferred';
    public const CLICK_ATTRIBUTION_WINDOW__7_D = '7D';
    public const CLICK_ATTRIBUTION_WINDOW__14_D = '14D';
    public const CLICK_ATTRIBUTION_WINDOW__30_D = '30D';
    public const CLICK_ATTRIBUTION_WINDOW_UNKNOWN = 'unknown';
    public const VIEW_ATTRIBUTION_WINDOW_NONE = 'none';
    public const VIEW_ATTRIBUTION_WINDOW__1_D = '1D';
    public const VIEW_ATTRIBUTION_WINDOW__7_D = '7D';
    public const VIEW_ATTRIBUTION_WINDOW__14_D = '14D';
    public const VIEW_ATTRIBUTION_WINDOW__30_D = '30D';
    public const VIEW_ATTRIBUTION_WINDOW_UNKNOWN = 'unknown';
    public const CLICK_ATTRIBUTION_SCOPE_UNKNOWN = 'unknown';
    public const CLICK_ATTRIBUTION_SCOPE_SAME_SKU = 'sameSku';
    public const CLICK_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY = 'sameSkuCategory';
    public const CLICK_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY_BRAND = 'sameSkuCategoryBrand';
    public const VIEW_ATTRIBUTION_SCOPE_UNKNOWN = 'unknown';
    public const VIEW_ATTRIBUTION_SCOPE_SAME_SKU = 'sameSku';
    public const VIEW_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY = 'sameSkuCategory';
    public const VIEW_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY_BRAND = 'sameSkuCategoryBrand';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_AUCTION,
            self::TYPE_PREFERRED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClickAttributionWindowAllowableValues()
    {
        return [
            self::CLICK_ATTRIBUTION_WINDOW__7_D,
            self::CLICK_ATTRIBUTION_WINDOW__14_D,
            self::CLICK_ATTRIBUTION_WINDOW__30_D,
            self::CLICK_ATTRIBUTION_WINDOW_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViewAttributionWindowAllowableValues()
    {
        return [
            self::VIEW_ATTRIBUTION_WINDOW_NONE,
            self::VIEW_ATTRIBUTION_WINDOW__1_D,
            self::VIEW_ATTRIBUTION_WINDOW__7_D,
            self::VIEW_ATTRIBUTION_WINDOW__14_D,
            self::VIEW_ATTRIBUTION_WINDOW__30_D,
            self::VIEW_ATTRIBUTION_WINDOW_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClickAttributionScopeAllowableValues()
    {
        return [
            self::CLICK_ATTRIBUTION_SCOPE_UNKNOWN,
            self::CLICK_ATTRIBUTION_SCOPE_SAME_SKU,
            self::CLICK_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY,
            self::CLICK_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY_BRAND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViewAttributionScopeAllowableValues()
    {
        return [
            self::VIEW_ATTRIBUTION_SCOPE_UNKNOWN,
            self::VIEW_ATTRIBUTION_SCOPE_SAME_SKU,
            self::VIEW_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY,
            self::VIEW_ATTRIBUTION_SCOPE_SAME_SKU_CATEGORY_BRAND,
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
        $this->setIfExists('type', $data ?? [], 'auction');
        $this->setIfExists('drawable_balance_ids', $data ?? [], null);
        $this->setIfExists('click_attribution_window', $data ?? [], '30D');
        $this->setIfExists('view_attribution_window', $data ?? [], 'none');
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('budget', $data ?? [], null);
        $this->setIfExists('click_attribution_scope', $data ?? [], null);
        $this->setIfExists('view_attribution_scope', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getClickAttributionWindowAllowableValues();
        if (!is_null($this->container['click_attribution_window']) && !in_array($this->container['click_attribution_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'click_attribution_window', must be one of '%s'",
                $this->container['click_attribution_window'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViewAttributionWindowAllowableValues();
        if (!is_null($this->container['view_attribution_window']) && !in_array($this->container['view_attribution_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'view_attribution_window', must be one of '%s'",
                $this->container['view_attribution_window'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getClickAttributionScopeAllowableValues();
        if (!is_null($this->container['click_attribution_scope']) && !in_array($this->container['click_attribution_scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'click_attribution_scope', must be one of '%s'",
                $this->container['click_attribution_scope'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViewAttributionScopeAllowableValues();
        if (!is_null($this->container['view_attribution_scope']) && !in_array($this->container['view_attribution_scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'view_attribution_scope', must be one of '%s'",
                $this->container['view_attribution_scope'],
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets drawable_balance_ids
     *
     * @return string[]|null
     */
    public function getDrawableBalanceIds()
    {
        return $this->container['drawable_balance_ids'];
    }

    /**
     * Sets drawable_balance_ids
     *
     * @param string[]|null $drawable_balance_ids drawable_balance_ids
     *
     * @return self
     */
    public function setDrawableBalanceIds($drawable_balance_ids)
    {
        if (is_null($drawable_balance_ids)) {
            throw new \InvalidArgumentException('non-nullable drawable_balance_ids cannot be null');
        }
        $this->container['drawable_balance_ids'] = $drawable_balance_ids;

        return $this;
    }

    /**
     * Gets click_attribution_window
     *
     * @return string|null
     */
    public function getClickAttributionWindow()
    {
        return $this->container['click_attribution_window'];
    }

    /**
     * Sets click_attribution_window
     *
     * @param string|null $click_attribution_window click_attribution_window
     *
     * @return self
     */
    public function setClickAttributionWindow($click_attribution_window)
    {
        if (is_null($click_attribution_window)) {
            throw new \InvalidArgumentException('non-nullable click_attribution_window cannot be null');
        }
        $allowedValues = $this->getClickAttributionWindowAllowableValues();
        if (!in_array($click_attribution_window, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'click_attribution_window', must be one of '%s'",
                    $click_attribution_window,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['click_attribution_window'] = $click_attribution_window;

        return $this;
    }

    /**
     * Gets view_attribution_window
     *
     * @return string|null
     */
    public function getViewAttributionWindow()
    {
        return $this->container['view_attribution_window'];
    }

    /**
     * Sets view_attribution_window
     *
     * @param string|null $view_attribution_window view_attribution_window
     *
     * @return self
     */
    public function setViewAttributionWindow($view_attribution_window)
    {
        if (is_null($view_attribution_window)) {
            throw new \InvalidArgumentException('non-nullable view_attribution_window cannot be null');
        }
        $allowedValues = $this->getViewAttributionWindowAllowableValues();
        if (!in_array($view_attribution_window, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'view_attribution_window', must be one of '%s'",
                    $view_attribution_window,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['view_attribution_window'] = $view_attribution_window;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalCampaignAttributes., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalCampaignAttributes., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return float|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        if (is_null($budget)) {
            throw new \InvalidArgumentException('non-nullable budget cannot be null');
        }
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets click_attribution_scope
     *
     * @return string|null
     */
    public function getClickAttributionScope()
    {
        return $this->container['click_attribution_scope'];
    }

    /**
     * Sets click_attribution_scope
     *
     * @param string|null $click_attribution_scope click_attribution_scope
     *
     * @return self
     */
    public function setClickAttributionScope($click_attribution_scope)
    {
        if (is_null($click_attribution_scope)) {
            throw new \InvalidArgumentException('non-nullable click_attribution_scope cannot be null');
        }
        $allowedValues = $this->getClickAttributionScopeAllowableValues();
        if (!in_array($click_attribution_scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'click_attribution_scope', must be one of '%s'",
                    $click_attribution_scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['click_attribution_scope'] = $click_attribution_scope;

        return $this;
    }

    /**
     * Gets view_attribution_scope
     *
     * @return string|null
     */
    public function getViewAttributionScope()
    {
        return $this->container['view_attribution_scope'];
    }

    /**
     * Sets view_attribution_scope
     *
     * @param string|null $view_attribution_scope view_attribution_scope
     *
     * @return self
     */
    public function setViewAttributionScope($view_attribution_scope)
    {
        if (is_null($view_attribution_scope)) {
            throw new \InvalidArgumentException('non-nullable view_attribution_scope cannot be null');
        }
        $allowedValues = $this->getViewAttributionScopeAllowableValues();
        if (!in_array($view_attribution_scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'view_attribution_scope', must be one of '%s'",
                    $view_attribution_scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['view_attribution_scope'] = $view_attribution_scope;

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


