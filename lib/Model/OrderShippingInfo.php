<?php
/**
 * OrderShippingInfo
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
 * OrderShippingInfo Class Doc Comment
 *
 * @category Class
 * @description The shipping information related to the order
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderShippingInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderShippingInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact' => '\IMN\Swagger\Client\Model\Person',
        'relay_id' => 'string',
        'address' => '\IMN\Swagger\Client\Model\PostalAddress',
        'price' => 'float',
        'method' => 'string',
        'fulfilled_by' => 'string',
        'tax' => 'float',
        'earliest_ship_utc_date' => '\DateTime',
        'latest_ship_utc_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact' => null,
        'relay_id' => null,
        'address' => null,
        'price' => 'decimal',
        'method' => null,
        'fulfilled_by' => null,
        'tax' => 'decimal',
        'earliest_ship_utc_date' => 'date-time',
        'latest_ship_utc_date' => 'date-time'
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
        'contact' => 'contact',
        'relay_id' => 'relayId',
        'address' => 'address',
        'price' => 'price',
        'method' => 'method',
        'fulfilled_by' => 'fulfilledBy',
        'tax' => 'tax',
        'earliest_ship_utc_date' => 'earliestShipUtcDate',
        'latest_ship_utc_date' => 'latestShipUtcDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
        'relay_id' => 'setRelayId',
        'address' => 'setAddress',
        'price' => 'setPrice',
        'method' => 'setMethod',
        'fulfilled_by' => 'setFulfilledBy',
        'tax' => 'setTax',
        'earliest_ship_utc_date' => 'setEarliestShipUtcDate',
        'latest_ship_utc_date' => 'setLatestShipUtcDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
        'relay_id' => 'getRelayId',
        'address' => 'getAddress',
        'price' => 'getPrice',
        'method' => 'getMethod',
        'fulfilled_by' => 'getFulfilledBy',
        'tax' => 'getTax',
        'earliest_ship_utc_date' => 'getEarliestShipUtcDate',
        'latest_ship_utc_date' => 'getLatestShipUtcDate'
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['relay_id'] = isset($data['relay_id']) ? $data['relay_id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['fulfilled_by'] = isset($data['fulfilled_by']) ? $data['fulfilled_by'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['earliest_ship_utc_date'] = isset($data['earliest_ship_utc_date']) ? $data['earliest_ship_utc_date'] : null;
        $this->container['latest_ship_utc_date'] = isset($data['latest_ship_utc_date']) ? $data['latest_ship_utc_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets contact
     *
     * @return \IMN\Swagger\Client\Model\Person
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \IMN\Swagger\Client\Model\Person $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets relay_id
     *
     * @return string
     */
    public function getRelayId()
    {
        return $this->container['relay_id'];
    }

    /**
     * Sets relay_id
     *
     * @param string $relay_id The company name of The address for this order
     *
     * @return $this
     */
    public function setRelayId($relay_id)
    {
        $this->container['relay_id'] = $relay_id;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \IMN\Swagger\Client\Model\PostalAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \IMN\Swagger\Client\Model\PostalAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price The shipping price of this order
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method The shipping method of this order
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets fulfilled_by
     *
     * @return string
     */
    public function getFulfilledBy()
    {
        return $this->container['fulfilled_by'];
    }

    /**
     * Sets fulfilled_by
     *
     * @param string $fulfilled_by The shipment is fulfilled by
     *
     * @return $this
     */
    public function setFulfilledBy($fulfilled_by)
    {
        $this->container['fulfilled_by'] = $fulfilled_by;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float $tax The shipping tax for this order
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets earliest_ship_utc_date
     *
     * @return \DateTime
     */
    public function getEarliestShipUtcDate()
    {
        return $this->container['earliest_ship_utc_date'];
    }

    /**
     * Sets earliest_ship_utc_date
     *
     * @param \DateTime $earliest_ship_utc_date The UTC date of the earliest ship for this order
     *
     * @return $this
     */
    public function setEarliestShipUtcDate($earliest_ship_utc_date)
    {
        $this->container['earliest_ship_utc_date'] = $earliest_ship_utc_date;

        return $this;
    }

    /**
     * Gets latest_ship_utc_date
     *
     * @return \DateTime
     */
    public function getLatestShipUtcDate()
    {
        return $this->container['latest_ship_utc_date'];
    }

    /**
     * Sets latest_ship_utc_date
     *
     * @param \DateTime $latest_ship_utc_date The UTC date of the latest ship for this order
     *
     * @return $this
     */
    public function setLatestShipUtcDate($latest_ship_utc_date)
    {
        $this->container['latest_ship_utc_date'] = $latest_ship_utc_date;

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

