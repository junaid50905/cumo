<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssessmentQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //You have to change authorize section
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "category_id"             => 'required',
            "sub_category_id"         => 'required',
            "name"                    => 'required',
            "is_reverse"              => 'nullable',
            "question_no"             => 'required',
        ];
    }
}
