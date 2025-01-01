<?php

namespace App\Http\Requests\Appointments;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
                "student_id"                                                      => 'required|unique:appointments,student_id',
                "name"                                                            => 'required',
                "father_name"                                                     => 'nullable',
                "mother_name"                                                     => 'nullable',
                "parent_email"                                                    => 'nullable',
                "present_address"                                                 => 'nullable',
                "permanent_address"                                               => 'nullable',
                "diagnosis"                                                       => 'nullable',
                "gender"                                                          => 'nullable',
                "blood_group"                                                     => 'nullable',
                "dob"                                                             => 'nullable',
                "age"                                                             => 'required',
                "phone_number"                                                    => 'required',
                "interview_date"                                                  => 'nullable',
            ];

    }
}
