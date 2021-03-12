# IMN\Swagger\Client\MerchantAPIMarketplacesMarketplaceApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceIndex**](MerchantAPIMarketplacesMarketplaceApi.md#getMarketplaceIndex) | **GET** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode} | Get the marketplace index
[**getMarketplaceSubscriptionReporting**](MerchantAPIMarketplacesMarketplaceApi.md#getMarketplaceSubscriptionReporting) | **GET** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/subscription/reporting | Get the marketplace subscription reporting


# **getMarketplaceIndex**
> \IMN\Swagger\Client\Model\MarketplaceIndex getMarketplaceIndex($merchant_code, $marketplace_code)

Get the marketplace index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $result = $apiInstance->getMarketplaceIndex($merchant_code, $marketplace_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesMarketplaceApi->getMarketplaceIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

[**\IMN\Swagger\Client\Model\MarketplaceIndex**](../Model/MarketplaceIndex.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketplaceSubscriptionReporting**
> \IMN\Swagger\Client\Model\MarketplaceSubscriptionReporting getMarketplaceSubscriptionReporting($merchant_code, $marketplace_code)

Get the marketplace subscription reporting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $result = $apiInstance->getMarketplaceSubscriptionReporting($merchant_code, $marketplace_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesMarketplaceApi->getMarketplaceSubscriptionReporting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

[**\IMN\Swagger\Client\Model\MarketplaceSubscriptionReporting**](../Model/MarketplaceSubscriptionReporting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

