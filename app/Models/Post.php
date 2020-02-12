<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category'
    ];


    public static function postsAdd($items)
    {
        $data = [
            'title' => $items['title'],
            'body' => $items['body'],
            'category' => $items['category']
        ];
        self::create($data);
    }
}
