<?php
/**
 * SalaryAndWage
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
 *
 * OpenAPI spec version: 2.2.13
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * SalaryAndWage Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SalaryAndWage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalaryAndWage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'salary_and_wages_id' => 'string',
        'earnings_rate_id' => 'string',
        'number_of_units_per_week' => 'double',
        'rate_per_unit' => 'double',
        'number_of_units_per_day' => 'double',
        'effective_from' => '\DateTime',
        'annual_salary' => 'double',
        'status' => 'string',
        'payment_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'salary_and_wages_id' => 'uuid',
        'earnings_rate_id' => 'uuid',
        'number_of_units_per_week' => 'double',
        'rate_per_unit' => 'double',
        'number_of_units_per_day' => 'double',
        'effective_from' => 'date',
        'annual_salary' => 'double',
        'status' => null,
        'payment_type' => null
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
        'salary_and_wages_id' => 'salaryAndWagesID',
        'earnings_rate_id' => 'earningsRateID',
        'number_of_units_per_week' => 'numberOfUnitsPerWeek',
        'rate_per_unit' => 'ratePerUnit',
        'number_of_units_per_day' => 'numberOfUnitsPerDay',
        'effective_from' => 'effectiveFrom',
        'annual_salary' => 'annualSalary',
        'status' => 'status',
        'payment_type' => 'paymentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'salary_and_wages_id' => 'setSalaryAndWagesId',
        'earnings_rate_id' => 'setEarningsRateId',
        'number_of_units_per_week' => 'setNumberOfUnitsPerWeek',
        'rate_per_unit' => 'setRatePerUnit',
        'number_of_units_per_day' => 'setNumberOfUnitsPerDay',
        'effective_from' => 'setEffectiveFrom',
        'annual_salary' => 'setAnnualSalary',
        'status' => 'setStatus',
        'payment_type' => 'setPaymentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'salary_and_wages_id' => 'getSalaryAndWagesId',
        'earnings_rate_id' => 'getEarningsRateId',
        'number_of_units_per_week' => 'getNumberOfUnitsPerWeek',
        'rate_per_unit' => 'getRatePerUnit',
        'number_of_units_per_day' => 'getNumberOfUnitsPerDay',
        'effective_from' => 'getEffectiveFrom',
        'annual_salary' => 'getAnnualSalary',
        'status' => 'getStatus',
        'payment_type' => 'getPaymentType'
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

    const STATUS_ACTIVE = 'Active';
    const STATUS_PENDING = 'Pending';
    const STATUS_HISTORY = 'History';
    const PAYMENT_TYPE_SALARY = 'Salary';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PENDING,
            self::STATUS_HISTORY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_SALARY,
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
        $this->container['salary_and_wages_id'] = isset($data['salary_and_wages_id']) ? $data['salary_and_wages_id'] : null;
        $this->container['earnings_rate_id'] = isset($data['earnings_rate_id']) ? $data['earnings_rate_id'] : null;
        $this->container['number_of_units_per_week'] = isset($data['number_of_units_per_week']) ? $data['number_of_units_per_week'] : null;
        $this->container['rate_per_unit'] = isset($data['rate_per_unit']) ? $data['rate_per_unit'] : null;
        $this->container['number_of_units_per_day'] = isset($data['number_of_units_per_day']) ? $data['number_of_units_per_day'] : null;
        $this->container['effective_from'] = isset($data['effective_from']) ? $data['effective_from'] : null;
        $this->container['annual_salary'] = isset($data['annual_salary']) ? $data['annual_salary'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['earnings_rate_id'] === null) {
            $invalidProperties[] = "'earnings_rate_id' can't be null";
        }
        if ($this->container['number_of_units_per_week'] === null) {
            $invalidProperties[] = "'number_of_units_per_week' can't be null";
        }
        if ($this->container['effective_from'] === null) {
            $invalidProperties[] = "'effective_from' can't be null";
        }
        if ($this->container['annual_salary'] === null) {
            $invalidProperties[] = "'annual_salary' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
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
     * Gets salary_and_wages_id
     *
     * @return string|null
     */
    public function getSalaryAndWagesId()
    {
        return $this->container['salary_and_wages_id'];
    }

    /**
     * Sets salary_and_wages_id
     *
     * @param string|null $salary_and_wages_id Xero unique identifier for a salary and wages record
     *
     * @return $this
     */
    public function setSalaryAndWagesId($salary_and_wages_id)
    {

        $this->container['salary_and_wages_id'] = $salary_and_wages_id;

        return $this;
    }



    /**
     * Gets earnings_rate_id
     *
     * @return string
     */
    public function getEarningsRateId()
    {
        return $this->container['earnings_rate_id'];
    }

    /**
     * Sets earnings_rate_id
     *
     * @param string $earnings_rate_id Xero unique identifier for an earnings rate
     *
     * @return $this
     */
    public function setEarningsRateId($earnings_rate_id)
    {

        $this->container['earnings_rate_id'] = $earnings_rate_id;

        return $this;
    }



    /**
     * Gets number_of_units_per_week
     *
     * @return double
     */
    public function getNumberOfUnitsPerWeek()
    {
        return $this->container['number_of_units_per_week'];
    }

    /**
     * Sets number_of_units_per_week
     *
     * @param double $number_of_units_per_week The Number of Units per week for the corresponding salary and wages
     *
     * @return $this
     */
    public function setNumberOfUnitsPerWeek($number_of_units_per_week)
    {

        $this->container['number_of_units_per_week'] = $number_of_units_per_week;

        return $this;
    }



    /**
     * Gets rate_per_unit
     *
     * @return double|null
     */
    public function getRatePerUnit()
    {
        return $this->container['rate_per_unit'];
    }

    /**
     * Sets rate_per_unit
     *
     * @param double|null $rate_per_unit The rate of each unit for the corresponding salary and wages
     *
     * @return $this
     */
    public function setRatePerUnit($rate_per_unit)
    {

        $this->container['rate_per_unit'] = $rate_per_unit;

        return $this;
    }



    /**
     * Gets number_of_units_per_day
     *
     * @return double|null
     */
    public function getNumberOfUnitsPerDay()
    {
        return $this->container['number_of_units_per_day'];
    }

    /**
     * Sets number_of_units_per_day
     *
     * @param double|null $number_of_units_per_day The Number of Units per day for the corresponding salary and wages
     *
     * @return $this
     */
    public function setNumberOfUnitsPerDay($number_of_units_per_day)
    {

        $this->container['number_of_units_per_day'] = $number_of_units_per_day;

        return $this;
    }



    /**
     * Gets effective_from
     *
     * @return \DateTime
     */
    public function getEffectiveFrom()
    {
        return $this->container['effective_from'];
    }

    /**
     * Sets effective_from
     *
     * @param \DateTime $effective_from The effective date of the corresponding salary and wages
     *
     * @return $this
     */
    public function setEffectiveFrom($effective_from)
    {

        $this->container['effective_from'] = $effective_from;

        return $this;
    }



    /**
     * Gets annual_salary
     *
     * @return double
     */
    public function getAnnualSalary()
    {
        return $this->container['annual_salary'];
    }

    /**
     * Sets annual_salary
     *
     * @param double $annual_salary The annual salary
     *
     * @return $this
     */
    public function setAnnualSalary($annual_salary)
    {

        $this->container['annual_salary'] = $annual_salary;

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
     * @param string $status The current status of the corresponding salary and wages
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
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
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type The type of the payment of the corresponding salary and wages
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['payment_type'] = $payment_type;

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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


