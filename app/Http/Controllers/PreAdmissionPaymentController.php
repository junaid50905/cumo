<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePreAdmissionPaymentRequest;
use App\Http\Requests\UpdatePreAdmissionPaymentRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Utility\ProjectConstants;
use App\Repositories\AppointmentRepository;
use App\Repositories\PreAdmissionPaymentRepository;
use App\Models\Appointment;

class PreAdmissionPaymentController extends Controller
{
    private AppointmentRepository $appointmentRepository;
    private PreAdmissionPaymentRepository $preAdmissionPayRepository;

    public function __construct(PreAdmissionPaymentRepository $preAdmissionPayRepository, AppointmentRepository $appointmentRepository) {
        $this->appointmentRepository = $appointmentRepository;
        $this->preAdmissionPayRepository = $preAdmissionPayRepository;
    }

    public function index()
    {
        $sortBy = 'created_at';
        $sortType = 'DESC';
        $allPreAdmissionStudent = $this->appointmentRepository->getAppointmentWithAllPaymentData($sortBy, $sortType);   
        return view('accounting.income.pre_admission.show', compact('allPreAdmissionStudent'));
    }

    public function create()
    {
        // $lastAppointment = Appointment::select('appointments.id as student_appointment_id','appointments.student_id', 'appointment_payments.*')
        //                 ->leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
        //                 ->orderBy('appointments.created_at', 'desc')
        //                 ->first();

        $lastAppointment = $this->appointmentRepository->getLastAppointmentWithPaymentData();

        // dd($lastAppointment);
        $data = [
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'systemStatus' => ProjectConstants::$systemStatus,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'studentData' => $lastAppointment,
        ];
        return view('accounting.income.pre_admission.create', $data);
    }

    public function store(StorePreAdmissionPaymentRequest $request)
    {
        try {
            $userId = Auth::id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;
            // dd($validatedData);
            $message = $this->preAdmissionPayRepository->updateOrCreate($validatedData);
        
            return redirect()->back()->with('success', $message);

        } catch (\Throwable $th) {
            Session::flash('warning','Something went wrong : '.$th->getMessage());
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        $searchData = $request->input('search_id');
        $studentData = $this->appointmentRepository->getSpecificAppointmentWithPaymentData($searchData);
     
        $data = [
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'systemStatus' => ProjectConstants::$systemStatus,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'studentData' => $studentData,
        ];
        return view('accounting.income.pre_admission.edit', $data);
    }

    public function edit ($id)
    {
        $studentData = $this->appointmentRepository->getEditAppointmentWithPaymentData($id);
        // dd($studentData);
        $data = [
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'systemStatus' => ProjectConstants::$systemStatus,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'studentData' => $studentData,
        ];
        return view('accounting.income.pre_admission.edit', $data);
    }

    public function preAdmissionIncomeInvoice()
    {
        return view('accounting.income.pre_admission.invoice');
    }

    public function update(UpdatePreAdmissionPaymentRequest $request)
    {
        // dd($request);
        try {
            $userId = auth()->id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;
            // dd($validatedData);
            $message = $this->preAdmissionPayRepository->updateOrCreate($validatedData);
        
            return redirect()->back()->with('success', $message);

        } catch (\Throwable $th) {
            return redirect()->back()->with('warning', 'Something went wrong: ' . $th->getMessage());
        }
    }
}
