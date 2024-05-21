<?php

namespace App\Http\Controllers;

use App\Models\NoticeBoard;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\NoticeBoardRepository;
use App\Http\Requests\StoreNoticeBoardRequest;
use App\Http\Requests\UpdateNoticeBoardRequest;

class NoticeBoardController extends Controller
{

    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private NoticeBoardRepository $noticeRepo;
    public $noticeBoard;

    public function __construct(UserRepository $userRepo, StudentRepository $studentRepo, NoticeBoardRepository $noticeRepo)
    {
        $this->userRepo = $userRepo;
        $this->studentRepo = $studentRepo;
        $this->noticeRepo = $noticeRepo;
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
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        return view('program.notice-board.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoticeBoardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticeBoardRequest $request)
    {
        $this->noticeRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function show(NoticeBoard $noticeBoard)
    {
        $data = [
            'record' => $this->noticeBoard = $noticeBoard,
            'students' => $this->studentRepo->getData(),
        ];
        return view('program.notice-board.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(NoticeBoard $noticeBoard)
    {
        $data = [
            'record' => $this->noticeBoard = $noticeBoard,
            'students' => $this->studentRepo->getData(),
        ];
        return view('program.notice-board.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticeBoardRequest  $request
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNoticeBoardRequest $request, NoticeBoard $noticeBoard)
    {
        $this->noticeRepo->update($noticeBoard, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoticeBoard $noticeBoard)
    {
        return $noticeBoard->delete();
    }
}
