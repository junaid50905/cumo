<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Repositories\IncomeRepository;

class SaleVoucherService
{
    private IncomeRepository $repo;

    public function __construct(IncomeRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(mixed $validated)
    {
        $date = Carbon::now()->format('d-m-Y');
        try {
            DB::beginTransaction();
            [$incomeInfo, $saleIncomeInfo, $data] = $this->segregateInfo($validated);
            $income = $this->repo->store($incomeInfo);
            $income->date = $date;
            $income->save();
            $saleIncome = $income->saleIncome()->create($saleIncomeInfo);

            $details = $this->collectDetails($data);

            $saleIncome->details()->createMany($details);

            $income->history()->create($this->collectIncomeHistoryInfo($validated));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        [$incomeInfo, $data] = $this->collectIncomeInfo($validated);

        [$saleIncomeInfo, $data] = $this->collectSaleIncomeInfo($data);

        $incomeInfo['amount'] = array_sum($validated['sub_total']);
        $incomeInfo['type']   = 'sale';

        return [$incomeInfo, $saleIncomeInfo, $data];
    }

    private function collectIncomeInfo(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, ['project_id', 'type', 'created_by', 'date', 'invoice_no', 'note', 'due_amount']);
    }

    private function collectSaleIncomeInfo(array $data): array
    {
        return extractNecessaryFieldsFromData($data, ['customer_id', 'ship_to_address', 'warehouse_id']);
    }

    private function collectIncomeHistoryInfo(array $data): array
    {
        $custom = [
            'type' => 'sale',
            'amount' => array_sum($data['sub_total']),
        ];

        $searchString = 'cash|cheque*|card*';

        $paymentInfo = [];
        foreach ($data as $key => $val) {
            if (preg_match("/($searchString)/", $key)) {
                $paymentInfo['info'][$key] = $val;
            }
        }

        return array_merge($custom, $paymentInfo);
    }

    public function update($income, $validated)
    {
        try {
            DB::beginTransaction();
            [$incomeInfo, $saleIncomeInfo, $data] = $this->segregateInfo($validated);
            $income = $this->repo->update($income, $incomeInfo);

            $incomeWithRelatedInfo = $this->repo->specificIncomeWithSaleIncomeRelations($income);

            foreach ($incomeWithRelatedInfo->saleIncome->details as $detail) {
                $detail->delete();
            }

            $income->saleIncome()->delete();
            $income->history()->delete();

            $saleIncome = $income->saleIncome()->create($saleIncomeInfo);

            $details = $this->collectDetails($data);

            $saleIncome->details()->createMany($details);

            $income->history()->create($this->collectIncomeHistoryInfo($validated));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getFile(), $e->getLine());
        }
    }

    private function getOnlyNotEmptyRecords($data)
    {
        foreach ($data as $key => $val) {
            if (!$val) {
                unset($data[$key]);
                break;
            }
        }

        return $data;
    }

    private function collectDetails(array $data): array
    {
        [$details, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'qty', 'sub_total', 'discount', 'price', 'available_qty']);

        for ($i = 0; $i < count($details['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $details['product_id'][$i],
                'qty' => $details['qty'][$i],
                'sub_total' => $details['sub_total'][$i],
                'discount' => $details['discount'][$i],
                'price' => $details['price'][$i],
                'available_qty' => $details['available_qty'][$i],
            ];
        }

        return $custom ?? [];
    }
}
