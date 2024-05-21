<?php

namespace App\Observers;

use App\Models\StockOutDetail;
use App\Repositories\StockRepository;
use App\Repositories\StockOutDetailRepository;

class StockOutDetailObserver
{


    private StockOutDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(StockOutDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the StockOutDetail "created" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function created(StockOutDetail $stockOutDetail)
    {
        $stockReceiveDetail = $this->repo->getRelatedData($stockOutDetail, ['stockOut']);

        $projectId = $stockReceiveDetail->stockOut->project_id;
        $productId = $stockReceiveDetail->product_id;
        $warehouseId = $stockReceiveDetail->stockOut->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty -= $stockReceiveDetail->stock_out;
            $stock->saveQuietly();
        }
    }

    /**
     * Handle the StockOutDetail "updated" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function updated(StockOutDetail $stockOutDetail)
    {
        //
    }

    /**
     * Handle the StockOutDetail "deleted" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function deleted(StockOutDetail $stockOutDetail)
    {
        //
    }

    /**
     * Handle the StockOutDetail "restored" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function restored(StockOutDetail $stockOutDetail)
    {
        //
    }

    /**
     * Handle the StockOutDetail "force deleted" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function forceDeleted(StockOutDetail $stockOutDetail)
    {
        //
    }
}
