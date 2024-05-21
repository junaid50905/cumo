<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequisitionRequest extends FormRequest
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
            'requisition_for'  => 'nullable',
            'job_title'        => 'nullable',
            'department_setup_id'  => 'nullable',
            'project_id'       => 'nullable',
            'job_type'         => 'nullable',
            'vacancy_for'      => 'nullable',
            'when_required'    => 'nullable',
            'requested_by'     => 'nullable',
            'responsibilities' => 'nullable',
            'requirements'     => 'nullable',
            'last_date'        => 'nullable',
            'new_position'     => 'nullable',
            'replacement'      => 'nullable',

        ];
    }
}
