<?php

namespace Fandeco\DatabusClient\Api\Articles;

use PHPUnit\Framework\TestCase;

class CheckTest extends TestCase
{
    public function testMethod(){
        $a = Check::New()->article("A6509SP-3CC")->run();
        $this->assertCount(3,$a->response()['data']);
    }
}
