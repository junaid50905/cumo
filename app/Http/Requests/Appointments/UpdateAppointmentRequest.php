<?php

namespace App\Http\Requests\Appointments;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
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
            "nid_birth"                                                       => 'nullable',
            "age"                                                             => 'required',
            "phone_number"                                                    => 'required',
            "emergency_contact_one"                                           => 'nullable',
            "emergency_contact_two"                                           => 'nullable',
            "emergency_contact_three"                                         => 'nullable',
            "suborno_nagorik_card"                                            => 'nullable',
            "suborno_nagorik_card_number"                                     => 'nullable',
            "interview_date"                                                  => 'nullable',
        ];
    }
}
