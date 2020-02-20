<?php

namespace App\Http\Controllers\Api;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    /**
     * Display the specified resource.
     * @param  array  $params
     * @param PostRepository $repository
     * @return string
     */
    public function show( PostRepository $repository, ...$params)
    {
        $post = $repository->show($params[2]);
        return $post->toJson();

    }

}
