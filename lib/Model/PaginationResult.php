<?php
/**
 * PaginationResult
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
 * PaginationResult Class Doc Comment
 *
 * @category Class
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaginationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'paginationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entry_count' => 'int',
        'page_count' => 'int',
        'total_entry_count' => 'int',
        'links' => '\IMN\Swagger\Client\Model\PaginationResultLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entry_count' => null,
        'page_count' => null,
        'total_entry_count' => null,
        'links' => null
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
        'entry_count' => 'entryCount',
        'page_count' => 'pageCount',
        'total_entry_count' => 'totalEntryCount',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entry_count' => 'setEntryCount',
        'page_count' => 'setPageCount',
        'total_entry_count' => 'setTotalEntryCount',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entry_count' => 'getEntryCount',
        'page_count' => 'getPageCount',
        'total_entry_count' => 'getTotalEntryCount',
        'links' => 'getLinks'
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
        $this->container['entry_count'] = isset($data['entry_count']) ? $data['entry_count'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['total_entry_count'] = isset($data['total_entry_count']) ? $data['total_entry_count'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['entry_count'] === null) {
            $invalidProperties[] = "'entry_count' can't be null";
        }
        if (($this->container['entry_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'entry_count', must be bigger than or equal to 0.";
        }

        if ($this->container['page_count'] === null) {
            $invalidProperties[] = "'page_count' can't be null";
        }
        if (($this->container['page_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'page_count', must be bigger than or equal to 0.";
        }

        if ($this->container['total_entry_count'] === null) {
            $invalidProperties[] = "'total_entry_count' can't be null";
        }
        if (($this->container['total_entry_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_entry_count', must be bigger than or equal to 0.";
        }

        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
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

        if ($this->container['entry_count'] === null) {
            return false;
        }
        if ($this->container['entry_count'] < 0) {
            return false;
        }
        if ($this->container['page_count'] === null) {
            return false;
        }
        if ($this->container['page_count'] < 0) {
            return false;
        }
        if ($this->container['total_entry_count'] === null) {
            return false;
        }
        if ($this->container['total_entry_count'] < 0) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets entry_count
     *
     * @return int
     */
    public function getEntryCount()
    {
        return $this->container['entry_count'];
    }

    /**
     * Sets entry_count
     *
     * @param int $entry_count The entry count currently returned
     *
     * @return $this
     */
    public function setEntryCount($entry_count)
    {

        if (($entry_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $entry_count when calling PaginationResult., must be bigger than or equal to 0.');
        }

        $this->container['entry_count'] = $entry_count;

        return $this;
    }

    /**
     * Gets page_count
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     *
     * @param int $page_count The page count
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {

        if (($page_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $page_count when calling PaginationResult., must be bigger than or equal to 0.');
        }

        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets total_entry_count
     *
     * @return int
     */
    public function getTotalEntryCount()
    {
        return $this->container['total_entry_count'];
    }

    /**
     * Sets total_entry_count
     *
     * @param int $total_entry_count The total entry count
     *
     * @return $this
     */
    public function setTotalEntryCount($total_entry_count)
    {

        if (($total_entry_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_entry_count when calling PaginationResult., must be bigger than or equal to 0.');
        }

        $this->container['total_entry_count'] = $total_entry_count;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \IMN\Swagger\Client\Model\PaginationResultLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \IMN\Swagger\Client\Model\PaginationResultLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


