<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class ArticlesTest extends TestCase
{
    public function testMethod(){
        $a = Articles::New()->limit(10)->vendor('')->run();
        $this->assertCount(10,$a->response()['data']);
    }

//    public function testError(){
//        $a = Articles::New()->site('lg;fkdmsgjlk;fl')->run();
//        $this->assertEquals("The site must be an array.",$a->response()['message']);
//    }

}
