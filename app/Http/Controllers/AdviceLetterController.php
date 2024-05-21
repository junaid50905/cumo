<?php

namespace App\Http\Controllers;

use App\Models\AdviceLetter;
use App\Http\Requests\StoreAdviceLetterRequest;
use App\Http\Requests\UpdateAdviceLetterRequest;
use App\Repositories\AdviceLetterRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;

class AdviceLetterController extends Controller
{
    private StudentRepository $studentRepo;
    private AdviceLetterRepository $adviceRepo;

    public function __construct(StudentRepository $studentRepo,AdviceLetterRepository $adviceRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->adviceRepo = $adviceRepo;
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
            'students' => $this->studentRepo->getData(),
        ];
        return view('HR.advice-letter.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdviceLetterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdviceLetterRequest $request)
    {
        $this->adviceRepo->store($request->validated());
        Session::flash('success','Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function show(AdviceLetter $adviceLetter)
    {
        $data = [
            'record' => $adviceLetter,
            'students' => $this->studentRepo->getData(),
        ];
        return view('HR.advice-letter.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(AdviceLetter $adviceLetter)
    {
        $data = [
            'record' => $adviceLetter,
            'students' => $this->studentRepo->getData(),
        ];
        return view('HR.advice-letter.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdviceLetterRequest  $request
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdviceLetterRequest $request, AdviceLetter $adviceLetter)
    {
        $this->adviceRepo->update($adviceLetter , $request->validated());
        Session::flash('success','Update');
        return redirect()->route('advice-letter.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdviceLetter $adviceLetter)
    {
        return $adviceLetter->delete();
    }
}
