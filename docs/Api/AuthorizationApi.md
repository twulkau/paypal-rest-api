# PayPal\RestApi\AuthorizationApi

All URIs are relative to *https://api-m.sandbox.paypal.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateAccessToken**](AuthorizationApi.md#generateAccessToken) | **POST** /v1/oauth2/token | Generate access_token
[**generateClientToken**](AuthorizationApi.md#generateClientToken) | **POST** /v1/identity/generate-token | Generate client_token
[**terminateAccessToken**](AuthorizationApi.md#terminateAccessToken) | **POST** /v1/oauth2/token/terminate | Terminate access_token
[**userInfo**](AuthorizationApi.md#userInfo) | **GET** /v1/identity/oauth2/userinfo | User Info


# **generateAccessToken**
> \PayPal\RestApi\Model\InlineResponse20022 generateAccessToken($app_info, $claims, $code, $device_info, $grant_type, $ignore_cache, $partner_client_id, $redirect_uri, $refresh_token, $response_type, $return_authn_schemes, $return_client_metadata, $return_unconsented_scopes, $risk_data, $scope, $target_client_id, $target_subject)

Generate access_token

Shows user profile information. Filters the response by a schema. Supported schema value is `paypalv1.1`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_info = "app_info_example"; // string | 
$claims = "claims_example"; // string | 
$code = "code_example"; // string | 
$device_info = "device_info_example"; // string | 
$grant_type = "grant_type_example"; // string | 
$ignore_cache = "ignore_cache_example"; // string | 
$partner_client_id = "partner_client_id_example"; // string | 
$redirect_uri = "redirect_uri_example"; // string | 
$refresh_token = "refresh_token_example"; // string | 
$response_type = "response_type_example"; // string | 
$return_authn_schemes = "return_authn_schemes_example"; // string | 
$return_client_metadata = "return_client_metadata_example"; // string | 
$return_unconsented_scopes = "return_unconsented_scopes_example"; // string | 
$risk_data = "risk_data_example"; // string | 
$scope = "scope_example"; // string | 
$target_client_id = "target_client_id_example"; // string | 
$target_subject = "target_subject_example"; // string | 

try {
    $result = $apiInstance->generateAccessToken($app_info, $claims, $code, $device_info, $grant_type, $ignore_cache, $partner_client_id, $redirect_uri, $refresh_token, $response_type, $return_authn_schemes, $return_client_metadata, $return_unconsented_scopes, $risk_data, $scope, $target_client_id, $target_subject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->generateAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_info** | **string**|  | [optional]
 **claims** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **device_info** | **string**|  | [optional]
 **grant_type** | **string**|  | [optional]
 **ignore_cache** | **string**|  | [optional]
 **partner_client_id** | **string**|  | [optional]
 **redirect_uri** | **string**|  | [optional]
 **refresh_token** | **string**|  | [optional]
 **response_type** | **string**|  | [optional]
 **return_authn_schemes** | **string**|  | [optional]
 **return_client_metadata** | **string**|  | [optional]
 **return_unconsented_scopes** | **string**|  | [optional]
 **risk_data** | **string**|  | [optional]
 **scope** | **string**|  | [optional]
 **target_client_id** | **string**|  | [optional]
 **target_subject** | **string**|  | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateClientToken**
> \PayPal\RestApi\Model\InlineResponse20012 generateClientToken($body)

Generate client_token

Generate client_token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PayPal\RestApi\Model\Body22(); // \PayPal\RestApi\Model\Body22 | 

try {
    $result = $apiInstance->generateClientToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->generateClientToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PayPal\RestApi\Model\Body22**](../Model/Body22.md)|  | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **terminateAccessToken**
> terminateAccessToken($code, $grant_type, $refresh_token, $token, $token_type_hint)

Terminate access_token

Terminate access_token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | 
$grant_type = "grant_type_example"; // string | 
$refresh_token = "refresh_token_example"; // string | 
$token = "token_example"; // string | 
$token_type_hint = "token_type_hint_example"; // string | 

try {
    $apiInstance->terminateAccessToken($code, $grant_type, $refresh_token, $token, $token_type_hint);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->terminateAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  | [optional]
 **grant_type** | **string**|  | [optional]
 **refresh_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **token_type_hint** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInfo**
> \PayPal\RestApi\Model\InlineResponse20013 userInfo($schema, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2)

User Info

Shows user profile information. Filters the response by a schema. Supported schema value is `paypalv1.1`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schema = "schema_example"; // string | (Required) Filters the response by a schema. Supported value is `paypalv1.1`.
$pay_pal_request_id = "pay_pal_request_id_example"; // string | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$pay_pal_client_metadata_id = "pay_pal_client_metadata_id_example"; // string | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = "pay_pal_partner_attribution_id_example"; // string | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = "pay_pal_auth_assertion_example"; // string | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = "prefer_example"; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = "prefer_example"; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $result = $apiInstance->userInfo($schema, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->userInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schema** | **string**| (Required) Filters the response by a schema. Supported value is &#x60;paypalv1.1&#x60;. | [optional]
 **pay_pal_request_id** | **string**| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | [optional]
 **pay_pal_client_metadata_id** | **string**| Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection. | [optional]
 **pay_pal_partner_attribution_id** | **string**| Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference. | [optional]
 **pay_pal_auth_assertion** | **string**| An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant. | [optional]
 **prefer** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **prefer2** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

