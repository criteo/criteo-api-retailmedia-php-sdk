<?php
/**
 * FilesVariablesSpecification
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2023_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: 2023-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2023_07\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2023_07\ObjectSerializer;

/**
 * FilesVariablesSpecification Class Doc Comment
 *
 * @category Class
 * @description Specification of a file variable
 * @package  criteo\api\retailmedia\v2023_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FilesVariablesSpecification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FilesVariablesSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extensions' => 'string[]',
        'max_bytes' => 'int',
        'min_files' => 'int',
        'max_file' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extensions' => null,
        'max_bytes' => 'int32',
        'min_files' => 'int32',
        'max_file' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'extensions' => false,
		'max_bytes' => true,
		'min_files' => true,
		'max_file' => true
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
        'extensions' => 'extensions',
        'max_bytes' => 'maxBytes',
        'min_files' => 'minFiles',
        'max_file' => 'maxFile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extensions' => 'setExtensions',
        'max_bytes' => 'setMaxBytes',
        'min_files' => 'setMinFiles',
        'max_file' => 'setMaxFile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extensions' => 'getExtensions',
        'max_bytes' => 'getMaxBytes',
        'min_files' => 'getMinFiles',
        'max_file' => 'getMaxFile'
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

    public const EXTENSIONS_UNKNOWN = 'Unknown';
    public const EXTENSIONS_JPEG = 'Jpeg';
    public const EXTENSIONS_PNG = 'Png';
    public const EXTENSIONS_GIF = 'Gif';
    public const EXTENSIONS_PDF = 'Pdf';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExtensionsAllowableValues()
    {
        return [
            self::EXTENSIONS_UNKNOWN,
            self::EXTENSIONS_JPEG,
            self::EXTENSIONS_PNG,
            self::EXTENSIONS_GIF,
            self::EXTENSIONS_PDF,
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
        $this->setIfExists('extensions', $data ?? [], null);
        $this->setIfExists('max_bytes', $data ?? [], null);
        $this->setIfExists('min_files', $data ?? [], null);
        $this->setIfExists('max_file', $data ?? [], null);
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

        if ($this->container['extensions'] === null) {
            $invalidProperties[] = "'extensions' can't be null";
        }
        if ($this->container['min_files'] === null) {
            $invalidProperties[] = "'min_files' can't be null";
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
     * Gets extensions
     *
     * @return string[]
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     *
     * @param string[] $extensions The accepted file extensions
     *
     * @return self
     */
    public function setExtensions($extensions)
    {
        if (is_null($extensions)) {
            throw new \InvalidArgumentException('non-nullable extensions cannot be null');
        }
        $allowedValues = $this->getExtensionsAllowableValues();
        if (array_diff($extensions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'extensions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['extensions'] = $extensions;

        return $this;
    }

    /**
     * Gets max_bytes
     *
     * @return int|null
     */
    public function getMaxBytes()
    {
        return $this->container['max_bytes'];
    }

    /**
     * Sets max_bytes
     *
     * @param int|null $max_bytes The maximum amount of bytes per file
     *
     * @return self
     */
    public function setMaxBytes($max_bytes)
    {
        if (is_null($max_bytes)) {
            array_push($this->openAPINullablesSetToNull, 'max_bytes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_bytes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_bytes'] = $max_bytes;

        return $this;
    }

    /**
     * Gets min_files
     *
     * @return int
     */
    public function getMinFiles()
    {
        return $this->container['min_files'];
    }

    /**
     * Sets min_files
     *
     * @param int $min_files The minimum amount of files requires
     *
     * @return self
     */
    public function setMinFiles($min_files)
    {
        if (is_null($min_files)) {
            array_push($this->openAPINullablesSetToNull, 'min_files');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_files', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_files'] = $min_files;

        return $this;
    }

    /**
     * Gets max_file
     *
     * @return int|null
     */
    public function getMaxFile()
    {
        return $this->container['max_file'];
    }

    /**
     * Sets max_file
     *
     * @param int|null $max_file The maximum amount of files required
     *
     * @return self
     */
    public function setMaxFile($max_file)
    {
        if (is_null($max_file)) {
            array_push($this->openAPINullablesSetToNull, 'max_file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_file'] = $max_file;

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


