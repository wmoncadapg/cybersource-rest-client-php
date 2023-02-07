<?php
/**
 * Ptsv2paymentsidrefundsPaymentInformation
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
 * Ptsv2paymentsidrefundsPaymentInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsidrefundsPaymentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentsidrefunds_paymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card' => '\CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationCard',
        'bank' => '\CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationBank',
        'tokenizedCard' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationTokenizedCard',
        'fluidData' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationFluidData',
        'customer' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer',
        'paymentInstrument' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentInstrument',
        'instrumentIdentifier' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationInstrumentIdentifier',
        'shippingAddress' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationShippingAddress',
        'legacyToken' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationLegacyToken',
        'paymentType' => '\CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationPaymentType',
        'eWallet' => '\CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationEWallet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card' => null,
        'bank' => null,
        'tokenizedCard' => null,
        'fluidData' => null,
        'customer' => null,
        'paymentInstrument' => null,
        'instrumentIdentifier' => null,
        'shippingAddress' => null,
        'legacyToken' => null,
        'paymentType' => null,
        'eWallet' => null
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
        'card' => 'card',
        'bank' => 'bank',
        'tokenizedCard' => 'tokenizedCard',
        'fluidData' => 'fluidData',
        'customer' => 'customer',
        'paymentInstrument' => 'paymentInstrument',
        'instrumentIdentifier' => 'instrumentIdentifier',
        'shippingAddress' => 'shippingAddress',
        'legacyToken' => 'legacyToken',
        'paymentType' => 'paymentType',
        'eWallet' => 'eWallet'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'card' => 'setCard',
        'bank' => 'setBank',
        'tokenizedCard' => 'setTokenizedCard',
        'fluidData' => 'setFluidData',
        'customer' => 'setCustomer',
        'paymentInstrument' => 'setPaymentInstrument',
        'instrumentIdentifier' => 'setInstrumentIdentifier',
        'shippingAddress' => 'setShippingAddress',
        'legacyToken' => 'setLegacyToken',
        'paymentType' => 'setPaymentType',
        'eWallet' => 'setEWallet'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'card' => 'getCard',
        'bank' => 'getBank',
        'tokenizedCard' => 'getTokenizedCard',
        'fluidData' => 'getFluidData',
        'customer' => 'getCustomer',
        'paymentInstrument' => 'getPaymentInstrument',
        'instrumentIdentifier' => 'getInstrumentIdentifier',
        'shippingAddress' => 'getShippingAddress',
        'legacyToken' => 'getLegacyToken',
        'paymentType' => 'getPaymentType',
        'eWallet' => 'getEWallet'
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
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['tokenizedCard'] = isset($data['tokenizedCard']) ? $data['tokenizedCard'] : null;
        $this->container['fluidData'] = isset($data['fluidData']) ? $data['fluidData'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['paymentInstrument'] = isset($data['paymentInstrument']) ? $data['paymentInstrument'] : null;
        $this->container['instrumentIdentifier'] = isset($data['instrumentIdentifier']) ? $data['instrumentIdentifier'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['legacyToken'] = isset($data['legacyToken']) ? $data['legacyToken'] : null;
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['eWallet'] = isset($data['eWallet']) ? $data['eWallet'] : null;
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
     * Gets card
     * @return \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets bank
     * @return \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationBank
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     * @param \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationBank $bank
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets tokenizedCard
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationTokenizedCard
     */
    public function getTokenizedCard()
    {
        return $this->container['tokenizedCard'];
    }

    /**
     * Sets tokenizedCard
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationTokenizedCard $tokenizedCard
     * @return $this
     */
    public function setTokenizedCard($tokenizedCard)
    {
        $this->container['tokenizedCard'] = $tokenizedCard;

        return $this;
    }

    /**
     * Gets fluidData
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationFluidData
     */
    public function getFluidData()
    {
        return $this->container['fluidData'];
    }

    /**
     * Sets fluidData
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationFluidData $fluidData
     * @return $this
     */
    public function setFluidData($fluidData)
    {
        $this->container['fluidData'] = $fluidData;

        return $this;
    }

    /**
     * Gets customer
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets paymentInstrument
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->container['paymentInstrument'];
    }

    /**
     * Sets paymentInstrument
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentInstrument $paymentInstrument
     * @return $this
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->container['paymentInstrument'] = $paymentInstrument;

        return $this;
    }

    /**
     * Gets instrumentIdentifier
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationInstrumentIdentifier
     */
    public function getInstrumentIdentifier()
    {
        return $this->container['instrumentIdentifier'];
    }

    /**
     * Sets instrumentIdentifier
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationInstrumentIdentifier $instrumentIdentifier
     * @return $this
     */
    public function setInstrumentIdentifier($instrumentIdentifier)
    {
        $this->container['instrumentIdentifier'] = $instrumentIdentifier;

        return $this;
    }

    /**
     * Gets shippingAddress
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationShippingAddress $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets legacyToken
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationLegacyToken
     */
    public function getLegacyToken()
    {
        return $this->container['legacyToken'];
    }

    /**
     * Sets legacyToken
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationLegacyToken $legacyToken
     * @return $this
     */
    public function setLegacyToken($legacyToken)
    {
        $this->container['legacyToken'] = $legacyToken;

        return $this;
    }

    /**
     * Gets paymentType
     * @return \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationPaymentType
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationPaymentType $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets eWallet
     * @return \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationEWallet
     */
    public function getEWallet()
    {
        return $this->container['eWallet'];
    }

    /**
     * Sets eWallet
     * @param \CyberSource\Model\Ptsv2paymentsidrefundsPaymentInformationEWallet $eWallet
     * @return $this
     */
    public function setEWallet($eWallet)
    {
        $this->container['eWallet'] = $eWallet;

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


