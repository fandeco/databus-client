<?php
use Fandeco\DatabusClient\Helpers\CurlFactory;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{

    public function testCurl()
    {
       $a = CurlFactory::post('zones', ['limit'=>10]);
       $this->assertNotEmpty($a->response());
    }
}
