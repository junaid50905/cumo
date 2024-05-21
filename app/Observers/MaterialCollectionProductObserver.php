<?php

namespace App\Observers;

use App\Repositories\StockRepository;
use App\Models\MaterialCollectionProduct;
use App\Repositories\MaterialCollectionProductRepository;

class MaterialCollectionProductObserver
{

    private MaterialCollectionProductRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(MaterialCollectionProductRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the MaterialCollectionProduct "created" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function created(MaterialCollectionProduct $materialCollectionProduct)
    {
        $materialCollectionProduct = $this->repo->getRelatedData($materialCollectionProduct, ['materialCollect']);

        $projectId = $materialCollectionProduct->materialCollect->project_id;
        $productId = $materialCollectionProduct->product_id;
        $warehouseId = $materialCollectionProduct->materialCollect->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty -= $materialCollectionProduct->qty;
            $stock->saveQuietly();
        }
    }

    /**
     * Handle the MaterialCollectionProduct "updated" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function updated(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Handle the MaterialCollectionProduct "deleted" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function deleted(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Handle the MaterialCollectionProduct "restored" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function restored(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Handle the MaterialCollectionProduct "force deleted" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function forceDeleted(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }
}
