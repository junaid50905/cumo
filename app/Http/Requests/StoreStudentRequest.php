<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "code"                                                            => 'nullable',
            "name"                                                            => 'nullable',
            "dob"                                                             => 'nullable',
            "date_of_assessment"                                              => 'nullable',
            "nid"                                                             => 'nullable',
            "present_address"                                                 => 'nullable',
            "permanent_address"                                               => 'nullable',
            "diagnosis"                                                       => 'nullable',
            "suborno_card_no"                                                 => 'nullable',
            "photo"                                                           => 'nullable',
            "gender"                                                          => 'nullable',
            "blood_group"                                                     => 'nullable',
            "statuss"                                                          => 'nullable',
            "stage"                                                           => 'nullable',
            "approved_for_observation"                                        => 'nullable',
            "is_interested_in_job"                                            => 'nullable',
            "disability"                                                      => 'nullable',
            "work_interest"                                                   => 'nullable',
            "transport"                                                       => 'nullable',
            "device_name"                                                     => 'nullable',
            "prefer_work_area"                                                => 'nullable',
            "local_guardian"                                                  => 'nullable',
            "position"                                                        => 'nullable',
            "duration"                                                        => 'nullable',
            "skill_of_work"                                                   => 'nullable',
            "reasonable_accommodation"                                        => 'nullable',
            "device_use"                                                      => 'nullable',
            "qualification"                                                   => 'nullable',
            "training"                                                        => 'nullable',
            "organization"                                                    => 'nullable',
            "phone_number"                                                    => 'nullable',
            "cause_of_leave"                                                  => 'nullable',
        ];
    }
}
