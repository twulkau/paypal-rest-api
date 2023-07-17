# PayPal\Rest-Api\DisputesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptClaim**](DisputesApi.md#acceptClaim) | **POST** /v1/customer/disputes/{dispute_id}/accept-claim | Accept claim
[**acceptOfferToResolveDispute**](DisputesApi.md#acceptOfferToResolveDispute) | **POST** /v1/customer/disputes/{dispute_id}/accept-offer | Accept offer to resolve dispute
[**acknowledgeReturnedItem**](DisputesApi.md#acknowledgeReturnedItem) | **POST** /v1/customer/disputes/{dispute_id}/acknowledge-return-item | Acknowledge returned item
[**appealDispute**](DisputesApi.md#appealDispute) | **POST** /v1/customer/disputes/{dispute_id}/appeal | Appeal dispute
[**denyOfferToResolveDispute**](DisputesApi.md#denyOfferToResolveDispute) | **POST** /v1/customer/disputes/{dispute_id}/deny-offer | Deny offer to resolve dispute
[**escalateDisputeToClaim**](DisputesApi.md#escalateDisputeToClaim) | **POST** /v1/customer/disputes/{dispute_id}/escalate | Escalate dispute to claim
[**listDisputes**](DisputesApi.md#listDisputes) | **GET** /v1/customer/disputes | List disputes
[**makeOfferToResolveDispute**](DisputesApi.md#makeOfferToResolveDispute) | **POST** /v1/customer/disputes/{dispute_id}/make-offer | Make offer to resolve dispute
[**partiallyUpdateDispute**](DisputesApi.md#partiallyUpdateDispute) | **PATCH** /v1/customer/disputes/{dispute_id} | Partially update dispute
[**provideEvidence**](DisputesApi.md#provideEvidence) | **POST** /v1/customer/disputes/{dispute_id}/provide-evidence | Provide evidence
[**provideSupportingInformationForDispute**](DisputesApi.md#provideSupportingInformationForDispute) | **POST** /v1/customer/disputes/{dispute_id}/provide-supporting-info | Provide supporting information for dispute
[**sendMessageAboutDisputeToOtherParty**](DisputesApi.md#sendMessageAboutDisputeToOtherParty) | **POST** /v1/customer/disputes/{dispute_id}/send-message | Send message about dispute to other party
[**settleDispute**](DisputesApi.md#settleDispute) | **POST** /v1/customer/disputes/{dispute_id}/adjudicate | Settle dispute
[**showDisputeDetails**](DisputesApi.md#showDisputeDetails) | **GET** /v1/customer/disputes/{dispute_id} | Show dispute details
[**updateDisputeStatus**](DisputesApi.md#updateDisputeStatus) | **POST** /v1/customer/disputes/{dispute_id}/require-evidence | Update dispute status


# **acceptClaim**
> acceptClaim($dispute_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2)

Accept claim

Accepts liability for a claim, by ID. When you accept liability for a claim, the dispute closes in the customerâ€™s favor and PayPal automatically refunds money to the customer from the merchant's account. Allowed accept_claim_type values for the request is available in dispute details <a href=\"https://developer.paypal.com/api/customer-disputes/v1/#definition-allowed_response_options\">allowed response options</a> object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 72 hours.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $apiInstance->acceptClaim($dispute_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->acceptClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 72 hours. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **prefer2** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acceptOfferToResolveDispute**
> acceptOfferToResolveDispute($dispute_id)

Accept offer to resolve dispute

The customer accepts the offer from merchant to resolve a dispute, by ID. PayPal automatically refunds the amount proposed by merchant to the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->acceptOfferToResolveDispute($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->acceptOfferToResolveDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acknowledgeReturnedItem**
> acknowledgeReturnedItem($dispute_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2)

Acknowledge returned item

Acknowledges that the customer returned an item for a dispute, by ID. A merchant can make this request for disputes with the `MERCHANDISE_OR_SERVICE_NOT_AS_DESCRIBED` reason. Allowed acknowledgement_type values for the request is available in dispute details <a href=\"https://developer.paypal.com/api/customer-disputes/v1/#definition-allowed_response_options\">allowed response options</a> object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $apiInstance->acknowledgeReturnedItem($dispute_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->acknowledgeReturnedItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **prefer2** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appealDispute**
> appealDispute($dispute_id)

Appeal dispute

Appeals a dispute, by ID. To appeal a dispute, use the <code>appeal</code> link in the <a href=\"https://developer.paypal.com/api/rest/responses/#hateoas-links/\">HATEOAS links</a> from the show dispute details response. If this link does not appear, you cannot appeal the dispute. Submit new evidence as a document or notes in the JSON request body. The following rules apply to document file types and sizes:<ul><li>The merchant can upload up to 50 MB of files for a case.</li><li>Individual files must be smaller than 10 MB.</li><li>The supported file formats are JPG, GIF, PNG, and PDF.</li></ul><br/>To make this request, specify the dispute ID in the URI and specify the evidence in the JSON request body. For information about dispute reasons, see <a href=\"https://developer.paypal.com/docs/integration/direct/customer-disputes/integration-guide/#dispute-reasons\">dispute reasons</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->appealDispute($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->appealDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **denyOfferToResolveDispute**
> denyOfferToResolveDispute($dispute_id)

Deny offer to resolve dispute

Denies an offer that the merchant proposes for a dispute, by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->denyOfferToResolveDispute($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->denyOfferToResolveDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **escalateDisputeToClaim**
> escalateDisputeToClaim($dispute_id)

Escalate dispute to claim

Escalates the dispute, by ID, to a PayPal claim. To make this call, the stage in the dispute lifecycle must be `INQUIRY`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->escalateDisputeToClaim($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->escalateDisputeToClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDisputes**
> listDisputes($start_time, $disputed_transaction_id, $page_size, $next_page_token, $dispute_state, $update_time_before, $update_time_after, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2)

List disputes

Lists disputes with a summary set of details, which shows the <code>dispute_id</code>, <code>reason</code>, <code>status</code>, <code>dispute_state</code>, <code>dispute_life_cycle_stage</code>, <code>dispute_channel</code>, <code>dispute_amount</code>, <code>create_time</code> and <code>update_time</code> fields.<br/><br/>To filter the disputes in the response, specify one or more optional query parameters. To limit the number of disputes in the response, specify the <code>page_size</code> query parameter.<br/><br/>To list multiple disputes, set these query parameters in the request:<ul><li><code>page_size=2</code></li><li><code>start_time</code> instead of <code>disputed_transaction_id</code></li></ul><br/>If the response contains more than two disputes, it lists two disputes and includes a HATEOAS link to the next page of results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_time = new \stdClass; // object | Filters the disputes in the response by a creation date and time. The start time must be within the last 180 days. Value is in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). For example, *`yyyy`*-*`MM`*-*`dd`*`T`*`HH`*:*`mm`*:*`ss`*.*`SSS`*`Z`.<br/><br/>You can specify either but not both the `start_time` and `disputed_transaction_id` query parameters.
$disputed_transaction_id = new \stdClass; // object | Filters the disputes in the response by a transaction, by ID.<br/><br/>You can specify either but not both the `start_time` and `disputed_transaction_id` query parameter.
$page_size = new \stdClass; // object | Limits the number of disputes in the response to this value.
$next_page_token = new \stdClass; // object | The token that describes the next page of results to fetch. The <a href=\"https://developer.paypal.com/api/customer-disputes/v1/#disputes_list\">list disputes</a> call returns this token in the HATEOAS links in the response.
$dispute_state = new \stdClass; // object | Filters the disputes in the response by a state. Separate multiple values with a comma (`,`). When you specify more than one dispute_state, the response lists disputes that belong to any of the specified dispute_state.
$update_time_before = new \stdClass; // object | The date and time when the dispute was last updated, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). For example, *`yyyy`*-*`MM`*-*`dd`*`T`*`HH`*:*`mm`*:*`ss`*.*`SSS`*`Z`. update_time_before must be within the last 180 days and the default is the current time.
$update_time_after = new \stdClass; // object | The date and time when the dispute was last updated, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). For example, *`yyyy`*-*`MM`*-*`dd`*`T`*`HH`*:*`mm`*:*`ss`*.*`SSS`*`Z`. update_time_after must be within the last 180 days and the default is the maximum time (180 days) supported.
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $apiInstance->listDisputes($start_time, $disputed_transaction_id, $page_size, $next_page_token, $dispute_state, $update_time_before, $update_time_after, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->listDisputes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | [**object**](../Model/.md)| Filters the disputes in the response by a creation date and time. The start time must be within the last 180 days. Value is in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). For example, *&#x60;yyyy&#x60;*-*&#x60;MM&#x60;*-*&#x60;dd&#x60;*&#x60;T&#x60;*&#x60;HH&#x60;*:*&#x60;mm&#x60;*:*&#x60;ss&#x60;*.*&#x60;SSS&#x60;*&#x60;Z&#x60;.&lt;br/&gt;&lt;br/&gt;You can specify either but not both the &#x60;start_time&#x60; and &#x60;disputed_transaction_id&#x60; query parameters. | [optional]
 **disputed_transaction_id** | [**object**](../Model/.md)| Filters the disputes in the response by a transaction, by ID.&lt;br/&gt;&lt;br/&gt;You can specify either but not both the &#x60;start_time&#x60; and &#x60;disputed_transaction_id&#x60; query parameter. | [optional]
 **page_size** | [**object**](../Model/.md)| Limits the number of disputes in the response to this value. | [optional]
 **next_page_token** | [**object**](../Model/.md)| The token that describes the next page of results to fetch. The &lt;a href&#x3D;\&quot;https://developer.paypal.com/api/customer-disputes/v1/#disputes_list\&quot;&gt;list disputes&lt;/a&gt; call returns this token in the HATEOAS links in the response. | [optional]
 **dispute_state** | [**object**](../Model/.md)| Filters the disputes in the response by a state. Separate multiple values with a comma (&#x60;,&#x60;). When you specify more than one dispute_state, the response lists disputes that belong to any of the specified dispute_state. | [optional]
 **update_time_before** | [**object**](../Model/.md)| The date and time when the dispute was last updated, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). For example, *&#x60;yyyy&#x60;*-*&#x60;MM&#x60;*-*&#x60;dd&#x60;*&#x60;T&#x60;*&#x60;HH&#x60;*:*&#x60;mm&#x60;*:*&#x60;ss&#x60;*.*&#x60;SSS&#x60;*&#x60;Z&#x60;. update_time_before must be within the last 180 days and the default is the current time. | [optional]
 **update_time_after** | [**object**](../Model/.md)| The date and time when the dispute was last updated, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). For example, *&#x60;yyyy&#x60;*-*&#x60;MM&#x60;*-*&#x60;dd&#x60;*&#x60;T&#x60;*&#x60;HH&#x60;*:*&#x60;mm&#x60;*:*&#x60;ss&#x60;*.*&#x60;SSS&#x60;*&#x60;Z&#x60;. update_time_after must be within the last 180 days and the default is the maximum time (180 days) supported. | [optional]
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **prefer2** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **makeOfferToResolveDispute**
> makeOfferToResolveDispute($dispute_id)

Make offer to resolve dispute

Makes an offer to the other party to resolve a dispute, by ID. To make this call, the stage in the dispute lifecycle must be `INQUIRY`. If the customer accepts the offer, PayPal automatically makes a refund. Allowed offer_type values for the request is available in dispute details <a href=\"https://developer.paypal.com/api/customer-disputes/v1/#definition-allowed_response_options\">allowed response options</a> object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->makeOfferToResolveDispute($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->makeOfferToResolveDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partiallyUpdateDispute**
> partiallyUpdateDispute($dispute_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2)

Partially update dispute

Partially updates a dispute, by ID. Seller can update the `communication_detail` value or The partner can add the `partner action` information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $apiInstance->partiallyUpdateDispute($dispute_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->partiallyUpdateDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |
 **pay_pal_request_id** | [**object**](../Model/.md)| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | [**object**](../Model/.md)| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | [**object**](../Model/.md)| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | [**object**](../Model/.md)| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]
 **prefer** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **prefer2** | [**object**](../Model/.md)| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provideEvidence**
> provideEvidence($dispute_id)

Provide evidence

Provides evidence for a dispute, by ID. A merchant can provide evidence for disputes with the <code>WAITING_FOR_SELLER_RESPONSE</code> status while customers can provide evidence for disputes with the <code>WAITING_FOR_BUYER_RESPONSE</code> status. Evidence can be a proof of delivery or proof of refund document or notes, which can include logs. A proof of delivery document includes a tracking number while a proof of refund document includes a refund ID. For other evidence type, notes and documents can be given. The following rules apply to document file types and sizes:<ul><li>The merchant can upload up to 50 MB of files for a case.</li><li>Individual files must be smaller than 10 MB.</li><li>The supported file formats are JPG, GIF, PNG, and PDF.</li></ul><br/>To make this request, specify the dispute ID in the URI and specify the evidence in the JSON request body. For information about dispute reasons, see <a href=\"https://developer.paypal.com/docs/integration/direct/customer-disputes/integration-guide/#dispute-reasons\">dispute reasons</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->provideEvidence($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->provideEvidence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provideSupportingInformationForDispute**
> provideSupportingInformationForDispute($dispute_id)

Provide supporting information for dispute

Provides supporting information for a dispute, by ID. A merchant or buyer can make this request for disputes if they find the `provide-supporting-info` link in the HATEOAS links in the list disputes response. The party can provide the supporting information to PayPal to defend themselves only when the `dispute_life_cycle_stage` is `CHARGEBACK`, `PRE_ARBITRATION`, or `ARBITRATION`. They can provide a note that describes their part with details or upload any supporting documents to support their side. The following rules apply to document file types and sizes:<ul><li>The party can upload up to 50 MB of files for a case.</li><li>Individual files must be smaller than 10 MB.</li><li>The supported file formats are JPG, GIF, PNG, and PDF.</li></ul><br/>To make this request, specify the dispute ID in the URI and specify the notes in the JSON request body. This method differs from the provide evidence method which supports only multipart request, where PayPal asks the concerned party for evidence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->provideSupportingInformationForDispute($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->provideSupportingInformationForDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessageAboutDisputeToOtherParty**
> sendMessageAboutDisputeToOtherParty($dispute_id)

Send message about dispute to other party

Sends a message about a dispute, by ID, to the other party in the dispute. Merchants and customers can only send messages if the `dispute_life_cycle_stage` value is `INQUIRY`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->sendMessageAboutDisputeToOtherParty($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->sendMessageAboutDisputeToOtherParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settleDispute**
> settleDispute($dispute_id)

Settle dispute

<blockquote><strong>Important:</strong> This method is for sandbox use only.</blockquote> Settles a dispute in either the customer's or merchant's favor. Merchants can make this call in the sandbox to complete end-to-end dispute resolution testing, which mimics the dispute resolution that PayPal agents normally complete. To make this call, the dispute <code>status</code> must be <code>UNDER_REVIEW</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->settleDispute($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->settleDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showDisputeDetails**
> showDisputeDetails($dispute_id)

Show dispute details

Shows details for a dispute, by ID.<blockquote><strong>Note:</strong> The fields that appear in the response depend on whether you access this call through first- or third-party access. For example, if the merchant shows dispute details through third-party access, the customer's email ID does not appear.</blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->showDisputeDetails($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->showDisputeDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDisputeStatus**
> updateDisputeStatus($dispute_id)

Update dispute status

<blockquote><strong>Important:</strong> This method is for sandbox use only.</blockquote> Updates the status of a dispute, by ID, from <code>UNDER_REVIEW</code> to either:<ul><li><code>WAITING_FOR_BUYER_RESPONSE</code></li><li><code>WAITING_FOR_SELLER_RESPONSE</code></li></ul>This status change enables either the customer or merchant to submit evidence for the dispute. To make this call, the dispute <code>status</code> must be <code>UNDER_REVIEW</code>. Specify an <code>action</code> value in the JSON request body to indicate whether the status change enables the customer or merchant to submit evidence:<table><thead><tr align=\"left\"><th>If <code>action</code> is</th><th>The <code>status</code> updates to</th></tr></thead><tbody><tr><td><code>BUYER_EVIDENCE</code></td><td> <code>WAITING_FOR_BUYER_RESPONSE</code></td></tr><tr><td><code>SELLER_EVIDENCE</code></td><td> <code>WAITING_FOR_SELLER_RESPONSE</code></td></tr></tbody></table>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = new \stdClass; // object | 

try {
    $apiInstance->updateDisputeStatus($dispute_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->updateDisputeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

