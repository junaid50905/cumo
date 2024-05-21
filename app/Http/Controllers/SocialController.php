<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Requests\SocialRequest;
use App\Models\Social;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\Factory;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Foundation\Application;
use App\Services\SocialCommunicationService;

class SocialController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private SocialCommunicationService $service;
    public $record;

    public function __construct(UserRepository $userRepository, StudentRepository $studentRepository, SocialCommunicationService $service)
    {
        $this->userRepo = $userRepository;
        $this->studentRepo = $studentRepository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        return view('assessment.social-communication.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SocialRequest $request
     *
     * @return Response
     */
    public function store(SocialRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Social $social_communication)
    {
        
        $data = [
            
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $social_communication['id'],
            'collection_date' => $social_communication['collection_date'],
            'teacher_id' => $social_communication['teacher_id'],
            'student_id' => $social_communication['student_id'],
            'pragmatic_objective' => $social_communication['pragmatic_objective'],
            'personal' => $social_communication['personal'],
            'topic_maintenance' => $social_communication['topic_maintenance'],
            'conversational_structure' => $social_communication['conversational_structure'],
            'word_structure' => $social_communication['word_structure'],
            'manner_effectiveness' => $social_communication['manner_effectiveness'],
            'repair_structures' => $social_communication['repair_structures'],
            'responsiveness' => $social_communication['responsiveness'],
            'instrumental_states_needs' => $social_communication['instrumental_states_needs'],
            'requesting' => $social_communication['requesting'],
            'prosody' => $social_communication['prosody'],
            'protests' => $social_communication['protests'],
            'style_of_conversation' => $social_communication['style_of_conversation'],
            'humor' => $social_communication['humor'],
            'greetings_acknowledgements' => $social_communication['greetings_acknowledgements'],
            'problem_solving' => $social_communication['problem_solving'],
            'deceit' => $social_communication['deceit'],
            'academy_communication' => $social_communication['academy_communication'],
            'nonverbal_communication' => $social_communication['nonverbal_communication'],
            'perspective_taking' => $social_communication['perspective_taking'],
            'regulatory_gives_commands' => $social_communication['regulatory_gives_commands'],
            'social_emotional' => $social_communication['social_emotional'],
        ];
        return view('assessment.social-communication.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Application|Factory|View
     */
    public function edit(Social $social_communication): View|Factory|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $social_communication['id'],
            'collection_date' => $social_communication['collection_date'],
            'teacher_id' => $social_communication['teacher_id'],
            'student_id' => $social_communication['student_id'],
            'pragmatic_objective' => $social_communication['pragmatic_objective'],
            'personal' => $social_communication['personal'],
            'topic_maintenance' => $social_communication['topic_maintenance'],
            'conversational_structure' => $social_communication['conversational_structure'],
            'word_structure' => $social_communication['word_structure'],
            'manner_effectiveness' => $social_communication['manner_effectiveness'],
            'repair_structures' => $social_communication['repair_structures'],
            'responsiveness' => $social_communication['responsiveness'],
            'instrumental_states_needs' => $social_communication['instrumental_states_needs'],
            'requesting' => $social_communication['requesting'],
            'prosody' => $social_communication['prosody'],
            'protests' => $social_communication['protests'],
            'style_of_conversation' => $social_communication['style_of_conversation'],
            'humor' => $social_communication['humor'],
            'greetings_acknowledgements' => $social_communication['greetings_acknowledgements'],
            'problem_solving' => $social_communication['problem_solving'],
            'deceit' => $social_communication['deceit'],
            'academy_communication' => $social_communication['academy_communication'],
            'nonverbal_communication' => $social_communication['nonverbal_communication'],
            'perspective_taking' => $social_communication['perspective_taking'],
            'regulatory_gives_commands' => $social_communication['regulatory_gives_commands'],
            'social_emotional' => $social_communication['social_emotional'],
        ];

        return view('assessment.social-communication.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     *
     * @return Response
     */ 
    public function update(SocialRequest $request, Social $social_communication)
    { 
        $this->service->update($social_communication, $request->validated());
        Session::flash('success');
        return redirect()->route('social-communication.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Social $social_communication)
    {
        return $social_communication->delete();
    }
}
