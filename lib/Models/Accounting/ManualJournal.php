<?php
/**
 * ManualJournal
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.0.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;

/**
 * ManualJournal Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManualJournal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManualJournal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'narration' => 'string',
        'journal_lines' => '\XeroAPI\XeroPHP\Models\Accounting\ManualJournalLine[]',
        'date' => '\DateTime',
        'line_amount_types' => '\XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes',
        'status' => 'string',
        'url' => 'string',
        'show_on_cash_basis_reports' => 'bool',
        'has_attachments' => 'bool',
        'updated_date_utc' => '\DateTime',
        'manual_journal_id' => 'string',
        'warnings' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'attachments' => '\XeroAPI\XeroPHP\Models\Accounting\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'narration' => null,
        'journal_lines' => null,
        'date' => 'date',
        'line_amount_types' => null,
        'status' => null,
        'url' => null,
        'show_on_cash_basis_reports' => null,
        'has_attachments' => null,
        'updated_date_utc' => 'date-time',
        'manual_journal_id' => 'uuid',
        'warnings' => null,
        'validation_errors' => null,
        'attachments' => null
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
        'narration' => 'Narration',
        'journal_lines' => 'JournalLines',
        'date' => 'Date',
        'line_amount_types' => 'LineAmountTypes',
        'status' => 'Status',
        'url' => 'Url',
        'show_on_cash_basis_reports' => 'ShowOnCashBasisReports',
        'has_attachments' => 'HasAttachments',
        'updated_date_utc' => 'UpdatedDateUTC',
        'manual_journal_id' => 'ManualJournalID',
        'warnings' => 'Warnings',
        'validation_errors' => 'ValidationErrors',
        'attachments' => 'Attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'narration' => 'setNarration',
        'journal_lines' => 'setJournalLines',
        'date' => 'setDate',
        'line_amount_types' => 'setLineAmountTypes',
        'status' => 'setStatus',
        'url' => 'setUrl',
        'show_on_cash_basis_reports' => 'setShowOnCashBasisReports',
        'has_attachments' => 'setHasAttachments',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'manual_journal_id' => 'setManualJournalId',
        'warnings' => 'setWarnings',
        'validation_errors' => 'setValidationErrors',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'narration' => 'getNarration',
        'journal_lines' => 'getJournalLines',
        'date' => 'getDate',
        'line_amount_types' => 'getLineAmountTypes',
        'status' => 'getStatus',
        'url' => 'getUrl',
        'show_on_cash_basis_reports' => 'getShowOnCashBasisReports',
        'has_attachments' => 'getHasAttachments',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'manual_journal_id' => 'getManualJournalId',
        'warnings' => 'getWarnings',
        'validation_errors' => 'getValidationErrors',
        'attachments' => 'getAttachments'
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

    const STATUS_DRAFT = 'DRAFT';
    const STATUS_POSTED = 'POSTED';
    const STATUS_DELETED = 'DELETED';
    const STATUS_VOIDED = 'VOIDED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_POSTED,
            self::STATUS_DELETED,
            self::STATUS_VOIDED,
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
        $this->container['narration'] = isset($data['narration']) ? $data['narration'] : null;
        $this->container['journal_lines'] = isset($data['journal_lines']) ? $data['journal_lines'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['line_amount_types'] = isset($data['line_amount_types']) ? $data['line_amount_types'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['show_on_cash_basis_reports'] = isset($data['show_on_cash_basis_reports']) ? $data['show_on_cash_basis_reports'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['manual_journal_id'] = isset($data['manual_journal_id']) ? $data['manual_journal_id'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['narration'] === null) {
            $invalidProperties[] = "'narration' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets narration
     *
     * @return string
     */
    public function getNarration()
    {
        return $this->container['narration'];
    }

    /**
     * Sets narration
     *
     * @param string $narration Description of journal being posted
     *
     * @return $this
     */
    public function setNarration($narration)
    {
        $this->container['narration'] = $narration;

        return $this;
    }

    /**
     * Gets journal_lines
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ManualJournalLine[]|null
     */
    public function getJournalLines()
    {
        return $this->container['journal_lines'];
    }

    /**
     * Sets journal_lines
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ManualJournalLine[]|null $journal_lines See JournalLines
     *
     * @return $this
     */
    public function setJournalLines($journal_lines)
    {
        $this->container['journal_lines'] = $journal_lines;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date journal was posted – YYYY-MM-DD
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets line_amount_types
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes|null
     */
    public function getLineAmountTypes()
    {
        return $this->container['line_amount_types'];
    }

    /**
     * Sets line_amount_types
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes|null $line_amount_types line_amount_types
     *
     * @return $this
     */
    public function setLineAmountTypes($line_amount_types)
    {
        $this->container['line_amount_types'] = $line_amount_types;

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
     * @param string|null $status See Manual Journal Status Codes
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Url link to a source document – shown as “Go to [appName]” in the Xero app
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets show_on_cash_basis_reports
     *
     * @return bool|null
     */
    public function getShowOnCashBasisReports()
    {
        return $this->container['show_on_cash_basis_reports'];
    }

    /**
     * Sets show_on_cash_basis_reports
     *
     * @param bool|null $show_on_cash_basis_reports Boolean – default is true if not specified
     *
     * @return $this
     */
    public function setShowOnCashBasisReports($show_on_cash_basis_reports)
    {
        $this->container['show_on_cash_basis_reports'] = $show_on_cash_basis_reports;

        return $this;
    }

    /**
     * Gets has_attachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->container['has_attachments'];
    }

    /**
     * Sets has_attachments
     *
     * @param bool|null $has_attachments Boolean to indicate if a manual journal has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {
        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }

    /**
     * Gets updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }

    /**
     * Sets updated_date_utc
     *
     * @param \DateTime|null $updated_date_utc Last modified date UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {
        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }

    /**
     * Gets manual_journal_id
     *
     * @return string|null
     */
    public function getManualJournalId()
    {
        return $this->container['manual_journal_id'];
    }

    /**
     * Sets manual_journal_id
     *
     * @param string|null $manual_journal_id The Xero identifier for a Manual Journal
     *
     * @return $this
     */
    public function setManualJournalId($manual_journal_id)
    {
        $this->container['manual_journal_id'] = $manual_journal_id;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $warnings Displays array of warning messages from the API
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {
        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null $attachments Displays array of attachments from the API
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


