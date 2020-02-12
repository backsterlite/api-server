<?php

namespace App\Models;

use App\Http\Controllers\TestController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Category extends Model
{
    protected $fillable = [
        'name',
        'alias',
        'parent'
    ];
    public static function structureAdd($items)
    {

            $dates = [];

            $dates[] = [
                 'name' => $items['name'],
                 'alias' => $items['alias'],
                 'parent' => null,
               ];
               foreach ($items['children'] as $child)
               {

                   $dates[] = [
                       'name' => $child['name'],
                       'alias' => $child['alias'],
                       'parent' => $items['alias'],
                   ];

               }

                foreach($dates as $data)
                {
                    Category::create($data);
                }

//      return $data;
    }
}
