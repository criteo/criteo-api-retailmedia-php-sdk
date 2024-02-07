<?php
/**
 * LineItemBidMultipliers
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2024_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: 2024-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2024_01\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2024_01\ObjectSerializer;

/**
 * LineItemBidMultipliers Class Doc Comment
 *
 * @category Class
 * @description Data model representing bid multipliers on a line item
 * @package  criteo\api\retailmedia\v2024_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LineItemBidMultipliers implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItemBidMultipliers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'search' => 'float',
        'homepage' => 'float',
        'categories' => 'float',
        'product_detail' => 'float',
        'confirmation' => 'float',
        'merchandising' => 'float',
        'deals' => 'float',
        'checkout' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'search' => 'double',
        'homepage' => 'double',
        'categories' => 'double',
        'product_detail' => 'double',
        'confirmation' => 'double',
        'merchandising' => 'double',
        'deals' => 'double',
        'checkout' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'search' => false,
		'homepage' => false,
		'categories' => false,
		'product_detail' => false,
		'confirmation' => false,
		'merchandising' => false,
		'deals' => false,
		'checkout' => false
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
        'search' => 'search',
        'homepage' => 'homepage',
        'categories' => 'categories',
        'product_detail' => 'productDetail',
        'confirmation' => 'confirmation',
        'merchandising' => 'merchandising',
        'deals' => 'deals',
        'checkout' => 'checkout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search' => 'setSearch',
        'homepage' => 'setHomepage',
        'categories' => 'setCategories',
        'product_detail' => 'setProductDetail',
        'confirmation' => 'setConfirmation',
        'merchandising' => 'setMerchandising',
        'deals' => 'setDeals',
        'checkout' => 'setCheckout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search' => 'getSearch',
        'homepage' => 'getHomepage',
        'categories' => 'getCategories',
        'product_detail' => 'getProductDetail',
        'confirmation' => 'getConfirmation',
        'merchandising' => 'getMerchandising',
        'deals' => 'getDeals',
        'checkout' => 'getCheckout'
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
        $this->setIfExists('search', $data ?? [], null);
        $this->setIfExists('homepage', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('product_detail', $data ?? [], null);
        $this->setIfExists('confirmation', $data ?? [], null);
        $this->setIfExists('merchandising', $data ?? [], null);
        $this->setIfExists('deals', $data ?? [], null);
        $this->setIfExists('checkout', $data ?? [], null);
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
     * Gets search
     *
     * @return float|null
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param float|null $search search
     *
     * @return self
     */
    public function setSearch($search)
    {
        if (is_null($search)) {
            throw new \InvalidArgumentException('non-nullable search cannot be null');
        }
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets homepage
     *
     * @return float|null
     */
    public function getHomepage()
    {
        return $this->container['homepage'];
    }

    /**
     * Sets homepage
     *
     * @param float|null $homepage homepage
     *
     * @return self
     */
    public function setHomepage($homepage)
    {
        if (is_null($homepage)) {
            throw new \InvalidArgumentException('non-nullable homepage cannot be null');
        }
        $this->container['homepage'] = $homepage;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return float|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param float|null $categories categories
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
     * Gets product_detail
     *
     * @return float|null
     */
    public function getProductDetail()
    {
        return $this->container['product_detail'];
    }

    /**
     * Sets product_detail
     *
     * @param float|null $product_detail product_detail
     *
     * @return self
     */
    public function setProductDetail($product_detail)
    {
        if (is_null($product_detail)) {
            throw new \InvalidArgumentException('non-nullable product_detail cannot be null');
        }
        $this->container['product_detail'] = $product_detail;

        return $this;
    }

    /**
     * Gets confirmation
     *
     * @return float|null
     */
    public function getConfirmation()
    {
        return $this->container['confirmation'];
    }

    /**
     * Sets confirmation
     *
     * @param float|null $confirmation confirmation
     *
     * @return self
     */
    public function setConfirmation($confirmation)
    {
        if (is_null($confirmation)) {
            throw new \InvalidArgumentException('non-nullable confirmation cannot be null');
        }
        $this->container['confirmation'] = $confirmation;

        return $this;
    }

    /**
     * Gets merchandising
     *
     * @return float|null
     */
    public function getMerchandising()
    {
        return $this->container['merchandising'];
    }

    /**
     * Sets merchandising
     *
     * @param float|null $merchandising merchandising
     *
     * @return self
     */
    public function setMerchandising($merchandising)
    {
        if (is_null($merchandising)) {
            throw new \InvalidArgumentException('non-nullable merchandising cannot be null');
        }
        $this->container['merchandising'] = $merchandising;

        return $this;
    }

    /**
     * Gets deals
     *
     * @return float|null
     */
    public function getDeals()
    {
        return $this->container['deals'];
    }

    /**
     * Sets deals
     *
     * @param float|null $deals deals
     *
     * @return self
     */
    public function setDeals($deals)
    {
        if (is_null($deals)) {
            throw new \InvalidArgumentException('non-nullable deals cannot be null');
        }
        $this->container['deals'] = $deals;

        return $this;
    }

    /**
     * Gets checkout
     *
     * @return float|null
     */
    public function getCheckout()
    {
        return $this->container['checkout'];
    }

    /**
     * Sets checkout
     *
     * @param float|null $checkout checkout
     *
     * @return self
     */
    public function setCheckout($checkout)
    {
        if (is_null($checkout)) {
            throw new \InvalidArgumentException('non-nullable checkout cannot be null');
        }
        $this->container['checkout'] = $checkout;

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


