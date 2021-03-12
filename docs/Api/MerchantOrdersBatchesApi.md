# IMN\Swagger\Client\MerchantOrdersBatchesApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptOrderList**](MerchantOrdersBatchesApi.md#acceptOrderList) | **POST** /merchant/orders/v1/{merchantCode}/batches/accept | Accept multiple marketplace orders in one operation (max 100 items per call)
[**cancelOrderList**](MerchantOrdersBatchesApi.md#cancelOrderList) | **POST** /merchant/orders/v1/{merchantCode}/batches/cancel | Cancel multiple marketplace orders in one operation (max 100 items per call)
[**clearMerchantOrderInfoList**](MerchantOrdersBatchesApi.md#clearMerchantOrderInfoList) | **POST** /merchant/orders/v1/{merchantCode}/batches/clearMerchantOrderInfos | Send a batch of operations to clear an Order&#39;s merchant information (max 100 items per call)
[**refundOrderList**](MerchantOrdersBatchesApi.md#refundOrderList) | **POST** /merchant/orders/v1/{merchantCode}/batches/refund | Refund multiple marketplace orders in one operation (max 100 items per call)
[**refuseOrderList**](MerchantOrdersBatchesApi.md#refuseOrderList) | **POST** /merchant/orders/v1/{merchantCode}/batches/refuse | Refuse multiple marketplace orders in one operation (max 100 items per call)
[**setMerchantOrderInfoList**](MerchantOrdersBatchesApi.md#setMerchantOrderInfoList) | **POST** /merchant/orders/v1/{merchantCode}/batches/setMerchantOrderInfos | Send a batch of operations to set an Order&#39;s merchant information  (max 100 items per call)
[**shipOrderList**](MerchantOrdersBatchesApi.md#shipOrderList) | **POST** /merchant/orders/v1/{merchantCode}/batches/ship | Ship multiple marketplace orders in one operation (max 100 items per call)
[**shipOrderListWithTrackUrl**](MerchantOrdersBatchesApi.md#shipOrderListWithTrackUrl) | **POST** /merchant/orders/v1/{merchantCode}/batches/shipWithTrackingUrl | Ship multiple marketplace orders with tracking url in one operation (max 100 items per call)


# **acceptOrderList**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse acceptOrderList($merchant_code, $user_name, $request, $test_mode)

Accept multiple marketplace orders in one operation (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\AcceptOrderListRequest(); // \IMN\Swagger\Client\Model\AcceptOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $apiInstance->acceptOrderList($merchant_code, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->acceptOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\AcceptOrderListRequest**](../Model/AcceptOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrderList**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse cancelOrderList($merchant_code, $user_name, $request, $test_mode)

Cancel multiple marketplace orders in one operation (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\CancelOrderListRequest(); // \IMN\Swagger\Client\Model\CancelOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $apiInstance->cancelOrderList($merchant_code, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->cancelOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\CancelOrderListRequest**](../Model/CancelOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfoList**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse clearMerchantOrderInfoList($merchant_code, $request)

Send a batch of operations to clear an Order's merchant information (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$request = new \IMN\Swagger\Client\Model\ClearMerchantOrderInfoListRequest(); // \IMN\Swagger\Client\Model\ClearMerchantOrderInfoListRequest | 

try {
    $result = $apiInstance->clearMerchantOrderInfoList($merchant_code, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->clearMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **request** | [**\IMN\Swagger\Client\Model\ClearMerchantOrderInfoListRequest**](../Model/ClearMerchantOrderInfoListRequest.md)|  |

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundOrderList**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse refundOrderList($merchant_code, $user_name, $request, $test_mode)

Refund multiple marketplace orders in one operation (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\RefundOrderListRequest(); // \IMN\Swagger\Client\Model\RefundOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $apiInstance->refundOrderList($merchant_code, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->refundOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\RefundOrderListRequest**](../Model/RefundOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refuseOrderList**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse refuseOrderList($merchant_code, $user_name, $request, $test_mode)

Refuse multiple marketplace orders in one operation (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\RefuseOrderListRequest(); // \IMN\Swagger\Client\Model\RefuseOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $apiInstance->refuseOrderList($merchant_code, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->refuseOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\RefuseOrderListRequest**](../Model/RefuseOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfoList**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse setMerchantOrderInfoList($merchant_code, $request)

Send a batch of operations to set an Order's merchant information  (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$request = new \IMN\Swagger\Client\Model\SetMerchantOrderInfoListRequest(); // \IMN\Swagger\Client\Model\SetMerchantOrderInfoListRequest | 

try {
    $result = $apiInstance->setMerchantOrderInfoList($merchant_code, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->setMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **request** | [**\IMN\Swagger\Client\Model\SetMerchantOrderInfoListRequest**](../Model/SetMerchantOrderInfoListRequest.md)|  |

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipOrderList**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse shipOrderList($merchant_code, $user_name, $request, $test_mode)

Ship multiple marketplace orders in one operation (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\ShipOrderListRequest(); // \IMN\Swagger\Client\Model\ShipOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $apiInstance->shipOrderList($merchant_code, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->shipOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\ShipOrderListRequest**](../Model/ShipOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipOrderListWithTrackUrl**
> \IMN\Swagger\Client\Model\BatchOrderOperationResponse shipOrderListWithTrackUrl($merchant_code, $user_name, $request, $test_mode)

Ship multiple marketplace orders with tracking url in one operation (max 100 items per call)

The purpose of this operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application's user login.
$request = new \IMN\Swagger\Client\Model\ShipOrderWithTrackingUrlListRequest(); // \IMN\Swagger\Client\Model\ShipOrderWithTrackingUrlListRequest | 
$test_mode = false; // bool | If true, the operation will be not be sent to marketplace. But the validation will be taken in account.

try {
    $result = $apiInstance->shipOrderListWithTrackUrl($merchant_code, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersBatchesApi->shipOrderListWithTrackUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same as user associated with the current subscription key. We recommend providing your application&#39;s user login. |
 **request** | [**\IMN\Swagger\Client\Model\ShipOrderWithTrackingUrlListRequest**](../Model/ShipOrderWithTrackingUrlListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be not be sent to marketplace. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\IMN\Swagger\Client\Model\BatchOrderOperationResponse**](../Model/BatchOrderOperationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

