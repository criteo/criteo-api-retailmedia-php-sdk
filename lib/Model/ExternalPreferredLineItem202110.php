<?php
/**
 * ExternalPreferredLineItem202110
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
 * ExternalPreferredLineItem202110 Class Doc Comment
 *
 * @category Class
 * @description A Retail Media Preferred Line Item used to hold bid settings for one or many promoted products on a single retailer
 * @package  criteo\api\retailmedia\v2022_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExternalPreferredLineItem202110 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalPreferredLineItem202110';

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
        'capping' => '\criteo\api\retailmedia\v2022_07\Model\ExternalLineItemCapping202110',
        'page' => '\criteo\api\retailmedia\v2022_07\Model\ExternalLineItemPage202110',
        'target_retailer_id' => 'string',
        'budget' => 'double',
        'campaign_id' => 'string',
        'budget_spent' => 'double',
        'budget_remaining' => 'double',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
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
        'target_retailer_id' => 'long-id',
        'budget' => 'double',
        'campaign_id' => 'long-id',
        'budget_spent' => 'double',
        'budget_remaining' => 'double',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'creative_id' => 'long-id'
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
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'status' => 'status',
        'pacing' => 'pacing',
        'capping' => 'capping',
        'page' => 'page',
        'target_retailer_id' => 'targetRetailerId',
        'budget' => 'budget',
        'campaign_id' => 'campaignId',
        'budget_spent' => 'budgetSpent',
        'budget_remaining' => 'budgetRemaining',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
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
        'target_retailer_id' => 'setTargetRetailerId',
        'budget' => 'setBudget',
        'campaign_id' => 'setCampaignId',
        'budget_spent' => 'setBudgetSpent',
        'budget_remaining' => 'setBudgetRemaining',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
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
        'target_retailer_id' => 'getTargetRetailerId',
        'budget' => 'getBudget',
        'campaign_id' => 'getCampaignId',
        'budget_spent' => 'getBudgetSpent',
        'budget_remaining' => 'getBudgetRemaining',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
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

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_ACTIVE = 'active';
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_DRAFT = 'draft';
    const STATUS_PAUSED = 'paused';
    const STATUS_BUDGET_HIT = 'budgetHit';
    const STATUS_ENDED = 'ended';
    const STATUS_ARCHIVED = 'archived';
    const STATUS_NO_FUNDS = 'noFunds';
    const PACING_UNKNOWN = 'unknown';
    const PACING_STANDARD = 'standard';
    const PACING_ACCELERATED = 'accelerated';

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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['pacing'] = $data['pacing'] ?? null;
        $this->container['capping'] = $data['capping'] ?? null;
        $this->container['page'] = $data['page'] ?? null;
        $this->container['target_retailer_id'] = $data['target_retailer_id'] ?? null;
        $this->container['budget'] = $data['budget'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['budget_spent'] = $data['budget_spent'] ?? null;
        $this->container['budget_remaining'] = $data['budget_remaining'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['creative_id'] = $data['creative_id'] ?? null;
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

        if ($this->container['pacing'] === null) {
            $invalidProperties[] = "'pacing' can't be null";
        }
        $allowedValues = $this->getPacingAllowableValues();
        if (!is_null($this->container['pacing']) && !in_array($this->container['pacing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pacing', must be one of '%s'",
                $this->container['pacing'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['target_retailer_id'] === null) {
            $invalidProperties[] = "'target_retailer_id' can't be null";
        }
        if ($this->container['budget'] === null) {
            $invalidProperties[] = "'budget' can't be null";
        }
        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
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
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalPreferredLineItem202110., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalPreferredLineItem202110., must be bigger than or equal to 0.');
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
     * @return string
     */
    public function getPacing()
    {
        return $this->container['pacing'];
    }

    /**
     * Sets pacing
     *
     * @param string $pacing pacing
     *
     * @return self
     */
    public function setPacing($pacing)
    {
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
     * @return \criteo\api\retailmedia\v2022_07\Model\ExternalLineItemCapping202110|null
     */
    public function getCapping()
    {
        return $this->container['capping'];
    }

    /**
     * Sets capping
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\ExternalLineItemCapping202110|null $capping capping
     *
     * @return self
     */
    public function setCapping($capping)
    {
        $this->container['capping'] = $capping;

        return $this;
    }

    /**
     * Gets page
     *
     * @return \criteo\api\retailmedia\v2022_07\Model\ExternalLineItemPage202110
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param \criteo\api\retailmedia\v2022_07\Model\ExternalLineItemPage202110 $page page
     *
     * @return self
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

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
        $this->container['target_retailer_id'] = $target_retailer_id;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return double
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param double $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

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
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets budget_spent
     *
     * @return double|null
     */
    public function getBudgetSpent()
    {
        return $this->container['budget_spent'];
    }

    /**
     * Sets budget_spent
     *
     * @param double|null $budget_spent budget_spent
     *
     * @return self
     */
    public function setBudgetSpent($budget_spent)
    {
        $this->container['budget_spent'] = $budget_spent;

        return $this;
    }

    /**
     * Gets budget_remaining
     *
     * @return double|null
     */
    public function getBudgetRemaining()
    {
        return $this->container['budget_remaining'];
    }

    /**
     * Sets budget_remaining
     *
     * @param double|null $budget_remaining budget_remaining
     *
     * @return self
     */
    public function setBudgetRemaining($budget_remaining)
    {
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
        $this->container['updated_at'] = $updated_at;

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


