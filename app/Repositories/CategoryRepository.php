<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    protected string $model = Category::class;

    public function getCoursesWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}
