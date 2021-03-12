# IMN\Swagger\Client\MerchantAccountAPIApiTokenApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMerchantApiToken**](MerchantAccountAPIApiTokenApi.md#getMerchantApiToken) | **GET** /merchant/account/v1/{merchantCode}/apiToken | Get merchant api token
[**resetMerchantApiToken**](MerchantAccountAPIApiTokenApi.md#resetMerchantApiToken) | **POST** /merchant/account/v1/{merchantCode}/apiToken/reset | Reset merchant api token


# **getMerchantApiToken**
> \IMN\Swagger\Client\Model\ApiToken getMerchantApiToken($merchant_code)

Get merchant api token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAccountAPIApiTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code

try {
    $result = $apiInstance->getMerchantApiToken($merchant_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountAPIApiTokenApi->getMerchantApiToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |

### Return type

[**\IMN\Swagger\Client\Model\ApiToken**](../Model/ApiToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetMerchantApiToken**
> resetMerchantApiToken($merchant_code)

Reset merchant api token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAccountAPIApiTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code

try {
    $apiInstance->resetMerchantApiToken($merchant_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountAPIApiTokenApi->resetMerchantApiToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

