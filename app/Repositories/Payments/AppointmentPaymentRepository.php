<?php

namespace App\Repositories\Payments;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Session;
use App\Models\Payments\AppointmentPayment;
use App\Models\Appointments\Appointment;
use App\Traits\CommonFunctionTrait;

class AppointmentPaymentRepository extends BaseRepository
{
    use CommonFunctionTrait;

    protected string $model = AppointmentPayment::class;

    // public function getListData($perPage, $search)
    // {
    //     return $this->model::when($search, function ($query) use ($search) {
    //         $query->where("address", "like", "%$search%")
    //             ->orWhere("email", "like", "%$search%")
    //             ->orWhere("phone", "like", "%$search%")
    //             //                  ->orWhere('student.name', 'like', "%$search%")
    //         ;
    //     })->latest()->paginate($perPage);
    // }

    public function getAllPaymentData($sortBy, $sortType, $incomeType = null, $paymentStatus = null)
    {
        // dd($sortBy, $sortType);
        try {
            $query = $this->model::leftJoin('appointments', 'appointment_payments.appointment_id', '=', 'appointments.id')
                    ->select(
                        'appointments.id as appointment_id',
                        'appointments.student_id',
                        'appointments.name',
                        'appointments.created_at as appointment_date',
                        'appointments.phone_number',
                        'appointments.interview_status',
                        'appointments.assessment_status',
                        'appointment_payments.*'
                    );

                if ($incomeType !== null) {
                    $query->where('appointment_payments.income_type', $incomeType);
                }

                if ($paymentStatus !== null) {
                    $query->where('appointment_payments.payment_status', $paymentStatus);
                }

                // Ordering by the specified column and sort type
                $allPayments = $query->orderBy("appointment_payments.{$sortBy}", $sortType)->get();


            // dd($allPayments);

            $allPayments->each(function ($item) {
                $item->income_type_updated = $item->income_type ? $this->mapIncomeTypeToText($item->income_type) : null;
                $item->payment_status_updated = $item->payment_status ? $this->mapPaymentStatusToText($item->payment_status) : null;
            });

            return $allPayments;
        } catch (\Throwable $th) {
            \Log::error('Error fetching payment data: ' . $th->getMessage());
            
            Session::flash('alert', ['type' => 'warning', 'title'=> 'Failed!', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function getAnPaymentData($editId = null, $appointmentId = null, $incomeType = null, $paymentStatus = null)
    {
        try {
            $query = $this->model::leftJoin('appointments', 'appointment_payments.appointment_id', '=', 'appointments.id')
                ->select(
                    'appointments.id',
                    'appointments.student_id',
                    'appointment_payments.*'
                );

            // Apply filters conditionally
            if ($editId !== null) {
                $query->where('appointment_payments.id', $editId);
            }
            
            if ($appointmentId !== null) {
                $query->where('appointments.id', $appointmentId);
            }

            if ($incomeType !== null) {
                $query->where('appointment_payments.income_type', $incomeType);
            }

            if ($paymentStatus !== null) {
                $query->where('appointment_payments.payment_status', $paymentStatus);
            }
            
            $anPaymentData = $query->orderBy('appointments.created_at', 'desc')->first();

            // dd($anPaymentData);

            if ($anPaymentData) {
                $anPaymentData->income_type_updated = $anPaymentData->income_type ? $this->mapIncomeTypeToText($anPaymentData->income_type) : null;
                $anPaymentData->payment_status_updated = $anPaymentData->payment_status ? $this->mapPaymentStatusToText($anPaymentData->payment_status) : null;
            }

            return $anPaymentData;

        } catch (\Throwable $th) {
            \Log::error('Error fetching payment data: ' . $th->getMessage());
            
            Session::flash('alert', ['type' => 'warning', 'title'=> 'Failed!', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function updateOrCreate(array $data)
    {
        // Extract fields from data
        $transactionId = $data['transaction_id'] ?? null;
        $appointmentId = $data['appointment_id'] ?? null;
        $incomeType = $data['income_type'] ?? null;

        // Check if all required fields are present
        if ($transactionId && $appointmentId && $incomeType) {
            $record = $this->model::updateOrCreate([
                'transaction_id' => $transactionId,
                'appointment_id' => $appointmentId,
                'income_type' => $incomeType,
            ], $data);

            return $record->wasRecentlyCreated ? 'Pre-Admission Payment Created Successfully!' : 'Pre-Admission Payment Updated Successfully!';
        } else {
            $this->model::create($data);
            return 'Pre-Admission Payment Created Successfully!';
        }
    }
}
