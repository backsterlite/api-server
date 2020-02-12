<?php


namespace App\Models\Parser\Strategies;
use App\Models\Category;
use App\Models\Parser\Interfaces\ParserStrategyInterface;
use App\Models\Post;

use AXP\FileParser\FileParser;

class JsonStrategy extends CoreStrategy
{
    public function parse($path)
    {


        $structure =  FileParser::json(file_get_contents($path));
        foreach($structure as $item)
        {
            (array_key_exists('children', $item)) ? Category::structureAdd($item) : Post::postsAdd($item);

        }
        return true;
    }
}
