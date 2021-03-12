# IMN\Swagger\Client\MerchantOrdersListApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderListFull**](MerchantOrdersListApi.md#getOrderListFull) | **POST** /merchant/orders/v1/{merchantCode}/list | Get a paginated list of all Orders with all Order and Order Item(s) properties


# **getOrderListFull**
> \IMN\Swagger\Client\Model\OrderListFull getOrderListFull($merchant_code, $accept_encoding, $request)

Get a paginated list of all Orders with all Order and Order Item(s) properties

The purpose of this operation is to reduce the amount of request to the API.\\ \\ Previous implmentation of this feature only returned a partial (light) version of the Orders. The purpose of this API is to reduce the number of incoming requests by returning the complete (full) Order and Order Item(s) properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$accept_encoding = "accept_encoding_example"; // string | Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size
$request = new \IMN\Swagger\Client\Model\OrderListRequest(); // \IMN\Swagger\Client\Model\OrderListRequest | 

try {
    $result = $apiInstance->getOrderListFull($merchant_code, $accept_encoding, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersListApi->getOrderListFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **accept_encoding** | **string**| Allows the client to indicate wether it accepts a compressed encoding to reduce traffic size |
 **request** | [**\IMN\Swagger\Client\Model\OrderListRequest**](../Model/OrderListRequest.md)|  |

### Return type

[**\IMN\Swagger\Client\Model\OrderListFull**](../Model/OrderListFull.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

