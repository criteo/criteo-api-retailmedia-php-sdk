<?php
/**
 * RetailMediaExternalv1KeywordDataModel
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
 * RetailMediaExternalv1KeywordDataModel Class Doc Comment
 *
 * @category Class
 * @description Details for a specific keyword
 * @package  criteo\api\retailmedia\v2024_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RetailMediaExternalv1KeywordDataModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetailMediaExternalv1KeywordDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'review_state' => 'string',
        'match_type' => 'string',
        'bid' => 'float',
        'input_keywords' => '\criteo\api\retailmedia\v2024_01\Model\RetailMediaExternalv1InputKeywordsModel',
        'created_at' => '\DateTime',
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
        'review_state' => null,
        'match_type' => null,
        'bid' => 'double',
        'input_keywords' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'review_state' => true,
		'match_type' => true,
		'bid' => true,
		'input_keywords' => false,
		'created_at' => true,
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
        'review_state' => 'reviewState',
        'match_type' => 'matchType',
        'bid' => 'bid',
        'input_keywords' => 'inputKeywords',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'review_state' => 'setReviewState',
        'match_type' => 'setMatchType',
        'bid' => 'setBid',
        'input_keywords' => 'setInputKeywords',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'review_state' => 'getReviewState',
        'match_type' => 'getMatchType',
        'bid' => 'getBid',
        'input_keywords' => 'getInputKeywords',
        'created_at' => 'getCreatedAt',
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

    public const REVIEW_STATE_IN_REVIEW = 'InReview';
    public const REVIEW_STATE_RECOMMENDED = 'Recommended';
    public const REVIEW_STATE_APPROVED = 'Approved';
    public const REVIEW_STATE_AUTO_APPROVED = 'AutoApproved';
    public const REVIEW_STATE_REJECTED = 'Rejected';
    public const REVIEW_STATE_AUTO_REJECTED = 'AutoRejected';
    public const MATCH_TYPE_POSITIVE_EXACT_MATCH = 'PositiveExactMatch';
    public const MATCH_TYPE_NEGATIVE_EXACT_MATCH = 'NegativeExactMatch';
    public const MATCH_TYPE_NEGATIVE_BROAD_MATCH = 'NegativeBroadMatch';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReviewStateAllowableValues()
    {
        return [
            self::REVIEW_STATE_IN_REVIEW,
            self::REVIEW_STATE_RECOMMENDED,
            self::REVIEW_STATE_APPROVED,
            self::REVIEW_STATE_AUTO_APPROVED,
            self::REVIEW_STATE_REJECTED,
            self::REVIEW_STATE_AUTO_REJECTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchTypeAllowableValues()
    {
        return [
            self::MATCH_TYPE_POSITIVE_EXACT_MATCH,
            self::MATCH_TYPE_NEGATIVE_EXACT_MATCH,
            self::MATCH_TYPE_NEGATIVE_BROAD_MATCH,
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
        $this->setIfExists('review_state', $data ?? [], null);
        $this->setIfExists('match_type', $data ?? [], null);
        $this->setIfExists('bid', $data ?? [], null);
        $this->setIfExists('input_keywords', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
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

        $allowedValues = $this->getReviewStateAllowableValues();
        if (!is_null($this->container['review_state']) && !in_array($this->container['review_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'review_state', must be one of '%s'",
                $this->container['review_state'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!is_null($this->container['match_type']) && !in_array($this->container['match_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'match_type', must be one of '%s'",
                $this->container['match_type'],
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
     * Gets review_state
     *
     * @return string|null
     */
    public function getReviewState()
    {
        return $this->container['review_state'];
    }

    /**
     * Sets review_state
     *
     * @param string|null $review_state review_state
     *
     * @return self
     */
    public function setReviewState($review_state)
    {
        if (is_null($review_state)) {
            array_push($this->openAPINullablesSetToNull, 'review_state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review_state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getReviewStateAllowableValues();
        if (!is_null($review_state) && !in_array($review_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'review_state', must be one of '%s'",
                    $review_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['review_state'] = $review_state;

        return $this;
    }

    /**
     * Gets match_type
     *
     * @return string|null
     */
    public function getMatchType()
    {
        return $this->container['match_type'];
    }

    /**
     * Sets match_type
     *
     * @param string|null $match_type match_type
     *
     * @return self
     */
    public function setMatchType($match_type)
    {
        if (is_null($match_type)) {
            array_push($this->openAPINullablesSetToNull, 'match_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('match_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!is_null($match_type) && !in_array($match_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'match_type', must be one of '%s'",
                    $match_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['match_type'] = $match_type;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return float|null
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param float|null $bid bid
     *
     * @return self
     */
    public function setBid($bid)
    {
        if (is_null($bid)) {
            array_push($this->openAPINullablesSetToNull, 'bid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets input_keywords
     *
     * @return \criteo\api\retailmedia\v2024_01\Model\RetailMediaExternalv1InputKeywordsModel|null
     */
    public function getInputKeywords()
    {
        return $this->container['input_keywords'];
    }

    /**
     * Sets input_keywords
     *
     * @param \criteo\api\retailmedia\v2024_01\Model\RetailMediaExternalv1InputKeywordsModel|null $input_keywords input_keywords
     *
     * @return self
     */
    public function setInputKeywords($input_keywords)
    {
        if (is_null($input_keywords)) {
            throw new \InvalidArgumentException('non-nullable input_keywords cannot be null');
        }
        $this->container['input_keywords'] = $input_keywords;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

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
     * @param \DateTime|null $updated_at updated_at
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


