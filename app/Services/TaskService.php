<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\TaskRepository;

class TaskService
{
    private TaskRepository $repo;

    public function __construct(TaskRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {   //dd($validated);
        try {
            DB::beginTransaction();
            [$normalInputFieldsData, $dynamic_rows_data] = $this->collectTask($validated);//dd($validated);
            $static = ['Pre-Vocational', 'Vocational', 'Independent'];
            for($i=0; $i < count($dynamic_rows_data['task_name']); $i++){
               $key = $dynamic_rows_data['type'][$i]; 
               $this->repo->store([
                    'activity_id' => $normalInputFieldsData['activity_id'],
                    'title' => $dynamic_rows_data['task_name'][$i],
                    'type' => $static[$key]
                ]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectTask(array $validated)
    { //dd($validated);
        [$leave_application, $data] = extractNecessaryFieldsFromData($validated, [
            'activity_id'
        ]);
        return [$leave_application, $data];
    }
    
    public function update($finishedGood, array $validated)
    {

       
    }
}
