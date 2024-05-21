<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReportingMemoRequest extends FormRequest
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
            'depertment'           => 'nullable',
            'job_contact_name'            => 'nullable',
            'designation'        => 'nullable',
            'joining_date'            => 'nullable',
            'search'         => 'nullable',
            'title'        => 'nullable',
            'notice_type'            => 'nullable',
            'Message'            => 'nullable',
        ];
    }
}
