<?php

namespace Fandeco\DatabusClient\Api;

use PHPUnit\Framework\TestCase;

class StoragesTest extends TestCase
{
    public function testMethod(){
        $a = Storages::New()
            ->code(["000000167"])
            ->zone('ru')
            ->fdsfdf('fdsf')
            ->run();

        $this->assertCount(1,$a->response()['data']);
    }
}
