<?php


namespace App\Models\Parser\Strategies;


use App\Models\Parser\Interfaces\ParserStrategyInterface;
abstract class CoreStrategy implements ParserStrategyInterface
{
    public  function parse($path )
    {
        return 'Hello From abstract class, path ' . $path;
    }

}
