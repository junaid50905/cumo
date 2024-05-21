<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use App\Repositories\UserRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\ReferralRepository;
use App\Http\Requests\StoreReferralRequest;
use App\Http\Requests\UpdateReferralRequest;

class ReferralController extends Controller
{

    private UserRepository $userRepo;
    private DoctorRepository $doctorRepo;
    private StudentRepository $studentRepo;
    private ReferralRepository $referralRepo;

    public $referral;

    public function __construct(UserRepository $userRepo, StudentRepository $studentRepo, DoctorRepository $doctorRepo, ReferralRepository $referralRepo)
    {
        $this->userRepo = $userRepo;
        $this->doctorRepo = $doctorRepo;
        $this->studentRepo = $studentRepo;
        $this->referralRepo = $referralRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'doctors' => $this->doctorRepo->getData(),
            'students' => $this->studentRepo->getData(),
        ];

        return view('referral.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReferralRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReferralRequest $request)
    {
        $this->referralRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function show(Referral $referral)
    {
        $data = [
            'record' => $this->referral = $referral,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'doctors' => $this->doctorRepo->getData(),
        ];
        return view('referral.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function edit(Referral $referral)
    {
        $data = [
            'record' => $this->referral = $referral,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'doctors' => $this->doctorRepo->getData(),
        ];
        return view('referral.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReferralRequest  $request
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReferralRequest $request, Referral $referral)
    {
        $this->referralRepo->update($referral, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referral $referral)
    {
        return $referral->delete();
    }
}
