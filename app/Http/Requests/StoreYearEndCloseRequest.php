<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreYearEndCloseRequest extends FormRequest
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
            'warehouse_id' => 'nullable',
            'date' => 'nullable',
            'student_id' => 'nullable',
            'percent_field' => 'nullable',
            'basic_provident' => 'nullable',
            'note' => 'nullable',

        ];
    }
}
