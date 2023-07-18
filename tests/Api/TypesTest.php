<?php

namespace Fandeco\DatabusClient\Api\Files;

use Fandeco\DatabusClient\Api\Zones;
use PHPUnit\Framework\TestCase;

class TypesTest extends TestCase
{
    public function testMethod(){
        $a = Types::New()->limit(100)->run();
        $this->assertCount(7,$a->response()['data']);
    }

}
