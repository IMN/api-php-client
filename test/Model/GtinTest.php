<?php
/**
 * GtinTest
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
 * Please update the test case below to test the model.
 */

namespace IMN\Swagger\Client;

/**
 * GtinTest Class Doc Comment
 *
 * @category    Class */
// * @description Global Trade Item Number (GTIN) of the item. Supported values:  - UPC (in North America / GTIN-12) 12-digit number like 323456789012 8-digit UPC-E codes should be converted to 12-digit codes - EAN (in Europe / GTIN-13) 13-digit number like 3001234567892 - JAN (in Japan / GTIN-13) 8 or 13-digit number like 49123456 or 4901234567894 - ISBN (for books) 10 or 13-digit number like 1455582344 or 978-1455582341. If you have both, only include the 13-digit number. ISBN-10 are deprecated and should be converted to ISBN-13 - ITF-14 (for multipacks / GTIN-14) 14-digit number like 10856435001702  Schema.org property: - [Offer.gtin8](http://schema.org/gtin8) - [Offer.gtin12](http://schema.org/gtin12) - [Offer.gtin13](http://schema.org/gtin13) - [Offer.gtin14](http://schema.org/gtin14) - [Offer.isbn](http://schema.org/isbn)
/**
 * @package     IMN\Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GtinTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
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
     * Test "Gtin"
     */
    public function testGtin()
    {
    }
}
