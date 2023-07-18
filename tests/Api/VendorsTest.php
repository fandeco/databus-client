<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class VendorsTest extends TestCase
{
    public function testMethod(){
        $a = Vendors::New()->limit(10)->run();
        $this->assertCount(10,$a->response()['data']);
    }
}
