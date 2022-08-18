<?php
namespace ShipStream\SpsCommerce\HttpClient;

use Exception;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use RuntimeException;
use ShipStream\SpsCommerce\HttpClient\DefaultApi;

class Configuration
{
    /*
     * @class \ ShipStream\SpsCommerce\HttpClient\DefaultApi
     */
    protected  $httpClient;

    protected $endpoint;
    /**
     * @const array[string]
     */
    public const REQUIRED_CONFIG_KEYS = [
        "client_id",
        "client_secret",
        "accessToken",
        "state",
    ];

    const SPS_COMMERCE_APP_CLIENT_ID = 'qmNZGzPDKgev6MQPKa5mepEQHPQnxV2D';
    const SPS_COMMERCE_APP_CLIENT_SECRET = 'V9ZyLTedsQJ6J6FFSGbGkbhX5Dl3Jq3gF44XCaK_bFb2yhkvnbsggHYDGWAdHGti';
    const SPS_COMMERCE_APP_REDIRECT_URI = 'http://localhost:8888/client/pluginConnect/sps';
    const SPS_COMMERCE_APP_STATE = 'BPGN5u7FEb';

    const SPS_COMMERCE_API_BASE_URL = 'https://api.spscommerce.com';
    const SHIPPING_LABEL_API_END_POINT = 'label/v1';
    const PACKING_SLIP_API_END_POINT = 'packing-slip/v1';
    const TRANSACTION_API_END_POINT = 'transactions/v5/data';
    const ACCESS_TOKEN_API_END_POINT = 'oauth/token';

    /**
     * Constructor
     * @param array $configurationOptions
     * @throws Exception
     */
    public function __construct(array $configurationOptions)
    {
        // Make sure all required configuration options are present
        $missingKeys = [];
        foreach (static::REQUIRED_CONFIG_KEYS as $key) {
            if (!isset($configurationOptions[$key])) {
                $missingKeys[] = $key;
            }
        }
        if (count($missingKeys) > 0) {
            throw new RuntimeException("Required configuration values were missing: " . implode(", ", $missingKeys));
        }

        $options = array_merge(
            $configurationOptions,
            [
                "url" => self::SPS_COMMERCE_API_BASE_URL,
                "accessToken" => $configurationOptions["accessToken"] ?? null,
                "accessTokenExpiration" => $configurationOptions["accessTokenExpiration"] ?? null
            ]
        );

        $this->httpClient = new DefaultApi($options);
    }

    public function getClientId()
    {
        return self::SPS_COMMERCE_APP_CLIENT_ID;
    }

    public function getClientSecret()
    {
        return self::SPS_COMMERCE_APP_CLIENT_SECRET;
    }

    public function getRedirectUri()
    {
        return self::SPS_COMMERCE_APP_REDIRECT_URI;
    }
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function getApiBaseUrl()
    {
        return self::SPS_COMMERCE_API_BASE_URL;
    }
}