<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\YearEndClose;
use App\Repositories\YearEndCloseRepository;


class YearEndCloseService
{
    private YearEndCloseRepository $repo;

    public function __construct(YearEndCloseRepository $repository)
    {
        $this->repo = $repository;
    }


    public function store(array $validated)
    {

        try {
            DB::beginTransaction();
            [$yearData, $data] = $this->collectYear($validated);
            $year = $this->repo->store($yearData);
            $yearDetailsInfos = $this->collectYearDetailsInfos($data);
            $year->details()->createMany($yearDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }


    
    private function collectYear(array $validated)
    {
        [$year, $data] = extractNecessaryFieldsFromData($validated, [
            'warehouse_id', 'date', 'note'
        ]);
        $year['created_by'] = auth()->id();

        return [$year, $data];
    }

    private function collectYearDetailsInfos(mixed $data): array
    {
        [$yearDetailsInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'unit', 'counted_stock']);
        for ($i = 0; $i < count($yearDetailsInfos['product_id']); $i++) {
            $custom[$i] = [
                
                'product_id' => $yearDetailsInfos['product_id'][$i],
                'unit' => $yearDetailsInfos['unit'][$i],
                'counted_stock' => $yearDetailsInfos['counted_stock'][$i],

            ];
        }
        return $custom ?? [];
    }

    public function update($year, array $validated)
    {

        try {
            DB::beginTransaction();
            [$yearData, $data] = $this->collectYear($validated);
            $yearData = $this->repo->update($year, $yearData);
            $yearDetailsInfos = $this->collectYearDetailsInfos($data);
            $yearData->details()->createMany($yearDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    }

