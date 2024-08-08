<?php


namespace ShipStream\SpsCommerce\HttpClient;

use GuzzleHttp\ClientInterface;
use JsonException;
use Psr\Http\Message\ResponseInterface;
use stdClass;

class PackingSlipApi
{
    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param Configuration $config
     */
    public function __construct(
        Configuration $config,
        ClientInterface $client = null
    )
    {
        $this->config = $config;
        $this->client = $client ? $this->config->applyClientHandler($client) : $this->config->getHttpClient();
    }


    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws JsonException
     */
    public function getPackingSlips($queryParams = null): stdClass
    {
        $payload = null;
        $resourcePath = '/packing-slip/v1/';
        $response = $this->client->get($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $slip_id
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws JsonException
     */
    public function getPackingSlipById(string $slip_id, $queryParams = null): stdClass
    {
        $payload = null;
        $resourcePath = '/packing-slip/v1/{slip-id}';
        $resourcePath = str_replace(
            '{' . 'slip-id' . '}',
            $slip_id,
            $resourcePath
        );

        $response = $this->client->get($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $slip_id
     * @param null $queryParams
     * @return string
     * @throws ApiException
     */
    public function getPackingSlipSchema(string $slip_id, $queryParams = null): string
    {
        $payload = null;
        $resourcePath = '/packing-slip/v1/{slip-id}/schema';
        $resourcePath = str_replace(
            '{' . 'slip-id' . '}',
            $slip_id,
            $resourcePath
        );

        $response = $this->client->get($payload, $resourcePath, $queryParams);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $slip_id
     * @param null $queryParams
     * @return string
     * @throws ApiException
     */
    public function getPackingSlipSampleJson(string $slip_id, $queryParams = null): string
    {
        $payload = null;
        $resourcePath = '/packing-slip/v1/{slip-id}/sample-json';
        $resourcePath = str_replace(
            '{' . 'slip-id' . '}',
            $slip_id,
            $resourcePath
        );

        $response = $this->client->get($payload, $resourcePath, $queryParams);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $slip_id
     * @param null $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderPackingSlipSamplePdf(string $slip_id, $queryParams = null): string
    {
        $payload = null;
        $resourcePath = '/packing-slip/v1/{slip-id}/sample-pdf';
        $resourcePath = str_replace(
            '{' . 'slip-id' . '}',
            $slip_id,
            $resourcePath
        );

        $response = $this->client->get($payload, $resourcePath, $queryParams);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $slip_id
     * @param string $sample_uid
     * @param $queryParams
     * @return string
     * @throws ApiException
     * @throws JsonException
     */
    public function renderSpecificPackingSlipSamplePdf(string $slip_id, string $sample_uid, $queryParams = null): string
    {
        $payload = null;
        $resourcePath = '/packing-slip/v1/{slip-id}/sample/{sample-uid}/sample-pdf';
        $resourcePath = str_replace(
            '{' . 'slip-id' . '}',
            $slip_id,
            $resourcePath
        );
        $resourcePath = str_replace(
            '{' . 'sample-uid' . '}',
            $sample_uid,
            $resourcePath
        );

        $response = $this->client->get($payload, $resourcePath, $queryParams);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $slip_id
     * @param $payload
     * @param null $queryParams
     * @return stdClass|string
     * @throws ApiException
     * @throws JsonException
     */
    public function renderPackingSlipPdf(string $slip_id, $payload, $queryParams = null)
    {
        $resourcePath = '/packing-slip/v1/{slip-id}/pdf';
        $resourcePath = str_replace(
            '{' . 'slip-id' . '}',
            $slip_id,
            $resourcePath
        );

        $response = $this->client->post($payload, $resourcePath, $queryParams);
        if (isset($queryParams['url']) && $queryParams['url']) {
            return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
        } else {
            return $response->getBody()->getContents();
        }

    }
}