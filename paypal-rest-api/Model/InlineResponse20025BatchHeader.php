<?php
/**
 * InlineResponse20025BatchHeader
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
 * InlineResponse20025BatchHeader Class Doc Comment
 *
 * @category Class
 * @package  PayPal\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20025BatchHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_25_batch_header';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => '\PayPal\RestApi\Model\InlineResponse20025BatchHeaderAmount',
        'batch_status' => 'string',
        'fees' => '\PayPal\RestApi\Model\InlineResponse20025BatchHeaderFees',
        'funding_source' => 'string',
        'payout_batch_id' => 'string',
        'sender_batch_header' => '\PayPal\RestApi\Model\InlineResponse2014BatchHeaderSenderBatchHeader',
        'time_completed' => 'string',
        'time_created' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'batch_status' => null,
        'fees' => null,
        'funding_source' => null,
        'payout_batch_id' => null,
        'sender_batch_header' => null,
        'time_completed' => null,
        'time_created' => null
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
        'amount' => 'amount',
        'batch_status' => 'batch_status',
        'fees' => 'fees',
        'funding_source' => 'funding_source',
        'payout_batch_id' => 'payout_batch_id',
        'sender_batch_header' => 'sender_batch_header',
        'time_completed' => 'time_completed',
        'time_created' => 'time_created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'batch_status' => 'setBatchStatus',
        'fees' => 'setFees',
        'funding_source' => 'setFundingSource',
        'payout_batch_id' => 'setPayoutBatchId',
        'sender_batch_header' => 'setSenderBatchHeader',
        'time_completed' => 'setTimeCompleted',
        'time_created' => 'setTimeCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'batch_status' => 'getBatchStatus',
        'fees' => 'getFees',
        'funding_source' => 'getFundingSource',
        'payout_batch_id' => 'getPayoutBatchId',
        'sender_batch_header' => 'getSenderBatchHeader',
        'time_completed' => 'getTimeCompleted',
        'time_created' => 'getTimeCreated'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['batch_status'] = isset($data['batch_status']) ? $data['batch_status'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['funding_source'] = isset($data['funding_source']) ? $data['funding_source'] : null;
        $this->container['payout_batch_id'] = isset($data['payout_batch_id']) ? $data['payout_batch_id'] : null;
        $this->container['sender_batch_header'] = isset($data['sender_batch_header']) ? $data['sender_batch_header'] : null;
        $this->container['time_completed'] = isset($data['time_completed']) ? $data['time_completed'] : null;
        $this->container['time_created'] = isset($data['time_created']) ? $data['time_created'] : null;
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
     * Gets amount
     *
     * @return \PayPal\RestApi\Model\InlineResponse20025BatchHeaderAmount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \PayPal\RestApi\Model\InlineResponse20025BatchHeaderAmount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets batch_status
     *
     * @return string
     */
    public function getBatchStatus()
    {
        return $this->container['batch_status'];
    }

    /**
     * Sets batch_status
     *
     * @param string $batch_status batch_status
     *
     * @return $this
     */
    public function setBatchStatus($batch_status)
    {
        $this->container['batch_status'] = $batch_status;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \PayPal\RestApi\Model\InlineResponse20025BatchHeaderFees
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \PayPal\RestApi\Model\InlineResponse20025BatchHeaderFees $fees fees
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets funding_source
     *
     * @return string
     */
    public function getFundingSource()
    {
        return $this->container['funding_source'];
    }

    /**
     * Sets funding_source
     *
     * @param string $funding_source funding_source
     *
     * @return $this
     */
    public function setFundingSource($funding_source)
    {
        $this->container['funding_source'] = $funding_source;

        return $this;
    }

    /**
     * Gets payout_batch_id
     *
     * @return string
     */
    public function getPayoutBatchId()
    {
        return $this->container['payout_batch_id'];
    }

    /**
     * Sets payout_batch_id
     *
     * @param string $payout_batch_id payout_batch_id
     *
     * @return $this
     */
    public function setPayoutBatchId($payout_batch_id)
    {
        $this->container['payout_batch_id'] = $payout_batch_id;

        return $this;
    }

    /**
     * Gets sender_batch_header
     *
     * @return \PayPal\RestApi\Model\InlineResponse2014BatchHeaderSenderBatchHeader
     */
    public function getSenderBatchHeader()
    {
        return $this->container['sender_batch_header'];
    }

    /**
     * Sets sender_batch_header
     *
     * @param \PayPal\RestApi\Model\InlineResponse2014BatchHeaderSenderBatchHeader $sender_batch_header sender_batch_header
     *
     * @return $this
     */
    public function setSenderBatchHeader($sender_batch_header)
    {
        $this->container['sender_batch_header'] = $sender_batch_header;

        return $this;
    }

    /**
     * Gets time_completed
     *
     * @return string
     */
    public function getTimeCompleted()
    {
        return $this->container['time_completed'];
    }

    /**
     * Sets time_completed
     *
     * @param string $time_completed time_completed
     *
     * @return $this
     */
    public function setTimeCompleted($time_completed)
    {
        $this->container['time_completed'] = $time_completed;

        return $this;
    }

    /**
     * Gets time_created
     *
     * @return string
     */
    public function getTimeCreated()
    {
        return $this->container['time_created'];
    }

    /**
     * Sets time_created
     *
     * @param string $time_created time_created
     *
     * @return $this
     */
    public function setTimeCreated($time_created)
    {
        $this->container['time_created'] = $time_created;

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


