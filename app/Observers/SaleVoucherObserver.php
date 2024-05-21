<?php

namespace App\Observers;

use App\Models\Stock;
use App\Models\SaleIncome;
use App\Models\SaleIncomeDetail;
use App\Repositories\StockRepository;
use App\Repositories\SaleIncomeDetailRepository;

class SaleVoucherObserver
{
    private SaleIncomeDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(SaleIncomeDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the SaleIncomeDetail "created" event.
     *
     * @param \App\Models\SaleIncomeDetail $saleIncomeDetail
     *
     * @return void
     */
    public function created(SaleIncomeDetail $saleIncomeDetail)
    {
        $saleIncomeDetail = $this->repo->getRelatedData($saleIncomeDetail, ['saleIncome.income']);

        $projectId = $saleIncomeDetail->saleIncome->income->project_id;
        $productId = $saleIncomeDetail->product_id;
        $warehouseId = $saleIncomeDetail->saleIncome->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty -= $saleIncomeDetail->qty;
            $stock->saveQuietly();
        }
    }

    /**
     * Handle the SaleIncomeDetail "updated" event.
     *
     * @param \App\Models\SaleIncomeDetail $saleIncomeDetail
     *
     * @return void
     */
    public function updated(SaleIncomeDetail $saleIncomeDetail)
    {
        //
    }

    /**
     * Handle the SaleIncomeDetail "deleted" event.
     *
     * @param \App\Models\SaleIncomeDetail $saleIncomeDetail
     *
     * @return void
     */
    public function deleting(SaleIncomeDetail $saleIncomeDetail)
    {
        $saleIncomeDetail = $this->repo->getRelatedData($saleIncomeDetail, ['saleIncome.income']);

        $projectId = $saleIncomeDetail->saleIncome->income->project_id;
        $productId = $saleIncomeDetail->product_id;
        $warehouseId = $saleIncomeDetail->saleIncome->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty += $saleIncomeDetail->qty;
            $stock->saveQuietly();
        }
    }

    /**
     * Handle the SaleIncomeDetail "restored" event.
     *
     * @param \App\Models\SaleIncomeDetail $saleIncomeDetail
     *
     * @return void
     */
    public function restored(SaleIncomeDetail $saleIncomeDetail)
    {
        //
    }

    /**
     * Handle the SaleIncomeDetail "force deleted" event.
     *
     * @param \App\Models\SaleIncomeDetail $saleIncomeDetail
     *
     * @return void
     */
    public function forceDeleted(SaleIncomeDetail $saleIncomeDetail)
    {
        //
    }
}
