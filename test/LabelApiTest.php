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
use ShipStream\SpsCommerce\HttpClient\LabelApi;

class LabelApiTest extends TestCase
{

    /**
     * Get JSON response of API endpoint `https://api.spscommerce.com/label/v1/`
     * @throws Exception
     * @throws GuzzleException
     */
    function testGetAllShippingLabels()
    {
        $statusCode = 200;
        $headers  = ['Content-Type' => 'application/json', 'Content-Length' => 787];
        $mock = new MockHandler([
            new Response($statusCode, $headers, file_get_contents(__DIR__ . '/fixtures/shipping_label.json')),
        ]);
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);
        $spsClient = new DefaultApi('access_token', ['http_client' => $client]);
        $stub = $this->getMockBuilder(LabelApi::class)->setConstructorArgs([$spsClient])->onlyMethods([])->getMock();
        $data= $stub->getAllShippingLabels();

        $this->assertEquals(2, $data->total);
        $this->assertEquals("ok", $data->status);
        $this->assertEquals("Sample Label - Bulk Import", $data->templates[0]->name);
    }
}