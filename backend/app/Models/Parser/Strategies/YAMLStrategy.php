<?php

namespace App\Models\Parser\Strategies;


use App\Models\Parser\Interfaces\ParserStrategyInterface;

class YAMLStrategy extends CoreStrategy
{
    public function parse($path)
    {
        return 'Hello From YAML class, path ' . $path;
    }
}
