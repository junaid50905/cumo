<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffAndWorkplaceInspectionRequest extends FormRequest
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
            "collection_date"                                                                        => 'nullable',
            "teacher_id"                                                                             => 'nullable',
            "visited_place"                                                                          => 'nullable',
            "name_surname"                                                                           => 'nullable',
            "date_of_joining_the_employee_workplace"                                                 => 'nullable',
            "monthly_salary"                                                                         => 'nullable',
            "information_about"                                            => 'nullable',
            "how_many_hours_a_day"              => 'nullable',
            "what_is_the_title_of"            => 'nullable',
            "this_work_hour_is_correct"                                 => 'nullable',
            "does_the_target_employee"                         => 'nullable',
            "is_the_target_worker_wearing"                           => 'nullable',
            "is_the_target_staff_clean_enough"                                                       => 'nullable',
            "is_the_target_worker_getting_appropriate"             => 'nullable',
            "is_there_regular_communication_between" => 'nullable',
            "how_to_communicate_with_colleagues"                                    => 'nullable',
            "what_is_the_overall"                                  => 'nullable',
            "details"                                                                                => 'nullable',
            "recommend_comments"                                                                     => 'nullable',
            "suggesstion"                                                                            => 'nullable',
            "signature_and_date_of_visitor"                                                          => 'nullable',
            "designation"                                                                            => 'nullable',
            "date_two"                                                                                   => 'nullable',
        ];
    }
}
