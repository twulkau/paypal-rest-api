# PayPal\Rest-Api\OrdersApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizePaymentForOrder**](OrdersApi.md#authorizePaymentForOrder) | **POST** /v2/checkout/orders/{order_id}/authorize | Authorize payment for order
[**capturePaymentForOrder**](OrdersApi.md#capturePaymentForOrder) | **POST** /v2/checkout/orders/{order_id}/capture | Capture payment for order
[**createOrder**](OrdersApi.md#createOrder) | **POST** /v2/checkout/orders | Create order
[**showOrderDetails**](OrdersApi.md#showOrderDetails) | **GET** /v2/checkout/orders/{order_id} | Show order details
[**updateOrder**](OrdersApi.md#updateOrder) | **PATCH** /v2/checkout/orders/{order_id} | Update order


# **authorizePaymentForOrder**
> authorizePaymentForOrder($order_id, $prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion)

Authorize payment for order

Authorizes payment for an order. To successfully authorize payment for an order, the buyer must first approve the order or a valid payment_source must be provided in the request. A buyer can approve the order upon being redirected to the rel:approve URL that was returned in the HATEOAS links in the create order response.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"https://developer.paypal.com/api/rest/reference/orders/v2/errors/#link-authorizeorder\">Orders v2 errors</a>.</blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = new \stdClass; // object | 
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.

try {
    $apiInstance->authorizePaymentForOrder($order_id, $prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->authorizePaymentForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**object**](../Model/.md)|  |
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **capturePaymentForOrder**
> capturePaymentForOrder($order_id, $prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion)

Capture payment for order

Captures payment for an order. To successfully capture payment for an order, the buyer must first approve the order or a valid payment_source must be provided in the request. A buyer can approve the order upon being redirected to the rel:approve URL that was returned in the HATEOAS links in the create order response.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"https://developer.paypal.com/api/rest/reference/orders/v2/errors/#link-captureorder\">Orders v2 errors</a>.</blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = new \stdClass; // object | 
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.

try {
    $apiInstance->capturePaymentForOrder($order_id, $prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->capturePaymentForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**object**](../Model/.md)|  |
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrder**
> createOrder($prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion)

Create order

Creates an order.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"https://developer.paypal.com/api/rest/reference/orders/v2/errors/#create-order\">Orders v2 errors</a>.</blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.

try {
    $apiInstance->createOrder($prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showOrderDetails**
> showOrderDetails($order_id)

Show order details

Shows details for an order, by ID.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"https://developer.paypal.com/api/rest/reference/orders/v2/errors/#get-order\">Orders v2 errors</a>.</blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = new \stdClass; // object | 

try {
    $apiInstance->showOrderDetails($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->showOrderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrder**
> updateOrder($order_id, $prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion)

Update order

Updates an order with a `CREATED` or `APPROVED` status. You cannot update an order with the `COMPLETED` status.<br/><br/>To make an update, you must provide a `reference_id`. If you omit this value with an order that contains only one purchase unit, PayPal sets the value to `default` which enables you to use the path: <code>\"/purchase_units/@reference_id=='default'/{attribute-or-object}\"</code>.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"https://developer.paypal.com/api/rest/reference/orders/v2/errors/#link-patchorder\">Orders v2 errors</a>.</blockquote>Patchable attributes or objects:<br/><br/><table><thead><th>Attribute</th><th>Op</th><th>Notes</th></thead><tbody><tr><td><code>intent</code></td><td>replace</td><td></td></tr><tr><td><code>payer</code></td><td>replace, add</td><td>Using replace op for <code>payer</code> will replace the whole <code>payer</code> object with the value sent in request.</td></tr><tr><td><code>purchase_units</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].custom_id</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].description</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].payee.email</code></td><td>replace</td><td></td></tr><tr><td><code>purchase_units[].shipping.name</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].shipping.address</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].shipping.type</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].soft_descriptor</code></td><td>replace, remove</td><td></td></tr><tr><td><code>purchase_units[].amount</code></td><td>replace</td><td></td></tr><tr><td><code>purchase_units[].invoice_id</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].payment_instruction</code></td><td>replace</td><td></td></tr><tr><td><code>purchase_units[].payment_instruction.disbursement_mode</code></td><td>replace</td><td>By default, <code>disbursement_mode</code> is <code>INSTANT</code>.</td></tr><tr><td><code>purchase_units[].payment_instruction.platform_fees</code></td><td>replace, add, remove</td><td></td></tr></tbody></table>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = new \stdClass; // object | 
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.

try {
    $apiInstance->updateOrder($order_id, $prefer, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**object**](../Model/.md)|  |
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

