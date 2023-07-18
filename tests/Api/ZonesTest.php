<?php

namespace Fandeco\DatabusClient\Api;

use Fandeco\DatabusClient\Helpers\CurlFactory;
use PHPUnit\Framework\TestCase;

class ZonesTest extends TestCase
{
    public function testMethod(){
        $a = Zones::New()->limit(10)->run();
        $this->assertCount(3,$a->response()['data']);
    }
    public function testZonesWithGuzzle(){
        $a = Zones::New(function ($method,$data){

            $this->assertEquals('zones',$method);
            $this->assertEquals(10,$data['limit']);
            return CurlFactory::post($method, $data);
        })->limit(10)->run();
    }
}
