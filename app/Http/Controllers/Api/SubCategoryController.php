<?php

namespace App\Http\Controllers\Api;

use App\Repositories\SubCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function show(SubCategoryRepository $repository, ...$params)
    {
//        dd($params[1]);
        $subCat = $repository->find($params[1]);
        $posts = $repository->show($params[1]);
//        dd($subCat);
        return view('api.subcategory.index', compact('subCat', 'posts'));
    }
}
