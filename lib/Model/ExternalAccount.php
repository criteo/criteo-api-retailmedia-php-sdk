<?php
/**
 * ExternalAccount
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
 * The version of the OpenAPI document: Preview
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
 * ExternalAccount Class Doc Comment
 *
 * @category Class
 * @description A Retail Media Account used to launch campaigns and line items
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExternalAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'type' => 'string',
        'subtype' => 'string',
        'countries' => 'string[]',
        'currency' => 'string',
        'parent_account_label' => 'string',
        'time_zone' => 'string'
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
        'type' => null,
        'subtype' => null,
        'countries' => null,
        'currency' => null,
        'parent_account_label' => null,
        'time_zone' => null
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
        'name' => 'name',
        'type' => 'type',
        'subtype' => 'subtype',
        'countries' => 'countries',
        'currency' => 'currency',
        'parent_account_label' => 'parentAccountLabel',
        'time_zone' => 'timeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'countries' => 'setCountries',
        'currency' => 'setCurrency',
        'parent_account_label' => 'setParentAccountLabel',
        'time_zone' => 'setTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'countries' => 'getCountries',
        'currency' => 'getCurrency',
        'parent_account_label' => 'getParentAccountLabel',
        'time_zone' => 'getTimeZone'
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

    const TYPE_UNKNOWN = 'unknown';
    const TYPE_SUPPLY = 'supply';
    const TYPE_DEMAND = 'demand';
    const SUBTYPE_UNKNOWN = 'unknown';
    const SUBTYPE_BRAND = 'brand';
    const SUBTYPE_SELLER = 'seller';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_SUPPLY,
            self::TYPE_DEMAND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubtypeAllowableValues()
    {
        return [
            self::SUBTYPE_UNKNOWN,
            self::SUBTYPE_BRAND,
            self::SUBTYPE_SELLER,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['subtype'] = $data['subtype'] ?? null;
        $this->container['countries'] = $data['countries'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['parent_account_label'] = $data['parent_account_label'] ?? null;
        $this->container['time_zone'] = $data['time_zone'] ?? null;
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
        if ((mb_strlen($this->container['name']) > 510)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 510.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubtypeAllowableValues();
        if (!is_null($this->container['subtype']) && !in_array($this->container['subtype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subtype', must be one of '%s'",
                $this->container['subtype'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['countries'] === null) {
            $invalidProperties[] = "'countries' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['parent_account_label'] === null) {
            $invalidProperties[] = "'parent_account_label' can't be null";
        }
        if ((mb_strlen($this->container['parent_account_label']) > 510)) {
            $invalidProperties[] = "invalid value for 'parent_account_label', the character length must be smaller than or equal to 510.";
        }

        if ((mb_strlen($this->container['parent_account_label']) < 0)) {
            $invalidProperties[] = "invalid value for 'parent_account_label', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['time_zone'] === null) {
            $invalidProperties[] = "'time_zone' can't be null";
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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 510)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalAccount., must be smaller than or equal to 510.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalAccount., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return string|null
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string|null $subtype subtype
     *
     * @return self
     */
    public function setSubtype($subtype)
    {
        $allowedValues = $this->getSubtypeAllowableValues();
        if (!is_null($subtype) && !in_array($subtype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subtype', must be one of '%s'",
                    $subtype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return string[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param string[] $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets parent_account_label
     *
     * @return string
     */
    public function getParentAccountLabel()
    {
        return $this->container['parent_account_label'];
    }

    /**
     * Sets parent_account_label
     *
     * @param string $parent_account_label parent_account_label
     *
     * @return self
     */
    public function setParentAccountLabel($parent_account_label)
    {
        if ((mb_strlen($parent_account_label) > 510)) {
            throw new \InvalidArgumentException('invalid length for $parent_account_label when calling ExternalAccount., must be smaller than or equal to 510.');
        }
        if ((mb_strlen($parent_account_label) < 0)) {
            throw new \InvalidArgumentException('invalid length for $parent_account_label when calling ExternalAccount., must be bigger than or equal to 0.');
        }

        $this->container['parent_account_label'] = $parent_account_label;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone time_zone
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

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


