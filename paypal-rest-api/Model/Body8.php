<?php
/**
 * Body8
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
 * Body8 Class Doc Comment
 *
 * @category Class
 * @package  PayPal\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body8 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_8';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'application_context' => '\PayPal\RestApi\Model\V1billingsubscriptionssubscriptionIdreviseApplicationContext',
        'plan_id' => 'string',
        'shipping_address' => '\PayPal\RestApi\Model\V1billingsubscriptionsSubscriberShippingAddress',
        'shipping_amount' => '\PayPal\RestApi\Model\V1billingsubscriptionsShippingAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'application_context' => null,
        'plan_id' => null,
        'shipping_address' => null,
        'shipping_amount' => null
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
        'application_context' => 'application_context',
        'plan_id' => 'plan_id',
        'shipping_address' => 'shipping_address',
        'shipping_amount' => 'shipping_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_context' => 'setApplicationContext',
        'plan_id' => 'setPlanId',
        'shipping_address' => 'setShippingAddress',
        'shipping_amount' => 'setShippingAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_context' => 'getApplicationContext',
        'plan_id' => 'getPlanId',
        'shipping_address' => 'getShippingAddress',
        'shipping_amount' => 'getShippingAmount'
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
        $this->container['application_context'] = isset($data['application_context']) ? $data['application_context'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['shipping_amount'] = isset($data['shipping_amount']) ? $data['shipping_amount'] : null;
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
     * Gets application_context
     *
     * @return \PayPal\RestApi\Model\V1billingsubscriptionssubscriptionIdreviseApplicationContext
     */
    public function getApplicationContext()
    {
        return $this->container['application_context'];
    }

    /**
     * Sets application_context
     *
     * @param \PayPal\RestApi\Model\V1billingsubscriptionssubscriptionIdreviseApplicationContext $application_context application_context
     *
     * @return $this
     */
    public function setApplicationContext($application_context)
    {
        $this->container['application_context'] = $application_context;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param string $plan_id plan_id
     *
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \PayPal\RestApi\Model\V1billingsubscriptionsSubscriberShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \PayPal\RestApi\Model\V1billingsubscriptionsSubscriberShippingAddress $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets shipping_amount
     *
     * @return \PayPal\RestApi\Model\V1billingsubscriptionsShippingAmount
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     *
     * @param \PayPal\RestApi\Model\V1billingsubscriptionsShippingAmount $shipping_amount shipping_amount
     *
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->container['shipping_amount'] = $shipping_amount;

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


