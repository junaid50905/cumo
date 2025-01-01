<?php

namespace App\Http\Controllers\CareNeeds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Utility\ProjectConstants;
use App\Services\CareNeedPartOneServices;

use App\Http\Requests\CareNeeds\StoreCareNeedPartOneRequest;
use App\Http\Requests\CareNeeds\UpdateCareNeedPartOneRequest;

use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\CareNeeds\CareNeedPartOneRepository;
use App\Repositories\Setup\SetupTableOfContentRepository;

use App\Models\CareNeedPartOne;
use App\Models\LinkCodeCount\LinkCodeCount;
use App\Models\Appointments\Appointment;
use App\Models\Setup\TableOfContent;
use App\Models\CareNeeds\CareNeedPartoneSuggestion;


class CareNeedPartOneController extends Controller
{
    private AppointmentRepository $appointmentRepository;
    private UserRepository $userRepo;
    private CareNeedPartOneRepository $careNeedPartOneRepository;
    private SetupTableOfContentRepository $tableOfContentRepository;
    private CareNeedPartOneServices $service;
    private StudentRepository $studentRepo;

    public function __construct(AppointmentRepository $appointmentRepository, CareNeedPartOneServices $service, StudentRepository $studentRepo, UserRepository $userRepository, CareNeedPartOneRepository $careNeedPartOneRepository, SetupTableOfContentRepository $tableOfContentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->userRepo = $userRepository;
        $this->careNeedPartOneRepository = $careNeedPartOneRepository;
        $this->tableOfContentRepository = $tableOfContentRepository;
        $this->service = $service;
        $this->studentRepo = $studentRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomeType = 1;
        $paymentStatus = 5;
        $allAppointmentStudent = $this->appointmentRepository->getAppointmentsForIncomeTypePaymentStatus($incomeType, $paymentStatus);

        // dd($allAppointmentStudent);
        return view('pre_admission.care-need-part-one.list', compact('allAppointmentStudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View|Factory|Application
    {
        // dd("Ok");
        return view('pre_admission.care-need-part-one.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareNeedPartOneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareNeedPartOneRequest $request)
    {
        dd($request);
        $this->service->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $paymentStatus = 5; // 5=Completed
        $incomeType = 1; //1=Interview
        $eventType = 1; //1=Interview

        $introduction = $this->appointmentRepository->getAnAppointmentDetails($id, $incomeType, $eventType, $paymentStatus);
        if (is_null($introduction)) {
            Session::flash('alert', ['type' => 'warning', 'title' => "Don't Setup!", 'message' => 'Please Setup Interview Schedule.']);
            return redirect()->route('appointment.edit', $id);
        }

        return view('pre_admission.care-need-part-one.details', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function edit(CareNeedPartOne $care_need_part_one)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $care_need_part_one['id'],
            'collection_date' => $care_need_part_one['collection_date'],
            'teacher_id' => $care_need_part_one['teacher_id'],
            'student_id' => $care_need_part_one['student_id'],
            'common' => $care_need_part_one['common'],
            'types_of_specialty_disability_impairments' => $care_need_part_one['types_of_specialty_disability_impairments'],
            'assessment' => $care_need_part_one['assessment'],
            'educational_information' => $care_need_part_one['educational_information'],
            'childs_condition_at_his_family' => $care_need_part_one['childs_condition_at_his_family'],
            'number_of_children_in_the_family' => $care_need_part_one['number_of_children_in_the_family'],
            'schooling' => $care_need_part_one['schooling'],
            'home' => $care_need_part_one['home'],
        ];
        return view('pre_admission.care-need-part-one.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareNeedPartOneRequest  $request
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCareNeedPartOneRequest $request, CareNeedPartOne $careNeedPartOne)
    {
        $this->service->update($careNeedPartOne, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareNeedPartOne $careNeedPartOne)
    {
        return $careNeedPartOne->delete();
    }

    public function summaryCareNeedPartOne()
    {
        $linkCodeCounts = LinkCodeCount::select('link_code', 'appointment_id', \DB::raw('SUM(count) as total_count'))
            ->groupBy('link_code', 'appointment_id') 
            ->orderBy('total_count', 'DESC') 
            ->get();
  
        $linkCodes = $linkCodeCounts->pluck('link_code');
        $titles = TableOfContent::whereIn('link_code', $linkCodes)
            ->pluck('title', 'link_code');
        
        $appointmentNames = Appointment::whereIn('id', $linkCodeCounts->pluck('appointment_id'))
            ->get()
            ->mapWithKeys(function ($appointment) {
                return [$appointment->id => "({$appointment->student_id}) {$appointment->name}"];
            });
        // dd($appointmentNames);

        // Group link code counts by appointment_id
        $groupedByAppointmentId = $linkCodeCounts->groupBy('appointment_id');

        // Map the grouped data to create a new array structure with max 5 link_codes per appointment_id
        $linkCodeTitlesGrouped = $groupedByAppointmentId->map(function ($items, $appointmentId) use ($titles, $appointmentNames) {
            $appointmentName = $appointmentNames->get($appointmentId, 'Unknown Appointment'); 
            
            $data = $items->sortByDesc('total_count') 
                ->take(3) 
                ->map(function ($item) use ($titles) {
                    $title = $titles->get($item->link_code, 'No Title'); 
                    return [
                        'title' => $title,
                        'total_count' => $item->total_count,
                    ];
                });
            return [
                'appointment_id' => $appointmentId,
                'appointment_name' => $appointmentName,
                'link_codes' => $data
            ];
        });
        // dd($linkCodeTitlesGrouped);
        return view('pre_admission.care-need-part-one.summary_list', compact('linkCodeTitlesGrouped'));
    }

    public function reportCareNeedPartOne($appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        $cocurricularActivities = [
            '1' => 'Music',
            '2' => 'Art'
        ];

        $therapies = [
            '1' => 'Physiotherapy',
            '2' =>'Occupational Therapy'
        ];

        $suggestionData = CareNeedPartoneSuggestion::where('appointment_id', $appointment->id)->first();

        // dd($suggestionData);

        $data = [
            'specialty_disability_impairments' => $appointment->care_need_part_one_specialities->specialities_report,
            'assessment_information' => $appointment->care_need_part_one_assessment_infos->assessment_infos_report,
            'condition_at_home_information' => $appointment->care_need_part_one_home_infos->home_infos_report,
            'educational_information' => $appointment->care_need_part_one_educational_infos->educational_infos_report,
            'child_condition_at_his_family' => $appointment->care_need_part_one_child_conditions->child_conditions_report,
            'schoolings' => $appointment->care_need_part_one_schoolings->schoolings_report,
        ];
        // dd($data);

        return view('pre_admission.care-need-part-one.report', ['data' => $data, 'appointment' => $appointment, 'cocurricularActivities' => $cocurricularActivities,'therapies' => $therapies,'suggestionData' => $suggestionData]);

        // $linkCodeCounts = LinkCodeCount::select('link_code', \DB::raw('SUM(count) as total_count'))
        //     ->where('appointment_id', $appointment_id)
        //     ->groupBy('link_code', 'appointment_id')
        //     ->orderBy('total_count', 'DESC')
        //     ->get();

        // $linkCodes = $linkCodeCounts->pluck('link_code');
        
        // $tableOfContents = TableOfContent::whereIn('link_code', $linkCodes)
        //     ->with('parent')
        //     ->get();

        // //Build full title path function
        // function buildFullTitlePath($item)
        // {
        //     if ($item->parent) {
        //         return buildFullTitlePath($item->parent) . '->' . $item->title;
        //     }
        //     return $item->title;
        // }

        // $linkCodeTitles = $linkCodeCounts->map(function ($item) use ($tableOfContents) {
        //     $tocItem = $tableOfContents->firstWhere('link_code', $item->link_code);
        //     if ($tocItem) {
        //         $fullTitle = buildFullTitlePath($tocItem);
        //     } else {
        //         $fullTitle = 'no title';
        //     }

        //     return [
        //         'link_code' => $item->link_code,
        //         'total_count' => $item->total_count,
        //         'title' => $fullTitle
        //     ];
        // });

        // dd($appointment, $linkCodeCounts, $linkCodeTitles);
        // return view('pre_admission.care-need-part-one.report', compact('appointment', 'linkCodeTitles','cocurricularActivities','therapies', 'suggestionData'));
    }

    public function suggestionCareNeedPartOne(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'appointment_id' => 'required|integer',
                'observation' => 'nullable|string',
                'follow_up' => 'nullable|string',
                'assessment' => 'nullable|string',
                'reference' => 'nullable|string',
                'reference_name' => 'nullable|string',
                'therapies' => 'nullable|string',
                'cocurricular_activities' => 'nullable|string',
            ]);

            $data = [
                'observation' => $validatedData['observation'] ?? null,
                'follow_up' => $validatedData['follow_up'] ?? null,
                'assessment' => $validatedData['assessment'] ?? null,
                'reference' => $validatedData['reference'] ?? null,
                'reference_name' => $validatedData['reference_name'] ?? null,
                'therapies' => $validatedData['therapies'] ?? null,
                'cocurricular_activities' => $validatedData['cocurricular_activities'] ?? null,
                'created_by' => Auth::id() 
            ];
    
            // Use updateOrCreate to either update existing record or create a new one
            $suggestion = CareNeedPartoneSuggestion::updateOrCreate(
                ['appointment_id' => $validatedData['appointment_id']],
                $data
            );
        
            if ($suggestion->wasRecentlyCreated) {
                Session::flash('alert', [
                    'type' => 'success',
                    'title' => "Inserted!",
                    'message' => 'Suggestion saved successfully.'
                ]);
            } else {
                Session::flash('alert', [
                    'type' => 'success',
                    'title' => "Updated!",
                    'message' => 'Suggestion updated successfully.'
                ]);
            }
    
            return redirect()->back();
        } catch (\Throwable $th) {
            Session::flash('alert', [
                'type' => 'warning',
                'title' => "Failed!",
                'message' => 'Something went wrong: ' . $th->getMessage()
            ]);
            return redirect()->back();
        }
    }
    

    public function search(Request $request){
        $studentId = $request->input('search_id');
        // dd($studentId);
        $paymentStatus = 5; // 5=Completed
        $incomeType = 1; //1=Interview
        $eventType = 1; //1=Interview

        $introduction = $this->appointmentRepository->getAnAppointmentDetails(null, $incomeType, $eventType, $paymentStatus, $studentId);
        // dd($introduction);
        if (is_null($introduction)) {
            Session::flash('alert', ['type' => 'warning', 'title' => "Don't Setup!", 'message' => 'Please Setup Interview Schedule.']);
            return redirect()->route('appointment.index');
        }

        return view('pre_admission.care-need-part-one.details', ['id' => $introduction->id]);
    }
}