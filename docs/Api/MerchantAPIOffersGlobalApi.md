# IMN\Swagger\Client\MerchantAPIOffersGlobalApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saveMerchantOfferBatch**](MerchantAPIOffersGlobalApi.md#saveMerchantOfferBatch) | **POST** /merchant/offers/v1/{merchantCode} | Save a batch of merchant offers


# **saveMerchantOfferBatch**
> saveMerchantOfferBatch($merchant_code, $request)

Save a batch of merchant offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIOffersGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$request = new \IMN\Swagger\Client\Model\BatchMerchantOfferChanges(); // \IMN\Swagger\Client\Model\BatchMerchantOfferChanges | 

try {
    $apiInstance->saveMerchantOfferBatch($merchant_code, $request);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIOffersGlobalApi->saveMerchantOfferBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **request** | [**\IMN\Swagger\Client\Model\BatchMerchantOfferChanges**](../Model/BatchMerchantOfferChanges.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

