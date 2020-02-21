# EFLOWSimulacionClient-php
Es una solución que produce ingresos puntuales de una persona natural

This PHP package is automatically generated by the [EFLOWSimulacion Codegen](https://github.com/EFLOWSimulacion-api/EFLOWSimulacion-codegen) project:
- API version: 1.0.0
- Build package: io.EFLOWSimulacion.codegen.languages.PhpClientCodegen
## Requirements

PHP 5.5 and later
## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:
```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`
### Manual Installation

Download the files and include `autoload.php`:
```php
    require_once('/path/to/EFLOWSimulacionClient-php/vendor/autoload.php');
```
## Tests

To run the unit tests:
```
composer install
./vendor/bin/phpunit
```
## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
$apiInstance = new EFLOWSimulacion\Client\Api\EFLOWApi(
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example";
$request = new \EFLOWSimulacion\Client\Model\Peticion();

try {
    $result = $apiInstance->eflow($x_api_key, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EFLOWApi->eflow: ', $e->getMessage(), PHP_EOL;
}
?>
```
## Documentation for API Endpoints

All URIs are relative to *https://services.circulodecredito.com.pe/sandbox/v1/eflow*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EFLOWApi* | [**eflow**](docs/Api/EFLOWApi.md#eflow) | **POST** / | Es una solución que produce ingresos puntuales de una persona natural
## Documentation For Models
 - [Error](docs/Model/Error.md)
 - [Errores](docs/Model/Errores.md)
 - [Peticion](docs/Model/Peticion.md)
 - [Respuesta](docs/Model/Respuesta.md)
## Documentation For Authorization
 All endpoints do not require authorization.
## Author

api@circulodecredito.com.mx
