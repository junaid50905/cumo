<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Utility\ProjectConstants;

use App\Http\Requests\Payments\StoreAppointmentPaymentRequest;
use App\Http\Requests\Payments\UpdateAppointmentPaymentRequest;

use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Payments\AppointmentPaymentRepository;
use App\Models\Appointments\Appointment;

class AppointmentPaymentController extends Controller
{
    private AppointmentRepository $appointmentRepository;
    private AppointmentPaymentRepository $appointmentPaymentRepository;

    public function __construct(AppointmentPaymentRepository $appointmentPaymentRepository, AppointmentRepository $appointmentRepository) {
        $this->appointmentRepository = $appointmentRepository;
        $this->appointmentPaymentRepository = $appointmentPaymentRepository;
    }

    public function index()
    {
        $sortBy = 'created_at';
        $sortType = 'DESC';
        $allPreAdmissionStudent = $this->appointmentPaymentRepository->getAllPaymentData($sortBy, $sortType); 
        // dd($allPreAdmissionStudent);  
        return view('accounting.income.pre_admission.list', compact('allPreAdmissionStudent'));
    } 
    
    public function pending()
    {
        // dd("Pending");
        $sortBy = 'created_at';
        $sortType = 'DESC';
        $allPendingData = $this->appointmentRepository->getAllPaymentPendingData($sortBy, $sortType);
        // dd($allPendingData);  
        return view('accounting.income.pre_admission.pending_list', compact('allPendingData'));
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

    public function store(StoreAppointmentPaymentRequest $request)
    {
        // dd($request);
        try {
            $userId = Auth::id();
            $validatedData = $request->validated();
            $message = $this->paymentDataInsertOrUpdate($validatedData);
        
            Session::flash('alert', ['type' => 'success', 'title'=>'Success!', 'message' => $message]);
            return redirect()->route('pre-admission-income.index');

        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title'=> 'Failed!', 'message' => 'Something went wrong : '.$th->getMessage()]);
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
        // dd($id);
        $studentData = $this->appointmentPaymentRepository->getAnPaymentData($id);
        // dd($studentData);
        $data = [
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'systemStatus' => ProjectConstants::$systemStatus,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'studentData' => $studentData,
        ];

        // dd($data);
        return view('accounting.income.pre_admission.edit', $data);
    } 
    
    public function payment ($id)
    {
        try {
            // dd($id);
            $studentData = $this->appointmentRepository->getEditAppointmentData($id);
            if(!$studentData){
                Session::flash('alert', ['type' => 'warning', 'title'=> 'Not Found!', 'message' => 'Something went wrong : '.$th->getMessage()]);
                return redirect()->back();
            }
            // dd($studentData);
            $data = [
                'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
                'systemStatus' => ProjectConstants::$systemStatus,
                'paymentGateways' => ProjectConstants::$paymentGateways,
                'studentData' => $studentData,
            ];

            // dd($data);
            return view('accounting.income.pre_admission.payment', $data);
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title'=> 'Failed!', 'message' => 'Something went wrong : '.$th->getMessage()]);
            return redirect()->back();
        }
    }

    public function preAdmissionIncomeInvoice()
    {
        return view('accounting.income.pre_admission.invoice');
    }

    public function update(UpdateAppointmentPaymentRequest $request)
    {
        // dd($request);
        try {
            $userId = auth()->id();
            $validatedData = $request->validated();
            $message = $this->paymentDataInsertOrUpdate($validatedData);
            
            Session::flash('alert', ['type' => 'success', 'title'=>'Success!', 'message' => $message]);
            return redirect()->route('pre-admission-income.index');

        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title'=> 'Failed!', 'message' => 'Something went wrong : '.$th->getMessage()]);
            return redirect()->back();
        }
    }

    private function paymentDataInsertOrUpdate($validatedData){
        $userId = auth()->id();
        $validatedData['created_by'] = $userId;
        $payment_status = $validatedData['payment_status'];
        $appointmentId = $validatedData['appointment_id'];
        // dd($validatedData);
        $message = $this->appointmentPaymentRepository->updateOrCreate($validatedData);
        if($message && $payment_status == '5'){
            $data = [
                'is_first_payment' => true
            ];
            $this->appointmentRepository->updatedAppointmentData($appointmentId, $data);
        }else {
            $data = [
                'is_first_payment' => false
            ];
            $this->appointmentRepository->updatedAppointmentData($appointmentId, $data);
        }

        return $message;
    }
}
