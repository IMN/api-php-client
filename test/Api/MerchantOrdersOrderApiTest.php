<?php
/**
 * MerchantOrdersOrderApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace IMN\Swagger\Client;

use \IMN\Swagger\Client\Configuration;
use \IMN\Swagger\Client\ApiException;
use \IMN\Swagger\Client\ObjectSerializer;

/**
 * MerchantOrdersOrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  IMN\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantOrdersOrderApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for acceptOrder
     *
     * Accept your marketplace order.
     *
     */
    public function testAcceptOrder()
    {
    }

    /**
     * Test case for cancelOrder
     *
     * Cancel your marketplace order.
     *
     */
    public function testCancelOrder()
    {
    }

    /**
     * Test case for clearMerchantOrderInfo
     *
     * Clear an Order's merchant information.
     *
     */
    public function testClearMerchantOrderInfo()
    {
    }

    /**
     * Test case for getOrder
     *
     * Get full Order and Order Item(s) properties.
     *
     */
    public function testGetOrder()
    {
    }

    /**
     * Test case for getOrderHistory
     *
     * Get an Order's harvest and change history.
     *
     */
    public function testGetOrderHistory()
    {
    }

    /**
     * Test case for headOrder
     *
     * Get the meta information about the order (ETag, Last-Modified).
     *
     */
    public function testHeadOrder()
    {
    }

    /**
     * Test case for refundOrder
     *
     * Refund your marketplace order.
     *
     */
    public function testRefundOrder()
    {
    }

    /**
     * Test case for refuseOrder
     *
     * Refuse your marketplace order.
     *
     */
    public function testRefuseOrder()
    {
    }

    /**
     * Test case for setMerchantOrderInfo
     *
     * Set an Order's merchant information.
     *
     */
    public function testSetMerchantOrderInfo()
    {
    }

    /**
     * Test case for shipOrder
     *
     * Ship your marketplace order.
     *
     */
    public function testShipOrder()
    {
    }

    /**
     * Test case for shipOrderWithTrackingUrl
     *
     * Ship your marketplace order with tracking url.
     *
     */
    public function testShipOrderWithTrackingUrl()
    {
    }
}
