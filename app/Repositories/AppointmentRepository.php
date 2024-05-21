<?php

namespace App\Repositories;


use App\Models\Appointment;

class AppointmentRepository extends BaseRepository
{
    protected string $model = Appointment::class;

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

    public function getLastAppointmentWithPaymentData()
    {
        $appointment = $this->model::select('appointments.id as student_appointment_id','appointments.student_id', 'appointment_payments.*')
                        ->leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                        ->orderBy('appointments.created_at', 'desc')
                        ->first();
     
        return $appointment;
    }

    public function getLastAppointmentForPaymentStatusIncomeType($paymentStatus = 1, $incomeType = null)
    {
        $appointment = $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                                ->leftJoin('event_calendars', 'appointments.id', '=', 'event_calendars.appointment_id')
                                ->leftJoin('users as main_teacher', 'event_calendars.main_teacher_id', '=', 'main_teacher.id')
                                ->leftJoin('departments as main_teacher_department', 'main_teacher.department_id', '=', 'main_teacher_department.id')
                                ->leftJoin('designations as main_teacher_designation', 'main_teacher.designation_id', '=', 'main_teacher_designation.id')
                                ->leftJoin('users as assistant_teacher', 'event_calendars.assistant_teacher_id', '=', 'assistant_teacher.id')
                                ->leftJoin('departments as assistant_teacher_department', 'assistant_teacher.department_id', '=', 'assistant_teacher_department.id')
                                ->leftJoin('designations as assistant_teacher_designation', 'assistant_teacher.designation_id', '=', 'assistant_teacher_designation.id')
                                ->select(
                                    'appointments.*',
                                    'appointment_payments.payment_status',
                                    'appointment_payments.income_type',
                                    'event_calendars.event_type',
                                    'main_teacher.name as main_teacher_name',
                                    'main_teacher.signature as main_teacher_signature',
                                    'main_teacher_department.name as main_teacher_department_name',
                                    'main_teacher_designation.name as main_teacher_designation_name',
                                    'assistant_teacher.name as assistant_teacher_name',
                                    'assistant_teacher.signature as assistant_teacher_signature',
                                    'assistant_teacher_department.name as assistant_teacher_department_name',
                                    'assistant_teacher_designation.name as assistant_teacher_designation_name'
                                )
                                ->where('appointment_payments.payment_status', 5)
                                ->where('appointment_payments.income_type', 1)
                                ->where('event_calendars.event_type', 1)
                                ->orderBy('appointments.created_at', 'desc')
                                ->first();
        if ($appointment) {
            $appointment->dob_formatted = \Carbon\Carbon::parse($appointment->dob)->format('d-M-Y');
            $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
        }

        // dd($appointment);
        return $appointment;
    }

    public function getEditAppointmentWithPaymentData($editId)
    {
        $appointment = $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                                ->where('appointments.id', $editId)
                                ->select('appointments.id as student_appointment_id', 'appointments.*', 'appointment_payments.*')
                                ->first();
        if ($appointment) {
            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
        }
     
        return $appointment;
    }

    public function getSpecificAppointmentWithPaymentData($searchData)
    {
        $appointment = $this->model::where('student_id', 'LIKE', '%' . $searchData . '%')
                                ->leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                                ->select('appointments.id as student_appointment_id','appointments.*', 'appointment_payments.*')
                                ->first();
        if ($appointment) {
            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
        }
     
        return $appointment;
    }

    public function getSpecificAppointmentForIncomeTypeWithPaymentData($incomeType, $searchData)
    {
        $appointment = $this->model::with(['appointment_payments' => function ($query) use ($incomeType) {
                            $query->select('appointment_id', 'income_type', 'payment_status')
                                ->where('income_type', $incomeType);
                        }])
                        ->where('id', $searchData)
                        ->first();
                        
        if($appointment) {
            $firstPayment = $appointment->appointment_payments ? $appointment->appointment_payments->first() : null;
            $appointment->income_type_updated = $firstPayment ? $this->mapIncomeTypeToText($firstPayment->income_type) : null;
            $appointment->payment_status_updated = $firstPayment ? $this->mapPaymentStatusToText($firstPayment->payment_status) : null;
            unset($appointment->appointment_payments);
        }

        // dd($appointment);

        return $appointment;
    }

