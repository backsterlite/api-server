<?php


namespace App\Repositories;
use App\Models\Category as Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    /**
     * Получить список категорий для вывода в списке
     *
     *
     * @return Collection|\Illuminate\Database\Eloquent\Model[]|\Illuminate\Foundation\Application[]|mixed[]
     */
    public function all()
    {
        return $this->startConditions()->all();
    }

    /**
     * Получить список постов для вывода
     * @param string $id
     * @return Collection
     */
    public function show($id)
    {
       $category =  $this->startConditions()->all()->firstWhere('alias', '=', $id);
       return $category->posts->reverse();
    }
    /**
     * ПОлучить модель для Breadcrumbs
     * @param string $alias
     *
     * @return Collection|\Illuminate\Database\Eloquent\Model[]|\Illuminate\Foundation\Application[]|mixed[]
     */

    public function find($alias)
    {
        return $this->startConditions()->all()->where('alias', '=',$alias)->first();
    }

}
