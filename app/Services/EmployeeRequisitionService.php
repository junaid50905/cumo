<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\EmployeeRequisitionRepository;

class EmployeeRequisitionService
{
    private EmployeeRequisitionRepository $repo;

    public function __construct(EmployeeRequisitionRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store($validated)
    {
        try {
            DB::beginTransaction();
            $this->repo->store($validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    public function update($employeeRequisition, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['requisition_for' => $validated['requisition_for'] ?? NUll];
            $validated += ['new_position' => $validated['new_position'] ?? NUll];
            $validated += ['replacement' => $validated['replacement'] ?? NUll];
            $this->repo->update($employeeRequisition, $validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
