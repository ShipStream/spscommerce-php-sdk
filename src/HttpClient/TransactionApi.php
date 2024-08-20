<?php


namespace ShipStream\SpsCommerce\HttpClient;

use JsonException;
use Psr\Http\Message\ResponseInterface;
use stdClass;

class TransactionApi
{
    private DefaultApi $client;

    public function __construct(DefaultApi $client = null)
    {
        $this->client = $client;
    }

    /**
     * @param string $file_path
     * @param $headers
     * @param $payload
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws JsonException
     */
    public function createTransaction(string $file_path, $headers, $payload, $queryParams = null): stdClass
    {
        // The only allowed Content-Type header value is application/octet-stream
        $headers['Content-Type'] ='application/octet-stream';
        $resourcePath = '/transactions/v5/data/{file-path}';
        $resourcePath = str_replace(
            '{' . 'file-path' . '}',
            $file_path,
            $resourcePath
        );

        $response =  $this->sendHttpRequest("POST", $payload, $resourcePath, $queryParams, $headers);
        return json_decode($response->getBody(), null, 512, JSON_THROW_ON_ERROR);
    }


    /**
     * @param string $directory_path
     * @param $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws JsonException
     */
    public function filterTransactions(string $directory_path, $queryParams = null): stdClass
    {
        $resourcePath = '/transactions/v5/data/{directory-path}';
        $resourcePath = str_replace(
            '{' . 'directory-path' . '}',
            $directory_path,
            $resourcePath
        );

        $response =  $this->sendHttpRequest("GET", null, $resourcePath, $queryParams, []);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $file_path
     * @param null $queryParams
     * @return string
     * @throws ApiException
     * @throws JsonException
     */
    public function getTransaction(string $file_path, $queryParams = null): string
    {
        $resourcePath = '/transactions/v5/data/{file-path}';
        $resourcePath = str_replace(
            '{' . 'file-path' . '}',
            $file_path,
            $resourcePath
        );

        $response =  $this->sendHttpRequest("GET", null, $resourcePath, $queryParams, []);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $file_path
     * @param null $queryParams
     * @return string
     * @throws ApiException
     */
    public function deleteTransaction(string $file_path, $queryParams = null): string
    {
        $resourcePath = '/transactions/v5/data/{file-path}';
        $resourcePath = str_replace(
            '{' . 'file-path' . '}',
            $file_path,
            $resourcePath
        );

        $response =  $this->sendHttpRequest("DELETE", null, $resourcePath, $queryParams, []);
        return $response->getStatusCode();
    }

    /**
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws JsonException
     */
    public function viewInteractionHistory($queryParams = null): stdClass
    {
        $response =  $this->sendHttpRequest("GET", null, '/transactions/v5/history', $queryParams, []);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param $method
     * @param $payload
     * @param $resourcePath
     * @param $queryParams
     * @param array $headers
     * @return ResponseInterface
     * @throws ApiException
     */
    protected function sendHttpRequest($method, $payload, $resourcePath, $queryParams, array $headers = []): ResponseInterface
    {
        switch ($method) {
            case "POST":
                return $this->client->post($payload, $resourcePath, $queryParams, $headers);
            case "PUT":
                return $this->client->put($payload, $resourcePath, $queryParams, $headers);
            case "DELETE":
                return $this->client->delete($payload, $resourcePath, $queryParams, $headers);
            default:
                return $this->client->get($payload, $resourcePath, $queryParams, $headers);
        }
    }
}