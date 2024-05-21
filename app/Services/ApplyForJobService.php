<?php

namespace App\Services;

use App\Models\ApplyForJob;
use Illuminate\Support\Facades\DB;
use App\Repositories\ApplyForJobRepository;
use Carbon\Carbon;

class ApplyForJobService
{
    private ApplyForJobRepository $repo;

    public function __construct(ApplyForJobRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store($validated)
    {
        $date_of_birth =  new Carbon(request()->date_of_birth);
        $age = $date_of_birth->diffInYears(Carbon::now());
        $file = request()->file('cv_upload')->getClientOriginalName();
        try {
            DB::beginTransaction();
            $apply_for_job = $this->repo->store($validated);
            $apply_for_job->age = $age;
            $apply_for_job->cv_upload = $file;
            $apply_for_job->save();
            request()->cv_upload->store('public/images');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    public function update($applyForJob, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['is_company_employee' => $validated['is_company_employee'] ?? NUll];
            $this->repo->update($applyForJob, $validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
