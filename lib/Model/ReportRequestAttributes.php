<?php
/**
 * ReportRequestAttributes
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
 * ReportRequestAttributes Class Doc Comment
 *
 * @category Class
 * @description Report Request Attributes
 * @package  criteo\api\retailmedia\v2023_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'revenue_type' => 'string',
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
        'revenue_type' => null,
        'start_date' => 'date',
        'time_zone' => null,
        'view_attribution_window' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'click_attribution_window' => true,
		'end_date' => false,
		'format' => true,
		'id' => true,
		'ids' => true,
		'report_type' => false,
		'revenue_type' => true,
		'start_date' => false,
		'time_zone' => true,
		'view_attribution_window' => true
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
        'click_attribution_window' => 'clickAttributionWindow',
        'end_date' => 'endDate',
        'format' => 'format',
        'id' => 'id',
        'ids' => 'ids',
        'report_type' => 'reportType',
        'revenue_type' => 'revenueType',
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
        'revenue_type' => 'setRevenueType',
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
        'revenue_type' => 'getRevenueType',
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

    public const CLICK_ATTRIBUTION_WINDOW__7_D = '7D';
    public const CLICK_ATTRIBUTION_WINDOW__14_D = '14D';
    public const CLICK_ATTRIBUTION_WINDOW__30_D = '30D';
    public const FORMAT_CSV = 'csv';
    public const FORMAT_JSON = 'json';
    public const FORMAT_JSON_COMPACT = 'json-compact';
    public const FORMAT_JSON_NEWLINE = 'json-newline';
    public const REPORT_TYPE_SUMMARY = 'summary';
    public const REPORT_TYPE_KEYWORD = 'keyword';
    public const REPORT_TYPE_PAGE_TYPE = 'pageType';
    public const REPORT_TYPE_PRODUCT_CATEGORY = 'productCategory';
    public const REPORT_TYPE_PRODUCT = 'product';
    public const REPORT_TYPE_ATTRIBUTED_TRANSACTIONS = 'attributedTransactions';
    public const VIEW_ATTRIBUTION_WINDOW_NONE = 'none';
    public const VIEW_ATTRIBUTION_WINDOW__1_D = '1D';
    public const VIEW_ATTRIBUTION_WINDOW__7_D = '7D';
    public const VIEW_ATTRIBUTION_WINDOW__14_D = '14D';
    public const VIEW_ATTRIBUTION_WINDOW__30_D = '30D';

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
        $this->setIfExists('click_attribution_window', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], 'json');
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ids', $data ?? [], null);
        $this->setIfExists('report_type', $data ?? [], null);
        $this->setIfExists('revenue_type', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('view_attribution_window', $data ?? [], null);
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
        if (is_null($click_attribution_window)) {
            array_push($this->openAPINullablesSetToNull, 'click_attribution_window');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('click_attribution_window', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
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
        if (is_null($format)) {
            array_push($this->openAPINullablesSetToNull, 'format');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('format', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($ids)) {
            array_push($this->openAPINullablesSetToNull, 'ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($report_type)) {
            throw new \InvalidArgumentException('non-nullable report_type cannot be null');
        }
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
     * Gets revenue_type
     *
     * @return string|null
     */
    public function getRevenueType()
    {
        return $this->container['revenue_type'];
    }

    /**
     * Sets revenue_type
     *
     * @param string|null $revenue_type revenue_type
     *
     * @return self
     */
    public function setRevenueType($revenue_type)
    {
        if (is_null($revenue_type)) {
            array_push($this->openAPINullablesSetToNull, 'revenue_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('revenue_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['revenue_type'] = $revenue_type;

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
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
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
        if (is_null($time_zone)) {
            array_push($this->openAPINullablesSetToNull, 'time_zone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('time_zone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($view_attribution_window)) {
            array_push($this->openAPINullablesSetToNull, 'view_attribution_window');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('view_attribution_window', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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


