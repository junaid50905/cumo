<?php

namespace App\Http\Controllers;

use App\Models\SendMail;
use App\Http\Requests\StoreSendMailRequest;
use App\Http\Requests\UpdateSendMailRequest;
use App\Repositories\DepartmentSetupRepository;
use App\Repositories\SendMailRepository;

class SendMailController extends Controller
{
    private DepartmentSetupRepository $departmentRepo;

    public function __construct(DepartmentSetupRepository $departmentRepo,
    SendMailRepository $sendMailRepo)
    {
        $this->departmentRepo = $departmentRepo;
        $this->sendMailRepo = $sendMailRepo;
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
        return view('HR.send-mail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSendMailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSendMailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SendMail  $sendMailapse
     * @return \Illuminate\Http\Response
     */
    public function show(SendMail $sendMail)
    {
        $data = [
            'record' => $sendMail,
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.send-mail.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SendMail  $sendMail
     * @return \Illuminate\Http\Response
     */
    public function edit(SendMail $sendMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSendMailRequest  $request
     * @param  \App\Models\SendMail  $sendMail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSendMailRequest $request, SendMail $sendMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SendMail  $sendMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendMail $sendMail)
    {
        return $sendMail->delete();
    }
}
