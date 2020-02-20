<?php

namespace App\Http\Controllers\Api;

use App\Repositories\SubCategoryRepository;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function show(SubCategoryRepository $repository, ...$params)
    {

        $posts = $repository->find($params[1]);
        $posts = array_reverse($posts->toArray());
        return($posts);
    }
}
