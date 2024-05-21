<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentCalendarRequest extends FormRequest
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
                "appointment_id"                        => 'required',
                "event_type"                            => 'required',
                "main_teacher_department"               => 'required',
                "main_teacher_id"                       => 'required',
                "assistant_teacher_department"          => 'required',
                "assistant_teacher_id"                  => 'required',
                "event_title"                           => 'required',
                "event_medium_type"                     => 'required',
                "event_date"                            => 'required',
                "event_start_time"                      => 'required',
                "event_end_time"                        => 'required',
            ];

    }
}
