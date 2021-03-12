# IMN\Swagger\Client\MerchantOrdersGlobalApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderApiIndex**](MerchantOrdersGlobalApi.md#getOrderApiIndex) | **GET** /merchant/orders/v1/{merchantCode} | Get all actions you can do on the order API


# **getOrderApiIndex**
> \IMN\Swagger\Client\Model\OrderApiIndex getOrderApiIndex($merchant_code, $if_none_match)

Get all actions you can do on the order API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $apiInstance->getOrderApiIndex($merchant_code, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersGlobalApi->getOrderApiIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\IMN\Swagger\Client\Model\OrderApiIndex**](../Model/OrderApiIndex.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

