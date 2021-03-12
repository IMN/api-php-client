<?php
/**
 * OffersPublicationStatus
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
 * OffersPublicationStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the offer publication to the target marketplace
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OffersPublicationStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'offersPublicationStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_integration_status' => '\IMN\Swagger\Client\Model\MarketplaceApiIntegrationStatus',
        'publishable_offer_count' => 'int',
        'published_offer_count' => 'int',
        'last_publication_utc_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_integration_status' => null,
        'publishable_offer_count' => 'int32',
        'published_offer_count' => 'int32',
        'last_publication_utc_date' => 'date-time'
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
        'api_integration_status' => 'apiIntegrationStatus',
        'publishable_offer_count' => 'publishableOfferCount',
        'published_offer_count' => 'publishedOfferCount',
        'last_publication_utc_date' => 'lastPublicationUtcDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_integration_status' => 'setApiIntegrationStatus',
        'publishable_offer_count' => 'setPublishableOfferCount',
        'published_offer_count' => 'setPublishedOfferCount',
        'last_publication_utc_date' => 'setLastPublicationUtcDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_integration_status' => 'getApiIntegrationStatus',
        'publishable_offer_count' => 'getPublishableOfferCount',
        'published_offer_count' => 'getPublishedOfferCount',
        'last_publication_utc_date' => 'getLastPublicationUtcDate'
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
        $this->container['api_integration_status'] = isset($data['api_integration_status']) ? $data['api_integration_status'] : null;
        $this->container['publishable_offer_count'] = isset($data['publishable_offer_count']) ? $data['publishable_offer_count'] : null;
        $this->container['published_offer_count'] = isset($data['published_offer_count']) ? $data['published_offer_count'] : null;
        $this->container['last_publication_utc_date'] = isset($data['last_publication_utc_date']) ? $data['last_publication_utc_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['api_integration_status'] === null) {
            $invalidProperties[] = "'api_integration_status' can't be null";
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

        if ($this->container['api_integration_status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets api_integration_status
     *
     * @return \IMN\Swagger\Client\Model\MarketplaceApiIntegrationStatus
     */
    public function getApiIntegrationStatus()
    {
        return $this->container['api_integration_status'];
    }

    /**
     * Sets api_integration_status
     *
     * @param \IMN\Swagger\Client\Model\MarketplaceApiIntegrationStatus $api_integration_status api_integration_status
     *
     * @return $this
     */
    public function setApiIntegrationStatus($api_integration_status)
    {
        $this->container['api_integration_status'] = $api_integration_status;

        return $this;
    }

    /**
     * Gets publishable_offer_count
     *
     * @return int
     */
    public function getPublishableOfferCount()
    {
        return $this->container['publishable_offer_count'];
    }

    /**
     * Sets publishable_offer_count
     *
     * @param int $publishable_offer_count NULL - NOT AVAILABLE FOR NOW - The publishable offer count for this target marketplace (considering the product matching)
     *
     * @return $this
     */
    public function setPublishableOfferCount($publishable_offer_count)
    {
        $this->container['publishable_offer_count'] = $publishable_offer_count;

        return $this;
    }

    /**
     * Gets published_offer_count
     *
     * @return int
     */
    public function getPublishedOfferCount()
    {
        return $this->container['published_offer_count'];
    }

    /**
     * Sets published_offer_count
     *
     * @param int $published_offer_count NULL - NOT AVAILABLE FOR NOW - The published offer count to this target marketplace
     *
     * @return $this
     */
    public function setPublishedOfferCount($published_offer_count)
    {
        $this->container['published_offer_count'] = $published_offer_count;

        return $this;
    }

    /**
     * Gets last_publication_utc_date
     *
     * @return \DateTime
     */
    public function getLastPublicationUtcDate()
    {
        return $this->container['last_publication_utc_date'];
    }

    /**
     * Sets last_publication_utc_date
     *
     * @param \DateTime $last_publication_utc_date The last synchronization of the offers from the source marketplace
     *
     * @return $this
     */
    public function setLastPublicationUtcDate($last_publication_utc_date)
    {
        $this->container['last_publication_utc_date'] = $last_publication_utc_date;

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


