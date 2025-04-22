<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\Setup\StoreQuestionRequest;
use App\Repositories\Setup\SetupQuestionRepository;
use App\Traits\DynamicAssessmentTableCreateTrait;

class SetupQuestionController extends Controller
{
    use DynamicAssessmentTableCreateTrait;

    private SetupQuestionRepository $setupQuestionRepository;

    public function __construct(SetupQuestionRepository $setupQuestionRepository) {
        $this->setupQuestionRepository = $setupQuestionRepository;
    }

    public function index(){
        $perPage = 10;
        $questions = $this->setupQuestionRepository->getAllData($perPage);
        // dd($questions);
        return view('assessment.setup-assessment.show_questions', compact('questions'));
    }

    public function create(){
        $categories = $this->setupQuestionRepository->getCategories();
        $subCategories = $this->setupQuestionRepository->getSubCategories();

        // dd($categories, $subCategories);
        return view('assessment.setup-assessment.add_question', compact('categories', 'subCategories'));
    }

    public function store(StoreQuestionRequest $request){
        try {
            $userId = Auth::id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;

            // dd($validatedData);

            $message = $this->setupQuestionRepository->create($validatedData);

            // dd($message);
        
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
