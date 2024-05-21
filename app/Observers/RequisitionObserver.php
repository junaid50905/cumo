<?php

namespace App\Observers;

use App\Models\Requisition;

class RequisitionObserver
{
    /**
     * Handle the Requisition "created" event.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return void
     */
    public function created(Requisition $requisition)
    {

        if (!$requisition->number) {
            if ($existingLastNumber = Requisition::whereNotNull('number')->latest()->first()) {
                $requisition->number = $existingLastNumber->number + 1;
            } else {
                $requisition->number = 10000;
            }
            $requisition->saveQuietly();
        }
    }

    /**
     * Handle the Requisition "updated" event.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return void
     */
    public function updated(Requisition $requisition)
    {
        //
    }

    /**
     * Handle the Requisition "deleted" event.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return void
     */
    public function deleted(Requisition $requisition)
    {
        //
    }

    /**
     * Handle the Requisition "restored" event.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return void
     */
    public function restored(Requisition $requisition)
    {
        //
    }

    /**
     * Handle the Requisition "force deleted" event.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return void
     */
    public function forceDeleted(Requisition $requisition)
    {
        //
    }
}