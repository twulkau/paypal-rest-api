# PayPal\Rest-Api\OnboardingLimitedReleaseApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createManagedAccount**](OnboardingLimitedReleaseApi.md#createManagedAccount) | **POST** /v3/customer/managed-accounts | Create managed account
[**partiallyUpdatesInformationForAManagedAccount**](OnboardingLimitedReleaseApi.md#partiallyUpdatesInformationForAManagedAccount) | **PATCH** /v3/customer/managed-accounts/{id} | Partially updates information for a managed account
[**searchManagedAccountBySellerId**](OnboardingLimitedReleaseApi.md#searchManagedAccountBySellerId) | **GET** /v3/customer/managed-accounts/{id} | Search managed account by Seller Id
[**searchManagedAccountThroughExternalId**](OnboardingLimitedReleaseApi.md#searchManagedAccountThroughExternalId) | **GET** /v3/customer/managed-accounts | Search managed account through external id
[**showsCollectionOfRegisteredWalletDomains**](OnboardingLimitedReleaseApi.md#showsCollectionOfRegisteredWalletDomains) | **GET** /v3/customer/managed-accounts/{id}/wallet-domains | Shows collection of registered wallet domains


# **createManagedAccount**
> createManagedAccount($prefer, $prefer2, $prefer3, $prefer4)

Create managed account

Creates a managed account. Submit the account information in the JSON request body.  The details on what information is required for different business types in different countries can be found on [PayPal Developer Portal](https://developer.paypal.com/limited-release/commerce-platform/v3/seller-onboarding/localized-account-examples/).  The fields and parameters are described on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_post).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prefer = new \stdClass; // object | (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links.
$prefer2 = new \stdClass; // object | (Optional) The server returns a complete resource representation without process_view
$prefer3 = new \stdClass; // object | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.
$prefer4 = new \stdClass; // object | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.

try {
    $apiInstance->createManagedAccount($prefer, $prefer2, $prefer3, $prefer4);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->createManagedAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prefer** | [**object**](../Model/.md)| (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links. | [optional]
 **prefer2** | [**object**](../Model/.md)| (Optional) The server returns a complete resource representation without process_view | [optional]
 **prefer3** | [**object**](../Model/.md)| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]
 **prefer4** | [**object**](../Model/.md)| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partiallyUpdatesInformationForAManagedAccount**
> partiallyUpdatesInformationForAManagedAccount($id, $prefer, $prefer2, $prefer3, $prefer4)

Partially updates information for a managed account

Partially updates information for a managed account, by account ID. For information about the paths where you can replace, add, or delete information.  The fields and endpoint description can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_patch).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \stdClass; // object | The ID of the seller.
$prefer = new \stdClass; // object | (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links.
$prefer2 = new \stdClass; // object | (Optional) The server returns a complete resource representation without process_view
$prefer3 = new \stdClass; // object | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.
$prefer4 = new \stdClass; // object | (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those.

try {
    $apiInstance->partiallyUpdatesInformationForAManagedAccount($id, $prefer, $prefer2, $prefer3, $prefer4);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->partiallyUpdatesInformationForAManagedAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**object**](../Model/.md)| The ID of the seller. |
 **prefer** | [**object**](../Model/.md)| (Optional)The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the account_id, external_id, and HATEOAS links. | [optional]
 **prefer2** | [**object**](../Model/.md)| (Optional) The server returns a complete resource representation without process_view | [optional]
 **prefer3** | [**object**](../Model/.md)| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]
 **prefer4** | [**object**](../Model/.md)| (Optional)The server returns complete resource representation along with process_view which includes policies information along with data/documents requirement to fulfill those. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchManagedAccountBySellerId**
> searchManagedAccountBySellerId($id, $views)

Search managed account by Seller Id

Shows details for a managed account, by account ID.  The detailed description for the endpoint can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_get).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \stdClass; // object | The ID of the seller.
$views = new \stdClass; // object | (Optional) The `views` query parameter can be used to request `process_view` in addition to the default GET response.

try {
    $apiInstance->searchManagedAccountBySellerId($id, $views);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->searchManagedAccountBySellerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**object**](../Model/.md)| The ID of the seller. |
 **views** | [**object**](../Model/.md)| (Optional) The &#x60;views&#x60; query parameter can be used to request &#x60;process_view&#x60; in addition to the default GET response. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchManagedAccountThroughExternalId**
> searchManagedAccountThroughExternalId($external_id, $views)

Search managed account through external id

Show details for managed accounts, based on search criteria.  The detailed description for the endpoint can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_get).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = new \stdClass; // object | The `external_id` query parameter can be used to request managed accounts with the given external_id. Searches for the managed account that has the given external_id. To locate a particular account, you should set this to the same value that you provided in the /external_id property in your Create Managed Account request.
$views = new \stdClass; // object | (Optional) The `views` query parameter can be used to request `process_view` in addition to the default GET response. A comma-separated list of data sets that should be returned in the response. The only allowed value here is process_view, which indicates that the process_view property should be populated in the response; this property contains information on the regulatory processes that must be completed for this merchant.

try {
    $apiInstance->searchManagedAccountThroughExternalId($external_id, $views);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->searchManagedAccountThroughExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | [**object**](../Model/.md)| The &#x60;external_id&#x60; query parameter can be used to request managed accounts with the given external_id. Searches for the managed account that has the given external_id. To locate a particular account, you should set this to the same value that you provided in the /external_id property in your Create Managed Account request. | [optional]
 **views** | [**object**](../Model/.md)| (Optional) The &#x60;views&#x60; query parameter can be used to request &#x60;process_view&#x60; in addition to the default GET response. A comma-separated list of data sets that should be returned in the response. The only allowed value here is process_view, which indicates that the process_view property should be populated in the response; this property contains information on the regulatory processes that must be completed for this merchant. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showsCollectionOfRegisteredWalletDomains**
> showsCollectionOfRegisteredWalletDomains($id)

Shows collection of registered wallet domains

Shows collection of registered wallet domains  > Please look at sample (`200 - Add Wallet Domain`) attached under Manage Accounts `PATCH Partially updates information for a managed account` API.      The detailed description for the endpoint can be found on PayPal Developer Portal under [Managed Accounts](https://developer.paypal.com/api/limited-release/managed-accounts/v3/#managed-accounts_wallet-domains).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\OnboardingLimitedReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \stdClass; // object | The ID of the seller.

try {
    $apiInstance->showsCollectionOfRegisteredWalletDomains($id);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLimitedReleaseApi->showsCollectionOfRegisteredWalletDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**object**](../Model/.md)| The ID of the seller. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

