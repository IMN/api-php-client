# IMN\Swagger\Client\MerchantAccountAPIGlobalApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkMerchantCodeAvailability**](MerchantAccountAPIGlobalApi.md#checkMerchantCodeAvailability) | **POST** /merchant/account/v1/checkMerchantCodeAvailability | Check if merchant code is available
[**createMerchantAccount**](MerchantAccountAPIGlobalApi.md#createMerchantAccount) | **POST** /merchant/account/v1/create | Create the merchant account using the merchant code
[**getMerchantAccountIndex**](MerchantAccountAPIGlobalApi.md#getMerchantAccountIndex) | **GET** /merchant/account/v1/ | Get the merchant account index


# **checkMerchantCodeAvailability**
> checkMerchantCodeAvailability($merchant_code)

Check if merchant code is available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAccountAPIGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = new \IMN\Swagger\Client\Model\MerchantCode(); // \IMN\Swagger\Client\Model\MerchantCode | 

try {
    $apiInstance->checkMerchantCodeAvailability($merchant_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountAPIGlobalApi->checkMerchantCodeAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | [**\IMN\Swagger\Client\Model\MerchantCode**](../Model/MerchantCode.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMerchantAccount**
> createMerchantAccount($request)

Create the merchant account using the merchant code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAccountAPIGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \IMN\Swagger\Client\Model\CreateMerchantAccountRequest(); // \IMN\Swagger\Client\Model\CreateMerchantAccountRequest | 

try {
    $apiInstance->createMerchantAccount($request);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountAPIGlobalApi->createMerchantAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\IMN\Swagger\Client\Model\CreateMerchantAccountRequest**](../Model/CreateMerchantAccountRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantAccountIndex**
> \IMN\Swagger\Client\Model\MerchantAccountIndex getMerchantAccountIndex()

Get the merchant account index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAccountAPIGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMerchantAccountIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountAPIGlobalApi->getMerchantAccountIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\IMN\Swagger\Client\Model\MerchantAccountIndex**](../Model/MerchantAccountIndex.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

