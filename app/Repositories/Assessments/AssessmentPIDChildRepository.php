<?php

namespace App\Repositories\Assessments;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Session;

use App\Models\Assessments\AssessmentQuestion;
use App\Traits\QuestionCollectionTrait;

class AssessmentPIDChildRepository extends BaseRepository
{
    use QuestionCollectionTrait;
    
    protected string $model = AssessmentQuestion::class;

    public function create(array $data): string
    {
        try {
            // Your create logic here
            return 'Repository method create() executed successfully.';
        } catch (\Throwable $th) {
            return 'Failed to execute repository method create(): ' . $th->getMessage();
        }
    }

    
}
