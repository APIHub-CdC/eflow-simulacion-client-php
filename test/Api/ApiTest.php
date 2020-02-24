<?php

namespace EFLOWSimulacion\Client;

use \EFLOWSimulacion\Client\Configuration;
use \EFLOWSimulacion\Client\ApiException;
use \EFLOWSimulacion\Client\ObjectSerializer;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \EFLOWSimulacion\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \EFLOWSimulacion\Client\Api\EFLOWSimulacionApi($client,$config);
    }
    
    public function testEflow()
    {
        $x_api_key = "your_api_key";

        $request = new \EFLOWSimulacion\Client\Model\Peticion();

        $request->setFolio("000016");
        $request->setTipoDocumento("1");
        $request->setNumeroDocumento("00000002");

        try {
            $result = $this->apiInstance->eflow($x_api_key, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->eflow: ', $e->getMessage(), PHP_EOL;
        }
    }
}
