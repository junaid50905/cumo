<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\BonusPackageRepository;
use App\Repositories\WeekendPackageRepository;

class WeekendPackageService
{
    private WeekendPackageRepository $repo;

    public function __construct(WeekendPackageRepository $repo)
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
            $validated += ['sunday' => $validated['sunday'] ?? NUll];
            $validated += ['monday' => $validated['monday'] ?? NUll];
            $validated += ['tuesday' => $validated['tuesday'] ?? NUll];
            $validated += ['wednesday' => $validated['wednesday'] ?? NUll];
            $validated += ['thursday' => $validated['thursday'] ?? NUll];
            $validated += ['friday' => $validated['friday'] ?? NUll];
            $validated += ['saturday' => $validated['saturday'] ?? NUll];
            $this->repo->update($weekendPackage, $validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
