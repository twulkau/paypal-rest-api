<?php
/**
 * InlineResponse20110
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
 * InlineResponse20110 Class Doc Comment
 *
 * @category Class
 * @package  PayPal\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20110 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_10';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => '\PayPal\RestApi\Model\InlineResponse20110Amount',
        'create_time' => 'string',
        'final_capture' => 'bool',
        'id' => 'string',
        'invoice_id' => 'string',
        'links' => '\PayPal\RestApi\Model\InlineResponse20110Links[]',
        'seller_protection' => '\PayPal\RestApi\Model\InlineResponse20018ResourceSellerProtection',
        'seller_receivable_breakdown' => '\PayPal\RestApi\Model\InlineResponse20110SellerReceivableBreakdown',
        'status' => 'string',
        'update_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'create_time' => null,
        'final_capture' => null,
        'id' => null,
        'invoice_id' => null,
        'links' => null,
        'seller_protection' => null,
        'seller_receivable_breakdown' => null,
        'status' => null,
        'update_time' => null
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
        'create_time' => 'create_time',
        'final_capture' => 'final_capture',
        'id' => 'id',
        'invoice_id' => 'invoice_id',
        'links' => 'links',
        'seller_protection' => 'seller_protection',
        'seller_receivable_breakdown' => 'seller_receivable_breakdown',
        'status' => 'status',
        'update_time' => 'update_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'create_time' => 'setCreateTime',
        'final_capture' => 'setFinalCapture',
        'id' => 'setId',
        'invoice_id' => 'setInvoiceId',
        'links' => 'setLinks',
        'seller_protection' => 'setSellerProtection',
        'seller_receivable_breakdown' => 'setSellerReceivableBreakdown',
        'status' => 'setStatus',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'create_time' => 'getCreateTime',
        'final_capture' => 'getFinalCapture',
        'id' => 'getId',
        'invoice_id' => 'getInvoiceId',
        'links' => 'getLinks',
        'seller_protection' => 'getSellerProtection',
        'seller_receivable_breakdown' => 'getSellerReceivableBreakdown',
        'status' => 'getStatus',
        'update_time' => 'getUpdateTime'
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
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['final_capture'] = isset($data['final_capture']) ? $data['final_capture'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['seller_protection'] = isset($data['seller_protection']) ? $data['seller_protection'] : null;
        $this->container['seller_receivable_breakdown'] = isset($data['seller_receivable_breakdown']) ? $data['seller_receivable_breakdown'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
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
     * @return \PayPal\RestApi\Model\InlineResponse20110Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \PayPal\RestApi\Model\InlineResponse20110Amount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string $create_time create_time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets final_capture
     *
     * @return bool
     */
    public function getFinalCapture()
    {
        return $this->container['final_capture'];
    }

    /**
     * Sets final_capture
     *
     * @param bool $final_capture final_capture
     *
     * @return $this
     */
    public function setFinalCapture($final_capture)
    {
        $this->container['final_capture'] = $final_capture;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \PayPal\RestApi\Model\InlineResponse20110Links[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \PayPal\RestApi\Model\InlineResponse20110Links[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets seller_protection
     *
     * @return \PayPal\RestApi\Model\InlineResponse20018ResourceSellerProtection
     */
    public function getSellerProtection()
    {
        return $this->container['seller_protection'];
    }

    /**
     * Sets seller_protection
     *
     * @param \PayPal\RestApi\Model\InlineResponse20018ResourceSellerProtection $seller_protection seller_protection
     *
     * @return $this
     */
    public function setSellerProtection($seller_protection)
    {
        $this->container['seller_protection'] = $seller_protection;

        return $this;
    }

    /**
     * Gets seller_receivable_breakdown
     *
     * @return \PayPal\RestApi\Model\InlineResponse20110SellerReceivableBreakdown
     */
    public function getSellerReceivableBreakdown()
    {
        return $this->container['seller_receivable_breakdown'];
    }

    /**
     * Sets seller_receivable_breakdown
     *
     * @param \PayPal\RestApi\Model\InlineResponse20110SellerReceivableBreakdown $seller_receivable_breakdown seller_receivable_breakdown
     *
     * @return $this
     */
    public function setSellerReceivableBreakdown($seller_receivable_breakdown)
    {
        $this->container['seller_receivable_breakdown'] = $seller_receivable_breakdown;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string $update_time update_time
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

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


