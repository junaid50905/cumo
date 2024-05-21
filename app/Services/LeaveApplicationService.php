<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\LeaveApplicationRepository;

class LeaveApplicationService
{
    public LeaveApplicationRepository $repo;

    public function __construct(LeaveApplicationRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$leave_applicationData, $dynamic_rows_data] = $this->collectLeaveApplication($validated);//dd($leave_applicationData);
            $leave_application = $this->repo->store($leave_applicationData); //dd(55);
            $leave_applicationDetailsInfos = $this->collectLeaveApplicationDetailsInfos($dynamic_rows_data); //dd($leave_applicationDetailsInfos);
            $leave_application->details()->createMany($leave_applicationDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectLeaveApplication(array $validated)
    { 
        [$leave_application, $data] = extractNecessaryFieldsFromData($validated, [
            'reason', 'employee_id', 'support_employee_id', 'duration_in_days', 'duration_in_hours', 'address_at_leave', 'phone_at_leave', 'available_leave_ttachment', 'leave_type_id'
        ]);
      
        return [$leave_application, $data];
    }

    private function collectLeaveApplicationDetailsInfos(mixed $data): array
    {
        [$leave_applicationDetailsInfos, $data] = extractNecessaryFieldsFromData($data, ['type', 'start_date', 'end_date', 'duration', 'is_houe', 'avl_time', 'half_day', 'hour']);
        for ($i = 0; $i < count($leave_applicationDetailsInfos['type']); $i++) {
            $custom[$i] = [
                'type' => $leave_applicationDetailsInfos['type'][$i],
                'start_date' => $leave_applicationDetailsInfos['start_date'][$i],
                'end_date' => $leave_applicationDetailsInfos['end_date'][$i],
                'duration' => $leave_applicationDetailsInfos['duration'][$i],
                'is_houe' => $leave_applicationDetailsInfos['is_houe'][$i],
                'avl_time' => $leave_applicationDetailsInfos['avl_time'][$i],
                'half_day' => $leave_applicationDetailsInfos['half_day'][$i],
                'hour' => $leave_applicationDetailsInfos['hour'][$i]
            ];
        }
        return $custom ?? [];
    }
    
    public function update($leave_application, array $validated)
    {
        try {
            DB::beginTransaction();
            [$courseData, $data] = $this->collectLeaveApplication($validated);
            $leave_application = $this->repo->update($leave_application, $courseData);
            $leave_application->details()->delete();
            $courseDataDetailsInfos = $this->collectLeaveApplicationDetailsInfos($data);
            $leave_application->details()->createMany($courseDataDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
