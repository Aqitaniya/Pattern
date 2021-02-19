<?php
namespace App\DesignPatterns\Generating\Prototype;

use App\Models\User as Model;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginate()
    {
        $columns = [
            'id',
            'name',
            'email',
        ];

        $result = $this->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
//            ->with(['category', 'role'])
            //можно так
            ->with([
                'category' => function($query){
                    $query->select(['id', 'title']);
                },
                //  или твк
                'user:id,name'
            ])
            ->paginate(25);
          return $result;
    }
}
