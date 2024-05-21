<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Models\FunctionalCommunication;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Services\FunctionalCommunicationService;
use App\Http\Requests\FunctionalCommunicationRequest;
use App\Repositories\FunctionalCommunicationRepository;
use App\Http\Requests\UpdateFunctionalCommunicationRequest;

class FunctionalCommunicationController extends Controller
{
    private FunctionalCommunicationRepository $Repo;
    private FunctionalCommunicationService $service;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(
        FunctionalCommunicationRepository $repo,
        UserRepository $userRepository,
        StudentRepository $studentRepository,
        FunctionalCommunicationService $service
    ) {
        $this->repo = $repo;
        $this->service = $service;
        $this->userRepo    = $userRepository;
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
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        return view('assessment.functional-communication.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FunctionalCommunicationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FunctionalCommunicationRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionalCommunication $functionalCommunication)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $functionalCommunication['id'],
            'collection_date' => $functionalCommunication['collection_date'],
            'teacher_id' => $functionalCommunication['teacher_id'],
            'student_id' => $functionalCommunication['student_id'],
            'speech' => $functionalCommunication['speech'],
            'body_language' => $functionalCommunication['body_language'],
            'words_usages_vocabulary' => $functionalCommunication['words_usages_vocabulary'],
            'sentence_structure' => $functionalCommunication['sentence_structure'],
            'relaying_information' => $functionalCommunication['relaying_information'],
            'following_directions' => $functionalCommunication['following_directions'],
            'attention_and_memory' => $functionalCommunication['attention_and_memory'],
            'conversation_social_communication' => $functionalCommunication['conversation_social_communication'],
            'play_skill' => $functionalCommunication['play_skill'],
        ];
        return view('assessment.functional-communication.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function edit(FunctionalCommunication $functionalCommunication)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $functionalCommunication['id'],
            'collection_date' => $functionalCommunication['collection_date'],
            'teacher_id' => $functionalCommunication['teacher_id'],
            'student_id' => $functionalCommunication['student_id'],
            'speech' => $functionalCommunication['speech'],
            'body_language' => $functionalCommunication['body_language'],
            'words_usages_vocabulary' => $functionalCommunication['words_usages_vocabulary'],
            'sentence_structure' => $functionalCommunication['sentence_structure'],
            'relaying_information' => $functionalCommunication['relaying_information'],
            'following_directions' => $functionalCommunication['following_directions'],
            'attention_and_memory' => $functionalCommunication['attention_and_memory'],
            'conversation_social_communication' => $functionalCommunication['conversation_social_communication'],
            'play_skill' => $functionalCommunication['play_skill'],
        ];
        return view('assessment.functional-communication.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunctionalCommunicationRequest  $request
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function update(FunctionalCommunicationRequest $request, FunctionalCommunication $functionalCommunication)
    {
        $this->service->update($functionalCommunication, $request->validated());
        Session::flash('success');
        return redirect()->route('functional-communication.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunctionalCommunication $functionalCommunication)
    {
        return $functionalCommunication->delete();
    }
}
