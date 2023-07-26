<?php
/**
 * PageTypeEnvironment
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2023_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: 2023-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2023_07\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2023_07\ObjectSerializer;

/**
 * PageTypeEnvironment Class Doc Comment
 *
 * @category Class
 * @description The PageType-Environment Tuples for creatives
 * @package  criteo\api\retailmedia\v2023_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PageTypeEnvironment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageTypeEnvironment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page_type' => 'string',
        'environments' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'page_type' => null,
        'environments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'page_type' => false,
		'environments' => false
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
        'page_type' => 'pageType',
        'environments' => 'environments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_type' => 'setPageType',
        'environments' => 'setEnvironments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_type' => 'getPageType',
        'environments' => 'getEnvironments'
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

    public const PAGE_TYPE_SEARCH = 'Search';
    public const PAGE_TYPE_HOME = 'Home';
    public const PAGE_TYPE_BROWSE = 'Browse';
    public const PAGE_TYPE_CHECKOUT = 'Checkout';
    public const PAGE_TYPE_CATEGORY = 'Category';
    public const PAGE_TYPE_PRODUCT_DETAIL = 'ProductDetail';
    public const PAGE_TYPE_CONFIRMATION = 'Confirmation';
    public const PAGE_TYPE_MERCHANDISING = 'Merchandising';
    public const PAGE_TYPE_DEALS = 'Deals';
    public const ENVIRONMENTS_WEB = 'Web';
    public const ENVIRONMENTS_MOBILE = 'Mobile';
    public const ENVIRONMENTS_APP = 'App';
    public const ENVIRONMENTS_LOCKOUT = 'Lockout';
    public const ENVIRONMENTS_MIXED = 'Mixed';
    public const ENVIRONMENTS_I_OS = 'iOS';
    public const ENVIRONMENTS_ANDROID = 'Android';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageTypeAllowableValues()
    {
        return [
            self::PAGE_TYPE_SEARCH,
            self::PAGE_TYPE_HOME,
            self::PAGE_TYPE_BROWSE,
            self::PAGE_TYPE_CHECKOUT,
            self::PAGE_TYPE_CATEGORY,
            self::PAGE_TYPE_PRODUCT_DETAIL,
            self::PAGE_TYPE_CONFIRMATION,
            self::PAGE_TYPE_MERCHANDISING,
            self::PAGE_TYPE_DEALS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentsAllowableValues()
    {
        return [
            self::ENVIRONMENTS_WEB,
            self::ENVIRONMENTS_MOBILE,
            self::ENVIRONMENTS_APP,
            self::ENVIRONMENTS_LOCKOUT,
            self::ENVIRONMENTS_MIXED,
            self::ENVIRONMENTS_I_OS,
            self::ENVIRONMENTS_ANDROID,
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
        $this->setIfExists('page_type', $data ?? [], null);
        $this->setIfExists('environments', $data ?? [], null);
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

        $allowedValues = $this->getPageTypeAllowableValues();
        if (!is_null($this->container['page_type']) && !in_array($this->container['page_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'page_type', must be one of '%s'",
                $this->container['page_type'],
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
     * Gets page_type
     *
     * @return string|null
     */
    public function getPageType()
    {
        return $this->container['page_type'];
    }

    /**
     * Sets page_type
     *
     * @param string|null $page_type Creative PageType
     *
     * @return self
     */
    public function setPageType($page_type)
    {
        if (is_null($page_type)) {
            throw new \InvalidArgumentException('non-nullable page_type cannot be null');
        }
        $allowedValues = $this->getPageTypeAllowableValues();
        if (!in_array($page_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'page_type', must be one of '%s'",
                    $page_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['page_type'] = $page_type;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return string[]|null
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param string[]|null $environments List of environments per PageType
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        if (is_null($environments)) {
            throw new \InvalidArgumentException('non-nullable environments cannot be null');
        }
        $allowedValues = $this->getEnvironmentsAllowableValues();
        if (array_diff($environments, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'environments', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['environments'] = $environments;

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


