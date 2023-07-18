<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class FilesTest extends TestCase
{
    public function testMethod(){
        $a = Files::New()->article(['A6509SP-3CC'])->run();
        $this->assertNotEmpty($a->response()['data']);
    }
}
