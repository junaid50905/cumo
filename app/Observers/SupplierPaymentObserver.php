<?php

namespace App\Observers;

use App\Models\SupplierPayment;
use App\Repositories\PurchaseRepository;

class SupplierPaymentObserver
{

    private PurchaseRepository $purchaseRepo;

    public function __construct(
        PurchaseRepository $purchaseRepository,
    ) {
        $this->purchaseRepo = $purchaseRepository;
    }
    /**
     * Handle the SupplierPayment "created" event.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return void
     */
    public function created(SupplierPayment $supplierPayment)
    {

        // $totalAmount = (((int) request()->all()['serverMemo']['data']['cash'] ?? 0) + ((int) request()->all()['serverMemo']['data']['cheque_amount'] ?? 0));

        // $purchaseData = $this->purchaseRepo->getPurchaseData(request()->all()['serverMemo']['data']['purchase_id']);

        // dd($purchaseData);
        // // if ($purchaseData) {
        // //     $purchaseData->total_paid_amount += $totalAmount;
        // //     $purchaseData->saveQuietly();
        // // }
    }

    /**
     * Handle the SupplierPayment "updated" event.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return void
     */
    public function updated(SupplierPayment $supplierPayment)
    {
        //
    }

    /**
     * Handle the SupplierPayment "deleted" event.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return void
     */
    public function deleted(SupplierPayment $supplierPayment)
    {
        //
    }

    /**
     * Handle the SupplierPayment "restored" event.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return void
     */
    public function restored(SupplierPayment $supplierPayment)
    {
        //
    }

    /**
     * Handle the SupplierPayment "force deleted" event.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return void
     */
    public function forceDeleted(SupplierPayment $supplierPayment)
    {
        //
    }
}
