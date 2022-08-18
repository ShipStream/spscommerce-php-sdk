<?php

namespace ShipStream\SpsCommerce\HttpClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\RedirectMiddleware;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpInternalServerErrorException;

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
     * @param $options
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
     * @param int $timeout - Float describing the timeout of the request in seconds. Use 0 to wait indefinitely (the default behavior).
     * @param bool $stream - use streaming
     * @return ResponseInterface
     */
    public function post($payload, $uriPath, $queryParams, $timeout = null, bool $stream = false): ResponseInterface
    {
        return $this->request($payload, $uriPath, $queryParams, 'POST', $timeout, $stream);
    }

    public function get($payload, $uriPath, $queryParams, $timeout = null): ResponseInterface
    {
        return $this->request($payload, $uriPath, $queryParams, 'GET', $timeout, false);
    }

    private function request($payload, $uriPath, $queryParams, $method, $timeout = null, bool $stream = false): ResponseInterface
    {
        try {
            $options = [
                'headers' => [
                    'Authorization' => "Bearer {$this->options['accessToken']}",
                    'Content-Type' => 'application/json'
                ],
                'query' => $queryParams,
                'body' => $payload,
                'stream' => $stream,
                'timeout' => $timeout ?? $this->timeout
            ];

            // enable debug
            if (array_key_exists("debug", $this->options)) {
                $options['debug'] = $this->options["debug"];
            }

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

    protected function check($key, $value)
    {
        if ((!isset($value) || trim($value) === '')) {
            $options = implode(', ', array_map(
                function ($v, $k) {
                    if (is_array($v)) {
                        return $k . '[]=' . implode('&' . $k . '[]=', $v);
                    } else {
                        return $k . '=' . $v;
                    }
                },
                $this->options,
                array_keys($this->options)
            ));
            throw new InvalidArgumentException("The '${key}' should be defined as argument or default option: {$options}");
        }
    }
}
