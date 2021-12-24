<?php
/**
 * ExternalLineItemAttributes
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
 * ExternalLineItemAttributes Class Doc Comment
 *
 * @category Class
 * @description The attributes of a Retail Media Line Item
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExternalLineItemAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalLineItemAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'target_retailer_id' => 'string',
        'status' => 'string',
        'target_bid' => 'float',
        'is_auto_daily_pacing' => 'bool',
        'name' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'max_bid' => 'float',
        'budget' => 'float',
        'monthly_pacing' => 'float',
        'daily_pacing' => 'float',
        'bid_strategy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'target_retailer_id' => 'long-id',
        'status' => null,
        'target_bid' => 'decimal',
        'is_auto_daily_pacing' => null,
        'name' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'max_bid' => 'decimal',
        'budget' => 'decimal',
        'monthly_pacing' => 'decimal',
        'daily_pacing' => 'decimal',
        'bid_strategy' => null
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
        'target_retailer_id' => 'targetRetailerId',
        'status' => 'status',
        'target_bid' => 'targetBid',
        'is_auto_daily_pacing' => 'isAutoDailyPacing',
        'name' => 'name',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'max_bid' => 'maxBid',
        'budget' => 'budget',
        'monthly_pacing' => 'monthlyPacing',
        'daily_pacing' => 'dailyPacing',
        'bid_strategy' => 'bidStrategy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_retailer_id' => 'setTargetRetailerId',
        'status' => 'setStatus',
        'target_bid' => 'setTargetBid',
        'is_auto_daily_pacing' => 'setIsAutoDailyPacing',
        'name' => 'setName',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'max_bid' => 'setMaxBid',
        'budget' => 'setBudget',
        'monthly_pacing' => 'setMonthlyPacing',
        'daily_pacing' => 'setDailyPacing',
        'bid_strategy' => 'setBidStrategy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_retailer_id' => 'getTargetRetailerId',
        'status' => 'getStatus',
        'target_bid' => 'getTargetBid',
        'is_auto_daily_pacing' => 'getIsAutoDailyPacing',
        'name' => 'getName',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'max_bid' => 'getMaxBid',
        'budget' => 'getBudget',
        'monthly_pacing' => 'getMonthlyPacing',
        'daily_pacing' => 'getDailyPacing',
        'bid_strategy' => 'getBidStrategy'
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

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_ACTIVE = 'active';
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_DRAFT = 'draft';
    const STATUS_PAUSED = 'paused';
    const STATUS_BUDGET_HIT = 'budgetHit';
    const STATUS_ENDED = 'ended';
    const STATUS_ARCHIVED = 'archived';
    const STATUS_NO_FUNDS = 'noFunds';
    const BID_STRATEGY_UNKNOWN = 'unknown';
    const BID_STRATEGY_CONVERSION = 'conversion';
    const BID_STRATEGY_CLICKS = 'clicks';
    const BID_STRATEGY_REVENUE = 'revenue';

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
    public function getBidStrategyAllowableValues()
    {
        return [
            self::BID_STRATEGY_UNKNOWN,
            self::BID_STRATEGY_CONVERSION,
            self::BID_STRATEGY_CLICKS,
            self::BID_STRATEGY_REVENUE,
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
        $this->container['target_retailer_id'] = $data['target_retailer_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['target_bid'] = $data['target_bid'] ?? null;
        $this->container['is_auto_daily_pacing'] = $data['is_auto_daily_pacing'] ?? false;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['max_bid'] = $data['max_bid'] ?? null;
        $this->container['budget'] = $data['budget'] ?? null;
        $this->container['monthly_pacing'] = $data['monthly_pacing'] ?? null;
        $this->container['daily_pacing'] = $data['daily_pacing'] ?? null;
        $this->container['bid_strategy'] = $data['bid_strategy'] ?? BID_STRATEGY_CONVERSION;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['target_retailer_id'] === null) {
            $invalidProperties[] = "'target_retailer_id' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

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
        $allowedValues = $this->getBidStrategyAllowableValues();
        if (!is_null($this->container['bid_strategy']) && !in_array($this->container['bid_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bid_strategy', must be one of '%s'",
                $this->container['bid_strategy'],
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
     * Gets target_retailer_id
     *
     * @return string
     */
    public function getTargetRetailerId()
    {
        return $this->container['target_retailer_id'];
    }

    /**
     * Sets target_retailer_id
     *
     * @param string $target_retailer_id target_retailer_id
     *
     * @return self
     */
    public function setTargetRetailerId($target_retailer_id)
    {
        $this->container['target_retailer_id'] = $target_retailer_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets target_bid
     *
     * @return float|null
     */
    public function getTargetBid()
    {
        return $this->container['target_bid'];
    }

    /**
     * Sets target_bid
     *
     * @param float|null $target_bid target_bid
     *
     * @return self
     */
    public function setTargetBid($target_bid)
    {
        $this->container['target_bid'] = $target_bid;

        return $this;
    }

    /**
     * Gets is_auto_daily_pacing
     *
     * @return bool|null
     */
    public function getIsAutoDailyPacing()
    {
        return $this->container['is_auto_daily_pacing'];
    }

    /**
     * Sets is_auto_daily_pacing
     *
     * @param bool|null $is_auto_daily_pacing is_auto_daily_pacing
     *
     * @return self
     */
    public function setIsAutoDailyPacing($is_auto_daily_pacing)
    {
        $this->container['is_auto_daily_pacing'] = $is_auto_daily_pacing;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalLineItemAttributes., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalLineItemAttributes., must be bigger than or equal to 0.');
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
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date Represents the Date as a year, month, and day in the format YYYY-MM-DD
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets max_bid
     *
     * @return float|null
     */
    public function getMaxBid()
    {
        return $this->container['max_bid'];
    }

    /**
     * Sets max_bid
     *
     * @param float|null $max_bid max_bid
     *
     * @return self
     */
    public function setMaxBid($max_bid)
    {
        $this->container['max_bid'] = $max_bid;

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
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets monthly_pacing
     *
     * @return float|null
     */
    public function getMonthlyPacing()
    {
        return $this->container['monthly_pacing'];
    }

    /**
     * Sets monthly_pacing
     *
     * @param float|null $monthly_pacing monthly_pacing
     *
     * @return self
     */
    public function setMonthlyPacing($monthly_pacing)
    {
        $this->container['monthly_pacing'] = $monthly_pacing;

        return $this;
    }

    /**
     * Gets daily_pacing
     *
     * @return float|null
     */
    public function getDailyPacing()
    {
        return $this->container['daily_pacing'];
    }

    /**
     * Sets daily_pacing
     *
     * @param float|null $daily_pacing daily_pacing
     *
     * @return self
     */
    public function setDailyPacing($daily_pacing)
    {
        $this->container['daily_pacing'] = $daily_pacing;

        return $this;
    }

    /**
     * Gets bid_strategy
     *
     * @return string|null
     */
    public function getBidStrategy()
    {
        return $this->container['bid_strategy'];
    }

    /**
     * Sets bid_strategy
     *
     * @param string|null $bid_strategy bid_strategy
     *
     * @return self
     */
    public function setBidStrategy($bid_strategy)
    {
        $allowedValues = $this->getBidStrategyAllowableValues();
        if (!is_null($bid_strategy) && !in_array($bid_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bid_strategy', must be one of '%s'",
                    $bid_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bid_strategy'] = $bid_strategy;

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


