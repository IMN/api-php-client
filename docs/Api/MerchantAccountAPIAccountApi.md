# IMN\Swagger\Client\MerchantAccountAPIAccountApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMerchantAccountInfo**](MerchantAccountAPIAccountApi.md#getMerchantAccountInfo) | **GET** /merchant/account/v1/{merchantCode} | Get merchant account info
[**updateMerchantAcountInfo**](MerchantAccountAPIAccountApi.md#updateMerchantAcountInfo) | **PATCH** /merchant/account/v1/{merchantCode} | Save merchant account info


# **getMerchantAccountInfo**
> \IMN\Swagger\Client\Model\MerchantAccountInfo getMerchantAccountInfo($merchant_code)

Get merchant account info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAccountAPIAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code

try {
    $result = $apiInstance->getMerchantAccountInfo($merchant_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountAPIAccountApi->getMerchantAccountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |

### Return type

[**\IMN\Swagger\Client\Model\MerchantAccountInfo**](../Model/MerchantAccountInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchantAcountInfo**
> updateMerchantAcountInfo($merchant_code, $request)

Save merchant account info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAccountAPIAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$request = new \IMN\Swagger\Client\Model\UpdateMerchantAccountRequest(); // \IMN\Swagger\Client\Model\UpdateMerchantAccountRequest | The merchant account info update request

try {
    $apiInstance->updateMerchantAcountInfo($merchant_code, $request);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountAPIAccountApi->updateMerchantAcountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **request** | [**\IMN\Swagger\Client\Model\UpdateMerchantAccountRequest**](../Model/UpdateMerchantAccountRequest.md)| The merchant account info update request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

