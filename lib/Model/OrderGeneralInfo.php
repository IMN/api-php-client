<?php
/**
 * OrderGeneralInfo
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
 * OrderGeneralInfo Class Doc Comment
 *
 * @category Class
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderGeneralInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderGeneralInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'imn_order_status' => '\IMN\Swagger\Client\Model\ImnOrderStatus',
        'marketplace_order_status' => '\IMN\Swagger\Client\Model\MarketplaceOrderStatus',
        'purchase_utc_date' => '\DateTime',
        'marketplace_last_modification_utc_date' => '\DateTime',
        'marketplace_channel' => 'string',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'imn_order_status' => null,
        'marketplace_order_status' => null,
        'purchase_utc_date' => 'date-time',
        'marketplace_last_modification_utc_date' => 'date-time',
        'marketplace_channel' => null,
        'comment' => null
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
        'imn_order_status' => 'imnOrderStatus',
        'marketplace_order_status' => 'marketplaceOrderStatus',
        'purchase_utc_date' => 'purchaseUtcDate',
        'marketplace_last_modification_utc_date' => 'marketplaceLastModificationUtcDate',
        'marketplace_channel' => 'marketplaceChannel',
        'comment' => 'comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imn_order_status' => 'setImnOrderStatus',
        'marketplace_order_status' => 'setMarketplaceOrderStatus',
        'purchase_utc_date' => 'setPurchaseUtcDate',
        'marketplace_last_modification_utc_date' => 'setMarketplaceLastModificationUtcDate',
        'marketplace_channel' => 'setMarketplaceChannel',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imn_order_status' => 'getImnOrderStatus',
        'marketplace_order_status' => 'getMarketplaceOrderStatus',
        'purchase_utc_date' => 'getPurchaseUtcDate',
        'marketplace_last_modification_utc_date' => 'getMarketplaceLastModificationUtcDate',
        'marketplace_channel' => 'getMarketplaceChannel',
        'comment' => 'getComment'
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
        $this->container['imn_order_status'] = isset($data['imn_order_status']) ? $data['imn_order_status'] : null;
        $this->container['marketplace_order_status'] = isset($data['marketplace_order_status']) ? $data['marketplace_order_status'] : null;
        $this->container['purchase_utc_date'] = isset($data['purchase_utc_date']) ? $data['purchase_utc_date'] : null;
        $this->container['marketplace_last_modification_utc_date'] = isset($data['marketplace_last_modification_utc_date']) ? $data['marketplace_last_modification_utc_date'] : null;
        $this->container['marketplace_channel'] = isset($data['marketplace_channel']) ? $data['marketplace_channel'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['imn_order_status'] === null) {
            $invalidProperties[] = "'imn_order_status' can't be null";
        }
        if ($this->container['marketplace_order_status'] === null) {
            $invalidProperties[] = "'marketplace_order_status' can't be null";
        }
        if ($this->container['purchase_utc_date'] === null) {
            $invalidProperties[] = "'purchase_utc_date' can't be null";
        }
        if ($this->container['marketplace_last_modification_utc_date'] === null) {
            $invalidProperties[] = "'marketplace_last_modification_utc_date' can't be null";
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

        if ($this->container['imn_order_status'] === null) {
            return false;
        }
        if ($this->container['marketplace_order_status'] === null) {
            return false;
        }
        if ($this->container['purchase_utc_date'] === null) {
            return false;
        }
        if ($this->container['marketplace_last_modification_utc_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets imn_order_status
     *
     * @return \IMN\Swagger\Client\Model\ImnOrderStatus
     */
    public function getImnOrderStatus()
    {
        return $this->container['imn_order_status'];
    }

    /**
     * Sets imn_order_status
     *
     * @param \IMN\Swagger\Client\Model\ImnOrderStatus $imn_order_status imn_order_status
     *
     * @return $this
     */
    public function setImnOrderStatus($imn_order_status)
    {
        $this->container['imn_order_status'] = $imn_order_status;

        return $this;
    }

    /**
     * Gets marketplace_order_status
     *
     * @return \IMN\Swagger\Client\Model\MarketplaceOrderStatus
     */
    public function getMarketplaceOrderStatus()
    {
        return $this->container['marketplace_order_status'];
    }

    /**
     * Sets marketplace_order_status
     *
     * @param \IMN\Swagger\Client\Model\MarketplaceOrderStatus $marketplace_order_status marketplace_order_status
     *
     * @return $this
     */
    public function setMarketplaceOrderStatus($marketplace_order_status)
    {
        $this->container['marketplace_order_status'] = $marketplace_order_status;

        return $this;
    }

    /**
     * Gets purchase_utc_date
     *
     * @return \DateTime
     */
    public function getPurchaseUtcDate()
    {
        return $this->container['purchase_utc_date'];
    }

    /**
     * Sets purchase_utc_date
     *
     * @param \DateTime $purchase_utc_date The purchase date of this order
     *
     * @return $this
     */
    public function setPurchaseUtcDate($purchase_utc_date)
    {
        $this->container['purchase_utc_date'] = $purchase_utc_date;

        return $this;
    }

    /**
     * Gets marketplace_last_modification_utc_date
     *
     * @return \DateTime
     */
    public function getMarketplaceLastModificationUtcDate()
    {
        return $this->container['marketplace_last_modification_utc_date'];
    }

    /**
     * Sets marketplace_last_modification_utc_date
     *
     * @param \DateTime $marketplace_last_modification_utc_date The last modification UTC date done by the marketplace on this order
     *
     * @return $this
     */
    public function setMarketplaceLastModificationUtcDate($marketplace_last_modification_utc_date)
    {
        $this->container['marketplace_last_modification_utc_date'] = $marketplace_last_modification_utc_date;

        return $this;
    }

    /**
     * Gets marketplace_channel
     *
     * @return string
     */
    public function getMarketplaceChannel()
    {
        return $this->container['marketplace_channel'];
    }

    /**
     * Sets marketplace_channel
     *
     * @param string $marketplace_channel Useful to identify the origin of the order. For example in Cdiscount.
     *
     * @return $this
     */
    public function setMarketplaceChannel($marketplace_channel)
    {
        $this->container['marketplace_channel'] = $marketplace_channel;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment The comment associated to this order
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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


