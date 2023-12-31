# PayPal\RestApi\TemplatesApi

All URIs are relative to *https://api-m.sandbox.paypal.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplate**](TemplatesApi.md#createTemplate) | **POST** /v2/invoicing/templates | Create template
[**deleteTemplate**](TemplatesApi.md#deleteTemplate) | **DELETE** /v2/invoicing/templates/{template_id} | Delete template
[**fullyUpdateTemplate**](TemplatesApi.md#fullyUpdateTemplate) | **PUT** /v2/invoicing/templates/{template_id} | Fully update template
[**listTemplates**](TemplatesApi.md#listTemplates) | **GET** /v2/invoicing/templates | List templates
[**showTemplateDetails**](TemplatesApi.md#showTemplateDetails) | **GET** /v2/invoicing/templates/{template_id} | Show template details


# **createTemplate**
> \PayPal\RestApi\Model\InlineResponse2019 createTemplate($pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2, $body)

Create template

Creates an invoice template. You can use details from this template to create an invoice. You can create up to 50 templates.<blockquote><strong>Note:</strong> Every merchant starts with three PayPal system templates that are optimized for the unit type billed. The template includes `Quantity`, `Hours`, and `Amount`.</blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pay_pal_request_id = "pay_pal_request_id_example"; // string | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = "pay_pal_client_metadata_id_example"; // string | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = "pay_pal_partner_attribution_id_example"; // string | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = "pay_pal_auth_assertion_example"; // string | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = "prefer_example"; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = "prefer_example"; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$body = new \PayPal\RestApi\Model\Body41(); // \PayPal\RestApi\Model\Body41 | 

try {
    $result = $apiInstance->createTemplate($pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_pal_request_id** | **string**| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | **string**| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | **string**| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | **string**| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]
 **prefer** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **prefer2** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **body** | [**\PayPal\RestApi\Model\Body41**](../Model/Body41.md)|  | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse2019**](../Model/InlineResponse2019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplate**
> deleteTemplate($template_id)

Delete template

Deletes a template, by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = "template_id_example"; // string | (Required) The ID of the template to delete.

try {
    $apiInstance->deleteTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| (Required) The ID of the template to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fullyUpdateTemplate**
> \PayPal\RestApi\Model\InlineResponse20040 fullyUpdateTemplate($template_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2, $body)

Fully update template

Fully updates a template, by ID. In the JSON request body, include a complete `template` object. This call does not support partial updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = "template_id_example"; // string | (Required) The ID of the template to delete.
$pay_pal_request_id = "pay_pal_request_id_example"; // string | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = "pay_pal_client_metadata_id_example"; // string | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = "pay_pal_partner_attribution_id_example"; // string | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = "pay_pal_auth_assertion_example"; // string | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = "prefer_example"; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = "prefer_example"; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$body = new \PayPal\RestApi\Model\Body42(); // \PayPal\RestApi\Model\Body42 | 

try {
    $result = $apiInstance->fullyUpdateTemplate($template_id, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->fullyUpdateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| (Required) The ID of the template to delete. |
 **pay_pal_request_id** | **string**| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | **string**| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | **string**| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | **string**| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]
 **prefer** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **prefer2** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **body** | [**\PayPal\RestApi\Model\Body42**](../Model/Body42.md)|  | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTemplates**
> \PayPal\RestApi\Model\InlineResponse20038 listTemplates($fields, $page, $page_size)

List templates

Lists merchant-created templates with associated details. The associated details include the emails, addresses, and phone numbers from the user's PayPal profile.<br/>The user can select which values to show in the business information section of their template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | The fields to return in the response. Value is `all` or `none`. To return only the template name, ID, and default attributes, specify `none`.
$page = "page_example"; // string | The page number to be retrieved, for the list of templates. So, a combination of `page=1` and `page_size=20` returns the first 20 templates. A combination of `page=2` and `page_size=20` returns the next 20 templates.
$page_size = "page_size_example"; // string | The maximum number of templates to return in the response.

try {
    $result = $apiInstance->listTemplates($fields, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| The fields to return in the response. Value is &#x60;all&#x60; or &#x60;none&#x60;. To return only the template name, ID, and default attributes, specify &#x60;none&#x60;. | [optional]
 **page** | **string**| The page number to be retrieved, for the list of templates. So, a combination of &#x60;page&#x3D;1&#x60; and &#x60;page_size&#x3D;20&#x60; returns the first 20 templates. A combination of &#x60;page&#x3D;2&#x60; and &#x60;page_size&#x3D;20&#x60; returns the next 20 templates. | [optional]
 **page_size** | **string**| The maximum number of templates to return in the response. | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showTemplateDetails**
> \PayPal\RestApi\Model\InlineResponse20039 showTemplateDetails($template_id)

Show template details

Shows details for a template, by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = "template_id_example"; // string | (Required) The ID of the template to delete.

try {
    $result = $apiInstance->showTemplateDetails($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->showTemplateDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| (Required) The ID of the template to delete. |

### Return type

[**\PayPal\RestApi\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

