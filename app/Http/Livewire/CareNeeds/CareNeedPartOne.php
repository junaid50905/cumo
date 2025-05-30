<?php

namespace App\Http\Livewire\CareNeeds;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Utility\ProjectConstants;
use App\Models\LinkCodeCount\LinkCodeCount;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Events\EventCalendarRepository;

class CareNeedPartOne extends Component
{
    protected AppointmentRepository $appointmentRepository;
    protected EventCalendarRepository $eventCalendarRepository;
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
        $this->eventCalendarRepository = app(EventCalendarRepository::class);
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
        $paymentStatus = 5; // 5=Completed
        $incomeType = 1; //1=Interview
        $eventType = 1; //1=Interview

        $introduction = $this->appointmentRepository->getAnAppointmentDetails($appointmentId = null, $incomeType, $eventType, $paymentStatus);
        $dataCollection = $this->getDataFromTablesWithPrefixAndAppointmentId('care_need_part_one_', $introduction->id, $introduction);
        $this->formData = $dataCollection;
        $this->formData['introduction'] = $this->getIntroductionData($introduction);

        // dd($this->formData['introduction']);
        // dd($this->formData);
        $this->trimFormDataCommas();
    }

    public function nextTab()
    {
        $linkCodeCounts = [];
        $link_code_for = $this->currentTabLiveware;
        $appointmentId = $this->formData['introduction']['appointment_id'];
        
        if($this->currentTabLiveware === 0){
            $mainTeacherId = $this->formData['introduction']['main_teacher_id'];
            $assistantTeacherId = $this->formData['introduction']['assistant_teacher_id'];
            $eventType = 1; // 1 = Interview
            $eventStatus = 2; // 2 = Processing

            $data = $this->formData['introduction'];
            $this->updatedAppointment($appointmentId, $data);
            $this->eventCalendarRepository->statusUpdated($appointmentId, $mainTeacherId, $assistantTeacherId, $eventType, $eventStatus);
        }
        
        $collectionsToProcess = [
            'specialities',
            'assessment_infos',
            'home_infos',
            'educational_infos',
            'child_conditions',
            'child_numbers',
            'schoolings',
        ];
        
        foreach ($collectionsToProcess as $collectionName) {
            if (isset($this->formData[$collectionName])) {
                foreach ($this->formData[$collectionName] as $key => $value) {
                    [$linkCodesYes, $linkCodesNo] = $this->getLinkCodesForQuestion($key, $link_code_for);
    
                    if ($value === 'Yes' && $linkCodesYes) {
                        foreach ($linkCodesYes as $linkCode) {
                            $linkCodeCounts[$linkCode] = ($linkCodeCounts[$linkCode] ?? 0) + 1;
                        }
                    } elseif ($value === 'No' && $linkCodesNo) {
                        foreach ($linkCodesNo as $linkCode) {
                            $linkCodeCounts[$linkCode] = ($linkCodeCounts[$linkCode] ?? 0) + 1;
                        }
                    }
                }
            }
        }
        
        $this->syncLinkCodeCounts($link_code_for, $linkCodeCounts, $appointmentId);

        //Create every part report start
        // $report = [];
        $specialities_reports = [];
        $home_infos_report = [];
        $educational_infos_report = [];
        $child_conditions_report = [];
        $family_condition_report = [];
        $daily_life_report = [];
        $behaviour_report = [];

        $excludedFields = [
            'id',
            'appointment_id', 
            'main_teacher_id', 
            'assistant_teacher_id', 
            'created_by',
            'created_at', 
            'updated_at',
            'specialities_report',
            'assessment_infos_report',
            'home_infos_report',
            'educational_infos_report',
            'child_conditions_report',
            'family_condition_report',
            'daily_life_report',
            'behaviour_report',
        ];

        foreach ($collectionsToProcess as $collectionName) {
            if (isset($this->formData[$collectionName])) {
                $yesCount = 0;
                $noCount = 0;
                $otherCount = 0;
                $totalCount = 0;

                foreach ($this->formData[$collectionName] as $key => $value) {
                    // Skip counting if the field is in the excluded list
                    if (in_array($key, $excludedFields)) {
                        continue;
                    }
                   
                    if ($value === 'Yes') {
                        $yesCount++;
                    } elseif ($value === 'No') {
                        $noCount++;
                    } else {
                        $otherCount++;
                    }
                    $totalCount++;

                    // Handle specific fields for specialities
                    if ($collectionName == 'specialities' && $value == 'Yes') {
                        if ($key == 'is_autism') {
                            $specialities_reports[] = "Autism";
                        }
                        if ($key == 'is_down_syndrome') {
                            $specialities_reports[] = 'Down Syndrome';
                        }
                        if ($key == 'is_cerebral_palsy') {
                            $specialities_reports[] = 'Cerebral Palsy';
                        }
                        if ($key == 'is_intellectual_disability') {
                            $specialities_reports[] = 'Intellectual Disability';
                        }
                    }

                    // // Handle specific field for assessment_infos
                    // if ($collectionName == 'assessment_infos' && $key == 'social_communication_checklist') {
                    //     $report['assessment_infos_social_communication_checklist'] = $value;
                    // }

                    // Handle specific field for home_infos
                    if ($collectionName == 'home_infos' && $value == 'No') {
                        if ($key == 'separate_bed') {
                            $home_infos_report[] = "Separate Bed";
                        }
                        if ($key == 'sleep_alone') {
                            $home_infos_report[] = "Sleep Alone";
                        }
                        if ($key == 'own_equipment') {
                            $home_infos_report[] = "Own Equipment";
                        }
                    }

                    //Handle specific field for child_conditions
                    if ($collectionName == 'child_conditions' && $value == 'Yes'){
                        if ($key == 'happy_at_home') {
                            $family_condition_report[] = "happy_at_home";
                        }
                        if ($key == 'lonely') {
                            $family_condition_report[] = "lonely";
                        }
                        if ($key == 'protective') {
                            $family_condition_report[] = "protective";
                        }
                        if ($key == 'well_protective') {
                            $family_condition_report[] = "well_protective";
                        }
                        if ($key == 'confident') {
                            $family_condition_report[] = "confident";
                        }
                    }
                }
              
                $yesPercentage = ($totalCount > 0) ? ($yesCount / $totalCount) * 100 : 0;

                $report[$collectionName . '_totals'] = [
                    'Yes' => $yesCount,
                    'No' => $noCount,
                    'Other' => $otherCount,
                    'specificTotalCount' => $yesCount + $noCount + 0,
                ];
                
                if($collectionName === 'specialities'){
                    if (count($specialities_reports) > 2) {
                        $report['specialities'] = implode(', ', $specialities_reports) . ' and multiple diseases';
                    } elseif (count($specialities_reports) <= 2 && $yesPercentage > 50){
                        $report['specialities'] = implode(', ', $specialities_reports) . ' and Not so Good';
                    } elseif (count($specialities_reports) < 2 && ($yesPercentage > 20 && $yesPercentage < 50)){
                        $report['specialities'] = implode(', ', $specialities_reports) . ' and Mild';
                    } else {
                        $report['specialities'] = implode(', ', $specialities_reports). 'Good';
                    }
                    $this->formData['specialities']['specialities_report'] = $report['specialities'];

                } elseif($collectionName === 'home_infos'){
                    $separeteRoom = $this->formData[$collectionName]['separate_room']; // Yes/No
                    $specifcYesCount = $report['home_infos_totals']['Yes'];
                    $specificTotalCount = $report['home_infos_totals']['specificTotalCount'];
                    $homeInfoYesPercentage = ($specificTotalCount > 0) ? ($specifcYesCount / $specificTotalCount) * 100 : 0;
                    
                    if (count($home_infos_report) >= 3) {
                        $report['home_infos'] = 'Fully Dependent';
                    } elseif (count($home_infos_report) <= 2 && ($homeInfoYesPercentage <= 50 || $separeteRoom === 'No')){
                        $report['home_infos'] = 'Partially Dependent';
                    }else {
                        $report['home_infos'] = 'Independent';
                    }
                    $this->formData['home_infos']['home_infos_report'] = $report['home_infos'];
                } elseif($collectionName === 'educational_infos'){
                    if ($yesPercentage >= 100) {
                        $report['educational_infos'] = "Good";
                    } elseif ($yesPercentage < 100 && $yesPercentage > 0) {
                        $report['educational_infos'] = 'Possible';
                    } else {
                        $report['educational_infos'] = 'Not Possible';
                    }
                    $this->formData['educational_infos']['educational_infos_report'] = $report['educational_infos'];
                } elseif($collectionName === 'child_conditions'){
                    // This is for Family Condition at Home
                    $withdrawal = $this->formData[$collectionName]['withdrawal']; // Yes/No
                    $familyConditionYesPercentage = (count($family_condition_report) > 0) ? (count($family_condition_report) / 5) * 100 : 0;
                    // dd(count($family_condition_report), $withdrawal, $familyConditionYesPercentage);

                    if($withdrawal === 'No' && $familyConditionYesPercentage >= 100){
                        $report['family_condition_report'] = 'Good';
                    }elseif($familyConditionYesPercentage >= 50 && $familyConditionYesPercentage <= 100){
                        $report['family_condition_report'] = 'Not so Good';
                    }elseif($familyConditionYesPercentage < 50){
                        $report['family_condition_report'] = 'Mild';
                    }
                    // $report['family_condition_report'] = $this->formData['child_conditions']['family_condition_report'];
                  
                    // This is Daily Life knowledge
                    $selectedItems = explode(',', $this->formData[$collectionName]['knowledge_daily_life_requirement']); // total Items = 22
                    $dailyArrayLength = count($selectedItems);
                    $existsNonFood = in_array("Non-Food", $selectedItems);
                    $dailyLifeYesPercentage = ($dailyArrayLength > 0) ? ($dailyArrayLength / 21) * 100 : 0;
                    // dd($selectedItems, $dailyArrayLength, $existsNonFood, $dailyLifeYesPercentage);

                    if(!$existsNonFood && $dailyLifeYesPercentage >= 100){
                        $report['daily_life_report'] = 'Good';
                    }elseif($dailyLifeYesPercentage >= 50 && $dailyLifeYesPercentage <= 110){
                        $report['daily_life_report'] = 'Not so Good';
                    }elseif($dailyLifeYesPercentage < 50){
                        $report['daily_life_report'] = 'Mild';
                    }

                    // This is Behaviour
                    $behaviourYesCount = $report['child_conditions_totals']['Yes'] - count($family_condition_report); // total Items: 9
                    $behaviourYesPercentage = ($behaviourYesCount > 0) ? ($behaviourYesCount / 9) * 100 : 0;
                    // dd(count($family_condition_report), $behaviourYesCount, $behaviourYesPercentage);

                    if($behaviourYesPercentage >= 100){
                        $report['behaviour_report'] = 'Good';
                    }elseif($behaviourYesPercentage >= 50 && $behaviourYesPercentage <= 100){
                        $report['behaviour_report'] = 'Not so Good';
                    }elseif($behaviourYesPercentage < 50){
                        $report['behaviour_report'] = 'Mild';
                    }
                    $finalReport = [
                        'Family Condition' => $report['family_condition_report'],
                        'Daily Life' => $report['daily_life_report'],
                        'Behaviour' => $report['behaviour_report'],
                    ];
                    
                    $this->formData['child_conditions']['child_conditions_report'] = $finalReport;
                }elseif($collectionName === 'assessment_infos') {
                    if ($yesPercentage > 80) {
                        $this->formData[$collectionName][$collectionName . '_report'] = "Good";
                    } elseif ($yesPercentage >= 50 && $yesPercentage <= 80) {
                        $this->formData[$collectionName][$collectionName . '_report'] = 'Not so Good';
                    } else {
                        $this->formData[$collectionName][$collectionName . '_report'] = 'Mild';
                    }
                }
            }
        }

        // dd($this->formData, $report);

        //Create every part report end

        $this->updateOrCreateData();
        if ($this->currentTabLiveware < count($this->formData) - 1) {
            $this->currentTabLiveware++;
        }
    }

    public function prevTab()
    {
        // dd('Prv', $this->formData);
        if ($this->currentTabLiveware > 0) {
            $this->currentTabLiveware--;
        }
    }

    public function submit()
    {
        $this->updateOrCreateData();
        $appointmentId = $this->formData['introduction']['appointment_id'];
        $mainTeacherId = $this->formData['introduction']['main_teacher_id'];
        $assistantTeacherId = $this->formData['introduction']['assistant_teacher_id'];
        $eventType = 1; // 1=Interview
        $eventStatus = 4; // 4=Completed
        $updateData = [
            "interview_status" => "Completed" ?? "Processing",
        ];

        $this->appointmentRepository->updatedAppointmentData($appointmentId, $updateData);
        $this->eventCalendarRepository->statusUpdated($appointmentId, $mainTeacherId, $assistantTeacherId, $eventType, $eventStatus);
        
        return redirect("/student/care-need-part-one-report/{$appointmentId}");
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

    private function trimFormDataCommas()
    {
        $sections = [
            'child_conditions' => ['knowledge_daily_life_requirement', 'communication_way'],
            'schoolings' => 'why_not_attending_school'
        ];

        foreach ($sections as $section => $fields) {
            if (is_array($fields)) {
                foreach ($fields as $field) {
                    $this->formData[$section][$field] = ltrim($this->formData[$section][$field], ',');
                }
            } else {
                $this->formData[$section][$fields] = ltrim($this->formData[$section][$fields], ',');
            }
        }
    }

    private function getDataFromTablesWithPrefixAndAppointmentId($prefix, $appointmentId, $introduction)
    {
        $tables = collect(Schema::getConnection()->getDoctrineSchemaManager()->listTableNames())
            ->filter(fn($tableName) => strpos($tableName, $prefix) === 0);

        return $tables->reduce(function ($formData, $tableName) use ($prefix, $appointmentId, $introduction) {
            $collectionName = Str::replaceFirst($prefix, '', $tableName);
            $tableData = DB::table($tableName)->where('appointment_id', $appointmentId)->first();
            
            $data = $tableData ? (array)$tableData : array_fill_keys(Schema::getColumnListing($tableName), null);
            
            $data['appointment_id'] = $introduction->id ?? '';
            $data['main_teacher_id'] = $introduction->main_teacher_id ?? '';
            $data['assistant_teacher_id'] = $introduction->assistant_teacher_id ?? '';
            $data['created_by'] = auth()->id() ?? 1;

            $formData[$collectionName] = $data;
            return $formData;
        }, []);
    }

    private function updateOrCreateData()
    {
        $prefix = 'care_need_part_one_';
        $appointmentId = $this->formData['introduction']['appointment_id'];
        $tables = collect(Schema::getConnection()->getDoctrineSchemaManager()->listTableNames())
            ->filter(fn($tableName) => strpos($tableName, $prefix) === 0);

        // dd($tables);
        foreach ($tables as $tableName) {
            $collectionName = Str::replaceFirst($prefix, '', $tableName);
            if (isset($this->formData[$collectionName]) && !empty($this->formData[$collectionName])) {
                $data = $this->formData[$collectionName];
                
                // Ensure all array values are converted to a string, e.g., json_encode
                foreach ($data as $key => $value) {
                    if (is_array($value)) {
                        $data[$key] = json_encode($value);  // Convert arrays to JSON string
                    }
                }
               
                $currentTimestamp = now();
                $data['created_at'] = $data['created_at'] ?? $currentTimestamp;  
                $data['updated_at'] = $currentTimestamp; 

                // Remove unnecessary fields like 'id' if it exists
                unset($data['id']);

                DB::table($tableName)->updateOrInsert(
                    ['appointment_id' => $appointmentId],
                    $data
                );
            }
        }
    }

    private function getLinkCodesForQuestion($questionKey, $link_code_for)
    {
        $linkCodeMaps = [
            2 => [ 
                'is_autism' => ['Yes' => ['All']],
                'is_down_syndrome' => ['Yes' => ['All']],
                'is_cerebral_palsy' => ['Yes' => ['All']],
                'is_intellectual_disability' => ['Yes' => ['D2.b.2']],
                'is_dyslexia' => ['Yes' => ['D2.b.2']],
                'is_learning_disability' => ['Yes' => ['D2.b.2']],
                'is_anxiety_disorder' => ['Yes' => ['D3.b', 'D4.b', 'D4.c']],
                'is_adhd' => ['Yes' => ['D4.b', 'D4.c']],
                'is_bipolar_disorder' => ['Yes' => ['D3.b', 'D4.a', 'D4.c']],
                'is_speech_disorder' => ['Yes' => ['D2.b.3', 'D4.a', 'D4.c']],
                'is_language_disorder' => ['Yes' => ['D2.b.3', 'D4.a', 'D4.c']],
                'is_ocd' => ['Yes' => ['D4.a', 'D4.b']],
                'is_multiple_personality' => ['Yes' => ['D3.a']],
                'is_sluttering' => ['Yes' => ['D2.b.3']],
                'is_depression' => ['Yes' => ['D4.a']],
                'is_writing_disorder' => ['Yes' => ['D2.b.2']],
                'is_reading_disorder' => ['Yes' => ['D2.b.2']],
                'is_match_disorder' => ['Yes' => ['D2.b.2']],
                'is_attachment_disorder' => ['Yes' => ['D4.a', 'D4.c']],
                'is_separation_anxiety' => ['Yes' => ['D4.a', 'D4.c']],
            ],
            3 => [
                'social_communication_checklist' => ['Yes' => ['SCC','D1.a.3','D3.b','D3.c','D4.a','D4.b']],
                'sensory_checklist' => ['Yes' => ['Sens','D1.a.2','D1.a.3','D1.a.4','D2.a','D3.b','D3.c','D4.a']],
                'occupational_assessment' => ['Yes' => ['OT.A','D1.a','D1.a.2','D1.a.4','D3.b','D3.c','D4.a','D4.b']],
                'speech_language_assessment' => ['Yes' => ['D1.a.4','D2.b.3','D3.c','D4.a','D4.b']],
                'physiotherapy_assessment' => ['Yes' => ['Phy.A','SLT.A','D1.a','D3.c','D4.a','D4.b']],
                'fundamental_movement_skills' => ['Yes' => ['BMS','D1.a','D3.c','D4.a','D4.b']],
                'fundamental_evaluation' => ['Yes' => ['CAR','Ind.a','D1.a','D1.a.2','D1.a.3','D1.a.4','D2.a','D2.b.1','D3.a','D3.b','D3.c','D4.a','D4.b']],
                'psychological_assessment' => ['Yes' => ['Psy.A','D3.c']],
                'academic_assessment' => ['Yes' => ['FACTs','D1.a.2','D1.a.3','D2.b.2']],
            ],
            4 => [
                'separate_room' => ['No' => ['D3.c']],
                'separate_bed' => ['No' => ['D3.c']],
                'sleep_alone' => ['No' => ['D3.c']],
                'separate_cupboard' => ['No' => ['D3.c']],
                'separate_toilet' => ['No' => ['D3.c']],
                'own_equipment' => ['No' => ['D3.c']],
            ],
            5 => [
                'speaking_capacity' => ['Yes' => ['D2.b.3.15']],
                'listening_capacity' => ['No' => ['D2.b.3.09']],
                'reading_capacity' => ['No' => ['D2.b.2.04']],
                'writing_capacity' => ['No' => ['D2.b.2.07']],
                'counting_capacity' => ['No' => ['D2.b.2.08']],
                'money_concept' => ['No' => ['D2.b.2.09']],
            ],
            6 => [
                'happy_at_home' => ['No' => ['D3']],
                'lonely' => ['No' => ['D3']],
                'protective' => ['No' => ['D3.c.1']],
                'well_protective' => ['No' => ['D3.c.1']],
                'withdrawal' => ['No' => ['D3']],
                'confident' => ['No' => ['D3.a']],
                'communicate' => ['Yes' => ['D2.b.3']],
                'follow_instructions' => ['No' => ['D2.b.3']],
                'sitting_habit' => ['No' => ['D4.a.2']],
                'hyperness' => ['Yes' => ['D3.b.01']],
                'tantrum' => ['Yes' => ['D3.b.01']],
                'self_injury' => ['Yes' => ['D3.b.01']],
                'specific_life_style' => ['No' => ['D3.c']],
                'temper' => ['Yes' => ['D3.b.01']],
            ],
        ];
        
        $currentMap = $linkCodeMaps[$link_code_for] ?? [];

        return [
            $currentMap[$questionKey]['Yes'] ?? [],
            $currentMap[$questionKey]['No'] ?? []
        ];
    }

    private function syncLinkCodeCounts(int $link_code_for, array $linkCodeCounts, int $appointmentId)
    {
        $userId = auth()->id();
        $existingRecords = LinkCodeCount::where('link_code_for', $link_code_for)
            ->where('appointment_id', $appointmentId)
            ->get();
        
        $existingLinkCodes = $existingRecords->pluck('link_code')->toArray();
       
        foreach ($linkCodeCounts as $linkCode => $count) {
            LinkCodeCount::updateOrCreate(
                [
                    'link_code_for' => $link_code_for,
                    'link_code' => $linkCode,
                    'appointment_id' => $appointmentId
                ],
                [
                    'count' => $count,
                    'created_by' => $userId,
                ]
            );
            
            if (($key = array_search($linkCode, $existingLinkCodes)) !== false) {
                unset($existingLinkCodes[$key]);
            }
        }
        
        if (!empty($existingLinkCodes)) {
            LinkCodeCount::where('link_code_for', $link_code_for)
                ->where('appointment_id', $appointmentId)
                ->whereIn('link_code', $existingLinkCodes)
                ->delete();
        }
    }

    private function updatedAppointment($appointmentId, $data){
        $updateData = [
            "dob" => $data['dob'] ?? null,
            "age" => $data['age'] ?? null,
            "mother_name" => $data['mother_name'] ?? null,
            "mother_edu_level" => $data['mother_edu_level'] ?? null,
            "mother_occupation" => $data['mother_occupation'] ?? null,
            "mother_nid" => $data['mother_nid'] ?? null,
            "father_name" => $data['father_name'] ?? null,
            "father_edu_level" => $data['father_edu_level'] ?? null,
            "father_occupation" => $data['father_occupation'] ?? null,
            "father_nid" => $data['father_nid'] ?? null,
            "parent_email" => $data['parent_email'] ?? null,
            "permanent_address" => $data['permanent_address'] ?? null,
            "gender" => $data['gender'] ?? null,
            "interview_status" => "Processing" ?? "Pending",
            "created_by" => auth()->id()
        ];

        $this->appointmentRepository->updatedAppointmentData($appointmentId, $updateData);
    }
}
