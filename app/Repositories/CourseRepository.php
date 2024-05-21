<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository extends BaseRepository
{
    protected string $model = Course::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('bankAccount')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }

    public function getCoursesWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
}