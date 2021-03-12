# IMN\Swagger\Client\MerchantAPIMarketplacesPricingSettingsApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplacePricingSetting**](MerchantAPIMarketplacesPricingSettingsApi.md#getMarketplacePricingSetting) | **GET** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/pricingSetting | Get the pricing setting for this marketplace
[**saveMarketplacePricingSetting**](MerchantAPIMarketplacesPricingSettingsApi.md#saveMarketplacePricingSetting) | **PUT** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/pricingSetting | Save the pricing setting for this marketplace


# **getMarketplacePricingSetting**
> \IMN\Swagger\Client\Model\MarketplacePricingSetting getMarketplacePricingSetting($merchant_code, $marketplace_code)

Get the pricing setting for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesPricingSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $result = $apiInstance->getMarketplacePricingSetting($merchant_code, $marketplace_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesPricingSettingsApi->getMarketplacePricingSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

[**\IMN\Swagger\Client\Model\MarketplacePricingSetting**](../Model/MarketplacePricingSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveMarketplacePricingSetting**
> saveMarketplacePricingSetting($merchant_code, $marketplace_code, $pricing_setting)

Save the pricing setting for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesPricingSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$pricing_setting = new \IMN\Swagger\Client\Model\MarketplacePricingSetting(); // \IMN\Swagger\Client\Model\MarketplacePricingSetting | 

try {
    $apiInstance->saveMarketplacePricingSetting($merchant_code, $marketplace_code, $pricing_setting);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesPricingSettingsApi->saveMarketplacePricingSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **pricing_setting** | [**\IMN\Swagger\Client\Model\MarketplacePricingSetting**](../Model/MarketplacePricingSetting.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

