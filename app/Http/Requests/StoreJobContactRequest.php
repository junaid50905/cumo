<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'job_title'           => 'nullable',
            'depertment'            => 'nullable',
            'applicant_name'        => 'nullable',
            'workStation'            => 'nullable',
            'start_date'         => 'nullable',
            'log'        => 'nullable',
            'basic_salary'            => 'nullable',
            'house_allowence'            => 'nullable',
            'madical_allowance'            => 'nullable',
            'total'            => 'nullable',
        ];
    }
}
