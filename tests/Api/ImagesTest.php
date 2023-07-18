<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class ImagesTest extends TestCase
{
    public function testMethod(){
        $a = Images::New()->article(['A6509SP-3CC'])->run();
        $this->assertCount(4,$a->response()['data']);
    }

}
