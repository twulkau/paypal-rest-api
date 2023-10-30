# PayPal\Rest-Api\TransactionSearchApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAllBalances**](TransactionSearchApi.md#listAllBalances) | **GET** /v1/reporting/balances | List all balances
[**listTransactions**](TransactionSearchApi.md#listTransactions) | **GET** /v1/reporting/transactions | List transactions


# **listAllBalances**
> listAllBalances($as_of_time, $currency_code, $include_crypto_currencies, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2)

List all balances

List all balances. Specify date time to list balances for that time that appear in the response.<blockquote><strong>Notes:</strong> <ul><li>It takes a maximum of three hours for balances to appear in the list balances call.</li><li>This call lists balances upto the previous three years.</li></ul></blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\TransactionSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$as_of_time = new \stdClass; // object | List balances in the response at the date time provided, will return the last refreshed balance in the system when not provided.
$currency_code = new \stdClass; // object | Filters the transactions in the response by a [three-character ISO-4217 currency code](https://developer.paypal.com/docs/api/reference/currency-codes/) for the PayPal transaction currency.
$include_crypto_currencies = new \stdClass; // object | Indicates whether the response list balances including crypto transactions. Value is either:<ul><li><code>false</code>. The default. The response doesn't include crypto transactions.</li><li><code>true</code>. The response also includes crypto transactions.</li></ul>
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 72 hours.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $apiInstance->listAllBalances($as_of_time, $currency_code, $include_crypto_currencies, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2);
} catch (Exception $e) {
    echo 'Exception when calling TransactionSearchApi->listAllBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_of_time** | [**object**](../Model/.md)| List balances in the response at the date time provided, will return the last refreshed balance in the system when not provided. | [optional]
 **currency_code** | [**object**](../Model/.md)| Filters the transactions in the response by a [three-character ISO-4217 currency code](https://developer.paypal.com/docs/api/reference/currency-codes/) for the PayPal transaction currency. | [optional]
 **include_crypto_currencies** | [**object**](../Model/.md)| Indicates whether the response list balances including crypto transactions. Value is either:&lt;ul&gt;&lt;li&gt;&lt;code&gt;false&lt;/code&gt;. The default. The response doesn&#39;t include crypto transactions.&lt;/li&gt;&lt;li&gt;&lt;code&gt;true&lt;/code&gt;. The response also includes crypto transactions.&lt;/li&gt;&lt;/ul&gt; | [optional]
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

# **listTransactions**
> listTransactions($fields, $start_date, $end_date, $transaction_id, $transaction_type, $transaction_status, $transaction_amount, $transaction_currency, $payment_instrument_type, $balance_affecting_records_only, $terminal_id, $store_id, $page, $page_size, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2)

List transactions

Lists transactions. Specify one or more query parameters to filter the transaction that appear in the response.<blockquote><strong>Notes:</strong> <ul><li>If you specify one or more optional query parameters, the <code>ending_balance</code> response field is empty.</li><li>It takes a maximum of three hours for executed transactions to appear in the list transactions call.</li><li>This call lists transaction for the previous three years.</li></ul></blockquote>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PayPal\Rest-Api\Api\TransactionSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = new \stdClass; // object | Indicates which fields appear in the response. Value is a single field or a comma-separated list of fields. The <code>transaction_info</code> value returns only the transaction details in the response. To include all fields in the response, specify <code>fields=all</code>. Valid fields are:<ul><li><a href=\"https://developer.paypal.com/api/transaction-search/v1/#definition-transaction_info\"><code>transaction_info</code></a>. The transaction information. Includes the ID of the PayPal account of the payee, the PayPal-generated transaction ID, the PayPal-generated base ID, the PayPal reference ID type, the transaction event code, the date and time when the transaction was initiated and was last updated, the transaction amounts including the PayPal fee, any discounts, insurance, the transaction status, and other information about the transaction.</li><li><a href=\"https://developer.paypal.com/api/transaction-search/v1/#definition-definition-payer_info\"><code>payer_info</code></a>. The payer information. Includes the PayPal customer account ID and the payer's email address, primary phone number, name, country code, address, and whether the payer is verified or unverified.</li><li><a href=\"https://developer.paypal.com/api/transaction-search/v1/#definition-shipping_info\"><code>shipping_info</code></a>. The shipping information. Includes the recipient's name, the shipping method for this order, the shipping address for this order, and the secondary address associated with this order.</li><li><a href=\"https://developer.paypal.com/api/transaction-search/v1/#definition-auction_info\"><code>auction_info</code></a>. The auction information. Includes the name of the auction site, the auction site URL, the ID of the customer who makes the purchase in the auction, and the date and time when the auction closes.</li><li><a href=\"https://developer.paypal.com/api/transaction-search/v1/#definition-cart_info\"><code>cart_info</code></a>. The cart information. Includes an array of item details, whether the item amount or the shipping amount already includes tax, and the ID of the invoice for PayPal-generated invoices.</li><li><a href=\"https://developer.paypal.com/api/transaction-search/v1/#definition-incentive_info\"><code>incentive_info</code></a>. An array of incentive detail objects. Each object includes the incentive, such as a special offer or coupon, the incentive amount, and the incentive program code that identifies a merchant loyalty or incentive program.</li><li><a href=\"https://developer.paypal.com/api/transaction-search/v1/#definition-store_info\"><code>store_info</code></a>. The store information. Includes the ID of the merchant store and the terminal ID for the checkout stand in the merchant store.</li></ul>
$start_date = new \stdClass; // object | (Required) Filters the transactions in the response by a start date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required. Fractional seconds are optional.
$end_date = new \stdClass; // object | (Required) Filters the transactions in the response by an end date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required. Fractional seconds are optional. The maximum supported range is 31 days.
$transaction_id = new \stdClass; // object | Filters the transactions in the response by a PayPal transaction ID. A valid transaction ID is 17 characters long, except for an <a href=\"https://developer.paypal.com/api/payments/v1/#definition-order>order ID</a>, which is 19 characters long.<blockquote><strong>Note:</strong> A transaction ID is not unique in the reporting system. The response can list two transactions with the same ID. One transaction can be balance affecting while the other is non-balance affecting.</blockquote>
$transaction_type = new \stdClass; // object | Filters the transactions in the response by a PayPal transaction event code. See [Transaction event codes](https://developer.paypal.com/docs/integration/direct/transaction-search/transaction-event-codes/).
$transaction_status = new \stdClass; // object | Filters the transactions in the response by a PayPal transaction status code. Value is:<table><thead><tr><th>Status&nbsp;code</th><th>Description</th></tr></thead><tbody><tr><td><code>D</code></td><td>PayPal or merchant rules denied the transaction.</td></tr><tr><td><code>P</code></td><td>The transaction is pending. The transaction was created but waits for another payment process to complete, such as an ACH transaction, before the status changes to <code>S</code>.</td></tr><tr><td><code>S</code></td><td>The transaction successfully completed without a denial and after any pending statuses.</td></tr><tr><td><code>V</code></td><td>A successful transaction was reversed and funds were refunded to the original sender.</td></tr></tbody></table>
$transaction_amount = new \stdClass; // object | Filters the transactions in the response by a gross transaction amount range. Specify the range as `<start-range> TO <end-range>`, where `<start-range>` is the lower limit of the gross PayPal transaction amount and `<end-range>` is the upper limit of the gross transaction amount. Specify the amounts in lower denominations. For example, to search for transactions from $5.00 to $10.05, specify `[500 TO 1005]`.<blockquote><strong>Note:</strong>The values must be URL encoded.</blockquote>
$transaction_currency = new \stdClass; // object | Filters the transactions in the response by a [three-character ISO-4217 currency code](https://developer.paypal.com/api/rest/reference/currency-codes/) for the PayPal transaction currency.
$payment_instrument_type = new \stdClass; // object | Filters the transactions in the response by a payment instrument type. Value is either:<ul><li><code>CREDITCARD</code>. Returns a direct credit card transaction with a corresponding value.</li><li><code>DEBITCARD</code>. Returns a debit card transaction with a corresponding value.</li></ul>If you omit this parameter, the API does not apply this filter.
$balance_affecting_records_only = new \stdClass; // object | Indicates whether the response includes only balance-impacting transactions or all transactions. Value is either:<ul><li><code>Y</code>. The default. The response includes only balance transactions.</li><li><code>N</code>. The response includes all transactions.</li></ul>
$terminal_id = new \stdClass; // object | Filters the transactions in the response by a terminal ID.
$store_id = new \stdClass; // object | Filters the transactions in the response by a store ID.
$page = new \stdClass; // object | The zero-relative start index of the entire list of items that are returned in the response. So, the combination of `page=1` and `page_size=20` returns the first 20 items.
$page_size = new \stdClass; // object | The number of items to return in the response. So, the combination of `page=1` and `page_size=20` returns the first 20 items. The combination of `page=2` and `page_size=20` returns the next 20 items.
$pay_pal_request_id = new \stdClass; // object | The server stores keys for 72 hours.
$pay_pal_client_metadata_id = new \stdClass; // object | Optional. Verifies that the payment originates from a valid, user-consented device and application. Reduces fraud and decreases declines. Transactions that do not include a client metadata ID are not eligible for PayPal Seller Protection.
$pay_pal_partner_attribution_id = new \stdClass; // object | Optional. Identifies the caller as a PayPal partner. To receive revenue attribution, specify a unique build notation (BN) code. BN codes provide tracking on all transactions that originate or are associated with a particular partner. To find your BN code, see Code and Credential Reference.
$pay_pal_auth_assertion = new \stdClass; // object | An API client-provided JSON Web Token (JWT) assertion that identifies the merchant. To use this header, you must get consent to act on behalf of a merchant.
$prefer = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$prefer2 = new \stdClass; // object | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $apiInstance->listTransactions($fields, $start_date, $end_date, $transaction_id, $transaction_type, $transaction_status, $transaction_amount, $transaction_currency, $payment_instrument_type, $balance_affecting_records_only, $terminal_id, $store_id, $page, $page_size, $pay_pal_request_id, $pay_pal_client_metadata_id, $pay_pal_partner_attribution_id, $pay_pal_auth_assertion, $prefer, $prefer2);
} catch (Exception $e) {
    echo 'Exception when calling TransactionSearchApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**object**](../Model/.md)| Indicates which fields appear in the response. Value is a single field or a comma-separated list of fields. The &lt;code&gt;transaction_info&lt;/code&gt; value returns only the transaction details in the response. To include all fields in the response, specify &lt;code&gt;fields&#x3D;all&lt;/code&gt;. Valid fields are:&lt;ul&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;https://developer.paypal.com/api/transaction-search/v1/#definition-transaction_info\&quot;&gt;&lt;code&gt;transaction_info&lt;/code&gt;&lt;/a&gt;. The transaction information. Includes the ID of the PayPal account of the payee, the PayPal-generated transaction ID, the PayPal-generated base ID, the PayPal reference ID type, the transaction event code, the date and time when the transaction was initiated and was last updated, the transaction amounts including the PayPal fee, any discounts, insurance, the transaction status, and other information about the transaction.&lt;/li&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;https://developer.paypal.com/api/transaction-search/v1/#definition-definition-payer_info\&quot;&gt;&lt;code&gt;payer_info&lt;/code&gt;&lt;/a&gt;. The payer information. Includes the PayPal customer account ID and the payer&#39;s email address, primary phone number, name, country code, address, and whether the payer is verified or unverified.&lt;/li&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;https://developer.paypal.com/api/transaction-search/v1/#definition-shipping_info\&quot;&gt;&lt;code&gt;shipping_info&lt;/code&gt;&lt;/a&gt;. The shipping information. Includes the recipient&#39;s name, the shipping method for this order, the shipping address for this order, and the secondary address associated with this order.&lt;/li&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;https://developer.paypal.com/api/transaction-search/v1/#definition-auction_info\&quot;&gt;&lt;code&gt;auction_info&lt;/code&gt;&lt;/a&gt;. The auction information. Includes the name of the auction site, the auction site URL, the ID of the customer who makes the purchase in the auction, and the date and time when the auction closes.&lt;/li&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;https://developer.paypal.com/api/transaction-search/v1/#definition-cart_info\&quot;&gt;&lt;code&gt;cart_info&lt;/code&gt;&lt;/a&gt;. The cart information. Includes an array of item details, whether the item amount or the shipping amount already includes tax, and the ID of the invoice for PayPal-generated invoices.&lt;/li&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;https://developer.paypal.com/api/transaction-search/v1/#definition-incentive_info\&quot;&gt;&lt;code&gt;incentive_info&lt;/code&gt;&lt;/a&gt;. An array of incentive detail objects. Each object includes the incentive, such as a special offer or coupon, the incentive amount, and the incentive program code that identifies a merchant loyalty or incentive program.&lt;/li&gt;&lt;li&gt;&lt;a href&#x3D;\&quot;https://developer.paypal.com/api/transaction-search/v1/#definition-store_info\&quot;&gt;&lt;code&gt;store_info&lt;/code&gt;&lt;/a&gt;. The store information. Includes the ID of the merchant store and the terminal ID for the checkout stand in the merchant store.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **start_date** | [**object**](../Model/.md)| (Required) Filters the transactions in the response by a start date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required. Fractional seconds are optional. | [optional]
 **end_date** | [**object**](../Model/.md)| (Required) Filters the transactions in the response by an end date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required. Fractional seconds are optional. The maximum supported range is 31 days. | [optional]
 **transaction_id** | [**object**](../Model/.md)| Filters the transactions in the response by a PayPal transaction ID. A valid transaction ID is 17 characters long, except for an &lt;a href&#x3D;\&quot;https://developer.paypal.com/api/payments/v1/#definition-order&gt;order ID&lt;/a&gt;, which is 19 characters long.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; A transaction ID is not unique in the reporting system. The response can list two transactions with the same ID. One transaction can be balance affecting while the other is non-balance affecting.&lt;/blockquote&gt; | [optional]
 **transaction_type** | [**object**](../Model/.md)| Filters the transactions in the response by a PayPal transaction event code. See [Transaction event codes](https://developer.paypal.com/docs/integration/direct/transaction-search/transaction-event-codes/). | [optional]
 **transaction_status** | [**object**](../Model/.md)| Filters the transactions in the response by a PayPal transaction status code. Value is:&lt;table&gt;&lt;thead&gt;&lt;tr&gt;&lt;th&gt;Status&amp;nbsp;code&lt;/th&gt;&lt;th&gt;Description&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;D&lt;/code&gt;&lt;/td&gt;&lt;td&gt;PayPal or merchant rules denied the transaction.&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;P&lt;/code&gt;&lt;/td&gt;&lt;td&gt;The transaction is pending. The transaction was created but waits for another payment process to complete, such as an ACH transaction, before the status changes to &lt;code&gt;S&lt;/code&gt;.&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;S&lt;/code&gt;&lt;/td&gt;&lt;td&gt;The transaction successfully completed without a denial and after any pending statuses.&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;V&lt;/code&gt;&lt;/td&gt;&lt;td&gt;A successful transaction was reversed and funds were refunded to the original sender.&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt; | [optional]
 **transaction_amount** | [**object**](../Model/.md)| Filters the transactions in the response by a gross transaction amount range. Specify the range as &#x60;&lt;start-range&gt; TO &lt;end-range&gt;&#x60;, where &#x60;&lt;start-range&gt;&#x60; is the lower limit of the gross PayPal transaction amount and &#x60;&lt;end-range&gt;&#x60; is the upper limit of the gross transaction amount. Specify the amounts in lower denominations. For example, to search for transactions from $5.00 to $10.05, specify &#x60;[500 TO 1005]&#x60;.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt;The values must be URL encoded.&lt;/blockquote&gt; | [optional]
 **transaction_currency** | [**object**](../Model/.md)| Filters the transactions in the response by a [three-character ISO-4217 currency code](https://developer.paypal.com/api/rest/reference/currency-codes/) for the PayPal transaction currency. | [optional]
 **payment_instrument_type** | [**object**](../Model/.md)| Filters the transactions in the response by a payment instrument type. Value is either:&lt;ul&gt;&lt;li&gt;&lt;code&gt;CREDITCARD&lt;/code&gt;. Returns a direct credit card transaction with a corresponding value.&lt;/li&gt;&lt;li&gt;&lt;code&gt;DEBITCARD&lt;/code&gt;. Returns a debit card transaction with a corresponding value.&lt;/li&gt;&lt;/ul&gt;If you omit this parameter, the API does not apply this filter. | [optional]
 **balance_affecting_records_only** | [**object**](../Model/.md)| Indicates whether the response includes only balance-impacting transactions or all transactions. Value is either:&lt;ul&gt;&lt;li&gt;&lt;code&gt;Y&lt;/code&gt;. The default. The response includes only balance transactions.&lt;/li&gt;&lt;li&gt;&lt;code&gt;N&lt;/code&gt;. The response includes all transactions.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **terminal_id** | [**object**](../Model/.md)| Filters the transactions in the response by a terminal ID. | [optional]
 **store_id** | [**object**](../Model/.md)| Filters the transactions in the response by a store ID. | [optional]
 **page** | [**object**](../Model/.md)| The zero-relative start index of the entire list of items that are returned in the response. So, the combination of &#x60;page&#x3D;1&#x60; and &#x60;page_size&#x3D;20&#x60; returns the first 20 items. | [optional]
 **page_size** | [**object**](../Model/.md)| The number of items to return in the response. So, the combination of &#x60;page&#x3D;1&#x60; and &#x60;page_size&#x3D;20&#x60; returns the first 20 items. The combination of &#x60;page&#x3D;2&#x60; and &#x60;page_size&#x3D;20&#x60; returns the next 20 items. | [optional]
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

