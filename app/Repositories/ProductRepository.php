<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    protected string $model = Product::class;

    public function getDataAccordingRelation($categoryId)
    {
        return Product::whereCategoryId($categoryId)->get();
    }

    public function getWithSpecifyingRelation()
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
