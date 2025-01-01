<?php

namespace App\Http\Livewire\Assessments;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Utility\ProjectConstants;
use App\Repositories\UserRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Assessments\AssessmentPIDChildRepository;
use Carbon\Carbon;
use App\Models\Assessments\AssessmentToolQuesAns;
use App\Models\Assessments\AssessmentSubCategory;

class AssessmentPIDChild extends Component
{
    public $searchData;
    public $genders;
    public $learnAbout;
    public $eduClass;
    public $departments;
    public $all_user;
    public $questions;
    public $currentTabLiveware = 0;
    public $formData = [];

    protected $userRepository;
    protected $departmentRepository;
    protected $appointmentRepository;
    protected $assPIDChildRepository;

    public function boot(UserRepository $userRepository, DepartmentRepository $departmentRepository, AppointmentRepository $appointmentRepository, AssessmentPIDChildRepository $assPIDChildRepository)
    {
        $this->userRepository = $userRepository;
        $this->departmentRepository = $departmentRepository;
        $this->appointmentRepository = $appointmentRepository;
        $this->assPIDChildRepository = $assPIDChildRepository;
    }

    public function mount($searchData = null)
    {
        try {
            $this->searchData = $searchData;
            $categoryId = 1;

            $this->departments = $this->departmentRepository->getAllDepartment();
            $this->all_user = $this->userRepository->getAllUser();
            $this->questions = $this->assPIDChildRepository->getQuestionCollectionAccordingSubCategory($categoryId);
            $this->genders = ProjectConstants::$genders;
            $this->learnAbout = ProjectConstants::$learnAbout;
            $this->eduClass = ProjectConstants::$class;

            $appointmentId = $this->searchData ? $this->searchData : null;
            $incomeType = 2; // 2=Assessment
            $eventType = 2; // 2=Assessment
            $paymentStatus = 5; // 5=Completed
            $introduction = $this->appointmentRepository->getAnAppointmentDetails($appointmentId, $incomeType, $eventType, $paymentStatus);

            if ($introduction !== null) {
                $this->formData['introduction'] = $this->getIntroductionData($introduction) ?? [];
                $this->formData['introduction']['category_id'] = $categoryId;
                $this->formData['introduction']['assessment_date'] = null;

                $existingData = $this->getExistingData();
                if (!empty($existingData)) {
                    $this->formData['introduction']['assessment_date'] = $existingData[0]->assessment_date;
                    foreach ($existingData as $data) {
                        $subCategoryName = AssessmentSubCategory::find($data->sub_category_id)->name;
                        $key = 'option_' . $data->sub_category_id . '_' . $data->question_id;
                        $this->formData[strtolower(str_replace(' ', '_', $subCategoryName))][$key] = $data->answer;
                    }
                }

                // Compare existing data with questions and create structure entries for missing subcategories
                foreach ($this->questions as $subCategoryName => $questions) {
                    if (!isset($this->formData[strtolower(str_replace(' ', '_', $subCategoryName))])) {
                        foreach ($questions as $question) {
                            $key = 'option_' . $question['sub_category_id'] . '_' . $question['id'];
                            $this->formData[strtolower(str_replace(' ', '_', $subCategoryName))][$key] = null;
                        }
                    }
                }
                // dd($this->questions, $this->formData);
            } else {
                echo "<div style='text-align: center; font-size: 20px; font-weight: 700;'>Data Not Found!</div>";
                return redirect('assessment.pid-five-child.create');
            }
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title' => 'Failed! ', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    private function getExistingData()
    {
        return DB::table('assessment_tool_ques_ans')
            ->select('question_id', 'answer', 'sub_category_id', 'assessment_date')
            ->where('appointment_id', $this->formData['introduction']['appointment_id'])
            ->where('category_id', $this->formData['introduction']['category_id'])
            ->get()
            ->toArray();
    }

    public function changeCurrentTab($index)
    {
        $this->currentTabLiveware = $index;
    }
    
    public function nextTab()
    {
        try {
            $this->extractAndSaveFormData();

            if ($this->currentTabLiveware < count($this->questions)) {
                $this->currentTabLiveware++;
            }
            Session::flash('alert', ['type' => 'success', 'title' => 'Success! ', 'message' => 'Data save successfully!']);
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title' => 'Failed! ', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }
    
    public function prevTab()
    {
        // dd($this->formData);
        if ($this->currentTabLiveware > 0) {
            $this->currentTabLiveware--;
        }
    }
    
    public function submit()
    {
        try {
            
            $this->extractAndSaveFormData();
            $appointmentId = $this->formData['introduction']['appointment_id'];
            // dd($appointmentId);

            // dd($this->formData);
            Session::flash('alert', ['type' => 'success', 'title' => 'Success! ', 'message' => 'Data save successfully!']);
            return redirect()->route('assessment-pid-child.show', $appointmentId);
            
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title' => 'Failed! ', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }
    
    public function isLastTab()
    {
        return $this->currentTabLiveware === count($this->questions);
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
            'father_name' => $introduction->father_name ?? '',
            'father_edu_level' => $introduction->father_edu_level ?? '',
            'father_occupation' => $introduction->father_occupation ?? '',
            'phone_number' => $introduction->phone_number ?? '',
            'parent_email' => $introduction->parent_email ?? '',
            'permanent_address' => $introduction->permanent_address ?? '',
            'gender' => $introduction->gender ?? '',
            'main_teacher_department_name' => $introduction->main_teacher_department_name ?? '',
            'main_teacher_name' => $introduction->main_teacher_name . ' (' . $introduction->main_teacher_designation_name . ')' ?? '',
            'main_teacher_signature' => $introduction->main_teacher_signature ?? '',
            'assistant_teacher_department_name' => $introduction->assistant_teacher_department_name ?? '',
            'assistant_teacher_name' => $introduction->assistant_teacher_name . ' (' . $introduction->assistant_teacher_department_name . ')' ?? '',
            'assistant_teacher_signature' => $introduction->assistant_teacher_signature ?? '',
            'appointment_id' => $introduction->id ?? '',
            'main_teacher_id' => $introduction->main_teacher_id ?? '',
            'assistant_teacher_id' => $introduction->assistant_teacher_id ?? '',
            'assessment_date' => $introduction->assessment_date ?? Carbon::now()->format('m/d/y'),
            'created_by' => auth()->id() ?? 1,
        ];
    }
    

    private function extractAndSaveFormData()
    {
        if (!isset($this->formData['introduction'])) {
            return;
        }

        foreach ($this->formData as $key => $value) {
            // Skip introduction part
            if ($key === 'introduction') {
                continue;
            }

            // Loop through questions for this category
            foreach ($value as $questionKey => $answer) {
                list($subCategoryId, $questionId) = explode('_', substr($questionKey, strpos($questionKey, '_') + 1));
                
                $formData = [
                    'appointment_id' => $this->formData['introduction']['appointment_id'],
                    'category_id' => $this->formData['introduction']['category_id'],
                    'sub_category_id' => $subCategoryId,
                    'created_by' => $this->formData['introduction']['created_by'],
                    'assessment_date' => $this->formData['introduction']['assessment_date'],
                    'question_id' => $questionId,
                    'answer' => $answer,
                    'main_teacher_id' => $this->formData['introduction']['main_teacher_id'],
                    'assistant_teacher_id' => $this->formData['introduction']['assistant_teacher_id'],
                ];
               
                // Check for existing record
                $existingRecord = DB::table('assessment_tool_ques_ans')
                    ->where('appointment_id', $formData['appointment_id'])
                    ->where('category_id', $formData['category_id'])
                    ->where('sub_category_id', $formData['sub_category_id'])
                    ->where('question_id', $formData['question_id'])
                    ->first();

                // Update or insert data based on existence of record
                if ($existingRecord) {
                    DB::table('assessment_tool_ques_ans')
                        ->where('appointment_id', $formData['appointment_id'])
                        ->where('category_id', $formData['category_id'])
                        ->where('sub_category_id', $formData['sub_category_id'])
                        ->where('question_id', $formData['question_id'])
                        ->update($formData);
                } else {
                    DB::table('assessment_tool_ques_ans')->insert($formData);
                }
            }
        }
        // dd("End");
    }
    
    public function render()
    {
        $data = [
            'gender' => $this->genders,
            'learnAbout' => $this->learnAbout,
            'eduClass' => $this->eduClass,
            'departments' => $this->departments,
            'all_user' => $this->all_user,
            'questions' => $this->questions,
        ]; 

        return view('livewire.assessments.assessment-p-i-d-child', $data);
    }
}