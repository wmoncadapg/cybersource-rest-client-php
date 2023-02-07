<?php
/**
 * Ptsv1pushfundstransferProcessingInformation
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
 * Ptsv1pushfundstransferProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'businessApplicationId' => 'string',
        'commerceIndicator' => 'string',
        'networkRoutingOrder' => 'string',
        'payoutsOptions' => '\CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions',
        'purposeOfPayment' => 'string',
        'reconciliationId' => 'string',
        'recurringOptions' => '\CyberSource\Model\Ptsv1pushfundstransferProcessingInformationRecurringOptions',
        'transactionReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'businessApplicationId' => null,
        'commerceIndicator' => null,
        'networkRoutingOrder' => null,
        'payoutsOptions' => null,
        'purposeOfPayment' => null,
        'reconciliationId' => null,
        'recurringOptions' => null,
        'transactionReason' => null
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
        'businessApplicationId' => 'businessApplicationId',
        'commerceIndicator' => 'commerceIndicator',
        'networkRoutingOrder' => 'networkRoutingOrder',
        'payoutsOptions' => 'payoutsOptions',
        'purposeOfPayment' => 'purposeOfPayment',
        'reconciliationId' => 'reconciliationId',
        'recurringOptions' => 'recurringOptions',
        'transactionReason' => 'transactionReason'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'businessApplicationId' => 'setBusinessApplicationId',
        'commerceIndicator' => 'setCommerceIndicator',
        'networkRoutingOrder' => 'setNetworkRoutingOrder',
        'payoutsOptions' => 'setPayoutsOptions',
        'purposeOfPayment' => 'setPurposeOfPayment',
        'reconciliationId' => 'setReconciliationId',
        'recurringOptions' => 'setRecurringOptions',
        'transactionReason' => 'setTransactionReason'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'businessApplicationId' => 'getBusinessApplicationId',
        'commerceIndicator' => 'getCommerceIndicator',
        'networkRoutingOrder' => 'getNetworkRoutingOrder',
        'payoutsOptions' => 'getPayoutsOptions',
        'purposeOfPayment' => 'getPurposeOfPayment',
        'reconciliationId' => 'getReconciliationId',
        'recurringOptions' => 'getRecurringOptions',
        'transactionReason' => 'getTransactionReason'
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
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['commerceIndicator'] = isset($data['commerceIndicator']) ? $data['commerceIndicator'] : null;
        $this->container['networkRoutingOrder'] = isset($data['networkRoutingOrder']) ? $data['networkRoutingOrder'] : null;
        $this->container['payoutsOptions'] = isset($data['payoutsOptions']) ? $data['payoutsOptions'] : null;
        $this->container['purposeOfPayment'] = isset($data['purposeOfPayment']) ? $data['purposeOfPayment'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['recurringOptions'] = isset($data['recurringOptions']) ? $data['recurringOptions'] : null;
        $this->container['transactionReason'] = isset($data['transactionReason']) ? $data['transactionReason'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['commerceIndicator'] === null) {
            $invalid_properties[] = "'commerceIndicator' can't be null";
        }
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

        if ($this->container['commerceIndicator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets businessApplicationId
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['businessApplicationId'];
    }

    /**
     * Sets businessApplicationId
     * @param string $businessApplicationId Payouts transaction type. Required for Mastercard Send.  Valid Values- Visa Platform Connect: - `AA`: Account to account. - `CP`: Card bill payment - `FD`: Funds disbursement (general) - `GD`: Government disbursement - `MD`: Merchant disbursement (acquirers or aggregators settling to merchants). - `PP`: Person to person. - `TU`: Top-up for enhanced prepaid loads.   Mastercard Send: - `BB`: Business to business. - `BD`: Business Disbursement - `CP`: Card bill payment - `GD`: Government disbursement - `MD`: Merchant disbursement (acquirers or aggregators settling to merchants). - `OG`: Online gambling payout.   Chase Paymentech Solutions: - `AA`: Account to account. - `FD`: Funds disbursement (general) - `MD`: Merchant disbursement (acquirers or aggregators settling to merchants). - `PP`: Person to person.   FDC Compass: - `BB`: Business to business. - `BI`: Bank-initiated money transfer. - `FD`: Funds disbursement (general) - `GD`: Government disbursement - `GP`: Gambling Payment - `LO`: Loyalty Offers - `MD`: Merchant disbursement (acquirers or aggregators settling to merchants). - `MI`: Merchant initated money transfer - `OG`: Online gambling payout. - `PD`: Payroll pension disbursement. - `PP`: Person to person. - `WT`: Wallet transfer.
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {

        $this->container['businessApplicationId'] = $businessApplicationId;

        return $this;
    }

    /**
     * Gets commerceIndicator
     * @return string
     */
    public function getCommerceIndicator()
    {
        return $this->container['commerceIndicator'];
    }

    /**
     * Sets commerceIndicator
     * @param string $commerceIndicator Type of transaction.  Value for an OCT transaction: internet  For details, see the e_commerce_indicator field description in Payouts Using the SCMP API.
     * @return $this
     */
    public function setCommerceIndicator($commerceIndicator)
    {

        $this->container['commerceIndicator'] = $commerceIndicator;

        return $this;
    }

    /**
     * Gets networkRoutingOrder
     * @return string
     */
    public function getNetworkRoutingOrder()
    {
        return $this->container['networkRoutingOrder'];
    }

    /**
     * Sets networkRoutingOrder
     * @param string $networkRoutingOrder Visa Platform Connect This field is optionally used by Push Payments Gateway participants (merchants and acquirers) to get the attributes for specified networks only. The networks specified in this field must be a subset of the information provided during program enrollment. Refer to Sharing Group Code/Network Routing Order. Note: Supported only in US for domestic transactions involving Push Payments Gateway Service.  VisaNet checks to determine if there are issuer routing preferences for any of the networks specified by the network routing order. If an issuer preference exists for one of the specified debit networks, VisaNet makes a routing selection based on the issuer’s preference. If an issuer preference exists for more than one of the specified debit networks, or if no issuer preference exists, VisaNet makes a selection based on the acquirer’s routing priorities.  For details, see the network_order field description in BIN Lookup Service Using the SCMP API.
     * @return $this
     */
    public function setNetworkRoutingOrder($networkRoutingOrder)
    {

        $this->container['networkRoutingOrder'] = $networkRoutingOrder;

        return $this;
    }

    /**
     * Gets payoutsOptions
     * @return \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions
     */
    public function getPayoutsOptions()
    {
        return $this->container['payoutsOptions'];
    }

    /**
     * Sets payoutsOptions
     * @param \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions $payoutsOptions
     * @return $this
     */
    public function setPayoutsOptions($payoutsOptions)
    {
        $this->container['payoutsOptions'] = $payoutsOptions;

        return $this;
    }

    /**
     * Gets purposeOfPayment
     * @return string
     */
    public function getPurposeOfPayment()
    {
        return $this->container['purposeOfPayment'];
    }

    /**
     * Sets purposeOfPayment
     * @param string $purposeOfPayment This will send purpose of funds code for original credit transactions (OCTs).  Visa Platform Connect (VPC) This will send purpose of transaction code for original credit transactions (OCTs). Purpose of Payment codes are defined by the recipient issuer's country and vary by country.  Mastercard Send: - `00`: Family Support - `01`: Regular Labor Transfers (expatriates), - `02`: Travel & Tourism - `03`: Education - `04`: Hospitalization & Medical Treatment, - `05`: Emergency Need - `06`: Savings - `07`: Gifts - `08`: Other - `09`: Salary - `10`: Crowd lending - `11`: Crypto currency - `12`: Refund to original card - `13`: Refund to new card
     * @return $this
     */
    public function setPurposeOfPayment($purposeOfPayment)
    {

        $this->container['purposeOfPayment'] = $purposeOfPayment;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request.  For Payouts: max length for FDCCompass is String (22).
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {

        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets recurringOptions
     * @return \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationRecurringOptions
     */
    public function getRecurringOptions()
    {
        return $this->container['recurringOptions'];
    }

    /**
     * Sets recurringOptions
     * @param \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationRecurringOptions $recurringOptions
     * @return $this
     */
    public function setRecurringOptions($recurringOptions)
    {
        $this->container['recurringOptions'] = $recurringOptions;

        return $this;
    }

    /**
     * Gets transactionReason
     * @return string
     */
    public function getTransactionReason()
    {
        return $this->container['transactionReason'];
    }

    /**
     * Sets transactionReason
     * @param string $transactionReason Transaction reason code.  This field applies only to Visa Platform Connect
     * @return $this
     */
    public function setTransactionReason($transactionReason)
    {

        $this->container['transactionReason'] = $transactionReason;

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


