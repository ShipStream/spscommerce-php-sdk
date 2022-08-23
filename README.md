# SPS-Commerce-PHP-SDK

A PHP library for integrating with SPS Commerce HTTP APIs and JSON Schemas. 

## Install

```shell
composer require shipstream/spscommerce-php-sdk
```

## HTTP Client Usage

Here is a code sample to send a REST API request to the SPS Commerce Transaction API.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use ShipStream\SpsCommerce\HttpClient\TransactionApi;
use ShipStream\SpsCommerce\HttpClient\ValidationError;
use ShipStream\SpsCommerce\HttpClient\InternalServerError;
use InvalidArgumentException;

$config = new Configuration([
    "client_id" => "client-id-of-sps-commerce-app",
    'client_secret' => 'client-secret-of-sps-commerce-app',
    'redirect_uri' => 'redirect-uri-sps-commerce-app',
    'state' => 'any-string',
    'access_token' => 'OCYG22y7T3HQ5C4LtqoVW_RGi6JUX0v3kCXCZAJO_M4ykswDh_tKJkzYhotfq5FFV3L'
]);

$api = new TransactionApi($config);
try {

    $file_path = "in/CA584618-1-v7.7-BulkImport.json";
    $file_content = file_get_contents($file_path);
    $header = [
        'Content-Type' => 'application/octet-stream'
        'sps-meta-description' => 'Creating new Transaction at specified path'
    ];
    $result = $api->createTransaction($file_path, $header, $file_content);
    print_r($result)
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
} catch (ApiException $e) {
    echo $e->getMessage();
} catch (ValidationError $e) {
    echo $e->getMessage();
} catch (InternalServerError $e) {
    echo $e->getMessage();
}
```

## RSX Object Usage

Here is a code sample to load a JSON string into the appropriate RSX class:

```php
<?php

require 'vendor/autoload.php';

$jsonString = file_get_contents('sample-files/Orders(850)/PO584616-1-v7.7-DropShip.json');
$order = \ShipStream\SpsCommerce\RSX\v770\Orders\Order::import(
    json_decode($jsonString)
);

echo json_encode($order->header->address->jsonSerialize());
```

## Development

The "RSX" classes for mapping data types to PHP objects are all generated using [json-cli](https://github.com/swaggest/json-cli).

Run the shell script `generate.sh` to re-generate the classes if needed. 
