# IMN\Swagger\Client\MerchantAPIMarketplacesApiCredentialsApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceApiCredential**](MerchantAPIMarketplacesApiCredentialsApi.md#getMarketplaceApiCredential) | **GET** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/apiCredential | Get the marketplace API credential
[**saveMarketplaceApiCredential**](MerchantAPIMarketplacesApiCredentialsApi.md#saveMarketplaceApiCredential) | **PUT** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/apiCredential | Save the marketplace API credential


# **getMarketplaceApiCredential**
> \IMN\Swagger\Client\Model\MarketplaceApiCredential getMarketplaceApiCredential($merchant_code, $marketplace_code)

Get the marketplace API credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesApiCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $result = $apiInstance->getMarketplaceApiCredential($merchant_code, $marketplace_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesApiCredentialsApi->getMarketplaceApiCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

[**\IMN\Swagger\Client\Model\MarketplaceApiCredential**](../Model/MarketplaceApiCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveMarketplaceApiCredential**
> saveMarketplaceApiCredential($merchant_code, $marketplace_code, $credential)

Save the marketplace API credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesApiCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code
$credential = new \IMN\Swagger\Client\Model\MarketplaceApiCredential(); // \IMN\Swagger\Client\Model\MarketplaceApiCredential | 

try {
    $apiInstance->saveMarketplaceApiCredential($merchant_code, $marketplace_code, $credential);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesApiCredentialsApi->saveMarketplaceApiCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |
 **credential** | [**\IMN\Swagger\Client\Model\MarketplaceApiCredential**](../Model/MarketplaceApiCredential.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

