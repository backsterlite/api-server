<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @param CategoryRepository $repository
     *
     */
    public function index(CategoryRepository $repository)
    {
        $categories = $repository->all();
//        return view('api.category.index', compact('categories'));
        foreach ($categories as $category) {
            $category['children'] = collect($category->subcategory)->toArray();
        }

        $categories = $categories->toJson();
        return $categories;
    }

    /**
     * Display the specified resource.
     * @param  int  $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @param CategoryRepository $repository
     */
    public function show(CategoryRepository $repository, $name)
    {
        $cat = $repository->find($name);
        $posts = $cat->posts;
        $posts = array_reverse($posts->toArray());
        return $posts;
    }



}
