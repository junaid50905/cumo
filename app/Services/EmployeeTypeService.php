<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\BonusPackageRepository;
use App\Repositories\WeekendPackageRepository;
use App\Repositories\EmplyeeTypeSetupRepository;

class EmployeeTypeService
{
    private EmplyeeTypeSetupRepository $employee;

    public function __construct(EmplyeeTypeSetupRepository $employee)
    {
        $this->employee = $employee;
    }

    public function store($validated)
    {
        try {
            DB::beginTransaction();
            $this->employee->store($validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    public function update($employee, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['btnradio1' => $validated['btnradio1'] ?? NUll];
            $validated += ['btnradio2' => $validated['btnradio2'] ?? NUll];
            $validated += ['btnradio3' => $validated['btnradio3'] ?? NUll];
            $validated += ['btnradio4' => $validated['btnradio4'] ?? NUll];
            $this->employee->update($employee, $validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
