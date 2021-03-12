# IMN\Swagger\Client\MerchantAPIMarketplacesActivationApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**declareSourceMarketplace**](MerchantAPIMarketplacesActivationApi.md#declareSourceMarketplace) | **POST** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/declareOffersSource | Declare this marketplace as source of the offers
[**disableMarketplace**](MerchantAPIMarketplacesActivationApi.md#disableMarketplace) | **POST** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/disable | Disable offers publication &amp; order management for this marketplace
[**disableOrderImportation**](MerchantAPIMarketplacesActivationApi.md#disableOrderImportation) | **POST** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/disableOrderImportation | Disable order importation for this marketplace
[**enableMarketplace**](MerchantAPIMarketplacesActivationApi.md#enableMarketplace) | **POST** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/enable | Enable offers publication &amp; order management for this marketplace
[**reenableOrderImportation**](MerchantAPIMarketplacesActivationApi.md#reenableOrderImportation) | **POST** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/reenableOrderImportation | Reenable order importation for this marketplace
[**undeclareSourceMarketplace**](MerchantAPIMarketplacesActivationApi.md#undeclareSourceMarketplace) | **POST** /merchant/marketplaces/v1/{merchantCode}/{marketplaceCode}/undeclareOffersSource | Undeclare this marketplace as source of the offers


# **declareSourceMarketplace**
> declareSourceMarketplace($merchant_code, $marketplace_code)

Declare this marketplace as source of the offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $apiInstance->declareSourceMarketplace($merchant_code, $marketplace_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesActivationApi->declareSourceMarketplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableMarketplace**
> disableMarketplace($merchant_code, $marketplace_code)

Disable offers publication & order management for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $apiInstance->disableMarketplace($merchant_code, $marketplace_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesActivationApi->disableMarketplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableOrderImportation**
> disableOrderImportation($merchant_code, $marketplace_code)

Disable order importation for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $apiInstance->disableOrderImportation($merchant_code, $marketplace_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesActivationApi->disableOrderImportation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableMarketplace**
> enableMarketplace($merchant_code, $marketplace_code)

Enable offers publication & order management for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $apiInstance->enableMarketplace($merchant_code, $marketplace_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesActivationApi->enableMarketplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reenableOrderImportation**
> reenableOrderImportation($merchant_code, $marketplace_code)

Reenable order importation for this marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $apiInstance->reenableOrderImportation($merchant_code, $marketplace_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesActivationApi->reenableOrderImportation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **undeclareSourceMarketplace**
> undeclareSourceMarketplace($merchant_code, $marketplace_code)

Undeclare this marketplace as source of the offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIMarketplacesActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$marketplace_code = "marketplace_code_example"; // string | The marketplace code

try {
    $apiInstance->undeclareSourceMarketplace($merchant_code, $marketplace_code);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIMarketplacesActivationApi->undeclareSourceMarketplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **marketplace_code** | **string**| The marketplace code |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

