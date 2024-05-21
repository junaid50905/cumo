<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAssessmentQuestionRequest;
use App\Http\Requests\UpdatePreAdmissionPaymentRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Repositories\SetupAssessmentQuestionRepository;
use App\Traits\DynamicAssessmentTableCreateTrait;

class SetupQuestionController extends Controller
{
    use DynamicAssessmentTableCreateTrait;

    private SetupAssessmentQuestionRepository $assessmentRepository;

    public function __construct(SetupAssessmentQuestionRepository $assessmentRepository) {
        $this->assessmentRepository = $assessmentRepository;
    }

    public function index(){
        $perPage = 10;
        $questions = $this->assessmentRepository->getAllData($perPage);
        dd($questions);
        return view('assessment.setup-assessment.show_questions', compact('questions'));
    }

    public function create(){
        $categories = $this->assessmentRepository->getCategories();
        $subCategories = $this->assessmentRepository->getSubCategories();

        // Update dynamic tables
        $categoryId = 1;
        $prefix = "Assessment";
        $this->updateDynamicTables($prefix, $categoryId);
        
        // dd($categories, $subCategories);
        return view('assessment.setup-assessment.add_question', compact('categories', 'subCategories'));
    }

    public function store(StoreAssessmentQuestionRequest $request){
        try {
            $userId = Auth::id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;

            // dd($validatedData);

            // Update dynamic tables
            $categoryId = 1;
            $prefix = "Assessment";
            $this->updateDynamicTables($prefix, $categoryId);
            
            $message = $this->assessmentRepository->create($validatedData);
        
            return redirect()->back()->with('success', $message);

        } catch (\Throwable $th) {
            Session::flash('warning','Something went wrong : '.$th->getMessage());
            return redirect()->back();
        }
    } 
    
    public function show(){

    }

    public function search(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
