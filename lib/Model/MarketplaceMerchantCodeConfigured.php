<?php
/**
 * MarketplaceMerchantCodeConfigured
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
use \IMN\Swagger\Client\ObjectSerializer;

/**
 * MarketplaceMerchantCodeConfigured Class Doc Comment
 *
 * @category Class
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketplaceMerchantCodeConfigured extends MerchantEventPushed 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'marketplaceMerchantCodeConfigured';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_code' => '\IMN\Swagger\Client\Model\MerchantCode',
        'event_type' => 'string',
        'marketplace_code' => '\IMN\Swagger\Client\Model\MarketplaceCode',
        'user_id' => '\IMN\Swagger\Client\Model\UserId',
        'marketplace_merchant_code' => '\IMN\Swagger\Client\Model\MarketplaceMerchantCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_code' => null,
        'event_type' => null,
        'marketplace_code' => null,
        'user_id' => null,
        'marketplace_merchant_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_code' => 'merchantCode',
        'event_type' => 'eventType',
        'marketplace_code' => 'marketplaceCode',
        'user_id' => 'userId',
        'marketplace_merchant_code' => 'marketplaceMerchantCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_code' => 'setMerchantCode',
        'event_type' => 'setEventType',
        'marketplace_code' => 'setMarketplaceCode',
        'user_id' => 'setUserId',
        'marketplace_merchant_code' => 'setMarketplaceMerchantCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_code' => 'getMerchantCode',
        'event_type' => 'getEventType',
        'marketplace_code' => 'getMarketplaceCode',
        'user_id' => 'getUserId',
        'marketplace_merchant_code' => 'getMarketplaceMerchantCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['merchant_code'] = isset($data['merchant_code']) ? $data['merchant_code'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['marketplace_code'] = isset($data['marketplace_code']) ? $data['marketplace_code'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['marketplace_merchant_code'] = isset($data['marketplace_merchant_code']) ? $data['marketplace_merchant_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['merchant_code'] === null) {
            $invalidProperties[] = "'merchant_code' can't be null";
        }
        if ($this->container['marketplace_code'] === null) {
            $invalidProperties[] = "'marketplace_code' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['marketplace_merchant_code'] === null) {
            $invalidProperties[] = "'marketplace_merchant_code' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['merchant_code'] === null) {
            return false;
        }
        if ($this->container['marketplace_code'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['marketplace_merchant_code'] === null) {
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
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type event_type
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets marketplace_code
     *
     * @return \IMN\Swagger\Client\Model\MarketplaceCode
     */
    public function getMarketplaceCode()
    {
        return $this->container['marketplace_code'];
    }

    /**
     * Sets marketplace_code
     *
     * @param \IMN\Swagger\Client\Model\MarketplaceCode $marketplace_code marketplace_code
     *
     * @return $this
     */
    public function setMarketplaceCode($marketplace_code)
    {
        $this->container['marketplace_code'] = $marketplace_code;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return \IMN\Swagger\Client\Model\UserId
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param \IMN\Swagger\Client\Model\UserId $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets marketplace_merchant_code
     *
     * @return \IMN\Swagger\Client\Model\MarketplaceMerchantCode
     */
    public function getMarketplaceMerchantCode()
    {
        return $this->container['marketplace_merchant_code'];
    }

    /**
     * Sets marketplace_merchant_code
     *
     * @param \IMN\Swagger\Client\Model\MarketplaceMerchantCode $marketplace_merchant_code marketplace_merchant_code
     *
     * @return $this
     */
    public function setMarketplaceMerchantCode($marketplace_merchant_code)
    {
        $this->container['marketplace_merchant_code'] = $marketplace_merchant_code;

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


