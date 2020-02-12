<?php

namespace App\Models\Parser\Strategies;



class XMLStrategy extends CoreStrategy
{
    public function parse($path)
    {
       return 'Hello From XML class, path ' . $path;
    }
}
