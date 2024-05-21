<?php

namespace App\Repositories;
use App\Models\AssessmentSetupSchedule;

class SetupAssessmentScheduleRepository extends BaseRepository
{
    protected string $model = AssessmentSetupSchedule::class;

    public function create(array $data): string
    {
        try {
            // Your create logic here
            return 'Repository method create() executed successfully.';
        } catch (\Throwable $th) {
            return 'Failed to execute repository method create(): ' . $th->getMessage();
        }
    }

    // Add more repository methods here as needed
}
