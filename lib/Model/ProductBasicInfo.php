<?php
/**
 * ProductBasicInfo
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
 * ProductBasicInfo Class Doc Comment
 *
 * @category Class
 * @description The basic information related to a product
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'productBasicInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
        'product_sku' => 'string',
        'product_title' => 'string',
        'product_image_url' => 'string',
        'product_exists' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => 'guid',
        'product_sku' => null,
        'product_title' => null,
        'product_image_url' => 'HttpUrl',
        'product_exists' => null
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
        'product_id' => 'productId',
        'product_sku' => 'productSku',
        'product_title' => 'productTitle',
        'product_image_url' => 'productImageUrl',
        'product_exists' => 'productExists'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'product_sku' => 'setProductSku',
        'product_title' => 'setProductTitle',
        'product_image_url' => 'setProductImageUrl',
        'product_exists' => 'setProductExists'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'product_sku' => 'getProductSku',
        'product_title' => 'getProductTitle',
        'product_image_url' => 'getProductImageUrl',
        'product_exists' => 'getProductExists'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_sku'] = isset($data['product_sku']) ? $data['product_sku'] : null;
        $this->container['product_title'] = isset($data['product_title']) ? $data['product_title'] : null;
        $this->container['product_image_url'] = isset($data['product_image_url']) ? $data['product_image_url'] : null;
        $this->container['product_exists'] = isset($data['product_exists']) ? $data['product_exists'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['product_sku'] === null) {
            $invalidProperties[] = "'product_sku' can't be null";
        }
        if ($this->container['product_title'] === null) {
            $invalidProperties[] = "'product_title' can't be null";
        }
        if ($this->container['product_image_url'] === null) {
            $invalidProperties[] = "'product_image_url' can't be null";
        }
        if ($this->container['product_exists'] === null) {
            $invalidProperties[] = "'product_exists' can't be null";
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

        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['product_sku'] === null) {
            return false;
        }
        if ($this->container['product_title'] === null) {
            return false;
        }
        if ($this->container['product_image_url'] === null) {
            return false;
        }
        if ($this->container['product_exists'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The product identifier
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_sku
     *
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     *
     * @param string $product_sku The product SKU
     *
     * @return $this
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }

    /**
     * Gets product_title
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['product_title'];
    }

    /**
     * Sets product_title
     *
     * @param string $product_title The product tile
     *
     * @return $this
     */
    public function setProductTitle($product_title)
    {
        $this->container['product_title'] = $product_title;

        return $this;
    }

    /**
     * Gets product_image_url
     *
     * @return string
     */
    public function getProductImageUrl()
    {
        return $this->container['product_image_url'];
    }

    /**
     * Sets product_image_url
     *
     * @param string $product_image_url The product image Url
     *
     * @return $this
     */
    public function setProductImageUrl($product_image_url)
    {
        $this->container['product_image_url'] = $product_image_url;

        return $this;
    }

    /**
     * Gets product_exists
     *
     * @return bool
     */
    public function getProductExists()
    {
        return $this->container['product_exists'];
    }

    /**
     * Sets product_exists
     *
     * @param bool $product_exists Indicates if the product still exists in your catalog
     *
     * @return $this
     */
    public function setProductExists($product_exists)
    {
        $this->container['product_exists'] = $product_exists;

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


