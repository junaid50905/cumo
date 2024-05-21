<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Livewire\WithPagination;
use App\Services\CourseService;
use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\Factory;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Repositories\CaseHistoryRepository;
use App\Http\Livewire\Traits\CommonListElements;
use App\Models\Mitp;
use App\Models\Task;
use App\Models\Itp;
use App\Models\Itpdetail;
use Illuminate\Contracts\Foundation\Application;

use App\Utility\ProjectConstants;

class StudentController extends Controller
{
    use WithPagination, CommonListElements;

    public $record;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    private CourseService $courseService;
    private ProjectRepository $projectRepo;

    public function __construct(
        UserRepository $userRepository,
        ProjectRepository $projectRepository,
        StudentRepository $studentRepository,
        CaseHistoryRepository $caseHistoryRepository,
        CourseService $courseService,
    ) {
        $this->userRepo = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
        $this->courseService = $courseService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'stages' => ['Pre-Vocational', 'Vocational', 'Independent', 'Internship']
        ];

        return view('student.students.create', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $this->studentRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $data = [
            'record' => $student,
            'students' => $this->studentRepo->getData(),
            'stages' => ['Pre-Vocational', 'Vocational', 'Independent', 'Internship']
        ];
        return view('student.students.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $data = [
            'record' => $this->record = $student,
            'students' => $this->studentRepo->getData(),
            'stages' => ['Pre-Vocational', 'Vocational', 'Independent', 'Internship']
        ];
        return view('student.students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $this->studentRepo->update($student, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        return $student->delete();
    }

    public function appointment()
    {
        return view('pre_admission.appointment');
    }

    public function studentIncome()
    {
    }

    /*public function caseHistory(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'records' => $this->caseRepo->getListData($this->perPage, $this->search),
        ];

        return view('case-history', $data);
    }*/

    // public function referralForm(): Factory|View|Application
    // {

    //     return view('referral-form');
    // }

    public function admissionAddStudent(): Factory|View|Application
    {
        // dd("student/admission/add-student route and controller");
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('admission.add_student', $data);
    }

    public function studentProfile($id): Factory|View|Application
    {   
        $student = Student::find($id);
        return view('student.student_profile.profile', compact('id', 'student'));
    }

    public function studentProfileActivity(): Factory|View|Application
    {
        return view('student.student_profile.activity');
    }

    public function buildMitp($id){
        $activity_tasks = Mitp::groupBy('activity_id')->where('student_id', $id)->get();
        include(app_path() . '/Utility/DomainSubdomainAreaActivityArr.php');
        include(app_path() . '/Utility/DomainSubdomainAreaActivityArrValued.php');
        $master_arr = $data;
        $value_add_arr = $data_val;
        $activity_task_master_storage = [];
        //$master = [];
        foreach($master_arr as $key=>$domain){//Section E:  Domain 01 - Physical development;
            $domain_subdomain_area =[]; 
            $domain_str = $key;
            //domain added to final arr
            $domain_subdomain_area = [$domain_str=>[]];
            foreach($domain as $key=>$subdomain){//Motor Planning
              $subdomain_str = $key;
              //subdomain added to final arr
              $domain_subdomain_area[$domain_str]=[$subdomain_str=>[]];
              //$till_subdomain = []; 
              foreach($subdomain as $key=>$area){//Gross Motor Skill //Oral motor activities
                $area_str = $key;
                //area added to final arr
                $domain_subdomain_area[$domain_str][$subdomain_str]=[$area_str=>[]];
                //$single_area_wise_activities = [];
                foreach($area as $activity){
                    //'General Play', 'Organized Play', 'Leaky Guts', 'Taste / Smell'
                    $domain_subdomain_area[$domain_str][$subdomain_str][$area_str]=[$activity=> []];
                    $single_activity_wise_tasks_master = [];//General Play
                    //mitp table data loop
                    foreach($activity_tasks as $activity_task){
                        if($activity_task->activity->title == $activity){ 
                            //get all General Play related row from tasks table
                            $task_concat = [];
                            foreach(Task::where('activity_id', $activity_task->activity->id)->get() as $task){
                                $task_concat[] = [[$task->id, $task->title]];
                            }
                            $single_activity_wise_tasks_master[] = array_merge($task_concat);
                        }
                    }
                array_push($activity_task_master_storage, [$activity => $single_activity_wise_tasks_master]);
                //$single_area_wise_activities=[$activity => $single_activity_wise_tasks_master];
                }
              //$till_subdomain = [$subdomain_str=>[$area_str=>$single_area_wise_activities]]; 
              //array_push($master, [$domain_str=>$till_subdomain]);  
              } 
            }  
        }
        
        $master_max = [];
        foreach($value_add_arr as $domain=>$subdomains){// Section E:  Domain 01 - Physical development;
            $master_for_only_one_loop = [];
            $master_for_only_one_loop = [$domain=>[]];
            $subdomain_storage = [];
            foreach($subdomains as $key=>$areas){//associative array // Motor Skills/SubDomain
                $subdomain_str = $key;
                $area_storage = [];
                foreach($areas as $key=>$activities){// Gross Motor Skills()/area
                    //last loop for activity level
                    $activity_storage = [];
                    foreach($activities as $activity){
                        foreach($activity_task_master_storage as $itm){
                           if(array_keys([$itm][0])[0] == array_keys([$activity][0])[0]){
                                $activity[array_keys([$activity][0])[0]] = $itm[array_keys([$activity][0])[0]];
                           }
                        }
                        $activity_storage[]=$activity;
                    }
                    array_push($area_storage,[$key=>$activity_storage]);
                }
                array_push($subdomain_storage, [$subdomain_str=> $area_storage]);
            }
            array_push($master_for_only_one_loop[$domain], $subdomain_storage); 
            $master_max[] = $master_for_only_one_loop;
        }
        return $master_max;
    }

    public function makeItp($id){
        $tasks = Itp::where('student_id', $id)->get()->pluck('details');
        $task_ids = [];
        foreach($tasks as $itm){
            foreach($itm as $val){
                array_push($task_ids, $val->task_id);
            }
        }
         //return $task_ids;
        $activity_tasks = Mitp::groupBy('activity_id')->where('student_id', $id)->whereIn('task_id', $task_ids)->get();
        $mitp_table_task_ids = Mitp::where('student_id', $id)->whereIn('task_id', $task_ids)->get()->pluck('task_id')->toArray();
        include(app_path() . '/Utility/DomainSubdomainAreaActivityArr.php');
        include(app_path() . '/Utility/DomainSubdomainAreaActivityArrValued.php');
        $master_arr = $data;
        $value_add_arr = $data_val;
        $activity_task_master_storage = [];
        //$master = [];
        foreach($master_arr as $key=>$domain){//Section E:  Domain 01 - Physical development;
            $domain_subdomain_area =[]; 
            $domain_str = $key;
            //domain added to final arr
            $domain_subdomain_area = [$domain_str=>[]];
            foreach($domain as $key=>$subdomain){//Motor Planning
              $subdomain_str = $key;
              //subdomain added to final arr
              $domain_subdomain_area[$domain_str]=[$subdomain_str=>[]];
              //$till_subdomain = []; 
              foreach($subdomain as $key=>$area){//Gross Motor Skill //Oral motor activities
                $area_str = $key;
                //area added to final arr
                $domain_subdomain_area[$domain_str][$subdomain_str]=[$area_str=>[]];
                //$single_area_wise_activities = [];
                foreach($area as $activity){
                    //'General Play', 'Organized Play', 'Leaky Guts', 'Taste / Smell'
                    $domain_subdomain_area[$domain_str][$subdomain_str][$area_str]=[$activity=> []];
                    $single_activity_wise_tasks_master = [];//General Play
                    //mitp table data loop
                    foreach($activity_tasks as $activity_task){
                        if($activity_task->activity->title == $activity){ 
                            $task_concat = [];
                            $related_tasks = Task::where('activity_id', $activity_task->activity_id)->get()->pluck('id')->toArray();
                        
                            $intersect = array_intersect($related_tasks, $mitp_table_task_ids);
                                    
                            foreach(Task::whereIn('id', $intersect)->where('activity_id', $activity_task->activity->id)->get() as $task){
                                $task_concat[] = [[$task->id, $task->title]];
                            }
                            $single_activity_wise_tasks_master[] = array_merge($task_concat);
                        }
                    }
                array_push($activity_task_master_storage, [$activity => $single_activity_wise_tasks_master]);
                }
              } 
            }  
        }
        
        $master_max = [];
        foreach($value_add_arr as $domain=>$subdomains){// Section E:  Domain 01 - Physical development;
            $master_for_only_one_loop = [];
            $master_for_only_one_loop = [$domain=>[]];
            $subdomain_storage = [];
            foreach($subdomains as $key=>$areas){//associative array // Motor Skills/SubDomain
                $subdomain_str = $key;
                $area_storage = [];
                foreach($areas as $key=>$activities){// Gross Motor Skills()/area
                    //last loop for activity level
                    $activity_storage = [];
                    foreach($activities as $activity){
                        foreach($activity_task_master_storage as $itm){
                           if(array_keys([$itm][0])[0] == array_keys([$activity][0])[0]){
                                $activity[array_keys([$activity][0])[0]] = $itm[array_keys([$activity][0])[0]];
                           }
                        }
                        $activity_storage[]=$activity;
                    }
                    array_push($area_storage,[$key=>$activity_storage]);
                }
                array_push($subdomain_storage, [$subdomain_str=> $area_storage]);
            }
            array_push($master_for_only_one_loop[$domain], $subdomain_storage); 
            $master_max[] = $master_for_only_one_loop;
        }
        return $master_max;
    }

    public function studentProfileMITP($id): Factory|View|Application
    {   
        $student = Student::find($id);
        $master = $this->buildMitp($id);
        return view('student.student_profile.mitp', compact('id', 'master', 'student'));
    }

    public function studentProfileITP($id): Factory|View|Application
    {    
        $student = Student::find($id);
        return view('student.student_profile.itp', compact('id','student'));
    }

    public function fetchMitp($id){
        $master = $this->buildMitp($id); 
        return response()->json($master, 200);
    }
    public function fetchItp($id){
        $master = $this->makeItp($id); 
        $routine = [11, 22];
        response()->json($routine, 200);
        return response()->json($master, 200);
    }
    public function fetchRoutine($id){
        $routine_id = Student::find($id)->stage;
        $routine = \App\Models\RoutineDetail::where('routine_id', $routine_id+1)->get();
        return response()->json($routine, 200);
    }
    
    public function studentProfileMessages(): Factory|View|Application
    {
        return view('student.student_profile.messages');
    }


    public function studentProfileOtherCourses(): Factory|View|Application
    {
        return view('student.student_profile.other_courses');
    }

    public function studentProfileMyStudent(): Factory|View|Application
    {
        return view('student.student_profile.my_student');
    }

    public function studentProfileITPEvaluation(): Factory|View|Application
    {
        return view('student.student_profile.itp_evaluation');
    }

    public function studentProfilePreviousITPEvaluation(): Factory|View|Application
    {
        return view('student.student_profile.previous_itp_evaluation');
    }

    public function studentProfileVocationalTradeScore(): Factory|View|Application
    {
        return view('student.student_profile.vocational_trade_score');
    }

    public function individualrisk(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.individual_risk_assessment_form', $data);
    }

    public function sensoryChecklistForChild(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.sensory-checklist-for-child', $data);
    }

    public function occupationalTherapy(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.occupational-therapy', $data);
    }

    public function physioTherapy(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.physiotherapy', $data);
    }

    public function executiveFunctionTest(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.executive_function_test', $data);
    }

    public function autismBehaviorChecklist(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.autism_behavior_checklist', $data);
    }

    public function functionalCommunicationAssessment(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.functional_communication_assessment', $data);
    }

    public function sensoryChecklistForYoungAdult(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.sensory_checklist_for_young_adult', $data);
    }

    public function individualRiskAssessmentForm(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.individual_risk_assessment_form', $data);
    }
    // public function staffAndWorkplaceInspecationTool(): Factory|View|Application
    public function incidentRecord(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('student.dairy.incident-record', $data);
    }

    public function medicineAdmin(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.medicine-admin', $data);
    }

    public function functionalMovementskill(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.functional_movement_skills', $data);
    }

    public function studentList(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.student_list', $data);
    }

    public function tripReportForm(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.trip-report-form', $data);
    }

    public function gymOutingEvaluation(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.gym-outing-evalution', $data);
    }

    public function otAssessment(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.ot-assessment', $data);
    }

    public function dramaDiary(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.co-curricular.drama-diary-evaluation', $data);
    }

    public function staffWorkplace(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('student.employment.staff_and_workplace_inspecation_tool', $data);
    }
    // public function studentIncome(): Factory|View|Application
    // {
    //     $data = [
    //         'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
    //     ];
    //     return view('accounting.income.student_income', $data);
    // }
    public function studentSaleVoucher(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('accounting.income.sale_voucher', $data);
    }

    public function studentReceivedPayment(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('accounting.income.received_payment', $data);
    }

    public function assignTask(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('program.assign-task', $data);
    }

    public function createItp(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('program.create-itp', $data);
    }

    public function stockReceive(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.stock_receive', $data);
    }

    public function finishedGoods(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.finished_goods', $data);
    }

    public function materialCallects(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.material_callects', $data);
    }

    public function stockTransfer(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.stock_transfer', $data);
    }

    public function taskCreate(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('setup.program-setup.tesk-create', $data);
    }

    public function buildItp($id){
        $tasks = array_values(array_diff_key(request()->all(), array_flip(['student_id', 'itp_name', 'start_date', 'end_date', 'instruction', '_token'])));

        $itp = Itp::create(
            [
                'student_id' => request()->student_id,
                'itp_name' => request()->itp_name,
                'start_date' => request()->start_date,
                'end_date' => request()->end_date,
                'instruction' => request()->instruction
            ]
        );
        foreach($tasks as $task){
            Itpdetail::create(['itp_id'=> $itp->id,'task_id'=>$task]);  
        }
        return back();
    }
}
