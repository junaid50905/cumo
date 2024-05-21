<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use App\Models\AssessmentQuestion;

trait QuestionCollectionTrait
{
    protected string $model = AssessmentQuestion::class;

    public function getQuestionCollectionAccordingSubCategory($categoryId) {
        $questions = $this->model::whereHas('subcategory', function ($query) use ($categoryId) {
            $query->where('category_id', $categoryId);
        })->with('subcategory')->get();
        
        $subcategoriesCollection = collect();
    
        foreach ($questions as $question) {
            $subcategory = $question->subcategory;
            
            if (!$subcategory) {
                continue;
            }
    
            // Create a collection for each subcategory if it doesn't exist
            if (!$subcategoriesCollection->has($subcategory->name)) {
                $subcategoriesCollection->put($subcategory->name, collect());
            }
    
            // Add the question to the subcategory's collection
            $subcategoriesCollection->get($subcategory->name)->push($question);
        }
    
        // Sort subcategories alphabetically by name
        $subcategoriesCollection = $subcategoriesCollection->sortKeys();
    
        return $subcategoriesCollection;
    }
}