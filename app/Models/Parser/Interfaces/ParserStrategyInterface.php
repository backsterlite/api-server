<?php


namespace App\Models\Parser\Interfaces;


interface ParserStrategyInterface
{
    public function parse($path);
}
