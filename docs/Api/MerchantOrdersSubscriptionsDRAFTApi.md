# IMN\Swagger\Client\MerchantOrdersSubscriptionsDRAFTApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateSubscription**](MerchantOrdersSubscriptionsDRAFTApi.md#activateSubscription) | **POST** /merchant/orders/v1/{merchantCode}/subscriptions/{id}/activate | Activate a subscription to the orders
[**createSubscription**](MerchantOrdersSubscriptionsDRAFTApi.md#createSubscription) | **POST** /merchant/orders/v1/{merchantCode}/subscriptions | Creates a subscription to the orders
[**deactivateSubscription**](MerchantOrdersSubscriptionsDRAFTApi.md#deactivateSubscription) | **POST** /merchant/orders/v1/{merchantCode}/subscriptions/{id}/deactivate | Deactivate a subscription to the orders
[**deleteSubscription**](MerchantOrdersSubscriptionsDRAFTApi.md#deleteSubscription) | **DELETE** /merchant/orders/v1/{merchantCode}/subscriptions/{id} | Delete a subscription to the orders
[**getSubscription**](MerchantOrdersSubscriptionsDRAFTApi.md#getSubscription) | **GET** /merchant/orders/v1/{merchantCode}/subscriptions/{id} | Get a subscription to the orders
[**getSubscriptionList**](MerchantOrdersSubscriptionsDRAFTApi.md#getSubscriptionList) | **GET** /merchant/orders/v1/{merchantCode}/subscriptions | Get the subscription list


# **activateSubscription**
> \IMN\Swagger\Client\Model\Subscription activateSubscription($merchant_code, $id, $x_hook_secret)

Activate a subscription to the orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersSubscriptionsDRAFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$id = "id_example"; // string | 
$x_hook_secret = "\"blablabla\""; // string | 

try {
    $result = $apiInstance->activateSubscription($merchant_code, $id, $x_hook_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersSubscriptionsDRAFTApi->activateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **id** | **string**|  |
 **x_hook_secret** | **string**|  |

### Return type

[**\IMN\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscription**
> \IMN\Swagger\Client\Model\Subscription createSubscription($merchant_code, $request)

Creates a subscription to the orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersSubscriptionsDRAFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$request = new \IMN\Swagger\Client\Model\CreateSubscriptionRequest(); // \IMN\Swagger\Client\Model\CreateSubscriptionRequest | 

try {
    $result = $apiInstance->createSubscription($merchant_code, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersSubscriptionsDRAFTApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **request** | [**\IMN\Swagger\Client\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  |

### Return type

[**\IMN\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivateSubscription**
> \IMN\Swagger\Client\Model\Subscription deactivateSubscription($merchant_code, $id, $x_hook_secret)

Deactivate a subscription to the orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersSubscriptionsDRAFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$id = "id_example"; // string | 
$x_hook_secret = "\"blablabla\""; // string | 

try {
    $result = $apiInstance->deactivateSubscription($merchant_code, $id, $x_hook_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersSubscriptionsDRAFTApi->deactivateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **id** | **string**|  |
 **x_hook_secret** | **string**|  |

### Return type

[**\IMN\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> deleteSubscription($merchant_code, $id, $x_hook_secret)

Delete a subscription to the orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersSubscriptionsDRAFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$id = "id_example"; // string | 
$x_hook_secret = "\"blablabla\""; // string | 

try {
    $apiInstance->deleteSubscription($merchant_code, $id, $x_hook_secret);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersSubscriptionsDRAFTApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **id** | **string**|  |
 **x_hook_secret** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \IMN\Swagger\Client\Model\Subscription getSubscription($merchant_code, $id, $x_hook_secret)

Get a subscription to the orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersSubscriptionsDRAFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$id = "id_example"; // string | 
$x_hook_secret = "\"blablabla\""; // string | 

try {
    $result = $apiInstance->getSubscription($merchant_code, $id, $x_hook_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersSubscriptionsDRAFTApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **id** | **string**|  |
 **x_hook_secret** | **string**|  |

### Return type

[**\IMN\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionList**
> \IMN\Swagger\Client\Model\Subscription[] getSubscriptionList($merchant_code)

Get the subscription list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersSubscriptionsDRAFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code

try {
    $result = $apiInstance->getSubscriptionList($merchant_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersSubscriptionsDRAFTApi->getSubscriptionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |

### Return type

[**\IMN\Swagger\Client\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

