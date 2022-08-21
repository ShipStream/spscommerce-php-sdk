<?php


namespace ShipStream\SpsCommerce\HttpClient;

use GuzzleHttp\ClientInterface;
use stdClass;

class LabelApi
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
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws \JsonException
     */
    public function getAllShippingLabels($queryParams = null): stdClass
    {
        $payload = null;
        $resourcePath = '/label/v1/';
        $response = $this->config->getHttpClient()->get($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }


    /**
     * @param string $label_id
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws \JsonException
     */
    public function getShippingLabelById(string $label_id, $queryParams = null): stdClass
    {
        $payload = null;
        $resourcePath = '/label/v1/{label-id}';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->get($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $label_id
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws \JsonException
     */
    public function getShippingLabelSchema(string $label_id, $queryParams = null): stdClass
    {
        $payload = null;
        $resourcePath = '/label/v1/{label-id}/schema';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->get($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $label_id
     * @param null $queryParams
     * @return string
     * @throws ApiException
     * @throws \JsonException
     */
    public function getShippingLabelSampleJson(string $label_id, $queryParams = null): string
    {
        $payload = null;
        $resourcePath = '/label/v1/{label-id}/sample-json';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->get($payload, $resourcePath, $queryParams);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $label_id
     * @param null $queryParams
     * @return string
     * @throws ApiException
     * @throws \JsonException
     */
    public function renderShippingLabelSamplePdf(string $label_id, $queryParams = null): string
    {
        $payload = null;
        $resourcePath = '/label/v1/{label-id}/sample-pdf';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->get($payload, $resourcePath, $queryParams);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $label_id
     * @param string $sample_uid
     * @param null $queryParams
     * @return string
     * @throws ApiException
     * @throws \JsonException
     */
    public function renderSpecificShippingLabelSamplePdf(string $label_id, string $sample_uid, $queryParams = null): string
    {
        $payload = null;
        $resourcePath = '/label/v1/{label-id}/sample/{sample-uid}/sample-pdf';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );
        $resourcePath = str_replace(
            '{' . 'sample-uid' . '}',
            $sample_uid,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->get($payload, $resourcePath, $queryParams);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $label_id
     * @param $payload
     * @param null $queryParams
     * @return stdClass|string
     * @throws ApiException
     * @throws \JsonException
     */
    public function renderShippingLabelPdf(string $label_id, $payload, $queryParams = null)
    {
        $resourcePath = '/label/v1/{label-id}/pdf';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->post($payload, $resourcePath, $queryParams);
        if (isset($queryParams['url']) && $queryParams['url']) {
            return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
        } else {
            return $response->getBody()->getContents();
        }
    }

    /**
     * @param string $label_id
     * @param $payload
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws \JsonException
     */
    public function renderShippingLabelPdfBatch(string $label_id, $payload, $queryParams = null): stdClass
    {
        $resourcePath = '/label/v1/{label-id}/pdf/batches';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->post($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $label_id
     * @param $payload
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws \JsonException
     */
    public function renderShippingLabelZpl(string $label_id, $payload, $queryParams = null): stdClass
    {
        $resourcePath = '/label/v1/{label-id}/zpl';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->post($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $label_id
     * @param $payload
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws \JsonException
     */
    public function renderShippingLabelZplBatch(string $label_id, $payload, $queryParams = null): stdClass
    {
        $resourcePath = '/label/v1/{label-id}/zpl/batches';
        $resourcePath = str_replace(
            '{' . 'label-id' . '}',
            $label_id,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->post($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $batchId
     * @param null $queryParams
     * @return stdClass
     * @throws ApiException
     * @throws \JsonException
     */
    public function getBatchStatus(string $batchId, $queryParams = null): stdClass
    {
        $payload = null;
        $resourcePath = '/label/v1/batches/{batchId}';
        $resourcePath = str_replace(
            '{' . 'batchId' . '}',
            $batchId,
            $resourcePath
        );

        $response = $this->config->getHttpClient()->get($payload, $resourcePath, $queryParams);
        return json_decode($response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }
}