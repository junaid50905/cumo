<?php

namespace App\Services;

use App\Repositories\AttendancePolicyRepository;
use Illuminate\Support\Facades\DB;
use App\Repositories\BonusPackageRepository;
use App\Repositories\WeekendPackageRepository;

class AttendancePolicyService
{
    private AttendancePolicyRepository $repo;

    public function __construct(AttendancePolicyRepository $repo)
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

    public function update($weekendPackage, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['sun_is_next_day' => $validated['sun_is_next_day'] ?? NUll];
            $validated += ['mon_is_next_day' => $validated['mon_is_next_day'] ?? NUll];
            $validated += ['thu_is_next_day' => $validated['thu_is_next_day'] ?? NUll];
            $validated += ['wed_is_next_day' => $validated['wed_is_next_day'] ?? NUll];
            $validated += ['th_is_next_day' => $validated['th_is_next_day'] ?? NUll];
            $validated += ['fri_is_next_day' => $validated['fri_is_next_day'] ?? NUll];
            $validated += ['sat_is_next_day' => $validated['sat_is_next_day'] ?? NUll];
            $validated += ['deduct_in_minute' => $validated['deduct_in_minute'] ?? NUll];
            $this->repo->update($weekendPackage, $validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
