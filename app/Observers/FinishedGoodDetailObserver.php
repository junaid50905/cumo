<?php

namespace App\Observers;

use App\Models\Stock;
use App\Models\FinishedGoodDetail;
use App\Repositories\StockRepository;
use App\Repositories\FinishedGoodDetailRepository;

class FinishedGoodDetailObserver
{

    private FinishedGoodDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(FinishedGoodDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the FinishedGoodDetail "created" event.
     *
     * @param  \App\Models\FinishedGoodDetail  $finishedGoodDetail
     * @return void
     */
    public function created(FinishedGoodDetail $finishedGoodDetail)
    {
        $finishedGoodDetail = $this->repo->getRelatedData($finishedGoodDetail, ['finishedGood']);

        $projectId = $finishedGoodDetail->finishedGood->project_id;
        $productId = $finishedGoodDetail->product_id;
        $warehouseId = $finishedGoodDetail->finishedGood->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty += $finishedGoodDetail->qty;
            $stock->saveQuietly();
        } else {
            Stock::create([
                'project_id' => $projectId,
                'product_id' => $productId,
                'warehouse_id' => $warehouseId,
                'qty' => $finishedGoodDetail->qty,
            ]);
        }
    }

    /**
     * Handle the FinishedGoodDetail "updated" event.
     *
     * @param  \App\Models\FinishedGoodDetail  $finishedGoodDetail
     * @return void
     */
    public function updated(FinishedGoodDetail $finishedGoodDetail)
    {
        //
    }

    /**
     * Handle the FinishedGoodDetail "deleted" event.
     *
     * @param  \App\Models\FinishedGoodDetail  $finishedGoodDetail
     * @return void
     */
    public function deleted(FinishedGoodDetail $finishedGoodDetail)
    {
        //
    }

    /**
     * Handle the FinishedGoodDetail "restored" event.
     *
     * @param  \App\Models\FinishedGoodDetail  $finishedGoodDetail
     * @return void
     */
    public function restored(FinishedGoodDetail $finishedGoodDetail)
    {
        //
    }

    /**
     * Handle the FinishedGoodDetail "force deleted" event.
     *
     * @param  \App\Models\FinishedGoodDetail  $finishedGoodDetail
     * @return void
     */
    public function forceDeleted(FinishedGoodDetail $finishedGoodDetail)
    {
        //
    }
}
