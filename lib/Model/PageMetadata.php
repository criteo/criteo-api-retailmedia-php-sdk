<?php
/**
 * PageMetadata
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
 * The version of the OpenAPI document: Preview
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
 * PageMetadata Class Doc Comment
 *
 * @category Class
 * @description Metadata related to the current request
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PageMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_items_across_all_pages' => 'int',
        'current_page_size' => 'int',
        'current_page_index' => 'int',
        'total_pages' => 'int',
        'next_page' => 'string',
        'previous_page' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_items_across_all_pages' => 'int64',
        'current_page_size' => 'int32',
        'current_page_index' => 'int32',
        'total_pages' => 'int64',
        'next_page' => null,
        'previous_page' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total_items_across_all_pages' => true,
		'current_page_size' => false,
		'current_page_index' => false,
		'total_pages' => true,
		'next_page' => false,
		'previous_page' => false
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
        'total_items_across_all_pages' => 'totalItemsAcrossAllPages',
        'current_page_size' => 'currentPageSize',
        'current_page_index' => 'currentPageIndex',
        'total_pages' => 'totalPages',
        'next_page' => 'nextPage',
        'previous_page' => 'previousPage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_items_across_all_pages' => 'setTotalItemsAcrossAllPages',
        'current_page_size' => 'setCurrentPageSize',
        'current_page_index' => 'setCurrentPageIndex',
        'total_pages' => 'setTotalPages',
        'next_page' => 'setNextPage',
        'previous_page' => 'setPreviousPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_items_across_all_pages' => 'getTotalItemsAcrossAllPages',
        'current_page_size' => 'getCurrentPageSize',
        'current_page_index' => 'getCurrentPageIndex',
        'total_pages' => 'getTotalPages',
        'next_page' => 'getNextPage',
        'previous_page' => 'getPreviousPage'
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
        $this->setIfExists('total_items_across_all_pages', $data ?? [], null);
        $this->setIfExists('current_page_size', $data ?? [], null);
        $this->setIfExists('current_page_index', $data ?? [], null);
        $this->setIfExists('total_pages', $data ?? [], null);
        $this->setIfExists('next_page', $data ?? [], null);
        $this->setIfExists('previous_page', $data ?? [], null);
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

        if ($this->container['current_page_size'] === null) {
            $invalidProperties[] = "'current_page_size' can't be null";
        }
        if ($this->container['current_page_index'] === null) {
            $invalidProperties[] = "'current_page_index' can't be null";
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
     * Gets total_items_across_all_pages
     *
     * @return int|null
     */
    public function getTotalItemsAcrossAllPages()
    {
        return $this->container['total_items_across_all_pages'];
    }

    /**
     * Sets total_items_across_all_pages
     *
     * @param int|null $total_items_across_all_pages total_items_across_all_pages
     *
     * @return self
     */
    public function setTotalItemsAcrossAllPages($total_items_across_all_pages)
    {
        if (is_null($total_items_across_all_pages)) {
            array_push($this->openAPINullablesSetToNull, 'total_items_across_all_pages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_items_across_all_pages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_items_across_all_pages'] = $total_items_across_all_pages;

        return $this;
    }

    /**
     * Gets current_page_size
     *
     * @return int
     */
    public function getCurrentPageSize()
    {
        return $this->container['current_page_size'];
    }

    /**
     * Sets current_page_size
     *
     * @param int $current_page_size current_page_size
     *
     * @return self
     */
    public function setCurrentPageSize($current_page_size)
    {
        if (is_null($current_page_size)) {
            throw new \InvalidArgumentException('non-nullable current_page_size cannot be null');
        }
        $this->container['current_page_size'] = $current_page_size;

        return $this;
    }

    /**
     * Gets current_page_index
     *
     * @return int
     */
    public function getCurrentPageIndex()
    {
        return $this->container['current_page_index'];
    }

    /**
     * Sets current_page_index
     *
     * @param int $current_page_index current_page_index
     *
     * @return self
     */
    public function setCurrentPageIndex($current_page_index)
    {
        if (is_null($current_page_index)) {
            throw new \InvalidArgumentException('non-nullable current_page_index cannot be null');
        }
        $this->container['current_page_index'] = $current_page_index;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int|null $total_pages total_pages
     *
     * @return self
     */
    public function setTotalPages($total_pages)
    {
        if (is_null($total_pages)) {
            array_push($this->openAPINullablesSetToNull, 'total_pages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_pages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets next_page
     *
     * @return string|null
     */
    public function getNextPage()
    {
        return $this->container['next_page'];
    }

    /**
     * Sets next_page
     *
     * @param string|null $next_page next_page
     *
     * @return self
     */
    public function setNextPage($next_page)
    {
        if (is_null($next_page)) {
            throw new \InvalidArgumentException('non-nullable next_page cannot be null');
        }
        $this->container['next_page'] = $next_page;

        return $this;
    }

    /**
     * Gets previous_page
     *
     * @return string|null
     */
    public function getPreviousPage()
    {
        return $this->container['previous_page'];
    }

    /**
     * Sets previous_page
     *
     * @param string|null $previous_page previous_page
     *
     * @return self
     */
    public function setPreviousPage($previous_page)
    {
        if (is_null($previous_page)) {
            throw new \InvalidArgumentException('non-nullable previous_page cannot be null');
        }
        $this->container['previous_page'] = $previous_page;

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


