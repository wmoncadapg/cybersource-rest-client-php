<?php
/**
 * Ptsv1pushfundstransferMerchantInformationMerchantDescriptor
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
 * Ptsv1pushfundstransferMerchantInformationMerchantDescriptor Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferMerchantInformationMerchantDescriptor implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_merchantInformation_merchantDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'administrativeArea' => 'string',
        'contact' => 'string',
        'country' => 'string',
        'locality' => 'string',
        'name' => 'string',
        'postalCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'administrativeArea' => null,
        'contact' => null,
        'country' => null,
        'locality' => null,
        'name' => null,
        'postalCode' => null
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
        'administrativeArea' => 'administrativeArea',
        'contact' => 'contact',
        'country' => 'country',
        'locality' => 'locality',
        'name' => 'name',
        'postalCode' => 'postalCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'administrativeArea' => 'setAdministrativeArea',
        'contact' => 'setContact',
        'country' => 'setCountry',
        'locality' => 'setLocality',
        'name' => 'setName',
        'postalCode' => 'setPostalCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'administrativeArea' => 'getAdministrativeArea',
        'contact' => 'getContact',
        'country' => 'getCountry',
        'locality' => 'getLocality',
        'name' => 'getName',
        'postalCode' => 'getPostalCode'
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
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
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
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea The state where the merchant is located.  See https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf  Note This field is supported only for businesses located in the U.S. or Canada.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {

        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets contact
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param string $contact For the descriptions, used-by information, data types, and lengths for these fields, see merchant_descriptor_contact field description in Credit Card Services Using the SCMP API.--> Contact information for the merchant.  Note These are the maximum data lengths for the following payment processors:  FDC Compass (13) Chase Paymentech (13).
     * @return $this
     */
    public function setContact($contact)
    {

        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Merchant's country.  Country code for your business location. Use the ISO Standard Alpha Country Codes This value might be displayed on the cardholder’s statement.  See https://developer.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf  Note If your business is located in the U.S. or Canada and you include this field in a request, you must also include merchantInformation.merchantDescriptor.administrativeArea.
     * @return $this
     */
    public function setCountry($country)
    {

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality Merchant's City.  City for your business location. This value might be displayed on the cardholder’s statement.
     * @return $this
     */
    public function setLocality($locality)
    {

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Merchant's business name. This name is displayed on the cardholder’s statement.  Chase Paymentech, Visa Platform Connect: length 22
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Merchant's postal code. This value might be displayed on the cardholder’s statement.  If your business is domiciled in the U.S., you can use a 5-digit or 9-digit postal code. A 9-digit postal code must follow this format: [5 digits][dash][4 digits] Example: 12345-6789  If your business is domiciled in Canada, you can use a 6-digit or 9-digit postal code. A 6-digit postal code must follow this format: [alpha][numeric][alpha][space] [numeric][alpha][numeric] Example: A1B 2C3
     * @return $this
     */
    public function setPostalCode($postalCode)
    {

        $this->container['postalCode'] = $postalCode;

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


