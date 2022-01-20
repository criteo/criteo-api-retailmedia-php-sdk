<?php
/**
 * ExternalLineItemPage202110
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2022_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2022-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2022_01\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2022_01\ObjectSerializer;

/**
 * ExternalLineItemPage202110 Class Doc Comment
 *
 * @category Class
 * @description Page information for a preferred line item
 * @package  criteo\api\retailmedia\v2022_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExternalLineItemPage202110 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalLineItemPage202110';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page_type' => 'string',
        'categories' => '\criteo\api\retailmedia\v2022_01\Model\ExternalLineItemPageCategory202110[]',
        'search_keywords' => 'string[]'
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
        'categories' => null,
        'search_keywords' => null
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
        'categories' => 'categories',
        'search_keywords' => 'searchKeywords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_type' => 'setPageType',
        'categories' => 'setCategories',
        'search_keywords' => 'setSearchKeywords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_type' => 'getPageType',
        'categories' => 'getCategories',
        'search_keywords' => 'getSearchKeywords'
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

    const PAGE_TYPE_SEARCH = 'search';
    const PAGE_TYPE_HOME = 'home';
    const PAGE_TYPE_CHECKOUT = 'checkout';
    const PAGE_TYPE_CATEGORY = 'category';
    const PAGE_TYPE_PRODUCT_DETAIL = 'productDetail';
    const PAGE_TYPE_CONFIRMATION = 'confirmation';
    const PAGE_TYPE_MERCHANDISING = 'merchandising';
    const PAGE_TYPE_DEALS = 'deals';

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
            self::PAGE_TYPE_CHECKOUT,
            self::PAGE_TYPE_CATEGORY,
            self::PAGE_TYPE_PRODUCT_DETAIL,
            self::PAGE_TYPE_CONFIRMATION,
            self::PAGE_TYPE_MERCHANDISING,
            self::PAGE_TYPE_DEALS,
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
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['search_keywords'] = $data['search_keywords'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['page_type'] === null) {
            $invalidProperties[] = "'page_type' can't be null";
        }
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
     * @return string
     */
    public function getPageType()
    {
        return $this->container['page_type'];
    }

    /**
     * Sets page_type
     *
     * @param string $page_type page_type
     *
     * @return self
     */
    public function setPageType($page_type)
    {
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
     * Gets categories
     *
     * @return \criteo\api\retailmedia\v2022_01\Model\ExternalLineItemPageCategory202110[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \criteo\api\retailmedia\v2022_01\Model\ExternalLineItemPageCategory202110[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets search_keywords
     *
     * @return string[]|null
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     *
     * @param string[]|null $search_keywords search_keywords
     *
     * @return self
     */
    public function setSearchKeywords($search_keywords)
    {
        $this->container['search_keywords'] = $search_keywords;

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


