<?php

namespace App\Http\Livewire\AssessmentChecklists;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Utility\ProjectConstants;
use App\Models\LinkCodeCount\LinkCodeCount;
use App\Models\Assessments\AssessmentChecklistQuesAns;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Events\EventCalendarRepository;

class SocialCommunicationAdultChecklist extends Component
{
    protected AppointmentRepository $appointmentRepository;
    protected EventCalendarRepository $eventCalendarRepository;
    public $checklistId;
    public $checklistTitle;
    public $searchId;
    public $categoryId;
    public $appointmentId;
    public $currentTabLivewire = 0;
    public $formData = [
        'answers' => []
    ];
    public $questions = [];

    public $noOptions = [];

    public $options = [
        '1' => 'Not Present',
        '2' => 'Uses NO Words (Gestures - Preverbal)',
        '3' => 'Uses 1-3 Words / sentenses',
        '4' => 'Able to communicate/ express opinion',
        '5' => 'Uses Complex Language',
    ];


    public function changeCurrentTab($index)
    {
        $this->currentTabLivewire = $index;
    }

    public function __construct()
    {
        parent::__construct();
        $this->appointmentRepository = app(AppointmentRepository::class);
        $this->eventCalendarRepository = app(EventCalendarRepository::class);
    }

    public function mount($checklistId = null, $searchId = null)
    {
        $this->checklistId = $checklistId; // Category/Tools Id
        $this->searchId = $searchId; // Student ID
        // dd((int) $this->checklistId, $this->searchId, 'Livewire');
        $this->categoryId = (int) $this->checklistId; // 1 = Child Age 11-17

        $paymentStatus = 5;
        $incomeType = 2;
        $eventType = 2;

        $introduction = $this->appointmentRepository->getAnAppointmentDetails(null, $incomeType, $eventType, $paymentStatus);
        $this->formData['introduction'] = $this->getIntroductionData($introduction);
        $this->appointmentId = $introduction->id ?? null;

        // Load questions
        $this->questions = [
            'Social Interaction' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'Interaction with adults', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'Interaction with age-appropriate peers', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'Interaction with younger children', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'Waiting for a response from peers.', 'options' => $this->options, 'link_codes' => ['Ind.a.1', 'Ind.a.7', 'D4.c.1']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'Negotiating deals', 'options' => $this->options, 'link_codes' => ['Ind.a.2']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'Taking turns', 'options' => $this->options, 'link_codes' => ['Ind.a.2']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'Ability to interact with many individuals simultaneously', 'options' => $this->options, 'link_codes' => ['Ind.a.2', 'D4.c.1']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'Ability to establish multiple friendships', 'options' => $this->options, 'link_codes' => ['Ind.a.7']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 9, 'question' => 'Knowing when to persist or let go of an idea', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 10, 'question' => 'Interpreting facial expressions and voices', 'options' => $this->options, 'link_codes' => ['D2.b.3.23']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 11, 'question' => 'Understanding the rules of the game', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 12, 'question' => 'Expressing various appropriate expressions', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 13, 'question' => 'Receiving and giving gifts', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 14, 'question' => 'Understanding sharing and the concept of give and take', 'options' => $this->options, 'link_codes' => ['D4.c']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 15, 'question' => 'Participation in group activities', 'options' => $this->options, 'link_codes' => ['D4.a.2']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 16, 'question' => 'Passive tendencies', 'options' => $this->options, 'link_codes' => ['D4.c.6']],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 17, 'question' => 'Aggressive tendencies', 'options' => $this->options, 'link_codes' => ['Ind.a.1']],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 18, 'question' => 'Responsiveness', 'options' => $this->options, 'link_codes' => ['Ind', 'D2.c']],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 19, 'question' => 'Ability to handle being “left out”', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
            ],
            'Personal' => [
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 20, 'question' => 'Expresses feelings', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 21, 'question' => 'Identifies feelings (I’m happy.)', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 22, 'question' => 'Explains feelings (I’m happy because it’s my birthday)', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 23, 'question' => 'Provides excuses or reasons', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D2']],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 24, 'question' => 'Offers an opinion with support', 'options' => $this->options, 'link_codes' => ['D2.b.1.09', 'D2.b.3.02', 'D2.b2.3.13']],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 25, 'question' => 'Complains', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 26, 'question' => 'Blames others', 'options' => $this->options, 'link_codes' => ['D2.b.3.06']],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 27, 'question' => 'Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate)', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D2.b.3.19']],
            ]

        ];

        // // Load previously answered questions
        $this->loadPreviousAnswers();
        // dd($this->appointmentId, $this->loadPreviousAnswers());
    }

    private function loadPreviousAnswers()
    {
        // Fetch previously answered questions from the database
        $previousAnswers = AssessmentChecklistQuesAns::where('appointment_id', $this->appointmentId)->get();

        // Populate the formData array with previous answers
        foreach ($previousAnswers as $answer) {
            $key = "{$answer->category_id}_{$answer->sub_category_id}_{$answer->question_id}";
            $this->formData['answers'][$key] = $answer->answer;
        }
    }

    public function nextTab()
    {
        // Save data before moving to the next tab
        $this->createOrUpdateChecklist();
        $this->loadPreviousAnswers();

        // Navigate to the next tab
        if ($this->currentTabLivewire <= count($this->questions) - 1) {
            $this->currentTabLivewire++;
        }
    }

    public function prevTab()
    {
        if ($this->currentTabLivewire > 0) {
            $this->currentTabLivewire--;
        }
    }

    public function submit()
    {
        $this->createOrUpdateChecklist();
        $categoryId = $this->categoryId;
        $appointmentId = $this->appointmentId;
        $checklistTitle = 'Autism Behavior Checklist (ABC Checklist)';
        Session::flash('alert', ['type' => 'success', 'title' => 'Success! ', 'message' => 'Data save successfully!']);
        return redirect()->route('assessment-checklists.show', ['assessment_checklist' => $categoryId, 'checklist_id' => $categoryId, 'appointmentId' => $appointmentId, 'checklistTitle' => $checklistTitle]);
    }


    public function render()
    {
        $data = [
            'gender' => ProjectConstants::$genders,
            'learnAbout' => ProjectConstants::$learnAbout,
            'eduClass' => ProjectConstants::$class,
            'questions' => $this->questions,
            'formData' => $this->formData,
        ];
        return view('livewire.assessment-checklists.social-communication-adult-checklist', $data);
    }

    private function getIntroductionData($introduction)
    {
        return [
            'payment_status_updated' => $introduction->payment_status_updated ?? '',
            'interview_status' => $introduction->interview_status ?? '',
            'assessment_status' => $introduction->assessment_status ?? '',
            'student_id' => $introduction->student_id ?? '',
            'name' => $introduction->name ?? '',
            'dob' => $introduction->dob ?? '',
            'age' => $introduction->age ?? '',
            'mother_name' => $introduction->mother_name ?? '',
            'mother_edu_level' => $introduction->mother_edu_level ?? '',
            'mother_occupation' => $introduction->mother_occupation ?? '',
            'mother_nid' => $introduction->mother_nid ?? '',
            'father_name' => $introduction->father_name ?? '',
            'father_edu_level' => $introduction->father_edu_level ?? '',
            'father_occupation' => $introduction->father_occupation ?? '',
            'father_nid' => $introduction->father_nid ?? '',
            'phone_number' => $introduction->phone_number ?? '',
            'parent_email' => $introduction->parent_email ?? '',
            'permanent_address' => $introduction->permanent_address ?? '',
            'gender' => $introduction->gender ?? '',
            'emergency_contact_one' => $introduction->emergency_contact_one ?? '',
            'emergency_contact_two' => $introduction->emergency_contact_two ?? '',
            'emergency_contact_three' => $introduction->emergency_contact_three ?? '',
            'main_teacher_department_name' => $introduction->main_teacher_department_name ?? '',
            'main_teacher_name' => ($introduction->main_teacher_name ?? '') . ' (' . ($introduction->main_teacher_designation_name ?? '') . ')',
            'main_teacher_signature' => $introduction->main_teacher_signature ?? '',
            'assistant_teacher_department_name' => $introduction->assistant_teacher_department_name ?? '',
            'assistant_teacher_name' => ($introduction->assistant_teacher_name ?? '') . ' (' . ($introduction->assistant_teacher_department_name ?? '') . ')',
            'assistant_teacher_signature' => $introduction->assistant_teacher_signature ?? '',
            'appointment_id' => $introduction->id ?? '',
            'main_teacher_id' => $introduction->main_teacher_id ?? '',
            'assistant_teacher_id' => $introduction->assistant_teacher_id ?? '',
            'created_by' => auth()->id() ?? 1,
        ];
    }

    private function createOrUpdateChecklist()
    {
        $linkCodeCounts = [];

        // Loop through all questions
        foreach ($this->questions as $title => $questionGroup) {
            foreach ($questionGroup as $question) {
                $key = "{$question['category_id']}_{$question['sub_category_id']}_{$question['id']}";
                $answer = $this->formData['answers'][$key] ?? null;

                // dd($this->formData['introduction']['main_teacher_id']);
                // Save the answer to the assessment_checklist_table
                AssessmentChecklistQuesAns::updateOrCreate(
                    [
                        'appointment_id' => $this->appointmentId,
                        'category_id' => $question['category_id'],
                        'sub_category_id' => $question['sub_category_id'],
                        'question_id' => $question['id'],
                    ],
                    [
                        'answer' => $answer,
                        'main_teacher_id' => $this->formData['introduction']['main_teacher_id'] ?? 1,
                        'assistant_teacher_id' => $this->formData['introduction']['assistant_teacher_id'] ?? 1,
                        'created_by' => auth()->id() ?? 1,
                    ]
                );

                // Count link codes only if an answer is provided
                if (!is_null($answer)) {
                    foreach ($question['link_codes'] as $linkCode) {
                        // Track the link code in the array
                        if (!isset($linkCodeCounts[$linkCode])) {
                            $linkCodeCounts[$linkCode] = 0;
                        }
                        $linkCodeCounts[$linkCode]++;
                    }
                }
            }
        }

        // Save the total counts for each unique link code
        foreach ($linkCodeCounts as $linkCode => $count) {
            LinkCodeCount::updateOrCreate(
                [
                    'link_code_for' => $this->categoryId + 6, // 7 = Fundamental Communication 8 = ABC Checklist
                    'link_code' => $linkCode,
                    'appointment_id' => $this->appointmentId,
                ],
                [
                    'count' => $count, // Set the total count for the link code
                    'created_by' => auth()->id() ?? 1,
                ]
            );
        }
    }
}

