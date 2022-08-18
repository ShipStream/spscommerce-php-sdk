<?php


namespace ShipStream\SpsCommerce\HttpClient;

use GuzzleHttp\ClientInterface;

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
    public function getAllShippingLabels($queryParams = null)
    {
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/label/v1/';
            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        } catch (InternalServerError|ObjectNotFoundError|ApiException $e) {
            throw $e;
        }
    }


    /**
     * @param $label_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getShippingLabelById($label_id, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling getShippingLabelById'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/label/v1/{label-id}';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getShippingLabelSchema($label_id, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling getShippingLabelSchema'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/label/v1/{label-id}/schema';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getShippingLabelSampleJson($label_id, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling getShippingLabelSampleJson'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/label/v1/{label-id}/sample-json';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderShippingLabelSamplePdf($label_id, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling renderDefualtSampleShippingLabelPDF'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/label/v1/{label-id}/sample-pdf';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderSpecificShippingLabelSamplePdf($label_id, $sample_uid, $queryParams = null)
    {
        // verify the required parameter 'label_id'  & 'sample_uid' are set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0) || $sample_uid== null || (is_array($sample_uid) && count($sample_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id | $sample_uid when calling renderSpecificSampleShippingLabelPDF'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

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

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $payload
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderShippingLabelPdf($label_id, $payload, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling renderShippingLabelPdf'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $resourcePath = '/label/v1/{label-id}/pdf';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->post($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $payload
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderShippingLabelPdfBatch($label_id, $payload, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling renderShippingLabelPdfBatch'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $resourcePath = '/label/v1/{label-id}/pdf/batches';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->post($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $payload
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderShippingLabelZpl($label_id, $payload, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling renderShippingLabelZpl'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $resourcePath = '/label/v1/{label-id}/zpl';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->post($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $label_id
     * @param $payload
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function renderShippingLabelZplBatch($label_id, $payload, $queryParams = null)
    {
        // verify the required parameter 'label_id' is set
        if ($label_id === null || (is_array($label_id) && count($label_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label_id when calling renderShippingLabelZplBatch'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $resourcePath = '/label/v1/{label-id}/zpl/batches';
            $resourcePath = str_replace(
                '{' . 'label-id' . '}',
                $label_id,
                $resourcePath
            );

            $response = $httpClient->post($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }

    /**
     * @param $batchId
     * @param $payload
     * @param $queryParams
     * @return string
     * @throws ApiException
     */
    public function getBatchStatus($batchId, $queryParams = null)
    {
        // verify the required parameter 'batchId' is set
        if ($batchId === null || (is_array($batchId) && count($batchId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batchId when calling getBatchStatus'
            );
        }
        try {
            $httpClient = $this->config->getHttpClient();

            $payload = null;
            $resourcePath = '/label/v1/batches/{batchId}';
            $resourcePath = str_replace(
                '{' . 'batchId' . '}',
                $batchId,
                $resourcePath
            );

            $response = $httpClient->get($payload, $resourcePath, $queryParams);
            return json_decode($response->getBody()->getContents());
        }catch (InternalServerError | ObjectNotFoundError | ApiException $e) {
            throw $e;
        }
    }
}