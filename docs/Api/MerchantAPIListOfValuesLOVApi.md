# IMN\Swagger\Client\MerchantAPIListOfValuesLOVApi

All URIs are relative to *https://api.imn.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserListOfValues**](MerchantAPIListOfValuesLOVApi.md#getUserListOfValues) | **GET** /merchant/lov/v1/{listName} | Get the list of values related to this list name
[**getUserLovIndex**](MerchantAPIListOfValuesLOVApi.md#getUserLovIndex) | **GET** /merchant/lov/v1/ | Get all list names


# **getUserListOfValues**
> \IMN\Swagger\Client\Model\UserListOfValuesResponse getUserListOfValues($list_name, $accept_language, $if_none_match)

Get the list of values related to this list name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIListOfValuesLOVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_name = "list_name_example"; // string | The list of value name your want to get
$accept_language = array("accept_language_example"); // string[] | Indicates that the client accepts the following languages.
$if_none_match = "if_none_match_example"; // string | ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3

try {
    $result = $apiInstance->getUserListOfValues($list_name, $accept_language, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIListOfValuesLOVApi->getUserListOfValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_name** | **string**| The list of value name your want to get |
 **accept_language** | [**string[]**](../Model/string.md)| Indicates that the client accepts the following languages. | [optional]
 **if_none_match** | **string**| ETag value to identify the last known version of requested resource.\\ To avoid useless exchange, we recommend you to indicate the ETag you previously got from this operation.\\ If the ETag value does not match the response will be 200 to give you a new content, otherwise the response will be: 304 Not Modified, without any content.\\ For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | [optional]

### Return type

[**\IMN\Swagger\Client\Model\UserListOfValuesResponse**](../Model/UserListOfValuesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserLovIndex**
> \IMN\Swagger\Client\Model\UserLovIndex getUserLovIndex()

Get all list names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new IMN\Swagger\Client\Api\MerchantAPIListOfValuesLOVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUserLovIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAPIListOfValuesLOVApi->getUserLovIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\IMN\Swagger\Client\Model\UserLovIndex**](../Model/UserLovIndex.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

