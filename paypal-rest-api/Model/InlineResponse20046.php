<?php
/**
 * InlineResponse20046
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
 * InlineResponse20046 Class Doc Comment
 *
 * @category Class
 * @package  PayPal\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20046 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_46';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'agreements' => '\PayPal\RestApi\Model\InlineResponse20046Agreements[]',
        'business_entity' => '\PayPal\RestApi\Model\InlineResponse20046BusinessEntity',
        'capabilities' => '\PayPal\RestApi\Model\InlineResponse20046Capabilities[]',
        'external_id' => 'string',
        'financial_instruments' => '\PayPal\RestApi\Model\InlineResponse20046FinancialInstruments',
        'individual_owners' => '\PayPal\RestApi\Model\InlineResponse20046IndividualOwners[]',
        'legal_country_code' => 'string',
        'links' => '\PayPal\RestApi\Model\InlineResponse20046Links[]',
        'organization' => 'string',
        'primary_currency_code' => 'string',
        'soft_descriptor' => 'string',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'agreements' => null,
        'business_entity' => null,
        'capabilities' => null,
        'external_id' => null,
        'financial_instruments' => null,
        'individual_owners' => null,
        'legal_country_code' => null,
        'links' => null,
        'organization' => null,
        'primary_currency_code' => null,
        'soft_descriptor' => null,
        'user_id' => null
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
        'account_id' => 'account_id',
        'agreements' => 'agreements',
        'business_entity' => 'business_entity',
        'capabilities' => 'capabilities',
        'external_id' => 'external_id',
        'financial_instruments' => 'financial_instruments',
        'individual_owners' => 'individual_owners',
        'legal_country_code' => 'legal_country_code',
        'links' => 'links',
        'organization' => 'organization',
        'primary_currency_code' => 'primary_currency_code',
        'soft_descriptor' => 'soft_descriptor',
        'user_id' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'agreements' => 'setAgreements',
        'business_entity' => 'setBusinessEntity',
        'capabilities' => 'setCapabilities',
        'external_id' => 'setExternalId',
        'financial_instruments' => 'setFinancialInstruments',
        'individual_owners' => 'setIndividualOwners',
        'legal_country_code' => 'setLegalCountryCode',
        'links' => 'setLinks',
        'organization' => 'setOrganization',
        'primary_currency_code' => 'setPrimaryCurrencyCode',
        'soft_descriptor' => 'setSoftDescriptor',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'agreements' => 'getAgreements',
        'business_entity' => 'getBusinessEntity',
        'capabilities' => 'getCapabilities',
        'external_id' => 'getExternalId',
        'financial_instruments' => 'getFinancialInstruments',
        'individual_owners' => 'getIndividualOwners',
        'legal_country_code' => 'getLegalCountryCode',
        'links' => 'getLinks',
        'organization' => 'getOrganization',
        'primary_currency_code' => 'getPrimaryCurrencyCode',
        'soft_descriptor' => 'getSoftDescriptor',
        'user_id' => 'getUserId'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['agreements'] = isset($data['agreements']) ? $data['agreements'] : null;
        $this->container['business_entity'] = isset($data['business_entity']) ? $data['business_entity'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['financial_instruments'] = isset($data['financial_instruments']) ? $data['financial_instruments'] : null;
        $this->container['individual_owners'] = isset($data['individual_owners']) ? $data['individual_owners'] : null;
        $this->container['legal_country_code'] = isset($data['legal_country_code']) ? $data['legal_country_code'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['primary_currency_code'] = isset($data['primary_currency_code']) ? $data['primary_currency_code'] : null;
        $this->container['soft_descriptor'] = isset($data['soft_descriptor']) ? $data['soft_descriptor'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets agreements
     *
     * @return \PayPal\RestApi\Model\InlineResponse20046Agreements[]
     */
    public function getAgreements()
    {
        return $this->container['agreements'];
    }

    /**
     * Sets agreements
     *
     * @param \PayPal\RestApi\Model\InlineResponse20046Agreements[] $agreements agreements
     *
     * @return $this
     */
    public function setAgreements($agreements)
    {
        $this->container['agreements'] = $agreements;

        return $this;
    }

    /**
     * Gets business_entity
     *
     * @return \PayPal\RestApi\Model\InlineResponse20046BusinessEntity
     */
    public function getBusinessEntity()
    {
        return $this->container['business_entity'];
    }

    /**
     * Sets business_entity
     *
     * @param \PayPal\RestApi\Model\InlineResponse20046BusinessEntity $business_entity business_entity
     *
     * @return $this
     */
    public function setBusinessEntity($business_entity)
    {
        $this->container['business_entity'] = $business_entity;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return \PayPal\RestApi\Model\InlineResponse20046Capabilities[]
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param \PayPal\RestApi\Model\InlineResponse20046Capabilities[] $capabilities capabilities
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets financial_instruments
     *
     * @return \PayPal\RestApi\Model\InlineResponse20046FinancialInstruments
     */
    public function getFinancialInstruments()
    {
        return $this->container['financial_instruments'];
    }

    /**
     * Sets financial_instruments
     *
     * @param \PayPal\RestApi\Model\InlineResponse20046FinancialInstruments $financial_instruments financial_instruments
     *
     * @return $this
     */
    public function setFinancialInstruments($financial_instruments)
    {
        $this->container['financial_instruments'] = $financial_instruments;

        return $this;
    }

    /**
     * Gets individual_owners
     *
     * @return \PayPal\RestApi\Model\InlineResponse20046IndividualOwners[]
     */
    public function getIndividualOwners()
    {
        return $this->container['individual_owners'];
    }

    /**
     * Sets individual_owners
     *
     * @param \PayPal\RestApi\Model\InlineResponse20046IndividualOwners[] $individual_owners individual_owners
     *
     * @return $this
     */
    public function setIndividualOwners($individual_owners)
    {
        $this->container['individual_owners'] = $individual_owners;

        return $this;
    }

    /**
     * Gets legal_country_code
     *
     * @return string
     */
    public function getLegalCountryCode()
    {
        return $this->container['legal_country_code'];
    }

    /**
     * Sets legal_country_code
     *
     * @param string $legal_country_code legal_country_code
     *
     * @return $this
     */
    public function setLegalCountryCode($legal_country_code)
    {
        $this->container['legal_country_code'] = $legal_country_code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \PayPal\RestApi\Model\InlineResponse20046Links[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \PayPal\RestApi\Model\InlineResponse20046Links[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets primary_currency_code
     *
     * @return string
     */
    public function getPrimaryCurrencyCode()
    {
        return $this->container['primary_currency_code'];
    }

    /**
     * Sets primary_currency_code
     *
     * @param string $primary_currency_code primary_currency_code
     *
     * @return $this
     */
    public function setPrimaryCurrencyCode($primary_currency_code)
    {
        $this->container['primary_currency_code'] = $primary_currency_code;

        return $this;
    }

    /**
     * Gets soft_descriptor
     *
     * @return string
     */
    public function getSoftDescriptor()
    {
        return $this->container['soft_descriptor'];
    }

    /**
     * Sets soft_descriptor
     *
     * @param string $soft_descriptor soft_descriptor
     *
     * @return $this
     */
    public function setSoftDescriptor($soft_descriptor)
    {
        $this->container['soft_descriptor'] = $soft_descriptor;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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

