<?php
/**
 * EarningsType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.3.3
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EarningsType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EarningsType
{
    /**
     * Possible values of this enum
     */
    const FIXED = 'FIXED';
    const ORDINARYTIMEEARNINGS = 'ORDINARYTIMEEARNINGS';
    const OVERTIMEEARNINGS = 'OVERTIMEEARNINGS';
    const ALLOWANCE = 'ALLOWANCE';
    const LUMPSUMD = 'LUMPSUMD';
    const EMPLOYMENTTERMINATIONPAYMENT = 'EMPLOYMENTTERMINATIONPAYMENT';
    const LUMPSUMA = 'LUMPSUMA';
    const LUMPSUMB = 'LUMPSUMB';
    const BONUSESANDCOMMISSIONS = 'BONUSESANDCOMMISSIONS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIXED,
            self::ORDINARYTIMEEARNINGS,
            self::OVERTIMEEARNINGS,
            self::ALLOWANCE,
            self::LUMPSUMD,
            self::EMPLOYMENTTERMINATIONPAYMENT,
            self::LUMPSUMA,
            self::LUMPSUMB,
            self::BONUSESANDCOMMISSIONS,
        ];
    }
}


