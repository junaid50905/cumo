<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicineAdminRequest extends FormRequest
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
            'student_id' => 'nullable',
            'prescription_id' => 'nullable',
            'given_id' => 'nullable',
            'date' => 'nullable',
            'time' => 'nullable',
            'medicineAdmin.*' => 'nullable',
        ];
    }
}
