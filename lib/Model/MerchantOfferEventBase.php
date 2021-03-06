<?php
/**
 * MerchantOfferEventBase
 *
 * PHP version 5
 *
 * @category Class
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IMN  API
 *
 * # The REST API of IMN system  ## Overview  The REST APIs provide programmatic access to read and write IMN data.   Basically, with this API you will be able to do everything like you were with your browser on https://go.imn.io !    The main features are:  - Register and manage your merchant account  - Declare your source marketplace to get your offers  - Configure your marketplace api credential  - Define the target marketplaces you want to go to, then you will be able to configure:   - the pricing setting    - the shipping settings  - ...and more!      ## Things to keep in mind  ### API Rate Limits  - The IMN REST API is limited to 100 calls/minute.    ### Media type  The default media type for requests and responses is application/json. Where noted, some operations support other content types. If no additional content type is mentioned for a specific operation, then the media type is application/json.    ### Required content type  The required and default encoding for the request and responses is UTF8.    ### Required date time format  All our date time are formatted in ISO 8601 format: 2014-06-24T16:25:00Z.    ### Base URL  The Base URL of the IMN API Order Management REST API conforms to the following template.    https://api.imn.io    All URLs returned by the IMN API are relative to this base URL, and all requests to the REST API must use this base URL template.    You can test our API on https://api-docs.imn.io/swagger-ui\\\\  You can contact us on [gitter, #IMN/API](https://gitter.im/IMN/API)
 *
 * OpenAPI spec version: 1.0
 * Contact: support@imn.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace IMN\Swagger\Client\Model;

use \ArrayAccess;
use \IMN\Swagger\Client\ObjectSerializer;

/**
 * MerchantOfferEventBase Class Doc Comment
 *
 * @category Class
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantOfferEventBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'merchantOfferEventBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_code' => '\IMN\Swagger\Client\Model\MerchantCode',
        'sku' => '\IMN\Swagger\Client\Model\Sku',
        'gtin' => '\IMN\Swagger\Client\Model\Gtin',
        'item_condition' => '\IMN\Swagger\Client\Model\ItemCondition',
        'fulfilled_by' => '\IMN\Swagger\Client\Model\FulfilledBy',
        'price' => '\IMN\Swagger\Client\Model\Price',
        'price_currency' => '\IMN\Swagger\Client\Model\PriceCurrency',
        'min_price' => '\IMN\Swagger\Client\Model\MinPrice',
        'discount' => '\IMN\Swagger\Client\Model\PriceSpecification',
        'delivery_lead_time' => '\IMN\Swagger\Client\Model\DeliveryLeadTime',
        'inventory_level' => '\IMN\Swagger\Client\Model\InventoryLevel',
        'default_delivery_method' => '\IMN\Swagger\Client\Model\DeliveryMethod',
        'delivery_specifications' => '\IMN\Swagger\Client\Model\DeliverySpecification[]',
        'last_update_utc_date' => '\DateTime',
        'source_marketplace_code' => '\IMN\Swagger\Client\Model\MarketplaceCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_code' => null,
        'sku' => null,
        'gtin' => null,
        'item_condition' => null,
        'fulfilled_by' => null,
        'price' => null,
        'price_currency' => null,
        'min_price' => null,
        'discount' => null,
        'delivery_lead_time' => null,
        'inventory_level' => null,
        'default_delivery_method' => null,
        'delivery_specifications' => null,
        'last_update_utc_date' => 'date-time',
        'source_marketplace_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_code' => 'merchantCode',
        'sku' => 'sku',
        'gtin' => 'gtin',
        'item_condition' => 'itemCondition',
        'fulfilled_by' => 'fulfilledBy',
        'price' => 'price',
        'price_currency' => 'priceCurrency',
        'min_price' => 'minPrice',
        'discount' => 'discount',
        'delivery_lead_time' => 'deliveryLeadTime',
        'inventory_level' => 'inventoryLevel',
        'default_delivery_method' => 'defaultDeliveryMethod',
        'delivery_specifications' => 'deliverySpecifications',
        'last_update_utc_date' => 'lastUpdateUtcDate',
        'source_marketplace_code' => 'sourceMarketplaceCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_code' => 'setMerchantCode',
        'sku' => 'setSku',
        'gtin' => 'setGtin',
        'item_condition' => 'setItemCondition',
        'fulfilled_by' => 'setFulfilledBy',
        'price' => 'setPrice',
        'price_currency' => 'setPriceCurrency',
        'min_price' => 'setMinPrice',
        'discount' => 'setDiscount',
        'delivery_lead_time' => 'setDeliveryLeadTime',
        'inventory_level' => 'setInventoryLevel',
        'default_delivery_method' => 'setDefaultDeliveryMethod',
        'delivery_specifications' => 'setDeliverySpecifications',
        'last_update_utc_date' => 'setLastUpdateUtcDate',
        'source_marketplace_code' => 'setSourceMarketplaceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_code' => 'getMerchantCode',
        'sku' => 'getSku',
        'gtin' => 'getGtin',
        'item_condition' => 'getItemCondition',
        'fulfilled_by' => 'getFulfilledBy',
        'price' => 'getPrice',
        'price_currency' => 'getPriceCurrency',
        'min_price' => 'getMinPrice',
        'discount' => 'getDiscount',
        'delivery_lead_time' => 'getDeliveryLeadTime',
        'inventory_level' => 'getInventoryLevel',
        'default_delivery_method' => 'getDefaultDeliveryMethod',
        'delivery_specifications' => 'getDeliverySpecifications',
        'last_update_utc_date' => 'getLastUpdateUtcDate',
        'source_marketplace_code' => 'getSourceMarketplaceCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchant_code'] = isset($data['merchant_code']) ? $data['merchant_code'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['item_condition'] = isset($data['item_condition']) ? $data['item_condition'] : null;
        $this->container['fulfilled_by'] = isset($data['fulfilled_by']) ? $data['fulfilled_by'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_currency'] = isset($data['price_currency']) ? $data['price_currency'] : null;
        $this->container['min_price'] = isset($data['min_price']) ? $data['min_price'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['delivery_lead_time'] = isset($data['delivery_lead_time']) ? $data['delivery_lead_time'] : null;
        $this->container['inventory_level'] = isset($data['inventory_level']) ? $data['inventory_level'] : null;
        $this->container['default_delivery_method'] = isset($data['default_delivery_method']) ? $data['default_delivery_method'] : null;
        $this->container['delivery_specifications'] = isset($data['delivery_specifications']) ? $data['delivery_specifications'] : null;
        $this->container['last_update_utc_date'] = isset($data['last_update_utc_date']) ? $data['last_update_utc_date'] : null;
        $this->container['source_marketplace_code'] = isset($data['source_marketplace_code']) ? $data['source_marketplace_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_code'] === null) {
            $invalidProperties[] = "'merchant_code' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['gtin'] === null) {
            $invalidProperties[] = "'gtin' can't be null";
        }
        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['price_currency'] === null) {
            $invalidProperties[] = "'price_currency' can't be null";
        }
        if ($this->container['delivery_lead_time'] === null) {
            $invalidProperties[] = "'delivery_lead_time' can't be null";
        }
        if ($this->container['inventory_level'] === null) {
            $invalidProperties[] = "'inventory_level' can't be null";
        }
        if ($this->container['last_update_utc_date'] === null) {
            $invalidProperties[] = "'last_update_utc_date' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['merchant_code'] === null) {
            return false;
        }
        if ($this->container['sku'] === null) {
            return false;
        }
        if ($this->container['gtin'] === null) {
            return false;
        }
        if ($this->container['item_condition'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['price_currency'] === null) {
            return false;
        }
        if ($this->container['delivery_lead_time'] === null) {
            return false;
        }
        if ($this->container['inventory_level'] === null) {
            return false;
        }
        if ($this->container['last_update_utc_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchant_code
     *
     * @return \IMN\Swagger\Client\Model\MerchantCode
     */
    public function getMerchantCode()
    {
        return $this->container['merchant_code'];
    }

    /**
     * Sets merchant_code
     *
     * @param \IMN\Swagger\Client\Model\MerchantCode $merchant_code merchant_code
     *
     * @return $this
     */
    public function setMerchantCode($merchant_code)
    {
        $this->container['merchant_code'] = $merchant_code;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return \IMN\Swagger\Client\Model\Sku
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param \IMN\Swagger\Client\Model\Sku $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return \IMN\Swagger\Client\Model\Gtin
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param \IMN\Swagger\Client\Model\Gtin $gtin gtin
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets item_condition
     *
     * @return \IMN\Swagger\Client\Model\ItemCondition
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param \IMN\Swagger\Client\Model\ItemCondition $item_condition item_condition
     *
     * @return $this
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets fulfilled_by
     *
     * @return \IMN\Swagger\Client\Model\FulfilledBy
     */
    public function getFulfilledBy()
    {
        return $this->container['fulfilled_by'];
    }

    /**
     * Sets fulfilled_by
     *
     * @param \IMN\Swagger\Client\Model\FulfilledBy $fulfilled_by fulfilled_by
     *
     * @return $this
     */
    public function setFulfilledBy($fulfilled_by)
    {
        $this->container['fulfilled_by'] = $fulfilled_by;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \IMN\Swagger\Client\Model\Price
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \IMN\Swagger\Client\Model\Price $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_currency
     *
     * @return \IMN\Swagger\Client\Model\PriceCurrency
     */
    public function getPriceCurrency()
    {
        return $this->container['price_currency'];
    }

    /**
     * Sets price_currency
     *
     * @param \IMN\Swagger\Client\Model\PriceCurrency $price_currency price_currency
     *
     * @return $this
     */
    public function setPriceCurrency($price_currency)
    {
        $this->container['price_currency'] = $price_currency;

        return $this;
    }

    /**
     * Gets min_price
     *
     * @return \IMN\Swagger\Client\Model\MinPrice
     */
    public function getMinPrice()
    {
        return $this->container['min_price'];
    }

    /**
     * Sets min_price
     *
     * @param \IMN\Swagger\Client\Model\MinPrice $min_price min_price
     *
     * @return $this
     */
    public function setMinPrice($min_price)
    {
        $this->container['min_price'] = $min_price;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \IMN\Swagger\Client\Model\PriceSpecification
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \IMN\Swagger\Client\Model\PriceSpecification $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets delivery_lead_time
     *
     * @return \IMN\Swagger\Client\Model\DeliveryLeadTime
     */
    public function getDeliveryLeadTime()
    {
        return $this->container['delivery_lead_time'];
    }

    /**
     * Sets delivery_lead_time
     *
     * @param \IMN\Swagger\Client\Model\DeliveryLeadTime $delivery_lead_time delivery_lead_time
     *
     * @return $this
     */
    public function setDeliveryLeadTime($delivery_lead_time)
    {
        $this->container['delivery_lead_time'] = $delivery_lead_time;

        return $this;
    }

    /**
     * Gets inventory_level
     *
     * @return \IMN\Swagger\Client\Model\InventoryLevel
     */
    public function getInventoryLevel()
    {
        return $this->container['inventory_level'];
    }

    /**
     * Sets inventory_level
     *
     * @param \IMN\Swagger\Client\Model\InventoryLevel $inventory_level inventory_level
     *
     * @return $this
     */
    public function setInventoryLevel($inventory_level)
    {
        $this->container['inventory_level'] = $inventory_level;

        return $this;
    }

    /**
     * Gets default_delivery_method
     *
     * @return \IMN\Swagger\Client\Model\DeliveryMethod
     */
    public function getDefaultDeliveryMethod()
    {
        return $this->container['default_delivery_method'];
    }

    /**
     * Sets default_delivery_method
     *
     * @param \IMN\Swagger\Client\Model\DeliveryMethod $default_delivery_method default_delivery_method
     *
     * @return $this
     */
    public function setDefaultDeliveryMethod($default_delivery_method)
    {
        $this->container['default_delivery_method'] = $default_delivery_method;

        return $this;
    }

    /**
     * Gets delivery_specifications
     *
     * @return \IMN\Swagger\Client\Model\DeliverySpecification[]
     */
    public function getDeliverySpecifications()
    {
        return $this->container['delivery_specifications'];
    }

    /**
     * Sets delivery_specifications
     *
     * @param \IMN\Swagger\Client\Model\DeliverySpecification[] $delivery_specifications delivery_specifications
     *
     * @return $this
     */
    public function setDeliverySpecifications($delivery_specifications)
    {
        $this->container['delivery_specifications'] = $delivery_specifications;

        return $this;
    }

    /**
     * Gets last_update_utc_date
     *
     * @return \DateTime
     */
    public function getLastUpdateUtcDate()
    {
        return $this->container['last_update_utc_date'];
    }

    /**
     * Sets last_update_utc_date
     *
     * @param \DateTime $last_update_utc_date last_update_utc_date
     *
     * @return $this
     */
    public function setLastUpdateUtcDate($last_update_utc_date)
    {
        $this->container['last_update_utc_date'] = $last_update_utc_date;

        return $this;
    }

    /**
     * Gets source_marketplace_code
     *
     * @return \IMN\Swagger\Client\Model\MarketplaceCode
     */
    public function getSourceMarketplaceCode()
    {
        return $this->container['source_marketplace_code'];
    }

    /**
     * Sets source_marketplace_code
     *
     * @param \IMN\Swagger\Client\Model\MarketplaceCode $source_marketplace_code source_marketplace_code
     *
     * @return $this
     */
    public function setSourceMarketplaceCode($source_marketplace_code)
    {
        $this->container['source_marketplace_code'] = $source_marketplace_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


