<?php
/**
 * AsyncLineItemsReport
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
 * AsyncLineItemsReport Class Doc Comment
 *
 * @category Class
 * @description Line Items report body request
 * @package  criteo\api\retailmedia\v2024_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AsyncLineItemsReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AsyncLineItemsReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'metrics' => 'string[]',
        'dimensions' => 'string[]',
        'campaign_type' => 'string',
        'sales_channel' => 'string',
        'format' => 'string',
        'report_type' => 'string',
        'click_attribution_window' => 'string',
        'view_attribution_window' => 'string',
        'ids' => 'string[]',
        'id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'timezone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'metrics' => null,
        'dimensions' => null,
        'campaign_type' => null,
        'sales_channel' => null,
        'format' => null,
        'report_type' => null,
        'click_attribution_window' => null,
        'view_attribution_window' => null,
        'ids' => null,
        'id' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'timezone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'metrics' => true,
		'dimensions' => true,
		'campaign_type' => true,
		'sales_channel' => true,
		'format' => true,
		'report_type' => true,
		'click_attribution_window' => true,
		'view_attribution_window' => true,
		'ids' => true,
		'id' => true,
		'start_date' => false,
		'end_date' => false,
		'timezone' => true
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
        'metrics' => 'metrics',
        'dimensions' => 'dimensions',
        'campaign_type' => 'campaignType',
        'sales_channel' => 'salesChannel',
        'format' => 'format',
        'report_type' => 'reportType',
        'click_attribution_window' => 'clickAttributionWindow',
        'view_attribution_window' => 'viewAttributionWindow',
        'ids' => 'ids',
        'id' => 'id',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'timezone' => 'timezone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metrics' => 'setMetrics',
        'dimensions' => 'setDimensions',
        'campaign_type' => 'setCampaignType',
        'sales_channel' => 'setSalesChannel',
        'format' => 'setFormat',
        'report_type' => 'setReportType',
        'click_attribution_window' => 'setClickAttributionWindow',
        'view_attribution_window' => 'setViewAttributionWindow',
        'ids' => 'setIds',
        'id' => 'setId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'timezone' => 'setTimezone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metrics' => 'getMetrics',
        'dimensions' => 'getDimensions',
        'campaign_type' => 'getCampaignType',
        'sales_channel' => 'getSalesChannel',
        'format' => 'getFormat',
        'report_type' => 'getReportType',
        'click_attribution_window' => 'getClickAttributionWindow',
        'view_attribution_window' => 'getViewAttributionWindow',
        'ids' => 'getIds',
        'id' => 'getId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'timezone' => 'getTimezone'
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

    public const METRICS_IMPRESSIONS = 'impressions';
    public const METRICS_CLICKS = 'clicks';
    public const METRICS_SPEND = 'spend';
    public const METRICS_ATTRIBUTED_SALES = 'attributedSales';
    public const METRICS_ATTRIBUTED_UNITS = 'attributedUnits';
    public const METRICS_ATTRIBUTED_ORDERS = 'attributedOrders';
    public const METRICS_CTR = 'ctr';
    public const METRICS_CPC = 'cpc';
    public const METRICS_CPO = 'cpo';
    public const METRICS_ROAS = 'roas';
    public const METRICS_ASSISTED_UNITS = 'assistedUnits';
    public const METRICS_ASSISTED_SALES = 'assistedSales';
    public const METRICS_UNIQUE_VISITORS = 'uniqueVisitors';
    public const METRICS_FREQUENCY = 'frequency';
    public const DIMENSIONS_DATE = 'date';
    public const DIMENSIONS_HOUR = 'hour';
    public const DIMENSIONS_CAMPAIGN_ID = 'campaignId';
    public const DIMENSIONS_CAMPAIGN_NAME = 'campaignName';
    public const DIMENSIONS_CAMPAIGN_TYPE_NAME = 'campaignTypeName';
    public const DIMENSIONS_ADV_PRODUCT_CATEGORY = 'advProductCategory';
    public const DIMENSIONS_ADV_PRODUCT_ID = 'advProductId';
    public const DIMENSIONS_ADV_PRODUCT_NAME = 'advProductName';
    public const DIMENSIONS_BRAND_ID = 'brandId';
    public const DIMENSIONS_BRAND_NAME = 'brandName';
    public const DIMENSIONS_LINE_ITEM_ID = 'lineItemId';
    public const DIMENSIONS_LINE_ITEM_NAME = 'lineItemName';
    public const DIMENSIONS_RETAILER_ID = 'retailerId';
    public const DIMENSIONS_RETAILER_NAME = 'retailerName';
    public const DIMENSIONS_KEYWORD = 'keyword';
    public const DIMENSIONS_PAGE_TYPE_NAME = 'pageTypeName';
    public const DIMENSIONS_SALES_CHANNEL = 'salesChannel';
    public const DIMENSIONS_ENVIRONMENT = 'environment';
    public const CAMPAIGN_TYPE_SPONSORED_PRODUCTS = 'sponsoredProducts';
    public const CAMPAIGN_TYPE_ON_SITE_DISPLAYS = 'onSiteDisplays';
    public const SALES_CHANNEL_OFFLINE = 'offline';
    public const SALES_CHANNEL_ONLINE = 'online';
    public const FORMAT_JSON = 'json';
    public const FORMAT_JSON_COMPACT = 'json-compact';
    public const FORMAT_JSON_NEWLINE = 'json-newline';
    public const FORMAT_CSV = 'csv';
    public const REPORT_TYPE_SUMMARY = 'summary';
    public const REPORT_TYPE_PAGE_TYPE = 'pageType';
    public const REPORT_TYPE_KEYWORD = 'keyword';
    public const REPORT_TYPE_PRODUCT_CATEGORY = 'productCategory';
    public const REPORT_TYPE_PRODUCT = 'product';
    public const REPORT_TYPE_ATTRIBUTED_TRANSACTIONS = 'attributedTransactions';
    public const REPORT_TYPE_ENVIRONMENT = 'environment';
    public const REPORT_TYPE_SERVED_CATEGORY = 'servedCategory';
    public const CLICK_ATTRIBUTION_WINDOW__7_D = '7D';
    public const CLICK_ATTRIBUTION_WINDOW__14_D = '14D';
    public const CLICK_ATTRIBUTION_WINDOW__30_D = '30D';
    public const CLICK_ATTRIBUTION_WINDOW_NONE = 'none';
    public const VIEW_ATTRIBUTION_WINDOW__1_D = '1D';
    public const VIEW_ATTRIBUTION_WINDOW__7_D = '7D';
    public const VIEW_ATTRIBUTION_WINDOW__14_D = '14D';
    public const VIEW_ATTRIBUTION_WINDOW__30_D = '30D';
    public const VIEW_ATTRIBUTION_WINDOW_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricsAllowableValues()
    {
        return [
            self::METRICS_IMPRESSIONS,
            self::METRICS_CLICKS,
            self::METRICS_SPEND,
            self::METRICS_ATTRIBUTED_SALES,
            self::METRICS_ATTRIBUTED_UNITS,
            self::METRICS_ATTRIBUTED_ORDERS,
            self::METRICS_CTR,
            self::METRICS_CPC,
            self::METRICS_CPO,
            self::METRICS_ROAS,
            self::METRICS_ASSISTED_UNITS,
            self::METRICS_ASSISTED_SALES,
            self::METRICS_UNIQUE_VISITORS,
            self::METRICS_FREQUENCY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDimensionsAllowableValues()
    {
        return [
            self::DIMENSIONS_DATE,
            self::DIMENSIONS_HOUR,
            self::DIMENSIONS_CAMPAIGN_ID,
            self::DIMENSIONS_CAMPAIGN_NAME,
            self::DIMENSIONS_CAMPAIGN_TYPE_NAME,
            self::DIMENSIONS_ADV_PRODUCT_CATEGORY,
            self::DIMENSIONS_ADV_PRODUCT_ID,
            self::DIMENSIONS_ADV_PRODUCT_NAME,
            self::DIMENSIONS_BRAND_ID,
            self::DIMENSIONS_BRAND_NAME,
            self::DIMENSIONS_LINE_ITEM_ID,
            self::DIMENSIONS_LINE_ITEM_NAME,
            self::DIMENSIONS_RETAILER_ID,
            self::DIMENSIONS_RETAILER_NAME,
            self::DIMENSIONS_KEYWORD,
            self::DIMENSIONS_PAGE_TYPE_NAME,
            self::DIMENSIONS_SALES_CHANNEL,
            self::DIMENSIONS_ENVIRONMENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCampaignTypeAllowableValues()
    {
        return [
            self::CAMPAIGN_TYPE_SPONSORED_PRODUCTS,
            self::CAMPAIGN_TYPE_ON_SITE_DISPLAYS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalesChannelAllowableValues()
    {
        return [
            self::SALES_CHANNEL_OFFLINE,
            self::SALES_CHANNEL_ONLINE,
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
            self::FORMAT_JSON,
            self::FORMAT_JSON_COMPACT,
            self::FORMAT_JSON_NEWLINE,
            self::FORMAT_CSV,
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
            self::REPORT_TYPE_PAGE_TYPE,
            self::REPORT_TYPE_KEYWORD,
            self::REPORT_TYPE_PRODUCT_CATEGORY,
            self::REPORT_TYPE_PRODUCT,
            self::REPORT_TYPE_ATTRIBUTED_TRANSACTIONS,
            self::REPORT_TYPE_ENVIRONMENT,
            self::REPORT_TYPE_SERVED_CATEGORY,
        ];
    }

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
            self::CLICK_ATTRIBUTION_WINDOW_NONE,
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
            self::VIEW_ATTRIBUTION_WINDOW__1_D,
            self::VIEW_ATTRIBUTION_WINDOW__7_D,
            self::VIEW_ATTRIBUTION_WINDOW__14_D,
            self::VIEW_ATTRIBUTION_WINDOW__30_D,
            self::VIEW_ATTRIBUTION_WINDOW_NONE,
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
        $this->setIfExists('metrics', $data ?? [], null);
        $this->setIfExists('dimensions', $data ?? [], null);
        $this->setIfExists('campaign_type', $data ?? [], null);
        $this->setIfExists('sales_channel', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], 'json-compact');
        $this->setIfExists('report_type', $data ?? [], 'summary');
        $this->setIfExists('click_attribution_window', $data ?? [], 'none');
        $this->setIfExists('view_attribution_window', $data ?? [], 'none');
        $this->setIfExists('ids', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], 'UTC');
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

        $allowedValues = $this->getCampaignTypeAllowableValues();
        if (!is_null($this->container['campaign_type']) && !in_array($this->container['campaign_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'campaign_type', must be one of '%s'",
                $this->container['campaign_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSalesChannelAllowableValues();
        if (!is_null($this->container['sales_channel']) && !in_array($this->container['sales_channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sales_channel', must be one of '%s'",
                $this->container['sales_channel'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReportTypeAllowableValues();
        if (!is_null($this->container['report_type']) && !in_array($this->container['report_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'report_type', must be one of '%s'",
                $this->container['report_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getClickAttributionWindowAllowableValues();
        if (!is_null($this->container['click_attribution_window']) && !in_array($this->container['click_attribution_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'click_attribution_window', must be one of '%s'",
                $this->container['click_attribution_window'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViewAttributionWindowAllowableValues();
        if (!is_null($this->container['view_attribution_window']) && !in_array($this->container['view_attribution_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'view_attribution_window', must be one of '%s'",
                $this->container['view_attribution_window'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
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
     * Gets metrics
     *
     * @return string[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param string[]|null $metrics List of metrics to report on
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        if (is_null($metrics)) {
            array_push($this->openAPINullablesSetToNull, 'metrics');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metrics', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getMetricsAllowableValues();
        if (!is_null($metrics) && array_diff($metrics, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'metrics', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return string[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param string[]|null $dimensions List of dimensions to report on
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        if (is_null($dimensions)) {
            array_push($this->openAPINullablesSetToNull, 'dimensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dimensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDimensionsAllowableValues();
        if (!is_null($dimensions) && array_diff($dimensions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dimensions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets campaign_type
     *
     * @return string|null
     */
    public function getCampaignType()
    {
        return $this->container['campaign_type'];
    }

    /**
     * Sets campaign_type
     *
     * @param string|null $campaign_type Filter the type of campaigns to report on: sponsoredProducts or onSiteDisplays
     *
     * @return self
     */
    public function setCampaignType($campaign_type)
    {
        if (is_null($campaign_type)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getCampaignTypeAllowableValues();
        if (!is_null($campaign_type) && !in_array($campaign_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'campaign_type', must be one of '%s'",
                    $campaign_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['campaign_type'] = $campaign_type;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return string|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param string|null $sales_channel Filter on specific sales channel: offline or online
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        if (is_null($sales_channel)) {
            array_push($this->openAPINullablesSetToNull, 'sales_channel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sales_channel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSalesChannelAllowableValues();
        if (!is_null($sales_channel) && !in_array($sales_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sales_channel', must be one of '%s'",
                    $sales_channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sales_channel'] = $sales_channel;

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
     * @param string|null $format Format of the output
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
     * Gets report_type
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string|null $report_type Type of report, if no dimensions/metrics are provided, falls back to summary reportType
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        if (is_null($report_type)) {
            array_push($this->openAPINullablesSetToNull, 'report_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('report_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getReportTypeAllowableValues();
        if (!is_null($report_type) && !in_array($report_type, $allowedValues, true)) {
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
     * @param string|null $click_attribution_window Click attribution window
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
     * @param string|null $view_attribution_window View attribution window
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
     * @param string[]|null $ids Ids to report on
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
     * @param string|null $id Id to report on
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
     * @param \DateTime $start_date Start date
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
     * @param \DateTime $end_date End date
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
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone Time zone : see criteo developer portal for supported time zones
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            array_push($this->openAPINullablesSetToNull, 'timezone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timezone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timezone'] = $timezone;

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


