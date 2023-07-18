<?php
namespace Fandeco\DatabusClient\Helpers;

use Fandeco\DatabusClient\Abstracts\ResponseFactory;

class CurlFactory
{
    public static function post($method,$data): ResponseFactory
    {
        return new CurlBuilder("https://databus.massive.ru/api/".$method, $data);
    }
}
