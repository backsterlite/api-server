<?php


namespace App\Models\Parser\Strategies;
use App\Models\Category;
use App\Models\Post;

use App\Models\SubCategory;
use AXP\FileParser\FileParser;

class JsonStrategy extends CoreStrategy
{
    public function parse($path)
    {


        $structure =  FileParser::json(file_get_contents($path));
        foreach($structure as $item)
        {

            (array_key_exists('children', $item))
                ?$this->categoriesAdd($item)
                : $this->postsAdd($item);

        }
        return true;
    }

    private function categoriesAdd($items)
    {
        $cat = [];
        $subCat = [];

        $cat[] = [
            'name' => $items['name'],
            'alias' => $items['alias'],
            'parent' => null,
        ];
        foreach ($items['children'] as $child)
        {

            $subCat[] = [
                'name' => $child['name'],
                'alias' => $child['alias'],
                'parent' => $items['alias'],
            ];

        }

        foreach($cat as $data)
        {
            Category::create($data);
        }

        foreach($subCat as $data)
        {
            SubCategory::create($data);
        }

    }

    private function postsAdd($item)
    {
        Post::create($item);

    }
}
