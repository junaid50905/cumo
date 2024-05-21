<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentIncomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'project_id' => 'required',
            'student_id' => 'required',
            'date' => 'required',
            'details.*' => 'required',
            'amount.*' => 'required',
            'details.*.course_id' => 'required',
            'details.*.amount' => 'required',
        ];
    }
}