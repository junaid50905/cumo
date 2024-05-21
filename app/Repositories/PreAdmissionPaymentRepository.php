<?php

namespace App\Repositories;


use App\Models\AppointmentPayment;

class PreAdmissionPaymentRepository extends BaseRepository
{
    protected string $model = AppointmentPayment::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
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
