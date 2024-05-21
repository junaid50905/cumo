<?php

namespace App\Http\Controllers;

use App\Models\ClosingAccount;
use Illuminate\Support\Facades\Session;
use App\Repositories\ClosingAccountRepository;
use App\Repositories\ProjectRepository;
use App\Http\Requests\StoreClosingAccountRequest;
use App\Http\Requests\UpdateClosingAccountRequest;

class ClosingAccountController extends Controller
{
    private ClosingAccountRepository $closingRepo;
    private ProjectRepository $projectRepo;

    public function __construct(ClosingAccountRepository $closingRepo,ProjectRepository $projectRepository,)
    {
        $this->closingRepo = $closingRepo;
        $this->projectRepo = $projectRepository;
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
            'projects' => $this->projectRepo->getData(),
        ];
        return view('setup.accounting-mapping.closing_account_setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClosingAccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClosingAccountRequest $request)
    {
        $this->closingRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClosingAccount  $closingAccount
     * @return \Illuminate\Http\Response
     */
    public function show(ClosingAccount $closingAccount)
    {
        $data = [
            'record' => $closingAccount,
            'projects' => $this->projectRepo->getData(),
        ];
        return view('setup.accounting-mapping.closing_account_setup.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClosingAccount  $closingAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(ClosingAccount $closingAccount)
    {
        $data = [
            'record' => $closingAccount,
            'projects' => $this->projectRepo->getData(),
        ];
        return view('setup.accounting-mapping.closing_account_setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClosingAccountRequest  $request
     * @param  \App\Models\ClosingAccount  $closingAccount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClosingAccountRequest $request, ClosingAccount $closingAccount)
    {
        $this->closingRepo->update($closingAccount, $request->validated());
        Session::flash('success');
        return redirect()->route('closing_account.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClosingAccount  $closingAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClosingAccount $closingAccount)
    {
        return $closingAccount->delete();
    }
}
