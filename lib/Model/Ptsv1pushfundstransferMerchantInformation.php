<?php
/**
 * Ptsv1pushfundstransferMerchantInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv1pushfundstransferMerchantInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferMerchantInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_merchantInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'categoryCode' => 'int',
        'submitLocalDateTime' => 'string',
        'vatRegistrationNumber' => 'string',
        'merchantDescriptor' => '\CyberSource\Model\Ptsv1pushfundstransferMerchantInformationMerchantDescriptor'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'categoryCode' => null,
        'submitLocalDateTime' => null,
        'vatRegistrationNumber' => null,
        'merchantDescriptor' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'categoryCode' => 'categoryCode',
        'submitLocalDateTime' => 'submitLocalDateTime',
        'vatRegistrationNumber' => 'vatRegistrationNumber',
        'merchantDescriptor' => 'merchantDescriptor'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'categoryCode' => 'setCategoryCode',
        'submitLocalDateTime' => 'setSubmitLocalDateTime',
        'vatRegistrationNumber' => 'setVatRegistrationNumber',
        'merchantDescriptor' => 'setMerchantDescriptor'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'categoryCode' => 'getCategoryCode',
        'submitLocalDateTime' => 'getSubmitLocalDateTime',
        'vatRegistrationNumber' => 'getVatRegistrationNumber',
        'merchantDescriptor' => 'getMerchantDescriptor'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['submitLocalDateTime'] = isset($data['submitLocalDateTime']) ? $data['submitLocalDateTime'] : null;
        $this->container['vatRegistrationNumber'] = isset($data['vatRegistrationNumber']) ? $data['vatRegistrationNumber'] : null;
        $this->container['merchantDescriptor'] = isset($data['merchantDescriptor']) ? $data['merchantDescriptor'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets categoryCode
     * @return int
     */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
     * Sets categoryCode
     * @param int $categoryCode The value for this field is a four-digit number that the payment card industry uses to classify merchants into market segments. A payment card company assigned one or more of these values to your business when you started accepting the payment card company’s cards. When you do not include this field in your request, CyberSource uses the value in your CyberSource account.  For processor-specific information, see the merchant_category_code field description in Credit Card Services Using the SCMP API.  Visa Platform Connect The value for this field corresponds to the following data in the TC 33 capture file5:  Record: CP01 TCR4 Position: 150-153 Field: Merchant Category Code
     * @return $this
     */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;

        return $this;
    }

    /**
     * Gets submitLocalDateTime
     * @return string
     */
    public function getSubmitLocalDateTime()
    {
        return $this->container['submitLocalDateTime'];
    }

    /**
     * Sets submitLocalDateTime
     * @param string $submitLocalDateTime Time that the transaction was submitted in local time. The time is in hhmmss format.
     * @return $this
     */
    public function setSubmitLocalDateTime($submitLocalDateTime)
    {

        $this->container['submitLocalDateTime'] = $submitLocalDateTime;

        return $this;
    }

    /**
     * Gets vatRegistrationNumber
     * @return string
     */
    public function getVatRegistrationNumber()
    {
        return $this->container['vatRegistrationNumber'];
    }

    /**
     * Sets vatRegistrationNumber
     * @param string $vatRegistrationNumber Your government-assigned tax identification number.  Visa Platform Connect: max length is 20
     * @return $this
     */
    public function setVatRegistrationNumber($vatRegistrationNumber)
    {

        $this->container['vatRegistrationNumber'] = $vatRegistrationNumber;

        return $this;
    }

    /**
     * Gets merchantDescriptor
     * @return \CyberSource\Model\Ptsv1pushfundstransferMerchantInformationMerchantDescriptor
     */
    public function getMerchantDescriptor()
    {
        return $this->container['merchantDescriptor'];
    }

    /**
     * Sets merchantDescriptor
     * @param \CyberSource\Model\Ptsv1pushfundstransferMerchantInformationMerchantDescriptor $merchantDescriptor
     * @return $this
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
        $this->container['merchantDescriptor'] = $merchantDescriptor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


