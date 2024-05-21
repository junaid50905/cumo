<?php

namespace App\Observers;

use App\Models\Stock;
use App\Models\StockTransferDetail;
use App\Repositories\StockRepository;
use App\Repositories\StockTransferDetailRepository;

class StockTransferDetailObserver
{


    private StockTransferDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(StockTransferDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the StockTransferDetail "created" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function created(StockTransferDetail $stockTransferDetail)
    {
        $stockTransferDetail = $this->repo->getRelatedData($stockTransferDetail, ['stockTransfer']);

        $projectId = $stockTransferDetail->stockTransfer->project_id;
        $productId = $stockTransferDetail->product_id;
        $warehouseIdForm = $stockTransferDetail->stockTransfer->warehouse_id_from;
        $warehouseIdTo = $stockTransferDetail->stockTransfer->warehouse_id_to;
        $stockForm = $this->stockRepo->getDetailAccordingly($projectId, $warehouseIdForm, $productId);

        if ($stockForm) {
            $stockForm->qty -= $stockTransferDetail->transfer_quantity;
            $stockForm->saveQuietly();
        }

        $stockTo = $this->stockRepo->getDetailAccordingly($projectId, $warehouseIdTo, $productId);

        if ($stockTo) {
            $stockTo->qty += $stockTransferDetail->transfer_quantity;
            $stockTo->saveQuietly();
        } else {
            Stock::create([
                'project_id' => $projectId,
                'product_id' => $productId,
                'warehouse_id' => $warehouseIdTo,
                'qty' => $stockTransferDetail->transfer_quantity,
            ]);
        }
    }

    /**
     * Handle the StockTransferDetail "updated" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function updated(StockTransferDetail $stockTransferDetail)
    {
        //
    }

    /**
     * Handle the StockTransferDetail "deleted" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function deleted(StockTransferDetail $stockTransferDetail)
    {
        //
    }

    /**
     * Handle the StockTransferDetail "restored" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function restored(StockTransferDetail $stockTransferDetail)
    {
        //
    }

    /**
     * Handle the StockTransferDetail "force deleted" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function forceDeleted(StockTransferDetail $stockTransferDetail)
    {
        //
    }
}
