<?php

namespace App\Http\Controllers;

use App\Models\NoticeTemplateSetup;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\NoticeTemplateSetupRepository;
use App\Http\Requests\StoreNoticeTemplateSetupRequest;
use App\Http\Requests\UpdateNoticeTemplateSetupRequest;

class NoticeTemplateSetupController extends Controller
{
    private NoticeTemplateSetupRepository $noticeTemplateSetupRepo;
    private StudentRepository $studentRepo;

    public function __construct(NoticeTemplateSetupRepository $noticeTemplateSetupRepo,StudentRepository $studentRepository)
    {
        $this->noticeTemplateSetupRepo = $noticeTemplateSetupRepo;
        $this->studentRepo = $studentRepository;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
        'students' => $this->studentRepo->getData()];

        return view('HR.notice-template-setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoticeTemplateSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticeTemplateSetupRequest $request)
    {
        $this->noticeTemplateSetupRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoticeTemplateSetup  $noticeTemplateSetup
     * @return \Illuminate\Http\Response
     */
    public function show(NoticeTemplateSetup $noticeTemplateSetup)
    {
        // $data = ['record' => $noticeTemplateSetup];
        // return view('HR.notice-template-setup.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoticeTemplateSetup  $noticeTemplateSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(NoticeTemplateSetup $noticeTemplateSetup)
    {
        $data = ['record' => $noticeTemplateSetup,
        'students' => $this->studentRepo->getData(),
    ];
        return view('HR.notice-template-setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticeTemplateSetupRequest  $request
     * @param  \App\Models\NoticeTemplateSetup  $noticeTemplateSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticeTemplateSetupRequest $request, NoticeTemplateSetup $noticeTemplate)
    {
        $this->noticeTemplateSetupRepo->update($noticeTemplate, $request->validated());
        Session::flash('success');
        return redirect()->route('notice-template-setup.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoticeTemplateSetup  $noticeTemplateSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoticeTemplateSetup $noticeTemplate)
    {
        return $noticeTemplate->delete();
    }
}
