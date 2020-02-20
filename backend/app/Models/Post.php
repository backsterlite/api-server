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

    public function subCategory()
    {
        return $this->hasOne(SubCategory::class, 'alias', 'category');
    }


}
