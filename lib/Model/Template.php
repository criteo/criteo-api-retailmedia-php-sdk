<?php
/**
 * Template
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
 * Template Class Doc Comment
 *
 * @category Class
 * @description A template for creating creatives.
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Template implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Template';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creative_format' => 'string',
        'name' => 'string',
        'retailer_id' => 'int',
        'sku_collection_min' => 'int',
        'sku_collection_max' => 'int',
        'sku_per_collection_min' => 'int',
        'sku_per_collection_max' => 'int',
        'displayable_skus_max' => 'int',
        'all_collections_mandatory' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'sections' => '\criteo\api\retailmedia\preview\Model\Section[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creative_format' => null,
        'name' => null,
        'retailer_id' => 'int32',
        'sku_collection_min' => 'int32',
        'sku_collection_max' => 'int32',
        'sku_per_collection_min' => 'int32',
        'sku_per_collection_max' => 'int32',
        'displayable_skus_max' => 'int32',
        'all_collections_mandatory' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'sections' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'creative_format' => false,
		'name' => false,
		'retailer_id' => false,
		'sku_collection_min' => false,
		'sku_collection_max' => true,
		'sku_per_collection_min' => false,
		'sku_per_collection_max' => true,
		'displayable_skus_max' => true,
		'all_collections_mandatory' => false,
		'created_at' => false,
		'updated_at' => false,
		'sections' => false
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
        'creative_format' => 'creativeFormat',
        'name' => 'name',
        'retailer_id' => 'retailerId',
        'sku_collection_min' => 'skuCollectionMin',
        'sku_collection_max' => 'skuCollectionMax',
        'sku_per_collection_min' => 'skuPerCollectionMin',
        'sku_per_collection_max' => 'skuPerCollectionMax',
        'displayable_skus_max' => 'displayableSkusMax',
        'all_collections_mandatory' => 'allCollectionsMandatory',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'sections' => 'sections'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creative_format' => 'setCreativeFormat',
        'name' => 'setName',
        'retailer_id' => 'setRetailerId',
        'sku_collection_min' => 'setSkuCollectionMin',
        'sku_collection_max' => 'setSkuCollectionMax',
        'sku_per_collection_min' => 'setSkuPerCollectionMin',
        'sku_per_collection_max' => 'setSkuPerCollectionMax',
        'displayable_skus_max' => 'setDisplayableSkusMax',
        'all_collections_mandatory' => 'setAllCollectionsMandatory',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'sections' => 'setSections'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creative_format' => 'getCreativeFormat',
        'name' => 'getName',
        'retailer_id' => 'getRetailerId',
        'sku_collection_min' => 'getSkuCollectionMin',
        'sku_collection_max' => 'getSkuCollectionMax',
        'sku_per_collection_min' => 'getSkuPerCollectionMin',
        'sku_per_collection_max' => 'getSkuPerCollectionMax',
        'displayable_skus_max' => 'getDisplayableSkusMax',
        'all_collections_mandatory' => 'getAllCollectionsMandatory',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'sections' => 'getSections'
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

    public const CREATIVE_FORMAT_UNKNOWN = 'Unknown';
    public const CREATIVE_FORMAT_FLAG_SHIP = 'FlagShip';
    public const CREATIVE_FORMAT_SHOWCASE = 'Showcase';
    public const CREATIVE_FORMAT_SPONSORED_PRODUCTS = 'SponsoredProducts';
    public const CREATIVE_FORMAT_BUTTERFLY = 'Butterfly';
    public const CREATIVE_FORMAT_BUNDLE_BOOST = 'BundleBoost';
    public const CREATIVE_FORMAT_IAB = 'IAB';
    public const CREATIVE_FORMAT_CUSTOM = 'CUSTOM';
    public const CREATIVE_FORMAT_DISPLAY_PANEL = 'DisplayPanel';
    public const CREATIVE_FORMAT_DIGITAL_SHELF_TALKER = 'DigitalShelfTalker';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreativeFormatAllowableValues()
    {
        return [
            self::CREATIVE_FORMAT_UNKNOWN,
            self::CREATIVE_FORMAT_FLAG_SHIP,
            self::CREATIVE_FORMAT_SHOWCASE,
            self::CREATIVE_FORMAT_SPONSORED_PRODUCTS,
            self::CREATIVE_FORMAT_BUTTERFLY,
            self::CREATIVE_FORMAT_BUNDLE_BOOST,
            self::CREATIVE_FORMAT_IAB,
            self::CREATIVE_FORMAT_CUSTOM,
            self::CREATIVE_FORMAT_DISPLAY_PANEL,
            self::CREATIVE_FORMAT_DIGITAL_SHELF_TALKER,
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
        $this->setIfExists('creative_format', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('retailer_id', $data ?? [], null);
        $this->setIfExists('sku_collection_min', $data ?? [], null);
        $this->setIfExists('sku_collection_max', $data ?? [], null);
        $this->setIfExists('sku_per_collection_min', $data ?? [], null);
        $this->setIfExists('sku_per_collection_max', $data ?? [], null);
        $this->setIfExists('displayable_skus_max', $data ?? [], null);
        $this->setIfExists('all_collections_mandatory', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('sections', $data ?? [], null);
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

        if ($this->container['creative_format'] === null) {
            $invalidProperties[] = "'creative_format' can't be null";
        }
        $allowedValues = $this->getCreativeFormatAllowableValues();
        if (!is_null($this->container['creative_format']) && !in_array($this->container['creative_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'creative_format', must be one of '%s'",
                $this->container['creative_format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['sku_collection_min'] === null) {
            $invalidProperties[] = "'sku_collection_min' can't be null";
        }
        if ($this->container['sku_per_collection_min'] === null) {
            $invalidProperties[] = "'sku_per_collection_min' can't be null";
        }
        if ($this->container['all_collections_mandatory'] === null) {
            $invalidProperties[] = "'all_collections_mandatory' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['sections'] === null) {
            $invalidProperties[] = "'sections' can't be null";
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
     * Gets creative_format
     *
     * @return string
     */
    public function getCreativeFormat()
    {
        return $this->container['creative_format'];
    }

    /**
     * Sets creative_format
     *
     * @param string $creative_format The kind of creative this template can be used to build.
     *
     * @return self
     */
    public function setCreativeFormat($creative_format)
    {
        if (is_null($creative_format)) {
            throw new \InvalidArgumentException('non-nullable creative_format cannot be null');
        }
        $allowedValues = $this->getCreativeFormatAllowableValues();
        if (!in_array($creative_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'creative_format', must be one of '%s'",
                    $creative_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['creative_format'] = $creative_format;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the template
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets retailer_id
     *
     * @return int|null
     */
    public function getRetailerId()
    {
        return $this->container['retailer_id'];
    }

    /**
     * Sets retailer_id
     *
     * @param int|null $retailer_id The retailer associated to the template
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
     * Gets sku_collection_min
     *
     * @return int
     */
    public function getSkuCollectionMin()
    {
        return $this->container['sku_collection_min'];
    }

    /**
     * Sets sku_collection_min
     *
     * @param int $sku_collection_min TODO: what is it ?
     *
     * @return self
     */
    public function setSkuCollectionMin($sku_collection_min)
    {
        if (is_null($sku_collection_min)) {
            throw new \InvalidArgumentException('non-nullable sku_collection_min cannot be null');
        }
        $this->container['sku_collection_min'] = $sku_collection_min;

        return $this;
    }

    /**
     * Gets sku_collection_max
     *
     * @return int|null
     */
    public function getSkuCollectionMax()
    {
        return $this->container['sku_collection_max'];
    }

    /**
     * Sets sku_collection_max
     *
     * @param int|null $sku_collection_max TODO: what is it ?
     *
     * @return self
     */
    public function setSkuCollectionMax($sku_collection_max)
    {
        if (is_null($sku_collection_max)) {
            array_push($this->openAPINullablesSetToNull, 'sku_collection_max');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku_collection_max', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku_collection_max'] = $sku_collection_max;

        return $this;
    }

    /**
     * Gets sku_per_collection_min
     *
     * @return int
     */
    public function getSkuPerCollectionMin()
    {
        return $this->container['sku_per_collection_min'];
    }

    /**
     * Sets sku_per_collection_min
     *
     * @param int $sku_per_collection_min TODO: what is it ?
     *
     * @return self
     */
    public function setSkuPerCollectionMin($sku_per_collection_min)
    {
        if (is_null($sku_per_collection_min)) {
            throw new \InvalidArgumentException('non-nullable sku_per_collection_min cannot be null');
        }
        $this->container['sku_per_collection_min'] = $sku_per_collection_min;

        return $this;
    }

    /**
     * Gets sku_per_collection_max
     *
     * @return int|null
     */
    public function getSkuPerCollectionMax()
    {
        return $this->container['sku_per_collection_max'];
    }

    /**
     * Sets sku_per_collection_max
     *
     * @param int|null $sku_per_collection_max TODO: what is it ?
     *
     * @return self
     */
    public function setSkuPerCollectionMax($sku_per_collection_max)
    {
        if (is_null($sku_per_collection_max)) {
            array_push($this->openAPINullablesSetToNull, 'sku_per_collection_max');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku_per_collection_max', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku_per_collection_max'] = $sku_per_collection_max;

        return $this;
    }

    /**
     * Gets displayable_skus_max
     *
     * @return int|null
     */
    public function getDisplayableSkusMax()
    {
        return $this->container['displayable_skus_max'];
    }

    /**
     * Sets displayable_skus_max
     *
     * @param int|null $displayable_skus_max TODO: what is it ?
     *
     * @return self
     */
    public function setDisplayableSkusMax($displayable_skus_max)
    {
        if (is_null($displayable_skus_max)) {
            array_push($this->openAPINullablesSetToNull, 'displayable_skus_max');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('displayable_skus_max', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['displayable_skus_max'] = $displayable_skus_max;

        return $this;
    }

    /**
     * Gets all_collections_mandatory
     *
     * @return bool
     */
    public function getAllCollectionsMandatory()
    {
        return $this->container['all_collections_mandatory'];
    }

    /**
     * Sets all_collections_mandatory
     *
     * @param bool $all_collections_mandatory TODO: what is it ?
     *
     * @return self
     */
    public function setAllCollectionsMandatory($all_collections_mandatory)
    {
        if (is_null($all_collections_mandatory)) {
            throw new \InvalidArgumentException('non-nullable all_collections_mandatory cannot be null');
        }
        $this->container['all_collections_mandatory'] = $all_collections_mandatory;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The time at which the template was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

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
     * @param \DateTime $updated_at The time at which the template was updated
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
     * Gets sections
     *
     * @return \criteo\api\retailmedia\preview\Model\Section[]
     */
    public function getSections()
    {
        return $this->container['sections'];
    }

    /**
     * Sets sections
     *
     * @param \criteo\api\retailmedia\preview\Model\Section[] $sections The sections holding various template variables
     *
     * @return self
     */
    public function setSections($sections)
    {
        if (is_null($sections)) {
            throw new \InvalidArgumentException('non-nullable sections cannot be null');
        }
        $this->container['sections'] = $sections;

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


