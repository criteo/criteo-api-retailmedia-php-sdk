<?php
/**
 * ReportRequestAttributes
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
 * ReportRequestAttributes Class Doc Comment
 *
 * @category Class
 * @description Report Request Attributes
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReportRequestAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportRequestAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'click_attribution_window' => 'string',
        'end_date' => '\DateTime',
        'format' => 'string',
        'id' => 'string',
        'ids' => 'string[]',
        'report_type' => 'string',
        'start_date' => '\DateTime',
        'time_zone' => 'string',
        'view_attribution_window' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'click_attribution_window' => null,
        'end_date' => 'date',
        'format' => null,
        'id' => null,
        'ids' => null,
        'report_type' => null,
        'start_date' => 'date',
        'time_zone' => null,
        'view_attribution_window' => null
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
        'click_attribution_window' => 'clickAttributionWindow',
        'end_date' => 'endDate',
        'format' => 'format',
        'id' => 'id',
        'ids' => 'ids',
        'report_type' => 'reportType',
        'start_date' => 'startDate',
        'time_zone' => 'timeZone',
        'view_attribution_window' => 'viewAttributionWindow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'click_attribution_window' => 'setClickAttributionWindow',
        'end_date' => 'setEndDate',
        'format' => 'setFormat',
        'id' => 'setId',
        'ids' => 'setIds',
        'report_type' => 'setReportType',
        'start_date' => 'setStartDate',
        'time_zone' => 'setTimeZone',
        'view_attribution_window' => 'setViewAttributionWindow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'click_attribution_window' => 'getClickAttributionWindow',
        'end_date' => 'getEndDate',
        'format' => 'getFormat',
        'id' => 'getId',
        'ids' => 'getIds',
        'report_type' => 'getReportType',
        'start_date' => 'getStartDate',
        'time_zone' => 'getTimeZone',
        'view_attribution_window' => 'getViewAttributionWindow'
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

    const CLICK_ATTRIBUTION_WINDOW__7_D = '7D';
    const CLICK_ATTRIBUTION_WINDOW__14_D = '14D';
    const CLICK_ATTRIBUTION_WINDOW__30_D = '30D';
    const FORMAT_CSV = 'csv';
    const FORMAT_JSON = 'json';
    const FORMAT_JSON_COMPACT = 'json-compact';
    const FORMAT_JSON_NEWLINE = 'json-newline';
    const REPORT_TYPE_SUMMARY = 'summary';
    const REPORT_TYPE_KEYWORD = 'keyword';
    const REPORT_TYPE_PAGE_TYPE = 'pageType';
    const REPORT_TYPE_PRODUCT_CATEGORY = 'productCategory';
    const REPORT_TYPE_PRODUCT = 'product';
    const REPORT_TYPE_ATTRIBUTED_TRANSACTIONS = 'attributedTransactions';
    const VIEW_ATTRIBUTION_WINDOW_NONE = 'none';
    const VIEW_ATTRIBUTION_WINDOW__1_D = '1D';
    const VIEW_ATTRIBUTION_WINDOW__7_D = '7D';
    const VIEW_ATTRIBUTION_WINDOW__14_D = '14D';
    const VIEW_ATTRIBUTION_WINDOW__30_D = '30D';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClickAttributionWindowAllowableValues()
    {
        return [
            self::CLICK_ATTRIBUTION_WINDOW__7_D,
            self::CLICK_ATTRIBUTION_WINDOW__14_D,
            self::CLICK_ATTRIBUTION_WINDOW__30_D,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_CSV,
            self::FORMAT_JSON,
            self::FORMAT_JSON_COMPACT,
            self::FORMAT_JSON_NEWLINE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReportTypeAllowableValues()
    {
        return [
            self::REPORT_TYPE_SUMMARY,
            self::REPORT_TYPE_KEYWORD,
            self::REPORT_TYPE_PAGE_TYPE,
            self::REPORT_TYPE_PRODUCT_CATEGORY,
            self::REPORT_TYPE_PRODUCT,
            self::REPORT_TYPE_ATTRIBUTED_TRANSACTIONS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViewAttributionWindowAllowableValues()
    {
        return [
            self::VIEW_ATTRIBUTION_WINDOW_NONE,
            self::VIEW_ATTRIBUTION_WINDOW__1_D,
            self::VIEW_ATTRIBUTION_WINDOW__7_D,
            self::VIEW_ATTRIBUTION_WINDOW__14_D,
            self::VIEW_ATTRIBUTION_WINDOW__30_D,
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
        $this->container['click_attribution_window'] = $data['click_attribution_window'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['format'] = $data['format'] ?? FORMAT_JSON;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['ids'] = $data['ids'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['time_zone'] = $data['time_zone'] ?? null;
        $this->container['view_attribution_window'] = $data['view_attribution_window'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getClickAttributionWindowAllowableValues();
        if (!is_null($this->container['click_attribution_window']) && !in_array($this->container['click_attribution_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'click_attribution_window', must be one of '%s'",
                $this->container['click_attribution_window'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['report_type'] === null) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        $allowedValues = $this->getReportTypeAllowableValues();
        if (!is_null($this->container['report_type']) && !in_array($this->container['report_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'report_type', must be one of '%s'",
                $this->container['report_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        $allowedValues = $this->getViewAttributionWindowAllowableValues();
        if (!is_null($this->container['view_attribution_window']) && !in_array($this->container['view_attribution_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'view_attribution_window', must be one of '%s'",
                $this->container['view_attribution_window'],
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
     * Gets click_attribution_window
     *
     * @return string|null
     */
    public function getClickAttributionWindow()
    {
        return $this->container['click_attribution_window'];
    }

    /**
     * Sets click_attribution_window
     *
     * @param string|null $click_attribution_window Defaults to value from campaign or one of \"7D\", \"14D\", or \"30D\". If specified, viewAttributionWindow must also be specified
     *
     * @return self
     */
    public function setClickAttributionWindow($click_attribution_window)
    {
        $allowedValues = $this->getClickAttributionWindowAllowableValues();
        if (!is_null($click_attribution_window) && !in_array($click_attribution_window, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'click_attribution_window', must be one of '%s'",
                    $click_attribution_window,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['click_attribution_window'] = $click_attribution_window;

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
     * @param \DateTime $end_date YYYY-MM-DD, must not be before startDate and not more than 100 days later
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format One of \"json\" (default),\"json-compact\",\"json-newline\" or \"csv\"
     *
     * @return self
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The id of the campaign or line item.  Either 'id' or 'ids' must be specified, but not both
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return string[]|null
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[]|null $ids The ids of the campaigns or line items.  Either 'id' or 'ids' must be specified, but not both
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string $report_type One of \"summary\", \"keyword\", \"pageType\", \"productCategory\", \"product\", or \"attributedTransactions\"
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        $allowedValues = $this->getReportTypeAllowableValues();
        if (!in_array($report_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'report_type', must be one of '%s'",
                    $report_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['report_type'] = $report_type;

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
     * @param \DateTime $start_date YYYY-MM-DD
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone time_zone
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets view_attribution_window
     *
     * @return string|null
     */
    public function getViewAttributionWindow()
    {
        return $this->container['view_attribution_window'];
    }

    /**
     * Sets view_attribution_window
     *
     * @param string|null $view_attribution_window Defaults to value from campaign or one of \"none\", \"1D\", \"7D\", \"14D\", or \"30D\". If specified, must be less than clickAttributionWindow, which must also be specified.
     *
     * @return self
     */
    public function setViewAttributionWindow($view_attribution_window)
    {
        $allowedValues = $this->getViewAttributionWindowAllowableValues();
        if (!is_null($view_attribution_window) && !in_array($view_attribution_window, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'view_attribution_window', must be one of '%s'",
                    $view_attribution_window,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['view_attribution_window'] = $view_attribution_window;

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


