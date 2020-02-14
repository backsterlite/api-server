<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = [
        'name',
        'alias',
        'parent'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category', 'alias');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'alias', 'parent');
    }

}

