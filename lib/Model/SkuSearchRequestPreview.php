<?php
/**
 * SkuSearchRequestPreview
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
 * Criteo publicly exposed API
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
 * SkuSearchRequestPreview Class Doc Comment
 *
 * @category Class
 * @description A request for sku by sellers or brands.
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkuSearchRequestPreview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuSearchRequestPreview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query_string' => 'string',
        'retailer_id' => 'string',
        'sellers' => 'string[]',
        'brand_ids' => 'string[]',
        'sku_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'query_string' => null,
        'retailer_id' => 'long-id',
        'sellers' => null,
        'brand_ids' => 'long-id',
        'sku_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query_string' => false,
		'retailer_id' => false,
		'sellers' => false,
		'brand_ids' => false,
		'sku_type' => false
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
        'query_string' => 'queryString',
        'retailer_id' => 'retailerId',
        'sellers' => 'sellers',
        'brand_ids' => 'brandIds',
        'sku_type' => 'skuType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query_string' => 'setQueryString',
        'retailer_id' => 'setRetailerId',
        'sellers' => 'setSellers',
        'brand_ids' => 'setBrandIds',
        'sku_type' => 'setSkuType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query_string' => 'getQueryString',
        'retailer_id' => 'getRetailerId',
        'sellers' => 'getSellers',
        'brand_ids' => 'getBrandIds',
        'sku_type' => 'getSkuType'
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

    public const SKU_TYPE_BRAND = 'brand';
    public const SKU_TYPE_SELLER = 'seller';
    public const SKU_TYPE_ALL = 'all';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSkuTypeAllowableValues()
    {
        return [
            self::SKU_TYPE_BRAND,
            self::SKU_TYPE_SELLER,
            self::SKU_TYPE_ALL,
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
        $this->setIfExists('query_string', $data ?? [], null);
        $this->setIfExists('retailer_id', $data ?? [], null);
        $this->setIfExists('sellers', $data ?? [], null);
        $this->setIfExists('brand_ids', $data ?? [], null);
        $this->setIfExists('sku_type', $data ?? [], 'brand');
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

        if ($this->container['query_string'] === null) {
            $invalidProperties[] = "'query_string' can't be null";
        }
        if ($this->container['retailer_id'] === null) {
            $invalidProperties[] = "'retailer_id' can't be null";
        }
        $allowedValues = $this->getSkuTypeAllowableValues();
        if (!is_null($this->container['sku_type']) && !in_array($this->container['sku_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sku_type', must be one of '%s'",
                $this->container['sku_type'],
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
     * Gets query_string
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->container['query_string'];
    }

    /**
     * Sets query_string
     *
     * @param string $query_string Query string to search for across SKU's properties (gtin, mpn, feed ID, Title, and Description)
     *
     * @return self
     */
    public function setQueryString($query_string)
    {
        if (is_null($query_string)) {
            throw new \InvalidArgumentException('non-nullable query_string cannot be null');
        }
        $this->container['query_string'] = $query_string;

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
     * @param string $retailer_id Retailer Id
     *
     * @return self
     */
    public function setRetailerId($retailer_id)
    {
        if (is_null($retailer_id)) {
            throw new \InvalidArgumentException('non-nullable retailer_id cannot be null');
        }
        $this->container['retailer_id'] = $retailer_id;

        return $this;
    }

    /**
     * Gets sellers
     *
     * @return string[]|null
     */
    public function getSellers()
    {
        return $this->container['sellers'];
    }

    /**
     * Sets sellers
     *
     * @param string[]|null $sellers A list of seller names and/or seller Id's
     *
     * @return self
     */
    public function setSellers($sellers)
    {
        if (is_null($sellers)) {
            throw new \InvalidArgumentException('non-nullable sellers cannot be null');
        }
        $this->container['sellers'] = $sellers;

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
     * @param string[]|null $brand_ids A list of brand Id's
     *
     * @return self
     */
    public function setBrandIds($brand_ids)
    {
        if (is_null($brand_ids)) {
            throw new \InvalidArgumentException('non-nullable brand_ids cannot be null');
        }
        $this->container['brand_ids'] = $brand_ids;

        return $this;
    }

    /**
     * Gets sku_type
     *
     * @return string|null
     */
    public function getSkuType()
    {
        return $this->container['sku_type'];
    }

    /**
     * Sets sku_type
     *
     * @param string|null $sku_type Enum to set isSellerSku field
     *
     * @return self
     */
    public function setSkuType($sku_type)
    {
        if (is_null($sku_type)) {
            throw new \InvalidArgumentException('non-nullable sku_type cannot be null');
        }
        $allowedValues = $this->getSkuTypeAllowableValues();
        if (!in_array($sku_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sku_type', must be one of '%s'",
                    $sku_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sku_type'] = $sku_type;

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


