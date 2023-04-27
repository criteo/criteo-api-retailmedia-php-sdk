<?php
/**
 * ExternalAuctionLineItem
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
 * ExternalAuctionLineItem Class Doc Comment
 *
 * @category Class
 * @description A Retail Media Auction Line Item used to hold bid settings for one or many promoted products on a single retailer
 * @package  criteo\api\retailmedia\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExternalAuctionLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalAuctionLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'max_bid' => 'float',
        'budget' => 'float',
        'monthly_pacing' => 'float',
        'daily_pacing' => 'float',
        'bid_strategy' => 'string',
        'target_retailer_id' => 'string',
        'status' => 'string',
        'target_bid' => 'float',
        'is_auto_daily_pacing' => 'bool',
        'campaign_id' => 'string',
        'budget_spent' => 'float',
        'budget_remaining' => 'float',
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
        'name' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'max_bid' => 'decimal',
        'budget' => 'decimal',
        'monthly_pacing' => 'decimal',
        'daily_pacing' => 'decimal',
        'bid_strategy' => null,
        'target_retailer_id' => 'long-id',
        'status' => null,
        'target_bid' => 'decimal',
        'is_auto_daily_pacing' => null,
        'campaign_id' => 'long-id',
        'budget_spent' => 'double',
        'budget_remaining' => 'decimal',
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
		'max_bid' => true,
		'budget' => true,
		'monthly_pacing' => true,
		'daily_pacing' => true,
		'bid_strategy' => false,
		'target_retailer_id' => false,
		'status' => false,
		'target_bid' => true,
		'is_auto_daily_pacing' => false,
		'campaign_id' => false,
		'budget_spent' => false,
		'budget_remaining' => true,
		'created_at' => false,
		'updated_at' => false
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
        'max_bid' => 'maxBid',
        'budget' => 'budget',
        'monthly_pacing' => 'monthlyPacing',
        'daily_pacing' => 'dailyPacing',
        'bid_strategy' => 'bidStrategy',
        'target_retailer_id' => 'targetRetailerId',
        'status' => 'status',
        'target_bid' => 'targetBid',
        'is_auto_daily_pacing' => 'isAutoDailyPacing',
        'campaign_id' => 'campaignId',
        'budget_spent' => 'budgetSpent',
        'budget_remaining' => 'budgetRemaining',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
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
        'max_bid' => 'setMaxBid',
        'budget' => 'setBudget',
        'monthly_pacing' => 'setMonthlyPacing',
        'daily_pacing' => 'setDailyPacing',
        'bid_strategy' => 'setBidStrategy',
        'target_retailer_id' => 'setTargetRetailerId',
        'status' => 'setStatus',
        'target_bid' => 'setTargetBid',
        'is_auto_daily_pacing' => 'setIsAutoDailyPacing',
        'campaign_id' => 'setCampaignId',
        'budget_spent' => 'setBudgetSpent',
        'budget_remaining' => 'setBudgetRemaining',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
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
        'max_bid' => 'getMaxBid',
        'budget' => 'getBudget',
        'monthly_pacing' => 'getMonthlyPacing',
        'daily_pacing' => 'getDailyPacing',
        'bid_strategy' => 'getBidStrategy',
        'target_retailer_id' => 'getTargetRetailerId',
        'status' => 'getStatus',
        'target_bid' => 'getTargetBid',
        'is_auto_daily_pacing' => 'getIsAutoDailyPacing',
        'campaign_id' => 'getCampaignId',
        'budget_spent' => 'getBudgetSpent',
        'budget_remaining' => 'getBudgetRemaining',
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

    public const BID_STRATEGY_UNKNOWN = 'unknown';
    public const BID_STRATEGY_CONVERSION = 'conversion';
    public const BID_STRATEGY_CLICKS = 'clicks';
    public const BID_STRATEGY_REVENUE = 'revenue';
    public const STATUS_UNKNOWN = 'unknown';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_SCHEDULED = 'scheduled';
    public const STATUS_DRAFT = 'draft';
    public const STATUS_PAUSED = 'paused';
    public const STATUS_BUDGET_HIT = 'budgetHit';
    public const STATUS_ENDED = 'ended';
    public const STATUS_ARCHIVED = 'archived';
    public const STATUS_NO_FUNDS = 'noFunds';

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
        $this->setIfExists('max_bid', $data ?? [], null);
        $this->setIfExists('budget', $data ?? [], null);
        $this->setIfExists('monthly_pacing', $data ?? [], null);
        $this->setIfExists('daily_pacing', $data ?? [], null);
        $this->setIfExists('bid_strategy', $data ?? [], 'conversion');
        $this->setIfExists('target_retailer_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('target_bid', $data ?? [], null);
        $this->setIfExists('is_auto_daily_pacing', $data ?? [], false);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('budget_spent', $data ?? [], null);
        $this->setIfExists('budget_remaining', $data ?? [], null);
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

        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['budget_remaining'] === null) {
            $invalidProperties[] = "'budget_remaining' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalAuctionLineItem., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalAuctionLineItem., must be bigger than or equal to 0.');
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
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
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
        if (is_null($max_bid)) {
            array_push($this->openAPINullablesSetToNull, 'max_bid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_bid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($budget)) {
            array_push($this->openAPINullablesSetToNull, 'budget');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('budget', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($monthly_pacing)) {
            array_push($this->openAPINullablesSetToNull, 'monthly_pacing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('monthly_pacing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($daily_pacing)) {
            array_push($this->openAPINullablesSetToNull, 'daily_pacing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('daily_pacing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($bid_strategy)) {
            throw new \InvalidArgumentException('non-nullable bid_strategy cannot be null');
        }
        $allowedValues = $this->getBidStrategyAllowableValues();
        if (!in_array($bid_strategy, $allowedValues, true)) {
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
        if (is_null($target_retailer_id)) {
            throw new \InvalidArgumentException('non-nullable target_retailer_id cannot be null');
        }
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
        if (is_null($target_bid)) {
            array_push($this->openAPINullablesSetToNull, 'target_bid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('target_bid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($is_auto_daily_pacing)) {
            throw new \InvalidArgumentException('non-nullable is_auto_daily_pacing cannot be null');
        }
        $this->container['is_auto_daily_pacing'] = $is_auto_daily_pacing;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string $campaign_id campaign_id
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            throw new \InvalidArgumentException('non-nullable campaign_id cannot be null');
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets budget_spent
     *
     * @return float|null
     */
    public function getBudgetSpent()
    {
        return $this->container['budget_spent'];
    }

    /**
     * Sets budget_spent
     *
     * @param float|null $budget_spent budget_spent
     *
     * @return self
     */
    public function setBudgetSpent($budget_spent)
    {
        if (is_null($budget_spent)) {
            throw new \InvalidArgumentException('non-nullable budget_spent cannot be null');
        }
        $this->container['budget_spent'] = $budget_spent;

        return $this;
    }

    /**
     * Gets budget_remaining
     *
     * @return float
     */
    public function getBudgetRemaining()
    {
        return $this->container['budget_remaining'];
    }

    /**
     * Sets budget_remaining
     *
     * @param float $budget_remaining budget_remaining
     *
     * @return self
     */
    public function setBudgetRemaining($budget_remaining)
    {
        if (is_null($budget_remaining)) {
            array_push($this->openAPINullablesSetToNull, 'budget_remaining');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('budget_remaining', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['budget_remaining'] = $budget_remaining;

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
     * @param \DateTime $created_at created_at
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
     * @param \DateTime $updated_at updated_at
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


