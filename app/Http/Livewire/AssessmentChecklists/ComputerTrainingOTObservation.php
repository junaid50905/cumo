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

class ComputerTrainingOTObservation extends Component
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

    public $dummyOptions = [
        '' => '',
        2 => ''
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
            'Physical skill' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'Sitting posture maintain:', 'options' => [
                    'Can fully maintain' => 'Can fully maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.1']],

                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'Joint mobility shoulder:', 'options' => [
                    'Can full range maintain' => 'Can full range maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.1.14']],

                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2.1, 'question' => 'Joint mobility shoulder - Elbow:', 'options' => [
                    'Can full range maintain' => 'Can full range maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.1.14']],

                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2.2, 'question' => 'Joint mobility shoulder - Wrist:', 'options' => [
                    'Can full range maintain' => 'Can full range maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.1.14']],

                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2.3, 'question' => 'Joint mobility shoulder - Finger:', 'options' => [
                    'Can full range maintain' => 'Can full range maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.2']],

                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'Body flexibility (Trunk):', 'options' => [
                    'Can full range maintain' => 'Can full range maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.1.14']],

                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'Dynamic balance maintain:', 'options' => [
                    'Can maintain' => 'Can maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.1.03']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'Eye hand co ordination to press the key board button:', 'options' => [
                    'Can maintain' => 'Can maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Cannot maintain' => 'Cannot maintain',
                    'Can maintain with support' => 'Can maintain with support',
                ], 'link_codes' => ['D1.a.2.06', 'D1.a.2.11']],

                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'Eye hand co ordination to press the key board button:', 'options' => [
                    'Normal' => 'Normal',
                    'Less strength' => 'Less strength',
                ], 'link_codes' => ['D1.a.2', 'D1.a.3']],

                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7.1, 'question' => 'Hand function - Grasp:', 'options' => [
                    'Able' => 'Able',
                    'Partially' => 'Partially',
                    'Unable' => 'Unable',
                    'Able with support' => 'Able with support',
                ], 'link_codes' => ['D1.a.1.13']],

                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7.2, 'question' => 'Hand function - Manipulation:', 'options' => [
                    'Able' => 'Able',
                    'Partially' => 'Partially',
                    'Unable' => 'Unable',
                    'Able with support' => 'Able with support',
                ], 'link_codes' => ['D1.a.2.11']],

                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7.3, 'question' => 'Hand function - Opposition:', 'options' => [
                    'Able' => 'Able',
                    'Partially' => 'Partially',
                    'Unable' => 'Unable',
                    'Able with support' => 'Able with support',
                ], 'link_codes' => ['D1.a.2.11']],

                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7.4, 'question' => 'Hand function - Transfer:', 'options' => [
                    'Able' => 'Able',
                    'Partially' => 'Partially',
                    'Unable' => 'Unable',
                    'Able with support' => 'Able with support',
                ], 'link_codes' => ['D1.a.2.11']],

                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7.5, 'question' => 'Hand function - Weight carry:', 'options' => [
                    'Able' => 'Able',
                    'Partially' => 'Partially',
                    'Unable' => 'Unable',
                    'Able with support' => 'Able with support',
                ], 'link_codes' => ['D1.a.2.11']],

                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8.1, 'question' => 'Sensory - Tactile:', 'options' => [
                    'Normal' => 'Normal',
                    'Hypo' => 'Hypo',
                    'Hyper' => 'Hyper',
                ], 'link_codes' => ['D2.a','D2.a.1.04']],

                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8.2, 'question' => 'Sensory - Visual:', 'options' => [
                    'Normal' => 'Normal',
                    'Hypo' => 'Hypo',
                    'Hyper' => 'Hyper',
                ], 'link_codes' => ['D2.a', 'D2.a.2']],

                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8.3, 'question' => 'Sensory - Auditory:', 'options' => [
                    'Normal' => 'Normal',
                    'Hypo' => 'Hypo',
                    'Hyper' => 'Hyper',
                ], 'link_codes' => ['D2.a', 'D2.a.1.03']],
            ],
            'Cognitive, Behavior & social Skill' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'Sitting habit in specific place:', 'options' => [
                    'Less than 5 min' => 'Less than 5 min',
                    '5 min' => '5 min',
                    '10 min' => '10 min',
                    '20 min' => '20 min',
                    '30 min' => '30 min',
                    '30+ min' => '30+ min',
                ], 'link_codes' => ['D3.b.05', 'D3.a.05']],

                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'Keep attention/concentration to work:', 'options' => [
                    '5-10 min' => '5-10 min',
                    '10-15 min' => '10-15 min',
                    '15-20 min' => '15-20 min',
                    '20-25 min' => '20-25 min',
                    '25-30 min' => '25-30 min',
                    '30-40 min' => '30-40 min',
                    '40+ min' => '40+ min',
                ], 'link_codes' => ['D4.a.2.07', 'D3.a.05']],

                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'Follow instruction:', 'options' => [
                    'Can same to follow' => 'Can same to follow',
                    'Partially perform' => 'Partially perform',
                    'Try to follow' => 'Try to follow',
                    'Can follow with help' => 'Can follow with help',
                ], 'link_codes' => ['D2.b.3.07']],

                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'Response skill:', 'options' => [
                    'Can response' => 'Can response',
                    'Partially response' => 'Partially response',
                    'Try to response' => 'Try to response',
                    'Help to response' => 'Help to response',
                ], 'link_codes' => ['D2.b.3.02']],

                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'Understand or follow the work sequence:', 'options' => [
                    'Can fully maintain' => 'Can fully maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Try to maintain' => 'Try to maintain',
                    'Need to help' => 'Need to help',
                ], 'link_codes' => ['D2.b.3.07']],

                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'Interest of work:', 'options' => [
                    'Show interest' => 'Show interest',
                    'Cannot show interest' => 'Cannot show interest',
                    'Sometimes showing' => 'Sometimes showing',
                ], 'link_codes' => ['D4.a.2.05']],

                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'Information receives ability:', 'options' => [
                    'Can receive fully' => 'Can receive fully',
                    'Partially' => 'Partially',
                    'Try to receive' => 'Try to receive',
                    'Need to support' => 'Need to support',
                ], 'link_codes' => ['D2.b.3.01', 'D2.b.3.08']],

                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'Memorizing the information:', 'options' => [
                    'Can replay' => 'Can replay',
                    'Partially replay' => 'Partially replay',
                    'Try to reply' => 'Try to reply',
                    'Need to support' => 'Need to support',
                ], 'link_codes' => ['D2.b.3.08', 'D2.b.3.07']],

                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9, 'question' => 'Awareness of Risk & hazard:', 'options' => [
                    'Can fully maintain' => 'Can fully maintain',
                    'Partially maintain' => 'Partially maintain',
                    'Try to maintain' => 'Try to maintain',
                    'Need to help' => 'Need to help',
                ], 'link_codes' => ['D3.c.1.13', 'D3.c.3.01']],

                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9.1, 'question' => 'Work place adjustability:', 'options' => [
                    '' => '',
                ], 'link_codes' => ['D4.a.2.05']],

                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9.2, 'question' => 'Sitting chair:', 'options' => [
                    'Appropriate' => 'Appropriate',
                    'Need to adapted (height/arm rest/back support)' => 'Need to adapted (height/arm rest/back support)',
                ], 'link_codes' => ['D3.b.05']],

                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9.3, 'question' => 'Working table/ desk:', 'options' => [
                    'Appropriate' => 'Appropriate',
                    'Need to adapted (height/foot clearing space/distance)' => 'Need to adapted (height/foot clearing space/distance)',
                ], 'link_codes' => ['D4.a.2.05']],

                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9.4, 'question' => 'Key board and mouse place:', 'options' => [
                    'Appropriate' => 'Appropriate',
                    'Need to adapted (height/ distance)' => 'Need to adapted (height/ distance)',
                ], 'link_codes' => ['D4.a.2.05']],

                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9.5, 'question' => 'Monitor place:', 'options' => [
                    'Appropriate' => 'Appropriate',
                    'Need to adapted (eye level/distance)' => 'Need to adapted (eye level/distance)',
                ], 'link_codes' => ['D4.a.2.05']],

                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9.6, 'question' => 'CPU, Stabilizer and multi pluck place:', 'options' => [
                    'Appropriate' => 'Appropriate',
                    'Need to adapted (height/distance)' => 'Need to adapted (height/distance)',
                ], 'link_codes' => ['D4.a.2.05']],

                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9.7, 'question' => 'Communication Style (Verbal/Sign language/Gesture use):', 'options' => [
                    'Verbal' => 'Verbal',
                    'Sign language' => 'Sign language',
                    'Gesture use: can properly' => 'Gesture use: can properly',
                    'Unable to perform' => 'Unable to perform',
                    'Partially perform' => 'Partially perform',
                ], 'link_codes' => ['D2.b.3.18', 'D2.b.3.19']],
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
        return view('livewire.assessment-checklists.computer-training-o-t-observation', $data);
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
