<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplyForJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'                   => 'nullable',
            'date_of_birth'          => 'nullable',
            'mobile_number'          => 'nullable',
            'email_add'              => 'nullable',
            'experience'             => 'nullable',
            'currently_working'      => 'nullable',
            'academic_qualification' => 'nullable',
            'applying_for'           => 'nullable',
            'cv_upload'              => 'nullable',
            'is_company_employee'    => 'nullable',
            ];
    }
}
