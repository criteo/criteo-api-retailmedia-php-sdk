<?php
/**
 * TemplateVariable
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2023_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: 2023-10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2023_10\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2023_10\ObjectSerializer;

/**
 * TemplateVariable Class Doc Comment
 *
 * @category Class
 * @description A variable in a creative template
 * @package  criteo\api\retailmedia\v2023_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TemplateVariable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TemplateVariable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'required' => 'bool',
        'type' => 'string',
        'choice_variable_specification' => '\criteo\api\retailmedia\v2023_10\Model\ChoiceVariableSpecification',
        'text_variable_specification' => '\criteo\api\retailmedia\v2023_10\Model\TextVariableSpecification',
        'files_variables_specification' => '\criteo\api\retailmedia\v2023_10\Model\FilesVariablesSpecification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'required' => null,
        'type' => null,
        'choice_variable_specification' => null,
        'text_variable_specification' => null,
        'files_variables_specification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'required' => false,
		'type' => false,
		'choice_variable_specification' => false,
		'text_variable_specification' => false,
		'files_variables_specification' => false
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
        'id' => 'id',
        'required' => 'required',
        'type' => 'type',
        'choice_variable_specification' => 'choiceVariableSpecification',
        'text_variable_specification' => 'textVariableSpecification',
        'files_variables_specification' => 'filesVariablesSpecification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'required' => 'setRequired',
        'type' => 'setType',
        'choice_variable_specification' => 'setChoiceVariableSpecification',
        'text_variable_specification' => 'setTextVariableSpecification',
        'files_variables_specification' => 'setFilesVariablesSpecification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'required' => 'getRequired',
        'type' => 'getType',
        'choice_variable_specification' => 'getChoiceVariableSpecification',
        'text_variable_specification' => 'getTextVariableSpecification',
        'files_variables_specification' => 'getFilesVariablesSpecification'
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

    public const TYPE_TEXT = 'Text';
    public const TYPE_CHOICE = 'Choice';
    public const TYPE_COLOR = 'Color';
    public const TYPE_FILES = 'Files';
    public const TYPE_HYPERLINK = 'Hyperlink';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_CHOICE,
            self::TYPE_COLOR,
            self::TYPE_FILES,
            self::TYPE_HYPERLINK,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('choice_variable_specification', $data ?? [], null);
        $this->setIfExists('text_variable_specification', $data ?? [], null);
        $this->setIfExists('files_variables_specification', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The id of the variable
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Whether the variable is required
     *
     * @return self
     */
    public function setRequired($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

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
     * @param string $type The type of the variable
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
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
     * Gets choice_variable_specification
     *
     * @return \criteo\api\retailmedia\v2023_10\Model\ChoiceVariableSpecification|null
     */
    public function getChoiceVariableSpecification()
    {
        return $this->container['choice_variable_specification'];
    }

    /**
     * Sets choice_variable_specification
     *
     * @param \criteo\api\retailmedia\v2023_10\Model\ChoiceVariableSpecification|null $choice_variable_specification choice_variable_specification
     *
     * @return self
     */
    public function setChoiceVariableSpecification($choice_variable_specification)
    {
        if (is_null($choice_variable_specification)) {
            throw new \InvalidArgumentException('non-nullable choice_variable_specification cannot be null');
        }
        $this->container['choice_variable_specification'] = $choice_variable_specification;

        return $this;
    }

    /**
     * Gets text_variable_specification
     *
     * @return \criteo\api\retailmedia\v2023_10\Model\TextVariableSpecification|null
     */
    public function getTextVariableSpecification()
    {
        return $this->container['text_variable_specification'];
    }

    /**
     * Sets text_variable_specification
     *
     * @param \criteo\api\retailmedia\v2023_10\Model\TextVariableSpecification|null $text_variable_specification text_variable_specification
     *
     * @return self
     */
    public function setTextVariableSpecification($text_variable_specification)
    {
        if (is_null($text_variable_specification)) {
            throw new \InvalidArgumentException('non-nullable text_variable_specification cannot be null');
        }
        $this->container['text_variable_specification'] = $text_variable_specification;

        return $this;
    }

    /**
     * Gets files_variables_specification
     *
     * @return \criteo\api\retailmedia\v2023_10\Model\FilesVariablesSpecification|null
     */
    public function getFilesVariablesSpecification()
    {
        return $this->container['files_variables_specification'];
    }

    /**
     * Sets files_variables_specification
     *
     * @param \criteo\api\retailmedia\v2023_10\Model\FilesVariablesSpecification|null $files_variables_specification files_variables_specification
     *
     * @return self
     */
    public function setFilesVariablesSpecification($files_variables_specification)
    {
        if (is_null($files_variables_specification)) {
            throw new \InvalidArgumentException('non-nullable files_variables_specification cannot be null');
        }
        $this->container['files_variables_specification'] = $files_variables_specification;

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


