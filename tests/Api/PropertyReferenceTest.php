<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class PropertyReferenceTest extends TestCase
{
    public function testMethod(){
        $a = PropertyReference::New()->run();
        $this->assertGreaterThan(100,$a->response()['data']);
    }
}
