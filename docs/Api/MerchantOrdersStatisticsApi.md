# IMN\Swagger\Client\MerchantOrdersStatisticsApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMerchantReportByDay**](MerchantOrdersStatisticsApi.md#getMerchantReportByDay) | **POST** /merchant/orders/v1/{merchantCode}/reports/byday | Get the report by day
[**getMerchantReportStatus**](MerchantOrdersStatisticsApi.md#getMerchantReportStatus) | **POST** /merchant/orders/v1/{merchantCode}/reports/status | Get the report status


# **getMerchantReportByDay**
> \IMN\Swagger\Client\Model\ReportByDayResponse getMerchantReportByDay($merchant_code, $request)

Get the report by day

Get the report by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code
$request = new \IMN\Swagger\Client\Model\ReportByDayRequest(); // \IMN\Swagger\Client\Model\ReportByDayRequest | 

try {
    $result = $apiInstance->getMerchantReportByDay($merchant_code, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersStatisticsApi->getMerchantReportByDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |
 **request** | [**\IMN\Swagger\Client\Model\ReportByDayRequest**](../Model/ReportByDayRequest.md)|  |

### Return type

[**\IMN\Swagger\Client\Model\ReportByDayResponse**](../Model/ReportByDayResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantReportStatus**
> \IMN\Swagger\Client\Model\ReportStatusByMarketplace[] getMerchantReportStatus($merchant_code)

Get the report status

Get the report status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantOrdersStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_code = "merchant_code_example"; // string | The merchant code

try {
    $result = $apiInstance->getMerchantReportStatus($merchant_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOrdersStatisticsApi->getMerchantReportStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code |

### Return type

[**\IMN\Swagger\Client\Model\ReportStatusByMarketplace[]**](../Model/ReportStatusByMarketplace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

