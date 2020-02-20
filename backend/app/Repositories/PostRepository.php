<?php


namespace App\Repositories;

use App\Models\Post as Model;

class PostRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Получить модель для просмотра
     * @param int $id
     *
     * @return Model
     */
    public function show($id)
    {

        $post =  $this->startConditions()->find($id);
        $post['parent_category'] = $post->subCategory->parent;
        return $post;
    }



}
