<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class PricesTest extends TestCase
{
    public function testMethod(){
        $a = Prices::New()->site(["artelamp.ru"])->zone('kz')->run();
        $this->assertCount(10,$a->response()['data']);
    }
}
