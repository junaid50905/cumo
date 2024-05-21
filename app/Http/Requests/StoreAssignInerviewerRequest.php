<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssignInerviewerRequest extends FormRequest
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
         'job_title'         => 'nullable',
         'dept_id'           => 'nullable',
         'name'              => 'nullable',
         'applying_date'     => 'nullable',
         'applying_time'     => 'nullable',
         'interviewer_name'  => 'nullable',
        ];
    }
}
