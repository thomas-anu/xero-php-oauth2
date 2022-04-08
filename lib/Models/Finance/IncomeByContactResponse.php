<?php
/**
 * IncomeByContactResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Finance;

use \ArrayAccess;
use \XeroAPI\XeroPHP\FinanceObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * IncomeByContactResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IncomeByContactResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncomeByContactResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'total' => 'double',
        'total_detail' => '\XeroAPI\XeroPHP\Models\Finance\TotalDetail',
        'total_other' => '\XeroAPI\XeroPHP\Models\Finance\TotalOther',
        'contacts' => '\XeroAPI\XeroPHP\Models\Finance\ContactDetail[]',
        'manual_journals' => '\XeroAPI\XeroPHP\Models\Finance\ManualJournalTotal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'start_date' => 'date',
        'end_date' => 'date',
        'total' => 'double',
        'total_detail' => null,
        'total_other' => null,
        'contacts' => null,
        'manual_journals' => null
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
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'total' => 'total',
        'total_detail' => 'totalDetail',
        'total_other' => 'totalOther',
        'contacts' => 'contacts',
        'manual_journals' => 'manualJournals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'total' => 'setTotal',
        'total_detail' => 'setTotalDetail',
        'total_other' => 'setTotalOther',
        'contacts' => 'setContacts',
        'manual_journals' => 'setManualJournals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'total' => 'getTotal',
        'total_detail' => 'getTotalDetail',
        'total_other' => 'getTotalOther',
        'contacts' => 'getContacts',
        'manual_journals' => 'getManualJournals'
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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_detail'] = isset($data['total_detail']) ? $data['total_detail'] : null;
        $this->container['total_other'] = isset($data['total_other']) ? $data['total_other'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['manual_journals'] = isset($data['manual_journals']) ? $data['manual_journals'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Start date of the report
     *
     * @return $this
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
     * @param \DateTime|null $end_date End date of the report
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {

        $this->container['end_date'] = $end_date;

        return $this;
    }



    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total Total value
     *
     * @return $this
     */
    public function setTotal($total)
    {

        $this->container['total'] = $total;

        return $this;
    }



    /**
     * Gets total_detail
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\TotalDetail|null
     */
    public function getTotalDetail()
    {
        return $this->container['total_detail'];
    }

    /**
     * Sets total_detail
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\TotalDetail|null $total_detail total_detail
     *
     * @return $this
     */
    public function setTotalDetail($total_detail)
    {

        $this->container['total_detail'] = $total_detail;

        return $this;
    }



    /**
     * Gets total_other
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\TotalOther|null
     */
    public function getTotalOther()
    {
        return $this->container['total_other'];
    }

    /**
     * Sets total_other
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\TotalOther|null $total_other total_other
     *
     * @return $this
     */
    public function setTotalOther($total_other)
    {

        $this->container['total_other'] = $total_other;

        return $this;
    }



    /**
     * Gets contacts
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\ContactDetail[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\ContactDetail[]|null $contacts contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {

        $this->container['contacts'] = $contacts;

        return $this;
    }



    /**
     * Gets manual_journals
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\ManualJournalTotal|null
     */
    public function getManualJournals()
    {
        return $this->container['manual_journals'];
    }

    /**
     * Sets manual_journals
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\ManualJournalTotal|null $manual_journals manual_journals
     *
     * @return $this
     */
    public function setManualJournals($manual_journals)
    {

        $this->container['manual_journals'] = $manual_journals;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
            FinanceObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


