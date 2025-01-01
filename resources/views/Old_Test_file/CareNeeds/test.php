<?php

namespace App\Http\Livewire\CareNeeds;

use Livewire\Component;
use App\Repositories\Appointments\AppointmentRepository;
use App\Utility\ProjectConstants;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class CareNeedPartOne extends Component
{
    protected AppointmentRepository $appointmentRepository;

    public $currentTabLiveware = 0;
    public $formData = [];
    protected $rules = [];

    public function __construct()
    {
        parent::__construct();
        $this->appointmentRepository = app(AppointmentRepository::class);
    }

    public function changeCurrentTab($index)
    {
        $this->currentTabLiveware = $index;
    }

    public $checkboxValueEdu = [];
    public $checkboxChildCondition = [];
    public $checkboxCommunicationWay = [];
    public $checkboxAttendingSchool = [];

    public function updatedCheckboxValueEdu()
    {
        $this->formData['educational_infos']['schooling'] = implode(',', array_keys(array_filter($this->checkboxValueEdu)));
    }

    public function updatedCheckboxChildCondition()
    {
        $this->formData['child_conditions']['knowledge_daily_life_requirement'] = implode(',', array_keys(array_filter($this->checkboxChildCondition)));
    }

    public function updatedCheckboxCommunicationWay()
    {
        $this->formData['child_conditions']['communication_way'] = implode(',', array_keys(array_filter($this->checkboxCommunicationWay)));
    }
    
    public function updatedCheckboxAttendingSchool()
    {
        $this->formData['schoolings']['why_not_attending_school'] = implode(',', array_keys(array_filter($this->checkboxAttendingSchool)));
    }

    public function mount()
    {
        $incomeType = 1;
        $paymentStatus = 5;

        $introduction = $this->appointmentRepository->getLastAppointmentForPaymentStatusIncomeType($paymentStatus, $incomeType);

        $dataCollection = $this->getDataFromTablesWithPrefixAndAppointmentId('care_need_part_one_', 1);
        // dd($introduction);
        $this->formData = $dataCollection;
        $this->formData['introduction'] = [
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
                'main_teacher_name' => $introduction->main_teacher_name.' ('.$introduction->main_teacher_designation_name.')' ?? '',
                'main_teacher_signature' => $introduction->main_teacher_signature ?? '',
                'assistant_teacher_department_name' => $introduction->assistant_teacher_department_name ?? '',
                'assistant_teacher_name' => $introduction->assistant_teacher_name.' ('.$introduction->assistant_teacher_department_name.')' ?? '',
                'assistant_teacher_signature' => $introduction->assistant_teacher_signature ?? '',
                'appointment_id' => $introduction->id ?? '',
                'main_teacher_id' => $introduction->main_teacher_id ?? '',
                'assistant_teacher_id' => $introduction->assistant_teacher_id ?? '',
                'created_by' => auth()->id() ?? 1,
            ];
        
        $this->formData['educational_infos']['schooling'] = ltrim($this->formData['educational_infos']['schooling'], ',');
        $this->formData['child_conditions']['knowledge_daily_life_requirement'] = ltrim($this->formData['child_conditions']['knowledge_daily_life_requirement'], ',');
        $this->formData['child_conditions']['communication_way'] = ltrim($this->formData['child_conditions']['communication_way'], ',');
        $this->formData['schoolings']['why_not_attending_school'] = ltrim($this->formData['schoolings']['why_not_attending_school'], ',');
        // dd($this->formData);
    }

    private function getDataFromTablesWithPrefixAndAppointmentId($prefix, $appointmentId)
    {
        $tables = collect(Schema::getConnection()->getDoctrineSchemaManager()->listTableNames())
            ->filter(function ($tableName) use ($prefix) {
                return strpos($tableName, $prefix) === 0;
            });
       
        $tables->each(function ($tableName) use (&$formData, $prefix, $appointmentId) {
            $collectionName = Str::replaceFirst($prefix, '', $tableName);
            $tableData = DB::table($tableName)->where('appointment_id', $appointmentId)->first();
     
            if (!$tableData) {
                $columns = Schema::getColumnListing($tableName);
                $data = array_fill_keys($columns, null);
            } else {
                $data = (array) $tableData;
            }

            $formData[$collectionName] = $data;
        });

        return $formData;
    }

    public function nextTab()
    {
        $currentTabKey = array_keys($this->formData)[$this->currentTabLiveware];

        // dd('Next', $this->formData);

        if ($this->currentTabLiveware < count($this->formData) - 1) {
            $this->currentTabLiveware++;
        }
    }

    public function prevTab()
    {
        dd('Previous', $this->formData);
        if ($this->currentTabLiveware > 0) {
            $this->currentTabLiveware--;
        }
    }

    public function submit()
    {
        // dd($this->validate());
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
        ];
        return view('livewire.care-needs.care-need-part-one', $data);
    }
}
