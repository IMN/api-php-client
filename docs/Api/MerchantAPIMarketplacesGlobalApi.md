# IMN\Swagger\Client\MerchantAPIMarketplacesGlobalApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplacesIndex**](MerchantAPIMarketplacesGlobalApi.md#getMarketplacesIndex) | **GET** /merchant/marketplaces/v1/{merchantCode} | Get the marketplaces index


# **getMarketplacesIndex**
> \IMN\Swagger\Client\Model\MarketplacesIndex getMarketplacesIndex($merchant_code)

Get the marketplaces index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code

try {
    $result = $apiInstance->getMarketplacesIndex($merchant_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesGlobalApi->getMarketplacesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |

### Return type

[**\IMN\Swagger\Client\Model\MarketplacesIndex**](../Model/MarketplacesIndex.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

