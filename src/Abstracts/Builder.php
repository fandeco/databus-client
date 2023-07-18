<?php

namespace Fandeco\DatabusClient\Abstracts;

use Fandeco\DatabusClient\Helpers\CurlFactory;

abstract class Builder
{
    /**
     * @var callable
     */
    private $curlFactory;

    public function __construct($curlFactory = null)
    {
        $this->curlFactory = $curlFactory ?: CurlFactory::class . '::post';
    }

    /**
     * @param callable $curlFactory function ($method,$data):array
     * @return static
     */
    static function New($curlFactory = null)
    {
        return new static($curlFactory);
    }

    protected function getMethod()
    {
        return strtolower(str_replace("Fandeco/DatabusClient/Api/", '', str_replace("\\", '/', static::class)));
    }

    protected function prepareData()
    {
        return $this->data;
    }

    public function __call($name, $value)
    {
        $this->data[$name] = $value[0];
        return $this;
    }

    public function run():ResponseFactory
    {
        return ($this->curlFactory)($this->getMethod(), $this->prepareData());
    }
}
