<?php
/**
 * InlineResponse2008Evidences
 *
 * PHP version 5
 *
 * @category Class
 * @package  PayPal\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PayPal APIs
 *
 * # Getting Started  ## Step 1: Fork the collection using Run in Postman  [](https://god.gw.postman.com/run-collection/19024122-92a85d0e-51e7-47da-9f83-c45dcb1cdf24?action=collection/fork&collection-url=entityId=19024122-92a85d0e-51e7-47da-9f83-c45dcb1cdf24&entityType=collection&workspaceId=345300e6-346e-42e0-aed1-53717919aef0#?env[PayPal%20Override%20Env]=W3sia2V5IjoiUGxlYXNlIE5vdGUgLS0+IiwidmFsdWUiOiI8IFBheVBhbCBQdWJsaWMgQ29sbGVjdGlvbiBjb21lcyB3aXRoIGRlZmF1bHQgcHVibGljIHNldCBvZiBjcmVkZW50aWFscyBzdG9yZWQgYXQgdGhlIENvbGxlY3Rpb24gbGV2ZWwuIFxuVGhpcyBlbnZpcm9ubWVudCBvdmVycmlkZXMgdGhvc2UgZGVmYXVsdCB2YXJpYWJsZXMuIFlvdSBtYXkgYnJpbmcgeW91ciBvd24gY3JlZGVudGlhbHMgZnJvbSBQYXlQYWwgRGV2ZWxvcGVyIERhc2hib2FyZCBhbmQgcGFzdGUgdGhlbSBoZXJlLiBEbyBub3QgZm9yZ290IHRvIGVuYWJsZSB0aGUgdmFpYWJsZSBieSBjaGVja2luZyB0aGUgYm94IGFuZCBoaXQgXCJTYXZlXCIgYmVmb3JlIGludm9raW5nIHRoZSBQYXlQYWwgQVBJcy4gPiIsImVuYWJsZWQiOnRydWV9LHsia2V5IjoiY2xpZW50X2lkIiwidmFsdWUiOiI8IGNvcHkgY3JlZGVudGlhbHMgZnJvbSB5b3VyIGRldmVsb3Blci5wYXlwYWwuY29tIGFuZCBwYXN0ZSB0aGVtIGhlcmUgPiIsImVuYWJsZWQiOmZhbHNlfSx7ImtleSI6ImNsaWVudF9zZWNyZXQiLCJ2YWx1ZSI6IjwgY29weSBjcmVkZW50aWFscyBmcm9tIHlvdXIgZGV2ZWxvcGVyLnBheXBhbC5jb20gYW5kIHBhc3RlIHRoZW0gaGVyZSA+IiwiZW5hYmxlZCI6ZmFsc2V9XQ==)  [![](https://run.pstmn.io/button.svg)](https://god.gw.postman.com/run-collection/19024122-92a85d0e-51e7-47da-9f83-c45dcb1cdf24?action=collection/fork&collection-url=entityId=19024122-92a85d0e-51e7-47da-9f83-c45dcb1cdf24&entityType=collection&workspaceId=345300e6-346e-42e0-aed1-53717919aef0#?env[PayPal%20Override%20Env]=W3sia2V5IjoiUGxlYXNlIE5vdGUgLS0+IiwidmFsdWUiOiI8IFBheVBhbCBQdWJsaWMgQ29sbGVjdGlvbiBjb21lcyB3aXRoIGRlZmF1bHQgcHVibGljIHNldCBvZiBjcmVkZW50aWFscyBzdG9yZWQgYXQgdGhlIENvbGxlY3Rpb24gbGV2ZWwuIFxuVGhpcyBlbnZpcm9ubWVudCBvdmVycmlkZXMgdGhvc2UgZGVmYXVsdCB2YXJpYWJsZXMuIFlvdSBtYXkgYnJpbmcgeW91ciBvd24gY3JlZGVudGlhbHMgZnJvbSBQYXlQYWwgRGV2ZWxvcGVyIERhc2hib2FyZCBhbmQgcGFzdGUgdGhlbSBoZXJlLiBEbyBub3QgZm9yZ290IHRvIGVuYWJsZSB0aGUgdmFpYWJsZSBieSBjaGVja2luZyB0aGUgYm94IGFuZCBoaXQgXCJTYXZlXCIgYmVmb3JlIGludm9raW5nIHRoZSBQYXlQYWwgQVBJcy4gPiIsImVuYWJsZWQiOnRydWV9LHsia2V5IjoiY2xpZW50X2lkIiwidmFsdWUiOiI8IGNvcHkgY3JlZGVudGlhbHMgZnJvbSB5b3VyIGRldmVsb3Blci5wYXlwYWwuY29tIGFuZCBwYXN0ZSB0aGVtIGhlcmUgPiIsImVuYWJsZWQiOmZhbHNlfSx7ImtleSI6ImNsaWVudF9zZWNyZXQiLCJ2YWx1ZSI6IjwgY29weSBjcmVkZW50aWFscyBmcm9tIHlvdXIgZGV2ZWxvcGVyLnBheXBhbC5jb20gYW5kIHBhc3RlIHRoZW0gaGVyZSA+IiwiZW5hYmxlZCI6ZmFsc2V9XQ==)  ## Step 2: Get your access token  An access token is automatically generated using a default `client_id` and `secret`. PayPal recommends using your own `client_id` and `secret` from the [Developer Dashboard](https://www.paypal.com/signin?intent=developer&returnUri=https%3A%2F%2Fdeveloper.paypal.com%2Fdeveloper%2Fapplication) by entering the values under the **Variables** tab. A pre-request script will generate and manage the `access_token` automatically.  > **Note:** Your developer account `client_id` and `secret` may have a different scope than the default `client_id` and `secret`.  ## Step 3: Make your first API call  PayPal recommends starting with the Orders API. These steps will use the Orders API to create an order and capture payment using [sandbox accounts](https://developer.paypal.com/developer/accounts) linked to your Developer Dashboard account.  To create an order:  1. In your workspace, navigate to your fork of the PayPal collection. 1. Select **Orders > Create Order**. 1. Select the **Send** button to create the order. On a successful call, the API returns a 201 order created response code. 1. In the response, find the **approve** link. 1. Open the **approve** link in a browser. 1. Log in with your Developer Dashboard Sandbox Personal Account credentials. You can find those credentials by logging into the Developer Dashboard and selecting **Sandbox > Account** 1. Select the **Continue** button. Payment has now been made.  To capture payment:  1. In the response of the order you created, find the `order_id`. 1. In the **Variables** tab, enter the `order_id` number. 1. Select **Orders > Capture payment for order**. 1. Select **Send**. On a successful call, the API returns a 201 order created response code.  Your order has been created and payment has been captured. You can verify the transaction in both the sandbox personal account and the sandbox business account.  ![Buyer Payment Verification](https://www.paypalobjects.com/devdoc/transaction-details-buyer.png) ![Seller Payment Verification](https://www.paypalobjects.com/devdoc/transaction-details-seller.png)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PayPal\RestApi\Model;

use \ArrayAccess;
use \PayPal\RestApi\ObjectSerializer;

/**
 * InlineResponse2008Evidences Class Doc Comment
 *
 * @category Class
 * @package  PayPal\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2008Evidences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_8_evidences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_info' => '\PayPal\RestApi\Model\InlineResponse2008ActionInfo',
        'date' => 'string',
        'dispute_life_cycle_stage' => 'string',
        'evidence_type' => 'string',
        'notes' => 'string',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_info' => null,
        'date' => null,
        'dispute_life_cycle_stage' => null,
        'evidence_type' => null,
        'notes' => null,
        'source' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'action_info' => 'action_info',
        'date' => 'date',
        'dispute_life_cycle_stage' => 'dispute_life_cycle_stage',
        'evidence_type' => 'evidence_type',
        'notes' => 'notes',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_info' => 'setActionInfo',
        'date' => 'setDate',
        'dispute_life_cycle_stage' => 'setDisputeLifeCycleStage',
        'evidence_type' => 'setEvidenceType',
        'notes' => 'setNotes',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_info' => 'getActionInfo',
        'date' => 'getDate',
        'dispute_life_cycle_stage' => 'getDisputeLifeCycleStage',
        'evidence_type' => 'getEvidenceType',
        'notes' => 'getNotes',
        'source' => 'getSource'
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
        return self::$swaggerModelName;
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
        $this->container['action_info'] = isset($data['action_info']) ? $data['action_info'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['dispute_life_cycle_stage'] = isset($data['dispute_life_cycle_stage']) ? $data['dispute_life_cycle_stage'] : null;
        $this->container['evidence_type'] = isset($data['evidence_type']) ? $data['evidence_type'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
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
     * Gets action_info
     *
     * @return \PayPal\RestApi\Model\InlineResponse2008ActionInfo
     */
    public function getActionInfo()
    {
        return $this->container['action_info'];
    }

    /**
     * Sets action_info
     *
     * @param \PayPal\RestApi\Model\InlineResponse2008ActionInfo $action_info action_info
     *
     * @return $this
     */
    public function setActionInfo($action_info)
    {
        $this->container['action_info'] = $action_info;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets dispute_life_cycle_stage
     *
     * @return string
     */
    public function getDisputeLifeCycleStage()
    {
        return $this->container['dispute_life_cycle_stage'];
    }

    /**
     * Sets dispute_life_cycle_stage
     *
     * @param string $dispute_life_cycle_stage dispute_life_cycle_stage
     *
     * @return $this
     */
    public function setDisputeLifeCycleStage($dispute_life_cycle_stage)
    {
        $this->container['dispute_life_cycle_stage'] = $dispute_life_cycle_stage;

        return $this;
    }

    /**
     * Gets evidence_type
     *
     * @return string
     */
    public function getEvidenceType()
    {
        return $this->container['evidence_type'];
    }

    /**
     * Sets evidence_type
     *
     * @param string $evidence_type evidence_type
     *
     * @return $this
     */
    public function setEvidenceType($evidence_type)
    {
        $this->container['evidence_type'] = $evidence_type;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

