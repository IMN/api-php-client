# OrderShippingInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\IMN\Swagger\Client\Model\Person**](Person.md) |  | [optional] 
**relay_id** | **string** | The company name of The address for this order | [optional] 
**address** | [**\IMN\Swagger\Client\Model\PostalAddress**](PostalAddress.md) |  | [optional] 
**price** | **float** | The shipping price of this order | [optional] 
**method** | **string** | The shipping method of this order | [optional] 
**fulfilled_by** | **string** | The shipment is fulfilled by | [optional] 
**tax** | **float** | The shipping tax for this order | [optional] 
**earliest_ship_utc_date** | [**\DateTime**](\DateTime.md) | The UTC date of the earliest ship for this order | [optional] 
**latest_ship_utc_date** | [**\DateTime**](\DateTime.md) | The UTC date of the latest ship for this order | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


