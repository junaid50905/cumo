<?php

namespace App\Http\Livewire\CareNeeds;

use Livewire\Component;
use App\Repositories\Appointments\AppointmentRepository;
use App\Utility\ProjectConstants;

use App\Models\CareNeeds\CareNeedPartOneGeneralInfo;
use App\Models\CareNeeds\CareNeedPartOneSpeciality;
use App\Models\CareNeeds\CareNeedPartOneAssessmentInfo;
use App\Models\CareNeeds\CareNeedPartOneHomeInfo;
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
        // dd($index);
        $this->currentTabLiveware = $index;
    }

    public $selectedValues = [];

    public function updatedSelectedValues()
    {
        $this->formData['educational_infos']['schooling'] = implode(',', array_keys(array_filter($this->selectedValues)));
    }

    public function mount()
    {
        $incomeType = 1;
        $paymentStatus = 5;

        $general_info = CareNeedPartOneGeneralInfo::first();
        $speciality = CareNeedPartOneSpeciality::first();
        $assessment_info = CareNeedPartOneAssessmentInfo::first();
        $home_info = CareNeedPartOneHomeInfo::first();
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

        foreach ($this->formData as $key => $fields) {
            foreach ($fields as $field => $value) {
                $this->rules["formData.$key.$field"] = 'nullable|string';
            }
        }

        
        $this->formData['educational_infos']['schooling'] = ltrim($this->formData['educational_infos']['schooling'], ',');
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

        // switch ($currentTabKey) {
        //     case 'general_info':
        //         CareNeedPartOneGeneralInfo::updateOrCreate(
        //             ['appointment_id' => $this->formData['general_info']['appointment_id']],
        //             $this->formData['general_info']
        //         );
        //         break;
        //     case 'speciality':
        //         CareNeedPartOneSpeciality::updateOrCreate(
        //             ['appointment_id' => $this->formData['speciality']['appointment_id']],
        //             $this->formData['speciality']
        //         );
        //         break;
        //     case 'assessment_info':
        //         CareNeedPartOneAssessmentInfo::updateOrCreate(
        //             ['appointment_id' => $this->formData['assessment_info']['appointment_id']],
        //             $this->formData['assessment_info']
        //         );
        //         break;
        //     case 'home_info':
        //         CareNeedPartOneHomeInfo::updateOrCreate(
        //             ['appointment_id' => $this->formData['home_info']['appointment_id']],
        //             $this->formData['home_info']
        //         );
        //         break;
        // }

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

        CareNeedPartOneGeneralInfo::updateOrCreate(
            ['appointment_id' => $this->formData['general_info']['appointment_id']],
            $this->formData['general_info']
        );
        CareNeedPartOneSpeciality::updateOrCreate(
            ['appointment_id' => $this->formData['speciality']['appointment_id']],
            $this->formData['speciality']
        );
        CareNeedPartOneAssessmentInfo::updateOrCreate(
            ['appointment_id' => $this->formData['assessment_info']['appointment_id']],
            $this->formData['assessment_info']
        );
        CareNeedPartOneHomeInfo::updateOrCreate(
            ['appointment_id' => $this->formData['home_info']['appointment_id']],
            $this->formData['home_info']
        );

        // return redirect('/thank-you');
    }

    public function isLastTab()
    {
        return $this->currentTabLiveware === count($this->formData) - 1;
    }

    public function render()
    {
        // $incomeType = 1;
        // $paymentStatus = 5;
        // $intervieweeData = $this->appointmentRepository->getLastAppointmentForPaymentStatusIncomeType($paymentStatus, $incomeType);

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
