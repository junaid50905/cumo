<?php

namespace App\Http\Controllers\Assessments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use App\Models\Appointment;
use App\Models\Assessments\AssessmentToolQuesAns;
use App\Utility\ProjectConstants;
use App\Repositories\UserRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\Assessments\AssessmentPIDChildRepository;

class AssessmentPIDChildController extends Controller
{
    
    private UserRepository $userRepository;
    private DepartmentRepository $departmentRepository;
    private AssessmentPIDChildRepository $assPIDChildRepository;

    public function __construct(UserRepository $userRepository, DepartmentRepository $departmentRepository, AssessmentPIDChildRepository $assPIDChildRepository)
    {
        $this->userRepository = $userRepository;
        $this->departmentRepository = $departmentRepository;
        $this->assPIDChildRepository = $assPIDChildRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData = AssessmentToolQuesAns::with(['appointment', 'mainTeacher', 'assistantTeacher'])
                    ->orderBy('assessment_date', 'desc')
                    ->get();

        $collections = $userData->groupBy('appointment_id')->map(function ($items) {
            return [
                'total_questions' => $items->count(),
                'total_answers' => $items->filter(function ($item) {
                    return $item->answer !== null;
                })->count(),
                'total_null_answers' => $items->filter(function ($item) {
                    return $item->answer === null;
                })->count(),
                'total_sum_of_answers' => $items->sum('answer'),
                'assessment_date' => $items->first()->assessment_date,
                'appointment_id' => $items->first()->appointment->id,
                'appointment_name' => $items->first()->appointment->name,
                'main_teacher_name' => $items->first()->mainTeacher->name,
                'assistant_teacher_name' => $items->first()->assistantTeacher->name
            ];
        });

        // dd($collections);

        return view('assessment.pid-five-child.show', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assessment.pid-five-child.create');
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
    public function show($id)
    {
        $appointment_id = $id;
        $category_id = 1; // Child Age 11-17

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
        return view('assessment.pid-five-child.reports', compact(
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
    
    public function assessmentReports()
    {
        // dd("Ok");
        return view('assessment.pid-five-child.report_list');
    }


    public function search(Request $request)
    {
        $searchData = $request->input('search_id');

        return view('assessment.pid-five-child.search')
            ->with('searchData', $searchData);
    }
    
    public function searchReport(Request $request)
    {
        dd("Search Report");
        $searchData = $request->input('search_id');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
