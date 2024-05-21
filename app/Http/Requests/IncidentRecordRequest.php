<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidentRecordRequest extends FormRequest
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
            "collection_date"            => 'nullable',
            "teacher_id"                 => 'nullable',
            "candidate_id"               => 'nullable',
            "incident_type"              => 'nullable',
            "date_and_time"              => 'nullable',
            "setting"                    => 'nullable',
            "duration"                   => 'nullable',
            "action_taken"               => 'nullable',
            "previous_causes"            => 'nullable',
        ];
    }
}
