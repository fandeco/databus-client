<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class CategoriesTest extends TestCase
{
    public function testMethod(){
        $a = Categories::New()->limit(10)->run();
        $this->assertCount(10,$a->response()['data']);
    }
}
