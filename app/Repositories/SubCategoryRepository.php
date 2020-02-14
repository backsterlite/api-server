<?php


namespace App\Repositories;
use App\Models\SubCategory as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SubCategoryRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    /**
     * ПОлучить модель для показа
     * @param string $alias
     *
     * @return Collection|\Illuminate\Database\Eloquent\Model[]|\Illuminate\Foundation\Application[]|mixed[]
     */
    public function show($alias)
    {
        $subCat = $this->startConditions()->all()->firstWhere('alias', '=', $alias);
        return $subCat->posts->reverse();
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
