# ChangeOrderReporting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**correlation_id** | [**\IMN\Swagger\Client\Model\CorrelationId**](CorrelationId.md) |  | 
**change_type** | [**\IMN\Swagger\Client\Model\OrderChangeType**](OrderChangeType.md) |  | 
**source_type** | [**\IMN\Swagger\Client\Model\OperationSourceType**](OperationSourceType.md) |  | 
**source_user_id** | [**\IMN\Swagger\Client\Model\UserId**](UserId.md) |  | 
**source_user_name** | **string** |  | 
**creation_utc_date** | [**\DateTime**](\DateTime.md) | The creation UTC date of the execution | 
**processing_status** | [**\IMN\Swagger\Client\Model\ProcessingStatus**](ProcessingStatus.md) |  | 
**last_update_utc_date** | [**\DateTime**](\DateTime.md) | The last update UTC date of the execution | 
**error_message** | **string** | The error message during the execution | [optional] 
**ip_address** | **string** | The IP address who request this operation | 
**test_mode** | **bool** | This operation was a test | 
**details** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


