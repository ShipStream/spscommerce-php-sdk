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
        $headers  = ['Content-Type' => 'application/json','Content-Length' => 787];
        $response = new Response($statusCode, $headers, file_get_contents(__DIR__ . '/fixtures/shipping_label.json'));
        $mock = new MockHandler([$response,$response]);
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $config = new Configuration([
            'client_id'=>'',
            'client_secret'=>'',
            'access_token'=>'',
            'state'=>'',
            'redirect_uri'=>'',
        ]);
        $stub = $this->getMockBuilder(LabelApi::class)->setConstructorArgs([$config,$client])->onlyMethods([])->getMock();
        $data= $stub->getAllShippingLabels();

        $requestResponse = $client->request("GET", '/');
        $this->assertIsObject($requestResponse);
        $this->assertEquals(2, $data->total);
        $this->assertEquals("ok", $data->status);
        $this->assertEquals("Sample Label - Bulk Import", $data->templates[0]->name);
        $this->assertEquals([787], $requestResponse->getHeader('Content-Length'));
        $this->assertInstanceOf('GuzzleHttp\\Psr7\\Response', $requestResponse);
        $this->assertEquals(200, $requestResponse->getStatusCode());

    }
}