<?php

namespace Fandeco\DatabusClient\Api;

use Fandeco\DatabusClient\Api\Files\Types;
use PHPUnit\Framework\TestCase;

class StocksTest extends TestCase
{
    public function testMethod()
    {
        $a = Stocks::New()->site(['artelamp.ru'])->zone('kz')->run();
        $this->assertCount(10, $a->response()['data']);
    }
}
