<?php

namespace App\Services;


use App\Models\SupplierPayment;
use Illuminate\Support\Facades\DB;
use App\Repositories\PaymentRepository;
use App\Repositories\SupplierPaymentRepository;

class SupplierPaymentService
{
    private SupplierPaymentRepository $repo;
    private PaymentRepository $paymentRepo;

    /**
     * @param SupplierPaymentRepository $repository
     * @param  $paymentRepository
     */
    public function __construct(
        SupplierPaymentRepository $repository,
        PaymentRepository $paymentRepository
    ) {
        $this->repo       = $repository;
        $this->paymentRepo = $paymentRepository;
    }

    public function store(mixed $validated)
    {
        // Supplier Payment Table
        // payment
        // payment_history
        // dd($validated);
        try {
            DB::beginTransaction();

            [$paymentInfo, $supplierPaymentInfo] = $this->segregateInfo($validated);


            $payment = $this->paymentRepo->store($paymentInfo);

            $payment->supplierPayment()->create($supplierPaymentInfo);

            $payment->history()->create($this->collectPaymentHistoryInfo($validated));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        [$paymentInfo, $data] = $this->collectPaymentInfo($validated);
        $paymentInfo['amount'] = ($validated['cash'] ?? 0) + ($validated['cheque_amount'] ?? 0);
        $paymentInfo['method']   = 'supplier_payment';
        $paymentInfo['user_id']   = auth()->id();
        $paymentInfo['note']   = $validated['note'];


        $supplierPaymentInfo = [
            'project_id' => $validated['project_id'],
            'supplier_id' => $validated['supplier_id'],
            'date' => $validated['date'],
            'purchase_id' => $validated['purchase_id'],
            'remark' => $validated['remark'],
            'note' => $validated['note']
        ];
        // dd($paymentInfo,$supplierPaymentInfo, $data);

        return [$paymentInfo, $supplierPaymentInfo];
    }

    private function collectPaymentInfo(array $data): array
    {
        return extractNecessaryFieldsFromData($data, ['project_id', 'purchase_id']);
    }

    private function collectPaymentHistoryInfo(array $data): array
    {


        $custom = [
            'type' => 'supplier_payment',
            'amount' => ($data['cash'] ?? 0) + ($data['cheque_amount'] ?? 0),
        ];

        $info['info'] = [
            'cash' => $data['cash'],
            'bank_account_id' => $data['bank_account_id'],
            'cheque_id' => $data['cheque_id'],
            'cheque_amount' => $data['cheque_amount']
        ];


        return array_merge($custom, $info);
    }

    public function update(SupplierPayment $supplierPayment, array $validated)
    {
        $supplierPayment = $this->repo->getRelatedData($supplierPayment, ['payment.history']);

        try {
            DB::beginTransaction();

            [$paymentInfo, $supplierPaymentInfo] = $this->segregateInfo($validated);

            $payment = $this->repo->update($supplierPayment->payment, $paymentInfo);

            $this->repo->update($supplierPayment, $supplierPaymentInfo);

            $payment->history()->delete();
            $payment->history()->create($this->collectPaymentHistoryInfo($validated));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
