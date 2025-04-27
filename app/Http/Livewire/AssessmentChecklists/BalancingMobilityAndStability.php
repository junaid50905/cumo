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

class BalancingMobilityAndStability extends Component
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

    public $canDoCannotDo = [
        'Can Do' => 'Can Do',
        'Cannot Do' => 'Cannot Do'
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
            'Deep Squat' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => "The stick is maintained vertically aligned with the feet - 1 times", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1', 'D1.a.1.03 ']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => "The stick is maintained vertically aligned with the feet - 2 times", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1', 'D1.a.1.03 ']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => "The stick is maintained vertically aligned with the feet - 3 times", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1', 'D1.a.1.03 ']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => "The stick is maintained vertically aligned with the feet - 4 times", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1', 'D1.a.1.03 ']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => "Excessive hip rotation to clear the hurdle", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => "Poor control of trunk indicated by the tilting stick", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1']],
            ],
            'Foot' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => "To improve stability of the feet, single-leg stance exercises with bare feet are useful - diagonal leg whips on the left and rotational reaches on the right.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.06']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => "To improve stability of the feet, single-leg stance exercises with bare feet are useful - Gently grip the ground with the toes.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.06']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => "To improve stability of the feet, single-leg stance exercises with bare feet are useful - Keep a tall posture and limit trunk sway.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.06']],
            ],
            'Ankle' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => "The left leg ankle flexion just before the heel rises during the walking stride - 1 times", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.09']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => "The ankle flexion just before the heel rises during the walking stride - 2 times", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.09']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => "The ankle flexion just before the heel rises during the walking stride - 3 times", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.09']],
            ],
            'Knee' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 1, 'question' => "On the left, side stepping against the elastic band builds lateral hip stability and thus better control of knee motion.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.05']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 2, 'question' => "On the right, the medial pull of the elastic band adds challenge to lunges or single-leg squats.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.05']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 3, 'question' => "The single-leg squat with medial rotation.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.05']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 4, 'question' => "Start with short, slow movements and gradually add range of motion and speed as proficiency improves.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 5, 'question' => "Does using a weight help maintain posture and knee stability?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.07']],
            ],
            'Hip' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 1, 'question' => "Can the single-leg squat variation challenge the hip stabilizers?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 2, 'question' => "Can the right hip extend well during the lunge position?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 3, 'question' => "Can the lunge position stretch the right hip flexors?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 4, 'question' => "Can the balance and reach drill challenge hip mobility and stability?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 5, 'question' => "Can the trunk and arms move forward for counterbalance during the drill?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 6, 'question' => "Can this drill assess side-to-side imbalances?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
            ],
            'Low Back' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 1, 'question' => "Can walking lunges with a plate overhead challenge core control?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 2, 'question' => "Can engaging the core help reduce trunk sway during lunges?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 3, 'question' => "Can this exercise improve low back stability?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 4, 'question' => "Rotating the plate across the forward leg adds further challenge to core stability.", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
            ],
            'Mid Back' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 1, 'question' => "Can he/she use the foam roll to mobilize thoracic joints and massage mid back muscles for 1 times?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 2, 'question' => "Can he/she use the foam roll to mobilize thoracic joints and massage mid back muscles for 2 times?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 3, 'question' => "Can he/she use the foam roll to mobilize thoracic joints and massage mid back muscles for 3 times?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.03']],
            ],
            'Shoulder Blades' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 1, 'question' => "Can he/she use the foam roll to increase extensibility of the teres major and improve overhead motion?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.04']],
            ],
            'Shoulder' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 1, 'question' => "Can he/she perform overhead squats to challenge core and shoulder stability", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.04']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 2, 'question' => "Can he/she maintain the weight vertically aligned with the feet?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.04']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 3, 'question' => "Can insufficient shoulder mobility cause the weight to shift forward?", 'options' => $this->canDoCannotDo, 'link_codes' => ['D1.a.1.04']],
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
        return view('livewire.assessment-checklists.balancing-mobility-and-stability', $data);
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
