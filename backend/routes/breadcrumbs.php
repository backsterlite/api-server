<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;


// Home
Breadcrumbs::for('index', function ($trail) {
    $trail->push('Index', url('api/index'));
});
// Home > Category
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('index');
    $trail->push($category->name, url('api/'.$category->alias ));
});
// Home > Category > SubCategory
Breadcrumbs::for('subCategory', function ($trail, $subCat) {
    $trail->parent('category', $subCat->category);
    $trail->push($subCat->name, url('api/'.$subCat->category->alias
        .'/'.$subCat->alias));
});

// Home > Category > SubCategory > Post
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('subCategory', $post->subCategory);
    $trail->push($post->title, url('api/'));
});



