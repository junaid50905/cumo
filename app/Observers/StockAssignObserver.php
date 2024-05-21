<?php

namespace App\Observers;

use App\Models\StockReceiveDetail;
use App\Repositories\StockRepository;
use App\Repositories\StockReceiveDetailRepository;

class StockAssignObserver
{

    // private StockReceiveDetailRepository $repo;
    // private StockRepository $stockRepo;

    // public function __construct(StockReceiveDetailRepository $repository, StockRepository $stockRepository)
    // {
    //     $this->repo = $repository;
    //     $this->stockRepo = $stockRepository;
    // }

    /**
     * Handle the StockReceiveDetail "created" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function created(StockReceiveDetail $stockReceiveDetail)
    {

        // $stockReceiveDetail = $this->repo->getRelatedData($stockReceiveDetail, ['stockReceive']);

        // $projectId = $stockReceiveDetail->stockReceive->project_id;
        // $productId = $stockReceiveDetail->product_id;
        // $warehouseId = $stockReceiveDetail->stockReceive->warehouse_id;

        // $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        // dd( $projectId,$productId, $warehouseId,$stock);

        // if ($stock) {
        //     $stock->qty += $stockReceiveDetail->stock_receive_qty;
        //     $stock->saveQuietly();
        // }
    }

    /**
     * Handle the StockReceiveDetail "updated" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function updated(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }

    /**
     * Handle the StockReceiveDetail "deleted" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function deleted(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }

    /**
     * Handle the StockReceiveDetail "restored" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function restored(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }

    /**
     * Handle the StockReceiveDetail "force deleted" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function forceDeleted(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }
}
