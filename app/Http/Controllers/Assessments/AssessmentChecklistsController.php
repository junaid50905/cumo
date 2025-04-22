<?php

namespace App\Http\Controllers\Assessments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

use App\Models\Assessments\AssessmentChecklistQuesAns;
use App\Models\Appointments\Appointment;

class AssessmentChecklistsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checklistId = $request->query('checklist_id');
        
        // Fetch the data with relationships
        $userData = AssessmentChecklistQuesAns::with(['appointment', 'mainTeacher', 'assistantTeacher'])
                    ->where('category_id', (int) $checklistId)
                    ->get();

        // Group data by appointment_id and process it
        $collections = $userData->groupBy('appointment_id')->map(function ($items) use ($checklistId) {
            $firstItem = $items->first();

            // Safely access relationships and handle potential nulls
            $appointment = $firstItem->appointment;
            $mainTeacher = $firstItem->mainTeacher;
            $assistantTeacher = $firstItem->assistantTeacher;

            $checklistTitle = (int) $checklistId === 1 
                ? "Functional Communication Checklist" 
                : "Autism Behavior Checklist (ABC Checklist)";

            // Check if all answers are numeric before summing
            $isNumeric = $items->every(fn($item) => is_numeric($item->answer));
            $sum = $isNumeric ? $items->sum('answer') : null;

            return [
                'total_questions' => $items->count(),
                'total_answers' => $items->filter(fn($item) => $item->answer !== null)->count(),
                'total_null_answers' => $items->filter(fn($item) => $item->answer === null)->count(),
                'total_sum_of_answers' => $sum,
                'assessment_date' => $firstItem->assessment_date,
                'appointment_id' => $appointment ? $appointment->id : null,
                'appointment_name' => $appointment 
                    ? '('.$appointment->student_id.')'.$appointment->name 
                    : 'N/A',
                'main_teacher_name' => $mainTeacher ? $mainTeacher->name : 'N/A',
                'assistant_teacher_name' => $assistantTeacher ? $assistantTeacher->name : 'N/A',
                'checklist_id' => (int) $checklistId,
                'checklist_title' => $checklistTitle ? $checklistTitle : 'N/A',
            ];
        });

        // Pass the processed collections to the view
        return view('assessment.common_checklists.list', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $checklistId = $request->query('checklist_id');
        // dd($checklistId);
        return view('assessment.common_checklists.add_checklist')
            ->with('checklistId', $checklistId)
            ->with('searchId', null);
    }

    public function search(Request $request)
    {
        // dd($request->all());
        $toolId = $request->input('tool_id');
        $searchId = $request->input('search_id');

        return view('assessment.common_tools.add_tool')
            ->with('toolId', $toolId)
            ->with('searchId', $searchId);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($assessment_checklist)
    {
        // dd('Show', $assessment_checklist);

        $checklistId = request()->query('checklist_id');
        $appointmentId = request()->query('appointmentId');
        $checklistTitle = request()->query('checklistTitle');

        // dd('Show', $assessment_checklist, $appointmentId, $checklistTitle, (int) $checklistId == 2);

        if((int) $checklistId == 1 ){
            $response = $this->reportForChecklist((int) $appointmentId, (int) $checklistId, $checklistTitle);
            return $response;
        }

        if((int) $checklistId == 2 ){
            $response = $this->reportForABCChecklist((int) $appointmentId, (int) $checklistId, $checklistTitle);
            return $response;
        }
    }  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('Edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('Destroy');
    }

    public function pendingList($tool_id)
    {
        $appointments = Appointment::whereHas('assessmentCategories', function ($query) use ($tool_id) {
            $query->where('assessment_category_id', $tool_id)
                    ->whereIn('appointment_assessment_category.status', ['Schedule', 'Processing']);
        })->whereHas('event_calendars', function ($query) use ($tool_id){
            $query->where('category_id', $tool_id)
                  ->where('event_type', 2);
        })->with([
            'assessmentCategories' => function ($query) use ($tool_id) {
                $query->where('assessment_category_id', $tool_id)
                        ->whereIn('appointment_assessment_category.status', ['Schedule', 'Processing']);
            },
            'event_calendars' => function ($query) use ($tool_id){
                $query->where('category_id', $tool_id)
                      ->where('event_type', 2)
                      ->with(['main_teacher', 'assistant_teacher']);
            },
        ])->paginate(10);

        // dd($appointments);

        return view('assessment.common_checklists.pending_list', compact('appointments'));
    }

    private function reportForChecklist($appointment_id, $category_id, $checklistTitle)
    {
        // Predefined answer groups
        $groups = ['Yes', 'No'];

        // Query data for 'Yes' and 'No'
        $data = AssessmentChecklistQuesAns::select('answer', DB::raw('COUNT(*) as count'))
            ->where('category_id', $category_id)
            ->where('appointment_id', $appointment_id)
            ->groupBy('answer')
            ->get()
            ->keyBy('answer'); // Convert to key-value pair for easy access

        // Initialize the groups with default values
        $formattedData = collect($groups)->mapWithKeys(function ($group) use ($data) {
            return [
                $group => [
                    'label' => $group,
                    'count' => $data->has($group) ? $data[$group]->count : 0,
                ]
            ];
        });

        // Find the group with the maximum count
        $maxCountGroup = $formattedData->max('count');
        $maxCountGroup = $formattedData->filter(function ($item) use ($maxCountGroup) {
            return $item['count'] === $maxCountGroup;
        })->first();

        // Pass the data to the view
        return view('assessment.common_checklists.functional_communication_checklist_report', compact(
            'checklistTitle',
            'category_id',
            'formattedData',
            'maxCountGroup'
        ));
    }

    private function reportForABCChecklist($appointment_id, $category_id, $checklistTitle)
    {
        // Predefined answer groups
        $groups = [0, 1, 2, 3, 4];
       
        $data = AssessmentChecklistQuesAns::select('answer', DB::raw('COUNT(*) as count'), DB::raw('SUM(answer) as sum'))
            ->where('category_id', $category_id)
            ->where('appointment_id', $appointment_id)
            ->groupBy('answer')
            ->get()
            ->keyBy('answer'); // Convert to key-value pair for easy access

        // Initialize the groups with default values
        $formattedData = collect($groups)->mapWithKeys(function ($group) use ($data) {
            return [
                $group => [
                    'label' => $group, // Numeric group initially
                    'count' => $data->has($group) ? $data[$group]->count : 0,
                    'sum' => $data->has($group) ? $data[$group]->sum : 0,
                ]
            ];
        });

        $labels = [
            0 => '0 = Never or rarely -> Unlikely behaviour associated with ASD',
            1 => '1 = Occasionally -> Monitor behaviour associated with ASD',
            2 => '2 = Sometimes -> At border risk behavioural associated with ASD',
            3 => '3 = Frequently -> Likely have behaviours associated with ASD',
            4 => '4 = Very frequently or always -> Most likely behaviours associated with autism spectrum disorder',
        ];
        
        $formattedData = $formattedData->map(function ($item, $key) use ($labels) {
            $item['label'] = $labels[$key]; // Replace numeric label with descriptive text
            return $item;
        });

        // Find max values
        $maxCountGroup = $formattedData->max('count');
        $maxSumGroup = $formattedData->max('sum'); 

        $maxCountGroup = $formattedData->filter(function ($item) use ($maxCountGroup) {
            return $item['count'] === $maxCountGroup;
        })->first();

        $maxSumGroup = $formattedData->filter(function ($item) use ($maxSumGroup) {
            return $item['sum'] === $maxSumGroup;
        })->first();

        return view('assessment.common_checklists.abc_checklist_report', compact('checklistTitle', 'category_id', 'formattedData', 'maxCountGroup', 'maxSumGroup'));
    }
}