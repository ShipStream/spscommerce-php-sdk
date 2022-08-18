<?php


namespace ShipStream\SpsCommerce\HttpClient;

use GuzzleHttp\ClientInterface;

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
        $this->client = $client ? $client : $config->getHttpClient();
    }


    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param $payload
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getPackingSlips($queryParams = null)
    {
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/packing-slip/v1/';
            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        } catch (InternalServerError|ObjectNotFoundError|ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $slip_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getPackingSlipById($slip_id, $queryParams = null)
    {
        // verify the required parameter 'slip_id' is set
        if ($slip_id === null || (is_array($slip_id) && count($slip_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $slip_id when calling getPackingSlipById'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/packing-slip/v1/{slip-id}';
            $resourcePath = str_replace(
                '{' . 'slip-id' . '}',
                $slip_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $slip_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getPackingSlipSchema($slip_id, $queryParams = null)
    {
        // verify the required parameter 'slip_id' is set
        if ($slip_id === null || (is_array($slip_id) && count($slip_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $slip_id when calling getPackingSlipSchema'
            );
        }

        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/packing-slip/v1/{slip-id}/schema';
            $resourcePath = str_replace(
                '{' . 'slip-id' . '}',
                $slip_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $slip_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getPackingSlipSampleJson($slip_id, $queryParams = null)
    {
        // verify the required parameter 'slip_id' is set
        if ($slip_id === null || (is_array($slip_id) && count($slip_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $slip_id when calling getPackingSlipSampleJson'
            );
        }

        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/packing-slip/v1/{slip-id}/sample-json';
            $resourcePath = str_replace(
                '{' . 'slip-id' . '}',
                $slip_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return $response->getBody()->getContents();
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $slip_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderPackingSlipSamplePdf($slip_id, $queryParams = null)
    {
        // verify the required parameter 'slip_id' is set
        if ($slip_id === null || (is_array($slip_id) && count($slip_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $slip_id when calling renderPackingSlipSamplePdf'
            );
        }

        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/packing-slip/v1/{slip-id}/sample-pdf';
            $resourcePath = str_replace(
                '{' . 'slip-id' . '}',
                $slip_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return $response->getBody()->getContents();
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $slip_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderSpecificPackingSlipSamplePdf($slip_id, $sample_uid, $queryParams = null)
    {
        // verify the required parameter 'label_id'  & 'sample_uid' are set
        if ($slip_id === null || (is_array($slip_id) && count($slip_id) === 0) || $sample_uid== null || (is_array($sample_uid) && count($sample_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $slip_id | $sample_uid when calling renderSpecificPackingSlipSamplePdf'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

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

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return $response->getBody()->getContents();
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $slip_id
     * @param $payload
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderPackingSlipPdf($slip_id, $payload, $queryParams = null)
    {
        // verify the required parameter 'slip_id' is set
        if ($slip_id === null || (is_array($slip_id) && count($slip_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $slip_id when calling renderPackingSlipPdf'
            );
        }

        try {
            $httpClient = $this->config->getHttpClient();

            $resourcePath = '/packing-slip/v1/{slip-id}/pdf';
            $resourcePath = str_replace(
                '{' . 'slip-id' . '}',
                $slip_id,
                $resourcePath
            );

            $response = $httpClient->post($payload, $resourcePath, $queryParams);
            return $response->getBody()->getContents();
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }
}