    public function getAppointmentWithAllPaymentData($sortBy = 'created_at', $sortType = 'DESC')
    {
        $appointments = $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                        ->select('appointments.*', 'appointment_payments.income_type', 'appointment_payments.payment_status')
                        ->orderBy($sortBy, $sortType)
                        ->get()
                        ->map(function ($appointment) {
                            $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
                            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
                            return $appointment;
                        });

        // dd($appointments);

        return $appointments;
    }

    public function getAppointmentWithPaymentData($incomeType, $sortBy = 'created_at', $sortType = 'DESC')
    {
        $appointments = $this->model::with(['appointment_payments' => function ($query) use ($incomeType) {
                            $query->select('appointment_id', 'income_type', 'payment_status')
                                ->where('income_type', $incomeType);
                        }])
                        ->orderBy($sortBy, $sortType)
                        ->get()
                        ->map(function ($appointment) {
                            $appointment->income_type = $appointment->appointment_payments->pluck('income_type')->first();
                            $appointment->payment_status = $appointment->appointment_payments->pluck('payment_status')->first();
                            $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
                            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
                            unset($appointment->appointment_payments);
                            return $appointment;
                        });

        return $appointments;
    }

    public function getAppointmentsForIncomeTypePaymentStatus($incomeType, $paymentStatus, $sortBy = 'created_at', $sortType = 'DESC')
    {
        $appointments = $this->model::whereHas('appointment_payments', function ($query) use ($incomeType, $paymentStatus) {
                            $query->where('income_type', $incomeType)
                                ->where('payment_status', $paymentStatus);
                        })
                        ->with(['appointment_payments' => function ($query) use ($incomeType, $paymentStatus) {
                            $query->where('income_type', $incomeType)
                                ->where('payment_status', $paymentStatus);
                        }])
                        ->orderBy($sortBy, $sortType)
                        ->get()
                        ->map(function ($appointment) {
                            $appointment->income_type = $appointment->appointment_payments->pluck('income_type')->first();
                            $appointment->payment_status = $appointment->appointment_payments->pluck('payment_status')->first();
                            $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
                            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
                            unset($appointment->appointment_payments);
                            return $appointment;
                        });

        return $appointments;
    }

    public function getInterviewAssessmentData($interviewStatus, $assessmentStatus, $incomeType, $sortBy = 'created_at', $sortType = 'DESC')
    {
        return $this->model::where('interview_status', $interviewStatus)
                        ->where('assessment_status', $assessmentStatus)
                        ->whereHas('appointment_payments', function ($query) use ($incomeType) {
                            $query->where('income_type', $incomeType);
                        })
                        ->with(['appointment_payments' => function ($query) use ($incomeType) {
                            $query->select('id', 'appointment_id', 'payment_status')
                                ->where('income_type', $incomeType);
                        }])
                        ->orderBy($sortBy, $sortType)
                        ->get();
    }


    private function mapIncomeTypeToText($incomeType)
    {
        // dd($incomeType);
        switch ($incomeType) {
            case 1:
                return 'Interview';
            case 2:
                return 'Assessment';
            case 3:
                return 'Observation';
            default:
                return null;
        }
    }

    private function mapPaymentStatusToText($paymentStatus)
    {
        switch ($paymentStatus) {
            case 1:
                return 'Pending';
            case 2:
                return 'Processing';
            case 3:
                return 'Cancel';
            case 4:
                return 'Failed';
            case 5:
                return 'Completed';
            default:
                return null;
        }
    }

}
