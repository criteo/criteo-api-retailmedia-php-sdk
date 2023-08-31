<?php
/**
 * RetailMediaExternalv1ProposalStatusModel
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
 * RetailMediaExternalv1ProposalStatusModel Class Doc Comment
 *
 * @category Class
 * @description The proposal status includes the state of the proposal, the status of the booking and approval, as well as any comments explaining why it might have been rejected.
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RetailMediaExternalv1ProposalStatusModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetailMediaExternalv1ProposalStatusModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'negotiation_state' => 'string',
        'booking_status' => 'string',
        'runnable_status' => 'string',
        'comment' => 'string',
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
        'negotiation_state' => null,
        'booking_status' => null,
        'runnable_status' => null,
        'comment' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'negotiation_state' => false,
		'booking_status' => false,
		'runnable_status' => false,
		'comment' => true,
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
        'negotiation_state' => 'negotiationState',
        'booking_status' => 'bookingStatus',
        'runnable_status' => 'runnableStatus',
        'comment' => 'comment',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'negotiation_state' => 'setNegotiationState',
        'booking_status' => 'setBookingStatus',
        'runnable_status' => 'setRunnableStatus',
        'comment' => 'setComment',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'negotiation_state' => 'getNegotiationState',
        'booking_status' => 'getBookingStatus',
        'runnable_status' => 'getRunnableStatus',
        'comment' => 'getComment',
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

    public const NEGOTIATION_STATE_INVALID = 'Invalid';
    public const NEGOTIATION_STATE_MODIFIED = 'Modified';
    public const NEGOTIATION_STATE_SUBMITTED = 'Submitted';
    public const NEGOTIATION_STATE_REVIEWED = 'Reviewed';
    public const NEGOTIATION_STATE_APPROVED = 'Approved';
    public const BOOKING_STATUS_NOT_SUBMITTED = 'NotSubmitted';
    public const BOOKING_STATUS_SUBMITTED = 'Submitted';
    public const BOOKING_STATUS_REJECTED = 'Rejected';
    public const BOOKING_STATUS_APPROVED = 'Approved';
    public const RUNNABLE_STATUS_NOT_SUBMITTED = 'NotSubmitted';
    public const RUNNABLE_STATUS_SUBMITTED = 'Submitted';
    public const RUNNABLE_STATUS_REJECTED = 'Rejected';
    public const RUNNABLE_STATUS_APPROVED = 'Approved';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNegotiationStateAllowableValues()
    {
        return [
            self::NEGOTIATION_STATE_INVALID,
            self::NEGOTIATION_STATE_MODIFIED,
            self::NEGOTIATION_STATE_SUBMITTED,
            self::NEGOTIATION_STATE_REVIEWED,
            self::NEGOTIATION_STATE_APPROVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBookingStatusAllowableValues()
    {
        return [
            self::BOOKING_STATUS_NOT_SUBMITTED,
            self::BOOKING_STATUS_SUBMITTED,
            self::BOOKING_STATUS_REJECTED,
            self::BOOKING_STATUS_APPROVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRunnableStatusAllowableValues()
    {
        return [
            self::RUNNABLE_STATUS_NOT_SUBMITTED,
            self::RUNNABLE_STATUS_SUBMITTED,
            self::RUNNABLE_STATUS_REJECTED,
            self::RUNNABLE_STATUS_APPROVED,
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
        $this->setIfExists('negotiation_state', $data ?? [], null);
        $this->setIfExists('booking_status', $data ?? [], null);
        $this->setIfExists('runnable_status', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
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

        if ($this->container['negotiation_state'] === null) {
            $invalidProperties[] = "'negotiation_state' can't be null";
        }
        $allowedValues = $this->getNegotiationStateAllowableValues();
        if (!is_null($this->container['negotiation_state']) && !in_array($this->container['negotiation_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'negotiation_state', must be one of '%s'",
                $this->container['negotiation_state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['booking_status'] === null) {
            $invalidProperties[] = "'booking_status' can't be null";
        }
        $allowedValues = $this->getBookingStatusAllowableValues();
        if (!is_null($this->container['booking_status']) && !in_array($this->container['booking_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'booking_status', must be one of '%s'",
                $this->container['booking_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['runnable_status'] === null) {
            $invalidProperties[] = "'runnable_status' can't be null";
        }
        $allowedValues = $this->getRunnableStatusAllowableValues();
        if (!is_null($this->container['runnable_status']) && !in_array($this->container['runnable_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'runnable_status', must be one of '%s'",
                $this->container['runnable_status'],
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
     * Gets negotiation_state
     *
     * @return string
     */
    public function getNegotiationState()
    {
        return $this->container['negotiation_state'];
    }

    /**
     * Sets negotiation_state
     *
     * @param string $negotiation_state negotiation_state
     *
     * @return self
     */
    public function setNegotiationState($negotiation_state)
    {
        if (is_null($negotiation_state)) {
            throw new \InvalidArgumentException('non-nullable negotiation_state cannot be null');
        }
        $allowedValues = $this->getNegotiationStateAllowableValues();
        if (!in_array($negotiation_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'negotiation_state', must be one of '%s'",
                    $negotiation_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['negotiation_state'] = $negotiation_state;

        return $this;
    }

    /**
     * Gets booking_status
     *
     * @return string
     */
    public function getBookingStatus()
    {
        return $this->container['booking_status'];
    }

    /**
     * Sets booking_status
     *
     * @param string $booking_status booking_status
     *
     * @return self
     */
    public function setBookingStatus($booking_status)
    {
        if (is_null($booking_status)) {
            throw new \InvalidArgumentException('non-nullable booking_status cannot be null');
        }
        $allowedValues = $this->getBookingStatusAllowableValues();
        if (!in_array($booking_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'booking_status', must be one of '%s'",
                    $booking_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['booking_status'] = $booking_status;

        return $this;
    }

    /**
     * Gets runnable_status
     *
     * @return string
     */
    public function getRunnableStatus()
    {
        return $this->container['runnable_status'];
    }

    /**
     * Sets runnable_status
     *
     * @param string $runnable_status runnable_status
     *
     * @return self
     */
    public function setRunnableStatus($runnable_status)
    {
        if (is_null($runnable_status)) {
            throw new \InvalidArgumentException('non-nullable runnable_status cannot be null');
        }
        $allowedValues = $this->getRunnableStatusAllowableValues();
        if (!in_array($runnable_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'runnable_status', must be one of '%s'",
                    $runnable_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['runnable_status'] = $runnable_status;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            array_push($this->openAPINullablesSetToNull, 'comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment'] = $comment;

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


