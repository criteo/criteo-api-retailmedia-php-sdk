<?php
/**
 * SkuSearchResult
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
 * SkuSearchResult Class Doc Comment
 *
 * @category Class
 * @description Data model for response resource
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkuSearchResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuSearchResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'category_id' => 'string',
        'category' => 'string',
        'global_brand_id' => 'string',
        'global_brand_name' => 'string',
        'retailer_brand_id' => 'string',
        'retailer_brand_name' => 'string',
        'global_category_id' => 'string',
        'price' => 'float',
        'model_number' => 'string',
        'is_in_stock' => 'bool',
        'gtin' => 'string',
        'mpn' => 'string',
        'image_url' => 'string',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'category_id' => null,
        'category' => null,
        'global_brand_id' => null,
        'global_brand_name' => null,
        'retailer_brand_id' => null,
        'retailer_brand_name' => null,
        'global_category_id' => null,
        'price' => 'double',
        'model_number' => null,
        'is_in_stock' => null,
        'gtin' => null,
        'mpn' => null,
        'image_url' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'category_id' => true,
		'category' => true,
		'global_brand_id' => true,
		'global_brand_name' => true,
		'retailer_brand_id' => true,
		'retailer_brand_name' => true,
		'global_category_id' => true,
		'price' => true,
		'model_number' => true,
		'is_in_stock' => true,
		'gtin' => true,
		'mpn' => true,
		'image_url' => true,
		'updated_at' => true
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
        'name' => 'name',
        'category_id' => 'categoryId',
        'category' => 'category',
        'global_brand_id' => 'globalBrandId',
        'global_brand_name' => 'globalBrandName',
        'retailer_brand_id' => 'retailerBrandId',
        'retailer_brand_name' => 'retailerBrandName',
        'global_category_id' => 'globalCategoryId',
        'price' => 'price',
        'model_number' => 'modelNumber',
        'is_in_stock' => 'isInStock',
        'gtin' => 'gtin',
        'mpn' => 'mpn',
        'image_url' => 'imageUrl',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'category_id' => 'setCategoryId',
        'category' => 'setCategory',
        'global_brand_id' => 'setGlobalBrandId',
        'global_brand_name' => 'setGlobalBrandName',
        'retailer_brand_id' => 'setRetailerBrandId',
        'retailer_brand_name' => 'setRetailerBrandName',
        'global_category_id' => 'setGlobalCategoryId',
        'price' => 'setPrice',
        'model_number' => 'setModelNumber',
        'is_in_stock' => 'setIsInStock',
        'gtin' => 'setGtin',
        'mpn' => 'setMpn',
        'image_url' => 'setImageUrl',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'category_id' => 'getCategoryId',
        'category' => 'getCategory',
        'global_brand_id' => 'getGlobalBrandId',
        'global_brand_name' => 'getGlobalBrandName',
        'retailer_brand_id' => 'getRetailerBrandId',
        'retailer_brand_name' => 'getRetailerBrandName',
        'global_category_id' => 'getGlobalCategoryId',
        'price' => 'getPrice',
        'model_number' => 'getModelNumber',
        'is_in_stock' => 'getIsInStock',
        'gtin' => 'getGtin',
        'mpn' => 'getMpn',
        'image_url' => 'getImageUrl',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('global_brand_id', $data ?? [], null);
        $this->setIfExists('global_brand_name', $data ?? [], null);
        $this->setIfExists('retailer_brand_id', $data ?? [], null);
        $this->setIfExists('retailer_brand_name', $data ?? [], null);
        $this->setIfExists('global_category_id', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('model_number', $data ?? [], null);
        $this->setIfExists('is_in_stock', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('mpn', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The product name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id The cateogry Id
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            array_push($this->openAPINullablesSetToNull, 'category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category The full retailer category taken from the retailers catalog
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            array_push($this->openAPINullablesSetToNull, 'category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets global_brand_id
     *
     * @return string|null
     */
    public function getGlobalBrandId()
    {
        return $this->container['global_brand_id'];
    }

    /**
     * Sets global_brand_id
     *
     * @param string|null $global_brand_id The global brand id associated to the product
     *
     * @return self
     */
    public function setGlobalBrandId($global_brand_id)
    {
        if (is_null($global_brand_id)) {
            array_push($this->openAPINullablesSetToNull, 'global_brand_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('global_brand_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['global_brand_id'] = $global_brand_id;

        return $this;
    }

    /**
     * Gets global_brand_name
     *
     * @return string|null
     */
    public function getGlobalBrandName()
    {
        return $this->container['global_brand_name'];
    }

    /**
     * Sets global_brand_name
     *
     * @param string|null $global_brand_name The name of the global brand
     *
     * @return self
     */
    public function setGlobalBrandName($global_brand_name)
    {
        if (is_null($global_brand_name)) {
            array_push($this->openAPINullablesSetToNull, 'global_brand_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('global_brand_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['global_brand_name'] = $global_brand_name;

        return $this;
    }

    /**
     * Gets retailer_brand_id
     *
     * @return string|null
     */
    public function getRetailerBrandId()
    {
        return $this->container['retailer_brand_id'];
    }

    /**
     * Sets retailer_brand_id
     *
     * @param string|null $retailer_brand_id The retailer brand id associated to the product
     *
     * @return self
     */
    public function setRetailerBrandId($retailer_brand_id)
    {
        if (is_null($retailer_brand_id)) {
            array_push($this->openAPINullablesSetToNull, 'retailer_brand_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('retailer_brand_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['retailer_brand_id'] = $retailer_brand_id;

        return $this;
    }

    /**
     * Gets retailer_brand_name
     *
     * @return string|null
     */
    public function getRetailerBrandName()
    {
        return $this->container['retailer_brand_name'];
    }

    /**
     * Sets retailer_brand_name
     *
     * @param string|null $retailer_brand_name The name of the retailer brand
     *
     * @return self
     */
    public function setRetailerBrandName($retailer_brand_name)
    {
        if (is_null($retailer_brand_name)) {
            array_push($this->openAPINullablesSetToNull, 'retailer_brand_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('retailer_brand_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['retailer_brand_name'] = $retailer_brand_name;

        return $this;
    }

    /**
     * Gets global_category_id
     *
     * @return string|null
     */
    public function getGlobalCategoryId()
    {
        return $this->container['global_category_id'];
    }

    /**
     * Sets global_category_id
     *
     * @param string|null $global_category_id the Global Category Id
     *
     * @return self
     */
    public function setGlobalCategoryId($global_category_id)
    {
        if (is_null($global_category_id)) {
            array_push($this->openAPINullablesSetToNull, 'global_category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('global_category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['global_category_id'] = $global_category_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price The product price pulled from the retailer's catalog
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets model_number
     *
     * @return string|null
     */
    public function getModelNumber()
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number
     *
     * @param string|null $model_number The model number for the product
     *
     * @return self
     */
    public function setModelNumber($model_number)
    {
        if (is_null($model_number)) {
            array_push($this->openAPINullablesSetToNull, 'model_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('model_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets is_in_stock
     *
     * @return bool|null
     */
    public function getIsInStock()
    {
        return $this->container['is_in_stock'];
    }

    /**
     * Sets is_in_stock
     *
     * @param bool|null $is_in_stock Indicates if the retailer product is in stock
     *
     * @return self
     */
    public function setIsInStock($is_in_stock)
    {
        if (is_null($is_in_stock)) {
            array_push($this->openAPINullablesSetToNull, 'is_in_stock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_in_stock', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_in_stock'] = $is_in_stock;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin A GTIN identifier for the product if available.  TIt covers variations such as EANs and UPCs
     *
     * @return self
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            array_push($this->openAPINullablesSetToNull, 'gtin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gtin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string|null $mpn The MPN identifier for the product if available
     *
     * @return self
     */
    public function setMpn($mpn)
    {
        if (is_null($mpn)) {
            array_push($this->openAPINullablesSetToNull, 'mpn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mpn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url An http image resource provided by the retailer catalog
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        if (is_null($image_url)) {
            array_push($this->openAPINullablesSetToNull, 'image_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at The last time this product was updated in the Retail Media Catalog.  The date value is represented as an UTC ISO8601 string
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            array_push($this->openAPINullablesSetToNull, 'updated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updated_at'] = $updated_at;

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


