<?php
/**
 * ExternalLineItemPage202110
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2022_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: 2022-10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2022_10\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2022_10\ObjectSerializer;

/**
 * ExternalLineItemPage202110 Class Doc Comment
 *
 * @category Class
 * @description Page information for a preferred line item
 * @package  criteo\api\retailmedia\v2022_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'categories' => '\criteo\api\retailmedia\v2022_10\Model\ExternalLineItemPageCategory202110[]',
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'page_type' => false,
		'categories' => false,
		'search_keywords' => false
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

    public const PAGE_TYPE_SEARCH = 'search';
    public const PAGE_TYPE_HOME = 'home';
    public const PAGE_TYPE_CHECKOUT = 'checkout';
    public const PAGE_TYPE_CATEGORY = 'category';
    public const PAGE_TYPE_PRODUCT_DETAIL = 'productDetail';
    public const PAGE_TYPE_CONFIRMATION = 'confirmation';
    public const PAGE_TYPE_MERCHANDISING = 'merchandising';
    public const PAGE_TYPE_DEALS = 'deals';

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
        $this->setIfExists('page_type', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('search_keywords', $data ?? [], null);
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
     * Gets categories
     *
     * @return \criteo\api\retailmedia\v2022_10\Model\ExternalLineItemPageCategory202110[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \criteo\api\retailmedia\v2022_10\Model\ExternalLineItemPageCategory202110[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
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
        if (is_null($search_keywords)) {
            throw new \InvalidArgumentException('non-nullable search_keywords cannot be null');
        }
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


