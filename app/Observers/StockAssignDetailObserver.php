<?php

namespace App\Observers;

use App\Models\StockAssignDetail;
use App\Repositories\StockRepository;
use App\Repositories\StockAssignDetailRepository;

class StockAssignDetailObserver
{

    private StockAssignDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(StockAssignDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }
    /**
     * Handle the StockAssignDetail "created" event.
     *
     * @param  \App\Models\StockAssignDetail  $stockAssignDetail
     * @return void
     */
    public function created(StockAssignDetail $stockAssignDetail)
    {
        $stockAssignDetail = $this->repo->getRelatedData($stockAssignDetail, ['stockAssign']);

        $projectId = $stockAssignDetail->stockAssign->project_id;
        $productId = $stockAssignDetail->product_id;
        $warehouseId = $stockAssignDetail->stockAssign->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty -= $stockAssignDetail->stock_out;
            $stock->saveQuietly();
        }
    }

    /**
     * Handle the StockAssignDetail "updated" event.
     *
     * @param  \App\Models\StockAssignDetail  $stockAssignDetail
     * @return void
     */
    public function updated(StockAssignDetail $stockAssignDetail)
    {
        //
    }

    /**
     * Handle the StockAssignDetail "deleted" event.
     *
     * @param  \App\Models\StockAssignDetail  $stockAssignDetail
     * @return void
     */
    public function deleted(StockAssignDetail $stockAssignDetail)
    {
        //
    }

    /**
     * Handle the StockAssignDetail "restored" event.
     *
     * @param  \App\Models\StockAssignDetail  $stockAssignDetail
     * @return void
     */
    public function restored(StockAssignDetail $stockAssignDetail)
    {
        //
    }

    /**
     * Handle the StockAssignDetail "force deleted" event.
     *
     * @param  \App\Models\StockAssignDetail  $stockAssignDetail
     * @return void
     */
    public function forceDeleted(StockAssignDetail $stockAssignDetail)
    {
        //
    }
}
