<?php

namespace App\Observers;

use App\Models\Income;

class IncomeObserver
{
    /**
     * Handle the Income "created" event.
     *
     * @param  \App\Models\Income  $income
     * @return void
     */
    public function created(Income $income)
    {
        $income->created_by = auth()->id();

        if (!$income->invoice_no){
            if ($existingLastInvoice = Income::whereNotNull('invoice_no')->latest()->first()) {
                $income->invoice_no = $existingLastInvoice->invoice_no + 1;
            } else {
                $income->invoice_no = 111111;
            }
            $income->saveQuietly();
        }
    }

    /**
     * Handle the Income "updated" event.
     *
     * @param  \App\Models\Income  $income
     * @return void
     */
    public function updated(Income $income)
    {
        //
    }

    /**
     * Handle the Income "deleted" event.
     *
     * @param  \App\Models\Income  $income
     * @return void
     */
    public function deleted(Income $income)
    {
        //
    }

    /**
     * Handle the Income "restored" event.
     *
     * @param  \App\Models\Income  $income
     * @return void
     */
    public function restored(Income $income)
    {
        //
    }

    /**
     * Handle the Income "force deleted" event.
     *
     * @param  \App\Models\Income  $income
     * @return void
     */
    public function forceDeleted(Income $income)
    {
        //
    }
}
