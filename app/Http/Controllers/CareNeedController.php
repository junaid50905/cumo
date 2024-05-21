<?php

namespace App\Http\Controllers;

use App\Models\CareNeed;
use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Session;
use App\Repositories\CareNeedRepository;
use App\Http\Requests\StoreCareNeedRequest;
use App\Http\Requests\UpdateCareNeedRequest;
use App\Repositories\StudentRepository;
use Illuminate\Contracts\Foundation\Application;

class CareNeedController extends Controller
{
    private UserRepository $userRepo;
    private CareNeedRepository $careRepo;
    private StudentRepository $studentRepo;
    public $careNeed;

    public function __construct(StudentRepository $studentRepo, UserRepository $userRepository, CareNeedRepository $careNeedRepository)
    {
        $this->userRepo = $userRepository;
        $this->careRepo = $careNeedRepository;
        $this->studentRepo = $studentRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('pre_admission.care-need.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareNeedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareNeedRequest $request)
    {
        $this->careRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function show(CareNeed $careNeed)
    {
        $data = [
            'record' => $this->careNeed = $careNeed,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('pre_admission.care-need.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function edit(CareNeed $careNeed)
    {
        $data = [
            'record' => $this->careNeed = $careNeed,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('pre_admission.care-need.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareNeedRequest  $request
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCareNeedRequest $request, CareNeed $careNeed)
    {
        $this->careRepo->update($careNeed, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareNeed $careNeed)
    {
        return $careNeed->delete();
    }
}
