<?php

namespace App\Http\Controllers\Assessments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

use App\Models\Assessments\AssessmentToolQuesAns;
use App\Models\Appointments\Appointment;

class AssessmentToolsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $toolId = $request->query('tool_id');
        
        // Fetch the data with relationships
        $userData = AssessmentToolQuesAns::with(['appointment', 'mainTeacher', 'assistantTeacher','category'])
                    ->where('category_id', (int) $toolId)
                    ->orderBy('assessment_date', 'desc')
                    ->get();
        // dd($userData);

        // Group data by appointment_id and process it
        $collections = $userData->groupBy('appointment_id')->map(function ($items) use ($toolId) {
            $firstItem = $items->first();

            // Safely access relationships and handle potential nulls
            $appointment = $firstItem->appointment;
            $mainTeacher = $firstItem->mainTeacher;
            $assistantTeacher = $firstItem->assistantTeacher;
            $toolTitle = $firstItem->category;

            return [
                'total_questions' => $items->count(),
                'total_answers' => $items->filter(fn($item) => $item->answer !== null)->count(),
                'total_null_answers' => $items->filter(fn($item) => $item->answer === null)->count(),
                'total_sum_of_answers' => $items->sum('answer'),
                'assessment_date' => $firstItem->assessment_date,
                'appointment_id' => $appointment ? $appointment->id : null,
                'appointment_name' => $appointment 
                    ? '('.$appointment->student_id.')'.$appointment->name 
                    : 'N/A',
                'main_teacher_name' => $mainTeacher ? $mainTeacher->name : 'N/A',
                'assistant_teacher_name' => $assistantTeacher ? $assistantTeacher->name : 'N/A',
                'tool_id' => $toolTitle ? $toolTitle->id : 1,
                'tool_title' => $toolTitle ? $toolTitle->full_name : 'N/A',
            ];
        });

        // Pass the processed collections to the view
        return view('assessment.common_tools.list', compact('collections'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $toolId = $request->query('tool_id');
        // dd($toolId);
        return view('assessment.common_tools.add_tool')
            ->with('toolId', $toolId)
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
    public function show($assessment_tool)
    {
        $appointmentId = request()->query('appointmentId');
        $toolTitle = request()->query('toolTitle');
        if((int) $assessment_tool <= 2 ){
            $response = $this->reportForPID5((int) $appointmentId, (int) $assessment_tool, $toolTitle);
            return $response;
        }
        dd('Show', $assessment_tool, $appointmentId);
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
        // $appointments = Appointment::whereHas('assessmentCategories', function ($query) use ($tool_id) {
        //     $query->where('assessment_category_id', $tool_id)
        //         ->where('appointment_assessment_category.status', 'Schedule'); 
        // })->with(['assessmentCategories' => function ($query) use ($tool_id) {
        //     $query->where('assessment_category_id', $tool_id)
        //         ->where('appointment_assessment_category.status', 'Schedule');
        // }])->get();

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

        return view('assessment.common_tools.pending_list', compact('appointments'));
    }

    private function reportForPID5($appointment_id, $category_id, $toolTitle){
        // $appointment_id = $id;
        // $category_id = 1; // Child Age 11-17

        $data = AssessmentToolQuesAns::with(['sub_category', 'question'])
            ->where('appointment_id', $appointment_id)
            ->where('category_id', $category_id)
            ->get();

        // Get total number of questions in the category with the same appointment_id
        $totalCategoryQuestionsSameAppointment = AssessmentToolQuesAns::where('category_id', $category_id)
            ->where('appointment_id', $appointment_id)
            ->count();

        // Get total number of answers in the category with the same appointment_id
        $totalCategoryAnswersSameAppointment = AssessmentToolQuesAns::where('category_id', $category_id)
            ->where('appointment_id', $appointment_id)
            ->whereNotNull('answer')
            ->count();

        // Create a collection grouped by sub_category name
        $collections = $data->groupBy('sub_category.name')->map(function ($items, $subCategoryName) use ($totalCategoryQuestionsSameAppointment, $totalCategoryAnswersSameAppointment) {
            // Total number of questions in the same category and subcategory
            $totalSubCategoryQuestions = $items->count();

            $allIds = $items->map(function ($item) {
                // Get the question number from the assessment_questions table
                $questionNo = $item->question->question_no;
                // Append "R" for questions with is_reverse flag set to true
                $suffix = $item->question->is_reverse ? 'R' : '';
                // Prefix the question ID with the question number
                return $questionNo . $suffix;
            })->implode(',');

            // Calculate the total sum of answer values
            $totalSum = $items->sum(function ($item) {
                return $item->answer;
            });

            $totalAnswer = $items->whereNotNull('answer')->count();
            $totalNotAnswer = $totalSubCategoryQuestions - $totalAnswer;

            $totalSubCategoryPercentage = round(($totalNotAnswer / $totalSubCategoryQuestions) * 100);
            $totalAnswerPercentage = round(($totalCategoryAnswersSameAppointment / $totalCategoryQuestionsSameAppointment) * 100);
            $totalUnansweredPercentage = 100 - $totalAnswerPercentage;

            return [
                'number_of_items_of_that_facet_pid_5' => $totalSubCategoryQuestions,
                'all_ids' => $allIds,
                'number_of_items_actually_answered' => $totalAnswer,
                'total_not_answer' => $totalNotAnswer,
                'partical_raw_score' => $totalSum,
                'total_unanswered_subcategory_percentage' => $totalSubCategoryPercentage,
                'total_questions_category' => $totalCategoryQuestionsSameAppointment,
                'total_answer_category_percentage' => $totalAnswerPercentage,
                'total_unanswered_category_percentage' => $totalUnansweredPercentage,
            ];
        });

        // dd($collections);

        // Calculate average facet scores and find the highest average score
        $highestAverageTraitFacetScore = 0;
        $highestAverageTraitFacet = '';

        $collections->each(function ($data, $subCategoryName) use (&$highestAverageTraitFacetScore, &$highestAverageTraitFacet) {
            $averageFacetScore = round($data['partical_raw_score'] / $data['number_of_items_of_that_facet_pid_5']);
            if ($averageFacetScore > $highestAverageTraitFacetScore) {
                $highestAverageTraitFacetScore = $averageFacetScore;
                $highestAverageTraitFacet = $subCategoryName;
            }
        });

        // dd($highestAverageTraitFacet ,$highestAverageTraitFacetScore);

        $total_average_facet_scores_negative_affect = 0;
        $total_average_facet_scores_detachment = 0;
        $total_average_facet_scores_antagonism = 0;
        $total_average_facet_scores_disinhibition = 0;
        $total_average_facet_scores_psychoticism = 0;

        $facet_count_negative_affect = 0;
        $facet_count_detachment = 0;
        $facet_count_antagonism = 0;
        $facet_count_disinhibition = 0;
        $facet_count_psychoticism = 0;

        foreach($collections as $collection => $data){
            if($collection === 'Emotional Lability' || $collection === 'Anxiousness' || $collection === 'Separation Insecurity'){
                if($data['number_of_items_of_that_facet_pid_5'] != 0 && $data['total_unanswered_subcategory_percentage'] < 25){
                    $total_average_facet_scores_negative_affect += $data['partical_raw_score'] / $data['number_of_items_of_that_facet_pid_5'];
                    $facet_count_negative_affect++;
                }
            }

            if($collection === 'Withdrawal' || $collection === 'Anhedonia' || $collection === 'Intimacy Avoidance'){
                if($data['number_of_items_of_that_facet_pid_5'] != 0 && $data['total_unanswered_subcategory_percentage'] < 25){
                    $total_average_facet_scores_detachment += $data['partical_raw_score'] / $data['number_of_items_of_that_facet_pid_5'];
                    $facet_count_detachment++;
                }
            }

            if($collection === 'Manipulativeness' || $collection === 'Deceitfulness' || $collection === 'Grandiosity'){
                if($data['number_of_items_of_that_facet_pid_5'] != 0 && $data['total_unanswered_subcategory_percentage'] < 25){
                    $total_average_facet_scores_antagonism += $data['partical_raw_score'] / $data['number_of_items_of_that_facet_pid_5'];
                    $facet_count_antagonism++;
                }
            }

            if($collection === 'Irresponsibility' || $collection === 'Impulsivity' || $collection === 'Distractibility'){
                if($data['number_of_items_of_that_facet_pid_5'] != 0 && $data['total_unanswered_subcategory_percentage'] < 25){
                    $total_average_facet_scores_disinhibition += $data['partical_raw_score'] / $data['number_of_items_of_that_facet_pid_5'];
                    $facet_count_disinhibition++;
                }
            }

            if($collection === 'Unusual Beliefs & Experiences' || $collection === 'Eccentricity' || $collection === 'Perceptual Dysregulation'){
                if($data['number_of_items_of_that_facet_pid_5'] != 0 && $data['total_unanswered_subcategory_percentage'] < 25){
                    $total_average_facet_scores_psychoticism += $data['partical_raw_score'] / $data['number_of_items_of_that_facet_pid_5'];
                    $facet_count_psychoticism++;
                }
            }
        }
      
        $average_negative_affect = $facet_count_negative_affect ? ($total_average_facet_scores_negative_affect / $facet_count_negative_affect) / 3 : 0;
        $average_detachment = $facet_count_detachment ? ($total_average_facet_scores_detachment / $facet_count_detachment) / 3 : 0;
        $average_antagonism = $facet_count_antagonism ? ($total_average_facet_scores_antagonism / $facet_count_antagonism) / 3 : 0;
        $average_disinhibition = $facet_count_disinhibition ? ($total_average_facet_scores_disinhibition / $facet_count_disinhibition) / 3 : 0;
        $average_psychoticism = $facet_count_psychoticism ? ($total_average_facet_scores_psychoticism / $facet_count_psychoticism) / 3 : 0;

        // Find the highest average score
        $highest_average_trait_domain_score = max($average_negative_affect, $average_detachment, $average_antagonism, $average_disinhibition, $average_psychoticism);
        $highest_average_trait_domain = '';

        if ($highest_average_trait_domain_score == $average_negative_affect) {
            $highest_average_trait_domain = 'Negative Affect';
        } elseif ($highest_average_trait_domain_score == $average_detachment) {
            $highest_average_trait_domain = 'Detachment';
        } elseif ($highest_average_trait_domain_score == $average_antagonism) {
            $highest_average_trait_domain = 'Antagonism';
        } elseif ($highest_average_trait_domain_score == $average_disinhibition) {
            $highest_average_trait_domain = 'Disinhibition';
        } elseif ($highest_average_trait_domain_score == $average_psychoticism) {
            $highest_average_trait_domain = 'Psychoticism';
        }

        // dd($total_average_facet_scores_negative_affect, $total_average_facet_scores_detachment, $total_average_facet_scores_antagonism, $total_average_facet_scores_disinhibition, $total_average_facet_scores_psychoticism);
        // dd($highest_average_category, $average_negative_affect);
        // dd($collections);

        return view('assessment.common_tools.pid_five_report', compact(
            'toolTitle',
            'category_id',
            'collections',
            'total_average_facet_scores_negative_affect', 
            'average_negative_affect',
            'total_average_facet_scores_detachment',
            'average_detachment',
            'total_average_facet_scores_antagonism',
            'average_antagonism',
            'total_average_facet_scores_disinhibition',
            'average_disinhibition', 
            'total_average_facet_scores_psychoticism',
            'average_psychoticism',
            'highestAverageTraitFacet',
            'highest_average_trait_domain'
            )
        );
    }
}