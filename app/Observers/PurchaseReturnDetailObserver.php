<?php

namespace App\Observers;

use App\Models\PurchaseReturnDetail;
use App\Repositories\StockRepository;
use App\Repositories\PurchaseReturnDetailRepository;

class PurchaseReturnDetailObserver
{
    private PurchaseReturnDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(PurchaseReturnDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the PurchaseReturnDetail "created" event.
     *
     * @param PurchaseReturnDetail $purchaseReturnDetail
     *
     * @return void
     */
    public function created(PurchaseReturnDetail $purchaseReturnDetail)
    {
        $purchaseReturnDetail = $this->repo->getRelatedData($purchaseReturnDetail, ['purchaseReturn.purchase.requisition']);

        $projectId = $purchaseReturnDetail->purchaseReturn->purchase->requisition->project_id;
        $warehouseId = $purchaseReturnDetail->purchaseReturn->purchase->requisition->warehouse_id;
        $productId = $purchaseReturnDetail->product_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        $stock->qty -= $purchaseReturnDetail->qty;
        $stock->saveQuietly();
    }

    /**
     * Handle the PurchaseReturnDetail "updated" event.
     *
     * @param PurchaseReturnDetail $purchaseReturnDetail
     *
     * @return void
     */
    public function updated(PurchaseReturnDetail $purchaseReturnDetail)
    {
        //
    }

    /**
     * Handle the PurchaseReturnDetail "deleted" event.
     *
     * @param PurchaseReturnDetail  $purchaseReturnDetail
     *
     * @return void
     */
    public function deleted(PurchaseReturnDetail $purchaseReturnDetail)
    {
        //
    }

    /**
     * Handle the PurchaseReturnDetail "restored" event.
     *
     * @param PurchaseReturnDetail  $purchaseReturnDetail
     *
     * @return void
     */
    public function restored(PurchaseReturnDetail $purchaseReturnDetail)
    {
        //
    }

    /**
     * Handle the PurchaseReturnDetail "force deleted" event.
     *
     * @param PurchaseReturnDetail  $purchaseReturnDetail
     *
     * @return void
     */
    public function forceDeleted(PurchaseReturnDetail $purchaseReturnDetail)
    {
        //
    }
}
