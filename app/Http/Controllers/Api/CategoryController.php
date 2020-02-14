<?php

namespace App\Http\Controllers\Api;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

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
        return view('api.category.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     * @param  int  $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @param CategoryRepository $repository
     */
    public function show(CategoryRepository $repository, $name)
    {
        $category = $repository->find($name);
        $posts = $repository->show($name);
        return view('api.category.show', compact('category','posts'));
    }



}
