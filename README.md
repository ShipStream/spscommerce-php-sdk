## SPS-Commerce-PHP-SDK

A PHP library for integrating with SPS Commerce Transaction APIs via HTTP.

### Install

```shell
composer require shipstream/sps-commerce-sdk
```

### PHP Object Mapping
Create PHP Object Mapper from json-schema resources using `json-cli`. 

#### 1. Creating Order PHP classes 
Shell Script to create PHP classes for `Order` using json schema  `src/schema-json/Orders.json`
```bash
#!/bin/bash
set -e
docker run --rm -v $PWD:/app --workdir /app \
swaggest/json-cli \
json-cli gen-php ./src/json-schema/Orders.json \
    --ptr-in-schema "#/definitions/Order" \
    --def-ptr "#/definitions" \
    --ns ShipStream\\SpsCommerce\\RSX\\v770\\Order \
    --ns-path src/RSX/v770/Order/

```


#### 2. Creating Shipment PHP classes
Shell Script to create PHP classes for `Shipemt` using json schema  `src/schema-json/Shipments.json`
```bash
#!/bin/bash
set -e
docker run --rm -v $PWD:/app --workdir /app \
swaggest/json-cli \
json-cli gen-php ./src/json-schema/Shipments.json \
    --ptr-in-schema "#/definitions/Shipment" \
    --def-ptr "#/definitions" \
    --ns ShipStream\\SpsCommerce\\RSX\\v770\\Shipment \
    --ns-path src/RSX/v770/Shipment/

```

### PHP code snippet to send HTTP Request
Here is code sample to send REST API request to `SPS-Commerce` API endpoint

```injectablephp
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

    $file_path = "in/CA584618-1-v7.7-BulkImport.xml";
    $file_content = "This API accepts a payload that initiates a new transaction. Transactions with the same file path will be overwritten. The only allowed Content-Type header value is application/octet-stream.";
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

?>
```