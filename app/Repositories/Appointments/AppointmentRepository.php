<?php

namespace App\Repositories\Appointments;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Session;
use App\Models\Appointments\Appointment;
use App\Traits\CommonFunctionTrait;

class AppointmentRepository extends BaseRepository
{
    use CommonFunctionTrait;
    protected string $model = Appointment::class;

    public function getEditAppointmentData($editId, $joinTable = null, $foreignKey = null, $localKey = null)
    {
        try {
            $query = $this->model::query();
            
            // $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
            if ($joinTable && $foreignKey && $localKey) {
                $query->leftJoin($joinTable, $localKey, '=', $foreignKey);
            }
           
            $query->where('appointments.id', $editId);
            
            // ->select('appointments.id as student_appointment_id', 'appointments.*', 'appointment_payments.*')
            $query->select('appointments.*');
            
            if ($joinTable) {
                $query->addSelect("{$joinTable}.*");
            }
            
            $appointment = $query->first();
            
            if ($appointment) {
                $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
            }

            return $appointment;
        } catch (\Throwable $th) {
            \Log::error('Error fetching appointment data: ' . $th->getMessage());
            Session::flash('alert', ['type' => 'warning', 'title' => 'Failed!', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function updatedAppointmentData($appointmentId, $data){
        try {
            $this->model::where('id', $appointmentId)
                ->update($data);
            
            return true;
        } catch (\Throwable $th) {
            // Log::error($th->getMessage());
            return false;
        }
    }

    public function getAllPaymentPendingData($sortBy, $sortType){
        try {
            $pendingData = $this->model::where('is_first_payment', '<>', 1)->orderBy($sortBy, $sortType)->get();
            // dd($pendingData);
            return $pendingData;
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title'=> 'Failed!', 'message' => 'Something went wrong : '.$th->getMessage()]);
            return redirect()->back();
        }
    }

    public function getLastAppointmentWithPaymentData()
    {
        $appointment = $this->model::select('appointments.id as student_appointment_id','appointments.student_id', 'appointment_payments.*')
                        ->leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                        ->orderBy('appointments.created_at', 'desc')
                        ->first();
     
        return $appointment;
    }

    public function getAnAppointmentDetails($appointmentId = null, $incomeType = null, $eventType = null, $paymentStatus = null, $studentId = null, $interviewStatus = null)
    {
        // dd($appointmentId, $incomeType, $eventType, $paymentStatus, $studentId);
        try {
            $query = $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
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
                        'main_teacher.id as main_teacher_id',
                        'main_teacher.name as main_teacher_name',
                        'main_teacher.signature as main_teacher_signature',
                        'main_teacher_department.name as main_teacher_department_name',
                        'main_teacher_designation.name as main_teacher_designation_name',
                        'assistant_teacher.id as assistant_teacher_id',
                        'assistant_teacher.name as assistant_teacher_name',
                        'assistant_teacher.signature as assistant_teacher_signature',
                        'assistant_teacher_department.name as assistant_teacher_department_name',
                        'assistant_teacher_designation.name as assistant_teacher_designation_name'
                    );

                if ($appointmentId !== null) {
                    $query->where('appointments.id', $appointmentId);
                }

                if ($incomeType !== null) {
                    $query->where('appointment_payments.income_type', $incomeType);
                }

                if ($eventType !== null) {
                    $query->where('event_calendars.event_type', $eventType);
                }
                
                if ($paymentStatus !== null) {
                    $query->where('appointment_payments.payment_status', $paymentStatus);
                }
                
                if ($studentId !== null) {
                    $query->where('student_id', 'LIKE', '%' . $studentId . '%');
                }
                
                if ($interviewStatus !== null) {
                    $query->where('interview_status', $interviewStatus);
                }
                
                $appointment = $query->orderBy('appointments.created_at', 'desc')->first();
            
                if ($appointment) {
                    $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
                    $appointment->event_type_updated = $appointment->event_type ? $this->mapEventTypeToText($appointment->event_type) : null;
                    $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
                }

                // dd($appointment);
                return $appointment;
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title'=> 'Failed!', 'message' => 'Something went wrong : '.$th->getMessage()]);
            return redirect()->back();
        }
    }

    public function getLastAppointmentForPaymentStatusIncomeType($paymentStatus = 1, $incomeType = null)
    {
        $appointment = $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                                ->select(
                                    'appointments.*',
                                    'appointment_payments.payment_status',
                                    'appointment_payments.income_type'
                                )
                                ->where('appointment_payments.payment_status', $paymentStatus)
                                ->where('appointment_payments.income_type', $incomeType)
                                ->orderBy('appointments.created_at', 'desc')
                                ->first();
        if ($appointment) {
            $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
        }

        // dd($appointment);
        return $appointment;
    }

    // public function getLastAppointmentForPaymentStatusIncomeTypeEventType($paymentStatus = 1, $incomeType = null, $eventType = null)
    // {
    //     $appointment = $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
    //                             ->leftJoin('event_calendars', 'appointments.id', '=', 'event_calendars.appointment_id')
    //                             ->leftJoin('users as main_teacher', 'event_calendars.main_teacher_id', '=', 'main_teacher.id')
    //                             ->leftJoin('departments as main_teacher_department', 'main_teacher.department_id', '=', 'main_teacher_department.id')
    //                             ->leftJoin('designations as main_teacher_designation', 'main_teacher.designation_id', '=', 'main_teacher_designation.id')
    //                             ->leftJoin('users as assistant_teacher', 'event_calendars.assistant_teacher_id', '=', 'assistant_teacher.id')
    //                             ->leftJoin('departments as assistant_teacher_department', 'assistant_teacher.department_id', '=', 'assistant_teacher_department.id')
    //                             ->leftJoin('designations as assistant_teacher_designation', 'assistant_teacher.designation_id', '=', 'assistant_teacher_designation.id')
    //                             ->select(
    //                                 'appointments.*',
    //                                 'appointment_payments.payment_status',
    //                                 'appointment_payments.income_type',
    //                                 'event_calendars.event_type',
    //                                 'main_teacher.id as main_teacher_id',
    //                                 'main_teacher.name as main_teacher_name',
    //                                 'main_teacher.signature as main_teacher_signature',
    //                                 'main_teacher_department.name as main_teacher_department_name',
    //                                 'main_teacher_designation.name as main_teacher_designation_name',
    //                                 'assistant_teacher.id as assistant_teacher_id',
    //                                 'assistant_teacher.name as assistant_teacher_name',
    //                                 'assistant_teacher.signature as assistant_teacher_signature',
    //                                 'assistant_teacher_department.name as assistant_teacher_department_name',
    //                                 'assistant_teacher_designation.name as assistant_teacher_designation_name'
    //                             )
    //                             ->where('appointment_payments.payment_status', $paymentStatus)
    //                             ->where('appointment_payments.income_type', $incomeType)
    //                             ->where('event_calendars.event_type', $eventType)
    //                             ->orderBy('appointments.created_at', 'desc')
    //                             ->first();
    //     if ($appointment) {
    //         $appointment->dob_formatted = \Carbon\Carbon::parse($appointment->dob)->format('d-M-Y');
    //         $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
    //         $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
    //     }

    //     // dd($appointment);
    //     return $appointment;
    // }

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

    public function getSpecificAppointmentForPaymentStatusIncomeType($paymentStatus = null, $incomeType = null, $appointmentId = null)
    {
        $query = $this->model::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
            ->select(
                'appointments.*',
                'appointment_payments.payment_status',
                'appointment_payments.income_type'
            );
        
        if ($paymentStatus !== null) {
            $query->where('appointment_payments.payment_status', $paymentStatus);
        }

        if ($incomeType !== null) {
            $query->where('appointment_payments.income_type', $incomeType);
        }

        if ($appointmentId !== null) {
            $query->where('appointments.id', $appointmentId);
        }
        
        $appointment = $query->orderBy('appointments.created_at', 'desc')->first();
       
        if ($appointment) {
            $appointment->income_type_updated = $appointment->income_type ? $this->mapIncomeTypeToText($appointment->income_type) : null;
            $appointment->payment_status_updated = $appointment->payment_status ? $this->mapPaymentStatusToText($appointment->payment_status) : null;
        }

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
}
