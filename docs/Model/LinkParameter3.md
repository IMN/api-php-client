# LinkParameter3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** | The label corresponding to the link parameter. This label is automatically translated based on the Accept-Language http header. | [optional] 
**value** | **object** | The value of the parameter. It can be an integer a string or an object. | [optional] 
**required** | **bool** |  | [optional] [default to false]
**in** | [**\IMN\Swagger\Client\Model\ParameterIn**](ParameterIn.md) |  | 
**lov_link** | [**\IMN\Swagger\Client\Model\LOVLink3**](LOVLink3.md) |  | [optional] 
**lov_required** | **bool** | If true, you MUST indicate a value from the list of values otherwise it&#39;s a freetext | [optional] 
**description** | **string** | description of the parameter | [optional] 
**schema** | **string** | schema of the parameter | [optional] 
**pattern** | [**\IMN\Swagger\Client\Model\ValidationPattern**](ValidationPattern.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


