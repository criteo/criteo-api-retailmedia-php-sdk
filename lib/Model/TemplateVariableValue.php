<?php
/**
 * TemplateVariableValue
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2022_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2022-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2022_07\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2022_07\ObjectSerializer;

/**
 * TemplateVariableValue Class Doc Comment
 *
 * @category Class
 * @description A value for a variable in a creative template.
 * @package  criteo\api\retailmedia\v2022_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TemplateVariableValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TemplateVariableValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'text_variable_value' => '\criteo\api\retailmedia\v2022_07\Model\TextVariableValue',
        'choice_variable_value' => '\criteo\api\retailmedia\v2022_07\Model\ChoiceVariableValue',
        'color_variable_value' => '\criteo\api\retailmedia\v2022_07\Model\ColorVariableValue',
        'files_variable_value' => '\criteo\api\retailmedia\v2022_07\Model\FilesVariableValue',
        'hyperlink_variable_value' => '\criteo\api\retailmedia\v2022_07\Model\HyperlinkVariableValue'
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
        'text_variable_value' => null,
        'choice_variable_value' => null,
        'color_variable_value' => null,
        'files_variable_value' => null,
        'hyperlink_variable_value' => null
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
        'id' => 'id',
        'text_variable_value' => 'textVariableValue',
        'choice_variable_value' => 'choiceVariableValue',
        'color_variable_value' => 'colorVariableValue',
        'files_variable_value' => 'filesVariableValue',
        'hyperlink_variable_value' => 'hyperlinkVariableValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'text_variable_value' => 'setTextVariableValue',
        'choice_variable_value' => 'setChoiceVariableValue',
        'color_variable_value' => 'setColorVariableValue',
        'files_variable_value' => 'setFilesVariableValue',
        'hyperlink_variable_value' => 'setHyperlinkVariableValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'text_variable_value' => 'getTextVariableValue',
        'choice_variable_value' => 'getChoiceVariableValue',
        'color_variable_value' => 'getColorVariableValue',
        'files_variable_value' => 'getFilesVariableValue',
        'hyperlink_variable_value' => 'getHyperlinkVariableValue'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['text_variable_value'] = $data['text_variable_value'] ?? null;
        $this->container['choice_variable_value'] = $data['choice_variable_value'] ?? null;
        $this->container['color_variable_value'] = $data['color_variable_value'] ?? null;
        $this->container['files_variable_value'] = $data['files_variable_value'] ?? null;
        $this->container['hyperlink_variable_value'] = $data['hyperlink_variable_value'] ?? null;
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
     * @param string $id The id of the template variable the value is applied to
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets text_variable_value
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\TextVariableValue|null
     */
    public function getTextVariableValue()
    {
        return $this->container['text_variable_value'];
    }

    /**
     * Sets text_variable_value
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\TextVariableValue|null $text_variable_value text_variable_value
     *
     * @return self
     */
    public function setTextVariableValue($text_variable_value)
    {
        $this->container['text_variable_value'] = $text_variable_value;

        return $this;
    }

    /**
     * Gets choice_variable_value
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\ChoiceVariableValue|null
     */
    public function getChoiceVariableValue()
    {
        return $this->container['choice_variable_value'];
    }

    /**
     * Sets choice_variable_value
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\ChoiceVariableValue|null $choice_variable_value choice_variable_value
     *
     * @return self
     */
    public function setChoiceVariableValue($choice_variable_value)
    {
        $this->container['choice_variable_value'] = $choice_variable_value;

        return $this;
    }

    /**
     * Gets color_variable_value
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\ColorVariableValue|null
     */
    public function getColorVariableValue()
    {
        return $this->container['color_variable_value'];
    }

    /**
     * Sets color_variable_value
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\ColorVariableValue|null $color_variable_value color_variable_value
     *
     * @return self
     */
    public function setColorVariableValue($color_variable_value)
    {
        $this->container['color_variable_value'] = $color_variable_value;

        return $this;
    }

    /**
     * Gets files_variable_value
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\FilesVariableValue|null
     */
    public function getFilesVariableValue()
    {
        return $this->container['files_variable_value'];
    }

    /**
     * Sets files_variable_value
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\FilesVariableValue|null $files_variable_value files_variable_value
     *
     * @return self
     */
    public function setFilesVariableValue($files_variable_value)
    {
        $this->container['files_variable_value'] = $files_variable_value;

        return $this;
    }

    /**
     * Gets hyperlink_variable_value
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\HyperlinkVariableValue|null
     */
    public function getHyperlinkVariableValue()
    {
        return $this->container['hyperlink_variable_value'];
    }

    /**
     * Sets hyperlink_variable_value
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\HyperlinkVariableValue|null $hyperlink_variable_value hyperlink_variable_value
     *
     * @return self
     */
    public function setHyperlinkVariableValue($hyperlink_variable_value)
    {
        $this->container['hyperlink_variable_value'] = $hyperlink_variable_value;

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


