<?php
namespace  ShipStream\SpsCommerce\Tests;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;

class TransactionApiTest extends TestCase
{

    /**
     * Get JSON response data of API `https://api.spscommerce.com/transactions/v5/data/out/?limit=200&cursor=1iV7qUkBbZVTXiHkle&entryNamePrefix=CA`
     * @throws Exception
     * @throws GuzzleException
     */
    function testGetPackingSlipSampleJson()
    {
        $statusCode = 200;
        $headers  = ['Content-Type' => 'application/json'];
        $mock = new MockHandler([
            new Response($statusCode, $headers, file_get_contents(__DIR__ . '/fixtures/transactions.json'))
        ]);
        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);

        $requestResponse = $client->request("GET", '/');
        $this->assertIsObject($requestResponse);
        $data = json_decode($requestResponse->getBody()->getContents());
        $this->assertEquals(1000, $data->paging->limit);
        $this->assertEquals("1iV7qUkBbZVTXiHkle", $data->paging->next->cursor);
        $this->assertEquals("/out/CA584615-1-v7.7-BulkImport.xml", $data->results[0]->path);
        $this->assertEquals("file", $data->results[0]->type);
        $this->assertEquals(["application/json"], $requestResponse->getHeader('Content-Type'));
        $this->assertInstanceOf('GuzzleHttp\\Psr7\\Response', $requestResponse);
        $this->assertEquals(200, $requestResponse->getStatusCode());

    }
}