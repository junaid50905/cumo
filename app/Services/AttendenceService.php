<?php

namespace App\Services;


use App\Repositories\AttendenceRepository;
use Illuminate\Support\Facades\DB;

class AttendenceService
{
    private AttendenceRepository $attendenceRepo;

    public function __construct(AttendenceRepository $attendenceRepo)
    {
        $this->repo = $attendenceRepo;
    }

    public function store(array $validated){
        try{
            DB::beginTransaction();
            [$attendence, $data] = $this->collectAttendence($validated);
            $attendence = $this->repo->store($attendence);
            $attendenceDetailsInfo = $this->collectAttendenceDetails($data);
            $attendence->details()->createMany($attendenceDetailsInfo);
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectAttendence(array $validated){
       
        [$attendence, $data] = extractNecessaryFieldsFromData($validated, [
            'attendenceDate'
        ]);

        return [$attendence, $data];
    }

    private function collectAttendenceDetails(mixed $data){
        [$attendenceDetailsInfo,$data] = extractNecessaryFieldsFromData($data,['employee_id', 'sing_in', 'sing_out','remark']);
        for($i=0; $i<count($attendenceDetailsInfo['employee_id']);$i++){
            $custom[$i] =[
                'employee_id' => $attendenceDetailsInfo['employee_id'][$i],
                'sing_in' => $attendenceDetailsInfo['sing_in'][$i],
                'sing_out' => $attendenceDetailsInfo['sing_out'][$i],
                'remark' => $attendenceDetailsInfo['remark'][$i],
            ];
        }

        return $custom ?? [];
    }

    public function update($attendence, array $validated)
    {

        try {
            DB::beginTransaction();
            [$attendenceData, $data] = $this->collectAttendence($validated);
            $attendenceData = $this->repo->update($attendence, $attendenceData);
            $attendenceData->details()->delete();
            $attendencesDetailsInfos = $this->collectAttendenceDetails($data);

            $attendenceData->details()->createMany($attendencesDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }


}
