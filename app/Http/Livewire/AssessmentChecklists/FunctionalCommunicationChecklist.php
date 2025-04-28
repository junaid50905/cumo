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

class FunctionalCommunicationChecklist extends Component
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
    public $options = [
        'Yes' => 'Yes',
        'No' => 'No',
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
            'Speech' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'Talk too loud for the context', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'Talk too quietly for the context', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'Speech is hard to understand', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'Speech calls attention to itself', 'options' => $this->options, 'link_codes' => ['D2.b.3.03']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'Voice is too hard', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'Voice is too low', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'Repeats words or parts of words when talking', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'Talks fast, causing speech to be unclear', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 9, 'question' => 'Speech sounds monotone', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 10, 'question' => 'Speech sounds sing-song', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']]
            ],
            'Body Language' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'Body posture is too rigid', 'options' => $this->options, 'link_codes' => ['D1.a.1.14', 'D1.b.2']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'Body posture is too relaxed', 'options' => $this->options, 'link_codes' => ['D1.a.1.14', 'D1.b.2']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'Has noticed nervous mannerisms', 'options' => $this->options, 'link_codes' => ['D1.a.1.14', 'D2.b.6.a.1']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'Has limited use of gestures', 'options' => $this->options, 'link_codes' => ['D1.a.1.14', 'D4.a.4.01']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'Demonstrates unusual facial expressions', 'options' => $this->options, 'link_codes' => ['D3.a.09']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'Shows little variation in facial expressions', 'options' => $this->options, 'link_codes' => ['D3.a.09']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'Has difficulty understanding facial expressions / body language', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'Uses inappropriate body orientation or proximity in interaction', 'options' => $this->options, 'link_codes' => ['D2.b.1.02']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9, 'question' => 'Eye contact is fleeting', 'options' => $this->options, 'link_codes' => ['D1.a.3', 'D2.b.3.18']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 10, 'question' => 'Does not use eye contact', 'options' => $this->options, 'link_codes' => ['D1.a.3', 'D2.b.3.18']]
            ],
            'Words usages / Vocabulary' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'Repeats words / phrases / sentences', 'options' => $this->options, 'link_codes' => ['D2.b.3.17', 'D2.b.3.15']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'Has difficulties using and understanding non–literal meanings (proverbs, idioms, slangs, sarcasm, teasing, etc.)', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.1.11', 'D2.b.3.18.15', 'D2.b.2.12']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'Has difficulty understanding / using humor appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.1.11', 'D4.c.8.07', 'D2.b.3.18.14', 'D2.b.3.18.29', 'D2.b.3.12', 'D2.b.3.18.30']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'Demonstrates literal use and understanding of language', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.01']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 5, 'question' => 'Has difficulty with multiple meaning words', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.01']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 6, 'question' => 'Uses rote / recital language', 'options' => $this->options, 'link_codes' => ['D2.b.3', 'D2.b.3.01']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 7, 'question' => 'Demonstrates idiosyncratic word use', 'options' => $this->options, 'link_codes' => ['D2.b.3.04']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 8, 'question' => 'Has a large vocabulary with little comprehension', 'options' => $this->options, 'link_codes' => ['D2.b.3.04', 'D2.b.3.07', 'D2.b.3.08']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 9, 'question' => 'Reverses personal pronouns', 'options' => $this->options, 'link_codes' => ['D2.b.3.17', 'D4.c.6', 'D2.b.3.07']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 10, 'question' => 'Limited use of gestures and expressive language (e.g., rarely points, waves, or nods, few words, monotone speech)', 'options' => $this->options, 'link_codes' => ['D2.b.3.13', 'D2.b.3.18.38', 'D2.b.3.02', 'D2.b.3.04']]
            ],

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
        $checklistTitle = 'Functional Communication Checklist';
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
        return view('livewire.assessment-checklists.functional-communication-checklist', $data);
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

        // Define link codes to skip if the answer is "Yes"
        $skipLinkCodes = ['1_1_2', '1_2_1'];

        // Loop through all questions
        foreach ($this->questions as $title => $questionGroup) {
            foreach ($questionGroup as $question) {
                $key = "{$question['category_id']}_{$question['sub_category_id']}_{$question['id']}";
                $answer = $this->formData['answers'][$key] ?? null;

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
                        // **Skip counting if the answer is "Yes" and the link code is in the skip list**
                        if ($answer === "Yes" && in_array($key, $skipLinkCodes)) {
                            continue; // Skip this link code
                        }

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
