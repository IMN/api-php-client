# IMN\Swagger\Client\MerchantAPIMarketplacesShippingSettingsApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceShippingSettings**](MerchantAPIMarketplacesShippingSettingsApi.md#getMarketplaceShippingSettings) | **GET** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/shippingSettings | Get the shipping settings for this marketplace
[**saveMarketplaceShippingSettings**](MerchantAPIMarketplacesShippingSettingsApi.md#saveMarketplaceShippingSettings) | **PUT** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/shippingSettings | Save the shipping settings for this marketplace


# **getMarketplaceShippingSettings**
> \IMN\Swagger\Client\Model\MarketplaceShippingSettings getMarketplaceShippingSettings($merchant_code, $marketplace_code)

Get the shipping settings for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesShippingSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $result = $apiInstance->getMarketplaceShippingSettings($merchant_code, $marketplace_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesShippingSettingsApi->getMarketplaceShippingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

[**\IMN\Swagger\Client\Model\MarketplaceShippingSettings**](../Model/MarketplaceShippingSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveMarketplaceShippingSettings**
> saveMarketplaceShippingSettings($merchant_code, $marketplace_code, $shipping_setting)

Save the shipping settings for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesShippingSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$shipping_setting = new \IMN\Swagger\Client\Model\MarketplaceShippingSettings(); // \IMN\Swagger\Client\Model\MarketplaceShippingSettings | 

try {
    $apiInstance->saveMarketplaceShippingSettings($merchant_code, $marketplace_code, $shipping_setting);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesShippingSettingsApi->saveMarketplaceShippingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **shipping_setting** | [**\IMN\Swagger\Client\Model\MarketplaceShippingSettings**](../Model/MarketplaceShippingSettings.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

