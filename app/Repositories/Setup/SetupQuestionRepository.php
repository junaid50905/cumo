<?php

namespace App\Repositories\Setup;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Session;

use App\Models\Assessments\AssessmentQuestion;
use App\Models\Assessments\AssessmentCategory;
use App\Models\Assessments\AssessmentSubCategory;
use App\Traits\QuestionCollectionTrait;

class SetupQuestionRepository extends BaseRepository
{
    use QuestionCollectionTrait;
    
    protected string $model = AssessmentQuestion::class;
    protected string $assessmentCategory = AssessmentCategory::class;
    protected string $assessmentSubCategory = AssessmentSubCategory::class;

    public function getAllData($perPage)
    {
        return $this->model::latest()->paginate($perPage);
    }

    public function getCategories()
    {
        return $this->assessmentCategory::where('status', 1)->orderBy('name')->get();
    }

    public function getSubCategories()
    {
        return $this->assessmentSubCategory::where('status', 1)->orderBy('name')->get();
    }


    public function create(array $data): string
    {
        try {
            $this->model::create($data);
            return 'Assessment question created successfully.';
        } catch (\Throwable $th) {
            return 'Failed to create assessment question: ' . $th->getMessage();
        }
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
