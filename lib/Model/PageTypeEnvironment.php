<?php
/**
 * PageTypeEnvironment
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: Preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * PageTypeEnvironment Class Doc Comment
 *
 * @category Class
 * @description The PageType-Environment Tuples for creatives
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
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

    const PAGE_TYPE_SEARCH = 'Search';
    const PAGE_TYPE_HOME = 'Home';
    const PAGE_TYPE_BROWSE = 'Browse';
    const PAGE_TYPE_CHECKOUT = 'Checkout';
    const PAGE_TYPE_CATEGORY = 'Category';
    const PAGE_TYPE_PRODUCT_DETAIL = 'ProductDetail';
    const PAGE_TYPE_CONFIRMATION = 'Confirmation';
    const PAGE_TYPE_MERCHANDISING = 'Merchandising';
    const PAGE_TYPE_DEALS = 'Deals';
    const ENVIRONMENTS_WEB = 'Web';
    const ENVIRONMENTS_MOBILE = 'Mobile';
    const ENVIRONMENTS_APP = 'App';
    const ENVIRONMENTS_LOCKOUT = 'Lockout';
    const ENVIRONMENTS_MIXED = 'Mixed';
    const ENVIRONMENTS_I_OS = 'iOS';
    const ENVIRONMENTS_ANDROID = 'Android';

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
        $this->container['page_type'] = $data['page_type'] ?? null;
        $this->container['environments'] = $data['environments'] ?? null;
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
        $allowedValues = $this->getPageTypeAllowableValues();
        if (!is_null($page_type) && !in_array($page_type, $allowedValues, true)) {
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
        $allowedValues = $this->getEnvironmentsAllowableValues();
        if (!is_null($environments) && array_diff($environments, $allowedValues)) {
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


