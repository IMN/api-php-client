# IMN\Swagger\Client\MerchantOrdersOrderApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptOrder**](MerchantOrdersOrderApi.md#acceptOrder) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/accept | Accept your marketplace order
[**cancelOrder**](MerchantOrdersOrderApi.md#cancelOrder) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/cancel | Cancel your marketplace order
[**clearMerchantOrderInfo**](MerchantOrdersOrderApi.md#clearMerchantOrderInfo) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/clearMerchantOrderInfo | Clear an Order&#39;s merchant information
[**getOrder**](MerchantOrdersOrderApi.md#getOrder) | **GET** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId} | Get full Order and Order Item(s) properties
[**getOrderHistory**](MerchantOrdersOrderApi.md#getOrderHistory) | **GET** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/history | Get an Order&#39;s harvest and change history
[**headOrder**](MerchantOrdersOrderApi.md#headOrder) | **HEAD** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId} | Get the meta information about the order (ETag, Last-Modified)
[**refundOrder**](MerchantOrdersOrderApi.md#refundOrder) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/refund | Refund your marketplace order
[**refuseOrder**](MerchantOrdersOrderApi.md#refuseOrder) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/refuse | Refuse your marketplace order
[**setMerchantOrderInfo**](MerchantOrdersOrderApi.md#setMerchantOrderInfo) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/setMerchantOrderInfo | Set an Order&#39;s merchant information
[**shipOrder**](MerchantOrdersOrderApi.md#shipOrder) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/ship | Ship your marketplace order
[**shipOrderWithTrackingUrl**](MerchantOrdersOrderApi.md#shipOrderWithTrackingUrl) | **POST** /merchant/orders/v1/{merchantCode}/{marketplaceCode}/{marketplaceOrderId}/shipWithTrackingUrl | Ship your marketplace order with tracking url


# **acceptOrder**
> acceptOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $if_match, $test_mode)

Accept your marketplace order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $apiInstance->acceptOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->acceptOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrder**
> cancelOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $if_match, $request, $test_mode)

Cancel your marketplace order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$request = new \IMN\Swagger\Client\Model\CancelOrderRequest(); // \IMN\Swagger\Client\Model\CancelOrderRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $apiInstance->cancelOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $if_match, $request, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **request** | [**\IMN\Swagger\Client\Model\CancelOrderRequest**](../Model/CancelOrderRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfo**
> clearMerchantOrderInfo($merchant_code, $marketplace_code, $marketplace_order_id)

Clear an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier

try {
    $apiInstance->clearMerchantOrderInfo($merchant_code, $marketplace_code, $marketplace_order_id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->clearMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \IMN\Swagger\Client\Model\OrderIndex getOrder($merchant_code, $marketplace_code, $marketplace_order_id, $if_none_match)

Get full Order and Order Item(s) properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $apiInstance->getOrder($merchant_code, $marketplace_code, $marketplace_order_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\IMN\Swagger\Client\Model\OrderIndex**](../Model/OrderIndex.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderHistory**
> \IMN\Swagger\Client\Model\OrderHistory getOrderHistory($merchant_code, $marketplace_code, $marketplace_order_id, $if_none_match)

Get an Order's harvest and change history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $apiInstance->getOrderHistory($merchant_code, $marketplace_code, $marketplace_order_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->getOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\IMN\Swagger\Client\Model\OrderHistory**](../Model/OrderHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **headOrder**
> headOrder($merchant_code, $marketplace_code, $marketplace_order_id, $if_none_match)

Get the meta information about the order (ETag, Last-Modified)

The purpose of this operation is to reduce the bandwith usage by getting just the meta information about the order (ETag, Last-Modified) with the body. This could be useful

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $apiInstance->headOrder($merchant_code, $marketplace_code, $marketplace_order_id, $if_none_match);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->headOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundOrder**
> refundOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $request, $if_match, $test_mode)

Refund your marketplace order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\RefundOrderRequest(); // \IMN\Swagger\Client\Model\RefundOrderRequest | 
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $apiInstance->refundOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $request, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\RefundOrderRequest**](../Model/RefundOrderRequest.md)|  |
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refuseOrder**
> refuseOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $if_match, $test_mode)

Refuse your marketplace order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $apiInstance->refuseOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->refuseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfo**
> setMerchantOrderInfo($merchant_code, $marketplace_code, $marketplace_order_id, $request)

Set an Order's merchant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$request = new \IMN\Swagger\Client\Model\SetMerchantOrderInfoRequest(); // \IMN\Swagger\Client\Model\SetMerchantOrderInfoRequest | 

try {
    $apiInstance->setMerchantOrderInfo($merchant_code, $marketplace_code, $marketplace_order_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->setMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **request** | [**\IMN\Swagger\Client\Model\SetMerchantOrderInfoRequest**](../Model/SetMerchantOrderInfoRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipOrder**
> shipOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $request, $if_match, $test_mode)

Ship your marketplace order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\ShipOrderRequest(); // \IMN\Swagger\Client\Model\ShipOrderRequest | 
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $apiInstance->shipOrder($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $request, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->shipOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\ShipOrderRequest**](../Model/ShipOrderRequest.md)|  |
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipOrderWithTrackingUrl**
> shipOrderWithTrackingUrl($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $request, $if_match, $test_mode)

Ship your marketplace order with tracking url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$marketplace_order_id = "\"CDISCOUNT12345\""; // string | The MKP Order identifier
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\ShipOrderWithTrackingUrlRequest(); // \IMN\Swagger\Client\Model\ShipOrderWithTrackingUrlRequest | 
$if_match = "if_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $apiInstance->shipOrderWithTrackingUrl($merchant_code, $marketplace_code, $marketplace_order_id, $user_name, $request, $if_match, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersOrderApi->shipOrderWithTrackingUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **marketplace_order_id** | **string**| The MKP Order identifier |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\ShipOrderWithTrackingUrlRequest**](../Model/ShipOrderWithTrackingUrlRequest.md)|  |
 **if_match** | **string**| ETag value to identify the last known version of requested resource.\\ To ensure that you are making a change on the lastest version of the resource.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

