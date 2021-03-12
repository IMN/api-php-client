<?php
/**
 * LinksGetMarketplaceApiCredentialLink
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
 * LinksGetMarketplaceApiCredentialLink Class Doc Comment
 *
 * @category Class
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinksGetMarketplaceApiCredentialLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'links.GetMarketplaceApiCredentialLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string',
        'doc_url' => '\IMN\Swagger\Client\Model\DocUrl',
        'description' => 'string',
        'href' => '\IMN\Swagger\Client\Model\Href',
        'operation_id' => '\IMN\Swagger\Client\Model\OperationId',
        'method' => '\IMN\Swagger\Client\Model\HttpMethod',
        'parameters' => '\IMN\Swagger\Client\Model\LinkParameter3Types',
        'url_templated' => 'bool',
        'all_required_params_provided' => 'bool',
        'all_optional_params_provided' => 'bool',
        'info' => '\IMN\Swagger\Client\Model\InfoSummaries'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
        'doc_url' => null,
        'description' => null,
        'href' => null,
        'operation_id' => null,
        'method' => null,
        'parameters' => null,
        'url_templated' => null,
        'all_required_params_provided' => null,
        'all_optional_params_provided' => null,
        'info' => null
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
        'label' => 'label',
        'doc_url' => 'docUrl',
        'description' => 'description',
        'href' => 'href',
        'operation_id' => 'operationId',
        'method' => 'method',
        'parameters' => 'parameters',
        'url_templated' => 'urlTemplated',
        'all_required_params_provided' => 'allRequiredParamsProvided',
        'all_optional_params_provided' => 'allOptionalParamsProvided',
        'info' => 'info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'doc_url' => 'setDocUrl',
        'description' => 'setDescription',
        'href' => 'setHref',
        'operation_id' => 'setOperationId',
        'method' => 'setMethod',
        'parameters' => 'setParameters',
        'url_templated' => 'setUrlTemplated',
        'all_required_params_provided' => 'setAllRequiredParamsProvided',
        'all_optional_params_provided' => 'setAllOptionalParamsProvided',
        'info' => 'setInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'doc_url' => 'getDocUrl',
        'description' => 'getDescription',
        'href' => 'getHref',
        'operation_id' => 'getOperationId',
        'method' => 'getMethod',
        'parameters' => 'getParameters',
        'url_templated' => 'getUrlTemplated',
        'all_required_params_provided' => 'getAllRequiredParamsProvided',
        'all_optional_params_provided' => 'getAllOptionalParamsProvided',
        'info' => 'getInfo'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['doc_url'] = isset($data['doc_url']) ? $data['doc_url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['operation_id'] = isset($data['operation_id']) ? $data['operation_id'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['url_templated'] = isset($data['url_templated']) ? $data['url_templated'] : null;
        $this->container['all_required_params_provided'] = isset($data['all_required_params_provided']) ? $data['all_required_params_provided'] : null;
        $this->container['all_optional_params_provided'] = isset($data['all_optional_params_provided']) ? $data['all_optional_params_provided'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['href'] === null) {
            $invalidProperties[] = "'href' can't be null";
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

        if ($this->container['href'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The label corresponding to the link. This label is automatically translated based on the Accept-Language http header.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets doc_url
     *
     * @return \IMN\Swagger\Client\Model\DocUrl
     */
    public function getDocUrl()
    {
        return $this->container['doc_url'];
    }

    /**
     * Sets doc_url
     *
     * @param \IMN\Swagger\Client\Model\DocUrl $doc_url doc_url
     *
     * @return $this
     */
    public function setDocUrl($doc_url)
    {
        $this->container['doc_url'] = $doc_url;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the link
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets href
     *
     * @return \IMN\Swagger\Client\Model\Href
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param \IMN\Swagger\Client\Model\Href $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return \IMN\Swagger\Client\Model\OperationId
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param \IMN\Swagger\Client\Model\OperationId $operation_id operation_id
     *
     * @return $this
     */
    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \IMN\Swagger\Client\Model\HttpMethod
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \IMN\Swagger\Client\Model\HttpMethod $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \IMN\Swagger\Client\Model\LinkParameter3Types
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \IMN\Swagger\Client\Model\LinkParameter3Types $parameters parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets url_templated
     *
     * @return bool
     */
    public function getUrlTemplated()
    {
        return $this->container['url_templated'];
    }

    /**
     * Sets url_templated
     *
     * @param bool $url_templated indicates whether the href is templated or not
     *
     * @return $this
     */
    public function setUrlTemplated($url_templated)
    {
        $this->container['url_templated'] = $url_templated;

        return $this;
    }

    /**
     * Gets all_required_params_provided
     *
     * @return bool
     */
    public function getAllRequiredParamsProvided()
    {
        return $this->container['all_required_params_provided'];
    }

    /**
     * Sets all_required_params_provided
     *
     * @param bool $all_required_params_provided indicates whether all required params have been provided
     *
     * @return $this
     */
    public function setAllRequiredParamsProvided($all_required_params_provided)
    {
        $this->container['all_required_params_provided'] = $all_required_params_provided;

        return $this;
    }

    /**
     * Gets all_optional_params_provided
     *
     * @return bool
     */
    public function getAllOptionalParamsProvided()
    {
        return $this->container['all_optional_params_provided'];
    }

    /**
     * Sets all_optional_params_provided
     *
     * @param bool $all_optional_params_provided indicates whether all optionals params have been provided
     *
     * @return $this
     */
    public function setAllOptionalParamsProvided($all_optional_params_provided)
    {
        $this->container['all_optional_params_provided'] = $all_optional_params_provided;

        return $this;
    }

    /**
     * Gets info
     *
     * @return \IMN\Swagger\Client\Model\InfoSummaries
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param \IMN\Swagger\Client\Model\InfoSummaries $info info
     *
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

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

