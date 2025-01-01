<?php

namespace App\Http\Livewire\CareNeeds;

use Livewire\Component;
use App\Repositories\Appointments\AppointmentRepository;
use App\Utility\ProjectConstants;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CareNeedPartOne extends Component
{
    protected AppointmentRepository $appointmentRepository;
    public $currentTabLiveware = 0;
    public $formData = [];
    public $checkboxValueEdu = [];
    public $checkboxChildCondition = [];
    public $checkboxCommunicationWay = [];
    public $checkboxAttendingSchool = [];

    public function __construct()
    {
        parent::__construct();
        $this->appointmentRepository = app(AppointmentRepository::class);
    }

    public function changeCurrentTab($index)
    {
        $this->currentTabLiveware = $index;
    }

    public function updatedCheckboxValueEdu()
    {
        $this->updateFormData('educational_infos', 'schooling', $this->checkboxValueEdu);
    }

    public function updatedCheckboxChildCondition()
    {
        $this->updateFormData('child_conditions', 'knowledge_daily_life_requirement', $this->checkboxChildCondition);
    }

    public function updatedCheckboxCommunicationWay()
    {
        $this->updateFormData('child_conditions', 'communication_way', $this->checkboxCommunicationWay);
    }

    public function updatedCheckboxAttendingSchool()
    {
        $this->updateFormData('schoolings', 'why_not_attending_school', $this->checkboxAttendingSchool);
    }

    private function updateFormData($section, $field, $checkboxData)
    {
        $this->formData[$section][$field] = implode(',', array_keys(array_filter($checkboxData)));
    }

    public function mount()
    {
        $paymentStatus = 5;
        $incomeType = 1;

        $introduction = $this->appointmentRepository->getLastAppointmentForPaymentStatusIncomeType($paymentStatus, $incomeType);
        $dataCollection = $this->getDataFromTablesWithPrefixAndAppointmentId('care_need_part_one_', 1, $introduction);
        $this->formData = $dataCollection;
        $this->formData['introduction'] = $this->getIntroductionData($introduction);

        $this->trimFormDataCommas();
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
            'created_by' => auth()->id() ?? 1,
        ];
    }

    private function trimFormDataCommas()
    {
        $this->formData['educational_infos']['schooling'] = ltrim($this->formData['educational_infos']['schooling'], ',');
        $this->formData['child_conditions']['knowledge_daily_life_requirement'] = ltrim($this->formData['child_conditions']['knowledge_daily_life_requirement'], ',');
        $this->formData['child_conditions']['communication_way'] = ltrim($this->formData['child_conditions']['communication_way'], ',');
        $this->formData['schoolings']['why_not_attending_school'] = ltrim($this->formData['schoolings']['why_not_attending_school'], ',');
    }

    private function getDataFromTablesWithPrefixAndAppointmentId($prefix, $appointmentId, $introduction)
    {
        $tables = collect(Schema::getConnection()->getDoctrineSchemaManager()->listTableNames())
            ->filter(fn($tableName) => strpos($tableName, $prefix) === 0);

        return $tables->reduce(function ($formData, $tableName) use ($prefix, $appointmentId, $introduction) {
            $collectionName = Str::replaceFirst($prefix, '', $tableName);
            $tableData = DB::table($tableName)->where('appointment_id', $appointmentId)->first();
            
            $data = $tableData ? (array)$tableData : array_fill_keys(Schema::getColumnListing($tableName), null);
            
            // Set default values for specific keys
            $data['appointment_id'] = $introduction->id ?? '';
            $data['main_teacher_id'] = $introduction->main_teacher_id ?? '';
            $data['assistant_teacher_id'] = $introduction->assistant_teacher_id ?? '';
            $data['created_by'] = auth()->id() ?? 1;

            $formData[$collectionName] = $data;
            return $formData;
        }, []);
    }


    public function nextTab()
    {
        if ($this->currentTabLiveware < count($this->formData) - 1) {
            $this->currentTabLiveware++;
        }
    }

    public function prevTab()
    {
        dd($this->formData);
        if ($this->currentTabLiveware > 0) {
            $this->currentTabLiveware--;
        }
    }

    public function submit()
    {
        dd('Submit', $this->formData);
        // return redirect('/thank-you');
    }

    public function isLastTab()
    {
        return $this->currentTabLiveware === count($this->formData) - 1;
    }

    public function render()
    {
        
        $data = [
            'gender' => ProjectConstants::$genders,
            'learnAbout' => ProjectConstants::$learnAbout,
            'eduClass' => ProjectConstants::$class,
            // 'intervieweeData' => $intervieweeData,
        ];

        // dd($data);

        return view('livewire.care-needs.care-need-part-one', $data);
    }
}
