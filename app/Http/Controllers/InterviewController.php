<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utility\ProjectConstants;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AppointmentRepository;

class InterviewController extends Controller
{

    use WithPagination, CommonListElements;

    public $record;
    private AppointmentRepository $repo;

    public function __construct(

        AppointmentRepository $repo,
    ) {

        $this->repo = $repo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        // dd("ok");
        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
            'paymentGateways' => ProjectConstants::$paymentGateways,
        ];
         return view('pre_admission.interview.create',$data);
    }

    public function interviewList()
    {
        return view('pre_admission.interview.show');
    }
}
