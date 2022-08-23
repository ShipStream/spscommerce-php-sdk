<?php
namespace  ShipStream\SpsCommerce\Tests;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;

class PackingSlipApiTest extends TestCase
{

    /**
     * @test
     *
     * Get JSON response data of API `https://api.spscommerce.com/packing-slip/v1/f6g81b36/sample-json`
     * @throws Exception
     * @throws GuzzleException
     */
    function testGetPackingSlipSampleJson()
    {
        $statusCode = 200;
        $headers  = ['Content-Type' => 'application/json'];
        $mock = new MockHandler([
            new Response($statusCode, $headers, file_get_contents(__DIR__ . '/fixtures/packing_slip_sample.json'))
        ]);
        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);

        $requestResponse = $client->request("GET", '/');
        $data = json_decode($requestResponse->getBody()->getContents());
        $this->assertEquals(true, is_object($requestResponse));
        $this->assertEquals("Minneapolis", $data->Header->Address->City);
        $this->assertEquals("SF", $data->Header->Address->AddressTypeCode);
        $this->assertEquals("ok", $data->status);
        $this->assertEquals("00001234560014762261", $data->Pack[0]->ShippingSerialID);
        $this->assertEquals("application/json", $requestResponse->getHeader('Content-Type'));
        $this->assertInstanceOf('GuzzleHttp\\Psr7\\Response', $requestResponse);
        $this->assertEquals(200, $requestResponse->getStatusCode());

    }
}