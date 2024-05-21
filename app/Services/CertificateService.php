<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\CertificateRepository;

class CertificateService
{
    private CertificateRepository $repo;

    public function __construct(CertificateRepository $repository)
    {
        $this->repo = $repository;
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

    public function update($certificate, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['type' => $validated['type'] ?? NUll];

            $this->repo->update($certificate, $validated);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
