<?php
/**
 * SkuDataPreview
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
 * The version of the OpenAPI document: preview
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
 * SkuDataPreview Class Doc Comment
 *
 * @category Class
 * @description Metadata and usage info of a sku search
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SkuDataPreview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuDataPreview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku_key' => 'string',
        'name' => 'string',
        'description' => 'string',
        'category_id' => 'string',
        'category' => 'string',
        'seller_id' => 'string',
        'seller_name' => 'string',
        'brand_id' => 'string',
        'brand_name' => 'string',
        'retailer_id' => 'string',
        'retailer_name' => 'string',
        'price' => 'double',
        'is_in_stock' => 'bool',
        'gtin' => 'string',
        'mpn' => 'string',
        'image_url' => 'string',
        'product_page' => 'string',
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
        'sku_key' => null,
        'name' => null,
        'description' => null,
        'category_id' => null,
        'category' => null,
        'seller_id' => null,
        'seller_name' => null,
        'brand_id' => null,
        'brand_name' => null,
        'retailer_id' => null,
        'retailer_name' => null,
        'price' => 'double',
        'is_in_stock' => null,
        'gtin' => null,
        'mpn' => null,
        'image_url' => null,
        'product_page' => null,
        'updated_at' => 'date-time'
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
        'sku_key' => 'skuKey',
        'name' => 'name',
        'description' => 'description',
        'category_id' => 'categoryId',
        'category' => 'category',
        'seller_id' => 'sellerId',
        'seller_name' => 'sellerName',
        'brand_id' => 'brandId',
        'brand_name' => 'brandName',
        'retailer_id' => 'retailerId',
        'retailer_name' => 'retailerName',
        'price' => 'price',
        'is_in_stock' => 'isInStock',
        'gtin' => 'gtin',
        'mpn' => 'mpn',
        'image_url' => 'imageUrl',
        'product_page' => 'productPage',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku_key' => 'setSkuKey',
        'name' => 'setName',
        'description' => 'setDescription',
        'category_id' => 'setCategoryId',
        'category' => 'setCategory',
        'seller_id' => 'setSellerId',
        'seller_name' => 'setSellerName',
        'brand_id' => 'setBrandId',
        'brand_name' => 'setBrandName',
        'retailer_id' => 'setRetailerId',
        'retailer_name' => 'setRetailerName',
        'price' => 'setPrice',
        'is_in_stock' => 'setIsInStock',
        'gtin' => 'setGtin',
        'mpn' => 'setMpn',
        'image_url' => 'setImageUrl',
        'product_page' => 'setProductPage',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku_key' => 'getSkuKey',
        'name' => 'getName',
        'description' => 'getDescription',
        'category_id' => 'getCategoryId',
        'category' => 'getCategory',
        'seller_id' => 'getSellerId',
        'seller_name' => 'getSellerName',
        'brand_id' => 'getBrandId',
        'brand_name' => 'getBrandName',
        'retailer_id' => 'getRetailerId',
        'retailer_name' => 'getRetailerName',
        'price' => 'getPrice',
        'is_in_stock' => 'getIsInStock',
        'gtin' => 'getGtin',
        'mpn' => 'getMpn',
        'image_url' => 'getImageUrl',
        'product_page' => 'getProductPage',
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
        $this->container['sku_key'] = $data['sku_key'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['seller_name'] = $data['seller_name'] ?? null;
        $this->container['brand_id'] = $data['brand_id'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['retailer_id'] = $data['retailer_id'] ?? null;
        $this->container['retailer_name'] = $data['retailer_name'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['is_in_stock'] = $data['is_in_stock'] ?? null;
        $this->container['gtin'] = $data['gtin'] ?? null;
        $this->container['mpn'] = $data['mpn'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['product_page'] = $data['product_page'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku_key'] === null) {
            $invalidProperties[] = "'sku_key' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 1000)) {
            $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
            $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['brand_id'] === null) {
            $invalidProperties[] = "'brand_id' can't be null";
        }
        if ($this->container['brand_name'] === null) {
            $invalidProperties[] = "'brand_name' can't be null";
        }
        if ((mb_strlen($this->container['brand_name']) > 120)) {
            $invalidProperties[] = "invalid value for 'brand_name', the character length must be smaller than or equal to 120.";
        }

        if ((mb_strlen($this->container['brand_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'brand_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['retailer_id'] === null) {
            $invalidProperties[] = "'retailer_id' can't be null";
        }
        if ($this->container['retailer_name'] === null) {
            $invalidProperties[] = "'retailer_name' can't be null";
        }
        if ((mb_strlen($this->container['retailer_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'retailer_name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['retailer_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'retailer_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['is_in_stock'] === null) {
            $invalidProperties[] = "'is_in_stock' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets sku_key
     *
     * @return string
     */
    public function getSkuKey()
    {
        return $this->container['sku_key'];
    }

    /**
     * Sets sku_key
     *
     * @param string $sku_key The product SKU Key.
     *
     * @return self
     */
    public function setSkuKey($sku_key)
    {
        $this->container['sku_key'] = $sku_key;

        return $this;
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
     * @param string|null $name A short product name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SkuDataPreview., must be smaller than or equal to 1000.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SkuDataPreview., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A product description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string|null $category_id The category Id.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
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
     * @param string|null $category The full category breadcrumb in the retailers catalog.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (!is_null($category) && (mb_strlen($category) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $category when calling SkuDataPreview., must be smaller than or equal to 1000.');
        }
        if (!is_null($category) && (mb_strlen($category) < 0)) {
            throw new \InvalidArgumentException('invalid length for $category when calling SkuDataPreview., must be bigger than or equal to 0.');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string|null $seller_id The id of the seller.
     *
     * @return self
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets seller_name
     *
     * @return string|null
     */
    public function getSellerName()
    {
        return $this->container['seller_name'];
    }

    /**
     * Sets seller_name
     *
     * @param string|null $seller_name The name of the seller.
     *
     * @return self
     */
    public function setSellerName($seller_name)
    {
        $this->container['seller_name'] = $seller_name;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return string
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param string $brand_id The global brand id associated to the product.
     *
     * @return self
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string $brand_name The name of the global brand.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        if ((mb_strlen($brand_name) > 120)) {
            throw new \InvalidArgumentException('invalid length for $brand_name when calling SkuDataPreview., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($brand_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $brand_name when calling SkuDataPreview., must be bigger than or equal to 0.');
        }

        $this->container['brand_name'] = $brand_name;

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
     * @param string $retailer_id The identifier for the retailer the product is listed by.
     *
     * @return self
     */
    public function setRetailerId($retailer_id)
    {
        $this->container['retailer_id'] = $retailer_id;

        return $this;
    }

    /**
     * Gets retailer_name
     *
     * @return string
     */
    public function getRetailerName()
    {
        return $this->container['retailer_name'];
    }

    /**
     * Sets retailer_name
     *
     * @param string $retailer_name The retailer name.
     *
     * @return self
     */
    public function setRetailerName($retailer_name)
    {
        if ((mb_strlen($retailer_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $retailer_name when calling SkuDataPreview., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($retailer_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $retailer_name when calling SkuDataPreview., must be bigger than or equal to 0.');
        }

        $this->container['retailer_name'] = $retailer_name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price The price of the product on the retailer site.
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets is_in_stock
     *
     * @return bool
     */
    public function getIsInStock()
    {
        return $this->container['is_in_stock'];
    }

    /**
     * Sets is_in_stock
     *
     * @param bool $is_in_stock An indication of if the retailer currently has the product in stock.
     *
     * @return self
     */
    public function setIsInStock($is_in_stock)
    {
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
     * @param string|null $gtin A GTIN identifier for the product if available. Covers variations such as EANs and UPCs.
     *
     * @return self
     */
    public function setGtin($gtin)
    {
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
     * @param string|null $mpn The MPN for the product if available.
     *
     * @return self
     */
    public function setMpn($mpn)
    {
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
     * @param string|null $image_url An http image resource provided by the retailer.
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets product_page
     *
     * @return string|null
     */
    public function getProductPage()
    {
        return $this->container['product_page'];
    }

    /**
     * Sets product_page
     *
     * @param string|null $product_page An The product page URL
     *
     * @return self
     */
    public function setProductPage($product_page)
    {
        $this->container['product_page'] = $product_page;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The last time this product was updated in the Retail Media Catalog. Represented as a UTC ISO8601 string.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
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


