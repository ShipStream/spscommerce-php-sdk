<?php

namespace ShipStream\SpsCommerce\HttpClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\RedirectMiddleware;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;

class DefaultApi
{
    const DEFAULT_TIMEOUT = 10;
    public $options;

    /** @var Client */
    public $http;
    /**
     * Holds GuzzleHttp timeout.
     *
     * @var int
     */
    private $timeout;

    /**
     * DefaultApi constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->options = $options;
        $this->timeout = $this->options['timeout'] ?? self::DEFAULT_TIMEOUT;
        $this->http = new Client([
            'base_uri' => $this->options['url'],
            'timeout' => $this->timeout,
            'verify' => $this->options['verifySSL'] ?? false,
            'headers' => [
                'Authorization' => "Bearer {$this->options['accessToken']}"
            ],
            'proxy' => $this->options['proxy'] ?? null,
            'allow_redirects' => $this->options['allow_redirects'] ?? RedirectMiddleware::$defaultSettings,
        ]);
    }

    /**
     * @param $payload
     * @param $uriPath
     * @param $queryParams
     * @param array $headers
     * @param int|null $timeout - Float describing the timeout of the request in seconds. Use 0 to wait indefinitely (the default behavior).
     * @param bool $stream - use streaming
     * @return ResponseInterface
     * @throws ApiException
     */
    public function post($payload, $uriPath, $queryParams, array $headers = [], int $timeout = null, bool $stream = false): ResponseInterface
    {
        return $this->request($payload, $uriPath, $queryParams, $headers, 'POST', $timeout, $stream);
    }

    /**
     * @param $payload
     * @param $uriPath
     * @param $queryParams
     * @param array $headers
     * @param int|null $timeout
     * @return ResponseInterface
     * @throws ApiException
     */
    public function get($payload, $uriPath, $queryParams, array $headers = [], int $timeout = null): ResponseInterface
    {
        return $this->request($payload, $uriPath, $queryParams, $headers, 'GET', $timeout, false);
    }

    /**
     * @param $payload
     * @param $uriPath
     * @param $queryParams
     * @param array $headers
     * @param int|null $timeout - Float describing the timeout of the request in seconds. Use 0 to wait indefinitely (the default behavior).
     * @param bool $stream - use streaming
     * @return ResponseInterface
     * @throws ApiException
     */
    public function put($payload, $uriPath, $queryParams, array $headers = [], int $timeout = null, bool $stream = false): ResponseInterface
    {
        return $this->request($payload, $uriPath, $queryParams, $headers, 'PUT', $timeout, $stream);
    }


    /**
     * @param $payload
     * @param $uriPath
     * @param $queryParams
     * @param array $headers
     * @param int|null $timeout
     * @return ResponseInterface
     * @throws ApiException
     */
    public function delete($payload, $uriPath, $queryParams, array $headers = [], int $timeout = null): ResponseInterface
    {
        return $this->request($payload, $uriPath, $queryParams, $headers, 'DELETE', $timeout, false);
    }

    /**
     * @param $payload
     * @param $uriPath
     * @param $queryParams
     * @param $headers
     * @param $method
     * @param null $timeout
     * @param bool $stream
     * @return ResponseInterface
     * @throws ApiException
     */
    private function request($payload, $uriPath, $queryParams, $headers, $method, $timeout = null, bool $stream = false): ResponseInterface
    {
        try {
            $headerConfigurations = [
                'Authorization' => "Bearer {$this->options['accessToken']}",
                'Content-Type' => 'application/json'
            ];
            $headerConfigurations = array_merge($headerConfigurations, $headers);
            if( isset($headers['Content-Type'])) {
                $headerConfigurations['Content-Type'] = $headers['Content-Type'];
            }
            $options = [
                'headers' => $headerConfigurations,
                'query' => $queryParams,
                'body' => $payload,
                'stream' => $stream,
                'timeout' => $timeout ?? $this->timeout
            ];

            //execute get/post call
            $response = $this->http->requestAsync($method, $uriPath, $options)->wait();

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $uriPath
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            return $response;
        } catch (RequestException $e) {
            if($e->getCode() == 404) {
                throw new ObjectNotFoundError(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode()
                );
            } else {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null,
                    $e
                );
            }
        } catch (TransferException $e) {
            if($e->getCode() == 500) {
                throw  new InternalServerError(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                );
            } else {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    null,
                    null,
                    $e
                );
            }
        }
    }
}
