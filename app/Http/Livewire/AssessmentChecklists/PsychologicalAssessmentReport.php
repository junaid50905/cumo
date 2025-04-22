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

class PsychologicalAssessmentReport extends Component
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
            'Behavior issues' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'Seems preoccupied or inattentive', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'Manipulates others', 'options' => $this->options, 'link_codes' => ['Ind.d3']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'Exhibits aggressive, intimidating or bullying behavior', 'options' => $this->options, 'link_codes' => ['D4.f']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'Has frequent temper tantrums', 'options' => $this->options, 'link_codes' => ['D3.c']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'Has low self-esteem', 'options' => $this->options, 'link_codes' => ['D3.a.04']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'Reacts negatively to change', 'options' => $this->options, 'link_codes' => ['D4.h']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'Takes risks without regard for personal safety', 'options' => $this->options, 'link_codes' => ['D2.a']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'Upsets others deliberately', 'options' => $this->options, 'link_codes' => ['D2.b.1']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 9, 'question' => 'Argues with adults', 'options' => $this->options, 'link_codes' => ['D4.d.1']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 10, 'question' => 'Acts impulsively', 'options' => $this->options, 'link_codes' => ['D4.a.1']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 11, 'question' => 'Disrupts others', 'options' => $this->options, 'link_codes' => ['D2.b.1']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 12, 'question' => 'Seeks revenge', 'options' => $this->options, 'link_codes' => ['D4.f.1']],
            ],
            'Communication (Speech & Language)' => [
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 0, 'question' => 'Ages 11-14', 'title' => true],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'Use longer sentences; usually 7–12 words or more', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'Be able to change topic well in conversations', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'Use more subtle and witty humor', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'Know how to use sarcasm. Know when others are being sarcastic to them', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'Know that they talk differently to friends than to teachers', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'Show some understanding of idioms, such as “put your money where your mouth is”', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'Understand and use slang terms with friends. They keep up with rapidly changing "street talk"', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'Others', 'options' => $this->options, 'link_codes' => ['D2.b.3']],

                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 0, 'question' => 'Ages 14-18 ', 'title' => true],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9, 'question' => 'Follow complicated instructions', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 10, 'question' => 'Know when they haven’t understood. They will ask to be told again.', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 11, 'question' => 'Easily swap between classroom talk and break time talk.', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 12, 'question' => 'Tell long and very complicated stories.', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 13, 'question' => 'Others', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
            ],
            'Social Skills' => [
                ['id' => 28, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'Between 11 and 14 years old', 'title' => true],
                ['id' => 29, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'Start thinking more logically', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 30, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'Are introspective and moody and need privacy', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 31, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'Value friends and others opinions more and more', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 32, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'May test out new ideas, clothing styles and mannerisms in an attempt to find where they fit in', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 33, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 5, 'question' => 'Others', 'options' => $this->options, 'link_codes' => ['D4.a']],

                ['id' => 34, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'Between 14 and 18 years old', 'title' => true],
                ['id' => 35, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 6, 'question' => 'Strive to be independent and may start emotionally distancing from you', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 36, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 7, 'question' => 'Start trying to discover their own strengths and weaknesses, which can make them seem self-centered, impulsive or moody', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 37, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 8, 'question' => 'May be interested in dating and spend a lot of time with friends', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 38, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 9, 'question' => 'Show pride in successes', 'options' => $this->options, 'link_codes' => ['D4.a']],
                ['id' => 39, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 10, 'question' => 'Others', 'options' => $this->options, 'link_codes' => ['D4.a']],
            ],
            'Psychological problems' => [
                ['id' => 40, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 0, 'question' => 'In older children and pre-Adolescents', 'title' => true],
                ['id' => 41, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 1, 'question' => 'Changes in school performance, falling grades', 'options' => $this->options, 'link_codes' => []],
                ['id' => 42, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 2, 'question' => 'Inability to cope with daily problems and activities', 'options' => $this->options, 'link_codes' => []],
                ['id' => 43, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 3, 'question' => 'Changes in sleeping and/or eating habits', 'options' => $this->options, 'link_codes' => []],
                ['id' => 44, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 4, 'question' => 'Excessive complaints of physical problems', 'options' => $this->options, 'link_codes' => []],
                ['id' => 45, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 5, 'question' => 'Defying authority, skipping school, stealing, or damaging property', 'options' => $this->options, 'link_codes' => []],
                ['id' => 46, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 6, 'question' => 'Intense fear of gaining weight', 'options' => $this->options, 'link_codes' => []],
                ['id' => 47, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 7, 'question' => 'Withdrawing from friends and activities', 'options' => $this->options, 'link_codes' => []],
                ['id' => 48, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 8, 'question' => 'Frequent outbursts of anger', 'options' => $this->options, 'link_codes' => []],
                ['id' => 49, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 9, 'question' => 'Abuse of drugs and/or alcohol', 'options' => $this->options, 'link_codes' => []],
                ['id' => 50, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 10, 'question' => 'Long-lasting negative mood, often along with poor appetite and thoughts of death', 'options' => $this->options, 'link_codes' => []],
                ['id' => 51, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 11, 'question' => 'Others', 'options' => $this->options, 'link_codes' => []],


                ['id' => 52, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 0, 'question' => 'In adults', 'title' => true],
                ['id' => 53, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 12, 'question' => 'Confused thinking', 'options' => $this->options, 'link_codes' => []],
                ['id' => 54, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 13, 'question' => 'Long-lasting sadness or irritability', 'options' => $this->options, 'link_codes' => []],
                ['id' => 55, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 14, 'question' => 'Social withdrawal', 'options' => $this->options, 'link_codes' => []],
                ['id' => 56, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 15, 'question' => 'Extremely high and low moods', 'options' => $this->options, 'link_codes' => []],
                ['id' => 57, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 16, 'question' => 'Strong feelings of anger', 'options' => $this->options, 'link_codes' => []],
                ['id' => 58, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 17, 'question' => 'Thoughts of suicide', 'options' => $this->options, 'link_codes' => []],
                ['id' => 59, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 18, 'question' => 'Excessive fear, worry, or anxiety', 'options' => $this->options, 'link_codes' => []],
                ['id' => 60, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 19, 'question' => 'Increasing inability to cope with daily problems and activities', 'options' => $this->options, 'link_codes' => []],
                ['id' => 61, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 20, 'question' => 'Delusions or hallucinations (seeing or hearing things that are not really there)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 62, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 21, 'question' => 'Dramatic changes in eating or sleeping habits', 'options' => $this->options, 'link_codes' => []],
                ['id' => 63, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 22, 'question' => 'Denial of obvious problems', 'options' => $this->options, 'link_codes' => []],
                ['id' => 64, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 23, 'question' => 'Many unexplained physical problems', 'options' => $this->options, 'link_codes' => []],
                ['id' => 65, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 24, 'question' => 'Abuse of drugs and/or alcohol', 'options' => $this->options, 'link_codes' => []],
                ['id' => 66, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 25, 'question' => 'Others', 'options' => $this->options, 'link_codes' => []],
            ],
            'Cognitive Problems' => [
                ['id' => 67, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 1, 'question' => 'Mental processed slowed down', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 68, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 2, 'question' => 'Trouble concentrating or easily distracted', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 69, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 3, 'question' => 'Difficulty doing math in your head', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 70, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 4, 'question' => 'Trouble thinking of words or the name of things you want to say', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 71, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 5, 'question' => 'Trouble remembering what to buy when you go shopping', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 72, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 6, 'question' => 'Forgetting people’s names', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 73, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 7, 'question' => 'Losing things', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 74, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 8, 'question' => 'Forgetting recent events or experiences', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 75, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 9, 'question' => 'Getting lost or difficulty using maps', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 76, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 10, 'question' => 'Trouble recalling experiences or things you learned long ago', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 77, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 11, 'question' => 'Trouble solving complex problems', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 78, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 12, 'question' => 'Acting impulsively (without planning or anticipating consequence)', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 79, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 13, 'question' => 'Disorganized', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 80, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 14, 'question' => 'Others', 'options' => $this->options, 'link_codes' => ['D2']],
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
        return view('livewire.assessment-checklists.psychological-assessment-report', $data);
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
