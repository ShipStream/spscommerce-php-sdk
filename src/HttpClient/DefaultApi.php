<?php

namespace ShipStream\SpsCommerce\HttpClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\HandlerStack;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;

class DefaultApi
{
    const API_BASE_URL = 'https://api.spscommerce.com';
    const API_AUTH_URL = 'https://auth.spscommerce.com';
    const DEFAULT_TIMEOUT = 10;

    private Client $http;
    private $accessTokenCallback;

    public function __construct($accessToken, array $options = null)
    {
        if (is_callable($accessToken)) {
            $accessTokenCallback = $accessToken;
        } else {
            $accessTokenCallback = function () use ($accessToken) {
                return $accessToken;
            };
        }
        $this->accessTokenCallback = $accessTokenCallback;

        if (isset($options['http_client'])) {
            if (!$options['http_client'] instanceof Client) {
                throw new InvalidArgumentException('The "http_client" option must be an instance of GuzzleHttp\Client');
            }
            $this->http = $options['http_client'];
        } else {
            if (empty($options['handler'])) {
                $options['handler'] = HandlerStack::create();
                $options['handler']->remove('allow_redirects');
                $options['handler']->remove('cookies');
            }
            $this->http = new Client(array_merge([
                'base_uri' => self::API_BASE_URL,
                'timeout' => self::DEFAULT_TIMEOUT,
                'verify' => TRUE,
            ], $options ?: []));
        }
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
            $accessTokenCallback = $this->accessTokenCallback;
            $accessToken = $accessTokenCallback();
            $headers = array_merge([
                'Authorization' => "Bearer $accessToken",
                'Content-Type' => 'application/json'
            ], $headers);
            $options = [
                'headers' => $headers,
                'query' => $queryParams,
                'body' => $payload,
            ];
            if ($timeout) {
                $options['timeout'] = $timeout;
            }
            if ($stream) {
                $options['stream'] = true;
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
}
