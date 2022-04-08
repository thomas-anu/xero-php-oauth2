<?php
/**
 * DataSourceResponse
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
 * DataSourceResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DataSourceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataSourceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'direct_bank_feed' => 'double',
        'indirect_bank_feed' => 'double',
        'file_upload' => 'double',
        'manual' => 'double',
        'direct_bank_feed_pos' => 'double',
        'indirect_bank_feed_pos' => 'double',
        'file_upload_pos' => 'double',
        'manual_pos' => 'double',
        'direct_bank_feed_neg' => 'double',
        'indirect_bank_feed_neg' => 'double',
        'file_upload_neg' => 'double',
        'manual_neg' => 'double',
        'other_pos' => 'double',
        'other_neg' => 'double',
        'other' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'direct_bank_feed' => 'double',
        'indirect_bank_feed' => 'double',
        'file_upload' => 'double',
        'manual' => 'double',
        'direct_bank_feed_pos' => 'double',
        'indirect_bank_feed_pos' => 'double',
        'file_upload_pos' => 'double',
        'manual_pos' => 'double',
        'direct_bank_feed_neg' => 'double',
        'indirect_bank_feed_neg' => 'double',
        'file_upload_neg' => 'double',
        'manual_neg' => 'double',
        'other_pos' => 'double',
        'other_neg' => 'double',
        'other' => 'double'
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
        'direct_bank_feed' => 'directBankFeed',
        'indirect_bank_feed' => 'indirectBankFeed',
        'file_upload' => 'fileUpload',
        'manual' => 'manual',
        'direct_bank_feed_pos' => 'directBankFeedPos',
        'indirect_bank_feed_pos' => 'indirectBankFeedPos',
        'file_upload_pos' => 'fileUploadPos',
        'manual_pos' => 'manualPos',
        'direct_bank_feed_neg' => 'directBankFeedNeg',
        'indirect_bank_feed_neg' => 'indirectBankFeedNeg',
        'file_upload_neg' => 'fileUploadNeg',
        'manual_neg' => 'manualNeg',
        'other_pos' => 'otherPos',
        'other_neg' => 'otherNeg',
        'other' => 'other'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direct_bank_feed' => 'setDirectBankFeed',
        'indirect_bank_feed' => 'setIndirectBankFeed',
        'file_upload' => 'setFileUpload',
        'manual' => 'setManual',
        'direct_bank_feed_pos' => 'setDirectBankFeedPos',
        'indirect_bank_feed_pos' => 'setIndirectBankFeedPos',
        'file_upload_pos' => 'setFileUploadPos',
        'manual_pos' => 'setManualPos',
        'direct_bank_feed_neg' => 'setDirectBankFeedNeg',
        'indirect_bank_feed_neg' => 'setIndirectBankFeedNeg',
        'file_upload_neg' => 'setFileUploadNeg',
        'manual_neg' => 'setManualNeg',
        'other_pos' => 'setOtherPos',
        'other_neg' => 'setOtherNeg',
        'other' => 'setOther'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direct_bank_feed' => 'getDirectBankFeed',
        'indirect_bank_feed' => 'getIndirectBankFeed',
        'file_upload' => 'getFileUpload',
        'manual' => 'getManual',
        'direct_bank_feed_pos' => 'getDirectBankFeedPos',
        'indirect_bank_feed_pos' => 'getIndirectBankFeedPos',
        'file_upload_pos' => 'getFileUploadPos',
        'manual_pos' => 'getManualPos',
        'direct_bank_feed_neg' => 'getDirectBankFeedNeg',
        'indirect_bank_feed_neg' => 'getIndirectBankFeedNeg',
        'file_upload_neg' => 'getFileUploadNeg',
        'manual_neg' => 'getManualNeg',
        'other_pos' => 'getOtherPos',
        'other_neg' => 'getOtherNeg',
        'other' => 'getOther'
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
        $this->container['direct_bank_feed'] = isset($data['direct_bank_feed']) ? $data['direct_bank_feed'] : null;
        $this->container['indirect_bank_feed'] = isset($data['indirect_bank_feed']) ? $data['indirect_bank_feed'] : null;
        $this->container['file_upload'] = isset($data['file_upload']) ? $data['file_upload'] : null;
        $this->container['manual'] = isset($data['manual']) ? $data['manual'] : null;
        $this->container['direct_bank_feed_pos'] = isset($data['direct_bank_feed_pos']) ? $data['direct_bank_feed_pos'] : null;
        $this->container['indirect_bank_feed_pos'] = isset($data['indirect_bank_feed_pos']) ? $data['indirect_bank_feed_pos'] : null;
        $this->container['file_upload_pos'] = isset($data['file_upload_pos']) ? $data['file_upload_pos'] : null;
        $this->container['manual_pos'] = isset($data['manual_pos']) ? $data['manual_pos'] : null;
        $this->container['direct_bank_feed_neg'] = isset($data['direct_bank_feed_neg']) ? $data['direct_bank_feed_neg'] : null;
        $this->container['indirect_bank_feed_neg'] = isset($data['indirect_bank_feed_neg']) ? $data['indirect_bank_feed_neg'] : null;
        $this->container['file_upload_neg'] = isset($data['file_upload_neg']) ? $data['file_upload_neg'] : null;
        $this->container['manual_neg'] = isset($data['manual_neg']) ? $data['manual_neg'] : null;
        $this->container['other_pos'] = isset($data['other_pos']) ? $data['other_pos'] : null;
        $this->container['other_neg'] = isset($data['other_neg']) ? $data['other_neg'] : null;
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
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
     * Gets direct_bank_feed
     *
     * @return double|null
     */
    public function getDirectBankFeed()
    {
        return $this->container['direct_bank_feed'];
    }

    /**
     * Sets direct_bank_feed
     *
     * @param double|null $direct_bank_feed Sum of the amounts of all statement lines where the source of the data was a direct bank feed in to Xero.   This gives an indication on the certainty of correctness of the data.
     *
     * @return $this
     */
    public function setDirectBankFeed($direct_bank_feed)
    {

        $this->container['direct_bank_feed'] = $direct_bank_feed;

        return $this;
    }



    /**
     * Gets indirect_bank_feed
     *
     * @return double|null
     */
    public function getIndirectBankFeed()
    {
        return $this->container['indirect_bank_feed'];
    }

    /**
     * Sets indirect_bank_feed
     *
     * @param double|null $indirect_bank_feed Sum of the amounts of all statement lines where the source of the data was a indirect bank feed to Xero (usually via Yodlee).   This gives an indication on the certainty of correctness of the data.
     *
     * @return $this
     */
    public function setIndirectBankFeed($indirect_bank_feed)
    {

        $this->container['indirect_bank_feed'] = $indirect_bank_feed;

        return $this;
    }



    /**
     * Gets file_upload
     *
     * @return double|null
     */
    public function getFileUpload()
    {
        return $this->container['file_upload'];
    }

    /**
     * Sets file_upload
     *
     * @param double|null $file_upload Sum of the amounts of all statement lines where the source of the data was a CSV file upload in to Xero.   This gives an indication on the certainty of correctness of the data.
     *
     * @return $this
     */
    public function setFileUpload($file_upload)
    {

        $this->container['file_upload'] = $file_upload;

        return $this;
    }



    /**
     * Gets manual
     *
     * @return double|null
     */
    public function getManual()
    {
        return $this->container['manual'];
    }

    /**
     * Sets manual
     *
     * @param double|null $manual Sum of the amounts of all statement lines where the source of the data was manually keyed in to Xero.   This gives an indication on the certainty of correctness of the data.
     *
     * @return $this
     */
    public function setManual($manual)
    {

        $this->container['manual'] = $manual;

        return $this;
    }



    /**
     * Gets direct_bank_feed_pos
     *
     * @return double|null
     */
    public function getDirectBankFeedPos()
    {
        return $this->container['direct_bank_feed_pos'];
    }

    /**
     * Sets direct_bank_feed_pos
     *
     * @param double|null $direct_bank_feed_pos Sum of the amounts of all statement lines where the source of the data was a direct bank feed in to Xero.  This gives an indication on the certainty of correctness of the data.  Only positive transactions are included.
     *
     * @return $this
     */
    public function setDirectBankFeedPos($direct_bank_feed_pos)
    {

        $this->container['direct_bank_feed_pos'] = $direct_bank_feed_pos;

        return $this;
    }



    /**
     * Gets indirect_bank_feed_pos
     *
     * @return double|null
     */
    public function getIndirectBankFeedPos()
    {
        return $this->container['indirect_bank_feed_pos'];
    }

    /**
     * Sets indirect_bank_feed_pos
     *
     * @param double|null $indirect_bank_feed_pos Sum of the amounts of all statement lines where the source of the data was a indirect bank feed to Xero (usually via Yodlee).   This gives an indication on the certainty of correctness of the data. Only positive transactions are included.
     *
     * @return $this
     */
    public function setIndirectBankFeedPos($indirect_bank_feed_pos)
    {

        $this->container['indirect_bank_feed_pos'] = $indirect_bank_feed_pos;

        return $this;
    }



    /**
     * Gets file_upload_pos
     *
     * @return double|null
     */
    public function getFileUploadPos()
    {
        return $this->container['file_upload_pos'];
    }

    /**
     * Sets file_upload_pos
     *
     * @param double|null $file_upload_pos Sum of the amounts of all statement lines where the source of the data was a CSV file upload in to Xero.   This gives an indication on the certainty of correctness of the data. Only positive transactions are included.
     *
     * @return $this
     */
    public function setFileUploadPos($file_upload_pos)
    {

        $this->container['file_upload_pos'] = $file_upload_pos;

        return $this;
    }



    /**
     * Gets manual_pos
     *
     * @return double|null
     */
    public function getManualPos()
    {
        return $this->container['manual_pos'];
    }

    /**
     * Sets manual_pos
     *
     * @param double|null $manual_pos Sum of the amounts of all statement lines where the source of the data was manually keyed in to Xero.   This gives an indication on the certainty of correctness of the data. Only positive transactions are included.
     *
     * @return $this
     */
    public function setManualPos($manual_pos)
    {

        $this->container['manual_pos'] = $manual_pos;

        return $this;
    }



    /**
     * Gets direct_bank_feed_neg
     *
     * @return double|null
     */
    public function getDirectBankFeedNeg()
    {
        return $this->container['direct_bank_feed_neg'];
    }

    /**
     * Sets direct_bank_feed_neg
     *
     * @param double|null $direct_bank_feed_neg Sum of the amounts of all statement lines where the source of the data was a direct bank feed in to Xero.   This gives an indication on the certainty of correctness of the data.  Only negative transactions are included.
     *
     * @return $this
     */
    public function setDirectBankFeedNeg($direct_bank_feed_neg)
    {

        $this->container['direct_bank_feed_neg'] = $direct_bank_feed_neg;

        return $this;
    }



    /**
     * Gets indirect_bank_feed_neg
     *
     * @return double|null
     */
    public function getIndirectBankFeedNeg()
    {
        return $this->container['indirect_bank_feed_neg'];
    }

    /**
     * Sets indirect_bank_feed_neg
     *
     * @param double|null $indirect_bank_feed_neg Sum of the amounts of all statement lines where the source of the data was a indirect bank feed to Xero (usually via Yodlee).   This gives an indication on the certainty of correctness of the data.  Only negative transactions are included.
     *
     * @return $this
     */
    public function setIndirectBankFeedNeg($indirect_bank_feed_neg)
    {

        $this->container['indirect_bank_feed_neg'] = $indirect_bank_feed_neg;

        return $this;
    }



    /**
     * Gets file_upload_neg
     *
     * @return double|null
     */
    public function getFileUploadNeg()
    {
        return $this->container['file_upload_neg'];
    }

    /**
     * Sets file_upload_neg
     *
     * @param double|null $file_upload_neg Sum of the amounts of all statement lines where the source of the data was a CSV file upload in to Xero.   This gives an indication on the certainty of correctness of the data.  Only negative transactions are included.
     *
     * @return $this
     */
    public function setFileUploadNeg($file_upload_neg)
    {

        $this->container['file_upload_neg'] = $file_upload_neg;

        return $this;
    }



    /**
     * Gets manual_neg
     *
     * @return double|null
     */
    public function getManualNeg()
    {
        return $this->container['manual_neg'];
    }

    /**
     * Sets manual_neg
     *
     * @param double|null $manual_neg Sum of the amounts of all statement lines where the source of the data was manually keyed in to Xero.   This gives an indication on the certainty of correctness of the data.  Only negative transactions are included.
     *
     * @return $this
     */
    public function setManualNeg($manual_neg)
    {

        $this->container['manual_neg'] = $manual_neg;

        return $this;
    }



    /**
     * Gets other_pos
     *
     * @return double|null
     */
    public function getOtherPos()
    {
        return $this->container['other_pos'];
    }

    /**
     * Sets other_pos
     *
     * @param double|null $other_pos Sum of the amounts of all statement lines where the source of the data was any other category.   This gives an indication on the certainty of correctness of the data.  Only positive transactions are included.
     *
     * @return $this
     */
    public function setOtherPos($other_pos)
    {

        $this->container['other_pos'] = $other_pos;

        return $this;
    }



    /**
     * Gets other_neg
     *
     * @return double|null
     */
    public function getOtherNeg()
    {
        return $this->container['other_neg'];
    }

    /**
     * Sets other_neg
     *
     * @param double|null $other_neg Sum of the amounts of all statement lines where the source of the data was any other category.   This gives an indication on the certainty of correctness of the data.  Only negative transactions are included.
     *
     * @return $this
     */
    public function setOtherNeg($other_neg)
    {

        $this->container['other_neg'] = $other_neg;

        return $this;
    }



    /**
     * Gets other
     *
     * @return double|null
     */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
     * Sets other
     *
     * @param double|null $other Sum of the amounts of all statement lines where the source of the data was any other category.   This gives an indication on the certainty of correctness of the data.
     *
     * @return $this
     */
    public function setOther($other)
    {

        $this->container['other'] = $other;

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


