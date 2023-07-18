<?php

namespace Fandeco\DatabusClient\Api;

use Fandeco\DatabusClient\Api\Articles\Check;
use PHPUnit\Framework\TestCase;

class SitesTest extends TestCase
{
    public function testMethod()
    {
        $a = Sites::New()->run();
        $this->assertCount(7, $a->response()['data']);
    }
}
