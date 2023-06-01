<?php
/**
 * SkuDataPreview
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
 * SkuDataPreview Class Doc Comment
 *
 * @category Class
 * @description Metadata and usage info of a sku search
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'is_seller_sku' => 'bool',
        'is_buybox' => 'bool',
        'seller_id' => 'string',
        'seller_name' => 'string',
        'brand_id' => 'string',
        'brand_name' => 'string',
        'retailer_id' => 'string',
        'retailer_name' => 'string',
        'price' => 'float',
        'is_in_stock' => 'bool',
        'gtin' => 'string',
        'mpn' => 'string',
        'model_number' => 'string',
        'parent_id' => 'string',
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
        'is_seller_sku' => null,
        'is_buybox' => null,
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
        'model_number' => null,
        'parent_id' => null,
        'image_url' => null,
        'product_page' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku_key' => false,
		'name' => false,
		'description' => false,
		'category_id' => false,
		'category' => false,
		'is_seller_sku' => false,
		'is_buybox' => false,
		'seller_id' => false,
		'seller_name' => false,
		'brand_id' => false,
		'brand_name' => false,
		'retailer_id' => false,
		'retailer_name' => false,
		'price' => false,
		'is_in_stock' => false,
		'gtin' => false,
		'mpn' => false,
		'model_number' => false,
		'parent_id' => false,
		'image_url' => false,
		'product_page' => false,
		'updated_at' => false
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
        'sku_key' => 'skuKey',
        'name' => 'name',
        'description' => 'description',
        'category_id' => 'categoryId',
        'category' => 'category',
        'is_seller_sku' => 'isSellerSku',
        'is_buybox' => 'isBuybox',
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
        'model_number' => 'modelNumber',
        'parent_id' => 'parentId',
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
        'is_seller_sku' => 'setIsSellerSku',
        'is_buybox' => 'setIsBuybox',
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
        'model_number' => 'setModelNumber',
        'parent_id' => 'setParentId',
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
        'is_seller_sku' => 'getIsSellerSku',
        'is_buybox' => 'getIsBuybox',
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
        'model_number' => 'getModelNumber',
        'parent_id' => 'getParentId',
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
        $this->setIfExists('sku_key', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('is_seller_sku', $data ?? [], null);
        $this->setIfExists('is_buybox', $data ?? [], null);
        $this->setIfExists('seller_id', $data ?? [], null);
        $this->setIfExists('seller_name', $data ?? [], null);
        $this->setIfExists('brand_id', $data ?? [], null);
        $this->setIfExists('brand_name', $data ?? [], null);
        $this->setIfExists('retailer_id', $data ?? [], null);
        $this->setIfExists('retailer_name', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('is_in_stock', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('mpn', $data ?? [], null);
        $this->setIfExists('model_number', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('product_page', $data ?? [], null);
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
        if (is_null($sku_key)) {
            throw new \InvalidArgumentException('non-nullable sku_key cannot be null');
        }
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SkuDataPreview., must be smaller than or equal to 1000.');
        }
        if ((mb_strlen($name) < 0)) {
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
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
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
        if (is_null($category_id)) {
            throw new \InvalidArgumentException('non-nullable category_id cannot be null');
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
     * @param string|null $category The full category breadcrumb in the retailers catalog.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        if ((mb_strlen($category) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $category when calling SkuDataPreview., must be smaller than or equal to 1000.');
        }
        if ((mb_strlen($category) < 0)) {
            throw new \InvalidArgumentException('invalid length for $category when calling SkuDataPreview., must be bigger than or equal to 0.');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets is_seller_sku
     *
     * @return bool|null
     */
    public function getIsSellerSku()
    {
        return $this->container['is_seller_sku'];
    }

    /**
     * Sets is_seller_sku
     *
     * @param bool|null $is_seller_sku An indication of if the sku is seller sku.
     *
     * @return self
     */
    public function setIsSellerSku($is_seller_sku)
    {
        if (is_null($is_seller_sku)) {
            throw new \InvalidArgumentException('non-nullable is_seller_sku cannot be null');
        }
        $this->container['is_seller_sku'] = $is_seller_sku;

        return $this;
    }

    /**
     * Gets is_buybox
     *
     * @return bool|null
     */
    public function getIsBuybox()
    {
        return $this->container['is_buybox'];
    }

    /**
     * Sets is_buybox
     *
     * @param bool|null $is_buybox Whether the Sku is a Buybox Winner.
     *
     * @return self
     */
    public function setIsBuybox($is_buybox)
    {
        if (is_null($is_buybox)) {
            throw new \InvalidArgumentException('non-nullable is_buybox cannot be null');
        }
        $this->container['is_buybox'] = $is_buybox;

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
        if (is_null($seller_id)) {
            throw new \InvalidArgumentException('non-nullable seller_id cannot be null');
        }
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
        if (is_null($seller_name)) {
            throw new \InvalidArgumentException('non-nullable seller_name cannot be null');
        }
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
        if (is_null($brand_id)) {
            throw new \InvalidArgumentException('non-nullable brand_id cannot be null');
        }
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
        if (is_null($brand_name)) {
            throw new \InvalidArgumentException('non-nullable brand_name cannot be null');
        }
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
        if (is_null($retailer_id)) {
            throw new \InvalidArgumentException('non-nullable retailer_id cannot be null');
        }
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
        if (is_null($retailer_name)) {
            throw new \InvalidArgumentException('non-nullable retailer_name cannot be null');
        }
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
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price The price of the product on the retailer site.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
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
        if (is_null($is_in_stock)) {
            throw new \InvalidArgumentException('non-nullable is_in_stock cannot be null');
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
     * @param string|null $gtin A GTIN identifier for the product if available. Covers variations such as EANs and UPCs.
     *
     * @return self
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
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
     * @param string|null $mpn The MPN for the product if available.
     *
     * @return self
     */
    public function setMpn($mpn)
    {
        if (is_null($mpn)) {
            throw new \InvalidArgumentException('non-nullable mpn cannot be null');
        }
        $this->container['mpn'] = $mpn;

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
     * @param string|null $model_number The Model Number for the product if available.
     *
     * @return self
     */
    public function setModelNumber($model_number)
    {
        if (is_null($model_number)) {
            throw new \InvalidArgumentException('non-nullable model_number cannot be null');
        }
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id The ParentId for the product if available.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

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
        if (is_null($image_url)) {
            throw new \InvalidArgumentException('non-nullable image_url cannot be null');
        }
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
        if (is_null($product_page)) {
            throw new \InvalidArgumentException('non-nullable product_page cannot be null');
        }
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
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
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

