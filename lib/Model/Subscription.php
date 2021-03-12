<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @description The subscription definition
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '\IMN\Swagger\Client\Model\SubscriptionId',
        'status' => '\IMN\Swagger\Client\Model\SubscriptionStatus',
        'target_url' => '\IMN\Swagger\Client\Model\HttpUrl',
        'name' => '\IMN\Swagger\Client\Model\SubscriptionName',
        'application_name' => '\IMN\Swagger\Client\Model\SubscriptionApplicationName',
        'application_version' => '\IMN\Swagger\Client\Model\SubscriptionApplicationVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'status' => null,
        'target_url' => null,
        'name' => null,
        'application_name' => null,
        'application_version' => null
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
        'id' => 'id',
        'status' => 'status',
        'target_url' => 'targetUrl',
        'name' => 'name',
        'application_name' => 'applicationName',
        'application_version' => 'applicationVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'target_url' => 'setTargetUrl',
        'name' => 'setName',
        'application_name' => 'setApplicationName',
        'application_version' => 'setApplicationVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'target_url' => 'getTargetUrl',
        'name' => 'getName',
        'application_name' => 'getApplicationName',
        'application_version' => 'getApplicationVersion'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['target_url'] = isset($data['target_url']) ? $data['target_url'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['application_name'] = isset($data['application_name']) ? $data['application_name'] : null;
        $this->container['application_version'] = isset($data['application_version']) ? $data['application_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['target_url'] === null) {
            $invalidProperties[] = "'target_url' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['application_name'] === null) {
            $invalidProperties[] = "'application_name' can't be null";
        }
        if ($this->container['application_version'] === null) {
            $invalidProperties[] = "'application_version' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['target_url'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['application_name'] === null) {
            return false;
        }
        if ($this->container['application_version'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return \IMN\Swagger\Client\Model\SubscriptionId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \IMN\Swagger\Client\Model\SubscriptionId $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \IMN\Swagger\Client\Model\SubscriptionStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \IMN\Swagger\Client\Model\SubscriptionStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets target_url
     *
     * @return \IMN\Swagger\Client\Model\HttpUrl
     */
    public function getTargetUrl()
    {
        return $this->container['target_url'];
    }

    /**
     * Sets target_url
     *
     * @param \IMN\Swagger\Client\Model\HttpUrl $target_url target_url
     *
     * @return $this
     */
    public function setTargetUrl($target_url)
    {
        $this->container['target_url'] = $target_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \IMN\Swagger\Client\Model\SubscriptionName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \IMN\Swagger\Client\Model\SubscriptionName $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets application_name
     *
     * @return \IMN\Swagger\Client\Model\SubscriptionApplicationName
     */
    public function getApplicationName()
    {
        return $this->container['application_name'];
    }

    /**
     * Sets application_name
     *
     * @param \IMN\Swagger\Client\Model\SubscriptionApplicationName $application_name application_name
     *
     * @return $this
     */
    public function setApplicationName($application_name)
    {
        $this->container['application_name'] = $application_name;

        return $this;
    }

    /**
     * Gets application_version
     *
     * @return \IMN\Swagger\Client\Model\SubscriptionApplicationVersion
     */
    public function getApplicationVersion()
    {
        return $this->container['application_version'];
    }

    /**
     * Sets application_version
     *
     * @param \IMN\Swagger\Client\Model\SubscriptionApplicationVersion $application_version application_version
     *
     * @return $this
     */
    public function setApplicationVersion($application_version)
    {
        $this->container['application_version'] = $application_version;

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


