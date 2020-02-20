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
    ];

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class, 'parent', 'alias');
    }

    public function posts()
    {
        return $this->hasManyThrough(Post::class, SubCategory::class,
            'parent', 'category',
            'alias', 'alias');
    }



}
