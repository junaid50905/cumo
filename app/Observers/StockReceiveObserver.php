<?php

namespace App\Observers;

use App\Models\StockReceiveDetail;
use App\Repositories\StockRepository;
use App\Repositories\StockReceiveDetailRepository;

class StockReceiveObserver
{
    private StockReceiveDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(StockReceiveDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the StockReceiveDetail "created" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function created(StockReceiveDetail $stockReceiveDetail): void
    {
        // dump($stockReceiveDetail);
        $stockReceive = $this->repo->getRelatedData($stockReceiveDetail, ['StockReceive']);
        // dump($stockReceiveDetail);

        $projectId = $stockReceive->stockReceive->project_id;
        $productId = $stockReceive->product_id;
        $warehouseId = $stockReceive->stockReceive->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);
        if ($stock) {
            // dump($stock->qty);
            // dump($stockReceiveDetail->stock_receive_qty);

            $stock->qty =  $stock->qty + $stockReceiveDetail->stock_receive_qty;
            // dd($stock->qty);
            $stock->saveQuietly();
        }
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
