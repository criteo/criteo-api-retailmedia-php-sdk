<?php
/**
 * ExternalPreferredLineItemUpdateModel202110
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2023_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: 2023-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2023_04\Model;

use \ArrayAccess;
use \criteo\api\retailmedia\v2023_04\ObjectSerializer;

/**
 * ExternalPreferredLineItemUpdateModel202110 Class Doc Comment
 *
 * @category Class
 * @description Model used to update a preferred line item
 * @package  criteo\api\retailmedia\v2023_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExternalPreferredLineItemUpdateModel202110 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalPreferredLineItemUpdateModel202110';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'status' => 'string',
        'pacing' => 'string',
        'capping' => '\criteo\api\retailmedia\v2023_04\Model\ExternalLineItemCapping202110',
        'page' => '\criteo\api\retailmedia\v2023_04\Model\ExternalLineItemPage202110',
        'budget' => 'float',
        'creative_id' => 'string'
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
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => null,
        'pacing' => null,
        'capping' => null,
        'page' => null,
        'budget' => 'double',
        'creative_id' => 'long-id'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'start_date' => false,
		'end_date' => false,
		'status' => false,
		'pacing' => false,
		'capping' => false,
		'page' => false,
		'budget' => false,
		'creative_id' => true
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
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'status' => 'status',
        'pacing' => 'pacing',
        'capping' => 'capping',
        'page' => 'page',
        'budget' => 'budget',
        'creative_id' => 'creativeId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'status' => 'setStatus',
        'pacing' => 'setPacing',
        'capping' => 'setCapping',
        'page' => 'setPage',
        'budget' => 'setBudget',
        'creative_id' => 'setCreativeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'status' => 'getStatus',
        'pacing' => 'getPacing',
        'capping' => 'getCapping',
        'page' => 'getPage',
        'budget' => 'getBudget',
        'creative_id' => 'getCreativeId'
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

    public const STATUS_UNKNOWN = 'unknown';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_SCHEDULED = 'scheduled';
    public const STATUS_DRAFT = 'draft';
    public const STATUS_PAUSED = 'paused';
    public const STATUS_BUDGET_HIT = 'budgetHit';
    public const STATUS_ENDED = 'ended';
    public const STATUS_ARCHIVED = 'archived';
    public const STATUS_NO_FUNDS = 'noFunds';
    public const PACING_UNKNOWN = 'unknown';
    public const PACING_STANDARD = 'standard';
    public const PACING_ACCELERATED = 'accelerated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_ACTIVE,
            self::STATUS_SCHEDULED,
            self::STATUS_DRAFT,
            self::STATUS_PAUSED,
            self::STATUS_BUDGET_HIT,
            self::STATUS_ENDED,
            self::STATUS_ARCHIVED,
            self::STATUS_NO_FUNDS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPacingAllowableValues()
    {
        return [
            self::PACING_UNKNOWN,
            self::PACING_STANDARD,
            self::PACING_ACCELERATED,
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
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('pacing', $data ?? [], 'accelerated');
        $this->setIfExists('capping', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('budget', $data ?? [], null);
        $this->setIfExists('creative_id', $data ?? [], null);
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
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
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

        $allowedValues = $this->getPacingAllowableValues();
        if (!is_null($this->container['pacing']) && !in_array($this->container['pacing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pacing', must be one of '%s'",
                $this->container['pacing'],
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalPreferredLineItemUpdateModel202110., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalPreferredLineItemUpdateModel202110., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Represents the Date as a year, month, and day in the format YYYY-MM-DD
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Represents the Date as a year, month, and day in the format YYYY-MM-DD
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

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
     * @param string $status status
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
     * Gets pacing
     *
     * @return string|null
     */
    public function getPacing()
    {
        return $this->container['pacing'];
    }

    /**
     * Sets pacing
     *
     * @param string|null $pacing pacing
     *
     * @return self
     */
    public function setPacing($pacing)
    {
        if (is_null($pacing)) {
            throw new \InvalidArgumentException('non-nullable pacing cannot be null');
        }
        $allowedValues = $this->getPacingAllowableValues();
        if (!in_array($pacing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pacing', must be one of '%s'",
                    $pacing,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pacing'] = $pacing;

        return $this;
    }

    /**
     * Gets capping
     *
     * @return \criteo\api\retailmedia\v2023_04\Model\ExternalLineItemCapping202110|null
     */
    public function getCapping()
    {
        return $this->container['capping'];
    }

    /**
     * Sets capping
     *
     * @param \criteo\api\retailmedia\v2023_04\Model\ExternalLineItemCapping202110|null $capping capping
     *
     * @return self
     */
    public function setCapping($capping)
    {
        if (is_null($capping)) {
            throw new \InvalidArgumentException('non-nullable capping cannot be null');
        }
        $this->container['capping'] = $capping;

        return $this;
    }

    /**
     * Gets page
     *
     * @return \criteo\api\retailmedia\v2023_04\Model\ExternalLineItemPage202110|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param \criteo\api\retailmedia\v2023_04\Model\ExternalLineItemPage202110|null $page page
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return float|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        if (is_null($budget)) {
            throw new \InvalidArgumentException('non-nullable budget cannot be null');
        }
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets creative_id
     *
     * @return string|null
     */
    public function getCreativeId()
    {
        return $this->container['creative_id'];
    }

    /**
     * Sets creative_id
     *
     * @param string|null $creative_id creative_id
     *
     * @return self
     */
    public function setCreativeId($creative_id)
    {
        if (is_null($creative_id)) {
            array_push($this->openAPINullablesSetToNull, 'creative_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creative_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creative_id'] = $creative_id;

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


