<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class ProductsTest extends TestCase
{
    public function testMethod(){
        $a = Products::New()->site(['fandeco.ru'])->limit(10)->run();
        $this->assertCount(10,$a->response()['data']);
    }
}
