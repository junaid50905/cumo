<?php

namespace App\Observers;

use App\Models\Payment;
use App\Models\BankAccount;

class DirectPaymentObserver
{


    /**
     * Handle the Payment "created" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function created(Payment $Payment)
    {
        if ($Payment->payment_type == 'Bank to Bank Transfer') {
            $fromAccount = BankAccount::find($Payment->from_account);
            $toAccount = BankAccount::find($Payment->to_account);

            $fromAccount->current_balance -= $Payment->amount;
            $fromAccount->saveQuietly();
            $toAccount->current_balance += $Payment->amount;
            $toAccount->saveQuietly();
        }
    }

    /**
     * Handle the Payment "updated" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function updated(Payment $Payment)
    {
        //
    }

    /**
     * Handle the Payment "deleted" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function deleted(Payment $Payment)
    {
        //
    }

    /**
     * Handle the Payment "restored" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function restored(Payment $Payment)
    {
        //
    }

    /**
     * Handle the Payment "force deleted" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function forceDeleted(Payment $Payment)
    {
        //
    }
}
