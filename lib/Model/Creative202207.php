<?php
/**
 * Creative202207
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2023-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2023_01\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2023_01\ObjectSerializer;

/**
 * Creative202207 Class Doc Comment
 *
 * @category Class
 * @description A creative entity
 * @package  criteo\api\retailmedia\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Creative202207 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Creative202207';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'string',
        'brand_id' => 'int',
        'retailer_id' => 'int',
        'associated_line_item_ids' => 'string[]',
        'updated_at' => '\DateTime',
        'creative_format_type' => 'string',
        'environments' => 'string[]',
        'template_variable_values' => '\criteo\api\retailmedia\v2023_01\Model\TemplateVariableValue[]'
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
        'status' => null,
        'brand_id' => 'int64',
        'retailer_id' => 'int32',
        'associated_line_item_ids' => null,
        'updated_at' => 'date-time',
        'creative_format_type' => null,
        'environments' => null,
        'template_variable_values' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'status' => false,
		'brand_id' => true,
		'retailer_id' => false,
		'associated_line_item_ids' => false,
		'updated_at' => false,
		'creative_format_type' => false,
		'environments' => false,
		'template_variable_values' => false
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
        'status' => 'status',
        'brand_id' => 'brandId',
        'retailer_id' => 'retailerId',
        'associated_line_item_ids' => 'associatedLineItemIds',
        'updated_at' => 'updatedAt',
        'creative_format_type' => 'creativeFormatType',
        'environments' => 'environments',
        'template_variable_values' => 'templateVariableValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'brand_id' => 'setBrandId',
        'retailer_id' => 'setRetailerId',
        'associated_line_item_ids' => 'setAssociatedLineItemIds',
        'updated_at' => 'setUpdatedAt',
        'creative_format_type' => 'setCreativeFormatType',
        'environments' => 'setEnvironments',
        'template_variable_values' => 'setTemplateVariableValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'brand_id' => 'getBrandId',
        'retailer_id' => 'getRetailerId',
        'associated_line_item_ids' => 'getAssociatedLineItemIds',
        'updated_at' => 'getUpdatedAt',
        'creative_format_type' => 'getCreativeFormatType',
        'environments' => 'getEnvironments',
        'template_variable_values' => 'getTemplateVariableValues'
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

    public const STATUS_READY = 'Ready';
    public const STATUS_IN_USE = 'In_Use';
    public const STATUS_ARCHIVED = 'Archived';
    public const STATUS_DELETED = 'Deleted';
    public const CREATIVE_FORMAT_TYPE_UNKNOWN = 'Unknown';
    public const CREATIVE_FORMAT_TYPE_FLAG_SHIP = 'FlagShip';
    public const CREATIVE_FORMAT_TYPE_SHOWCASE = 'Showcase';
    public const CREATIVE_FORMAT_TYPE_SPONSORED_PRODUCTS = 'SponsoredProducts';
    public const CREATIVE_FORMAT_TYPE_BUTTERFLY = 'Butterfly';
    public const CREATIVE_FORMAT_TYPE_BUNDLE_BOOST = 'BundleBoost';
    public const CREATIVE_FORMAT_TYPE_IAB = 'IAB';
    public const CREATIVE_FORMAT_TYPE_CUSTOM = 'CUSTOM';
    public const CREATIVE_FORMAT_TYPE_DISPLAY_PANEL = 'DisplayPanel';
    public const CREATIVE_FORMAT_TYPE_DIGITAL_SHELF_TALKER = 'DigitalShelfTalker';
    public const ENVIRONMENTS_WEB = 'Web';
    public const ENVIRONMENTS_MOBILE = 'Mobile';
    public const ENVIRONMENTS_APP = 'App';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_READY,
            self::STATUS_IN_USE,
            self::STATUS_ARCHIVED,
            self::STATUS_DELETED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreativeFormatTypeAllowableValues()
    {
        return [
            self::CREATIVE_FORMAT_TYPE_UNKNOWN,
            self::CREATIVE_FORMAT_TYPE_FLAG_SHIP,
            self::CREATIVE_FORMAT_TYPE_SHOWCASE,
            self::CREATIVE_FORMAT_TYPE_SPONSORED_PRODUCTS,
            self::CREATIVE_FORMAT_TYPE_BUTTERFLY,
            self::CREATIVE_FORMAT_TYPE_BUNDLE_BOOST,
            self::CREATIVE_FORMAT_TYPE_IAB,
            self::CREATIVE_FORMAT_TYPE_CUSTOM,
            self::CREATIVE_FORMAT_TYPE_DISPLAY_PANEL,
            self::CREATIVE_FORMAT_TYPE_DIGITAL_SHELF_TALKER,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('brand_id', $data ?? [], null);
        $this->setIfExists('retailer_id', $data ?? [], null);
        $this->setIfExists('associated_line_item_ids', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('creative_format_type', $data ?? [], null);
        $this->setIfExists('environments', $data ?? [], null);
        $this->setIfExists('template_variable_values', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['retailer_id'] === null) {
            $invalidProperties[] = "'retailer_id' can't be null";
        }
        if ($this->container['creative_format_type'] === null) {
            $invalidProperties[] = "'creative_format_type' can't be null";
        }
        $allowedValues = $this->getCreativeFormatTypeAllowableValues();
        if (!is_null($this->container['creative_format_type']) && !in_array($this->container['creative_format_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'creative_format_type', must be one of '%s'",
                $this->container['creative_format_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['environments'] === null) {
            $invalidProperties[] = "'environments' can't be null";
        }
        if ($this->container['template_variable_values'] === null) {
            $invalidProperties[] = "'template_variable_values' can't be null";
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
     * @param string $name Name
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Creative Status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param int|null $brand_id Brand Id
     *
     * @return self
     */
    public function setBrandId($brand_id)
    {
        if (is_null($brand_id)) {
            array_push($this->openAPINullablesSetToNull, 'brand_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brand_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets retailer_id
     *
     * @return int
     */
    public function getRetailerId()
    {
        return $this->container['retailer_id'];
    }

    /**
     * Sets retailer_id
     *
     * @param int $retailer_id Retailer Id
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
     * Gets associated_line_item_ids
     *
     * @return string[]|null
     */
    public function getAssociatedLineItemIds()
    {
        return $this->container['associated_line_item_ids'];
    }

    /**
     * Sets associated_line_item_ids
     *
     * @param string[]|null $associated_line_item_ids Associated Line Item Ids
     *
     * @return self
     */
    public function setAssociatedLineItemIds($associated_line_item_ids)
    {
        if (is_null($associated_line_item_ids)) {
            throw new \InvalidArgumentException('non-nullable associated_line_item_ids cannot be null');
        }
        $this->container['associated_line_item_ids'] = $associated_line_item_ids;

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
     * @param \DateTime|null $updated_at Updated at time
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
     * Gets creative_format_type
     *
     * @return string
     */
    public function getCreativeFormatType()
    {
        return $this->container['creative_format_type'];
    }

    /**
     * Sets creative_format_type
     *
     * @param string $creative_format_type Creative format type
     *
     * @return self
     */
    public function setCreativeFormatType($creative_format_type)
    {
        if (is_null($creative_format_type)) {
            throw new \InvalidArgumentException('non-nullable creative_format_type cannot be null');
        }
        $allowedValues = $this->getCreativeFormatTypeAllowableValues();
        if (!in_array($creative_format_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'creative_format_type', must be one of '%s'",
                    $creative_format_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['creative_format_type'] = $creative_format_type;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return string[]
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param string[] $environments Environment type (e.g. mobile, web, app)
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        if (is_null($environments)) {
            throw new \InvalidArgumentException('non-nullable environments cannot be null');
        }
        $allowedValues = $this->getEnvironmentsAllowableValues();
        if (array_diff($environments, $allowedValues)) {
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
     * Gets template_variable_values
     *
     * @return \criteo\api\retailmedia\v2023_01\Model\TemplateVariableValue[]
     */
    public function getTemplateVariableValues()
    {
        return $this->container['template_variable_values'];
    }

    /**
     * Sets template_variable_values
     *
     * @param \criteo\api\retailmedia\v2023_01\Model\TemplateVariableValue[] $template_variable_values The template chosen values
     *
     * @return self
     */
    public function setTemplateVariableValues($template_variable_values)
    {
        if (is_null($template_variable_values)) {
            throw new \InvalidArgumentException('non-nullable template_variable_values cannot be null');
        }
        $this->container['template_variable_values'] = $template_variable_values;

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


