<?php
namespace ShipStream\SpsCommerce\HttpClient;

use Exception;
use RuntimeException;

class Configuration
{

    /**
     * @var DefaultApi
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $endpoint;

    /**
     * @var string
     */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $accessToken;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $redirectUri;


    /**
     * @const array[string]
     */
    public const REQUIRED_CONFIG_KEYS = [
        "client_id",
        "client_secret",
        "access_token",
        "state",
        "redirect_uri"
    ];

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
                "accessToken" => $configurationOptions["access_token"] ?? null,
                "accessTokenExpiration" => $configurationOptions["accessTokenExpiration"] ?? null
            ]
        );

        $this->clientId = $configurationOptions["client_id"];
        $this->clientSecret = $configurationOptions["client_secret"];
        $this->accessToken = $configurationOptions["access_token"];
        $this->state = $configurationOptions["state"];
        $this->redirectUri = $configurationOptions["redirect_uri"];

        $this->httpClient = new DefaultApi($options);
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function getRedirectUri()
    {
        return $this->redirectUri;
    }
    public function getHttpClient(): DefaultApi
    {
        return $this->httpClient;
    }

    public function getApiBaseUrl(): string
    {
        return self::SPS_COMMERCE_API_BASE_URL;
    }
}