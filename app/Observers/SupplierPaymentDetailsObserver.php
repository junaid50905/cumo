<?php

namespace App\Observers;

use App\Models\PaymentHistory;
use App\Repositories\ChequeRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\BankAccountRepository;

class SupplierPaymentDetailsObserver
{


    private PaymentRepository $repo;
    private BankAccountRepository $bankAccRepo;
    private ChequeRepository $chequeRepo;

    public function __construct(
        PaymentRepository $repository,
        BankAccountRepository $bankAccRepository,
        ChequeRepository $chequeRepository,
    ) {
        $this->repo = $repository;
        $this->bankAccRepo = $bankAccRepository;
        $this->chequeRepo = $chequeRepository;
    }

    /**
     * Handle the PaymentHistory "created" event.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return void
     */
    public function created(PaymentHistory $paymentHistory)
    {
        $data = $paymentHistory->toArray()['info'];
        $bankAccountId = $data->bank_account_id;
        $chequeId = $data->cheque_id;
        $chequeAmount = $data->cheque_amount;
        if (!(is_null($bankAccountId) and is_null($chequeId) and is_null($chequeAmount))) {
            $bankAccount = $this->bankAccRepo->getSpecificBankAcc($bankAccountId);
            $cheque = $this->chequeRepo->getSpecificCheque($chequeId);

            $bankAccount->current_balance -= $chequeAmount;
            $bankAccount->saveQuietly();

            $cheque->used = 1;
            $cheque->saveQuietly();
        }
    }

    /**
     * Handle the PaymentHistory "updated" event.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return void
     */
    public function updated(PaymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Handle the PaymentHistory "deleted" event.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return void
     */
    public function deleted(PaymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Handle the PaymentHistory "restored" event.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return void
     */
    public function restored(PaymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Handle the PaymentHistory "force deleted" event.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return void
     */
    public function forceDeleted(PaymentHistory $paymentHistory)
    {
        //
    }
}
