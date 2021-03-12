# OrderListRequestWithoutPagination

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_codes** | [**\IMN\Swagger\Client\Model\MarketplaceCode[]**](MarketplaceCode.md) |  | [optional] 
**late** | **bool** | Looking for late orders | [optional] 
**imn_order_statuses** | [**\IMN\Swagger\Client\Model\ImnOrderStatus[]**](ImnOrderStatus.md) |  | [optional] 
**date_search_type** | [**\IMN\Swagger\Client\Model\OrderDateSearchType**](OrderDateSearchType.md) |  | 
**begin_period_utc_date** | [**\DateTime**](\DateTime.md) | The begin period you want to make the search. \\ The period MUST not be greater than 30 days. The begin period MUST be lower than the end period. | 
**end_period_utc_date** | [**\DateTime**](\DateTime.md) | The end period of you search. \\ The period MUST not be greater than 30 days. \\ The end period MUST be greater than the begin period. The end period MUST be lower to the current date. | 
**buyer_first_name** | [**\IMN\Swagger\Client\Model\FirstName**](FirstName.md) |  | [optional] 
**buyer_last_name** | [**\IMN\Swagger\Client\Model\LastName**](LastName.md) |  | [optional] 
**marketplace_order_ids** | [**\IMN\Swagger\Client\Model\MarketplaceOrderId[]**](MarketplaceOrderId.md) |  | [optional] 
**merchant_order_ids** | [**\IMN\Swagger\Client\Model\MerchantOrderId[]**](MerchantOrderId.md) | Merchant order id list | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


