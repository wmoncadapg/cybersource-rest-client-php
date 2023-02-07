<?php
/**
 * PushFundsRequest
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
 * PushFundsRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PushFundsRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'pushFundsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientReferenceInformation' => '\CyberSource\Model\Ptsv1pushfundstransferClientReferenceInformation',
        'orderInformation' => '\CyberSource\Model\Ptsv1pushfundstransferOrderInformation',
        'processingInformation' => '\CyberSource\Model\Ptsv1pushfundstransferProcessingInformation',
        'processingOptions' => '\CyberSource\Model\Ptsv1pushfundstransferProcessingOptions',
        'recipientInformation' => '\CyberSource\Model\Ptsv1pushfundstransferRecipientInformation',
        'senderInformation' => '\CyberSource\Model\Ptsv1pushfundstransferSenderInformation',
        'aggregatorInformation' => '\CyberSource\Model\Ptsv1pushfundstransferAggregatorInformation',
        'merchantDefinedInformation' => '\CyberSource\Model\Ptsv1pushfundstransferMerchantDefinedInformation',
        'merchantInformation' => '\CyberSource\Model\Ptsv1pushfundstransferMerchantInformation',
        'pointOfServiceInformation' => '\CyberSource\Model\Ptsv1pushfundstransferPointOfServiceInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientReferenceInformation' => null,
        'orderInformation' => null,
        'processingInformation' => null,
        'processingOptions' => null,
        'recipientInformation' => null,
        'senderInformation' => null,
        'aggregatorInformation' => null,
        'merchantDefinedInformation' => null,
        'merchantInformation' => null,
        'pointOfServiceInformation' => null
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
        'clientReferenceInformation' => 'clientReferenceInformation',
        'orderInformation' => 'orderInformation',
        'processingInformation' => 'processingInformation',
        'processingOptions' => 'processingOptions',
        'recipientInformation' => 'recipientInformation',
        'senderInformation' => 'senderInformation',
        'aggregatorInformation' => 'aggregatorInformation',
        'merchantDefinedInformation' => 'merchantDefinedInformation',
        'merchantInformation' => 'merchantInformation',
        'pointOfServiceInformation' => 'pointOfServiceInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'orderInformation' => 'setOrderInformation',
        'processingInformation' => 'setProcessingInformation',
        'processingOptions' => 'setProcessingOptions',
        'recipientInformation' => 'setRecipientInformation',
        'senderInformation' => 'setSenderInformation',
        'aggregatorInformation' => 'setAggregatorInformation',
        'merchantDefinedInformation' => 'setMerchantDefinedInformation',
        'merchantInformation' => 'setMerchantInformation',
        'pointOfServiceInformation' => 'setPointOfServiceInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'orderInformation' => 'getOrderInformation',
        'processingInformation' => 'getProcessingInformation',
        'processingOptions' => 'getProcessingOptions',
        'recipientInformation' => 'getRecipientInformation',
        'senderInformation' => 'getSenderInformation',
        'aggregatorInformation' => 'getAggregatorInformation',
        'merchantDefinedInformation' => 'getMerchantDefinedInformation',
        'merchantInformation' => 'getMerchantInformation',
        'pointOfServiceInformation' => 'getPointOfServiceInformation'
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
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['processingOptions'] = isset($data['processingOptions']) ? $data['processingOptions'] : null;
        $this->container['recipientInformation'] = isset($data['recipientInformation']) ? $data['recipientInformation'] : null;
        $this->container['senderInformation'] = isset($data['senderInformation']) ? $data['senderInformation'] : null;
        $this->container['aggregatorInformation'] = isset($data['aggregatorInformation']) ? $data['aggregatorInformation'] : null;
        $this->container['merchantDefinedInformation'] = isset($data['merchantDefinedInformation']) ? $data['merchantDefinedInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['pointOfServiceInformation'] = isset($data['pointOfServiceInformation']) ? $data['pointOfServiceInformation'] : null;
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
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets processingOptions
     * @return \CyberSource\Model\Ptsv1pushfundstransferProcessingOptions
     */
    public function getProcessingOptions()
    {
        return $this->container['processingOptions'];
    }

    /**
     * Sets processingOptions
     * @param \CyberSource\Model\Ptsv1pushfundstransferProcessingOptions $processingOptions
     * @return $this
     */
    public function setProcessingOptions($processingOptions)
    {
        $this->container['processingOptions'] = $processingOptions;

        return $this;
    }

    /**
     * Gets recipientInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferRecipientInformation
     */
    public function getRecipientInformation()
    {
        return $this->container['recipientInformation'];
    }

    /**
     * Sets recipientInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferRecipientInformation $recipientInformation
     * @return $this
     */
    public function setRecipientInformation($recipientInformation)
    {
        $this->container['recipientInformation'] = $recipientInformation;

        return $this;
    }

    /**
     * Gets senderInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferSenderInformation
     */
    public function getSenderInformation()
    {
        return $this->container['senderInformation'];
    }

    /**
     * Sets senderInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferSenderInformation $senderInformation
     * @return $this
     */
    public function setSenderInformation($senderInformation)
    {
        $this->container['senderInformation'] = $senderInformation;

        return $this;
    }

    /**
     * Gets aggregatorInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferAggregatorInformation
     */
    public function getAggregatorInformation()
    {
        return $this->container['aggregatorInformation'];
    }

    /**
     * Sets aggregatorInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferAggregatorInformation $aggregatorInformation
     * @return $this
     */
    public function setAggregatorInformation($aggregatorInformation)
    {
        $this->container['aggregatorInformation'] = $aggregatorInformation;

        return $this;
    }

    /**
     * Gets merchantDefinedInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferMerchantDefinedInformation
     */
    public function getMerchantDefinedInformation()
    {
        return $this->container['merchantDefinedInformation'];
    }

    /**
     * Sets merchantDefinedInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferMerchantDefinedInformation $merchantDefinedInformation
     * @return $this
     */
    public function setMerchantDefinedInformation($merchantDefinedInformation)
    {
        $this->container['merchantDefinedInformation'] = $merchantDefinedInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets pointOfServiceInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferPointOfServiceInformation
     */
    public function getPointOfServiceInformation()
    {
        return $this->container['pointOfServiceInformation'];
    }

    /**
     * Sets pointOfServiceInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferPointOfServiceInformation $pointOfServiceInformation
     * @return $this
     */
    public function setPointOfServiceInformation($pointOfServiceInformation)
    {
        $this->container['pointOfServiceInformation'] = $pointOfServiceInformation;

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


