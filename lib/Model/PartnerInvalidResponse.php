<?php
/**
 * PartnerInvalidResponse
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
 * PartnerInvalidResponse Class Doc Comment
 *
 * @category Class
 * @description The partner http response is invalid
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PartnerInvalidResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'partnerInvalidResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'correlation_id' => '\IMN\Swagger\Client\Model\CorrelationId',
        'marketplace_code' => '\IMN\Swagger\Client\Model\MarketplaceCode',
        'merchant_code' => '\IMN\Swagger\Client\Model\MerchantCode',
        'exception_message' => 'string',
        'operation_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'correlation_id' => null,
        'marketplace_code' => null,
        'merchant_code' => null,
        'exception_message' => null,
        'operation_name' => null
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
        'correlation_id' => 'correlationId',
        'marketplace_code' => 'marketplaceCode',
        'merchant_code' => 'merchantCode',
        'exception_message' => 'exceptionMessage',
        'operation_name' => 'operationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'correlation_id' => 'setCorrelationId',
        'marketplace_code' => 'setMarketplaceCode',
        'merchant_code' => 'setMerchantCode',
        'exception_message' => 'setExceptionMessage',
        'operation_name' => 'setOperationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'correlation_id' => 'getCorrelationId',
        'marketplace_code' => 'getMarketplaceCode',
        'merchant_code' => 'getMerchantCode',
        'exception_message' => 'getExceptionMessage',
        'operation_name' => 'getOperationName'
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
        $this->container['correlation_id'] = isset($data['correlation_id']) ? $data['correlation_id'] : null;
        $this->container['marketplace_code'] = isset($data['marketplace_code']) ? $data['marketplace_code'] : null;
        $this->container['merchant_code'] = isset($data['merchant_code']) ? $data['merchant_code'] : null;
        $this->container['exception_message'] = isset($data['exception_message']) ? $data['exception_message'] : null;
        $this->container['operation_name'] = isset($data['operation_name']) ? $data['operation_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['correlation_id'] === null) {
            $invalidProperties[] = "'correlation_id' can't be null";
        }
        if ($this->container['marketplace_code'] === null) {
            $invalidProperties[] = "'marketplace_code' can't be null";
        }
        if ($this->container['merchant_code'] === null) {
            $invalidProperties[] = "'merchant_code' can't be null";
        }
        if ($this->container['exception_message'] === null) {
            $invalidProperties[] = "'exception_message' can't be null";
        }
        if ($this->container['operation_name'] === null) {
            $invalidProperties[] = "'operation_name' can't be null";
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

        if ($this->container['correlation_id'] === null) {
            return false;
        }
        if ($this->container['marketplace_code'] === null) {
            return false;
        }
        if ($this->container['merchant_code'] === null) {
            return false;
        }
        if ($this->container['exception_message'] === null) {
            return false;
        }
        if ($this->container['operation_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets correlation_id
     *
     * @return \IMN\Swagger\Client\Model\CorrelationId
     */
    public function getCorrelationId()
    {
        return $this->container['correlation_id'];
    }

    /**
     * Sets correlation_id
     *
     * @param \IMN\Swagger\Client\Model\CorrelationId $correlation_id correlation_id
     *
     * @return $this
     */
    public function setCorrelationId($correlation_id)
    {
        $this->container['correlation_id'] = $correlation_id;

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
     * Gets exception_message
     *
     * @return string
     */
    public function getExceptionMessage()
    {
        return $this->container['exception_message'];
    }

    /**
     * Sets exception_message
     *
     * @param string $exception_message exception_message
     *
     * @return $this
     */
    public function setExceptionMessage($exception_message)
    {
        $this->container['exception_message'] = $exception_message;

        return $this;
    }

    /**
     * Gets operation_name
     *
     * @return string
     */
    public function getOperationName()
    {
        return $this->container['operation_name'];
    }

    /**
     * Sets operation_name
     *
     * @param string $operation_name operation_name
     *
     * @return $this
     */
    public function setOperationName($operation_name)
    {
        $this->container['operation_name'] = $operation_name;

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


