<?php

namespace App\Observers;

use App\Models\StockReceiveDetail;
use App\Repositories\StockRepository;
use App\Repositories\PurchaseDetailRepository;
use App\Repositories\StockReceiveDetailRepository;

class StockReceiveDetailObserver
{

    private StockReceiveDetailRepository $repo;
    private StockRepository $stockRepo;
    private PurchaseDetailRepository $purchaseDetailRepo;

    public function __construct(
        StockReceiveDetailRepository $repository,
        StockRepository $stockRepository,
        PurchaseDetailRepository $purchaseDetailRepository
    ) {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
        $this->purchaseDetailRepo = $purchaseDetailRepository;
    }

    /**
     * Handle the StockReceiveDetail "created" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function created(StockReceiveDetail $stockReceiveDetail)
    {



        $stockReceiveDetail = $this->repo->getRelatedData($stockReceiveDetail, ['stockReceive']);

        $projectId = $stockReceiveDetail->stockReceive->project_id;
        $productId = $stockReceiveDetail->product_id;
        $warehouseId = $stockReceiveDetail->stockReceive->warehouse_id;

        $purchaseId = $stockReceiveDetail->stockReceive->purchase_id;

        $purchaseDetailData = $this->purchaseDetailRepo->getPurchaseData($productId, $purchaseId);




        if ($purchaseDetailData) {
            $purchaseDetailData->total_receive_qty += $stockReceiveDetail->stock_receive_qty;
            $purchaseDetailData->receivable += ($stockReceiveDetail->receivable - $stockReceiveDetail->stock_receive_qty);
            $purchaseDetailData->saveQuietly();
            // dd($purchaseDetailData);
        }

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty += $stockReceiveDetail->stock_receive_qty;
            $stock->saveQuietly();
        }

        // $purchaseDetailProduct = $this->purchaseDetailRepo->getDueCell();
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
