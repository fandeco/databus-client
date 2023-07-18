<?php

namespace Fandeco\DatabusClient\Api;

use Fandeco\DatabusClient\Abstracts\Builder;

class PropertyReference extends Builder
{
    protected function getMethod()
    {
        return 'property_reference';
    }
}
