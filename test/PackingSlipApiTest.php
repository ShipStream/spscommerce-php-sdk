<?php
namespace  ShipStream\SpsCommerce\Tests;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;
use ShipStream\SpsCommerce\HttpClient\Configuration;
use ShipStream\SpsCommerce\HttpClient\DefaultApi;
use ShipStream\SpsCommerce\HttpClient\PackingSlipApi;

class PackingSlipApiTest extends TestCase
{

    /**
     * Get JSON response data of API `https://api.spscommerce.com/packing-slip/v1/f6g81b36/sample-json`
     * @throws Exception
     * @throws GuzzleException
     */
    function testGetPackingSlipSampleJson()
    {
        $statusCode = 200;
        $headers  = ['Content-Type' => 'application/json'];
        $mock = new MockHandler([
            new Response($statusCode, $headers, file_get_contents(__DIR__ . '/fixtures/packing_slip_sample.json')),
        ]);
        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);
        $spsClient = new DefaultApi('access_token', ['http_client' => $client]);
        $stub = $this->getMockBuilder(PackingSlipApi::class)->setConstructorArgs([$spsClient])->onlyMethods([])->getMock();
        
        $data = $stub->getPackingSlips();
        $this->assertEquals("Minneapolis", $data->Header->Address[0]->City);
        $this->assertEquals("SF", $data->Header->Address[0]->AddressTypeCode);
        $this->assertEquals("00001234560014762261", $data->Pack[0]->ShippingSerialID);
    }
}