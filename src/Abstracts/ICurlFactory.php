<?php

namespace Fandeco\DatabusClient\Abstracts;

interface ICurlFactory
{
    public function __invoke(string $method,array $data): ResponseFactory;
}
