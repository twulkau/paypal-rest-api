# PayPal\RestApi\OnboardingLimitedReleaseApi

All URIs are relative to *https://api-m.sandbox.paypal.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createManagedAccount**](OnboardingLimitedReleaseApi.md#createManagedAccount) | **POST** /v3/customer/managed-accounts | Create managed account
[**partiallyUpdatesInformationForAManagedAccount**](OnboardingLimitedReleaseApi.md#partiallyUpdatesInformationForAManagedAccount) | **PATCH** /v3/customer/managed-accounts/{id} | Partially updates information for a managed account
[**searchManagedAccountBySellerId**](OnboardingLimitedReleaseApi.md#searchManagedAccountBySellerId) | **GET** /v3/customer/managed-accounts/{id} | Search managed account by Seller Id
[**searchManagedAccountThroughExternalId**](OnboardingLimitedReleaseApi.md#searchManagedAccountThroughExternalId) | **GET** /v3/customer/managed-accounts | Search managed account through external id
[**showsCollectionOfRegisteredWalletDomains**](OnboardingLimitedReleaseApi.md#showsCollectionOfRegisteredWalletDomains) | **GET** /v3/customer/managed-accounts/{id}/wallet-domains | Shows collection of registered wallet domains


# **createManagedAccount**
> \PayPal\RestApi\Model\InlineResponse20113 createManagedAccount($prefer, $prefer2, $prefer3, $prefer4, $body)

Create managed account

Creates a managed account. Submit the account information in the JSON request body.  The details on what information is required for different business types in different countries can be found on [PayPal Developer Portal](https://developer.paypal.com/limited-release/commerce-platform/v3/seller-onboarding/localized-account-examples/).  The fields and parameters are described on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_post).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prefer = "prefer_example"; // string | (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links.
$prefer2 = "prefer_example"; // string | (Optional) The server returns a complete resource representation without process_view
$prefer3 = "prefer_example"; // string | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.
$prefer4 = "prefer_example"; // string | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.
$body = new \PayPal\RestApi\Model\Body46(); // \PayPal\RestApi\Model\Body46 | 

try {
    $result = $apiInstance->createManagedAccount($prefer, $prefer2, $prefer3, $prefer4, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->createManagedAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prefer** | **string**| (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links. | [optional]
 **prefer2** | **string**| (Optional) The server returns a complete resource representation without process_view | [optional]
 **prefer3** | **string**| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]
 **prefer4** | **string**| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]
 **body** | [**\PayPal\RestApi\Model\Body46**](../Model/Body46.md)|  | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partiallyUpdatesInformationForAManagedAccount**
> \PayPal\RestApi\Model\InlineResponse20047 partiallyUpdatesInformationForAManagedAccount($id, $prefer, $prefer2, $prefer3, $prefer4, $body)

Partially updates information for a managed account

Partially updates information for a managed account, by account ID. For information about the paths where you can replace, add, or delete information.  The fields and endpoint description can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_patch).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the seller.
$prefer = "prefer_example"; // string | (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links.
$prefer2 = "prefer_example"; // string | (Optional) The server returns a complete resource representation without process_view
$prefer3 = "prefer_example"; // string | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.
$prefer4 = "prefer_example"; // string | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.
$body = array(new \PayPal\RestApi\Model\Body47()); // \PayPal\RestApi\Model\Body47[] | 

try {
    $result = $apiInstance->partiallyUpdatesInformationForAManagedAccount($id, $prefer, $prefer2, $prefer3, $prefer4, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->partiallyUpdatesInformationForAManagedAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the seller. |
 **prefer** | **string**| (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links. | [optional]
 **prefer2** | **string**| (Optional) The server returns a complete resource representation without process_view | [optional]
 **prefer3** | **string**| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]
 **prefer4** | **string**| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]
 **body** | [**\PayPal\RestApi\Model\Body47[]**](../Model/Body47.md)|  | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchManagedAccountBySellerId**
> \PayPal\RestApi\Model\InlineResponse20046 searchManagedAccountBySellerId($id, $views)

Search managed account by Seller Id

Shows details for a managed account, by account ID.  The detailed description for the endpoint can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_get).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the seller.
$views = "views_example"; // string | (Optional) The `views` query parameter can be used to request `process_view` in addition to the default GET response.

try {
    $result = $apiInstance->searchManagedAccountBySellerId($id, $views);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->searchManagedAccountBySellerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the seller. |
 **views** | **string**| (Optional) The &#x60;views&#x60; query parameter can be used to request &#x60;process_view&#x60; in addition to the default GET response. | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchManagedAccountThroughExternalId**
> \PayPal\RestApi\Model\InlineResponse20045 searchManagedAccountThroughExternalId($external_id, $views)

Search managed account through external id

Show details for managed accounts, based on search criteria.  The detailed description for the endpoint can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_get).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | The `external_id` query parameter can be used to request managed accounts with the given external_id. Searches for the managed account that has the given external_id. To locate a particular account, you should set this to the same value that you provided in the /external_id property in your Create Managed Account request.
$views = "views_example"; // string | (Optional) The `views` query parameter can be used to request `process_view` in addition to the default GET response. A comma-separated list of data sets that should be returned in the response. The only allowed value here is process_view, which indicates that the process_view property should be populated in the response; this property contains information on the regulatory processes that must be completed for this merchant.

try {
    $result = $apiInstance->searchManagedAccountThroughExternalId($external_id, $views);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->searchManagedAccountThroughExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The &#x60;external_id&#x60; query parameter can be used to request managed accounts with the given external_id. Searches for the managed account that has the given external_id. To locate a particular account, you should set this to the same value that you provided in the /external_id property in your Create Managed Account request. | [optional]
 **views** | **string**| (Optional) The &#x60;views&#x60; query parameter can be used to request &#x60;process_view&#x60; in addition to the default GET response. A comma-separated list of data sets that should be returned in the response. The only allowed value here is process_view, which indicates that the process_view property should be populated in the response; this property contains information on the regulatory processes that must be completed for this merchant. | [optional]

### Return type

[**\PayPal\RestApi\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showsCollectionOfRegisteredWalletDomains**
> \PayPal\RestApi\Model\InlineResponse20048 showsCollectionOfRegisteredWalletDomains($id)

Shows collection of registered wallet domains

Shows collection of registered wallet domains  > Please look at sample (`200 - Add Wallet Domain`) attached under Manage Accounts `PATCH Partially updates information for a managed account` API.      The detailed description for the endpoint can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_wallet-domains).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\RestApi\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the seller.

try {
    $result = $apiInstance->showsCollectionOfRegisteredWalletDomains($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->showsCollectionOfRegisteredWalletDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the seller. |

### Return type

[**\PayPal\RestApi\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

